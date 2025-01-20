<?php
namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\BrandImage;

class Homecontroller extends Controller
{
    public function index()
    {
        // Eager load the images for each brand
        $Brands = Brand::with('images')->get();

        // Get the main image for each brand
        foreach ($Brands as $brand) {
            $brand->mainImage = $brand->images->first(); // Get the first image (main image)
        }

        return view('projects', compact('Brands'));
    }

    public function showdetails($id)
    {
        // Find the brand and eager load the related images
        $brand = Brand::with('images')->findOrFail($id);
        
        // Get the first image as the main image
        $mainImage = $brand->images->first();
        
        // Get all the brand images (not just the main image)
        $brandimages = $brand->images;
        
        // Pass the brand, main image, and all images to the view
        return view('brandditails', compact('brand', 'mainImage', 'brandimages'));
    }
    
}

