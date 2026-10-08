<x-plain-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Veretei Gallery - Rate & Feedback</title>
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
    color: black;
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

/* Feedback Container
.feedback-container {
    background-color: #fff;
    padding: 20px 30px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 500px;
    
} */

/* Center the feedback container */
.center-container {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: calc(100vh - 150px); /* Adjust for navbar and footer height */
    background-color: #EEEDE0; /* Match the page background */
}

/* Prevent feedback container from stretching */
.feedback-container {
    background-color: #fff;
    padding: 20px 30px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 90%; /* Ensure it doesn't exceed the viewport width */
    width: 500px; /* Maintain original size */
    margin: 0 auto; /* Center horizontally in smaller viewports */
}

/* Title */
.feedback-container h1 {
    font-size: 24px;
    margin-bottom: 10px;
}

/* Divider */
.divider {
    border: none;
    border-top: 2px solid #ddd;
    margin: 10px 0 20px;
}

/* Rating Section */
.rating-section {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 20px;

}

.rating-section label {
    font-size: 16px;
    font-weight: bold;
}

.rating-display {
    background-color: #f5f5f5;
    padding: 8px 15px;
    border-radius: 20px;
    box-shadow: inset 0 2px 5px rgba(0, 0, 0, 0.1);
    font-size: 14px;
}

#rating {
    width: 100%;
    -webkit-appearance: none;
    appearance: none;
    height: 8px;
    background: #ccc;
    border-radius: 4px;
    outline: none;
    cursor: pointer;
}

#rating::-webkit-slider-thumb {
    -webkit-appearance: none;
    appearance: none;
    width: 20px;
    height: 20px;
    background: #ddd;
    border-radius: 50%;
    cursor: pointer;
    border: 2px solid #aaa;
}

#rating::-moz-range-thumb {
    width: 20px;
    height: 20px;
    background: #ddd;
    border-radius: 50%;
    cursor: pointer;
    border: 2px solid #aaa;
}

/* Feedback Section */
.feedback-section {
    margin-bottom: 20px;
}

.feedback-section label {
    display: block;
    font-size: 16px;
    font-weight: bold;
    margin-bottom: 5px;
}

#feedback {
    width: 100%;
    height: 120px;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 8px;
    background-color: #f5f5e7;
    font-size: 14px;
    resize: none;
    box-shadow: inset 0 2px 5px rgba(0, 0, 0, 0.1);
}

/* .success-message {
    background-color: #d4edda;
    color: #155724;
    padding: 15px;
    border: 1px solid #c3e6cb;
    border-radius: 5px;
    margin-bottom: 20px;
    font-size: 14px;
} */

/* Submit Button */
.submit-button {
    width: 100%;
    padding: 10px 0;
    background-color: #c89c5a;
    color: white;
    font-size: 16px;
    font-weight: bold;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.submit-button:hover {
    background-color: #a77d47;
}

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


.footer-column a {
    font-size: 14px;
    color: #fff;
    text-decoration: none;
}

.footer-column p{
    font-size: 14px;
    color: #fff;
    text-decoration: none;
    align-items: center;  /* Center the content inside each column */

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
            <div class="navbar-logo">
                <img src="https://i.pinimg.com/564x/f8/1e/1a/f81e1ab9ea040c0c96e0ca356595360c.jpg" alt="Logo">
                Veretei Gallery
            </div>
            <div class="navbar-search">
                <input type="text" placeholder="Search...">
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
                <a href="{{ route('cart') }}"><i class="fas fa-shopping-cart"></i></a>
                <div class="dropdown">
                    <i class="fas fa-user-circle dropdown-toggle"></i>
                    <div class="dropdown-menu">
                        <a href="{{ route('home') }}">Dashboard</a>
                        <a href="{{ route('ratefeedback') }}">Rate & Feedback</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </nav><br><br>

        <!-- Feedback Form -->
    <!-- Centered Feedback Container -->
    <div class="center-container">
        <div class="feedback-container">
            <h1>Rate & Send Feedback</h1>

            <!-- Display Success Message -->
            @if(session('success'))
            <div style="background-color: #d4edda; color: #155724; padding: 15px; border: 1px solid #c3e6cb; border-radius: 5px; margin-bottom: 20px;">
                {{ session('success') }}
            </div>
            @endif

            <form action="{{ route('ratefeedback.store') }}" method="POST">
                @csrf
                <!-- Rating Section -->
                <div class="rating-section">
                    <label for="rating">Rate (1-10):</label>
                    <input type="range" id="rating" name="rating" min="1" max="10" value="5" oninput="updateRatingValue(this.value)">
                    <div id="rating-display" style="margin-top: 10px; font-weight: bold;">5/10</div>
                </div>

                <!-- Feedback Section -->
                <div class="feedback-section">
                    <label for="feedback">Your Feedback:</label>
                    <textarea id="feedback" name="feedback" placeholder="Write your feedback..." required></textarea>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="submit-button">Send</button>
            </form>
        </div>
    </div><br><br>

        <!-- Footer -->
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
        <p>&copy; 2024 Veretei Gallery. All Rights Reserved.</p>
    </div>
</div>

        <script>
            // Update the rating display dynamically
            function updateRatingValue(value) {
                document.getElementById('rating-display').innerText = `${value}/10`;
            }
        </script>
    </body>
    </html>
</x-plain-layout>
