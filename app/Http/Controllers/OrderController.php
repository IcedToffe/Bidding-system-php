<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function store(Request $request)
    {
//         $validated = $request->validate([
//             'first_name' => 'required',
//             'last_name' => 'required',
//             'city' => 'required',
//             'street_address' => 'required',
//             'phone' => 'required',
//             'email' => 'required|email',
//             'region' => 'required',
//             'shipping_fee' => 'required|numeric',
//             'final_total' => 'required|numeric',
//             'payment_method' => 'required',
//         ]);

//         $order = Order::create([
//             'user_id' => Auth::id(),
//             'first_name' => $validated['first_name'],
//             'last_name' => $validated['last_name'],
//             'city' => $validated['city'],
//             'street_address' => $validated['street_address'],
//             'phone' => $validated['phone'],
//             'email' => $validated['email'],
//             'region' => $validated['region'],
//             'shipping_fee' => $validated['shipping_fee'],
//             'final_total' => $validated['final_total'],
//             'payment_method' => $validated['payment_method'],
//         ]);

//         return redirect()->route('orders.index')->with('success', 'Order placed successfully!');
//     }

//     public function index()
// {
//     if (!Auth::check()) {
//         return redirect('/login')->with('error', 'Please log in to view orders.');
//     }

//     $orders = Auth::user()->orders()->where('status', 'pending')->get();

//     return view('user.home', compact('orders'));
// }

$validated = $request->validate([
    'first_name' => 'required',
    'last_name' => 'required',
    'city' => 'required',
    'street_address' => 'required',
    'phone' => 'required',
    'email' => 'required|email',
    'region' => 'required',
    'shipping_fee' => 'required|numeric',
    'final_total' => 'required|numeric',
    'payment_method' => 'required',
]);

// Create the order
$order = Order::create([
    'user_id' => Auth::id(),
    'first_name' => $validated['first_name'],
    'last_name' => $validated['last_name'],
    'city' => $validated['city'],
    'street_address' => $validated['street_address'],
    'phone' => $validated['phone'],
    'email' => $validated['email'],
    'region' => $validated['region'],
    'shipping_fee' => $validated['shipping_fee'],
    'final_total' => $validated['final_total'],
    'payment_method' => $validated['payment_method'],
    'status' => 'pending', // Default status
]);

// Save cart items to the order
$orderItems = OrderItem::where('user_id', Auth::id())->get();
foreach ($orderItems as $orderItems) {
    $order->items()->create([
        'artwork_id' => $orderItems->artwork_id,
        'price' => $orderItems->artwork->price,
        // 'quantity' => $cartItem->quantity,
    ]);
}

// Clear the cart
CartItem::where('user_id', Auth::id())->delete();

// Fetch the user's pending orders to display on the cart page
$pendingOrders = Auth::user()->orders()->where('status', 'pending')->with('items.artwork')->get();

// Pass the pending orders to the cart view
return redirect()->route('cart.index')->with([
    'success' => 'Order placed successfully!',
    'pendingOrders' => $pendingOrders
]);
}

public function index()
{

    //     // Fetch the authenticated user's cart items
    //     $cartItems = CartItem::where('user_id', Auth::id())->get();


    // // Fetch only the pending orders for the authenticated user
    // $orders = Auth::user()->orders()->where('status', 'pending')->get();
    
    // // Pass the pending orders to the cart view
    // return view('user.cart', compact('orders'));

    $user = Auth::user();
    $pendingOrders = Order::where('user_id', $user->id)
        ->where('status', 'Pending')
        ->with('items.artwork') // Eager load related artworks
        ->get();

    return view('profile.orders', compact('pendingOrders'));
}

public function showPendingOrders()
{
    // Fetch all pending orders for the authenticated user
    $pendingOrders = Auth::user()->orders()->where('status', 'pending')->with('items.artwork')->get();

    // Pass the pending orders to the view
    return view('user.cart', compact('pendingOrders'));
}

}
