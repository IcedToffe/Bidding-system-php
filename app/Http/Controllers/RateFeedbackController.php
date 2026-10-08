<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Import Auth for getting user info
use App\Models\Feedback; // Import Feedback model

class RateFeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.ratefeedback');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
                // Validate the incoming data
                $request->validate([
                    'rating' => 'required|integer|min:1|max:10',
                    'feedback' => 'required|string|max:500',
                ]);
        
                // Get the authenticated user's ID
                $userId = Auth::id(); // Get the current logged-in user's ID
        
                // Process the feedback data (store in the database)
                Feedback::create([
                    'user_id' => $userId,
                    'rating' => $request->input('rating'),
                    'feedback' => $request->input('feedback'),
                ]);
        
                // Return a response
                return redirect()->route('ratefeedback')->with('success', 'Thank you for your feedback!');
            
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
