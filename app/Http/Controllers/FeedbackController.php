<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Feedback;
use App\Models\Feedbackwebsite;

class FeedbackController extends Controller
{
    public function index()
    {
        
        //     // Validate and store feedback
        //     $request->validate([
        //         'message' => 'required|string|max:1000',
        //     ]);
    
        //     Feedback::create([
        //         'message' => request->message,
        //         'user_id' => auth()->id(), // Assuming users are authenticated
        //     ]);
        // // // Fetch all feedback from the database
        // // $feedback = Feedback::with('user')->get(); // Eager load the user relation

        // // Pass feedback data to the view
        // return view('admin.feedback', compact('feedback'));
    }


}


