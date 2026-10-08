<x-plain-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Veretei Gallery - About</title>
        @vite('resources/css/app.css')
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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

            .profile-dashboard {
    text-align: center;
    margin: 20px auto;
}

.profile-avatar img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    object-fit: cover;
    border: 2px solid #ccc;
}

.change-avatar-label {
    display: inline-block;
    margin-top: 10px;
    padding: 5px 10px;
    background-color: #007bff;
    color: white;
    border-radius: 5px;
    cursor: pointer;
    text-align: center;
}

.change-avatar-label:hover {
    background-color: #0056b3;
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
            
            .profile-avatar {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 20px;
    }

    .change-avatar-label {
        font-size: 14px;
        background-color: transparent;
        border: 2px solid #007bff;
        color: #007bff;
        transition: all 0.3s ease;
    }

    .change-avatar-label:hover {
        background-color: #007bff;
        color: #fff;
        border-color: #0056b3;
    }

    .rounded-avatar {
        border-radius: 50%;
        transition: transform 0.3s ease;
    }

    .rounded-avatar:hover {
        transform: scale(1.05);
    }


            .orders-container {
            max-width: 800px;
            margin: 0 auto;
             padding: 20px;
             background-color: #fff;
             border-radius: 8px;
             box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            }

            .order-card {
                margin-bottom: 30px;
                padding: 20px;
                border: 1px solid #ddd;
                border-radius: 8px;
                background-color: #f9f9f9;
            }

            .order-card h4 {
                margin-bottom: 10px;
                font-weight: bold;
            }

            .badge {
                padding: 5px 10px;
                border-radius: 5px;
                color: white;
                font-size: 12px;
                text-transform: uppercase;
            }

            .badge-warning {
                background-color: #ffc107;
            }

            .badge-success {
                background-color: #28a745;
            }

            .table {
                width: 100%;
                margin: 10px 0;
                border-collapse: collapse;
            }

            .table th, .table td {
                padding: 10px;
                border: 1px solid #ddd;
                text-align: left;
            }

            .table th {
                background-color: #f5f5f5;
            }

            .text-right {
                text-align: right;
            }

            .no-orders {
                text-align: center;
                font-size: 16px;
                color: #666;
            }

            .no-orders a {
                color: #007bff;
                text-decoration: none;
            }

            .no-orders a:hover {
                text-decoration: underline;
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

        <div class="profile-avatar text-center">
            <!-- Display Profile Picture -->
            <img id="profile-avatar-img"
                 src="{{ Auth::user()->avatar_url ? asset('storage/' . Auth::user()->avatar_url) : 'https://via.placeholder.com/100' }}"
                 alt="Profile Picture" class="rounded-avatar">
        
            <!-- Form to upload profile picture -->
            <form id="avatar-form" action="{{ route('profile.update.avatar') }}" method="POST" enctype="multipart/form-data" style="margin-top: 10px;">
                @csrf
                @method('PUT')
                <label for="avatar-upload" class="change-avatar-label">Change Profile Picture</label>
                <input type="file" id="avatar-upload" name="avatar" accept="image/*" style="display: none;">
            </form>
        </div>

       
            {{-- <!-- Display Profile Picture -->
            <img id="profile-avatar-img"
                 src="{{ Auth::user()->avatar_url ? asset('storage/' . Auth::user()->avatar_url) : 'https://via.placeholder.com/100' }}"
                 alt="Profile Picture"
                 class="rounded-avatar mb-3" style="width: 100px; height: 100px; object-fit: cover;">
            
            <!-- Form to upload profile picture -->
            <form id="avatar-form" action="{{ route('profile.update.avatar') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
        
                <!-- Change Profile Picture Button -->
                <label for="avatar-upload" class="change-avatar-label btn btn-outline-primary py-2 px-4 rounded-pill" style="cursor: pointer;" aria-label="Change your profile picture">
                    Change Profile Picture
                </label>
                
                <!-- Hidden file input for uploading -->
                <input type="file" id="avatar-upload" name="avatar" accept="image/*" style="display: none;" onchange="document.getElementById('avatar-form').submit();" aria-label="Upload a new profile picture">
            </form>
        </div> --}}
        


    
        {{-- <div class="profile-container">
            <h2>Your Profile</h2>
    
            <!-- Profile image -->
            <img id="profileImage" src="default_profile.jpg" alt="Profile Image" class="profile-image">
            
            <!-- Change image button -->
            <br>
            <label class="change-image-btn" for="fileInput">Change Image</label>
            <input type="file" id="fileInput" class="file-input" accept="image/*" onchange="previewImage(event)">
    
            <h3>{{ Auth::user()->name}}</h3>
        <p>{{ Auth::user()->email }}</p>
    </div></div>
     --}}
    
    
    
    
    <br><br>
        

<!-- dashboard.blade.php -->

<div class="orders-container">
    <h3>Your Pending Orders</h3>

    @if(isset($pendingOrders) && $pendingOrders->isNotEmpty())
        <div class="order-list">
            @foreach($pendingOrders as $order)
                <div class="order-card">
                    <h4>Order #{{ $order->id }} 
                        <span class="badge {{ $order->status == 'Pending' ? 'badge-warning' : 'badge-success' }}">
                            {{ $order->status }}
                        </span>
                    </h4>
                    <p><strong>Order Date:</strong> {{ $order->created_at->format('M d, Y') }}</p>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Artwork</th>
                                <th>Price</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $orderTotal = 0; @endphp
                            @foreach($order->orderItems as $orderItem)
                            <tr>
                                <td>{{ $orderItem->artwork->title ?? 'No Title' }}</td>
                                <td>{{ number_format($orderItem->artwork->price ?? 0, 2) }}</td>
                                <td>{{ $orderItem->quantity }}</td>
                                <td>{{ number_format(($orderItem->artwork->price ?? 0) * $orderItem->quantity, 2) }}</td>
                            </tr>
                        @endforeach 
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="2" class="text-right">Order Total:</th>
                                <th>{{ number_format($orderTotal, 2) }}</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            @endforeach
        </div>
    @else
        <p class="no-orders">You have no pending orders. Browse our <a href="{{ route('explore') }}">Explore</a> section to find amazing artworks!</p>
    @endif
</div>
    

<br>
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
    const container = document.getElementById('artworksContainer');

    // Fetch the data from the server (your Laravel route for random artworks)
    fetch("{{ route('artworks.random') }}")
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
                    title.textContent = category;
                    section.appendChild(title);

                    // Create container for artworks
                    const artworkContainer = document.createElement('div');
                    artworkContainer.className = 'artwork-container';

                    // Loop through the artworks and create a card for each one
                    artworks.forEach(artwork => {
                        const card = document.createElement('div');
                        card.className = 'artwork-card';

                        // Check if the image path exists and append the image
                        const imagePath = artwork.image_url || 'path/to/placeholder-image.jpg';  // Default to placeholder if no image URL
                        const imageAltText = artwork.title || 'Artwork Image';  // Default alt text if title is missing

                        card.innerHTML = `
                            <img src="${imagePath}" alt="${imageAltText}" onError="this.onerror=null;this.src='path/to/placeholder-image.jpg';">
                            <h3>${artwork.title}</h3>
                            <p><strong>Price:</strong> $${artwork.price}</p>
                            <button onclick="addToCart(${artwork.id})">Add to Cart</button>
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
    