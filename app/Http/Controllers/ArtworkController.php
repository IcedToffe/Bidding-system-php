<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ArtworkController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string',
            'price' => 'required|numeric|min:0',
            'artSize' => 'required|string',
            'image' => 'required|image|max:2048',
        ]);

        // Handle the image upload
        $imagePath = $request->file('image')->store('artworks', 'public'); // Store image in the 'public/artworks' folder

        // Create a new artwork record
        $artwork = Artwork::create([
            'title' => $request->title,
            'description' => $request->description,
            'category' => $request->category,
            'price' => $request->price,
            'artSize' =>$request->artSize,
            'image_path' => $imagePath, // Store the image path in the database
            'user_id' => Auth::id(),
        ]);

        // Return the artwork as a JSON response
    return response()->json([
        'success' => true,
        'artwork' => $artwork,
    ]);
}
public function update(Request $request, $id)
{
    $artwork = Artwork::findOrFail($id);
    $artwork->update($request->all());

    // Handle image upload and other fields as necessary

    return response()->json(['success' => true, 'artwork' => $artwork]);
}
public function destroy($id)
{
    $artwork = Artwork::findOrFail($id);
    $artwork->delete();

    return response()->json(['success' => true]);
}
public function getArtworks()
{
    $artworks = Artwork::all(); // Retrieve all artworks or based on the user

    // Add logic for full image path or default image
    $artworks->map(function ($artwork) {
        $artwork->image_path = $artwork->image_path 
            ? asset('storage/' . $artwork->image_path) 
            : asset('images/default-image.jpg'); // Default placeholder
        return $artwork;
    });

    return response()->json([
        'success' => true,
        'artworks' => $artworks,
    ]);
}
public function view($id)
{
    $artwork = Artwork::findOrFail($id);

    return view('user.view', compact('artwork'));
}
public function getUserArtworks()
{
    $artworks = Artwork::where('user_id', Auth::id())->get();

    $artworks->map(function ($artwork) {
        $artwork->image_path = $artwork->image_path 
            ? asset('storage/' . $artwork->image_path) 
            : asset('images/default-image.jpg');
        return $artwork;
    });

    return response()->json([
        'success' => true,
        'artworks' => $artworks,
    ]);

}



public function getRandomArtworksByCategory()
{
    // Get all distinct categories and shuffle them
    $categories = Artwork::select('category')->distinct()->pluck('category')->shuffle();

    // Take only the first 3 categories
    $selectedCategories = $categories->take(15);

    $randomArtworks = [];

    foreach ($selectedCategories as $category) {
        $randomArtworks[$category] = Artwork::where('category', $category)
            ->inRandomOrder()
            ->take(1) // Fetch 1 artwork per category
            ->get()
            ->map(function($artwork) {
                // Ensure the image URL is absolute using the asset helper
                $artwork->image_url = asset('storage/' . $artwork->image_path);
                return $artwork;
            });
    }

    return response()->json([
        'success' => true,
        'artworks' => $randomArtworks,
    ]);
}


public function dashboard()
{
    // Get all distinct categories and shuffle them
    $categories = Artwork::select('category')->distinct()->pluck('category')->shuffle();

    // Take only the first 3 categories
    $selectedCategories = $categories->take(3);

    $randomArtworks = [];

    // Fetch 1 random artwork per category
    foreach ($selectedCategories as $category) {
        $randomArtworks[$category] = Artwork::where('category', $category)
            ->inRandomOrder()
            ->take(1) // Fetch 1 artwork per category
            ->get()
            ->map(function($artwork) {
                // Ensure the image URL is absolute using the asset helper
                $artwork->image_url = asset('storage/' . $artwork->image_path);
                return $artwork;
            });
    }

    // Pass the artworks to the dashboard view
    return view('user.dashboard', [
        'randomArtworks' => $randomArtworks
    ]);
}

public function index()
    {
        // Fetch all artworks without relationships
        $artworks = Artwork::all();

        // Pass the data to the view
        return view('admin.artworks', compact('artworks'));
    }

    public function adminartworkupdate(Request $request, $id)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'price' => 'required|numeric',
    ]);

    $artwork = Artwork::findOrFail($id);
    $artwork->title = $request->input('title');
    $artwork->price = $request->input('price');
    $artwork->save();

    return redirect()->route('admin.artworks.index')->with('success', 'Artwork updated successfully.');
}

public function adminartworkdestroy($id)
{
    $artwork = Artwork::findOrFail($id);
    $artwork->delete();

    return redirect()->route('admin.artworks')->with('success', 'Artwork deleted successfully.');
}

}