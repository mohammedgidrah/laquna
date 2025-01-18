<?php
namespace App\Http\Controllers;

use App\Models\Brand;

class Homecontroller extends Controller
{
    public function index()
    {
        $Brands = Brand::all();
        return view('projects', compact('Brands'));
    }

    public function showdetails($id)
    {
        $brand = Brand::findOrFail($id);
        return view('brandditails', compact('brand'));
    }

}
