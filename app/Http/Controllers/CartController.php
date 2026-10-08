<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Artwork;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
     public function index()
     {
         $cartItems = Cart::where('user_id', Auth::id())
                          ->with('artwork')
                          ->get();
 
         return view('user.cart', compact('cartItems'));
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
        //
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
    public function destroy($id)
    {
        $cartItem = Cart::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        $cartItem->delete();
    
        return redirect()->route('cart')->with('success', 'Artwork removed from cart.');
    }
   
public function addArtwork(Request $request)
{
    $request->validate([
        'artwork_id' => 'required|exists:artworks,id',
    ]);

    // Check if the artwork is already in the user's cart
    $existingItem = Cart::where('user_id', Auth::id())
                        ->where('artwork_id', $request->artwork_id)
                        ->first();

    if ($existingItem) {
        return response()->json(['message' => 'Artwork is already in the cart.']);
    }

    // Add the artwork to the cart
    Cart::create([
        'user_id' => Auth::id(),
        'artwork_id' => $request->artwork_id,
    ]);

    return response()->json(['message' => 'Artwork added to cart successfully.']);
}
public function view()
{
    // Retrieve the cart items for the logged-in user
    $cartItems = auth()->user()->cartItems; // Assuming a relationship exists

    // Calculate the total price
    $totalPrice = $cartItems->sum(fn($item) => $item->artwork->price);

    return view('user.cart', compact('cartItems', 'totalPrice'));
}

}
