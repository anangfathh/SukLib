<?php

namespace App\Http\Controllers\Member;


use App\Models\User;
use App\Models\BookLoan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = Auth::user();
        $recents = BookLoan::where('user_id', auth()->user()->id)->count();
        return view('member.profile.index', compact('profiles', 'recents'));
    }

    public function update(Request $request, $user_id)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user_id,
            'gender' => 'required|in:L,P',
            'tanggal_lahir' => 'required|date',
            'address' => 'required|string|max:255',
            'no_telp' => 'required|string|max:15',
            'user_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
            // Add more validation rules for other fields as needed
        ]);

        // Find the user by ID
        $user = User::findOrFail($user_id);

        // Update user data
        $user->name = $request->name;
        $user->email = $request->email;
        $user->gender = $request->input('gender');
        $user->tanggal_lahir = $request->input('tanggal_lahir');
        $user->address = $request->input('address');
        $user->no_telp = $request->input('no_telp');

        if ($request->hasFile('user_image')) {
            $image = $request->file('user_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public', $imageName); // Store the image in the storage directory
            $user->user_image = $imageName; // Update the user's profile image field
        }
        // Add more fields and update logic as needed

        // Save the updated user data
        $user->save();

        // Redirect back to the profile page with a success message
        return redirect()->route('member.profile.index')->with('success', 'Profile updated successfully');
    }
}
