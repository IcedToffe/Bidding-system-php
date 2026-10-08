<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artwork extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'category',  'price',  'artSize','image_path', 'user_id'];

    
    public function comments()
{
    return $this->hasMany(Comment::class);
}

public function orderItems()
{
    return $this->hasMany(OrderItem::class);
}

}
