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
                background-image: url('https://image.architonic.com/pro2-3/20712895/van-gogh--the-starry-night-pro-b-arcit18.jpg'); /* Replace with your banner image */
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
            /* Reset, navbar, and footer styling here (unchanged) */
    /* About Section Styling */
.about-section {
    max-width: 1200px; /* Set max-width for better control */
    margin: 100px auto; /* Centers the section */
    padding: 40px 20px; /* Adds padding inside the section */
    background-image: url('https://i.pinimg.com/originals/a1/bf/4e/a1bf4e4f5633e1f522f1a184607d9e13.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    color: #333;
    text-align: center; /* Center the text inside the section */
    border-radius: 10px;
}

/* About Section Content Styling */
.about-content {
    background-color: rgba(255, 255, 255, 0.8); /* Slight background for readability */
    padding: 40px;
    border-radius: 10px;
    max-width: 1000px;
    margin: 0 auto;
}

.about-content h2 {
    font-size: 32px;
    font-weight: bold;
    margin-bottom: 20px;
}

.about-content p {
    font-size: 16px;
    line-height: 1.6;
    color: #555;
    text-align: center;
    margin: 0 auto;
    max-width: 800px;
}

/* Divider Styling */
.divider {
    margin: 50px 0;
    border-bottom: 1px solid #ccc;
    width: 80%;
    margin-left: auto;
    margin-right: auto;
}

/* Staff Section Styling */
.staff-section {
    margin: 50px auto;
    padding: 50px 20px;
    text-align: center; /* Center the heading and content */
    max-width: 1200px; /* Ensure the section doesn't stretch too wide */
}

.staff-section h2 {
    font-size: 28px;
    font-weight: bold;
    margin-bottom: 20px;
}

.staff-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); /* Flexible grid with minimum size for items */
    gap: 20px;
    justify-items: center; /* Centers the items inside each grid cell */
}

.staff-member {
    background-color: #fff; /* White background for the box */
    border: 1px solid #ddd; /* Light border around the box */
    border-radius: 8px; /* Slightly rounded corners */
    padding: 20px;
    text-align: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
    transition: transform 0.3s ease, box-shadow 0.3s ease; /* Smooth hover effects */
}

.staff-member:hover {
    transform: translateY(-5px); /* Slightly lift the box on hover */
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2); /* Deeper shadow on hover */
}

.staff-member img {
    width: 100%; /* Make image fit the width of the box */
    height: 200px; /* Fixed height for the image */
    object-fit: cover; /* Ensure the image covers the area without stretching */
    border-radius: 8px; /* Rounded corners on the image */
    margin-bottom: 10px; /* Space between image and text */
}

.staff-member h3 {
    font-size: 18px;
    margin-top: 10px;
    font-weight: bold;
}

.staff-member p {
    font-size: 14px;
    color: #777;
}

/* Footer Styling */
.footer {
    background-color: #2e2e2e;
    padding: 40px 20px;
    display: flex;
    justify-content: center;
    align-items: flex-start;
    flex-wrap: wrap;
    gap: 40px;
    color: white;
}

.footer-column {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px;
    min-width: 200px;
    text-align: center;
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











/* Container styling */
#userAuctionsGrid {
    display: flex;
    flex-wrap: wrap; /* Allows items to wrap to the next row */
    gap: 20px; /* Space between grid items */
    justify-content: center; /* Center items horizontally */
    align-items: stretch; /* Align items vertically */
    padding: 10px;
}

/* Each auction item */
.auction-item {
    display: flex;
    flex-direction: column; /* Stack content vertically */
    width: 250px; /* Set consistent width */
    background-color: #f9f9f9; /* Light background for contrast */
    border: 1px solid #ddd; /* Subtle border */
    border-radius: 8px; /* Rounded corners */
    overflow: hidden; /* Prevent content overflow */
    text-align: center; /* Center-align text */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Subtle shadow */
    transition: transform 0.3s ease;
}

.auction-item:hover {
    transform: scale(1.05); /* Slight zoom on hover */
}

/* Auction image */
.auction-item img {
    width: 100%; /* Image fills the width of the container */
    height: 180px; /* Set consistent height */
    object-fit: cover; /* Maintain aspect ratio, crop excess */
    border-bottom: 1px solid #ddd; /* Separate image from content */
}

/* Auction title */
.auction-item h3 {
    margin: 10px 0;
    font-size: 18px;
    font-weight: bold;
    color: #333;
}

/* Auction details */
.auction-item p {
    margin: 5px 0;
    font-size: 14px;
    color: #555;
}

/* Countdown timer styling */
.countdown {
    font-weight: bold;
    color: #e74c3c; /* Highlight countdown in red */
}











/* Responsive Design for smaller screens */
@media (max-width: 768px) {
    .about-section {
        padding: 30px;
    }

    .staff-grid {
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); /* Stack smaller staff items */
    }

    .staff-member img {
        width: 200px;
        height: 200px; /* Smaller images on mobile */
    }

    .footer {
        flex-direction: column;
        align-items: center;
        padding: 20px;
    }

    .footer-column {
        text-align: center;
    }

    .footer-column h3 {
        font-size: 16px;
    }

    .footer-column p, .footer-column a {
        font-size: 12px;
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
            <h1>ABOUT</h1>
            <p>Home / About</p>
        </div>
    
    
        <!-- About Section -->
        <div class="about-section">
            <div class="about-content">
    
                <h2>Welcome to Veretei Gallery, {{ Auth::user()->name }}</h2>
                <p>At Veretei Gallery, we’re proud to offer a thoughtfully curated selection of artworks, paired with a personal and approachable experience. Our focus is on connecting collectors and art lovers with pieces that inspire, whether through private sales or auctions. We aim to make the process of buying and selling art smooth and enjoyable, while building lasting relationships within the art community.</p>
    
                <div class="divider"></div>
    
                <h2>What Is Veretei Gallery?</h2>
                <p>Welcome to Veretei Gallery, where art comes to life! We are an online platform dedicated to showcasing and auctioning a curated selection of exceptional artworks and sculptures from talented creators around the world. Whether you’re a passionate collector, an art enthusiast, or simply someone looking to discover inspiring pieces, we provide a space where artistry and innovation meet.</p><br>
                <p>Our collection spans various mediums, styles, and periods, offering something for every taste. We connect artists with buyers, providing opportunities for creators to showcase their works and for collectors to find unique pieces that resonate with them.</p><br>
                <p>At Veretei Gallery, we believe in the power of art to inspire, evoke emotion, and transform spaces. Join us in supporting artists and their incredible journeys by exploring our auctions or directly purchasing a piece that speaks to you.</p><br>
            </div>
        </div>
   

<div class="divider"></div>
    
    


        
        <div class="explore-section" style="color: black; font-size: 22px; font-weight: bold; text-align: center; background-color: #f7f7f7; padding: 40px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);">
            <div class="explore-content" style="max-width: 800px; margin: auto;">
                <h1 style="font-size: 36px; margin-bottom: 20px; color: #333; font-weight: bold;">Explore Different Artworks</h1>
                <div class="divider" style="width: 80px; height: 4px; background-color: #FF7F50; margin: 20px auto;"></div>
                <p style="font-size: 18px; line-height: 1.6; color: #555;">
                    Our collection currently consists of more than 50 paintings and artworks dating from ancient times to the modern period.
                </p>
            </div>
        </div>
        
    


        <div class="divider"></div>
    
    


        



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
    




    <div class="explore-section" style="color: black; font-size: 22px; font-weight: bold; text-align: center; background-color: #f7f7f7; padding: 40px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);">
        <div class="explore-content" style="max-width: 800px; margin: auto;">
            <h1 style="font-size: 36px; margin-bottom: 20px; color: #333; font-weight: bold;">Explore Different Auctions</h1>
            <div class="divider" style="width: 80px; height: 4px; background-color: #FF7F50; margin: 20px auto;"></div>
            <p style="font-size: 18px; line-height: 1.6; color: #555;">
                Our collection currently consists of more than 50 paintings and artworks dating from ancient times to the modern period.
            </p>
        </div>
    </div>
    





    <div class="divider"></div>
    
    




    
    
<!-- User Dashboard Auctions Section -->

<div class="auction-grid" id="userAuctionsGrid">
<!-- Auctions will be dynamically populated here -->
</div>



<div class="divider"></div>
    
    










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











        document.addEventListener('DOMContentLoaded', function () {
    fetch('/auctions')
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                const gridContainer = document.getElementById('userAuctionsGrid');
                gridContainer.innerHTML = ''; // Clear existing grid items

                data.auctions.forEach(auction => {
                    const endDate = new Date(auction.created_at);
                    endDate.setDate(endDate.getDate() + auction.duration_days);

                    const gridItem = document.createElement('div');
                    gridItem.classList.add('auction-item');

                    // Create a link to view the specific auction
                    gridItem.innerHTML = `
                        <a href="/auction/${auction.id}">
                            <img src="${auction.image_path}" alt="${auction.title}">
                            <h3>${auction.title}</h3>
                            <p>Starting Price: $${auction.starting_price}</p>
                            <p>Ends In: <span class="countdown" data-end-time="${endDate.toISOString()}"></span></p>
                            <p class="bid-info">Created At: ${new Date(auction.created_at).toLocaleDateString()}</p>
                        </a>
                    `;

                    gridContainer.appendChild(gridItem);
                });

                // Initialize countdown timers for all auctions
                initializeCountdownTimers();
            } else {
                alert('Failed to fetch auctions. Please try again.');
            }
        })
        .catch(error => console.error('Error fetching auctions:', error));
});

    
    function initializeCountdownTimers() {
        const countdownElements = document.querySelectorAll('.countdown');
    
        countdownElements.forEach(element => {
            const endTime = new Date(element.getAttribute('data-end-time'));
    
            function updateCountdown() {
                const now = new Date();
                const timeLeft = endTime - now;
    
                if (timeLeft <= 0) {
                    element.textContent = 'Auction Ended';
                    clearInterval(intervalId); // Stop updating once the auction ends
                    return;
                }
    
                const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
                const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);
    
                element.textContent = `${days}d ${hours}h ${minutes}m ${seconds}s`;
            }
    
            // Start the countdown timer for this auction
            const intervalId = setInterval(updateCountdown, 1000);
            updateCountdown(); // Run it immediately for initial display
        });
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
    