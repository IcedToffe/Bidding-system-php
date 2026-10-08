<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auction extends Model
{
    use HasFactory;

   // In your Auction model
protected $fillable = ['title', 'starting_price', 'duration_days', 'image_path', 'user_id'];


public function bids()
{
    return $this->hasMany(Bid::class);
}
public function getWinnerAttribute()
{
    if ($this->end_time < now()) { // Check if auction has ended
        return $this->bids()->orderBy('bid_amount', 'desc')->first(); // Get highest bid
    }
    return null; // Auction still ongoing
}
public function getEndTimeAttribute()
{
    if ($this->created_at && $this->duration_days) {
        return $this->created_at->addDays($this->duration_days);
    }
    return null; // Handle missing data gracefully
}

}