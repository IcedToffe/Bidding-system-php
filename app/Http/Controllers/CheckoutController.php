<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Artwork;
use App\Models\Order;
use App\Models\OrderItem;


class CheckoutController extends Controller
{
    
public function index()
{
    // Get the current user's cart items
    $cartItems = Cart::where('user_id', auth()->id())->with('artwork')->get();

    // Calculate the total price
    $totalPrice = $cartItems->sum(function ($item) {
        return $item->artwork->price;
    });

    return view('user.checkout', compact('cartItems', 'totalPrice'));
}
// Process the checkout form
public function process(Request $request)
{
    // Validate the form data
    $validated = $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'city' => 'required|string|max:255',
        'street_address' => 'required|string|max:255',
        'phone' => 'required|string|max:15',
        'email' => 'required|email|max:255',
        'region' => 'required|string',
        'payment_method' => 'required|string',
    ]);


    // Start the transaction
    DB::beginTransaction();

    try {
        // Create a new order and save it to the database
        $order = Order::create([
            'user_id' => auth()->id(), // Automatically assigns the ID of the authenticated user
            'status' => 'pending', // Set order status to 'pending'
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'city' => $request->city,
            'street_address' => $request->street_address,
            'phone' => $request->phone,
            'email' => $request->email,
            'region' => $request->region,
            'shipping_fee' => $request->shipping_fee,
            'final_total' => $request->final_total,
            'payment_method' => $request->payment_method,
        ]);

        // Get the cart items for the current user
        $cartItems = Cart::where('user_id', auth()->id())->with('artwork')->get();

        // Loop through each cart item and create an order item
        foreach ($cartItems as $cartItem) {
            $order->orderItems()->create([
                'artwork_id' => $cartItem->artwork->id,
                'price' => $cartItem->artwork->price,
                'quantity' => $cartItem->quantity,
            ]);
        }

        // Clear the cart for the user after the order is placed
        Cart::where('user_id', auth()->id())->delete();

        // Commit the transaction
        DB::commit();

        // Redirect to the dashboard with a success message
        return redirect()->route('dashboard')->with('status', 'Order placed successfully!');
    } catch (\Exception $e) {
        // Rollback the transaction in case of an error
        DB::rollback();
        return back()->withErrors('Error placing order: ' . $e->getMessage());
    }


}public function processCheckout(Request $request)
{
    // Get cart items for the logged-in user
    $cartItems = auth()->user()->cartItems;

    // Calculate the total price (sum of item prices)
    $totalPrice = $cartItems->sum(function ($item) {
        return $item->artwork->price;
    });

    // Get the shipping fee based on the selected region
    $shippingFee = $this->getShippingFee($request->region); // This method calculates the shipping fee based on the region

    // Calculate the final total price (total price + shipping fee)
    $finalTotal = $totalPrice + $shippingFee;

    // Return the view with the variables
    return view('user.checkout', [
        'cartItems' => $cartItems,
        'totalPrice' => $totalPrice,
        'shippingFee' => $shippingFee,
        'finalTotal' => $finalTotal
    ]);
}

public function getShippingFee($region)
{
    // Define shipping fees for each region
    switch ($region) {
        case 'Mindanao':
            return 20.00; // Shipping fee for Mindanao
        case 'Visayas':
            return 50.00; // Shipping fee for Visayas
        case 'Luzon':
        default:
            return 100.00; // Default shipping fee for Luzon
    }
}
public function processOrder(Request $request)
{
    // Validate the request
    $validated = $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'city' => 'required|string|max:255',
        'street_address' => 'required|string|max:255',
        'phone' => 'required|string|max:20',
        'email' => 'required|email',
        'region' => 'required|string|max:255',
        'shipping_fee' => 'required|numeric',
        'final_total' => 'required|numeric',
        'payment_method' => 'required|string',
    ]);

    // Create a new order and save it to the database
    // Save the order
    $order = Order::create([
        'user_id' => auth()->id(), // Automatically assigns the ID of the authenticated user
    'first_name' => $request->first_name,
    'last_name' => $request->last_name,
    'city' => $request->city,
    'street_address' => $request->street_address,
    'phone' => $request->phone,
    'email' => $request->email,
    'region' => $request->region,
    'shipping_fee' => $request->shipping_fee,
    'final_total' => $request->final_total,
    'payment_method' => $request->payment_method,
]);

    // Clear the cart for the user
    Cart::where('user_id', auth()->id())->delete();

    // Redirect to cart page with success message
    return redirect()->route('cart')->with('success', 'Order placed successfully!');
}
}