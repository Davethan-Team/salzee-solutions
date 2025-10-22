<?php
    // Define the page title
    $page_title = 'Privacy Policy';
    $current_page = 'privacy_policy';

    // Include the standard header for HTML structure, metadata, and main navigation
    include 'includes/header.php';

    
?>

<!-- Add Google Fonts for Brand Guide Compliance: Montserrat (Headings) and Open Sans (Body) -->
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>

<style>
    /* Brand Guide Colors & Typography Implementation */
    :root {
        --brand-teal: #0097A7;       /* Primary Brand Blue-Green (Trust, Innovation) */
        --brand-charcoal: #333333;  /* Heading/Dark Text (Professionalism, Authority) */
        --brand-background: #F9F9F9; /* Clean, modern background */
        --brand-aqua-accent: #4DD0E1; /* Bright Aqua (Energy, Digital Feel) - Secondary Palette */
        --text-color: #4a5568;       /* Slightly softer body text for readability */
        --sidebar-bg: #F0FBFB; /* Light background for the sidebar */
        /* Define a consistent offset for smooth scrolling */
        --scroll-offset: 4rem; 
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
    .policy-content p, .policy-content li {
        color: var(--text-color);
        line-height: 1.75;
        margin-bottom: 1rem;
        font-size: 1.05rem; /* Slightly larger body text for reading */
    }
    .policy-content ul {
        list-style: disc;
        padding-left: 1.5rem;
    }
    
    /* === FIX: Scroll Offset for Anchor Links === */
    .policy-content h3 {
        /* This is the key fix: It creates extra space at the top of the element's scroll target */
        scroll-margin-top: var(--scroll-offset);
        
        /* Existing visual styles */
        margin-top: 3rem; 
        margin-bottom: 0.75rem;
        padding-top: 0.5rem;
        border-bottom: 2px solid var(--brand-teal); 
        padding-bottom: 0.25rem;
    }
    .policy-content h4 {
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

    /* Adjust the sticky position of the sidebar to account for the header and ensure it doesn't cover content */
    #policy-sidebar nav {
        top: var(--scroll-offset); /* Matches the offset used on H3 tags */
    }
</style>

<main class="bg-brand-background min-h-screen">
    <!-- 1. Hero Header: Privacy Policy Title with Background Image -->
    <section class="py-16 md:py-24 bg-brand-charcoal
    bg-[url('assets/images/pp.webp')] 
    bg-cover bg-center 
    relative overflow-hidden">
    
    <!-- Optional: Add a subtle overlay to make the text pop even more -->
    <div class="absolute inset-0 bg-black opacity-60"></div>

    <div class="max-w-7xl mx-auto container-padding text-center relative z-10">

        <!-- Headline text color changed to white -->
        <h1 class="font-heading text-4xl md:text-5xl lg:text-6xl font-extrabold text-white leading-tight mb-4 max-w-4xl mx-auto">
            Privacy Policy
        </h1>
        
        <!-- Subheading text color changed to light gray -->
        <p class="text-xl text-gray-200 max-w-3xl mx-auto font-body mb-6">
            Your Trust is Our Priority
        </p>

    </div>
    </section>

    <!-- 2. Policy Content Section (Updated for 2-Column Desktop Layout) -->
    <section class="py-16 md:py-24">
        <!-- Max-w-7xl for a wider layout on desktop -->
        <div class="max-w-7xl mx-auto container-padding">
            
            <!-- Two Column Layout for Desktop (lg:), Single Column for Mobile -->
            <div class="lg:grid lg:grid-cols-12 lg:gap-16">
                
                <!-- 2a. Desktop/Sidebar Navigation (Hidden on mobile) -->
                <aside id="policy-sidebar" class="hidden lg:block lg:col-span-3">
                    <!-- Sticky positioning now uses the scroll-offset CSS variable -->
                    <nav class="sticky pt-8 pr-4"> 
                        <p class="font-heading text-lg font-bold text-brand-charcoal mb-4 border-b pb-2">
                            On this page
                        </p>
                        
                        <!-- Policy Links (data-target is used by the JavaScript) -->
                        <a href="#section-1" class="sidebar-link" data-target="1">1. Introduction</a>
                        <a href="#section-2" class="sidebar-link" data-target="2">2. Information We Collect</a>
                        <a href="#section-3" class="sidebar-link" data-target="3">3. How We Use Your Data</a>
                        <a href="#section-4" class="sidebar-link" data-target="4">4. Legal Bases for Processing</a>
                        <a href="#section-5" class="sidebar-link" data-target="5">5. Data Retention</a>
                        <a href="#section-6" class="sidebar-link" data-target="6">6. Transfer of Data</a>
                        <a href="#section-7" class="sidebar-link" data-target="7">7. Disclosure of Data</a>
                        <a href="#section-8" class="sidebar-link" data-target="8">8. Security of Data</a>
                        <a href="#section-9" class="sidebar-link" data-target="9">9. Service Providers and Third Parties</a>
                        <a href="#section-10" class="sidebar-link" data-target="10">10. Your Data Protection Rights</a>
                        <a href="#section-11" class="sidebar-link" data-target="11">11. Links to Other Websites</a>
                        <a href="#section-12" class="sidebar-link" data-target="12">12. Children’s Privacy</a>
                        <a href="#section-13" class="sidebar-link" data-target="13">13. Changes to This Policy</a>
                        <a href="#section-14" class="sidebar-link" data-target="14">14. Contact Us</a>
                    </nav>
                </aside>
                
                <!-- 2b. Policy Content (Main Column - full width on mobile, 9 columns on desktop) -->
                <div class="lg:col-span-9">
                    <!-- Max-w-none on large screen to use full 9 columns, max-w-4xl for mobile readability -->
                    <div class="max-w-4xl lg:max-w-none mx-auto lg:mx-0 policy-content bg-white p-6 md:p-10 lg:p-12 rounded-xl shadow-lg">
                        
                        <p class="text-lg text-gray-600 font-bold mb-8">
                            Effective Date: October 15, 2025.
                        </p>

                        <!-- 1. Introduction -->
                        <h3 id="section-1" class="font-heading text-2xl font-bold text-brand-charcoal">
                            1. Introduction
                        </h3>
                        <p class="font-body">
                            Salzee Solutions Ltd (“we”, “us”, or “our”) operates the website <a href="https://salzeeglobal.com" class="text-brand-teal hover:underline">https://salzeeglobal.com</a> (the “Service”). This Privacy Policy explains how we collect, use, disclose, and protect your personal information when you use our Service, and what rights you have under data-protection law. We are committed to protecting your privacy in accordance with the UK General Data Protection Regulation (UK GDPR), the EU GDPR, and the Data Protection Act 2018.
                        </p>

                        <!-- 2. Information We Collect -->
                        <h3 id="section-2" class="font-heading text-2xl font-bold text-brand-charcoal">
                            2. Information We Collect
                        </h3>
                        <p class="font-body">
                            We may collect and process the following types of personal data:
                        </p>
                        
                        <!-- 2a. Personal Data -->
                        <h4 class="text-xl">a. Personal Data</h4>
                        <p class="font-body">
                            Information that can identify you directly or indirectly, such as:
                        </p>
                        <ul class="list-disc ml-6">
                            <li>First and last name</li>
                            <li>Email address</li>
                            <li>Phone number</li>
                            <li>Postal address, city, state/province, ZIP/postal code</li>
                            <li>Company name or job title (if applicable)</li>
                        </ul>

                        <!-- 2b. Usage Data -->
                        <h4 class="text-xl">b. Usage Data</h4>
                        <p class="font-body">
                            Information automatically collected when you access the Service, including:
                        </p>
                        <ul class="list-disc ml-6">
                            <li>IP address</li>
                            <li>Browser type and version</li>
                            <li>Device identifiers</li>
                            <li>Pages visited, date/time of visits, time spent on pages</li>
                            <li>Referring website or search query</li>
                        </ul>

                        <!-- 2c. Cookies and Tracking Data -->
                        <h4 class="text-xl">c. Cookies and Tracking Data</h4>
                        <p class="font-body">
                            We use cookies and similar tracking technologies (beacons, tags, scripts) to improve and analyse our Service. You can manage cookie preferences through our cookie consent banner or your browser settings. Some cookies are essential for website functionality.
                        </p>
                        <p class="font-body font-semibold mt-4">Examples of Cookies we use:</p>
                        <ul class="list-disc ml-6">
                            <li>Session Cookies – to operate our Service</li>
                            <li>Preference Cookies – to remember your settings</li>
                            <li>Security Cookies – for protection against misuse</li>
                        </ul>


                        <!-- 3. How We Use Your Data -->
                        <h3 id="section-3" class="font-heading text-2xl font-bold text-brand-charcoal">
                            3. How We Use Your Data
                        </h3>
                        <p class="font-body">
                            We process your personal data for the following purposes:
                        </p>
                        <ul class="list-disc ml-6">
                            <li>To provide and maintain our Service</li>
                            <li>To notify you about changes to our Service</li>
                            <li>To allow participation in interactive features</li>
                            <li>To provide customer support</li>
                            <li>To monitor and improve Service performance</li>
                            <li>To detect, prevent, and resolve technical or security issues</li>
                            <li>To comply with legal obligations</li>
                        </ul>

                        <!-- 4. Legal Bases for Processing -->
                        <h3 id="section-4" class="font-heading text-2xl font-bold text-brand-charcoal">
                            4. Legal Bases for Processing
                        </h3>
                        <p class="font-body">
                            We process your personal data under one or more of the following lawful bases:
                        </p>
                        <ul class="list-disc ml-6">
                            <li>Consent – where you have given clear consent for us to process your data (e.g. newsletter sign-ups).</li>
                            <li>Contract – where processing is necessary for a contract with you or to take steps before entering into a contract.</li>
                            <li>Legal Obligation – where processing is required to comply with law.</li>
                            <li>Legitimate Interests – where processing is necessary for our legitimate business interests (e.g. improving the Service) and does not override your rights.</li>
                        </ul>

                        <!-- 5. Data Retention -->
                        <h3 id="section-5" class="font-heading text-2xl font-bold text-brand-charcoal">
                            5. Data Retention
                        </h3>
                        <p class="font-body">
                            We retain personal data only as long as necessary for the purposes described in this policy. When data is no longer needed, it will be securely deleted or anonymised. We may retain limited data as required for legal or accounting purposes.
                        </p>

                        <!-- 6. Transfer of Data -->
                        <h3 id="section-6" class="font-heading text-2xl font-bold text-brand-charcoal">
                            6. Transfer of Data
                        </h3>
                        <p class="font-body">
                            Your information may be transferred to and maintained on computers outside your country or region. If you provide data from outside the United Kingdom, please note that it will be processed in the UK. We ensure that any international transfers comply with applicable data-protection laws and that adequate safeguards (such as Standard Contractual Clauses) are in place.
                        </p>

                        <!-- 7. Disclosure of Data -->
                        <h3 id="section-7" class="font-heading text-2xl font-bold text-brand-charcoal">
                            7. Disclosure of Data
                        </h3>
                        <p class="font-body">
                            We may disclose your personal data in good faith where necessary to:
                        </p>
                        <ul class="list-disc ml-6">
                            <li>Comply with a legal obligation</li>
                            <li>Protect or defend our rights or property</li>
                            <li>Prevent or investigate possible wrongdoing</li>
                            <li>Protect the safety of users or the public</li>
                            <li>Defend against legal liability</li>
                        </ul>

                        <!-- 8. Security of Data -->
                        <h3 id="section-8" class="font-heading text-2xl font-bold text-brand-charcoal">
                            8. Security of Data
                        </h3>
                        <p class="font-body">
                            We use commercially reasonable measures (encryption, secure servers, access controls) to protect your data. However, no Internet transmission or electronic storage method is 100% secure; you share information with us at your own risk.
                        </p>

                        <!-- 9. Service Providers and Third Parties -->
                        <h3 id="section-9" class="font-heading text-2xl font-bold text-brand-charcoal">
                            9. Service Providers and Third Parties
                        </h3>
                        <p class="font-body">
                            We may engage third-party companies to facilitate our Service (“Service Providers”), for example:
                        </p>
                        <ul class="list-disc ml-6">
                            <li>Website hosting and IT support</li>
                            <li>Analytics (e.g. Google Analytics – see Google Privacy Policy)</li>
                            <li>Email communications</li>
                        </ul>
                        <p class="font-body">
                            These providers have access to personal data only as needed to perform their functions and must not use it for other purposes.
                        </p>

                        <!-- 10. Your Data Protection Rights -->
                        <h3 id="section-10" class="font-heading text-2xl font-bold text-brand-charcoal">
                            10. Your Data Protection Rights
                        </h3>
                        <p class="font-body">
                            Under data-protection law, you have the following rights:
                        </p>
                        <ul class="list-disc ml-6">
                            <li>Access – to request a copy of your personal data.</li>
                            <li>Rectification – to correct inaccurate or incomplete data.</li>
                            <li>Erasure – to request deletion of your data (“right to be forgotten”).</li>
                            <li>Restriction – to request we limit how we process your data.</li>
                            <li>Data Portability – to request transfer of your data to another organisation.</li>
                            <li>Objection – to object to processing based on legitimate interests or direct marketing.</li>
                        </ul>
                        <p class="font-body">
                            To exercise any of these rights, contact us at <a href="mailto:info@salzeeglobal.com" class="text-brand-teal hover:underline font-semibold">info@salzeeglobal.com</a>. We may need to verify your identity before responding. If you are not satisfied with our response, you have the right to lodge a complaint with the Information Commissioner’s Office (ICO): <a href="https://www.ico.org.uk" target="_blank" class="text-brand-teal hover:underline">https://www.ico.org.uk</a> or Telephone: +44 (0)303 123 1113.
                        </p>

                        <!-- 11. Links to Other Websites -->
                        <h3 id="section-11" class="font-heading text-2xl font-bold text-brand-charcoal">
                            11. Links to Other Websites
                        </h3>
                        <p class="font-body">
                            Our Service may contain links to third-party websites. We are not responsible for the content or privacy practices of those sites. Please review their privacy policies before providing any personal data.
                        </p>

                        <!-- 12. Children’s Privacy -->
                        <h3 id="section-12" class="font-heading text-2xl font-bold text-brand-charcoal">
                            12. Children’s Privacy
                        </h3>
                        <p class="font-body">
                            Our Service is not directed to individuals under 18. We do not knowingly collect personal information from minors. If you believe a child has provided data to us, please contact us so we can delete it promptly.
                        </p>

                        <!-- 13. Changes to This Policy -->
                        <h3 id="section-13" class="font-heading text-2xl font-bold text-brand-charcoal">
                            13. Changes to This Policy
                        </h3>
                        <p class="font-body">
                            We may update this Privacy Policy periodically. The latest version will always be available on this page, with an updated “Effective Date.” If the changes are significant, we may notify you by email or a prominent notice on the website.
                        </p>

                        <!-- 14. Contact Us -->
                        <h3 id="section-14" class="font-heading text-2xl font-bold text-brand-charcoal">
                            14. Contact Us
                        </h3>
                        <p class="font-body">
                            If you have questions or concerns about this Privacy Policy or our data practices, please contact us via our email: <a href="mailto:info@salzeeglobal.com" class="text-brand-teal hover:underline font-semibold">info@salzeeglobal.com</a> or telephone: +44 (0)141 270 852.
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
        const sections = document.querySelectorAll('.policy-content h3[id^="section-"]');
        const sidebarLinks = document.querySelectorAll('.sidebar-link');
        let observerEnabled = true; // New flag to control the observer

        // 2. Configuration for the IntersectionObserver
        const observerOptions = {
            root: null, 
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
            if (!observerEnabled) return; // Ignore events if observer is disabled
            
            entries.forEach(entry => {
                const id = entry.target.getAttribute('id');
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
        
        // --- NEW FUNCTION: Temporarily disable observer during smooth scroll ---
        const disableObserverTemporarily = () => {
            observerEnabled = false;
            // Re-enable the observer after a short delay (e.g., 800ms) to allow the scroll to complete
            // and the physics/settling to finish before listening again.
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

                    // 3. Scroll to the target
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
