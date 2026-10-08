<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Dashboard</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

    /* Navbar Styles */
nav {
    position: fixed; /* Make the navbar fixed */
    top: 0; /* Stick to the top of the viewport */
    left: 0; /* Stick to the left */
    width: 100%; /* Full width of the viewport */
    background-color: #2d2d2d;
    color: white;
    padding: 15px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-shadow: 0 4px 2px -2px gray;
    z-index: 1000; /* Ensure it stays on top of other elements */
}

nav .brand {
    font-size: 1.5rem;
    font-weight: bold;
}

nav .menu a {
    margin-left: 20px;
    color: white;
    font-size: 1rem;
    padding: 5px 10px;
    transition: all 0.3s ease;
}

nav .menu a:hover {
    background-color: #ff2d20;
    border-radius: 5px;
}

nav .menu button {
    color: white;
    background: none;
    border: none;
    font-size: 1rem;
    cursor: pointer;
    transition: color 0.3s ease;
}

nav .menu button:hover {
    color: #ff2d20;
}

/* Add padding to the top of the content to prevent it from being hidden under the navbar */
body {
    padding-top: 65px; /* Adjust this value to match the navbar height */
}


        /* Sidebar Styles */
        aside {
            background-color: #333;
            width: 250px;
            height: 100vh;
            padding-top: 20px;
            position: fixed;
        }

        aside ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        aside ul li {
            margin: 15px 0;
        }

        aside ul li a {
            display: block;
            padding: 15px 20px;
            color: white;
            font-size: 1.1rem;
            border-bottom: 1px solid #444;
            transition: all 0.3s ease;
        }

        aside ul li a:hover {
            background-color: #ff2d20;
            border-radius: 5px;
        }

        /* Main Content Styles */
        main {
            margin-left: 270px;
            padding: 20px;
        }

        .content-header h1 {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .content-header p {
            font-size: 1.1rem;
            margin-bottom: 30px;
        }

        .content-box {
            background-color: white;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .content-box h2 {
            font-size: 1.6rem;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .content-box p {
            font-size: 1.1rem;
            color: #666;
        }

        /* Profile Styles */
       /* Profile Avatar Section Styling */
/* Profile Section Styling */
#profileSection {
    max-width: 600px; /* Centered and fixed width for better layout */
    margin: 50px auto;
    padding: 20px;
    background-color: #f7f7f7;
    border-radius: 15px;
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
    text-align: center;
    font-family: 'Arial', sans-serif;
}

/* Profile Title */
.profile-title {
    font-size: 2rem;
    color: #333;
    margin-bottom: 20px;
}

/* Avatar Wrapper */
.profile-avatar {
    position: relative;
    margin-bottom: 20px;
}

/* Avatar Image Styling */
#profile-avatar-img {
    width: 150px; /* Size of the profile picture */
    height: 150px;
    border-radius: 50%; /* Circular profile image */
    object-fit: cover;
    border: 4px solid #fff;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    transition: transform 0.3s ease;
}

/* Hover Effect on Avatar Image */
#profile-avatar-img:hover {
    transform: scale(1.05);
}

/* Avatar Change Button */
.change-avatar-label {
    display: inline-block;
    margin-top: 15px;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    font-size: 1rem;
    border-radius: 25px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

/* Hover Effect on Change Avatar Button */
.change-avatar-label:hover {
    background-color: #0056b3;
}

/* Hidden File Input */
.file-input {
    display: none;
}

/* Profile Info */
.profile-info {
    margin-top: 20px;
    color: #555;
}

/* Name Styling */
.profile-name {
    font-size: 1.5rem;
    font-weight: 600;
    color: #333;
    margin-bottom: 10px;
}

/* Email Styling */
.profile-email {
    font-size: 1rem;
    color: #777;
}


.content-box {
            max-width: 1200px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        .tabs {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
            border-bottom: 2px solid #ddd;
        }
        .tab {
            padding: 10px 20px;
            cursor: pointer;
            font-weight: bold;
            color: #555;
            border-bottom: 3px solid transparent;
            transition: color 0.3s, border-bottom 0.3s;
        }
        .tab:hover, .tab.active {
            color: #000;
            border-bottom: 3px solid #000;
        }
        .tab-content {
            display: none;
            padding: 20px;
            text-align: center;
        }
        .tab-content.active {
            display: block;
        }





        .auction-card {
    border: 1px solid #ddd;
    padding: 10px;
    width: 200px;
    text-align: center;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
}

.auction-card img {
    max-width: 100%;
    height: 150px;
    object-fit: cover; /* Ensures the image scales and fills its container */
    border-radius: 5px;
    margin-bottom: 10px;
}

.auction-card h4 {
    font-size: 18px;
    margin: 10px 0;
    color: #333;
}

.auction-card p {
    font-size: 14px;
    margin: 5px 0;
    color: #666;
}

#recentArtworksContainer {
    display: flex; /* Enables flex layout */
    gap: 20px; /* Adds spacing between items */
    flex-wrap: wrap; /* Allows items to wrap to the next row if necessary */
    justify-content: center; /* Centers the items horizontally */
    align-items: center; /* Aligns items vertically (if needed) */
    padding: 20px; /* Adds spacing around the container */
    margin: 0 auto; /* Centers the container horizontally */
    max-width: 1200px; /* Sets a maximum width for the container */
}

.recent-artwork-card {
    border: 1px solid #ddd;
    border-radius: 10px;
    background-color: #fff;
    padding: 10px;
    max-width: 200px; /* Ensures all cards have the same width */
    text-align: center;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
    align-items: center;
}

.recent-artwork-card img {
    width: 100%; /* Ensures the image spans the card width */
    height: 150px; /* Fixed height for all images */
    object-fit: cover; /* Ensures the image maintains its aspect ratio */
    border-radius: 5px;
    margin-bottom: 10px;
}

.recent-artwork-card p {
    font-size: 14px;
    color: #333;
    margin: 5px 0;
    font-weight: bold;
}

.recent-artwork-card .price {
    font-size: 12px;
    color: #666;
    font-weight: normal;
}


/* Responsive Design for Smaller Screens */
@media (max-width: 768px) {
    #profileSection {
        padding: 15px;
        width: 90%;
    }

    #profile-avatar-img {
        width: 120px;
        height: 120px;
    }

    .profile-title {
        font-size: 1.8rem;
    }

    .profile-name {
        font-size: 1.4rem;
    }

    .profile-email {
        font-size: 0.9rem;
    }

    .change-avatar-label {
        font-size: 0.9rem;
    }
}



    </style>
</head>
<body>

  <!-- Navbar -->
<nav>
    <div class="brand">
        <a href="#">Seller Panel</a>
    </div>
    <div class="menu">
        <button id="logoutBtn">Log out</button>
    </div>
</nav>

<!-- Modal -->
<div id="logoutModal" class="modal">
    <div class="modal-content">
        <span class="close" id="closeModal">&times;</span>
        <h2>Are you sure you want to log out?</h2>
        <form method="POST" action="{{ route('logout') }}" id="logoutForm">
            @csrf
            <button type="submit">Yes</button>
            <button type="button" id="cancelBtn">Cancel</button>
        </form>
    </div>
</div>

<!-- Modal Styling -->
<style>
    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed;
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
        background-color: #fefefe;
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 30%; /* Could be more or less, depending on screen size */
    }

    /* The Close Button */
    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    /* Buttons */
    button {
        padding: 10px;
        margin-top: 10px;
        cursor: pointer;
    }

    #cancelBtn {
        background-color: #f34639; /* Red */
        color: white;
        border: none;
    }

    #logoutForm button {
        background-color: #4CAF50; /* Green */
        color: white;
        border: none;
    }
</style>

<!-- JavaScript to handle modal behavior -->
<script>
    // Get the modal
    var modal = document.getElementById("logoutModal");

    // Get the button that opens the modal
    var logoutBtn = document.getElementById("logoutBtn");

    // Get the <span> element that closes the modal
    var closeModal = document.getElementById("closeModal");

    // Get the cancel button
    var cancelBtn = document.getElementById("cancelBtn");

    // When the user clicks the button, open the modal
    logoutBtn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    closeModal.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks on "Cancel" button, close the modal
    cancelBtn.onclick = function() {
        modal.style.display = "none";
    }

    // Close modal if the user clicks outside the modal
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

































    <!-- Sidebar and Main Content -->
    <div style="display: flex;">
      <!-- Sidebar -->
      <aside>
        <ul>
            <li><a href="#" id="overviewTab" onclick="showOverview()">Overview</a></li> <!-- Added Overview Tab -->
            <li><a href="#" id="profileTab" onclick="showProfile()">Profile</a></li>
       
            <li><a href="#" id="artworksTab" onclick="showArtworks()">Artworks</a></li> <!-- Added id and onclick -->
            <li><a href="#" id="addArtworksTab" onclick="showAddArtworks()">Add Artworks</a></li>
            <li><a href="#" id="auctionTab" onclick="showAuction()">Create Auction</a></li>
            <li><a href="#" id="auctionDashboardTab" onclick="showAuctionDashboard()">Auction Dashboard</a></li>
        </ul>
    </aside>
    
    
    <!-- Main Content -->
    <main>
        <!-- Profile Section -->
        
    

<!-- Overview Section -->
<section id="overviewSection" style="display: none;">
    
    <h2>Overview</h2>
    <p>Welcome to your dashboard! Here's a quick overview of your activity:</p>
    
    <!-- Summary Statistics -->
    <ul>
        <li><strong>Total Artworks:</strong> <span id="totalArtworks">0</span></li>
        <li><strong>Total Auctions:</strong> <span id="totalAuctions">03</span></li>
        <li><strong>Profile Completeness:</strong> 80%</li>
        <li><strong>Recent Activity:</strong> <span id="recentActivity">No recent activity</span></li>
    </ul>
<!-- Recently Added Artworks -->
<h3 style="text-align: center; margin-bottom: 20px; font-size: 24px; color: #333;">Recently Added Artworks</h3>
<div id="recentArtworksContainer" style="display: flex; gap: 20px; flex-wrap: wrap; justify-content: center; padding: 20px;">
    <!-- Newly added artworks will appear here -->
</div>


<!-- Recently Added Auctions -->
<h3 style="text-align: center; font-family: Arial, sans-serif; color: #333;">Recently Added Auctions</h3>
<div id="recentAuctionsContainer" style="
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
    justify-content: center;
    align-items: flex-start;
    padding: 20px;
    margin: 0 auto;
    max-width: 1200px;
">
    <!-- Auction cards will be dynamically populated here -->
</div>



</section>






        <div id="profileSection" style="display: none;">
            <h2 class="profile-title">Your Profile</h2>
            <h1>Welcome Back, {{ Auth::user()->name }}</h1>
            <div class="profile-avatar">
                <!-- Avatar Wrapper -->
                <div class="avatar-wrapper">
                    <!-- Display Profile Picture -->
                    <img id="profile-avatar-img"
                         src="{{ Auth::user()->avatar_url ? asset('storage/' . Auth::user()->avatar_url) : 'https://via.placeholder.com/150' }}"
                         alt="Profile Picture" class="rounded-avatar">
                    
                    <!-- Form to upload profile picture -->
                    <form id="avatar-form" action="{{ route('profile.update.avatar') }}" method="POST" enctype="multipart/form-data" class="upload-form">
                        @csrf
                        @method('PUT')
                        <label for="avatar-upload" class="change-avatar-label">Change Profile Picture</label>
                        <input type="file" id="avatar-upload" name="avatar" accept="image/*" class="file-input">
                    </form>
                </div>
            </div>
            
            <div class="profile-info">
                <p class="profile-name">{{ Auth::user()->name }}</p>
                <p class="profile-email">{{ Auth::user()->email }}</p>
            </div>
        </div>
        





<!-- Dashboard Section -->
<div id="dashboardSection" class="content-box" style="display:none;">
    <div class="tabs">
        <div class="tab active" data-tab="experiences">Artworks</div>
        <div class="tab" data-tab="events">Auctions</div>
    </div>

<!-- Experiences Tab Content -->
<div id="experiences" class="tab-content active" style="padding: 20px; font-family: Arial, sans-serif;">
    <h2 style="text-align: center; color: #333;">Your Artworks</h2>
    <p style="text-align: center; margin-bottom: 20px; color: #555;">Manage your artworks here.</p>
    
    <div id="artworksContainer" style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center;">
        <!-- Artworks will be dynamically loaded here -->
        <p id="noArtworksMessage" style="text-align: center; color: #888;">No artworks found.</p>
    </div>
</div>
 

    <!-- Events Tab Content -->
    <div id="events" class="tab-content">
        <h2>Auctions</h2>
        
        <p>Manage your events here.</p>
        <!-- Add more event-related content here -->
    </div>














<!-- Dashboard Overview -->
<h2>Dashboard Overview</h2>
<div style="text-align:center;">
    <h3>Your Auctions</h3>

    @if(isset($auctions) && $auctions->isNotEmpty())
        @foreach($auctions as $auction)
            <div class="auction-item">
                <h3>{{ $auction->title }}</h3>
                <p>Starting Price: ${{ number_format($auction->starting_price, 2) }}</p>
                <p>Current Bid: ${{ number_format($auction->current_bid, 2) }}</p>

                <!-- Display Bid History -->
                <div class="bid-history">
                    <h4>Bid History:</h4>
                    @if($auction->bids->isNotEmpty())
                        <ul>
                            @foreach($auction->bids as $bid)
                                <li>
                                    <strong>{{ $bid->user->name }}</strong>
                                    placed a bid of ${{ number_format($bid->bid_amount, 2) }}
                                    on {{ $bid->created_at->format('Y-m-d H:i:s') }}
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p>No bids placed yet.</p>
                    @endif
                </div>
            </div>
        @endforeach
    @else
        <p>No auctions available.</p>
    @endif
</div>

    



</div>




<script>
    document.addEventListener('DOMContentLoaded', () => {
        const artworksContainer = document.getElementById('artworksContainer');
        const noArtworksMessage = document.getElementById('noArtworksMessage');

        // Fetch artworks from the backend
        fetch('/user/artworks')
            .then(response => response.json())
            .then(data => {
                if (data.length > 0) {
                    noArtworksMessage.style.display = 'none'; // Hide the "No artworks found" message
                    
                    data.forEach(artwork => {
                        // Create a card for each artwork
                        const artworkCard = document.createElement('div');
                        artworkCard.style.cssText = `
                            width: 250px;
                            padding: 15px;
                            border: 1px solid #ddd;
                            border-radius: 10px;
                            background-color: #fff;
                            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                            text-align: center;
                        `;

                        artworkCard.innerHTML = `
                            <img src="${artwork.image_url}" alt="${artwork.title}" style="width: 100%; height: 200px; object-fit: cover; border-radius: 10px; margin-bottom: 10px;">
                            <h3 style="font-size: 18px; color: #333; margin: 10px 0;">${artwork.title}</h3>
                            <p style="color: #555; font-size: 16px; margin: 5px 0;">Price: $${artwork.price}</p>
                        `;

                        artworksContainer.appendChild(artworkCard);
                    });
                }
            })
            .catch(error => {
                console.error('Error fetching artworks:', error);
            });
    });
</script>

        

        <!-- Add Artworks Section -->
        <div id="addArtworksSection" style="display: flex; justify-content: center; align-items: center; min-height: 100vh; font-family: Arial, sans-serif; background-color: #f3f3f3; padding: 20px;">
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <div style="display: flex; flex-wrap: wrap; gap: 20px; background-color: #ffffff; border-radius: 10px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); padding: 30px; max-width: 1200px; width: 100%;">
                <!-- Image Preview Section -->
                <div style="flex: 1; display: flex; flex-direction: column; align-items: center; justify-content: center; border-right: 2px solid #ddd; padding-right: 20px; min-width: 300px;">
                    <h3 style="text-align: center; font-size: 20px; margin-bottom: 20px; color: #333;">Artwork Preview</h3>
                    <div id="imagePreview" style="display: none;">
                        <img id="artworkImagePreview" src="" alt="Artwork Preview" style="max-width: 100%; max-height: 300px; object-fit: contain; border: 1px solid #ddd; border-radius: 10px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);">
                    </div>
                </div>
        
                <!-- Form Section -->
                <div style="flex: 2; padding-left: 20px;">
                    <h2 style="text-align: center; font-size: 26px; font-weight: bold; margin-bottom: 30px; color: #333;">Add New Artwork</h2>
                    <form id="addArtworkForm" action="{{ route('publish.artwork') }}" method="POST" enctype="multipart/form-data" style="display: flex; flex-direction: column; gap: 20px;">
                        @csrf
                        <div>
                            <label for="title" style="font-size: 16px; font-weight: bold; margin-bottom: 5px; display: block; color: #555;">Title:</label>
                            <input type="text" id="title" name="title" placeholder="Enter artwork title" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 14px;">
                        </div>
                        <div>
                            <label for="description" style="font-size: 16px; font-weight: bold; margin-bottom: 5px; display: block; color: #555;">Description:</label>
                            <textarea id="description" name="description" placeholder="Enter artwork description" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 14px; height: 80px;"></textarea>
                        </div>
                        <div>
                            <label for="category" style="font-size: 16px; font-weight: bold; margin-bottom: 5px; display: block; color: #555;">Category:</label>
                            <select id="category" name="category" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 14px;">
                                <option value="">Select Category</option>
                                <option value="Impressionism">Impressionism</option>
                                <option value="Cubism">Cubism</option>
                                <option value="Baroque">Baroque</option>
                                <option value="Neoclassical">Neoclassical</option>
                                <option value="Realism">Realism</option>
                                <option value="Fauvism">Fauvism</option>
                            </select>
                        </div>
                        <div>
                            <label for="price" style="font-size: 16px; font-weight: bold; margin-bottom: 5px; display: block; color: #555;">Price ($):</label>
                            <input type="number" id="price" name="price" placeholder="Enter artwork price" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 14px;">
                        </div>
                        <div>
                            <label for="artSize" style="font-size: 16px; font-weight: bold; margin-bottom: 5px; display: block; color: #555;">Art Size (in inches):</label>
                            <select id="artSize" name="artSize" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 14px;">
                                <option value="">Select Size</option>
                                <option value="127 x 178 mm">127 x 178 mm</option>
                                <option value="152 x 190 mm">152 x 190 mm</option>
                                <option value="11 x 14 mm">11 x 14 mm</option>
                            </select>
                        </div>
                        <div>
                            <label for="image" style="font-size: 16px; font-weight: bold; margin-bottom: 5px; display: block; color: #555;">Image:</label>
                            <input type="file" id="image" name="image" accept="image/*" onchange="previewArtworkImage(event)" style="padding: 10px;">
                        </div>
                        <div style="display: flex; justify-content: center; gap: 20px; margin-top: 20px;">
                            <button type="button" onclick="cancelAll()" style="background-color: #e74c3c; color: white; padding: 10px 20px; border: none; border-radius: 5px; font-size: 16px; cursor: pointer;">Cancel All</button>
                            <button type="submit" style="background-color: #27ae60; color: white; padding: 10px 20px; border: none; border-radius: 5px; font-size: 16px; cursor: pointer;">Publish</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>







        <!-- Create Auction Section -->
 <div id="auctionSection" class="content-box" style="display:none; font-family: Arial, sans-serif; background-color: #f9f9f9; padding: 30px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
    <h2 style="text-align: center; font-size: 28px; font-weight: bold; color: #333; margin-bottom: 30px;">Create Auction</h2>

    <!-- Auction Form -->
    <form id="auctionForm" action="{{ route('auctions.store') }}" method="POST" enctype="multipart/form-data" style="max-width: 600px; margin: 0 auto; display: flex; flex-direction: column; gap: 20px;">
        @csrf

        <!-- Auction Title -->
        <div>
            <label for="auctionTitle" style="font-size: 16px; font-weight: bold; color: #333;">Auction Title:</label>
            <input type="text" id="auctionTitle" name="title" placeholder="Enter auction title" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 14px; color: #333;">
        </div>

        <!-- Starting Price -->
        <div>
            <label for="auctionStartPrice" style="font-size: 16px; font-weight: bold; color: #333;">Starting Price ($):</label>
            <input type="number" id="auctionStartPrice" name="starting_price" placeholder="Enter starting price" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 14px; color: #333;">
        </div>

        <!-- Duration -->
        <div>
            <label for="auctionDuration" style="font-size: 16px; font-weight: bold; color: #333;">Duration (in days):</label>
            <input type="number" id="auctionDuration" name="duration_days" placeholder="Enter auction duration" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 14px; color: #333;">
        </div>

        <!-- Image Upload -->
        <div style="text-align: center;">
            <label for="image" style="font-size: 16px; font-weight: bold; color: #333; display: block; margin-bottom: 10px;">Upload Image:</label>
            <input type="file" name="image" accept="image/*" required style="padding: 10px; font-size: 14px; background-color: #f2f2f2; border-radius: 5px; border: 1px solid #ccc;">
        </div>

        <!-- Submit Button -->
        <div style="text-align: center;">
            <button type="submit" style="background-color: #4caf50; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; font-weight: bold; transition: background-color 0.3s;">
                Start Auction
            </button>
        </div>
    </form>
</div>

 <!-- Artworks Section -->
<div id="artworksSection" style="display: none; padding: 30px; font-family: Arial, sans-serif; background-color: #f9f9f9; border-radius: 10px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); max-width: 100%; margin: auto;">
    <h3 style="font-size: 26px; text-align: center; margin-bottom: 20px; color: #333;">Your Artworks</h3>
    <div style="overflow-x: auto; margin-top: 20px;">
        <table id="artworksTable" style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14px; background-color: #ffffff; border: 1px solid #ddd; table-layout: fixed;">
            <thead>
                <tr style="background-color: #f4f4f4; color: #555; text-align: center;">
                    <th style="padding: 15px; border: 1px solid #ddd; font-weight: bold;">Title</th>
                    <th style="padding: 15px; border: 1px solid #ddd; font-weight: bold;">Description</th>
                    <th style="padding: 15px; border: 1px solid #ddd; font-weight: bold;">Category</th>
                    <th style="padding: 15px; border: 1px solid #ddd; font-weight: bold;">Price ($)</th>
                    <th style="padding: 15px; border: 1px solid #ddd; font-weight: bold;">Size</th>
                    <th style="padding: 15px; border: 1px solid #ddd; font-weight: bold;">Image</th>
                    <th style="padding: 15px; border: 1px solid #ddd; font-weight: bold;">Created At</th>
                    <th style="padding: 15px; border: 1px solid #ddd; font-weight: bold;">Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Existing artworks will be dynamically populated here -->
                <tr>
                    <td colspan="8" style="text-align: center; padding: 20px; color: #888;">No artworks found</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Optional: Add some custom CSS (can be external or inline) -->
<style>
    #artworksSection {
        padding: 30px;
        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
        border-radius: 10px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        margin-top: 30px;
        max-width: 100%;
        width: 95%;
        margin: auto;
    }

    #artworksTable th, #artworksTable td {
        padding: 15px;
        border: 1px solid #ddd;
        text-align: center;
        font-size: 14px;
    }

    #artworksTable th {
        background-color: #f4f4f4;
        color: #555;
        font-weight: bold;
    }

    #artworksTable td {
        color: #333;
        word-wrap: break-word;
    }

    #artworksSection h3 {
        font-size: 26px;
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }

    /* Hover effect for rows */
    #artworksTable tbody tr:hover {
        background-color: #f9f9f9;
        cursor: pointer;
    }

    /* Responsive design adjustments */
    @media (max-width: 768px) {
        #artworksTable th, #artworksTable td {
            font-size: 12px;
            padding: 10px;
        }

        #artworksSection {
            padding: 20px;
        }

        #artworksSection h3 {
            font-size: 22px;
        }
    }

    /* Stripe alternating row colors for better readability */
    #artworksTable tbody tr:nth-child(odd) {
        background-color: #fafafa;
    }
    
    #artworksTable tbody tr:nth-child(even) {
        background-color: #fff;
    }
</style>

    



























<!-- Auction Dashboard Section -->
<div id="auctionDashboardSection" class="content-box" style="display:none; font-family: Arial, sans-serif; padding: 40px; background-color: #f9f9f9; border-radius: 10px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);">
    <h2 style="font-size: 28px; font-weight: bold; text-align: center; margin-bottom: 30px; color: #333;">Auction Dashboard</h2>




    
    <!-- Active Auctions Overview -->
    <div style="text-align:center;">
        <h3 style="font-size: 24px; font-weight: bold; color: #333; margin-bottom: 20px;">Active Auctions</h3>
        <div style="overflow-x: auto; margin-top: 20px;">
            <table id="auctionsTable" style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14px; background-color: #ffffff; border: 1px solid #ddd;">
                <thead>
                    <tr style="background-color: #f4f4f4; color: #555; text-align: center;">
                        <th style="padding: 10px; border: 1px solid #ddd;">Image</th>
                        <th style="padding: 10px; border: 1px solid #ddd;">Title</th>
                        <th style="padding: 10px; border: 1px solid #ddd;">Starting Price ($)</th>
                        <th style="padding: 10px; border: 1px solid #ddd;">Duration (days)</th>
                        <th style="padding: 10px; border: 1px solid #ddd;">Created At</th>
                        <th style="padding: 10px; border: 1px solid #ddd;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Existing auctions will be dynamically populated here -->
                    <tr>
                        <td colspan="6" style="text-align: center; padding: 20px; color: #888;">No active auctions found</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Optional: Add custom CSS for Auction Dashboard -->
<style>
    #auctionDashboardSection {
        padding: 40px; /* Increased padding for more space inside the content box */
        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
        border-radius: 10px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        margin-top: 30px;
        max-width: 100%;
        width: 95%;
        margin: auto;
    }

    #auctionsTable th, #auctionsTable td {
        padding: 10px;
        border: 1px solid #ddd;
        text-align: left;
        font-size: 14px;
    }

    #auctionsTable th {
        background-color: #f4f4f4;
        color: #555;
    }

    #auctionsTable td {
        color: #333;
    }

    #auctionDashboardSection h2 {
        font-size: 28px;
        text-align: center;
        font-weight: bold;
        color: #333;
        margin-bottom: 30px;
    }

    #auctionDashboardSection h3 {
        font-size: 24px;
        font-weight: bold;
        color: #333;
        margin-bottom: 20px;
    }

    /* Hover effect for rows */
    #auctionsTable tbody tr:hover {
        background-color: #f9f9f9;
        cursor: pointer;
    }

    /* Stripe alternating row colors for better readability */
    #auctionsTable tbody tr:nth-child(odd) {
        background-color: #fafafa;
    }

    #auctionsTable tbody tr:nth-child(even) {
        background-color: #fff;
    }

    /* Responsive design adjustments */
    @media (max-width: 768px) {
        #auctionsTable th, #auctionsTable td {
            font-size: 12px;
            padding: 8px;
        }

        #auctionDashboardSection {
            padding: 20px;
        }

        #auctionDashboardSection h2 {
            font-size: 24px;
        }

        #auctionDashboardSection h3 {
            font-size: 20px;
        }
    }
</style>

    
   <!-- Edit Artwork Modal -->
<div id="editArtworkModal" class="modal" style="display:none;">
    <div class="modal-content" style="max-width: 600px; margin: 0 auto; padding: 20px; background-color: #fff; border-radius: 8px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); overflow-y: auto; max-height: 80vh;">
        <h2 style="font-size: 26px; font-weight: bold; color: #333; text-align: center; margin-bottom: 20px;">Edit Artwork</h2>
        <form id="editArtworkForm" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" id="editArtworkId" name="id">
    
            <!-- Title Field -->
            <div style="margin-bottom: 20px;">
                <label for="editTitle" style="font-size: 16px; font-weight: bold; color: #333;">Title:</label>
                <input type="text" id="editTitle" name="title" required style="width: 100%; padding: 12px 16px; border: 1px solid #ccc; border-radius: 8px; font-size: 14px; color: #333; background-color: #f9f9f9;">
            </div>
    
            <!-- Description Field -->
            <div style="margin-bottom: 20px;">
                <label for="editDescription" style="font-size: 16px; font-weight: bold; color: #333;">Description:</label>
                <textarea id="editDescription" name="description" required style="width: 100%; padding: 12px 16px; border: 1px solid #ccc; border-radius: 8px; font-size: 14px; color: #333; background-color: #f9f9f9;"></textarea>
            </div>
    
            <!-- Category Field -->
            <div style="margin-bottom: 20px;">
                <label for="editCategory" style="font-size: 16px; font-weight: bold; color: #333;">Category:</label>
                <select id="editCategory" name="category" required style="width: 100%; padding: 12px 16px; border: 1px solid #ccc; border-radius: 8px; font-size: 14px; color: #333; background-color: #f9f9f9;">
                    <option value="Impressionism">Impressionism</option>
                    <option value="Cubism">Cubism</option>
                    <option value="Baroque">Baroque</option>
                    <option value="Neoclassical">Neoclassical</option>
                    <option value="Realism">Realism</option>
                    <option value="Fauvism">Fauvism</option>
                </select>
            </div>
    
            <!-- Price Field -->
            <div style="margin-bottom: 20px;">
                <label for="editPrice" style="font-size: 16px; font-weight: bold; color: #333;">Price ($):</label>
                <input type="number" id="editPrice" name="price" required style="width: 100%; padding: 12px 16px; border: 1px solid #ccc; border-radius: 8px; font-size: 14px; color: #333; background-color: #f9f9f9;">
            </div>
    
            <!-- Art Size Field -->
            <div style="margin-bottom: 20px;">
                <label for="editArtSize" style="font-size: 16px; font-weight: bold; color: #333;">Art Size (in inches):</label>
                <input type="text" id="editArtSize" name="artSize" required style="width: 100%; padding: 12px 16px; border: 1px solid #ccc; border-radius: 8px; font-size: 14px; color: #333; background-color: #f9f9f9;">
            </div>
    
            <!-- Image Upload Field -->
            <div style="margin-bottom: 20px;">
                <label for="editImage" style="font-size: 16px; font-weight: bold; color: #333;">Image:</label>
                <input type="file" id="editImage" name="image" accept="image/*" style="padding: 12px 16px; font-size: 14px; background-color: #f2f2f2; border-radius: 8px; border: 1px solid #ccc;">
            </div>
    
            <!-- Image Preview -->
            <div id="editImagePreview" style="margin-top: 15px; text-align: center;">
                <h3 style="font-size: 16px; font-weight: bold; color: #333;">Selected Image:</h3>
                <img id="editArtworkImagePreview" src="" alt="Artwork Preview" style="max-width: 300px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
            </div>
    
            <!-- Action Buttons -->
            <div style="display: flex; justify-content: space-between; margin-top: 25px;">
                <button type="submit" style="background-color: #4caf50; color: white; padding: 12px 24px; border: none; border-radius: 8px; cursor: pointer; font-size: 16px; transition: background-color 0.3s ease; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                    Update Artwork
                </button>
                <button type="button" onclick="closeEditModal()" style="background-color: #f44336; color: white; padding: 12px 24px; border: none; border-radius: 8px; cursor: pointer; font-size: 16px; transition: background-color 0.3s ease; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                    Cancel
                </button>
            </div>
        </form>
    </div>
</div>



    
    <!-- Edit Auction Modal -->
<div id="editAuctionModal" style="display: none; position: fixed; top: 10%; left: 50%; transform: translate(-50%, 0); background-color: #fff; padding: 15px; border-radius: 6px; box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1); width: 90%; max-width: 400px; z-index: 1000;">
    <h2 style="font-size: 20px; font-weight: bold; color: #333; text-align: center; margin-bottom: 15px;">Edit Auction</h2>
    <form id="editAuctionForm" action="" method="POST" style="display: flex; flex-direction: column; gap: 15px;">
        @csrf
        @method('PUT')

        <input type="hidden" id="editAuctionId" name="id">

        <div>
            <label for="editAuctionTitle" style="font-size: 14px; font-weight: bold; color: #555;">Title:</label>
            <input type="text" id="editAuctionTitle" name="title" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-size: 14px;">
        </div>

        <div>
            <label for="editAuctionPrice" style="font-size: 14px; font-weight: bold; color: #555;">Starting Price ($):</label>
            <input type="number" id="editAuctionPrice" name="starting_price" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-size: 14px;">
        </div>

        <div>
            <label for="editAuctionDuration" style="font-size: 14px; font-weight: bold; color: #555;">Duration (days):</label>
            <input type="number" id="editAuctionDuration" name="duration_days" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-size: 14px;">
        </div>

        <div style="display: flex; justify-content: space-between; gap: 10px; margin-top: 10px;">
            <button type="submit" style="flex: 1; background-color: #4caf50; color: white; padding: 8px; border: none; border-radius: 4px; cursor: pointer; font-size: 14px;">
                Update
            </button>
            <button type="button" onclick="closeEditAuctionModal()" style="flex: 1; background-color: #f44336; color: white; padding: 8px; border: none; border-radius: 4px; cursor: pointer; font-size: 14px;">
                Cancel
            </button>
        </div>
    </form>
</div>



</main>

<script>
    // Function to show the profile section
   // Function to hide all sections
function hideAllSections() {
    document.getElementById('overviewSection').style.display = 'none';
    document.getElementById('profileSection').style.display = 'none';
    document.getElementById('dashboardSection').style.display = 'none';
    document.getElementById('artworksSection').style.display = 'none';
    document.getElementById('addArtworksSection').style.display = 'none';
    document.getElementById('auctionSection').style.display = 'none';
    document.getElementById('auctionDashboardSection').style.display = 'none';
}

// Function to show Profile Section
function showProfile() {
    hideAllSections();
    document.getElementById('profileSection').style.display = 'block';
}

// Function to show Dashboard Section
function showDashboard() {
    hideAllSections();
    document.getElementById('dashboardSection').style.display = 'block';
}

// Function to show Artworks Section
function showArtworks() {
    hideAllSections();
    document.getElementById('artworksSection').style.display = 'block';
}

// Function to show Add Artworks Section
function showAddArtworks() {
    hideAllSections();
    document.getElementById('addArtworksSection').style.display = 'block';
}

// Function to show Create Auction Section
function showAuction() {
    hideAllSections();
    document.getElementById('auctionSection').style.display = 'block';
}

// Function to show Auction Dashboard Section
function showAuctionDashboard() {
    hideAllSections();
    document.getElementById('auctionDashboardSection').style.display = 'block';
}

function showOverview() {
    hideAllSections();
    document.getElementById('overviewSection').style.display = 'block';
}


 // Handle tab switching
 const tabs = document.querySelectorAll('.tab');
        const tabContents = document.querySelectorAll('.tab-content');

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                // Remove active class from all tabs and contents
                tabs.forEach(t => t.classList.remove('active'));
                tabContents.forEach(tc => tc.classList.remove('active'));

                // Add active class to clicked tab and corresponding content
                tab.classList.add('active');
                document.getElementById(tab.getAttribute('data-tab')).classList.add('active');
            });
        });




        function previewArtworkImage(event) {
                const imagePreview = document.getElementById("imagePreview");
                const artworkImagePreview = document.getElementById("artworkImagePreview");
                const file = event.target.files[0];
        
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        artworkImagePreview.src = e.target.result;
                        imagePreview.style.display = "block";
                    };
                    reader.readAsDataURL(file);
                }
            }
        
            function cancelAll() {
                document.getElementById("addArtworkForm").reset();
                document.getElementById("imagePreview").style.display = "none";
            }


            

    document.getElementById('avatar-upload').addEventListener('change', function(event) {
            // Check if a file is selected
            var file = event.target.files[0];
            if (file) {
                // Create a URL for the selected file
                var reader = new FileReader();
                reader.onloadend = function () {
                    // Set the src of the profile image to the uploaded file
                    document.getElementById('profile-avatar-img').src = reader.result;
                };
                reader.readAsDataURL(file);
    
                // Submit the form with the file for uploading
                var formData = new FormData(document.getElementById('avatar-form'));
                fetch("{{ route('profile.update.avatar') }}", {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Update the profile image with the new URL from the server after it is successfully uploaded
                        document.getElementById('profile-avatar-img').src = data.avatar_url;
                    } else {
                        alert(data.error || 'There was an error updating the profile picture.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('There was an error uploading the image.');
                });
            }
        });






        document.addEventListener('DOMContentLoaded', function () {
    // Fetch and display all artworks created by the user when the page loads
    fetch('/my-artworks', {
        method: 'GET',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content, // CSRF token for secure requests
        },
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                const tableBody = document.querySelector('#artworksTable tbody');
                const recentArtworksContainer = document.getElementById('recentArtworksContainer');
                const totalArtworksEl = document.getElementById('totalArtworks');

                tableBody.innerHTML = ''; // Clear existing rows
                recentArtworksContainer.innerHTML = ''; // Clear existing overview items

                let totalArtworks = 0;

                data.artworks.forEach(artwork => {
                    // Update table rows
                    const newRow = `
                        <tr data-id="${artwork.id}">
                            <td>${artwork.title}</td>
                            <td>${artwork.description}</td>
                            <td>${artwork.category}</td>
                            <td>$${artwork.price}</td>
                            <td>${artwork.artSize}</td>
                            <td>
                                <img src="${artwork.image_path || '/images/default-image.jpg'}" 
                                     alt="${artwork.title}" style="max-width: 100px; max-height: 100px;">
                            </td>
                            <td>${new Date(artwork.created_at).toLocaleDateString()}</td>
                            <td>
                                <button class="edit-btn" onclick="openEditArtworkModal(event)">Edit</button>
                                <button class="delete-btn" onclick="deleteArtwork(event)">Delete</button>
                            </td>
                        </tr>
                    `;
                    tableBody.insertAdjacentHTML('beforeend', newRow);

                    // Update recent artworks in the overview
                    const recentArtworkCard = `
    <div class="recent-artwork-card">
        <img src="${artwork.image_path || '/images/default-image.jpg'}" 
             alt="${artwork.title}">
        <p>${artwork.title}</p>
        <p class="price">$${artwork.price}</p>
    </div>
`;
                    recentArtworksContainer.insertAdjacentHTML('beforeend', recentArtworkCard);





                    
                    totalArtworks++;
                });

                // Update the total artworks count
                totalArtworksEl.textContent = totalArtworks;
            } else {
                alert('Failed to fetch your artworks.');
            }
        })
        .catch(error => {
            console.error('Error fetching artworks:', error);
        });
});

document.getElementById('addArtworkForm').addEventListener('submit', function (event) {
    event.preventDefault(); // Prevent form refresh

    const form = event.target;
    const formData = new FormData(form);

    fetch(form.action, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
        },
        body: formData,
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Add the new artwork to the Artworks Table
                const tableBody = document.querySelector('#artworksTable tbody');
                const newRow = `
                    <tr data-id="${data.artwork.id}">
                        <td>${data.artwork.title}</td>
                        <td>${data.artwork.description}</td>
                        <td>${data.artwork.category}</td>
                        <td>$${data.artwork.price}</td>
                        <td>${data.artwork.artSize}</td>
                        <td>
                            <img src="${data.artwork.image_path || '/images/default-image.jpg'}" 
                                 alt="${data.artwork.title}" style="max-width: 100px; max-height: 100px;">
                        </td>
                        <td>${new Date(data.artwork.created_at).toLocaleDateString()}</td>
                        <td>
                            <button class="edit-btn" onclick="openEditArtworkModal(event)">Edit</button>
                            <button class="delete-btn" onclick="deleteArtwork(event)">Delete</button>
                        </td>
                    </tr>
                `;
                tableBody.insertAdjacentHTML('beforeend', newRow);

                // Reset the form
                form.reset();

                // Update Overview Section
                const totalArtworksEl = document.getElementById('totalArtworks');
                const recentActivityEl = document.getElementById('recentActivity');
                const recentArtworksContainer = document.getElementById('recentArtworksContainer');

                // Update Total Artworks count
                const totalArtworks = parseInt(totalArtworksEl.textContent) || 0;
                totalArtworksEl.textContent = totalArtworks + 1;

                // Update Recent Activity
                recentActivityEl.textContent = `Added new artwork: "${data.artwork.title}"`;

                // Add Artwork to Recently Added Artworks
                const recentArtworkCard = `
    <div class="recent-artwork-card">
        <img src="${data.artwork.image_path || '/images/default-image.jpg'}" 
             alt="${data.artwork.title}">
        <p>${data.artwork.title}</p>
        <p class="price">$${data.artwork.price}</p>
    </div>
`;


                recentArtworksContainer.insertAdjacentHTML('afterbegin', recentArtworkCard);

                alert('Artwork created successfully!');
            } else {
                alert('Error creating artwork. Please try again.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred. Please try again.');
        });
});
























        









    function openEditModal(event) {
    const button = event.target;
    const row = button.closest('tr');
    const artworkId = button.dataset.id;

    // Populate modal with current artwork data
    document.getElementById('editArtworkId').value = artworkId;
    document.getElementById('editTitle').value = row.cells[0].innerText;
    document.getElementById('editDescription').value = row.cells[1].innerText;
    document.getElementById('editCategory').value = row.cells[2].innerText.toLowerCase();
    document.getElementById('editPrice').value = row.cells[3].innerText.replace('$', '');
    document.getElementById('editArtSize').value = row.cells[4].innerText;

    // Display the modal
    document.getElementById('editArtworkModal').style.display = 'block';
}

document.getElementById('editArtworkForm').addEventListener('submit', function (event) {
    event.preventDefault();

    const form = event.target;
    const formData = new FormData(form);
    const artworkId = document.getElementById('editArtworkId').value; // Get the artwork ID

    fetch(`/artworks/update/${artworkId}`, {  // Pass the ID in the URL
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
        },
        body: formData,
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Update the row in the table with the new data
            const row = document.querySelector(`tr[data-artwork-id="${data.artwork.id}"]`);
            row.cells[0].innerText = data.artwork.title;
            row.cells[1].innerText = data.artwork.description;
            row.cells[2].innerText = data.artwork.category;
            row.cells[3].innerText = `$${data.artwork.price}`;
            row.cells[4].innerText = data.artwork.size;
            row.cells[5].innerHTML = `<img src="${data.artwork.image_url}" alt="Artwork" style="max-width: 100px;">`;

            // Close the modal
            closeEditModal();
        } else {
            alert('Error updating artwork. Please try again.');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('An error occurred. Please try again.');
    });
});

function closeEditModal() {
    document.getElementById('editArtworkModal').style.display = 'none';
}

function deleteArtwork(event) {
    const button = event.target;
    const artworkId = button.dataset.id;

    if (confirm('Are you sure you want to delete this artwork?')) {
        fetch(`/artworks/delete/${artworkId}`, {
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
            },
        })
        .then(response => {
            if (response.ok) {
                // Remove the row from the table
                const row = button.closest('tr');
                row.remove();
            } else {
                alert('Error deleting artwork. Please try again.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred. Please try again.');
        });
    }
}



















document.addEventListener('DOMContentLoaded', function () {
    // Fetch and display all auctions created by the user when the page loads
    fetch('/my-auctions', {
        method: 'GET',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content, // CSRF token for secure requests
        },
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Update Auctions Table
                const tableBody = document.querySelector('#auctionsTable tbody');
                tableBody.innerHTML = ''; // Clear existing rows

                data.auctions.forEach(auction => {
                    const newRow = `
                        <tr data-id="${auction.id}">
                            <td>
                                <img src="${auction.image_path || '/images/default-image.jpg'}" 
                                     alt="${auction.title}" style="max-width: 100px; max-height: 100px;">
                            </td>
                            <td>${auction.title}</td>
                            <td>$${auction.starting_price}</td>
                            <td>${auction.duration_days}</td>
                            <td>${new Date(auction.created_at).toLocaleDateString()}</td>
                            <td>
                                <button class="edit-btn" onclick="openEditAuctionModal(event)">Edit</button>
                                <button class="delete-btn" onclick="deleteAuction(event)">Delete</button>
                            </td>
                        </tr>
                    `;
                    tableBody.insertAdjacentHTML('beforeend', newRow);
                });

                // Update Overview Section (Recent Auctions)
                const recentAuctionsContainer = document.getElementById('recentAuctionsContainer');
                recentAuctionsContainer.innerHTML = ''; // Clear existing items

               data.auctions.slice(0).forEach(auction => {
    const auctionCard = `
        <div class="auction-card">
            <img src="${auction.image_path || '/images/default-image.jpg'}" 
                 alt="${auction.title}">
            <h4>${auction.title}</h4>
            <p><strong>Starting Price:</strong> $${auction.starting_price}</p>
            <p><strong>Duration:</strong> ${auction.duration_days} days</p>
        </div>
    `;
    recentAuctionsContainer.insertAdjacentHTML('beforeend', auctionCard);
});


                // Update Total Auctions Count in Overview
                const totalAuctionsCount = document.getElementById('totalAuctions');
                totalAuctionsCount.textContent = data.auctions.length;
            } else {
                alert('Failed to fetch your auctions.');
            }
        })
        .catch(error => {
            console.error('Error fetching auctions:', error);
        });
});





// Handle auction form submission
document.getElementById('auctionForm').addEventListener('submit', function (event) {
    event.preventDefault(); // Prevent the form from refreshing the page

    const form = event.target;
    const formData = new FormData(form); // FormData handles file uploads

    fetch(form.action, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content, // CSRF token
        },
        body: formData,
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Add the new auction to the table
                const tableBody = document.querySelector('#auctionsTable tbody');
                const newRow = `
                    <tr data-id="${data.auction.id}">
                        <td>
                            <img src="${data.auction.image_path || '/images/default-image.jpg'}" 
                                 alt="${data.auction.title}" style="max-width: 100px; max-height: 100px;">
                        </td>
                        <td>${data.auction.title}</td>
                        <td>$${data.auction.starting_price}</td>
                        <td>${data.auction.duration_days}</td>
                        <td>${new Date(data.auction.created_at).toLocaleDateString()}</td>
                        <td>
                            <button class="edit-btn" onclick="openEditAuctionModal(event)">Edit</button>
                            <button class="delete-btn" onclick="deleteAuction(event)">Delete</button>
                        </td>
                    </tr>
                `;
                tableBody.insertAdjacentHTML('beforeend', newRow);

                // Update the Overview Section
                const recentAuctionsContainer = document.getElementById('recentAuctionsContainer');
                const recentAuctionCard = `
                    <div class="auction-card" style="border: 1px solid #ddd; padding: 10px; width: 200px; text-align: center;">
                        <img src="${data.auction.image_path || '/images/default-image.jpg'}" 
                             alt="${data.auction.title}" style="max-width: 100%; height: auto;">
                        <h4>${data.auction.title}</h4>
                        <p><strong>Starting Price:</strong> $${data.auction.starting_price}</p>
                        <p><strong>Duration:</strong> ${data.auction.duration_days} days</p>
                    </div>
                `;
                recentAuctionsContainer.insertAdjacentHTML('afterbegin', recentAuctionCard);

                // Reset the form
                form.reset();

                alert('Auction created successfully!');
            } else {
                alert('Error creating auction. Please try again.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred. Please try again.');
        });
});































        function previewImage(event) {
            const file = event.target.files[0];
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('profileImage').src = e.target.result;
            };
            reader.readAsDataURL(file);
        }

        function previewArtworkImage(event) {
            const file = event.target.files[0];
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('artworkImagePreview').src = e.target.result;
                document.getElementById('imagePreview').style.display = 'block';
            };
            reader.readAsDataURL(file);
        }

        function cancelAll() {
            document.getElementById('addArtworkForm').reset();
            document.getElementById('imagePreview').style.display = 'none';
        }















        function openEditAuctionModal(event) {
    const row = event.target.closest('tr');
    const auctionId = row.dataset.id;
    const title = row.children[0].textContent;
    const startingPrice = row.children[1].textContent.slice(1); // Remove "$"
    const duration = row.children[2].textContent;

    document.getElementById('editAuctionId').value = auctionId;
    document.getElementById('editAuctionTitle').value = title;
    document.getElementById('editAuctionPrice').value = startingPrice;
    document.getElementById('editAuctionDuration').value = duration;

    document.getElementById('editAuctionModal').style.display = 'block';
}

function closeEditAuctionModal() {
    document.getElementById('editAuctionModal').style.display = 'none';
}

document.getElementById('editAuctionForm').addEventListener('submit', function (event) {
    event.preventDefault();

    const form = event.target;
    const auctionId = document.getElementById('editAuctionId').value;
    const formData = new FormData(form);

    fetch(`/auctions/update/${auctionId}`, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
            'X-HTTP-Method-Override': 'PUT',
        },
        body: formData,
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Update the table row with new data
                const row = document.querySelector(`tr[data-id="${auctionId}"]`);
                row.children[0].textContent = data.auction.title;
                row.children[1].textContent = `$${data.auction.starting_price}`;
                row.children[2].textContent = data.auction.duration_days;

                closeEditAuctionModal();
            } else {
                alert('Error updating auction. Please try again.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred. Please try again.');
        });
});

function deleteAuction(event) {
    const row = event.target.closest('tr');
    const auctionId = row.dataset.id;

    if (confirm('Are you sure you want to delete this auction?')) {
        fetch(`/auctions/delete/${auctionId}`, {
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
            },
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Remove the row from the table
                row.remove();
            } else {
                alert('Error deleting auction. Please try again.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred. Please try again.');
        });
    }
}


    </script>

</body>
</html>
