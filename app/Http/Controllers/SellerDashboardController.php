<?php

namespace App\Http\Controllers;

class SellerDashboardController extends Controller
{
    public function index()
    {
        return view('seller.dashboard'); // Create this view
    }
}
