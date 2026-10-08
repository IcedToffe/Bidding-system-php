<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;



class UserController extends Controller
{
    
    public function updateAvatar(Request $request)
    {
        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $user = Auth::user();
    
        if ($request->hasFile('avatar')) {
            // Store the avatar in the 'avatars' directory within 'public'
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
    
            // Delete the old avatar if it exists
            if ($user->avatar_url && Storage::exists('public/' . $user->avatar_url)) {
                Storage::delete('public/' . $user->avatar_url);
            }
    
            // Save the new avatar URL to the database
            $user->avatar_url = $avatarPath;
            $user->save();
    
            // Return the new avatar URL in a JSON response
            return response()->json([
                'success' => true,
                'avatar_url' => asset('storage/' . $avatarPath),
            ]);
        }
    
        return response()->json(['success' => false, 'error' => 'No file selected']);
    }

    public function getUserRegistrationStats()
{
    $userStats = DB::table('users')
        ->select(DB::raw('DATE(created_at) as date'), DB::raw('COUNT(*) as count'))
        ->groupBy('date')
        ->orderBy('date', 'ASC')
        ->get();

    return response()->json($userStats);
}
}