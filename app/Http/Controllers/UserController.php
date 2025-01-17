<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('dashboard.users.index', compact('users'));
    }

    public function trashed(Request $request)
    {
        $totaltrashedUsers = User::onlyTrashed()->count();

        // Fetch trashed users with pagination
        $users = User::onlyTrashed()->paginate(5);

        return view('dashboard.users.trashed', compact('users', 'totaltrashedUsers'));
    }

    // Restore a soft deleted user
    public function restore($id)
    {
        $user = User::onlyTrashed()->findOrFail($id);
        $user->restore();

        return redirect()->route('users.trashed')->with('success', 'User restored successfully.');
    }

    // Permanently delete a user
    public function forceDelete($id)
    {
        $user = User::onlyTrashed()->findOrFail($id);
        $user->forceDelete();
        // Define the path to the default image
        $defaultImagePath = 'uploads/usersprofiles/defaultimage/userimage.png';

        // Delete the user's image if it exists and is not the default image
        if ($user->image && $user->image !== $defaultImagePath && File::exists(public_path("storage/{$user->image}"))) {
            File::delete(public_path("storage/{$user->image}"));
        }

        return redirect()->route('users.trashed')->with('success', 'User permanently deleted.');
    }

    public function create()
    {
        // Show the form to create a new user
        return view('dashboard.users.create');
    }
    public function show($id)
    {
        $user = User::onlyTrashed()->findOrFail($id); // Fetch the trashed user by ID
        return view('dashboard.users.trashed', compact('user'));
    }
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
             'email' => 'required|email|unique:users,email,',
             'password' => [
                'nullable',
                'string',
                'min:8', // Minimum length
                'regex:/[a-z]/', // At least one lowercase letter
                'regex:/[A-Z]/', // At least one uppercase letter
                'regex:/[0-9]/', // At least one number
                'regex:/[\W_]/', // At least one special character
            ],
        ], [
            'password.regex' => 'Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, one number, and one special character.',
        ]);

        // if ($request->hasFile('image')) {
        //     $imagePath = $request->file('image')->store('uploads/usersprofiles', 'public');
        // }

        // Create a new user
        User::create([

            'name' => $request->name,
             'email' => $request->email,
             'password' => bcrypt($request->password),
         ]);

        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    public function edit($id)
    {
        $users = User::findOrFail($id); // Fetch the user by ID
        return view('dashboard.users.edit', compact('users')); // Pass the user to the view
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'address' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'role' => 'required|in:admin,user',
        ]);

        $user = User::findOrFail($id);
        $defaultImagePath = 'uploads/usersprofiles/defaultimage/userimage.png';

        // Handle file upload if a new image is provided
        if ($request->hasFile('image')) {
            // Delete old image if it exists and is not the default image
            if ($user->image && $user->image !== $defaultImagePath && Storage::disk('public')->exists($user->image)) {
                Storage::disk('public')->delete($user->image); // Deletes only non-default images
            }

            // Store the new image
            $imagePath = $request->file('image')->store('uploads/usersprofiles', 'public');
            $user->image = $imagePath; // Update the user's image path
        }

        // Update user details
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->role = $request->role;

        // Only update password if provided
        if ($request->filled('password')) {
            $user->password = bcrypt($request->password); // Hash the new password
        }

        // Save the changes
        $user->save();

        return redirect()->route('users.index')->with('success', 'Profile updated successfully!');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
    
        return redirect()->route('users.index')->with('success', 'User deleted successfully!');
    }

}
