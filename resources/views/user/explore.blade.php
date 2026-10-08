<x-plain-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Veretei Gallery - About</title>
        @vite('resources/css/app.css')
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
            rel="stylesheet">
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
    
    
            /* Styling for the icon buttons */
            .navbar-icons {
            display: flex;
            gap: 15px;
            align-items: center;
            margin-left: 20px; /* Adds space between links and icons */
             }
    
            .navbar-icons a {
            color: white; /* Ensures the icon color is white */
            font-size: 18px;
            text-decoration: none;
            cursor: pointer;
             }
    
            .navbar-icons a:hover {
            color: #ccc; /* Changes color on hover for a slight effect */
            }
    
            .dropdown-menu {
            background: white;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            overflow: hidden;
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
    
    
        
            /* Header Section */
            .header {
                background-image: url('https://images.photowall.com/interiors/45223/landscape/wallpaper/room85.jpg?w=2000&q=80'); /* Replace with your banner image */
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
                max-width: 1500px;
                margin: 100px auto;
                padding: 20px;
                background-image: url('https://i.pinimg.com/originals/a1/bf/4e/a1bf4e4f5633e1f522f1a184607d9e13.jpg'); /* Add background image as shown */
                background-repeat: no-repeat;
                background-size: cover;
                color: #333;
            }
    
            /* .about-content {
                background-color: rgba(255, 255, 255, 0.9); /* Slight background color for readability */
                /* padding: 30px;
                border-radius: 8px;
            } */ 
    
            .about-content h2 {
                font-size: 32px;
                font-weight: bold;
                margin-bottom: 20px;
            }
    
            .about-content p {
                font-size: 16px;
                line-height: 1.6;
                color: #555;
                text-align: left;
                margin-right: 500px;
                
            }
    
            .divider {
                margin: 50px 0;
                border-bottom: 1px solid #ccc;
            }
    
                    /* Staff Section Styling */
            .staff-section {
                text-align: left;
                margin: 50px auto;
                margin-left: 50px;
                padding: 100px;
            }
    
            .divider {
                margin: 50px 0;
                border-bottom: 1px solid #ccc;
            }
    
            .staff-section h2 {
                font-size: 28px;
                font-weight: bold;
                margin-bottom: 20px;
                margin-right: 70px;
            }
    
            .staff-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
                gap: 20px;
            }
    
            .staff-member {
                text-align: center;
                padding: 10px;
                margin-right: 85px;
            }
    
            .staff-member img {
                width: 250px;
                height: 250px;
                border-radius: 20px;
                object-fit: cover;
            }
    
            .staff-member h3 {
                font-size: 16px;
                margin-top: 10px;
                font-weight: bold;
            }
    
            .staff-member p {
                font-size: 14px;
                color: #777;
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
    
    /* General styling */
    .image-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 15px;
        padding: 20px;
    }
    
    .image-wrapper {
        position: relative;
        width: 100%;
        overflow: hidden;
        aspect-ratio: 4/3;
        background: #f8f8f8;
        border: 1px solid #ddd;
        border-radius: 8px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    .image-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }
    
    .image-wrapper:hover img {
        transform: scale(1.1);
    }
    
    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 10px;
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    
    .image-wrapper:hover .overlay {
        opacity: 1;
    }
    
    .action-btn {
        background-color: rgba(255, 255, 255, 0.8);
        border: none;
        padding: 10px;
        border-radius: 50%;
        font-size: 18px;
        cursor: pointer;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }
    
    .action-btn:hover {
        background-color: #f0c040;
        transform: scale(1.1);
    }
    
    .action-btn i {
        color: #333;
    }
    
    /* Text below the image */
    .image-container p {
        font-size: 14px;
        color: #555;
        text-align: center;
        margin-top: 5px;
    }
    
    
    
    
        /* Sorting Controls */
        #sortingControls {
            margin: 20px 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    
        .sorting-label {
            font-size: 16px;
            margin-right: 10px;
            font-weight: bold;
            color: #5a5a5a;
        }
    
        .sorting-select {
            padding: 8px 15px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #d0d0d0;
            background-color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
        }
    
        .sorting-select:hover {
            background-color: #f1f1f1;
        }
    
        /* Category Buttons */
        .category-buttons {
            display: flex;
            justify-content: center;
            margin-top: 20px;
            flex-wrap: wrap;
        }
    
        .category-btn {
            background-color: #ff6a00; /* Roblox-like orange */
            color: white;
            border: none;
            padding: 12px 20px;
            font-size: 16px;
            border-radius: 8px;
            margin: 5px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }
    
        .category-btn:hover {
            background-color: #ff7f33; /* Slightly lighter orange */
            transform: scale(1.1);
        }
    
        .category-btn:active {
            background-color: #e55a00; /* Darker orange when clicked */
        }
    
    
    /* Responsive grid */
    .image {
        flex: 1 1 calc(25% - 30px); /* Default: 4 items per row */
        max-width: calc(25% - 30px);
        box-sizing: border-box;
    }
    
    /* Adjustments for smaller screens */
    @media (max-width: 1024px) {
        .image {
            flex: 1 1 calc(33.33% - 30px); /* 3 items per row */
            max-width: calc(33.33% - 30px);
        }
    }
    
    @media (max-width: 768px) {
        .image {
            flex: 1 1 calc(50% - 30px); /* 2 items per row */
            max-width: calc(50% - 30px);
        }
    }
    
    @media (max-width: 480px) {
        .image {
            flex: 1 1 100%; /* 1 item per row */
            max-width: 100%;
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
            <div class="dropdown-menu" style="display: none; position: absolute; top: 100%; right: 0; background: white; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); border-radius: 5px; min-width: 150px; z-index: 1000;margin-left: -10rem">
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
            <h1>EXPLORE</h1>
            <p>Home / Explore</p>
        </div>
    
        <div id="artworkModal" class="modal" style="display: none;">
            <div class="modal-content">
                <span class="close-btn" onclick="closeModal()">&times;</span>
                <h2 class="modal-title"></h2>
                <div class="modal-body"></div>
            </div>
        </div>
        
        <style>
            .modal {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.5);
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .modal-content {
                background: white;
                padding: 20px;
                border-radius: 5px;
                width: 500px;
                max-width: 90%;
            }
            .close-btn {
                float: right;
                cursor: pointer;
                font-size: 20px;
            }
        </style>
        
    
    
  
    
    <!-- Category Buttons -->
    <div id="categoryButtons" class="category-buttons">
        <button class="category-btn" onclick="filterByCategory('all')">All</button>
        <button class="category-btn" onclick="filterByCategory('Baroque')">Baroque</button>
        <button class="category-btn" onclick="filterByCategory('Impressionism')">Impressionism</button>
        <button class="category-btn" onclick="filterByCategory('Cubism')">Cubism</button>
        <button class="category-btn" onclick="filterByCategory('Neoclassical')">Neoclassical</button>
        <button class="category-btn" onclick="filterByCategory('Realism')">Realism</button>
        <button class="category-btn" onclick="filterByCategory('Fauvism')">Fauvism</button>
    </div>
    

    
    <!-- Sorting Controls -->
    <div id="sortingControls">
        <label for="priceSort" class="sorting-label">Sort by Price:</label>
        <select id="priceSort" onchange="sortArtworks()" class="sorting-select" style="width: 200px">
            <option value="asc">Lowest to Highest</option>
            <option value="desc">Highest to Lowest</option>
        </select>
    </div>
    
    
    
        <div id="userArtworksGrid" class="image-container">
            <!-- Artworks will be dynamically populated here -->
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
    document.addEventListener('DOMContentLoaded', function () {
        fetch('/artworks')
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    const userArtworksGrid = document.getElementById('userArtworksGrid');
                    userArtworksGrid.innerHTML = ''; // Clear existing content
    
                    // Store the artworks data in a variable for later filtering and sorting
                    window.artworksData = data.artworks;
    
                    // Display all artworks by default
                    displayArtworks(window.artworksData);
                } else {
                    alert('Failed to load artworks.');
                }
            })
            .catch(error => console.error('Error fetching artworks:', error));
    });
    
    // Function to display artworks based on filtered and sorted data
    function displayArtworks(artworks) {
        const userArtworksGrid = document.getElementById('userArtworksGrid');
        userArtworksGrid.innerHTML = ''; // Clear existing content
    
        artworks.forEach(artwork => {
            const gridItem = document.createElement('div');
            gridItem.className = 'image ' + artwork.category; // Add the category as a class
    
            gridItem.innerHTML = `
                <div class="image-wrapper">
                    <img src="${artwork.image_path}" alt="${artwork.title}">
                    <div class="overlay">
                        <button class="action-btn" onclick="addToCart(${artwork.id})">
                            <i class="fas fa-shopping-cart"></i> <!-- Cart Icon -->
                        </button>
                        <button class="action-btn" onclick="viewArtwork(${artwork.id})">
                            <i class="fas fa-eye"></i> <!-- View Icon -->
                        </button>
                    </div>
                </div>
                <p><strong>Title:</strong> ${artwork.title}<br><strong>Category:</strong> ${artwork.category}<br><strong>Price:</strong> $${artwork.price}</p>
            `;
            userArtworksGrid.appendChild(gridItem);
        });
    }
    
    // Filter artworks by category
    function filterByCategory(category) {
        let filteredArtworks;
        
        if (category === 'all') {
            // Show all artworks if "All" button is clicked
            filteredArtworks = window.artworksData;
        } else {
            // Filter artworks based on selected category
            filteredArtworks = window.artworksData.filter(artwork => artwork.category === category);
        }
    
        // Sort artworks before displaying them
        sortArtworks(filteredArtworks);
    }
    
    // Sort artworks based on price
    function sortArtworks(filteredArtworks = window.artworksData) {
        const sortOrder = document.getElementById('priceSort').value;
    
        // Sort artworks based on price
        filteredArtworks.sort((a, b) => {
            if (sortOrder === 'asc') {
                return a.price - b.price; // Lowest to Highest
            } else {
                return b.price - a.price; // Highest to Lowest
            }
        });
    
        // Display the sorted artworks
        displayArtworks(filteredArtworks);
    }
    
    function addToCart(artworkId) {
        fetch('/cart/add', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            },
            body: JSON.stringify({ artwork_id: artworkId }),
        })
        .then(response => response.json())
        .then(data => {
            if (data.message) {
                alert(data.message); // Show success or error message
            } else {
                alert('An error occurred while adding to the cart.');
            }
        })
        .catch(error => console.error('Error:', error));
    }
    
    function viewArtwork(artworkId) {
        fetch(`/artworks/${artworkId}`)
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    const modal = document.getElementById('artworkModal');
                    modal.querySelector('.modal-title').innerText = data.artwork.title;
                    modal.querySelector('.modal-body').innerHTML = `
                        <img src="${data.artwork.image_path}" alt="${data.artwork.title}" style="width: 100%; height: auto;">
                        <p><strong>Category:</strong> ${data.artwork.category}</p>
                        <p><strong>Description:</strong> ${data.artwork.description}</p>
                        <p><strong>Price:</strong> $${data.artwork.price}</p>
                    `;
                    modal.style.display = 'block';
                } else {
                    alert('Failed to load artwork details.');
                }
            })
            .catch(error => console.error('Error fetching artwork:', error));
    }
    
    
    
    
    
    
    function viewArtwork(artworkId) {
        window.location.href = `/artworks/view/${artworkId}`;
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
    
        // document.addEventListener("DOMContentLoaded", function () {
        // const filterButtons = document.querySelectorAll('.filter-btn');
        // const images = document.querySelectorAll('.image');
        // const loadMoreBtn = document.getElementById('load-more-btn');
        // let currentCategory = 'all';
    
        // // Add click event listeners to filter buttons
        // filterButtons.forEach(button => {
        //     button.addEventListener('click', filterImages);
        // });
    
        // loadMoreBtn.addEventListener('click', loadMoreImages);
    
        // function filterImages(e) {
        //     const category = e.target.getAttribute('data-filter');
        //     currentCategory = category;
    
        //     if (category === 'all') {
        //         // Show all images
        //         images.forEach(image => {
        //             image.style.display = 'block';
        //         });
        //         loadMoreBtn.style.display = 'none'; // Hide Load More button in "all" view
        //     } else {
        //         // Hide all images
        //         images.forEach(image => {
        //             image.style.display = 'none';
        //         });
    
        //         // Show only images of the selected category
        //         const categoryImages = document.querySelectorAll(`.${category}`);
        //         categoryImages.forEach((image, index) => {
        //             if (index < 3) {
        //                 image.style.display = 'block'; // Initially show up to 3 images
        //             }
        //         });
    
                // Show Load More button if there are hidden images in the category
        //         const hiddenImages = document.querySelectorAll(`.${category}[style="display: none;"]`);
        //         loadMoreBtn.style.display = hiddenImages.length > 0 ? 'block' : 'none';
        //     }
        // }
    
    //     function loadMoreImages() {
    //         // Show all hidden images from the current category
    //         const hiddenImages = document.querySelectorAll(`.${currentCategory}[style="display: none;"]`);
    //         hiddenImages.forEach(image => {
    //             image.style.display = 'block';
    //         });
    //         loadMoreBtn.style.display = 'none'; // Hide the button after all images are shown
    //     }
    // });
    // document.addEventListener("DOMContentLoaded", () => {
    //     const actionButtons = document.querySelectorAll(".action-btn");
    
    //     actionButtons.forEach(button => {
    //         button.addEventListener("click", () => {
    //             const action = button.textContent.trim();
    //             if (action === "Add to Cart") {
    //                 alert("Item added to cart!");
    //             } else if (action === "View") {
    //                 alert("Viewing item details.");
    //             }
    //         });
    //     });
    // });
    
    </script>
    
    </body>
    </html>
    
    </x-plain-layout>
    