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

    <!-- Staff Section -->
    <div class="staff-section">
        <h2>Meet Our Staff</h2>

<div class="divider"></div>

        <div class="staff-grid">
            <div class="staff-member">
                <img src="https://i.pinimg.com/564x/fc/e3/fc/fce3fc6d7d3ba17c6ee572ca2f0ae58d.jpg" alt="Ced Mangulimotan">
                <h3>Ced Mangulimotan</h3>
                <p>Administrator 1</p>
            </div>
            <div class="staff-member">
                <img src="https://i.pinimg.com/564x/cc/d2/93/ccd2938812c0079e3a6f375a4b7cd2ed.jpg" alt="Marc Buchan">
                <h3>Marc Buchan</h3>
                <p>Administrator 2</p>
            </div>
            <div class="staff-member">
                <img src="https://i.pinimg.com/564x/b2/a1/d7/b2a1d74567f523ae5379e42796ec74eb.jpg" alt="Dharel Melegrito">
                <h3>Dharel Melegrito</h3>
                <p>Content Manager</p>
            </div>
            <div class="staff-member">
                <img src="https://i.pinimg.com/564x/fc/e3/fc/fce3fc6d7d3ba17c6ee572ca2f0ae58d.jpg" alt="Mearil Bantillo">
                <h3>Mearil Bantillo</h3>
                <p>IT Security Specialist</p>
            </div>
            <div class="staff-member">
                <img src="https://i.pinimg.com/564x/cc/d2/93/ccd2938812c0079e3a6f375a4b7cd2ed.jpg" alt="Angel Mayor">
                <h3>Angel Mayor</h3>
                <p>User Support Specialist</p>
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
