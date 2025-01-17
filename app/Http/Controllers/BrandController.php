<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Models\Category;
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
        return view('dashboard.brands.create', compact('categories'));    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data and assign it to $validatedData
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'lunched_at' => 'required|date',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'category_id' => 'required|exists:categories,id',
        ]);
    
        // Handle file upload if an image is provided
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('brand_images', 'public');
        }
    
        // Save the brand to the database
        \App\Models\Brand::create([
            'name' => $validatedData['name'],
            'lunched_at' => $validatedData['lunched_at'],
            'description' => $validatedData['description'],
            'image' => $imagePath,
            'category_id' => $validatedData['category_id'],
        ]);
    
        // Redirect back with a success message
        return redirect()->route('brands.index')->with('success', 'Brand created successfully!');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
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
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Optional image upload
        ]);

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($brand->image && Storage::disk('public')->exists($brand->image)) {
                Storage::disk('public')->delete($brand->image);
            }

            // Store the new image
            $imagePath = $request->file('image')->store('uploads/brands', 'public');
            $brand->image = $imagePath;
        }

        // Update brand details
        $brand->name = $request->name;
        $brand->lunched_at = $request->lunched_at;
        $brand->description = $request->description;
        $brand->save();

        return redirect()->route('brands.index')->with('success', 'Brand updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        // Delete the brand's image if it exists
        if ($brand->image && Storage::disk('public')->exists($brand->image)) {
            Storage::disk('public')->delete($brand->image);
        }

        // Delete the brand
        $brand->delete();

        return redirect()->route('brands.index')->with('success', 'Brand deleted successfully!');
    }
}
