<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\BrandImage;
use Illuminate\Support\Facades\Storage;

class BrandImageController extends Controller
{
    public function index($brandId)
    {
        $brand = Brand::findOrFail($brandId);
        $multiplebrandimages  = BrandImage::where('brand_id', $brandId)->get(); // Get images related to the brand
        return view('dashboard.brands.show', compact('brand', 'multiplebrandimages'));
    }
    public function upload(Request $request, int $id)
    {
        $request->validate([
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $brandimages = Brand::findOrFail($id);
        $imageData = [];

        // Check if files are uploaded
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $key => $file) {
                $extension = $file->getClientOriginalExtension();
                $filename = $key . '-' . time() . '.' . $extension;

                // Store the image in the 'public' disk and get the relative path
                $path = $file->storeAs('brand_images', $filename, 'public');
                
                // Prepare the image data to insert into the database
                $imageData[] = [
                    'brand_id' => $brandimages->id,
                    'image_path' => $path, // Store the relative path
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
        }

        // Insert the image data into the database
        BrandImage::insert($imageData);

        return redirect()->back()->with('success', 'Images uploaded successfully!');
    }
    public function destroy($brandId, $imageId)
    {
        // Find the image using the imageId
        $brandimage = BrandImage::findOrFail($imageId);
        
        // Optionally, you can check if the image belongs to the specified brand
        $brand = Brand::findOrFail($brandId);
        
        // Delete the image
        $brandimage->delete();
    
        // Redirect back with a success message
        return redirect()->back()->with('success', 'Image deleted successfully!');
    }
    
    
}
