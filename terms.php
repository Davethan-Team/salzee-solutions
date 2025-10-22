<?php
    // Define the page title
    $page_title = 'Terms and Conditions';
    $current_page = 'terms'; // Changed page identifier

    // Include the standard header for HTML structure, metadata, and main navigation
    include 'includes/header.php';

    
?>

<!-- Add Google Fonts for Brand Guide Compliance: Montserrat (Headings) and Open Sans (Body) -->
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>

<style>
    /* Brand Guide Colors & Typography Implementation (Same as Privacy Policy) */
    :root {
        --brand-teal: #0097A7;       /* Primary Brand Blue-Green (Trust, Innovation) */
        --brand-charcoal: #333333;  /* Heading/Dark Text (Professionalism, Authority) */
        --brand-background: #F9F9F9; /* Clean, modern background */
        --brand-aqua-accent: #4DD0E1; /* Bright Aqua (Energy, Digital Feel) - Secondary Palette */
        --text-color: #4a5568;       /* Slightly softer body text for readability */
        --sidebar-bg: #F0FBFB;       /* Light background for the sidebar */
        --scroll-offset: 4rem;       /* Define a consistent offset for smooth scrolling */
    }

    /* Utility Classes to apply colors */
    .font-heading { font-family: 'Montserrat', sans-serif; }
    .font-body { font-family: 'Open Sans', sans-serif; }
    .text-brand-teal { color: var(--brand-teal); }
    .text-brand-charcoal { color: var(--brand-charcoal); }

    /* Global Container Padding Utility */
    .container-padding {
        padding-left: 1rem;
        padding-right: 1rem;
    }
    @media (min-width: 640px) {
        .container-padding { padding-left: 1.5rem; padding-right: 1.5rem; }
    }
    @media (min-width: 1024px) {
        .container-padding { padding-left: 2rem; padding-right: 2rem; }
    }
    
    /* Policy Specific Styling for readability */
    .terms-content p, .terms-content li {
        color: var(--text-color);
        line-height: 1.75;
        margin-bottom: 1rem;
        font-size: 1.05rem; /* Slightly larger body text for reading */
    }
    .terms-content ul {
        list-style: disc;
        padding-left: 1.5rem;
    }

    /* === FIX: Scroll Offset for Anchor Links === */
    .terms-content h3 {
        /* This is the key fix: It creates extra space at the top of the element's scroll target */
        scroll-margin-top: var(--scroll-offset);
        
        /* Existing visual styles */
        margin-top: 3rem; 
        margin-bottom: 0.75rem;
        padding-top: 0.5rem;
        border-bottom: 2px solid var(--brand-teal); 
        padding-bottom: 0.25rem;
    }
    .terms-content h4 {
        margin-top: 1rem;
        margin-bottom: 0.5rem;
        font-weight: 700;
        color: var(--brand-charcoal);
    }
    
    /* --- New Sidebar Styles for Desktop Layout --- */
    .sidebar-link {
        transition: all 0.2s ease-in-out;
        padding: 0.5rem 0.75rem;
        border-radius: 0.5rem;
        cursor: pointer;
        display: block;
        margin-bottom: 0.25rem;
        font-size: 0.95rem;
        font-weight: 500;
        color: var(--text-color);
        border-left: 3px solid transparent;
        line-height: 1.25;
    }
    .sidebar-link:hover {
        background-color: var(--sidebar-bg);
        color: var(--brand-teal);
    }
    .sidebar-link.active {
        /* Active style uses brand accent color for a professional highlight */
        background-color: var(--brand-teal); 
        color: white; 
        font-weight: 600;
        border-left: 3px solid var(--brand-teal);
    }

    /* Adjust the sticky position of the sidebar to account for the header */
    #policy-sidebar nav {
        top: var(--scroll-offset); /* Matches the offset used on H3 tags */
    }

</style>

<main class="bg-brand-background min-h-screen">
    <!-- 1. Hero Header: Terms and Conditions Title with Background Image -->
    <section class="py-16 md:py-24 bg-brand-charcoal
    bg-[url('assets/images/t_c.webp')] 
    bg-cover bg-center 
    relative overflow-hidden">
    
    <!-- Optional: Add a subtle overlay to make the text pop even more -->
    <div class="absolute inset-0 bg-black opacity-60"></div>

    <div class="max-w-7xl mx-auto container-padding text-center relative z-10">

        <!-- Headline text color changed to white -->
        <h1 class="font-heading text-4xl md:text-5xl lg:text-6xl font-extrabold text-white leading-tight mb-4 max-w-4xl mx-auto">
            Terms and Conditions
        </h1>
        
        <!-- Subheading text color changed to light gray -->
        <p class="text-xl text-gray-200 max-w-3xl mx-auto font-body mb-6">
            Governing the use of our website and services.
        </p>

    </div>
    </section>

    <!-- 2. Terms Content Section (Updated for 2-Column Desktop Layout) -->
    <section class="py-16 md:py-24">
        <!-- Max-w-7xl for a wider layout on desktop -->
        <div class="max-w-7xl mx-auto container-padding">
            
            <!-- Two Column Layout for Desktop (lg:), Single Column for Mobile -->
            <div class="lg:grid lg:grid-cols-12 lg:gap-16">
                
                <!-- 2a. Desktop/Sidebar Navigation (Hidden on mobile) -->
                <aside id="policy-sidebar" class="hidden lg:block lg:col-span-3">
                    <nav class="sticky pt-8 pr-4"> 
                        <p class="font-heading text-lg font-bold text-brand-charcoal mb-4 border-b pb-2">
                            On this page
                        </p>
                        
                        <!-- Policy Links (data-target is used by the JavaScript) -->
                        <a href="#section-1" class="sidebar-link" data-target="1">1. Introduction</a>
                        <a href="#section-2" class="sidebar-link" data-target="2">2. About Us</a>
                        <a href="#section-3" class="sidebar-link" data-target="3">3. Use of the Website</a>
                        <a href="#section-4" class="sidebar-link" data-target="4">4. Information Submitted via Forms</a>
                        <a href="#section-5" class="sidebar-link" data-target="5">5. Intellectual Property Rights</a>
                        <a href="#section-6" class="sidebar-link" data-target="6">6. Disclaimer of Warranties</a>
                        <a href="#section-7" class="sidebar-link" data-target="7">7. Limitation of Liability</a>
                        <a href="#section-8" class="sidebar-link" data-target="8">8. Links to Third-Party Websites</a>
                        <a href="#section-9" class="sidebar-link" data-target="9">9. Privacy</a>
                        <a href="#section-10" class="sidebar-link" data-target="10">10. Changes to the Terms</a>
                        <a href="#section-11" class="sidebar-link" data-target="11">11. Governing Law and Jurisdiction</a>
                        <a href="#section-12" class="sidebar-link" data-target="12">12. Contact Us</a>
                    </nav>
                </aside>
                
                <!-- 2b. Terms Content (Main Column - full width on mobile, 9 columns on desktop) -->
                <div class="lg:col-span-9">
                    <div class="max-w-4xl lg:max-w-none mx-auto lg:mx-0 terms-content bg-white p-6 md:p-10 lg:p-12 rounded-xl shadow-lg">
                        
                        <p class="text-lg text-gray-600 font-bold mb-8">
                            Effective Date: October 15, 2025.
                        </p>

                        <!-- 1. Introduction -->
                        <h3 id="section-1" class="font-heading text-2xl font-bold text-brand-charcoal">
                            1. Introduction
                        </h3>
                        <p class="font-body">
                            Welcome to the website of Salzee Solutions Ltd (“Salzee”, “we”, “us”, or “our”). These Terms and Conditions (“Terms”) govern your use of our website <a href="https://salzeeglobal.com" class="text-brand-teal hover:underline">https://salzeeglobal.com</a> (the “Site”). By accessing or using this Site, you agree to comply with these Terms. If you do not agree, please do not use the Site.
                        </p>

                        <!-- 2. About Us -->
                        <h3 id="section-2" class="font-heading text-2xl font-bold text-brand-charcoal">
                            2. About Us
                        </h3>
                        <p class="font-body">
                            Salzee Solutions Ltd is engaged in IT consultancy, IT services, professional and technical services, and capacity building. We are located in Glasgow, Scotland, and our company registration number is SC862216. You can contact us at <a href="mailto:info@salzeeglobal.com" class="text-brand-teal hover:underline font-semibold">info@salzeeglobal.com</a> or by phone at +44 (0)141 270 852.
                        </p>
                        

                        <!-- 3. Use of the Website -->
                        <h3 id="section-3" class="font-heading text-2xl font-bold text-brand-charcoal">
                            3. Use of the Website
                        </h3>
                        <p class="font-body">
                            You agree to use this Site only for lawful purposes and in a way that does not infringe the rights of, restrict, or inhibit anyone else’s use and enjoyment of the Site. You must not use the Site to transmit or upload any harmful, offensive, or illegal material. We reserve the right to suspend or terminate access to the Site at our discretion, without notice, if we believe you have violated these Terms or any applicable law.
                        </p>
                        
                        <!-- 4. Information Submitted via Forms -->
                        <h3 id="section-4" class="font-heading text-2xl font-bold text-brand-charcoal">
                            4. Information Submitted via Forms
                        </h3>
                        <p class="font-body">
                            When you submit information through forms on our Site (e.g. contact forms, service enquiries), you agree that:
                        </p>
                        <ul class="list-disc ml-6">
                            <li>The information you provide is accurate and complete.</li>
                            <li>We may use the information in accordance with our Privacy Policy.</li>
                            <li>Submitting a form does not guarantee a response or the commencement of a contract.</li>
                        </ul>
                        <p class="font-body">
                            Please refer to our Privacy Policy for details on how we handle your personal data.
                        </p>

                        <!-- 5. Intellectual Property Rights -->
                        <h3 id="section-5" class="font-heading text-2xl font-bold text-brand-charcoal">
                            5. Intellectual Property Rights
                        </h3>
                        <p class="font-body">
                            All content on this Site, including text, graphics, logos, images, and software, is the property of Salzee Solutions Ltd or its content suppliers and is protected by international copyright and intellectual property laws. You may not reproduce, modify, distribute, or otherwise use any content without our prior written permission.
                        </p>

                        <!-- 6. Disclaimer of Warranties -->
                        <h3 id="section-6" class="font-heading text-2xl font-bold text-brand-charcoal">
                            6. Disclaimer of Warranties
                        </h3>
                        <p class="font-body">
                            The Site and its content are provided on an "as-is" and "as available" basis. We make no warranties, express or implied, regarding the Site's operation, content, or availability, including, but not limited to, implied warranties of merchantability and fitness for a particular purpose. We do not warrant that the Site will be uninterrupted, error-free, or free from viruses or other harmful components.
                        </p>

                        <!-- 7. Limitation of Liability -->
                        <h3 id="section-7" class="font-heading text-2xl font-bold text-brand-charcoal">
                            7. Limitation of Liability
                        </h3>
                        <p class="font-body">
                            To the fullest extent permitted by law, Salzee Solutions Ltd shall not be liable for any direct, indirect, incidental, consequential, or special loss or damage arising out of or in connection with:
                        </p>
                        <ul class="list-disc ml-6">
                            <li>Your access to or use of the Site;</li>
                            <li>Any reliance on information contained on the Site; or</li>
                            <li>Any loss of data, income, goodwill, or business opportunity.</li>
                        </ul>
                        <p class="font-body">
                            Nothing in these Terms excludes or limits liability for death or personal injury caused by negligence, fraud, or any other liability that cannot be excluded by law.
                        </p>

                        <!-- 8. Links to Third-Party Websites -->
                        <h3 id="section-8" class="font-heading text-2xl font-bold text-brand-charcoal">
                            8. Links to Third-Party Websites
                        </h3>
                        <p class="font-body">
                            Our Site may contain links to other websites operated by third parties. We are not responsible for the content, privacy policies, or practices of third-party sites. Visiting those sites is at your own risk.
                        </p>

                        <!-- 9. Privacy -->
                        <h3 id="section-9" class="font-heading text-2xl font-bold text-brand-charcoal">
                            9. Privacy
                        </h3>
                        <p class="font-body">
                            Your use of this Site is also governed by our Privacy Policy. By using the Site, you acknowledge and agree to the terms of that policy.
                        </p>

                        <!-- 10. Changes to the Terms -->
                        <h3 id="section-10" class="font-heading text-2xl font-bold text-brand-charcoal">
                            10. Changes to the Terms
                        </h3>
                        <p class="font-body">
                            We may update these Terms from time to time without prior notice. The updated version will be posted on this page with a new “Effective Date.” Your continued use of the Site after changes are made constitutes your acceptance of the updated Terms.
                        </p>

                        <!-- 11. Governing Law and Jurisdiction -->
                        <h3 id="section-11" class="font-heading text-2xl font-bold text-brand-charcoal">
                            11. Governing Law and Jurisdiction
                        </h3>
                        <p class="font-body">
                            These Terms are governed by and construed in accordance with the laws of England and Wales. Any disputes arising under or in connection with these Terms shall be subject to the exclusive jurisdiction of the courts of England and Wales.
                        </p>

                        <!-- 12. Contact Us -->
                        <h3 id="section-12" class="font-heading text-2xl font-bold text-brand-charcoal">
                            12. Contact Us
                        </h3>
                        <p class="font-body">
                            If you have any questions about these Terms, please contact us via <a href="mailto:info@salzeeglobal.com" class="text-brand-teal hover:underline font-semibold">info@salzeeglobal.com</a> or +44 (0)141 270 852.
                        </p>

                    </div>
                </div>
                
            </div>
        </div>
    </section>

</main>

<script>
    // Advanced JavaScript using IntersectionObserver for scroll-spy functionality
    document.addEventListener('DOMContentLoaded', () => {
        const sections = document.querySelectorAll('.terms-content h3[id^="section-"]');
        const sidebarLinks = document.querySelectorAll('.sidebar-link');
        // Flag to control the observer behavior during smooth scrolling
        let observerEnabled = true; 

        // 2. Configuration for the IntersectionObserver
        const observerOptions = {
            root: null, 
            // Target margin is set high (60% from bottom) to activate the link 
            // once the section heading passes the top 40% of the viewport.
            rootMargin: '0px 0px -60% 0px', 
            threshold: 0.0 
        };

        // 3. Helper function to update the active class on the sidebar links
        const updateActiveLink = (id) => {
            sidebarLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${id}`) {
                    link.classList.add('active');
                }
            });
        };

        // 4. Callback function when an intersection occurs
        const observerCallback = (entries) => {
            // CRITICAL FIX: Ignore events if observer is temporarily disabled (during click scroll)
            if (!observerEnabled) return; 
            
            entries.forEach(entry => {
                const id = entry.target.getAttribute('id');
                // Only mark as active if it's currently intersecting the target area
                if (entry.isIntersecting) {
                    updateActiveLink(id);
                } 
            });
        };
        
        // 5. Initialize the IntersectionObserver
        const observer = new IntersectionObserver(observerCallback, observerOptions);

        // 6. Attach the observer to all policy sections
        sections.forEach(section => {
            observer.observe(section);
        });
        
        // --- FIX: Temporarily disable observer during smooth scroll to prevent jumpiness ---
        const disableObserverTemporarily = () => {
            observerEnabled = false;
            // Re-enable the observer after 800ms, which is longer than the smooth scroll animation
            setTimeout(() => {
                observerEnabled = true;
            }, 800); 
        };

        // 7. Add smooth scrolling functionality to sidebar links
        sidebarLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href').substring(1);
                const targetElement = document.getElementById(targetId);
                
                if (targetElement) {
                    // 1. Temporarily disable the observer immediately on click
                    disableObserverTemporarily(); 
                    
                    // 2. Manually set the active class immediately for smooth visual feedback
                    updateActiveLink(targetId); 

                    // 3. Scroll to the target. CSS scroll-margin-top handles the offset.
                    targetElement.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // 8. Initial check: set the first section as active on load
        if (sections.length > 0) {
             updateActiveLink(sections[0].id);
        }
    });
</script>

<?php
    // Include the standard footer to close the page body and add copyright
    include 'includes/footer.php';
?>
