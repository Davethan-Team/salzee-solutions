<?php
    // Define the current page for active navigation link styling
    $current_page = 'about_us';
    // Include the standard header for navigation, metadata, and styling setup
    include 'includes/header.php';
?>

<main>
    <!-- 1. Hero Section: Our Story of Strategic Excellence -->
    <section class="py-16 md:py-24 bg-brand-offwhite text-brand-charcoal animate-on-scroll">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-12 items-center">
            
            <!-- Left Content (Text) -->
            <div class="order-1 lg:order-1"> 
                
                <p class="text-brand-teal font-heading text-lg font-semibold uppercase mb-2">Our Foundation</p>
                <!-- Title (H1 for page SEO) -->
                <h1 class="font-heading text-4xl md:text-5xl lg:text-6xl font-extrabold leading-tight mb-6">
                    About Salzee Solutions Ltd.
                </h1>
                
                <!-- Subheading (EXACT COPY from DOCX) -->
                <p class="text-xl text-gray-700 font-heading font-normal mb-8">
                    Your trusted partner for technology and growth – technology consultancy, policy research and training services.
                </p>

                <!-- INTRO CONTENT (EXACT COPY from DOCX - Primary block) -->
                <p class="text-gray-700 text-lg leading-relaxed mb-6">
                    We’re a UK-based technology services provider passionate about helping businesses and individuals use technology to work smarter. From strategy and support to training and innovation, we provide straightforward, simple, reliable and effective solutions that just work for you.
                </p>
                <p class="text-gray-700 text-lg leading-relaxed mb-8">
                    We combine deep technical expertise with real-world business insight to deliver solutions that make a lasting impact. Our experience spans digital transformation, IT consultancy, policy research, programme management, and capacity building – giving us a unique ability to design approaches that are practical today and future-ready for tomorrow. And because technology never stands still, neither do we. We’re always learning, adapting, and innovating – so you stay ahead.
                </p>

                <a href="contact_us.php" class="inline-flex items-center text-brand-teal font-semibold hover:text-brand-teal-dark transition duration-150">
                    Talk to our Strategists
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                </a>
            </div>

            <!-- Right Visual (Placeholder for Professional Image) -->
            <div class="order-2 lg:order-2 flex justify-center">
                <!-- Ready for a professional, full-width image of collaboration or strategy -->
                <img src="assets\images\about_us.webp" alt="Image representing Salzee Solutions team collaboration" class="rounded-xl shadow-2xl w-full max-w-lg transform hover:scale-[1.02] transition duration-500 ease-in-out">
            </div>
        </div>
    </section>

    <!-- 2. Bridging the Gap - Strategic Paragraph (New Section for User's Content) -->
    <section class="bg-white py-16 md:py-24 border-b border-gray-100 animate-on-scroll">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="font-heading text-3xl sm:text-4xl font-bold text-brand-charcoal mb-4">
                Bridging the Gap
            </h2>
            <!-- Exact content copy from user's request -->
            <p class="text-lg text-gray-700 max-w-4xl mx-auto mb-6 leading-relaxed">
                Technology should be an enabler, not a barrier. That’s why we built our company to help individuals and businesses use technology more effectively, seamlessly and without complexity.
            </p>
            <p class="text-lg text-gray-600 max-w-4xl mx-auto leading-relaxed">
                We mix technical know-how with real-world business sense to deliver solutions that make an impact. We bring together experience in IT consultancy, policy research, technical services, and education to deliver solutions that are practical, future-focused, and designed to create real value. And we’re always learning, so you stay ahead.
            </p>
        </div>
    </section>

    <!-- 3. Mission, Vision, and Core Values (Updated with 5 exact values) -->
    <section class="bg-brand-offwhite py-16 md:py-24 animate-on-scroll">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p class="text-brand-teal font-heading text-lg font-semibold uppercase mb-2">Our Guiding Principles</p>
            <h2 class="font-heading text-3xl sm:text-4xl font-bold text-brand-charcoal mb-12">
                Mission, Vision & Values
            </h2>

            <!-- Vision and Mission Block (Larger callout) -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-16">
                <!-- Vision (EXACT COPY from DOCX) -->
                <div class="p-8 rounded-xl text-left border-b-4 border-brand-teal shadow-lg bg-white">
                    <h3 class="font-heading text-2xl font-bold text-brand-teal mb-3 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" /></svg>
                        Our Vision
                    </h3>
                    <p class="text-gray-700 text-lg">
                        To champion a future where every business in Scotland and beyond can harness technology with confidence to grow, innovate, and succeed.
                    </p>
                </div>
                <!-- Mission (EXACT COPY from DOCX) -->
                <div class="p-8 rounded-xl text-left border-b-4 border-brand-charcoal shadow-lg bg-white">
                    <h3 class="font-heading text-2xl font-bold text-brand-charcoal mb-3 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.146a8.995 8.995 0 011.97 2.115c.19.344.19.743 0 1.088a8.995 8.995 0 01-1.97 2.115M10.02 17.51a2.001 2.001 0 00-2.002-2.002h-.5c-.689 0-1.353.308-1.782.855" /></svg>
                        Our Mission
                    </h3>
                    <p class="text-gray-700 text-lg">
                        To make technology simple, reliable, and useful for individuals and businesses of all sizes through expert advice, hands-on services, and practical training enabling sustainable growth and resilience in a digital-first economy.
                    </p>
                </div>
            </div>

            <!-- Core Values (Responsive Grid, using user's 5 exact values) -->
            <div class="max-w-6xl mx-auto">
                <h3 class="font-heading text-2xl font-bold text-brand-charcoal mb-8 mt-12">Our Core Values</h3>
                <div class="grid grid-cols-2 md:grid-cols-5 gap-6 text-center">
                    <?php
                        // Values based EXACTLY on user's request (replacing emojis with professional SVGs)
                        $values = [
                            ['title' => 'People First', 'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-brand-teal" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20h5v-2a3 3 0 00-5.356-1.857M7 20v-2c0-.656-.126-1.283-.356-1.857m0 0a5.002 5.002 0 019.232 0M11 10a2 2 0 100-4 2 2 0 000 4zm-7 8h14M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" /></svg>', 'desc' => 'We build solutions and services around people, not just technology.'],
                            ['title' => 'Clarity', 'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-brand-teal" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>', 'desc' => 'We communicate openly, simply, and without ambiguity.'],
                            ['title' => 'Trust & Consistency', 'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-brand-teal" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" /></svg>', 'desc' => 'We deliver solutions with lasting impact, building confidence through reliability and meaningful innovation.'],
                            ['title' => 'Integrity', 'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-brand-teal" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.146a8.995 8.995 0 011.97 2.115c.19.344.19.743 0 1.088a8.995 8.995 0 01-1.97 2.115M10.02 17.51a2.001 2.001 0 00-2.002-2.002h-.5c-.689 0-1.353.308-1.782.855" /></svg>', 'desc' => 'We act with honesty, transparency, and responsibility.'],
                            ['title' => 'Knowledge Sharing', 'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-brand-teal" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.5v11.5m0-11.5l4 4m-4-4l-4 4m4 4v.01" /></svg>', 'desc' => 'We empower clients by transferring skills and insights.'],
                        ];

                        foreach($values as $value) {
                            echo '<div class="p-6 rounded-xl bg-white shadow-md border-t-2 border-brand-teal transform hover:translate-y-[-4px] transition duration-300">
                                    <div class="flex justify-center mb-3">' . $value['icon'] . '</div>
                                    <h4 class="font-heading text-lg font-bold text-brand-charcoal mb-2">' . $value['title'] . '</h4>
                                    <p class="text-sm text-gray-600">' . $value['desc'] . '</p>
                                </div>';
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Advanced JS Feature: Animated Stats Counter (Adds dynamic sophistication) -->
    <section class="bg-brand-teal py-16 md:py-24 text-white animate-on-scroll">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="font-heading text-3xl sm:text-4xl font-bold mb-10">
                A Decade of Proven Results
            </h2>
            <div id="stats-counter-section" class="grid grid-cols-1 md:grid-cols-3 gap-12">
                
                <!-- Stat 1: Years of Experience -->
                <div class="stat-item">
                    <div class="stat-value font-heading text-5xl md:text-6xl font-extrabold mb-2" data-target="15">0</div>
                    <div class="stat-unit font-heading text-xl font-semibold">Years of Experience</div>
                </div>

                <!-- Stat 2: Projects Completed -->
                <div class="stat-item">
                    <div class="stat-value font-heading text-5xl md:text-6xl font-extrabold mb-2" data-target="500">0</div>
                    <div class="stat-unit font-heading text-xl font-semibold">Projects Completed</div>
                </div>

                <!-- Stat 3: Client Retention Rate -->
                <div class="stat-item">
                    <div class="stat-value font-heading text-5xl md:text-6xl font-extrabold mb-2" data-target="95">0<span class="text-3xl">%</span></div>
                    <div class="stat-unit font-heading text-xl font-semibold">Client Retention Rate</div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Meet the Team Section -->
    <section class="bg-white py-16 md:py-24 border-t border-gray-200 animate-on-scroll">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="font-heading text-3xl sm:text-4xl font-bold text-brand-charcoal mb-4">
                Meet the Leadership Team
            </h2>
            <p class="text-lg text-gray-600 mb-12 max-w-3xl mx-auto">
                Our experience spans digital transformation, IT consultancy, and capacity building. We are the experts who make technology simple.
            </p>

            <!-- Team Grid - Placeholder structure for 3 members -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <?php 
                    $team_members = [
                        ['name' => 'John Doe (Placeholder)', 'title' => 'Chief Executive Officer', 'desc' => 'Leads the firm\'s strategic vision and culture of excellence in technology policy and growth.'],
                        ['name' => 'Jane Smith (Placeholder)', 'title' => 'Head of Technology Strategy', 'desc' => 'Oversees all IT consultancy projects, ensuring client solutions are robust and future-ready.'],
                        ['name' => 'Alex Lee (Placeholder)', 'title' => 'Lead Capacity Builder', 'desc' => 'Manages the bespoke training programs, dedicated to empowering teams with digital skills.'],
                    ];
                    foreach($team_members as $member) {
                        echo '<div class="bg-brand-offwhite p-6 rounded-xl shadow-lg transform hover:shadow-2xl transition duration-300">
                                <img src="https://placehold.co/150x150/0097A7/FFFFFF?text=Photo" alt="' . $member['name'] . '" class="w-24 h-24 rounded-full mx-auto mb-4 border-4 border-brand-teal">
                                <h4 class="font-heading text-xl font-semibold text-brand-charcoal">' . $member['name'] . '</h4>
                                <p class="text-sm text-brand-teal font-medium mb-3">' . $member['title'] . '</p>
                                <p class="text-gray-600 text-sm">' . $member['desc'] . '</p>
                            </div>';
                    }
                ?>
            </div>
        </div>
    </section>

    <!-- 6. Final CTA Section -->
    <section class="bg-brand-charcoal py-16 md:py-24 text-white text-center animate-on-scroll">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="font-heading text-3xl md:text-4xl lg:text-5xl font-extrabold mb-4 leading-tight">Ready to Reach Out to Us?</h2>
            <p class="text-lg md:text-xl font-light mb-10 max-w-4xl mx-auto">
                Discover how our strategic approach can transform your challenges into growth opportunities. Let's discuss your next project.
            </p>

            <div class="flex justify-center">
                <a href="contact_us.php" class="flex items-center justify-center px-8 py-4 bg-white text-brand-charcoal font-bold rounded-xl hover:bg-gray-100 transition duration-150 shadow-xl transform hover:scale-[1.02] font-heading">
                    Schedule a Consultation
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                    </svg>
                </a>
            </div>
        </div>
    </section>
</main>

<script>
    // ADVANCED IT WEBSITE STANDARD: JavaScript for Scroll-Triggered Fade-In Animations (Intersection Observer)
    document.addEventListener('DOMContentLoaded', () => {
        
        // 1. SCROLL FADE-IN ANIMATION (for all elements with the class)
        const animatedElements = document.querySelectorAll('.animate-on-scroll');
        const observerOptions = { root: null, rootMargin: '0px', threshold: 0.1 };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('fade-in');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        animatedElements.forEach(element => {
            element.style.opacity = '0';
            element.style.transform = 'translateY(20px)';
            element.style.transition = 'opacity 0.6s ease-out, transform 0.6s ease-out';
            element.classList.remove('animate-on-scroll');
            observer.observe(element);
        });

        // Add the necessary CSS for the fade-in effect
        const style = document.createElement('style');
        style.textContent = `.fade-in { opacity: 1 !important; transform: translateY(0) !important; }`;
        document.head.appendChild(style);

        // 2. STATS COUNTER ANIMATION (Advanced JS for dynamic feel)

        const statsSection = document.getElementById('stats-counter-section');
        const counters = statsSection ? statsSection.querySelectorAll('.stat-value') : [];
        let countersInitialized = false;

        const countUp = (el, start, end, duration) => {
            let startTime = null;
            const step = (timestamp) => {
                if (!startTime) startTime = timestamp;
                const progress = timestamp - startTime;
                const percentage = Math.min(progress / duration, 1);
                const currentValue = Math.floor(percentage * (end - start) + start);
                
                // Special handling for the percentage sign on the last stat
                el.innerHTML = currentValue + (el.dataset.target === '95' ? '<span class="text-3xl">%</span>' : '');

                if (percentage < 1) {
                    window.requestAnimationFrame(step);
                }
            };
            window.requestAnimationFrame(step);
        };

        const initCounters = (entries, observer) => {
            entries.forEach(entry => {
                // Check if the section is visible AND the counters haven't run yet
                if (entry.isIntersecting && !countersInitialized) {
                    counters.forEach(counter => {
                        const target = parseInt(counter.dataset.target, 10);
                        countUp(counter, 0, target, 2000); // 2000ms = 2 seconds
                    });
                    countersInitialized = true;
                    observer.unobserve(entry.target); // Stop observing once animated
                }
            });
        };

        // Create a new observer specifically for the stats section
        if (statsSection) {
            const statsObserver = new IntersectionObserver(initCounters, {
                root: null,
                rootMargin: '0px',
                threshold: 0.5 // Trigger when 50% of the stat section is visible
            });
            statsObserver.observe(statsSection);
        }
    });
</script>

<?php
    // Include the standard footer
    include 'includes/footer.php';
?>
