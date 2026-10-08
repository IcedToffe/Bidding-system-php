<x-plain-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Veretei Gallery - About</title>
        @vite('resources/css/app.css')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <style>
            /* Existing styles */
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                
            }
    
            body {
                font-family: Arial, sans-serif;
                color: #333;
                background-color: #EEEDE0;
            }
















/* General Container Styling */
#artworksContainer {
    font-family: 'Arial', sans-serif;
    padding: 20px;
    max-width: 1200px;
    margin: 30px auto;
}

/* Categories Section */
.category-cards-container {
    display: flex;
    gap: 20px;
    margin-bottom: 30px;
    justify-content: space-between;
    flex-wrap: wrap;
}

.category-card {
    background-color: #f7f7f7;
    border-radius: 10px;
    padding: 15px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 220px;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.category-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
}

/* Main Artwork Section */
.main-artwork-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    background-color: #fff;
    border-radius: 10px;
    padding: 30px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    margin-top: 30px;
}

.artwork-left {
    flex: 1;
    padding-right: 20px;
}

.main-artwork-image {
    width: 100%;
    max-width: 350px; /* Make the image smaller */
    height: auto;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.artwork-right {
    flex: 2;
    padding-left: 20px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

/* Artwork Title */
.artwork-title {
    font-size: 2rem;
    font-weight: bold;
    color: #000; /* Black color for the title */
    margin-bottom: 20px;
}


/* Artwork Description */
.artwork-description {
    font-size: 1rem;
    color: #666;
    line-height: 1.6;
    margin-bottom: 20px;
}

/* Artwork Details */
.artwork-details {
    font-size: 1rem;
    color: #333;
    margin-bottom: 20px;
}

.artwork-price {
    font-weight: bold;
    color: #4CAF50;
    font-size: 1.2rem;
}

/* Footer with Buttons */
.artwork-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 20px;
}

.btn {
    padding: 12px 20px;
    font-size: 1rem;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    text-align: center;
}

.btn-back {
    background-color: #ddd;
    color: #333;
    border: none;
}

.btn-back:hover {
    background-color: #bbb;
}

.btn-add-to-cart {
    background-color: #4CAF50;
    color: white;
    border: none;
}

.btn-add-to-cart:hover {
    background-color: #45a049;
}

/* Responsive Design for smaller screens */
@media (max-width: 768px) {
    .main-artwork-container {
        flex-direction: column;
        align-items: center;
        padding: 20px;
    }

    .artwork-left {
        padding-right: 0;
        margin-bottom: 20px;
    }

    .main-artwork-image {
        max-width: 100%;
    }

    .artwork-right {
        padding-left: 0;
        text-align: center;
    }

    .artwork-title {
        font-size: 1.5rem;
    }

    .artwork-footer {
        flex-direction: column;
        align-items: center;
    }

    .btn {
        width: 100%;
        margin-bottom: 10px;
    }
}










    /* General Navbar Styling */
    .navbar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 15px 20px;
        background-color: #333;
        color: white;
        position: sticky;  /* Keeps navbar at the top when scrolling */
        top: 0;
        z-index: 1000; /* Ensures navbar stays above other content */
        width: 100%;
    }
    
    /* Navbar Logo Styling */
    .navbar-logo {
        display: flex;
        align-items: center;
        font-size: 24px;
        font-weight: bold;
        color: white;
    }
    
    .navbar-logo img {
        height: 40px;
        margin-right: 10px;
    }
    
    /* Navbar Search Styling */
    .navbar-search {
        flex: 1;
        margin: 0 20px;
        position: relative;
    }
    
    .navbar-search input {
        width: 100%;
        padding: 8px 40px 8px 15px;
        border-radius: 20px;
        border: 1px solid #ccc;
        font-size: 14px;
    }
    
    .navbar-search .fa-search {
        position: absolute;
        top: 50%;
        right: 15px;
        transform: translateY(-50%);
        color: #888;
    }
    
    /* Navbar Links Styling */
    .navbar-links {
        display: flex;
        gap: 20px;
        align-items: center;
    }
    
    .navbar-links a {
        color: white;
        text-decoration: none;
        font-size: 16px;
        transition: color 0.3s ease;
    }
    
    .navbar-links a:hover {
        color: #827B7B; 
    }
    
    /* Navbar Icon Buttons Styling */
    .navbar-icons {
        display: flex;
        gap: 15px;
        align-items: center;
        margin-left: 20px;
    }
    
    .navbar-icons a {
        color: white;
        font-size: 18px;
        text-decoration: none;
        cursor: pointer;
        transition: color 0.3s ease;
    }
    
    .navbar-icons a:hover {
        color: #ccc;
    }
    
    /* Dropdown Menu Styling */
    .dropdown-menu {
        display: none; /* Initially hidden */
        background-color: white;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        overflow: hidden;
        position: absolute; /* Positioned relative to parent */
        top: 100%; /* Position it below the navbar item */
        left: -100%; /* Move it to the left of the parent item */
        min-width: 200px; /* Set the minimum width for the dropdown */
    }
    
    .dropdown-item {
        padding: 10px 15px;
        color: #333;
        text-decoration: none;
        transition: background 0.3s ease;
    }
    
    .dropdown-item:hover {
        background: #f0f0f0;
    }
    
    .dropdown-item button {
        width: 100%;
        text-align: left;
        font-size: inherit;
    }
    
    /* Show dropdown when hovering on parent item */
    .navbar-links .dropdown:hover .dropdown-menu {
        display: block;
        left: 0; /* Show it on the left of the parent item */
    }
    
            /* Header Section */
            .header {
                background-image: url('https://images.photowall.com/interiors/69911/landscape/wallpaper/room41.jpg?w=2000&q=80'); /* Replace with your banner image */
                background-size: cover;
                background-position: center;
                text-align: center;
                color: white;
                padding: 200px 20px;
            }
    
            .header h1 {
                font-size: 48px;
                font-weight: bold;
            }
    
            .header p {
                font-size: 18px;
                margin-top: 10px;
            }
      
                    /* Footer Styling */
           /* Footer Styling */
    .footer {
        background-color: #2e2e2e;
        padding: 40px 20px;
        display: flex;
        justify-content: center;  /* Center the content horizontally */
        align-items: flex-start;  /* Align the columns at the top */
        flex-wrap: wrap;  /* Stack columns on smaller screens */
        color: white;
        gap: 40px;  /* Add some space between the columns */
    }
    
    .footer-column {
        display: flex;
        flex-direction: column;
        align-items: center;  /* Center the content inside each column */
        gap: 10px;
        min-width: 200px;  /* Prevent columns from becoming too small */
        text-align: center;  /* Center the text within the columns */
    }
    
    .footer-column h3 {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 10px;
    }
    
    .footer-column p,
    .footer-column a {
        font-size: 14px;
        color: #fff;
        text-decoration: none;
    }
    
    .footer-column a:hover {
        color: #ccc;
    }
    
    /* Specific styling for the footer logo */
    .footer-logo {
        font-size: 22px;
        font-weight: bold;
        text-align: center;
    }
    
    .footer-logo p {
        margin-top: 10px;
        line-height: 1.5;




    }
/* Divider Styling */
.divider {
    margin: 50px 0;
    border-bottom: 1px solid #ccc;
    width: 80%;
    margin-left: auto;
    margin-right: auto;
}





    



/* General Styles */
.comments-section {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.comments-section h2 {
    font-size: 24px;
    margin-bottom: 20px;
    border-bottom: 1px solid #ddd;
    padding-bottom: 10px;
}

/* Comment Styles */
.comment {
    margin-bottom: 20px;
    padding-bottom: 20px;
    border-bottom: 1px solid #eee;
    position: relative;
}

.comment:last-child {
    border-bottom: none;
    margin-bottom: 0;
}

.comment-header {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
}

.comment-avatar img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    margin-right: 10px;
}

.comment-info {
    flex-grow: 1;
}

.comment-info strong {
    font-size: 16px;
    font-weight: bold;
    color: #333;
}

.comment-info .comment-date {
    font-size: 12px;
    color: #999;
}

.comment-content {
    font-size: 14px;
    line-height: 1.6;
    color: #333;
}

/* Three Dots Button */
.three-dots-btn {
    background: none;
    border: none;
    padding: 0;
    cursor: pointer;
    position: relative;
}

.three-dots-btn .dot {
    width: 4px;
    height: 4px;
    background-color: #888;
    border-radius: 50%;
    display: inline-block;
    margin: 0 1px;
}

.three-dots-btn:hover .dot {
    background-color: #444;
}

/* Action Menu */
.action-menu {
    display: none;
    position: absolute;
    top: 25px;
    right: 0;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    z-index: 10;
    min-width: 120px;
}

.action-menu button {
    display: block;
    width: 100%;
    padding: 10px;
    background: none;
    border: none;
    text-align: left;
    font-size: 14px;
    cursor: pointer;
    color: #555;
}

.action-menu button:hover {
    background-color: #f1f1f1;
    color: #333;
}

/* Editable Comment Form */
.editable-comment {
    margin-top: 10px;
}

.editable-comment textarea {
    width: 100%;
    padding: 8px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 14px;
}

.editable-comment .btn-update-comment,
.editable-comment .btn-cancel-edit {
    margin-top: 10px;
    padding: 8px 12px;
    font-size: 14px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.editable-comment .btn-update-comment {
    background-color: #4caf50;
    color: #fff;
}

.editable-comment .btn-cancel-edit {
    background-color: #f44336;
    color: #fff;
}

/* New Comment Form */
.comment-form textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 14px;
    margin-bottom: 10px;
}

.comment-form .btn-submit-comment {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.comment-form .btn-submit-comment:hover {
    background-color: #0056b3;
}

/* Modal */
/* Modal overlay */
/* Modal overlay */
.modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
    display: flex;
    justify-content: center; /* Horizontally centered */
    align-items: center; /* Vertically centered */
    z-index: 1000;
}

/* Modal content */
.modal-content {
    background: #fff;
    padding: 20px;
    width: 90%;
    max-width: 400px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    text-align: center;
}


/* Modal title */
.modal-title {
    font-size: 1.5em;
    font-weight: bold;
    margin-bottom: 10px;
    color: #333; /* Darker text color */
}

/* Modal text */
.modal-text {
    font-size: 1em;
    color: #555; /* Neutral text color */
    margin-bottom: 20px;
}

/* Modal buttons */
.modal-buttons {
    display: flex;
    justify-content: center;
    gap: 15px;
}

.btn {
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    font-size: 1em;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

/* Confirm button styles */
.btn-danger {
    background: #d9534f; /* Bootstrap red */
    color: #fff;
}

.btn-danger:hover {
    background: #c9302c;
}

/* Cancel button styles */
.btn-secondary {
    background: #6c757d; /* Bootstrap gray */
    color: #fff;
}

.btn-secondary:hover {
    background: #5a6268;
}

/* Fade-in animation */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: scale(0.9);
    }
    to {
        opacity: 1;
        transform: scale(1);
    }
}







/* Price color change */
.artwork-price {
    font-size: 1.5em;
    color: green; /* Green color for price */
    font-weight: bold;
    margin-top: 15px;
}

/* Button Base Styling */
.btn {
        padding: 10px 20px;
        font-size: 1.1em;
        font-weight: bold;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: all 0.3s ease;
        display: inline-block;
    }

    /* Back Button Styling */
    .btn-back {
        background-color: #007bff;
        color: white;
    }

    .btn-back:hover {
        background-color: #0056b3;
        transform: translateY(-2px);
    }

    /* Add to Cart Button Styling */
    .btn-add-to-cart {
        background-color: #28a745;
        color: white;
        margin-left: 10px;
    }

    .btn-add-to-cart:hover {
        background-color: #218838;
        transform: translateY(-2px);
    }

    /* Button Focus State */
    .btn:focus {
        outline: none;
        box-shadow: 0 0 8px rgba(0, 123, 255, 0.5);
    }























    
    /* Responsive Design for smaller screens */
    @media (max-width: 768px) {
        .footer {
            padding: 20px;
        }
    
        .footer-column {
            align-items: center;  /* Ensure each column content is centered */
            text-align: center;  /* Center text in smaller viewports */
        }
    
        .footer-column h3 {
            font-size: 16px;  /* Smaller headings on mobile */
        }
    
        .footer-column p, .footer-column a {
            font-size: 12px;  /* Smaller text on mobile */
        }
    }
    
        </style>
    </head>
    <body>
    
        <!-- Navbar -->
        <nav class="navbar">
            <!-- Navbar content here (unchanged) -->
                 <!-- Navbar -->
            <div class="navbar-logo">
                <img src="https://i.pinimg.com/564x/f8/1e/1a/f81e1ab9ea040c0c96e0ca356595360c.jpg" alt="Veretei Gallery Logo"> <!-- Replace with actual logo image -->
                Veretei Gallery
            </div>
            <div class="navbar-search">
                <input type="text" placeholder="Search artworks, artists, genres...">
                <i class="fas fa-search"></i>
            </div>
            <div class="navbar-links">
            <a href="{{ route('user.dashboard') }}">Home</a>
            <a href="{{ route('explore') }}">Explore</a>
            <a href="{{ route('auction') }}">Auction</a>
            <a href="{{ route('blogs') }}">FAQ</a>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('contacts') }}">Contacts</a>
            </div>
            <div class="navbar-icons">
        <!-- Cart Link -->
        <a href="{{ route('cart') }}" aria-label="Cart">
            <i class="fas fa-shopping-cart"></i>
        </a>
    
        <!-- User Dropdown -->
        <div class="dropdown" style="position: relative; display: inline-block;">
            <button
                class="user-dropdown-toggle"
                aria-label="User Options"
                style="background: none; border: none; cursor: pointer; padding: 0;"
            >
                <i class="fas fa-user-circle"></i>
            </button>
    
            <!-- Dropdown Menu -->
            <div class="dropdown-menu" style="display: none; position: absolute; top: 100%; right: 0; background: white; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); border-radius: 5px; min-width: 150px; z-index: 1000;">
                <a href="{{ route('home') }}" class="dropdown-item" style="display: block; padding: 10px; color: black; text-decoration: none;">Dashboard</a>
                <a href="{{ route('ratefeedback') }}" class="dropdown-item" style="display: block; padding: 10px; color: black; text-decoration: none;">Rate & Feedback</a>
                <form method="POST" action="{{ route('logout') }}" style="display: block; margin: 0;">
                    @csrf
                    <button
                        type="submit"
                        class="dropdown-item"
                        style="background: none; border: none; cursor: pointer; padding: 10px; color: black; text-align: left; width: 100%;"
                    >
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </div>
    
        </nav>
    
        <div class="header">
            <h1>View Artworks</h1>
            <p>Home / About</p>
        </div>
    

        <div class="divider"></div>

        <div id="artworksContainer" style="margin-top: 30px;">
            <!-- Categories Section -->
            <div class="category-cards-container">
                <!-- Category items will be dynamically loaded here -->
            </div>
        
            <!-- Main Artwork Section -->
            <div class="main-artwork-container">
                <div class="artwork-left">
                    <img src="{{ asset('storage/' . $artwork->image_path) }}" alt="{{ $artwork->title }}" class="main-artwork-image">
                </div>
                <div class="artwork-right">
                    <h1 class="artwork-title" style="color: #000; font-size: 3rem; display: inline-block; margin-right: 20px; vertical-align: middle;">{{ $artwork->title }}</h1>


                    <p class="artwork-description">{{ $artwork->description }}</p>
                    <div class="artwork-details">
                        <p><strong>Category:</strong> {{ $artwork->category }}</p>
                        <p class="artwork-price"><strong>Price:</strong> ${{ $artwork->price }}</p>
                        <p><strong>Created At:</strong> {{ $artwork->created_at->format('F j, Y') }}</p>
                    </div>
                    <div class="artwork-footer">
                        <button class="btn btn-back" onclick="history.back()">Go Back</button>
                        <button class="btn btn-add-to-cart" onclick="addToCart({{ $artwork->id }})">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
        








            <div class="divider"></div>


            <h1 style="text-align: center; color: #333; font-family: 'Arial', sans-serif; font-size: 2.5rem; margin-top: 30px;">You May Also Like</h1>

         <!-- "You May Also Like" Section -->
    <div class="artworks-grid" id="artworksuserContainer">
        <!-- Artworks will be dynamically loaded here -->
    </div>
                </div>
            </div>
        </div>
        


        <div class="divider"></div>



    <style>
/* "You May Also Like" Section */
.artworks-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr); /* 3 columns by default */
    gap: 20px;  /* Increased gap for better spacing */
    margin-top: 20px;
    padding: 0 10px;  /* Smaller padding around the grid */
}

/* Artwork Item */
.artwork-item {
    position: relative;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1); /* Smaller shadow */
    transition: transform 0.3s ease-in-out;
    background-color: #f9f9f9; /* Light background color for each artwork item */
    height: 300px;  /* Increased height for the container */
    display: flex;
    flex-direction: column;
    justify-content: flex-end; /* Align content to the bottom */
    padding: 0; /* Remove internal padding to fit the image perfectly */
}

/* Hover effect for the artwork item */
.artwork-item:hover {
    transform: scale(1.05); /* Slight zoom effect on hover */
}

/* Artwork Image */
.artwork-image {
    width: 100%; /* Make the image take full width of the container */
    height: 100%; /* Make the image take full height of the container */
    object-fit: cover; /* Ensures the image fills the area without distortion */
    transition: transform 0.3s ease-in-out;
}

/* Hover effect on the image */
.artwork-item:hover .artwork-image {
    transform: scale(1.05); /* Slight zoom effect on image when hovered */
}

/* Artwork Info */
.artwork-info {
    position: absolute;
    bottom: 0; /* Stick to the bottom of the container */
    left: 0;
    right: 0;
    background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
    color: white;
    padding: 10px;
    border-radius: 5px;
    visibility: hidden; /* Hidden by default */
    opacity: 0;
    transition: opacity 0.3s ease, visibility 0.3s ease;
    text-align: center; /* Center text */
}

/* Show artwork info on hover */
.artwork-item:hover .artwork-info {
    visibility: visible; /* Shows the info when hovered */
    opacity: 1; /* Fade-in effect */
}

/* Artwork Title and Category */
.artwork-title {
    font-size: 1rem; /* Increased font size for better visibility */
    font-weight: bold;
    color: #fff;
    margin: 0;
}

.artwork-category {
    font-size: 0.9rem; /* Adjusted font size */
    color: #ddd;
    margin-top: 5px;
}

/* Responsive Design for smaller screens */
@media (max-width: 768px) {
    .artworks-grid {
        grid-template-columns: repeat(2, 1fr); /* 2 columns on smaller screens */
    }
}

@media (max-width: 480px) {
    .artworks-grid {
        grid-template-columns: 1fr; /* 1 column on very small screens */
    }
}

/* Add User Container */
.adduser-container {
    background-color: #f0f4f8; /* Light background for the container */
    padding: 30px;
    margin: 20px auto;
    width: 80%;
    max-width: 600px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow around the container */
}

/* Add User Form */
.adduser-container form {
    display: flex;
    flex-direction: column;
    gap: 15px; /* Spacing between form fields */
}

/* Input Fields */
.adduser-container input[type="text"],
.adduser-container input[type="email"],
.adduser-container input[type="password"] {
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 1rem;
    width: 100%;
    transition: border-color 0.3s ease;
}

.adduser-container input[type="text"]:focus,
.adduser-container input[type="email"]:focus,
.adduser-container input[type="password"]:focus {
    border-color: #5cb85c; /* Green border on focus */
    outline: none;
}

/* Submit Button */
.adduser-container button {
    background-color: #5cb85c; /* Green background for the button */
    color: white;
    padding: 12px;
    border: none;
    border-radius: 5px;
    font-size: 1.1rem;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.adduser-container button:hover {
    background-color: #4cae4c; /* Darker green on hover */
}

/* Title for the Add User Form */
.adduser-container h2 {
    font-size: 1.5rem;
    font-weight: bold;
    color: #333;
    margin-bottom: 20px;
}

/* Add User Info Text */
.adduser-container .info-text {
    font-size: 0.9rem;
    color: #555;
    text-align: center;
    margin-top: 10px;
}

           
               </style>














        <!-- Comments Section -->
        <div class="comments-section">
            <h2>Comments</h2>
        
            @if ($artwork->comments->isNotEmpty())
                @foreach ($artwork->comments as $comment)
                    <div class="comment" id="comment-{{ $comment->id }}">
                        <div class="comment-header">
                            <div class="comment-avatar">
                                <img src="{{ $comment->user->avatar_url ? asset('storage/' . $comment->user->avatar_url) : 'https://via.placeholder.com/40' }}" 
                                     alt="User Avatar" class="rounded-avatar">
                            </div>
                            <div class="comment-info">
                                <strong>{{ $comment->user->name ?? 'Anonymous' }}</strong>
                                <span class="comment-date">{{ $comment->created_at->format('M d, Y') }}</span>
                            </div>
        
                            <div class="comment-actions">
                                @if (Auth::check() && $comment->user_id === Auth::id())
                                    <button class="three-dots-btn">
                                        <span class="dot"></span>
                                        <span class="dot"></span>
                                        <span class="dot"></span>
                                    </button>
                                    <div class="action-menu" id="action-menu-{{ $comment->id }}">
                                        <button class="btn-edit-comment" data-comment-id="{{ $comment->id }}">Edit</button>
                                        <button class="btn-delete-comment" data-comment-id="{{ $comment->id }}">Delete</button>
                                    </div>
                                @endif
                            </div>
                        </div>
        
                        <p class="comment-content" id="comment-content-{{ $comment->id }}">{{ $comment->content }}</p>
        
                        <div class="editable-comment" id="editable-comment-{{ $comment->id }}" style="display: none;">
                            <form action="{{ route('comments.update', $comment->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <textarea name="content" rows="2" required>{{ $comment->content }}</textarea>
                                <button type="submit" class="btn-update-comment">Update</button>
                                <button type="button" class="btn-cancel-edit" data-comment-id="{{ $comment->id }}">Cancel</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            @else
                <p>No comments yet. Be the first to comment!</p>
            @endif
        
            <br>
            @if (Auth::check())
                <div class="comment-form">
                    <h3>Leave a Comment</h3>
                    <form action="{{ route('comments.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="artwork_id" value="{{ $artwork->id }}">
                        <textarea name="content" rows="4" placeholder="Write your comment..." required></textarea>
                        <button type="submit" class="btn-submit-comment">Add Comment</button>
                    </form>
                </div>
            @else
                <p>Please <a href="{{ route('login') }}">log in</a> to leave a comment.</p>
            @endif
        </div>
        
        <!-- Add CSS for styling -->
        <style>


        </style>
        





        <div class="divider"></div>



<!-- Modal for Delete Confirmation -->
<div id="delete-modal" class="modal" style="display: none;">
    <div class="modal-content">
        <h3 class="modal-title">Delete Comment</h3>
        <p class="modal-text">Are you sure you want to delete your comment? This action cannot be undone.</p>
        <div class="modal-buttons">
            <button id="confirm-delete" class="btn btn-danger">Yes, Delete</button>
            <button id="cancel-delete" class="btn btn-secondary">Cancel</button>
        </div>
    </div>
</div>




          <!-- Footer -->
      <div class="footer">
            <!-- Logo and Contact Info -->
            <div class="footer-column footer-logo">
                <h3>VERETEI</h3>
                <p>+63 953 346 9617</p>
                <p>vereteigalla@gmail.com</p>
            </div>
            
            <!-- Links Section -->
            <div class="footer-column">
                <h3>Links</h3>
                <a href="#">Home</a>
                <a href="#">Explore</a>
                <a href="#">Auctions</a>
            </div>
    
            <!-- Info Section -->
            <div class="footer-column">
                <h3>Info</h3>
                <a href="#">About</a>
                <a href="#">Blogs</a>
                <a href="#">Contacts</a>
            </div>
    
            <!-- Social Media Section -->
            <div class="footer-column">
                <h3>Social</h3>
                <a href="#">Twitter</a>
                <a href="#">Facebook</a>
                <a href="#">Instagram</a>
            </div>
        </div>
    
        <script> 
        
        
        
        
        
        
        document.addEventListener('DOMContentLoaded', () => {
            const container = document.getElementById('artworksuserContainer');

            // Simulated fetch call to your Laravel backend
            fetch("{{ route('artworks.random') }}") // Adjust this route
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Loop through each category and artworks
                        Object.entries(data.artworks).forEach(([category, artworks]) => {
                            // Create category section
                            const section = document.createElement('div');
                            section.className = 'category-section';

                            // Add category title
                            const title = document.createElement('h2');
                            title.className = 'category-title';
                           
                            section.appendChild(title);

                            // Create container for artworks
                            const artworkContainer = document.createElement('div');
                            artworkContainer.className = 'artwork-container';

                            // Loop through the artworks and create a card for each one
                            artworks.forEach(artwork => {
                                const card = document.createElement('div');
                                card.className = 'artwork-item';  // This is where the styling will be applied

                                // Check if the image path exists and append the image
                                const imagePath = artwork.image_url || 'path/to/placeholder-image.jpg';  // Default to placeholder if no image URL
                                const imageAltText = artwork.title || 'Artwork Image';  // Default alt text if title is missing

                                // Dynamically insert the artwork card content
                                card.innerHTML = `
                                    <div class="artwork-item">
                                        <img src="${imagePath}" alt="${imageAltText}" class="artwork-image" onError="this.onerror=null;this.src='path/to/placeholder-image.jpg';">
                                        <div class="artwork-info">
                                            <p class="artwork-title">${artwork.title}</p>
                                            <p class="artwork-category">${artwork.category}</p>
                                        </div>
                                    </div>
                                `;

                                artworkContainer.appendChild(card);
                            });

                            // Append artwork container to the section
                            section.appendChild(artworkContainer);
                            // Append the section to the main container
                            container.appendChild(section);
                        });
                    } else {
                        // Handle case where no data is returned
                        const noDataMessage = document.createElement('p');
                        noDataMessage.textContent = "No artworks available at the moment.";
                        container.appendChild(noDataMessage);
                    }
                })
                .catch(error => {
                    console.error('Error fetching artworks:', error);
                    const errorMessage = document.createElement('p');
                    errorMessage.textContent = "Error loading artworks. Please try again later.";
                    container.appendChild(errorMessage);
                });
        });

        // Function to handle adding an artwork to the cart
        function addToCart(artworkId) {
            alert(`Artwork ${artworkId} added to cart!`);
            // Implement actual add-to-cart functionality here
        }

   

   document.addEventListener("DOMContentLoaded", function () {
    const threeDotBtns = document.querySelectorAll('.three-dots-btn');
    const actionMenus = document.querySelectorAll('.action-menu');
    const deleteButtons = document.querySelectorAll('.btn-delete-comment');
    const deleteModal = document.getElementById('delete-modal');
    const confirmDeleteBtn = document.getElementById('confirm-delete');
    const cancelDeleteBtn = document.getElementById('cancel-delete');

    // Show/Hide action menu
    threeDotBtns.forEach(button => {
        button.addEventListener('click', function (event) {
            event.stopPropagation();
            const actionMenu = this.nextElementSibling;
            // Toggle the visibility of the current action menu
            actionMenus.forEach(menu => {
                menu.style.display = menu === actionMenu && actionMenu.style.display !== 'block' ? 'block' : 'none';
            });
        });
    });

    // Close action menus when clicking outside
    document.addEventListener('click', function () {
        actionMenus.forEach(menu => {
            menu.style.display = 'none';
        });
    });

    // Edit Comment
    document.querySelectorAll('.btn-edit-comment').forEach(button => {
        button.addEventListener('click', function () {
            const commentId = this.getAttribute('data-comment-id');
            document.getElementById(`comment-content-${commentId}`).style.display = 'none'; // Hide original content
            document.getElementById(`editable-comment-${commentId}`).style.display = 'block'; // Show edit form
            document.getElementById(`action-menu-${commentId}`).style.display = 'none'; // Hide action menu
        });
    });

    // Cancel Edit
    document.querySelectorAll('.btn-cancel-edit').forEach(button => {
        button.addEventListener('click', function () {
            const commentId = this.getAttribute('data-comment-id');
            document.getElementById(`comment-content-${commentId}`).style.display = 'block'; // Show original content
            document.getElementById(`editable-comment-${commentId}`).style.display = 'none'; // Hide edit form
        });
    });

    // Open delete confirmation modal
    deleteButtons.forEach(button => {
        button.addEventListener('click', function () {
            const commentId = this.getAttribute('data-comment-id');
            confirmDeleteBtn.setAttribute('data-comment-id', commentId); // Set the comment ID
            deleteModal.style.display = 'block'; // Show delete modal
        });
    });

    // Confirm delete
    confirmDeleteBtn.addEventListener('click', function () {
        const commentId = this.getAttribute('data-comment-id');
        fetch(`/comments/${commentId}`, {
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })
            .then(response => {
                if (response.ok) {
                    // Remove the comment from the DOM
                    document.getElementById(`comment-${commentId}`).remove();
                    alert("Comment deleted successfully.");
                } else {
                    return response.json().then(data => {
                        console.error(data.message || "Failed to delete the comment.");
                        alert(data.message || "Failed to delete the comment.");
                    });
                }
                deleteModal.style.display = 'none'; // Hide modal after deletion
            })
            .catch(error => {
                console.error("An error occurred:", error);
                alert("An error occurred. Please try again.");
                deleteModal.style.display = 'none';
            });
    });

    // Cancel delete
    cancelDeleteBtn.addEventListener('click', function () {
        deleteModal.style.display = 'none'; // Hide delete modal
    });

    // Close modal on outside click
    window.addEventListener('click', function (event) {
        if (event.target === deleteModal) {
            deleteModal.style.display = 'none';
        }
    });
});












    function addToCart(artworkId) {
        fetch('/cart/add', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ artwork_id: artworkId })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert(data.message); // Artwork added successfully
            } else {
                alert(data.message); // Artwork already in cart
            }
        })
        .catch(error => console.error('Error:', error));
    }

            
        document.addEventListener('DOMContentLoaded', () => {
            const dropdownToggle = document.querySelector('.user-dropdown-toggle');
            const dropdownMenu = document.querySelector('.dropdown-menu');
    
            dropdownToggle.addEventListener('click', (e) => {
                e.stopPropagation(); // Prevent event from propagating
                dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
            });
    
            // Close dropdown when clicking outside
            document.addEventListener('click', () => {
                dropdownMenu.style.display = 'none';
            });
        });
    </script>
    
    </body>
    </html>
    
    </x-plain-layout>
    




