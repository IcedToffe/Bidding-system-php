<?php
// app/Http/Controllers/AuctionController.php
namespace App\Http\Controllers;

use App\Models\Bid;
use App\Models\Auction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuctionController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'starting_price' => 'required|numeric|min:0',
            'duration_days' => 'required|integer|min:1',
            'image' => 'nullable|image|max:2048',
        ]);
    
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('auctions', 'public');
        }
    
        $auction = Auction::create([
            'title' => $request->title,
            'starting_price' => $request->starting_price,
            'duration_days' => $request->duration_days,
            'user_id' => Auth::id(),
            'image_path' => $imagePath,
        ]);
    
        $auction->image_path = $auction->image_path
            ? asset('storage/' . $auction->image_path)
            : asset('images/default-image.jpg');
    
        return response()->json([
            'success' => true,
            'auction' => $auction,
        ]);
    }
    public function update(Request $request, $id)
{
    $auction = Auction::findOrFail($id);
    $auction->update([
        'title' => $request->title,
        'starting_price' => $request->starting_price,
        'duration_days' => $request->duration_days,
    ]);

    return response()->json(['success' => true, 'auction' => $auction]);
}
public function destroy($id)
{
    $auction = Auction::findOrFail($id);
    $auction->delete();

    return response()->json(['success' => true]);
}
// app/Http/Controllers/AuctionController.php
// In AuctionController.php
public function getAllAuctions()
{
    $auctions = Auction::with('user')->get(); // Fetch all auctions with their associated users
    return response()->json($auctions);
}

public function index()
{
    $auctions = Auction::all()->map(function ($auction) {
        $auction->image_path = $auction->image_path
            ? asset('storage/' . $auction->image_path)
            : asset('images/default-image.jpg'); // Default placeholder
        return $auction;
    });

    return response()->json([
        'success' => true,
        'auctions' => $auctions,
    ]);
}



public function show($id)
{
    $auction = Auction::findOrFail($id);
    $auction->image_path = $auction->image_path
        ? asset('storage/' . $auction->image_path)
        : asset('images/default-image.jpg'); // Default image if no image is uploaded

    return view('user.auction_show', compact('auction'));
}

public function getMyAuctions()
{
    $auctions = Auction::where('user_id', Auth::id())
        ->get()
        ->map(function ($auction) {
            $auction->image_path = $auction->image_path
                ? asset('storage/' . $auction->image_path)
                : asset('images/default-image.jpg'); // Use a default image if none is uploaded
            return $auction;
        });

    return response()->json([
        'success' => true,
        'auctions' => $auctions,
    ]);
}

public function placeBid(Request $request, $auctionId)
{
    // Retrieve the auction and its current highest bid
    $auction = Auction::findOrFail($auctionId);

    // Validate that the new bid is higher than the current highest bid
    $validated = $request->validate([
        'bid_amount' => 'required|numeric|min:' . ($auction->current_bid + 1), // Make sure the bid is higher than the current bid
    ]);

    // Create a new bid
    $bid = new Bid();
    $bid->auction_id = $auction->id;
    $bid->user_id = Auth::id(); // Assuming the user is logged in
    $bid->bid_amount = $validated['bid_amount'];
    $bid->save();

    // Update the auction's current bid
    $auction->current_bid = $bid->bid_amount;
    $auction->save();

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Bid placed successfully!');
}


public function showw($auctionId)
{
    // Retrieve the auction with its bids
    $auction = Auction::with('bids')->findOrFail($auctionId);

    // Pass auction and bids to the view
    return view('user.auction_show', compact('auction'));
}
public function getWinner($id)
{
    $auction = Auction::with('bids.user')->findOrFail($id);

    if ($auction->end_time > now()) {
        return response()->json(['success' => false, 'message' => 'Auction is still ongoing.']);
    }

    $winner = $auction->bids()->orderBy('bid_amount', 'desc')->first();

    if ($winner) {
        return response()->json([
            'success' => true,
            'winner' => [
                'name' => $winner->user->name,
                'bid_amount' => $winner->bid_amount,
            ],
        ]);
    }

    return response()->json(['success' => true, 'winner' => null, 'message' => 'No bids placed.']);
}


}
