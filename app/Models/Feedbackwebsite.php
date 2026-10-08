<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedbackwebsite extends Model
{
    use HasFactory;
    protected $table = "feedback";
    protected $fillable = ['name', 'email', 'message', 'rating',];
}

