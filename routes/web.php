<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BrandImageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Home route
Route::get('/', function () {
    return view('mainpage'); // View for the home page
})->name('home');
Route::get('/about', function () {
    return view('about');

});
Route::get('/services', function () {
    return view('servicespage');

});

Route::get('/ourclinent', function () {
    return view('ourclinets');

});
Route::get('/projects', function () {
    return view('projects');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/projects', [Homecontroller::class, 'index']);

Route::get('/brand/{id}', [Homecontroller::class, 'showdetails'])->name('brand.showdetails');

// Admin dashboard route (protected with 'auth' middleware)
Route::get('/admin', function () {
    return view('dashboard.main'); // View for the admin dashboard
})->name('dashboard')->middleware('auth');

// Login page route
Route::get('/login', function () {
    return view('login'); // View for the login page
})->name('login')->middleware('guest');

// Handle login form submission
Route::post('/login', function (Request $request) {
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();     // Regenerate the session to prevent fixation attacks
        return redirect()->route('dashboard'); // Correctly using the named route 'dashboard'
    }

    // If login fails
    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ])->onlyInput('email');
});

// Handle logout
Route::post('/logout', function (Request $request) {
    Auth::logout();                         // Logout the user
    $request->session()->invalidate();      // Invalidate the session
    $request->session()->regenerateToken(); // Regenerate CSRF token
    return redirect()->route('home');       // Redirect to the login page with the named route
})->name('logout');

// Resource controller for managing users
Route::resource('users', UserController::class)->middleware('auth'); // Protect user routes with 'auth' middleware

Route::resource('categories', CategoryController::class);

// Correct: using Route::resource to automatically generate all resource routes
Route::resource('brands', BrandController::class);
Route::post('/contact', [ContactController::class, 'sendEmail'])->name('contact.send');

Route::get('brandimage/{id}/upload', [BrandImageController::class, 'index']);
Route::post('/brand/{id}/upload-images', [BrandImageController::class, 'upload'])->name('brandimage.upload');
Route::delete('brand_img/{brandId}/delete/{imageId}', [BrandImageController::class, 'destroy'])->name('brandimage.delete');
