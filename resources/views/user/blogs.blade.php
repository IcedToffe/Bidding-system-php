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

        /* Navbar Styling */
        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 15px 20px;
            background-color: #333;
            color: white;
        }

        .navbar-logo {
            display: flex;
            align-items: center;
            font-size: 24px;
            font-weight: bold;
        }

        .navbar-logo img {
            height: 40px;
            margin-right: 10px;
        }

        .navbar-search {
            flex: 1;
            margin: 0 20px;
            position: relative;
        }

        .navbar-search input {
            width: 90%;
            padding: 8px 40px 8px 15px;
            border-radius: 20px;
            border: 1px solid #ccc;
            color:black;
        }

        .navbar-search .fa-search {
            position: absolute;
            top: 50%;
            right: 140px;
            transform: translateY(-50%);
            color: #888;
        }

        .navbar-links {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        .navbar-links a {
            color: white;
            text-decoration: none;
            font-size: 16px;
        }

        .navbar-links a:hover{
            color: #827B7B; 
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
            background-image: url('https://images.photowall.com/interiors/44783/landscape/wallpaper/room106.jpg?w=2000&q=80'); /* Replace with your banner image */
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

        /* FAQ Section Styling */
        .faq-section {
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
            /* background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); */
        }

        .faq-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .faq-header h1 {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .faq-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .faq-item {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .faq-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        }

        .faq-item h3 {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .faq-item p {
            font-size: 14px;
            color: #555;
            line-height: 1.5;
        }

        .read-more {
            display: block;
            margin-top: 10px;
            color: #007bff;
            text-decoration: none;
        }

        .read-more:hover {
            text-decoration: underline;
        }

                /* Footer Styling */
                .footer {
            background-color: #2e2e2e;
            padding: 40px 20px;
            display: flex;
            justify-content: space-between;
            color: white;
            
        }

        .footer-column {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 10px;
        }

        .footer-column h3 {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
            margin-left: 200px;
        }

        .footer-column p,
        .footer-column a {
            font-size: 14px;
            color: #fff;
            text-decoration: none;
            margin-left: 200px;
        }

        .footer-column a:hover {
            color: #ccc;
        }

        /* Specific styling for each column */
        .footer-logo {
            font-size: 22px;
            font-weight: bold;
        }

        .footer-logo p {
            margin-top: 10px;
            line-height: 1.5;
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
        <h1>FAQ</h1>
        <p>Home / FAQ</p>
    </div>

   
        <!-- FAQ Section -->
        <div class="faq-section">
        <div class="faq-header">

        <div class="divider"></div>
            <h1>Frequently Asked Questions</h1>
        </div>
    <div class="faq-grid">
    <div class="faq-item">
        <h3>Is it time to hire an art studio assistant?</h3>
                <p>Hiring an art studio assistant may be the right move if your workload has increased, you’re struggling to keep up with administrative tasks, or you need help managing production.</p>
                <a href="https://www.artworkarchive.com/blog/is-it-time-to-hire-an-art-studio-assistant" class="read-more">Read More</a>
                </div>
                <div class="faq-item">
                <h3>Tips for art fair success</h3>
                <p>To ensure an art fair success, focus on creating a captivating booth that showcases your best work. Dive into marketing strategies, such as social media promotion before the event.</p>
                <a href="#" class="read-more">Read More</a>
            </div>
            <div class="faq-item">
                <h3>Art fairs worth the trip</h3>
                <p>These events offer a world-class experience for collectors, curators, and art lovers alike.</p>
                <a href="#" class="read-more">Read More</a>
            </div>
            <div class="faq-item">
                <h3>The first steps to starting an art business</h3>
                <p>As an artist, the desire to share your creativity with the world is often accompanied by the need for a sustainable model that allows you to thrive financially.</p>
                <a href="#" class="read-more">Read More</a>
            </div>
            <div class="faq-item">
                <h3>Cost of your art collection</h3>
                <p>The cost of your art collection can vary widely depending on factors like the artist's reputation, the medium, the rarity of the piece, and the demand in the market.</p>
                <a href="#" class="read-more">Read More</a>
            </div>
            <div class="faq-item">
                <h3>Do you need expensive art supplies to make good art?</h3>
                <p>Creativity, technique, and expression are what matter most, using affordable materials, proving that quality art can be achieved with any budget.</p>
                <a href="#" class="read-more">Read More</a>
            </div>
            <div class="faq-item">
                <h3>How to get your art funded</h3>
                <p>You can seek sponsorship from art patrons, approach galleries or institutions for commissions, and build connections within the art community to access funding opportunities.</p>
                <a href="#" class="read-more">Read More</a>
            </div>
            <div class="faq-item">
                <h3>How to discover your taste as a new art collector</h3>
                <p>Pay attention to what resonates with you emotionally and intellectually, and over time, your preferences will naturally evolve as you engage more deeply with the art world.</p>
                <a href="#" class="read-more">Read More</a>
            </div>
            <div class="faq-item">
                <h3>Things successful artists refuse to do</h3>
                <p>They avoid neglecting self-promotion and networking, recognizing that building relationships and maintaining visibility are essential for sustaining a thriving career.</p>
                <a href="#" class="read-more">Read More</a>
            </div>
            <div class="faq-item">
                <h3>Building the best online portfolio for your art</h3>
                <p>Organize your pieces by series or theme, include an artist statement and bio, and make it easy for visitors to contact you or inquire about purchasing your work.</p>
                <a href="#" class="read-more">Read More</a>
            </div>
            <div class="faq-item">
                <h3>Art holiday gift guide</h3>
                <p>Consider gifting personalized artwork, such as a commission tailored to the recipient’s tastes, or art inspired by their favorite themes, styles, or places, adding a meaningful and lasting touch to the holiday season.</p>
                <a href="#" class="read-more">Read More</a>
            </div>
            <div class="faq-item">
                <h3>Public art maintenance best practices</h3>
                <p>Collaborating with local artists or conservators for restoration efforts is also essential to preserving public artworks.</p>
                <a href="#" class="read-more">Read More</a>
            </div>
        </div>
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