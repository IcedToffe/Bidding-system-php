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
                background-image: url('https://images.photowall.com/interiors/68025/landscape/painting/room27.jpg?w=2000&q=80'); /* Replace with your banner image */
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
    
           
            /* Main Auction Section */
            .auction-section {
                max-width: 1200px;
                margin: 40px auto;
                padding: 20px;
            }
    
                   /* Auction Header Flexbox */
                   .auction-header {
                display: flex;
                align-items: center;
                gap: 20px;
            }
    
            .auction-header h1 {
                font-size: 32px;
                font-weight: bold;
            }
    
            .auction-header p {
                font-size: 16px;
                color: #555;
            }
            
    
            .auction-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                gap: 20px;
            }
    
            .auction-item {
                border: 1px solid #ccc;
                border-radius: 8px;
                overflow: hidden;
                background-color: #f9f9f9;
            }
    
            .auction-item img {
                width: 100%;
                height: 200px;
                object-fit: cover;
            }
    
            .auction-item .details {
                padding: 15px;
                text-align: center;
            }
    
            .auction-item h3 {
                font-size: 16px;
                margin-bottom: 5px;
                font-weight: bold;
            }
    
            .auction-item p {
                font-size: 14px;
                color: #777;
            }
    
            .auction-item .bid-info {
                margin-top: 10px;
                font-size: 14px;
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

    
    
    
    
            .auction-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            margin-top: 20px;
        }
    
        .auction-item {
            border: 1px solid #ccc;
            border-radius: 8px;
            width: 220px; /* Fixed width for consistent alignment */
            padding: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
            background-color: #f9f9f9;
        }
    
        .auction-item img {
            width: 100%; /* Ensures the image fits the container */
            height: 150px; /* Fixed height for alignment */
            object-fit: cover; /* Ensures the image scales correctly without distortion */
            border-radius: 5px;
            margin-bottom: 10px;
        }
    
        .auction-item h3 {
            font-size: 1.2em;
            margin: 10px 0;
        }
    
        .auction-item p {
            margin: 5px 0;
            font-size: 0.9em;
        }
    
        .auction-item .bid-info {
            font-weight: bold;
            color: #555;
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
            <div class="dropdown-menu" style="display: none; position: absolute; top: 100%; right: 0; background: white; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); border-radius: 5px; min-width: 150px; z-index: 1000; margin-left: -10rem">
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
            <h1>AUCTION</h1>
            <p>Home / Auction</p>
        </div>
    
    
        <!-- Main Auction Section -->
        <div class="auction-section">
            <!-- Auction Header -->
            <div class="auction-header">
                <h1>AUCTION</h1>
                <p>
                    Bid on works you love with auctions on Veretei Gallery. With bidding opening daily,
                    Veretei connects collectors like you to art from leading auction houses, nonprofit
                    organizations, and sellers across the globe. We feature premium artworks including modern,
                    historical, and street art, so you can find works by your favorite artists—and discover
                    new ones—all in one place.
                </p>
            </div>
    
    
    
    
            
    
            <br>
            <p>__________________________________________________________________________________________________________________________________</p><br><br><br>
    



            <div class="sort-controls">
                <label for="sortDate">Sort by Date:</label>
                <select id="sortDate" onchange="applyAuctionSorting()">
                    <option value="newest">Newest</option>
                    <option value="oldest">Oldest</option>
                </select>
            
                <label for="sortPrice">Sort by Price:</label>
                <select id="sortPrice" onchange="applyAuctionSorting()">
                    <option value="highest">Highest</option>
                    <option value="lowest">Lowest</option>
                </select>
            </div>
            


    <!-- User Dashboard Auctions Section -->
  
    <div class="auction-grid" id="userAuctionsGrid">
        <!-- Auctions will be dynamically populated here -->
    </div>
    
    
    
    
    
            </div>
        </div>
    </div><br>
    
    
    
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
    



    

    let auctionsData = []; // To store fetched auctions data globally

document.addEventListener('DOMContentLoaded', function () {
    fetch('/auctions')
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                auctionsData = data.auctions; // Store fetched data globally
                displayAuctions(auctionsData); // Display initially without sorting
            } else {
                alert('Failed to fetch auctions. Please try again.');
            }
        })
        .catch(error => console.error('Error fetching auctions:', error));
});

// Function to display auctions in the grid
function displayAuctions(auctions) {
    const gridContainer = document.getElementById('userAuctionsGrid');
    gridContainer.innerHTML = ''; // Clear existing grid items

    auctions.forEach(auction => {
        const endDate = new Date(auction.created_at);
        endDate.setDate(endDate.getDate() + auction.duration_days);

        const gridItem = document.createElement('div');
        gridItem.classList.add('auction-item');

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

    // Re-initialize countdown timers after re-rendering
    initializeCountdownTimers();
}

// Function to sort auctions and re-display them
function applyAuctionSorting() {
    const sortDate = document.getElementById('sortDate').value;
    const sortPrice = document.getElementById('sortPrice').value;

    let sortedAuctions = [...auctionsData]; // Copy the original data

    // Sort by date
    if (sortDate === 'newest') {
        sortedAuctions.sort((a, b) => new Date(b.created_at) - new Date(a.created_at));
    } else if (sortDate === 'oldest') {
        sortedAuctions.sort((a, b) => new Date(a.created_at) - new Date(b.created_at));
    }

    // Sort by price
    if (sortPrice === 'highest') {
        sortedAuctions.sort((a, b) => b.starting_price - a.starting_price);
    } else if (sortPrice === 'lowest') {
        sortedAuctions.sort((a, b) => a.starting_price - b.starting_price);
    }

    // Re-display sorted auctions
    displayAuctions(sortedAuctions);
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
    