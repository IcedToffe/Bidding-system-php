<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArtworkController;
use App\Http\Controllers\AuctionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\AuctionnController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RateFeedbackController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\SellerDashboardController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\FeedbackWebsiteController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// routes/web.php
Route::get('/user-registration-stats', action: [UserController::class, 'getUserRegistrationStats'])->name('user.registration.stats');


//pang random sa artworks
Route::get('/artworks/random', [ArtworkController::class, 'getRandomArtworksByCategory'])->name('artworks.random');
Route::get('/dashboard', [ArtworkController::class, 'showRandomArtworks'])->name('user.view');
Route::get('/dashboard', [ArtworkController::class, 'showRandomArtworks'])->name('user.dashboard');



Route::get('/auction/{id}/winner', [AuctionController::class, 'getWinner']);


// Route to the seller dashboard
Route::get('/seller/dashboard', [AuctionController::class, 'showSellerDashboard'])->name('seller.dashboard');

Route::post('/auction/{auctionId}/place-bid', [AuctionController::class, 'placeBid'])->name('auction.placeBid');


Route::get('/my-artworks', [ArtworkController::class, 'getUserArtworks'])->name('my-artworks');
Route::post('/artworks', [ArtworkController::class, 'store'])->name('store-artwork');

Route::get('/admin/artworks', [ArtworkController::class, 'index'])->name('admin.artworks');
// Route::get('/admin/artworks/destroy/{id}', [ArtworkController::class, 'adminartworkdestroy'])->name('admin.artwork.destroy');

Route::put('admin/artworks/update/{id}', [ArtworkController::class, 'adminartworkupdate'])->name('admin.artwork.update');
    Route::delete('admin/artworks/destroy.{id}', [ArtworkController::class, 'adminartworkdestroy'])->name('admin.artwork.destroy');

Route::get('/my-auctions', [AuctionController::class, 'getMyAuctions']);
Route::post('/auctions', [AuctionController::class, 'store']);

// Home page
Route::get('/', function () {
    return view('welcome');
});

// Login routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/admin/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminLoginController::class, 'login']);

// Protected routes for authenticated users
Route::middleware(['auth'])->group(function () {
    Route::get('/user/dashboard', [UserDashboardController::class, 'index'])->name('user.dashboard');
    Route::get('/seller/dashboard', [SellerDashboardController::class, 'index'])->name('seller.dashboard');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/feebacks', [FeedbackWebsiteController::class, 'showfeed'])->name('admin.showfeed');
Route::post('/submit-feedbackwebsite', [FeedbackWebsiteController::class, 'store'])->name('submit.feedbackwebsite');

});Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/feedback', [FeedbackController::class, 'index'])->name('admin.feedback');
});
Route::post('/admin/feedback', [FeedbackController::class, 'store'])->name('admin.store-feedback');

//para makita ang specific na auction
Route::get('/auction/{id}', [AuctionController::class, 'show'])->name('auction.show');

Route::post('/artworks/update/{id}', [ArtworkController::class, 'update'])->name('update.artwork');
Route::delete('/artworks/delete/{id}', [ArtworkController::class, 'destroy'])->name('delete.artwork');


//routes ni sya sa mga user
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/explore', [ExploreController::class, 'index'])->name('explore');
Route::get('/auction', [AuctionnController::class, 'index'])->name('auction');
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contacts', [ContactController::class, 'index'])->name('contacts');
Route::post('/submit-contact', [FeedbackWebsiteController::class, 'store'])->name('submit.contact');
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/rate-feedback', [RateFeedbackController::class, 'index'])->name('ratefeedback');
Route::post('/rate-feedback', [RateFeedbackController::class, 'store'])->name('ratefeedback.store');

//sa edit sa auction
Route::put('/auctions/update/{id}', [AuctionController::class, 'update'])->name('auctions.update');
Route::delete('/auctions/delete/{id}', [AuctionController::class, 'destroy'])->name('auctions.delete');


//para maka place order sya

Route::get('/cart', [CartController::class, 'view'])->name('cart');
//para ma makita ang auction na gibuhat ni seller sa user dashboard
// routes/web.php
Route::get('/auctions', [AuctionController::class, 'getAllAuctions']);
Route::get('/auctions', [AuctionController::class, 'getAllAuctions'])->middleware('auth');


//para makita ni user ang artworks gibuhat ni seller
Route::get('/artworks', [ArtworkController::class, 'getArtworks']);


// Route::post('/auctions', [AuctionController::class, 'store']);
Route::get('/auctions', [AuctionController::class, 'index']);

//for add to cart ni sya

Route::post('/cart/add', [CartController::class, 'addArtwork'])->name('cart.add');
Route::delete('/cart/remove/{id}', [CartController::class, 'destroy'])->name('cart.remove');


//sa artworkController
Route::post('/publish-artwork', [ArtworkController::class, 'store'])->name('publish.artwork');

//auction ni sya
Route::post('/auctions/store', [AuctionController::class, 'store'])->name('auctions.store');


//sa view ni nga part

Route::get('/artworks/view/{id}', [ArtworkController::class, 'view'])->name('artworks.view');

//para maka comment si user
Route::post('/comments/store', [CommentController::class, 'store'])->name('comments.store');
Route::put('/comments/{comment}', [CommentController::class, 'update'])->name('comments.update');
Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');


//ma ka update sa iyang profile picture si User
Route::put('/profile/avatar', [UserController::class, 'updateAvatar'])->name('profile.update.avatar');
Route::put('/profile/details', [UserController::class, 'updateDetails'])->name('profile.update.details');



// sa checkout ni sya nga dashboard para makita ang form ang totals na bayronon
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');


//para maka checkout si user
Route::post('/checkout', [CheckoutController::class, 'process'])->name('checkout.process');



// para maka order si user
Route::post('/checkout', [CheckoutController::class, 'processOrder'])->name('checkout.process');



Route::middleware(['auth'])->group(function () {
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
});

//
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//pang logout sa  user og seller
Route::get('/landing', function () {
    return view('landing');
})->name('landing');

Route::post('/logout', function () {
    Auth::logout();
    return redirect()->route('landing');
})->name('logout');


//sa dashboard ni sya ha
Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');


// Seller dashboard route
Route::get('/seller/dashboard', function () {
    return view('seller.dashboard');
})->name('seller.dashboard')->middleware('auth');



// User dashboard route
Route::get('/user/dashboard', function () {
    return view('user.dashboard');
})->name('user.dashboard')->middleware('auth');

//makita na diri sa dashboard ang pending order
// // In routes/web.php
// Route::get('/home', [DashboardController::class, 'index'])->name('home');
Route::get('/home', [DashboardController::class, 'index'])->middleware('auth')->name('home');



require __DIR__.'/auth.php';
