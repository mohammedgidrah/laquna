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
            'images' => 'required|array', // Ensure images is an array
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:51200', // 50MB limit
        ]);
    
        $brand = Brand::findOrFail($id);
        $imageData = [];
    
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $key => $file) {
                $filename = $key . '-' . time() . '.' . $file->getClientOriginalExtension();
                $destinationPath = public_path('brand_images'); // Regular public folder
    
                // Ensure directory exists
                if (!file_exists($destinationPath)) {
                    mkdir($destinationPath, 0777, true);
                }
    
                // Move file to public directory
                $file->move($destinationPath, $filename);
    
                // Insert image path into database
                $imageData[] = [
                    'brand_id' => $brand->id,
                    'image_path' => "brand_images/$filename", // Accessible via URL
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
    
            // Insert images in bulk
            BrandImage::insert($imageData);
        }
    
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
    
    public function setMainImage(Request $request, $brandId)
{
    $request->validate([
        'image_id' => 'required|exists:brand_images,id',
    ]);

    // Find the brand and the selected image
    $brand = Brand::findOrFail($brandId);
    $brandImage = BrandImage::where('id', $request->image_id)
                            ->where('brand_id', $brandId)
                            ->firstOrFail();

    // Update the brand's main_image field
    $brand->update([
        'main_image' => $brandImage->image_path,
    ]);

    return redirect()->back()->with('success', 'Main image updated successfully!');
}

}
