<?php
// 1. Get the current page filename (e.g., 'index.php' or 'about_us.php')
$current_filename = basename($_SERVER['REQUEST_URI']);

// 2. Define a map to convert the filename to the short key used in your $nav_links array
$filename_to_key_map = [
    'index.php'     => 'home',
    'about_us.php'  => 'about_us',
    'services.php'  => 'services',
    'why_trust_us.php'=> 'why_trust_us',
    'contact_us.php'=> 'contact_us',
];

// 3. Set $current_page key.
$current_page_clean = strtok($current_filename, '?'); 

if (isset($filename_to_key_map[$current_page_clean])) {
    $current_page = $filename_to_key_map[$current_page_clean];
} else {
    // Default to 'home' if the file is unknown (e.g., index.php without query string)
    $current_page = 'home';
}

// 4. Define the navigation links
$nav_links = [
    'home' => ['text' => 'Home', 'url' => 'index.php'],
    'about_us' => ['text' => 'About Us', 'url' => 'about_us.php'],
    'services' => ['text' => 'Services', 'url' => 'services.php'],
    'why_trust_us' => ['text' => 'Why Trust Us', 'url' => 'why_trust_us.php'],
    'contact_us' => ['text' => 'Contact Us', 'url' => 'contact_us.php'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title reflects the brand's full name and tagline for maximum consistency. -->
    <title>Salzee Solutions Ltd | Simplifying technology. Empowering businesses and individuals.</title>
    
    <!-- Description meta tag for SEO -->
    <meta name="description" content="Salzee Solutions Ltd: Expert IT consultancy, policy research, and capacity building services to simplify technology and empower business growth.">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/favicon.ico">

    <!-- Preload Fonts for performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        /* Global font application based on the Brand Guide */
        :root {
            font-family: 'Lato', sans-serif; /* Body font */
        }
        .font-heading {
            font-family: 'Poppins', sans-serif; /* Heading font */
        }

        /* Custom mobile menu transition for smooth opening/closing */
        #mobile-menu {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }
        #mobile-menu.active {
            max-height: 500px; /* A value larger than the max height of the menu content */
            transition: max-height 0.5s ease-in;
        }
    </style>

    <!-- Tailwind Configuration (Brand Colors) -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'brand-teal': '#0097A7',         // Primary Teal
                        'brand-teal-dark': '#007A8A',    // Darker teal for hover states
                        'brand-charcoal': '#333333',     // Primary Charcoal Gray
                        'brand-offwhite': '#F9F9F9',     // Primary White/Off-White Background
                        'brand-aqua-light': '#4DD0E1',   // Secondary Bright Aqua for accents
                    },
                    fontFamily: {
                        sans: ['Lato', 'sans-serif'],
                        heading: ['Poppins', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-brand-offwhite text-brand-charcoal">

    <!-- Header Section: Sticky Navigation Bar -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-3 flex justify-between items-center">
            
            <!-- Logo (Left Side) -->
            <a href="index.php" class="flex items-center space-x-2">
                <!-- IMPORTANT: Updated image path as requested by the client -->
                <img src="assets\images\Salzee logo horizontal for light backgrounds.png" alt="Salzee Solutions Logo" class="h-10">
            </a>

            <!-- Desktop Navigation (Center) -->
            <nav class="hidden lg:flex space-x-8 font-heading text-lg">
                <?php
                foreach ($nav_links as $key => $link) {
                    // Check if the current link key matches the current page
                    $is_active = ($key === $current_page);
                    
                    // Apply active and hover styles based on the brand guide (Teal color)
                    $active_class = $is_active 
                        ? 'text-brand-teal border-b-2 border-brand-teal font-bold' 
                        : 'text-brand-charcoal hover:text-brand-teal transition duration-150';

                    echo '<a href="' . $link['url'] . '" class="pb-1 ' . $active_class . '">' . $link['text'] . '</a>';
                }
                ?>
            </nav>

            <!-- Desktop CTA Button (Right Side) -->
            <div class="hidden lg:block">
                <a href="contact_us.php" class="px-6 py-2 bg-brand-teal text-white font-bold rounded-lg hover:bg-brand-teal-dark transition duration-150 shadow-lg font-heading">
                    Get Started
                </a>
            </div>

            <!-- Mobile Menu Button (Right Side for Mobile/Tablet) -->
            <button id="mobile-menu-toggle" class="lg:hidden p-2 text-brand-charcoal hover:text-brand-teal transition duration-150 rounded-md" aria-expanded="false">
                <!-- Hamburger Icon (SVG) -->
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>

        <!-- Mobile Navigation Menu (Hidden by default) -->
        <div id="mobile-menu" class="hidden lg:hidden bg-white shadow-inner pb-4">
            <!-- Increased space-y-3 for better visual separation of button-like links -->
            <nav class="flex flex-col space-y-3 px-6 pt-4 font-heading text-base">
                <?php
                foreach ($nav_links as $key => $link) {
                    $is_active = ($key === $current_page);
                    
                    // NEW MOBILE STYLE: Full-width, centered block/button style
                    $active_class = $is_active 
                        ? 'text-white bg-brand-teal font-bold shadow-lg' // Active: Solid Teal button with shadow
                        : 'text-brand-charcoal hover:text-brand-teal hover:bg-brand-offwhite'; // Inactive: Dark text, light background hover
                    
                    // 'block' and 'text-center' classes ensure the link fills the width and centers the text
                    echo '<a href="' . $link['url'] . '" class="text-lg ' . $active_class . ' rounded-lg py-3 block text-center transition duration-200">' . $link['text'] . '</a>';
                }
                ?>
            </nav>
            <!-- CTA Button (Mobile) -->
            <div class="px-6 pt-5">
                <a href="contact_us.php" class="inline-flex items-center justify-center w-full px-6 py-3 bg-brand-teal text-white font-bold rounded-lg hover:bg-brand-teal-dark transition duration-150 shadow-lg font-heading">
                    Get Started
                </a>
            </div>
        </div>
    </header>

    <script>
        // JavaScript for mobile menu toggle functionality
        document.addEventListener('DOMContentLoaded', () => {
            const toggleButton = document.getElementById('mobile-menu-toggle');
            const mobileMenu = document.getElementById('mobile-menu');

            if (toggleButton && mobileMenu) {
                toggleButton.addEventListener('click', () => {
                    // Toggle the 'hidden' class for basic visibility
                    mobileMenu.classList.toggle('hidden');
                    // Toggle the 'active' class to drive the max-height transition
                    mobileMenu.classList.toggle('active');

                    // Accessibility improvement: swap icon for menu state
                    const svg = toggleButton.querySelector('svg');
                    const isExpanded = mobileMenu.classList.contains('active');
                    
                    if (isExpanded) {
                        // Change to 'X' icon
                        svg.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>';
                    } else {
                        // Change back to 'Hamburger' icon
                        svg.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>';
                    }
                    toggleButton.setAttribute('aria-expanded', isExpanded);
                });
            }
        });
    </script>
<?php // The remaining content of the HTML body will be in the file that includes this header.
?>
