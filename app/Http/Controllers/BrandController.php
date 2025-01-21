<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::all();
        return view('dashboard.brands.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('dashboard.brands.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'lunched_at' => 'required|date',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048', // Main image
            'images.*' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048', // Allow multiple images
            'category_id' => 'required|exists:categories,id',
        ]);
    
        // Save the brand first
        $brand = Brand::create([
            'name' => $validatedData['name'],
            'lunched_at' => $validatedData['lunched_at'],
            'description' => $validatedData['description'],
            'category_id' => $validatedData['category_id'],
        ]);
    
        // Handle the main image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('brand_images', 'public');
            $brand->image = $imagePath;  // Save the main image path
            $brand->save();
        }

        // Handle the multiple image uploads
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                // Store the image and get the path
                $imagePath = $image->store('brand_images', 'public');
    
                // Store the image in the brand_images table
                \App\Models\BrandImage::create([
                    'brand_id' => $brand->id,
                    'image_path' => $imagePath,
                ]);
            }
        }
    
        return redirect()->route('brands.index')->with('success', 'Brand created successfully with images!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Retrieve the brand by its ID and eager load the related images
        $brand = Brand::with('images')->findOrFail($id);
    
        // Pass the brand data to the view
        return view('dashboard.brands.show', compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $brand = Brand::findOrFail($id);
        $categories = Category::all(); // Fetch categories for the dropdown
        return view('dashboard.brands.edit', compact('brand', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brand $brand)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'lunched_at' => 'required|date',
            'category_id' => 'required|exists:categories,id',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048', // Main image
            'images' => 'nullable|array', // Validate array of images
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Optional image upload
        ]);

        // Handle main image upload
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($brand->image && Storage::disk('public')->exists($brand->image)) {
                Storage::disk('public')->delete($brand->image);
            }

            // Store the new image
            $imagePath = $request->file('image')->store('uploads/brands', 'public');
            $brand->image = $imagePath;
        }

        // Handle multiple image uploads
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('brand_images', 'public');
                $brand->images()->create([
                    'image_path' => $imagePath,
                ]);
            }
        }

        // Update the brand details
        $brand->name = $request->name;
        $brand->lunched_at = $request->lunched_at;
        $brand->description = $request->description;
        $brand->category_id = $request->category_id;
        $brand->save();

        return redirect()->route('brands.index')->with('success', 'Brand updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        // Delete all associated brand images
        foreach ($brand->images as $brandImage) {
            if (Storage::disk('public')->exists($brandImage->image_path)) {
                Storage::disk('public')->delete($brandImage->image_path);
            }
            $brandImage->delete(); // Delete the image record
        }

        // Delete the brand's main image if it exists
        if ($brand->image && Storage::disk('public')->exists($brand->image)) {
            Storage::disk('public')->delete($brand->image);
        }

        // Delete the brand
        $brand->delete();

        return redirect()->route('brands.index')->with('success', 'Brand deleted successfully!');
    }
}
