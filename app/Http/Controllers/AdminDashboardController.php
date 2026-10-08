<?php
// app/Http/Controllers/AdminDashboardController.php
namespace App\Http\Controllers;

use App\Models\User;

class AdminDashboardController extends Controller
{
    public function index()
    {
        // Fetch all users (or paginate as needed)
        $users = User::all(); // Or paginate: User::paginate(10);

        // Return the admin dashboard view with the users data
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



