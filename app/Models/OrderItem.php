<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'artwork_id',
        'price',
        'quantity',
    ];


    // Define the relationship to Order
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

     // Define the relationship to Artwork (assuming there's an Artwork model)
 
    public function artwork()
    {
        return $this->belongsTo(Artwork::class);
    }
}
