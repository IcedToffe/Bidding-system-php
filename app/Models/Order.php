<?php

// namespace App\Models;
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'city',
        'street_address',
        'phone',
        'email',
        'region',
        'shipping_fee',
        'final_total',
        'payment_method',
        'status'
    ];

        // Define the relationship to OrderItem
        public function orderItems()
        {
            return $this->hasMany(OrderItem::class);
        }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}
