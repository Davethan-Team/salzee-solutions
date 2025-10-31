<?php
    // Define the current page for active navigation link styling
    $current_page = 'home'; // Set to 'home' as this is the index page
    // Include the standard header for navigation, metadata, and styling setup
    // NOTE: 'header.php' contains the clean_link() function and base path detection.
    include 'includes/header.php';

    // Partner data array (NOTE: This array can be moved to a separate config file if the project scales)
    $partners = [
        'Interswitch Limited' => 'assets/images/Interswitch.png',
        'Jaiz Bank' => 'assets/images/Jaiz_New_Logo.jpg',
        'Daily Trust' => 'assets/images/Daily-Trust-logo.jpg',
        'Microsoft' => 'assets/images/Microsoft_Logo.png',
        'The Knowledge Academy' => 'assets/images/The Knowledge Academy.png',
        '3P Consulting' =>  'assets/images/3P Consulting.webp',
        'DataLead Africa' => 'assets/images/DataLead-logo.svg',
        'Davethan Logo' => 'assets/images/davethan_logo.webp',
    ];

    // --- NEW: Service data array for the Homepage - Concise Summaries ---
    // This defines the four pillars with brief, professional summaries for the homepage.
    $services_data_pillars = [
        [
            'title' => 'IT Consultancy',
            'summary' => 'Strategic guidance and expert planning to align technology directly with your long-term business goals for sustainable growth.',
            'icon' => '<i class="fas fa-laptop-code text-brand-teal icon-uniform"></i>',
        ],
        [
            'title' => 'Managed IT Services',
            'summary' => 'Comprehensive, outsourced support and reliable solutions to keep your IT systems running smoothly, efficiently, and securely 24/7.',
            'icon' => '<i class="fas fa-cogs text-brand-teal icon-uniform"></i>',
        ],
        [
            'title' => 'Professional & Technical Services',
            'summary' => 'Specialist, hands-on expertise to solve complex operational and technical challenges, including process optimization and project management.',
            'icon' => '<i class="fas fa-tools text-brand-teal icon-uniform"></i>',
        ],
        [
            'title' => 'Training & Education',
            'summary' => 'Empowering individuals and teams with engaging, practical training to build core digital skills in data analysis, software, and project management.',
            'icon' => '<i class="fas fa-chalkboard-teacher text-brand-teal icon-uniform"></i>',
        ],
    ];
    // --- END NEW SERVICE DATA ---
?>

<!-- START BRAND GUIDE IMPLEMENTATION: FONTS & COLORS -->
<style>
    /* 1. Import Montserrat (Headings) and Open Sans (Body) */
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&family=Open+Sans:wght@400;600;700&display=swap');

    /* 2. Define Custom Fonts for Global Use */
    .font-heading {
        font-family: 'Montserrat', sans-serif;
    }
    .font-body {
        font-family: 'Open Sans', sans-serif;
    }

    /* 3. Define Brand Colors as variables for easy Tailwind use via arbitrary values */
    :root {
        --brand-teal: #0097A7;       /* Primary Brand Blue-Green */
        --brand-charcoal: #333333;   /* Heading/Dark Text */
        --brand-background: #F9F9F9; /* Clean, modern background */
    }

    /* 4. Utility Classes to apply colors (easier than using arbitrary values everywhere) */
    .bg-brand-teal { background-color: var(--brand-teal); }
    .text-brand-teal { color: var(--brand-teal); }
    .bg-brand-charcoal { background-color: var(--brand-charcoal); }
    .text-brand-charcoal { color: var(--brand-charcoal); }
    .bg-brand-background { background-color: var(--brand-background); }

    /* 5. Custom Styling for Homepage Service Cards (Professional Touch) */
    .service-pillar-card {
        transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1); /* Professional animation curve */
        border-bottom: 4px solid transparent;
        cursor: pointer;
        display: flex;
        flex-direction: column;
        height: 100%;
    }
    .service-pillar-card:hover {
        border-bottom-color: var(--brand-teal);
        transform: translateY(-5px) scale(1.01);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08); /* Lighter shadow for homepage */
    }

    .icon-uniform {
        font-size: 2rem; /* Adjust this value as needed */
      }

    /* 6. Scroll Reveal Base State (Matching services.php quality) */
    .scroll-reveal {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.7s ease-out, transform 0.7s ease-out;
    }
    .scroll-reveal.fade-in {
        opacity: 1;
        transform: translateY(0);
    }

    /* 7. Image Slider/Partner Styling (Ensures proper scaling and grayscale) */
    .partner-logo {
        height: 40px; /* Consistent height for all logos */
        width: auto;
        filter: grayscale(0%); /* Elegant grayscale */
        transition: all 0.3s ease-in-out;
    }
    .partner-logo:hover {
        opacity: 1;
        filter: grayscale(100%); /* Color on hover */
    }
    
    /* Global Container Padding Utility */
    .container-padding {
        padding-left: 1rem;
        padding-right: 1rem;
    }
    @media (min-width: 640px) {
        .container-padding {
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }
    }
    @media (min-width: 1024px) {
        .container-padding {
            padding-left: 2rem;
            padding-right: 2rem;
        }
    }
</style>

<main>
    <!-- 1. Hero Section -->
    <section class="bg-brand-background py-20 md:py-32">
        <div class="max-w-7xl mx-auto container-padding grid lg:grid-cols-2 gap-12 items-center">
            
            <!-- Left Content (Text) - Scroll Reveal -->
            <div class="scroll-reveal" data-delay="0">
                <h1 class="font-heading text-4xl md:text-5xl lg:text-6xl font-extrabold text-brand-charcoal leading-tight mb-4">
                    Technology Made Simple. <span class="text-brand-teal">Solutions Made for You.</span>
                </h1>
                <p class="text-xl text-gray-700 max-w-xl font-body font-normal mb-8">
                    We help businesses and individuals succeed with expert IT consultancy, bespoke services, and capacity building that makes a difference.
                </p>

                <!-- CTAs -->
                <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                    <!-- CTA 1: Explore Our Services -->
                    <a href="<?php echo clean_link('services'); ?>" class="inline-flex items-center justify-center px-8 py-4 bg-brand-teal text-white border-2 border-brand-teal font-bold rounded-lg hover:bg-white hover:text-brand-teal transition duration-150 shadow-xl transform hover:scale-[1.02] font-heading">
                        Explore Our Services
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" /></svg>
                    </a>
                    <!-- CTA 2: Book a Consultation -->
                    <a href="<?php echo clean_link('contact_us'); ?>" class="inline-flex items-center justify-center px-8 py-4 bg-brand-teal text-white border-2 border-brand-teal font-bold rounded-lg hover:bg-white hover:text-brand-teal transition duration-150 shadow-xl transform hover:scale-[1.02] font-heading">
                        Book a Consultation
                    </a>
                </div>
            </div>
            
            <!-- Right Content (Image Placeholder) - Scroll Reveal -->
            <div class="scroll-reveal order-first lg:order-last">
                <!-- Placeholder for a professional, non-flat IT/strategy image -->
                <img 
                    src="assets/images/homepage_hero_result.webp" 
                    alt="Abstract image representing strategic IT planning" 
                    class="rounded-xl shadow-2xl w-full h-auto object-cover border border-gray-100" 
                    onerror="this.onerror=null;this.src='https://placehold.co/800x500/0097A7/FFFFFF?text=Strategic+IT+Consultancy';">
            </div>
        </div>
    </section>

    <!-- 2. Services Section: The Four Pillars - Professional Briefing -->
    <section class="bg-white py-16 md:py-24">
        <div class="max-w-7xl mx-auto container-padding">
            <h2 class="font-heading text-3xl sm:text-4xl font-bold text-brand-teal mb-4 text-center scroll-reveal">
                Our Core Service Pillars
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto text-center mb-12 font-body scroll-reveal">
                We empower your growth through four core areas of expertise.
            </p>

            <!-- Services Grid (4 columns on desktop) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <?php $delay = 100; // Staggered delay for animation ?>
                <?php foreach ($services_data_pillars as $service): ?>
                    <!-- CTA: Service Pillar Link (All link to the main services page) -->
                    <a href="<?php echo clean_link('services'); ?>" class="service-pillar-card bg-brand-background p-6 rounded-xl shadow-md flex items-start text-left scroll-reveal" data-delay="<?php echo $delay; ?>">
                        
                        <!-- Icon Column (Teal Accent) -->
                        <div class="p-3 bg-white rounded-lg shadow-inner mr-4 flex-shrink-0">
                            <?php echo $service['icon']; ?>
                        </div>

                        <!-- Content Column -->
                        <div class="flex-grow">
                            <h3 class="font-heading text-lg font-bold text-brand-charcoal mb-2 leading-tight">
                                <?php echo $service['title']; ?>
                            </h3>
                            <!-- Professional Brief Summary -->
                            <p class="text-sm text-gray-600 font-body">
                                <?php echo $service['summary']; ?>
                            </p>
                        </div>
                    </a>
                <?php $delay += 150; ?>
                <?php endforeach; ?>
            </div>

            <!-- CTA to Services Page -->
            <div class="text-center mt-12 scroll-reveal">
                <a href="<?php echo clean_link('services'); ?>" class="inline-flex items-center justify-center px-8 py-4 bg-brand-teal text-white border-2 border-brand-teal font-bold rounded-lg hover:bg-white hover:text-brand-teal transition duration-150 shadow-xl transform hover:scale-[1.02] font-heading">
                    View All Services & Details
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- 3. About Us Snippet Section -->
    <section class="py-16 md:py-24 bg-brand-background">
        <div class="max-w-7xl mx-auto container-padding grid lg:grid-cols-2 gap-12 items-center">
            
            <!-- Image Placeholder (Placeholder for team/trust) - Scroll Reveal -->
            <div class="scroll-reveal">
                <img 
                    src="assets/images/tusted_partner.webp" 
                    alt="Professional team meeting and strategy" 
                    class="rounded-xl shadow-2xl w-full h-auto object-cover border border-gray-200" 
                    onerror="this.onerror=null;this.src='https://placehold.co/800x500/333333/0097A7?text=Trusted+Partner+%7C+Team';">
            </div>

            <!-- Text Content - Scroll Reveal -->
            <div class="scroll-reveal">
                <h2 class="font-heading text-3xl md:text-4xl font-extrabold text-brand-charcoal leading-tight mb-4">
                    Your Trusted Partner for <span class="text-brand-teal">Technology and Growth</span>
                </h2>
                <p class="text-lg text-gray-700 mb-6 font-body">
                    We’re a UK-based technology services provider passionate about helping businesses and individuals use technology to work smarter. From strategy and support to training and innovation, we provide straightforward, simple, reliable, and effective solutions that just work for you.
                </p>
                <p class="text-lg text-gray-700 mb-8 font-body">
                    Our experience spans digital transformation, IT consultancy, policy research, and capacity building—giving us a unique ability to design approaches that are practical today and future-ready for tomorrow.
                </p>
                
                <!-- CTA: Learn More About Us -->
                <a href="<?php echo clean_link('about_us'); ?>" class="inline-flex items-center justify-center px-8 py-4 bg-brand-teal text-white border-2 border-brand-teal font-bold rounded-lg hover:bg-white hover:text-brand-teal transition duration-150 shadow-xl transform hover:scale-[1.02] font-heading">
                    Learn More About Us
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- 4. Trusted Partners / Client Logos Section -->
    <section class="bg-white py-16 md:py-24">
        <div class="max-w-7xl mx-auto container-padding">
            <h2 class="font-heading text-2xl font-bold text-brand-charcoal mb-10 text-center uppercase tracking-wider scroll-reveal">
                Trusted by Leading Organizations
            </h2>
            
            <!-- Partner Logo Grid -->
            <div class="flex grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8 justify-items-center items-center scroll-reveal">
                <?php foreach ($partners as $name => $path): ?>
                    <div class="flex items-center justify-center w-full h-20">
                        <img 
                            src="<?php echo $path; ?>" 
                            alt="<?php echo $name; ?> Logo" 
                            class="partner-logo object-contain"
                            onerror="this.onerror=null;this.src='https://placehold.co/150x40/BDBDBD/333333?text=<?php echo urlencode($name); ?>';">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    
    <!-- 5. Final Call To Action (Same as previous version, but updated for consistency) -->
    <section class="bg-brand-teal py-16 md:py-24 text-center scroll-reveal">
        <div class="max-w-7xl mx-auto container-padding">
            <h2 class="font-heading text-3xl md:text-4xl lg:text-5xl font-extrabold text-white mb-4 leading-tight">
                Ready to Accelerate Your Success?
            </h2>
            <p class="text-lg md:text-xl font-light text-white mb-10 max-w-4xl mx-auto font-body">
                Join hundreds of successful organizations who trust Salzee Solutions for strategic guidance and measurable results. Let's discuss how we can accelerate your success.
            </p>

            <!-- CTAs -->
            <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 justify-center sm:space-x-6">
                <!-- Primary CTA - Start Your Journey -->
                <a href="<?php echo clean_link('contact_us'); ?>" class="flex items-center justify-center px-8 py-4 border-2 border-white text-white font-bold rounded-lg hover:bg-white hover:text-brand-teal transition duration-150 font-heading">
                    Start Your Journey
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                    </svg>
                </a>
                <!-- Secondary CTA - Why Choose Salzee? -->
                <a href="<?php echo clean_link('why_trust_us'); ?>" class="flex items-center justify-center px-8 py-4 border-2 border-white text-white font-bold rounded-lg hover:bg-white hover:text-brand-teal transition duration-150 font-heading">
                    Why Choose Salzee?
                </a>
            </div>
        </div>
    </section>

</main>

<script>
    // Intersection Observer for Scroll-Reveal Animation (Applied to all elements with class 'scroll-reveal')
    document.addEventListener('DOMContentLoaded', () => {
        const observerOptions = {
            root: null, 
            rootMargin: '0px',
            threshold: 0.1 
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                // If the element is intersecting (in the viewport)
                if (entry.isIntersecting) {
                    const delay = parseInt(entry.target.getAttribute('data-delay') || '0', 10);
                    // Apply animation class after the specific delay for staggered effect
                    setTimeout(() => {
                        entry.target.classList.add('fade-in');
                    }, delay);
                    // Stop observing once the animation has been triggered
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Apply initial hidden state and observe each element
        const animatedElements = document.querySelectorAll('.scroll-reveal');
        
        animatedElements.forEach(element => {
            // Check if the element has already been animated or if it's the hero section (which should be immediately visible)
            // For general scroll-reveal elements, observe them
            observer.observe(element);
        });
    });
</script>

<?php
    // Include the standard footer to close the page body and add copyright
    include 'includes/footer.php';
?>
