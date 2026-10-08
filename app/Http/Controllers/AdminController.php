<?php

namespace App\Http\Controllers;

use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all(); // Fetch all users
        return view('admin.dashboard', compact('users'));
    }

    public function dashboard()
    {
        // Get the count of all users
        $userCount = User::count();

        // Optionally, you can also get the list of users (if needed)
        $users = User::all();  // or User::paginate(10) if you want pagination

        // Pass the data to the view
        return view('admin.dashboard', compact('userCount', 'users'));
    }
}

