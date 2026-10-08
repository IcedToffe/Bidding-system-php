<?php

namespace App\Http\Controllers;

use App\Models\Feedbackwebsite;
use Illuminate\Http\Request;

class FeedbackWebsiteController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:1000',
            'rating' => 'required|integer|between:1,5', // Make sure rating is between 1 and 5

        ]);

        Feedbackwebsite::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'rating' => $request->rating,  // Store the rating
            'user_id' => auth()->check() ? auth()->id() : null, // Include user_id if logged in

        ]);

        return back()->with('success', 'Thank you for your feedback! We will get back to you soon.');
    }

    public function showfeed()
    {
        // Fetch feedbacks along with the ratings for the users
    $feed = Feedbackwebsite::all();

    // Calculate the total feedbacks, good feedbacks, and bad feedbacks
    $totalFeedbacks = $feed->count();
    $goodFeedbacks = $feed->where('rating', '>=', 4)->count();
    $badFeedbacks = $totalFeedbacks - $goodFeedbacks;

    // Pass the data to the Blade view
    return view('admin.feedbackwebsiteadmin', compact('feed', 'totalFeedbacks', 'goodFeedbacks', 'badFeedbacks'));
    }
}



