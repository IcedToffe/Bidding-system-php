<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Gallery Veretei</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ecf0f1;
        }

       

        /* Navbar Styles */
        nav {
            background: rgba(0, 0, 0, 0.7);
            padding: 10px 0;
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000;
        }

        nav ul {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        nav li {
            margin: 0 15px;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 10px;
        }

        nav a:hover {
            background-color: #1abc9c;
            border-radius: 5px;
        }

        /* Fullscreen Background Section */
        .section {
            text-align: center;
            color: white;
            position: relative;
            overflow: hidden;
        }

        /* Home Section - Fullscreen Background */
        .home {
            background-image: url('https://images.photowall.com/interiors/44155/landscape/wallpaper/room89.jpg?w=1440&q=80'); /* Replace with your background image URL */
            background-size: cover;
            background-position: center;
            height: 100vh;  /* Fullscreen height */
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            overflow: hidden;
            text-align: center;
        }

        /* Heading and Paragraph Style */
        .home h2 {
            font-size: 4rem;
            animation: fadeIn 2s ease-in-out;
            margin-bottom: 20px;
                       
        }

        .home p {
            font-size: 1.5rem;
            animation: fadeIn 3s ease-in-out;
            margin-bottom: 30px;
             
        }

        .home button {
            padding: 15px 30px;
            font-size: 1rem;
            background-color: #1abc9c;
            color: rgb(19, 1, 1);
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .home button:hover {
            background-color: #16a085;
        }

        /* Feature Cards Section */
        .features {
            display: flex;
            justify-content: center;
            margin-top: 50px;
            gap: 30px;
            flex-wrap: wrap;
        }

        .feature-card {
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            padding: 20px;
            width: 250px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            animation: fadeUp 2s ease-in-out;
        }

        .feature-card h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .feature-card p {
            font-size: 1rem;
            color: #555;
        }

        /* Animations */
        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        @keyframes fadeUp {
            0% { opacity: 0; transform: translateY(50px); }
            100% { opacity: 1; transform: translateY(0); }
        }


        .home { background-color: #16a085; }
        .explore { background-color: #f39c12; }
        .faq { background-color: #8e44ad; }
        .about { background-color: #2980b9; }

        /* Smooth Scroll */
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav>
        <div style="display: flex; justify-content: space-between; align-items: center; padding: 0 20px;">
            <!-- Main Navigation Links -->
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#explore">Explore</a></li>
                <li><a href="#faq">FAQ</a></li>
                <li><a href="#about">About</a></li>
            </ul>

            <!-- Authentication Links (aligned to the right) -->
            <div class="auth-links">
                @auth
                    <!-- If user is logged in, show Dashboard -->
                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                @else
                    <!-- If user is not logged in, show Log In and Register -->
                    <a href="{{ route('login') }}">Log In</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        </div>
    </nav>

  
    <!-- Home Section with Fullscreen Background and More Content -->
    <div id="home" class="section home">
        <div>
            <!-- Main Heading -->
            <h2>Welcome to 
                <br> Veretei Artwork Gallery</h2>
            <p>Discover everything we offer, explore new features, and learn more about us!</p>
            <button onclick="window.location.href='#explore'">Explore Now</button>
        </div>
    </div>

<!-- Explore Section -->
<div id="explore" class="section explore" style="background-color: #f7f7f7; padding: 50px 20px;">
    <h2>Explore Our Services</h2>
    <p>Explore a wide range of features, tools, and resources to enhance your experience. We provide services that help you grow, achieve your goals, and make the most of your time.</p>

    <!-- Service Highlights -->
    <div class="explore-features" style="display: flex; justify-content: space-around; flex-wrap: wrap; gap: 20px;">
        <!-- Feature 1 -->
        <div class="feature-card" style="background: #ffffff; border-radius: 10px; padding: 20px; width: 250px; text-align: center; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
            <img src="https://images.photowall.com/interiors/69890/standing/wallpaper/room49.jpg?w=1440&q=80" alt="Service 1" style="width: 100%; border-radius: 10px;">
            <h3>Feature 1</h3>
            <p>Our first service is designed to streamline your workflow and improve productivity.</p>
            <a href="#" style="color: #1abc9c; text-decoration: none;">Learn More</a>
        </div>

        <!-- Feature 2 -->
        <div class="feature-card" style="background: #ffffff; border-radius: 10px; padding: 20px; width: 250px; text-align: center; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
            <img src="https://images.photowall.com/interiors/45115/landscape/wallpaper/room38.jpg?w=4000&q=80" alt="Service 2" style="width: 100%; border-radius: 10px;">
            <h3>Feature 2</h3>
            <p>Our second service focuses on helping you collaborate better and faster with your team.</p>
            <a href="#" style="color: #1abc9c; text-decoration: none;">Learn More</a>
        </div>

        <!-- Feature 3 -->
        <div class="feature-card" style="background: #ffffff; border-radius: 10px; padding: 20px; width: 250px; text-align: center; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
            <img src="https://images.photowall.com/interiors/44172/landscape/wallpaper/room34.jpg?w=1440&q=80" alt="Service 3" style="width: 100%; border-radius: 10px;">
            <h3>Feature 3</h3>
            <p>Our third service offers powerful analytics to help you make data-driven decisions.</p>
            <a href="#" style="color: #1abc9c; text-decoration: none;">Learn More</a>
        </div>
    </div>

    <!-- Call to Action Button -->
    <div style="text-align: center; margin-top: 40px;">
        <button onclick="window.location.href='#contact'" style="padding: 15px 30px; font-size: 1rem; background-color: #1abc9c; color: white; border: none; border-radius: 5px; cursor: pointer; transition: background 0.3s ease;">
            Get Started
        </button>
    </div>
</div>



<!-- FAQ Section about Auctions and Paintings -->
<div id="faq" class="section faq" style="background-color: #f7f7f7; padding: 50px 20px;">
    <h2 style="text-align: center; color: #333; font-family: 'Arial', sans-serif; font-size: 2rem; margin-bottom: 40px;">Frequently Asked Questions About Art Auctions and Paintings</h2>
    <p style="text-align: center; color: #555; font-family: 'Arial', sans-serif; font-size: 1.1rem; margin-bottom: 40px;">Find answers to the most commonly asked questions about art auctions, buying and selling paintings, and understanding the auction process.</p>

    <!-- FAQ List -->
    <div class="faq-list" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px;">

        <!-- FAQ Item -->
        <div class="faq-item" style="background: #ffffff; border-radius: 10px; padding: 20px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease, box-shadow 0.3s ease; display: flex; align-items: center;">
            <i class="fas fa-gavel" style="font-size: 50px; color: #1abc9c; margin-right: 20px;"></i>
            <div>
                <h3 style="color: #333; font-size: 1.2rem; margin-bottom: 10px;">What is an art auction?</h3>
                <p style="color: #555; font-size: 1rem;">Art auctions are public events where works of art are sold to the highest bidder. Auctions are often held in person, online, or through a hybrid model where bidders can participate from anywhere in the world.</p>
            </div>
        </div>

        <!-- FAQ Item -->
        <div class="faq-item" style="background: #ffffff; border-radius: 10px; padding: 20px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease, box-shadow 0.3s ease; display: flex; align-items: center;">
            <i class="fas fa-paint-brush" style="font-size: 50px; color: #f39c12; margin-right: 20px;"></i>
            <div>
                <h3 style="color: #333; font-size: 1.2rem; margin-bottom: 10px;">How is a painting valued at an auction?</h3>
                <p style="color: #555; font-size: 1rem;">The value of a painting at auction depends on factors such as the artist’s reputation, historical significance, condition of the artwork, provenance (history of ownership), and demand from potential buyers.</p>
            </div>
        </div>

        <!-- FAQ Item -->
        <div class="faq-item" style="background: #ffffff; border-radius: 10px; padding: 20px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease, box-shadow 0.3s ease; display: flex; align-items: center;">
            <i class="fas fa-gavel" style="font-size: 50px; color: #1abc9c; margin-right: 20px;"></i>
            <div>
                <h3 style="color: #333; font-size: 1.2rem; margin-bottom: 10px;">How does the bidding process work?</h3>
                <p style="color: #555; font-size: 1rem;">Bidding is a competitive process where participants place bids on a painting, and the highest bidder at the close of the auction wins the artwork. Bidding can be done in person, online, or through a proxy bid.</p>
            </div>
        </div>

        <!-- FAQ Item -->
        <div class="faq-item" style="background: #ffffff; border-radius: 10px; padding: 20px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease, box-shadow 0.3s ease; display: flex; align-items: center;">
            <i class="fas fa-credit-card" style="font-size: 50px; color: #e74c3c; margin-right: 20px;"></i>
            <div>
                <h3 style="color: #333; font-size: 1.2rem; margin-bottom: 10px;">What payment methods are accepted at auctions?</h3>
                <p style="color: #555; font-size: 1rem;">Most art auctions accept payments through credit/debit cards, bank transfers, or online payment platforms. Some auctions may also offer financing options for high-value paintings.</p>
            </div>
        </div>

        <!-- FAQ Item -->
        <div class="faq-item" style="background: #ffffff; border-radius: 10px; padding: 20px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease, box-shadow 0.3s ease; display: flex; align-items: center;">
            <i class="fas fa-truck" style="font-size: 50px; color: #8e44ad; margin-right: 20px;"></i>
            <div>
                <h3 style="color: #333; font-size: 1.2rem; margin-bottom: 10px;">How is artwork delivered after purchase?</h3>
                <p style="color: #555; font-size: 1rem;">After winning an auction, the artwork is typically shipped to the buyer's address. Shipping methods vary depending on the auction house, the value of the artwork, and the buyer’s location. International shipping may also be available.</p>
            </div>
        </div>
    </div>
</div>

<div id="about" class="section about" style="padding: 50px 20px; background-color: #f0f0f0;">
    <h2 style="text-align: center; font-size: 2rem; color: #333; margin-bottom: 40px;">About Us</h2>
    <p style="text-align: center; font-size: 1.1rem; color: #555; margin-bottom: 40px;">Learn more about our mission, vision, and the team behind our platform.</p>

    <!-- Images Grid -->
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; justify-items: center;">

        <!-- Image 1: Mission -->
        <div class="image-card" style="position: relative; overflow: hidden; border-radius: 10px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);">
            <img src="https://artgallery.yale.edu/sites/default/files/styles/hero_large/public/2023-01/ag-doc-2281-0036-pub.jpg?h=147a4df9&itok=ewaTyP0m" alt="Mission" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease, box-shadow 0.3s ease;">
            <div class="image-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 0, 0, 0.4); display: flex; justify-content: center; align-items: center; opacity: 0; transition: opacity 0.3s ease;">
                <p style="color: white; font-size: 1.5rem; text-align: center; font-weight: bold;">Artworks</p>
            </div>
        </div>

        <!-- Image 2: Vision -->
        <div class="image-card" style="position: relative; overflow: hidden; border-radius: 10px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);">
            <img src="https://artgallery.yale.edu/sites/default/files/styles/max_960x960/public/2023-06/2023-ag-doc-2468-0001-pub.jpg?h=e38f9191&itok=gvW20qWZ" alt="Vision" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease, box-shadow 0.3s ease;">
            <div class="image-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 0, 0, 0.4); display: flex; justify-content: center; align-items: center; opacity: 0; transition: opacity 0.3s ease;">
                <p style="color: white; font-size: 1.5rem; text-align: center; font-weight: bold;">Exhibition</p>
            </div>
        </div>

        <!-- Image 3: Team -->
        <div class="image-card" style="position: relative; overflow: hidden; border-radius: 10px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);">
            <img src="https://artgallery.yale.edu/sites/default/files/styles/max_2600x2600/public/2023-03/ag-doc-985-0019-pub.jpg?itok=Da1nV9Uw" alt="Team" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease, box-shadow 0.3s ease;">
            <div class="image-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 0, 0, 0.4); display: flex; justify-content: center; align-items: center; opacity: 0; transition: opacity 0.3s ease;">
                <p style="color: white; font-size: 1.5rem; text-align: center; font-weight: bold;">Meet the Team</p>
            </div>
        </div>

        <!-- Image 4: Values -->
        <div class="image-card" style="position: relative; overflow: hidden; border-radius: 10px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);">
            <img src="https://www.surrey.ca/sites/default/files/styles/3x2_1200w/public/2024-08/FutureMemoriaExhibitions.jpg?h=51a72048&itok=0Oucd8Ee" alt="Values" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease, box-shadow 0.3s ease;">
            <div class="image-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 0, 0, 0.4); display: flex; justify-content: center; align-items: center; opacity: 0; transition: opacity 0.3s ease;">
                <p style="color: white; font-size: 1.5rem; text-align: center; font-weight: bold;">Our Values</p>
            </div>
        </div>

       
        </div>
    </div>
</div>




<!-- Hover Effects Script -->
<script>
    // Select all image cards and overlay elements
    const imageCards = document.querySelectorAll('.image-card');
    
    // Add hover effect to each card
    imageCards.forEach(card => {
        card.addEventListener('mouseenter', () => {
            card.querySelector('img').style.transform = 'scale(1.1)';
            card.querySelector('.image-overlay').style.opacity = '1';
        });

        card.addEventListener('mouseleave', () => {
            card.querySelector('img').style.transform = 'scale(1)';
            card.querySelector('.image-overlay').style.opacity = '0';
        });
    });
</script>
<!-- Footer Section -->
<footer style="background-color: #2C3E50; color: white; padding: 40px 20px; text-align: center; font-family: 'Arial', sans-serif;">

    <!-- Quick Links Section -->
    <div style="margin-bottom: 30px;">
        <h3 style="font-size: 1.5rem; margin-bottom: 20px; color: #FF5733;">Quick Links</h3>
        <ul style="list-style: none; padding: 0; display: flex; justify-content: center; gap: 30px;">
            <li><a href="#home" style="color: white; text-decoration: none; font-size: 1rem; transition: color 0.3s;">Home</a></li>
            <li><a href="#explore" style="color: white; text-decoration: none; font-size: 1rem; transition: color 0.3s;">Explore</a></li>
            <li><a href="#faq" style="color: white; text-decoration: none; font-size: 1rem; transition: color 0.3s;">FAQ</a></li>
            <li><a href="#about" style="color: white; text-decoration: none; font-size: 1rem; transition: color 0.3s;">About</a></li>
        </ul>
    </div>

    <!-- Contact Us Section -->
    <div style="margin-bottom: 30px;">
        <h3 style="font-size: 1.5rem; margin-bottom: 20px; color: #FF5733;">Contact Us</h3>
        <p style="font-size: 1rem; margin-bottom: 10px;">We'd love to hear from you!</p>
        <p style="font-size: 1rem;">Email: <a href="mailto:veretei@gmail.com" style="color: #FF5733; text-decoration: none; transition: color 0.3s;">veretei@gmail.com</a></p>
    </div>

    <!-- Footer Bottom -->
    <div style="border-top: 1px solid #34495E; padding-top: 20px; font-size: 0.9rem; color: #BDC3C7;">
        <p>&copy; 2024 Auction Platform. All Rights Reserved.</p>
    </div>
</footer>

<!-- Hover Effects with CSS -->
<style>
    footer a:hover {
        color: #FF5733; /* Highlight color for links */
        text-decoration: underline;
    }
</style>


</body>
</html>
