<x-plain-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
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
                color:black;
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
                top: 100%;
                left: 0;
                min-width: 200px;
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
            }
    
            /* Header Section */
            .header {
                background-image: url('https://images.photowall.com/interiors/61675/landscape/wallpaper/room103.jpg?w=2000&q=80'); /* Replace with your banner image */
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
            .footer {
                background-color: #2e2e2e;
                padding: 40px 20px;
                display: flex;
                justify-content: space-between;  /* Align the columns horizontally */
                align-items: flex-start;  /* Align the columns at the top */
                flex-wrap: wrap;  /* Stack columns on smaller screens */
                color: white;
                gap: 40px;  /* Add some space between the columns */
            }
    
            .footer-column {
                display: flex;
                flex-direction: column;
                gap: 10px;
                min-width: 250px;  /* Prevent columns from becoming too small */
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
    
            .footer-logo {
                font-size: 22px;
                font-weight: bold;
                text-align: center;
            }
    
            .footer-logo p {
                margin-top: 10px;
                line-height: 1.5;
            }
    
            @media (max-width: 768px) {
                .footer {
                    padding: 20px;
                    justify-content: center;
                    align-items: center;
                    text-align: center;
                }
    
                .footer-column {
                    align-items: center;
                    text-align: center;
                    margin-bottom: 20px;
                }
    
                .footer-column h3 {
                    font-size: 16px;
                }
    
                .footer-column p, .footer-column a {
                    font-size: 12px;
                }
            }
    
            /* "Rate Us" Dropdown Styling */
            select {
                padding: 15px 30px;  /* Increase the padding to make it bigger */
                border-radius: 50px;  /* Oval shape */
                border: 1px solid #ccc;
                background-color: #f8f8f8;
                font-size: 18px;  /* Increase font size */
                appearance: none;
                cursor: pointer;
                width: 250px;  /* Set a fixed width for better control */
            }
    
            label {
                font-size: 14px;
                margin-bottom: 5px;
            }
    
            button[type="submit"] {
                background-color: #f5a623;
                color: white;
                padding: 10px 20px;
                border: none;
                border-radius: 25px;
                font-size: 14px;
                cursor: pointer;
            }
    
            /* Position the "Rate Us" dropdown to the left edge of the message box */
            .rate-us-container {
                width: 100%;
                max-width: 600px;  /* Ensure the dropdown is aligned with the message box */
                display: flex;
                justify-content: flex-start;  /* Align it to the left */
                margin-top: 15px;
            }
    
        </style>
    </head>
    <body>
    
        <!-- Navbar -->
        <nav class="navbar">
            <div class="navbar-logo">
                <img src="https://i.pinimg.com/564x/f8/1e/1a/f81e1ab9ea040c0c96e0ca356595360c.jpg" alt="Veretei Gallery Logo">
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
                <a href="{{ route('cart') }}" aria-label="Cart">
                    <i class="fas fa-shopping-cart"></i>
                </a>
    
                <div class="dropdown" style="position: relative; display: inline-block;">
                    <button class="user-dropdown-toggle" aria-label="User Options" style="background: none; border: none; cursor: pointer; padding: 0;">
                        <i class="fas fa-user-circle"></i>
                    </button>
    
                    <div class="dropdown-menu" style="display: none;">
                        <a href="{{ route('home') }}" class="dropdown-item">Dashboard</a>
                        <a href="{{ route('ratefeedback') }}" class="dropdown-item">Rate & Feedback</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    
        <div class="header">
            <h1>CONTACTS</h1>
            <p>Home / Contacts</p>
        </div>
    
    <!-- Contact Form Section -->
    <div class="contact-section" style="padding: 50px 20px; max-width: 800px; margin: auto;">
        <h2 style="text-align: left; font-size: 36px; font-weight: bold; margin-bottom: 10px;">Get In Touch With Us</h2>
    
        <!-- Success Message -->
        @if (session('success'))
            <div class="alert alert-success" style="color: green; padding: 10px; border: 1px solid green; border-radius: 5px; margin-bottom: 20px;">
                {{ session('success') }}
            </div>
        @endif
    
        <!-- Divider -->
        <div class="divider" style="margin: 50px auto; max-width: 800px; border-bottom: 1px solid #000000;"></div>
    
        <form method="POST" action="{{ route('submit.contact') }}" style="display: flex; flex-direction: column; gap: 15px; align-items: center;">
            @csrf
            <div style="display: flex; gap: 15px; width: 100%; max-width: 600px;">
                <input type="text" name="name" placeholder="Name" required 
                       style="flex: 1; padding: 10px 15px; border-radius: 25px; border: 1px solid #ddd; font-size: 14px; background-color: #f8f8f8;">
                <input type="email" name="email" placeholder="Email" required 
                       style="flex: 1; padding: 10px 15px; border-radius: 25px; border: 1px solid #ddd; font-size: 14px; background-color: #f8f8f8;">
            </div>
            <textarea name="message" rows="5" placeholder="Message" required 
                      style="width: 100%; max-width: 600px; padding: 15px; border-radius: 25px; border: 1px solid #ddd; font-size: 14px; background-color: #f8f8f8; resize: none;"></textarea>
    
            <!-- Rating Dropdown (added below the message box, left-aligned) -->
            <div class="rate-us-container">
                <label for="rating">Rate Us:</label>
                <select name="rating" id="rating" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
    
            <label style="display: flex; align-items: center; font-size: 12px; color: #777; max-width: 600px; text-align: left;">
                <input type="checkbox" required style="margin-right: 10px;">
                By using this form you agree with the storage and handling of your data by this website.
            </label>
    
            <button type="submit" 
                    style="background-color: #f5a623; color: white; padding: 10px 20px; border: none; border-radius: 25px; font-size: 14px; cursor: pointer;">
                Send Message
            </button>
        </form>
    </div>
    
    <!-- Divider -->
    <div class="divider" style="margin: 50px auto; max-width: 800px; border-bottom: 1px solid #000000;"></div>
    
    <!-- Footer -->
    {{-- <div class="footer">
        <div class="footer-column">
            <h3>About Us</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="footer-column">
            <h3>Useful Links</h3>
            <a href="#">FAQ</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
        </div>
        <div class="footer-column">
            <h3>Contact</h3>
            <p>Email: support@veretei.com</p>
            <p>Phone: +123 456 7890</p>
        </div>
        <div class="footer-column footer-logo">
            <h3>Veretei Gallery</h3>
            <p>&copy; 2024 Veretei. All Rights Reserved.</p>
        </div>
    </div> --}}
    
    </body>
    </html>
    </x-plain-layout>
    