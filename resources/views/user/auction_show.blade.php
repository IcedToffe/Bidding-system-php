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
         
         /* General Styles */
body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f9;
    margin: 0;
    padding: 0;
}

.auction-details {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    max-width: 1200px;
    margin: 20px auto;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    padding: 20px;
}

/* Image Styling */
.auction-image {
    flex: 1;
    max-width: 40%;
    margin-right: 20px;
}

.auction-image img {
    width: 100%;
    height: auto;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
}

/* Auction Details Info */
.auction-details-info {
    flex: 2;
    max-width: 58%;
}

.auction-header {
    margin-bottom: 20px;
}

.auction-title {
    font-size: 2rem;
    font-weight: bold;
    color: #333;
    margin-bottom: 10px;
}

.price-info {
    display: flex;
    justify-content: space-between;
    font-size: 1rem;
    color: #777;
}

.price-info .starting-price,
.price-info .created-at {
    margin-bottom: 5px;
}

.ends-in {
    font-size: 1rem;
    color: #ff5733; /* Accent color */
    font-weight: bold;
}

.auction-description {
    margin-top: 30px;
}

.section-title {
    font-size: 1.5rem;
    color: #333;
    margin-bottom: 15px;
}

.auction-actions {
    margin-top: 30px;
    padding: 20px;
    background-color: #f1f1f1;
    border-radius: 8px;
}

.auction-actions label {
    font-weight: bold;
    margin-bottom: 8px;
}

.auction-actions input {
    padding: 10px;
    font-size: 1.1rem;
    border: 2px solid #ccc;
    border-radius: 5px;
    width: 100%;
    margin-bottom: 15px;
    outline: none;
}

.auction-actions input:focus {
    border-color: #ff5733;
}

.error-message {
    color: red;
    font-size: 0.9rem;
    margin-bottom: 10px;
}

.place-bid-btn {
    padding: 12px;
    background-color: #ff5733;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 1.1rem;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.place-bid-btn:hover {
    background-color: #e04d2f;
}

/* Bidding History Section */
.bidding-history {
    margin-top: 40px;
}

.bidding-history ul {
    list-style-type: none;
    padding: 0;
}

.bid-entry {
    padding: 10px 0;
    border-bottom: 1px solid #ccc;
    color: #555;
}

.bid-entry strong {
    font-weight: bold;
}

.back-button {
    margin-top: 30px;
    text-align: center;
}

.btn.btn-back {
    padding: 12px 20px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn.btn-back:hover {
    background-color: #0056b3;
}
















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
            <h1>Auctions</h1>
            <p>Home / Auctions / {{ $auction->title }}</p>
        </div>
    
      





        <div class="auction-details">
            <!-- Auction Image Section -->
            <div class="auction-image">
                <img id="auctionImage" src="{{ asset($auction->image_path) }}" alt="{{ $auction->title }}">
            </div>
        
            <div class="auction-details-info">
                <!-- Auction Header -->
                <div class="auction-header">
                    <h2 class="auction-title">{{ $auction->title }}</h2>
                    <div class="price-info">
                        <p class="starting-price"><strong>Starting Price:</strong> ${{ number_format($auction->starting_price, 2) }}</p>
                        <p class="created-at"><strong>Created At:</strong> {{ $auction->created_at->format('M d, Y') }}</p>
                    </div>
                    <p class="ends-in"><strong>Ends In:</strong> <span id="auction-timer" class="timer"></span></p>
                </div>
        
                <!-- Auction Description -->
                <div class="auction-description">
                    <h3 class="section-title">Description:</h3>
                    <p>{{ $auction->description }}</p>
                </div>
        
                <!-- Auction Actions Section (Place Bid Form) -->
                <div class="auction-actions">
                    <form action="{{ route('auction.placeBid', $auction->id) }}" method="POST">
                        @csrf
                        <label for="bid_amount">Your Bid:</label>
                        <input type="number" id="bid_amount" name="bid_amount" min="{{ $auction->starting_price }}" step="0.01" required>
        
                        
                        <!-- Display validation errors if any -->
                        @if ($errors->has('bid_amount'))
                            <div class="error-message">
                                {{ $errors->first('bid_amount') }}
                            </div>
                        @endif
        
                        <button type="submit" class="place-bid-btn">Place Bid</button>
                        <button class="btn btn-back" onclick="history.back()">Go Back</button>
                    </form>
                </div>
        
                <!-- Bidding History Section -->
                <div class="bidding-history">
                    <h3 class="section-title">Bidding History</h3>
                    <ul>
                        @foreach($auction->bids as $bid)
                            <li class="bid-entry">
                                <strong>{{ $bid->user->name }}</strong> placed a bid of ${{ number_format($bid->bid_amount, 2) }}
                                <em>on {{ $bid->created_at->format('M d, Y h:i A') }}</em>
                            </li>
                        @endforeach
                    </ul>
                </div>
        


                <div class="auction-winner">
                    @if ($auction->end_time && now()->greaterThan($auction->end_time))
                        @php $winner = $auction->winner; @endphp
                        @if ($winner)
                            <h3>Winner</h3>
                            <p><strong>{{ $winner->user->name }}</strong> with a bid of ${{ number_format($winner->bid_amount, 2) }}</p>
                        @else
                            <p>No bids were placed for this auction.</p>
                        @endif
                    @else
                        <p>The auction is still ongoing.</p>
                    @endif
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
window.onload = function() {
    // Fetch auction data
    fetch('/auction/{{ $auction->id }}')
        .then(response => response.json())
        .then(data => {
            // Set the auction image dynamically
            const auctionImage = document.getElementById('auctionImage');
            auctionImage.src = `/storage/auctions/${data.image_path}`;
            auctionImage.alt = data.title;
        })
        .catch(error => console.error('Error loading auction image:', error));
};


// Auction countdown timer
const auctionEndDate = new Date("{{ $auction->created_at->addDays($auction->duration_days)->toISOString() }}");

function updateCountdown() {
    const now = new Date();
    const timeLeft = auctionEndDate - now;

    if (timeLeft <= 0) {
        document.getElementById('auction-timer').textContent = 'Auction Ended';
        return;
    }

    const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
    const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

    document.getElementById('auction-timer').textContent = `${days}d ${hours}h ${minutes}m ${seconds}s`;
}

setInterval(updateCountdown, 1000);


function initializeCountdownTimers() {
    const countdownElements = document.querySelectorAll('.countdown');

    countdownElements.forEach(element => {
        const endTime = new Date(element.getAttribute('data-end-time'));

        function updateCountdown() {
            const now = new Date();
            const timeLeft = endTime - now;

            if (timeLeft <= 0) {
                element.textContent = 'Auction Ended';
                clearInterval(intervalId);

                // Optionally fetch and display the winner
                fetch('/auction/' + element.dataset.auctionId + '/winner')
                    .then(response => response.json())
                    .then(data => {
                        if (data.success && data.winner) {
                            const winnerElement = document.querySelector('.auction-winner');
                            winnerElement.innerHTML = `<h3>Winner</h3>
                                <p><strong>${data.winner.name}</strong> with a bid of $${data.winner.bid_amount.toFixed(2)}</p>`;
                        }
                    })
                    .catch(error => console.error('Error fetching winner:', error));

                return;
            }

            const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
            const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

            element.textContent = `${days}d ${hours}h ${minutes}m ${seconds}s`;
        }

        const intervalId = setInterval(updateCountdown, 1000);
        updateCountdown(); // Run immediately for initial display
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
    
