<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    // Store a new comment
    public function store(Request $request)
    {
        $validated = $request->validate([
            'artwork_id' => 'required|exists:artworks,id',
            'content' => 'required|string|max:1000',
        ]);

        Comment::create([
            'user_id' => Auth::id(),
            'artwork_id' => $validated['artwork_id'],
            'content' => $validated['content'],
        ]);

        return redirect()->back()->with('success', 'Comment added successfully!');
    }

    // Update an existing comment
    public function update(Request $request, Comment $comment)
    {
        // Ensure the user owns the comment
        if ($comment->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        $validated = $request->validate([
            'content' => 'required|string|max:1000',
        ]);

        $comment->update([
            'content' => $validated['content'],
        ]);

        return redirect()->back()->with('success', 'Comment updated successfully!');
    }

    // Delete a comment
    // app/Http/Controllers/CommentController.php
    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
    
        if ($comment->user_id !== auth()->id()) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }
    
        $comment->delete();
    
        return response()->json(['message' => 'Comment deleted successfully'], 200);
    }
    

}
