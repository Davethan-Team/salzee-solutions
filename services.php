<?php
// Define the page title (in case header.php uses this variable)
$page_title = 'Expert Services for Strategic Growth';
// Include the standard header for HTML structure, metadata, and main navigation
include 'includes/header.php';

// Define the data structure for all service cards and modal content
// The full description now contains the complete narrative for the modal,
// including the paragraph detailing the value proposition and the CTA sentence.
$service_pillars = [
    [
        'id' => 'it_consultancy',
        'title' => 'IT Consultancy',
        'icon' => '<i class="fas fa-laptop-code text-brand-teal icon-uniform"></i>',
        'summary' => 'Strategic guidance to align technology with your business goals. We act as a trusted partner for individuals and businesses seeking to use technology effectively.',
        'modal_content' => [
            'headline' => 'Strategic Guidance & Alignment',
            // FULL MERGED CONTENT for IT Consultancy, as per the source document structure
            'full_description' => 'Navigating the complexities of technology can be challenging for businesses across Scotland and beyond. Salzee Solutions Ltd provides tailored IT solutions and expert guidance to help organisations leverage technology for growth, innovation, and efficiency. Our IT consultancy services offer expertise, cost-effective solutions, and the freedom to focus on your core business objectives. We act as a trusted partner for individuals and businesses seeking to use technology effectively and achieve their strategic goals. Connect with us today to discuss your consultancy needs and explore how technology can take your business to new heights! ',
            'details' => [
                'Strategic IT Planning – We align technology with your business goals and plan for sustainable growth.',
                'Digital Transformation – We’ll recommend and implement modern systems and processes that drive innovation and efficiency.',
                'Risk Management – We will work with you to identify, assess, and mitigate technological risks to protect your business.',
                'Policy Research – We’ll ensure you stay compliant and informed with relevant technological policies and best practices.',
            ]
        ],
    ],
    [
        'id' => 'it_services',
        'title' => 'IT Services',
        'icon' => '<i class="fas fa-cogs text-brand-teal icon-uniform"></i>',
        'summary' => 'Reliable ongoing support and comprehensive solutions to keep your systems running smoothly. Ideal for Small and Medium Enterprises.',
        'modal_content' => [
            'headline' => 'Seamless Support. Sustainable Growth.',
            'full_description' => 'At Salzee Solutions Ltd, we focus on building strong, long-term relationships with our clients. By taking the time to understand your business, your people, and your technology challenges, we’re able to provide guidance that fits your needs today and positions you for the future. We offer a comprehensive range of outsourced IT services, with particular expertise in supporting Small and Medium Enterprises. Our goal is to help you leverage technology to improve efficiency, enhance customer service, boost productivity, and increase profitability. We understand that many small businesses lack the in-house expertise to solve even basic IT issues. By analysing your specific requirements and providing clear direction, we empower you to take control of your technology — reducing reliance on external support and giving your team the confidence to succeed.',
            'details' => [
                'Data management – Organise, protect, and make the most of your business data.',
                'IT procurement – Source the right technology solutions at the best value.',
                'Software implementation – Deploy software efficiently to maximise its impact.',
                'Managed IT – Reliable ongoing support to keep your systems running smoothly.',
            ]
        ],
    ],
    [
        'id' => 'professional_tech',
        'title' => 'Professional & Technical Services',
        'icon' => '<i class="fas fa-tools text-brand-teal icon-uniform"></i>',
        'summary' => 'Specialist expertise to tackle complex technical or operational challenges, solving problems efficiently and effectively.',
        'modal_content' => [
            'headline' => 'Expert Solutions for Complex Operations',
            'full_description' => 'When businesses face complex technical or operational challenges, they need expertise they can trust. Salzee Solutions Ltd provides specialist professional and technical services designed to solve problems efficiently and effectively. We partner with you to tackle challenges head-on, helping your organisation operate more efficiently, confidently, and sustainably. Our offerings include:',
            'details' => [
                'Business process optimisation – We work with you to streamline workflows and improve operational efficiency.',
                'Compliance support – We ensure your business meets regulatory and industry standards.',
                'Project management – We deliver projects on time, on budget, and with clear outcomes.',
                'Monitoring & Evaluation – We help organisations measure what matters, assess effectiveness, and ensure initiatives deliver real impact through robust data and insights.',
                'Technical advisory – We provide expert guidance to help you make informed technology decisions.',
            ]
        ],
    ],
    [
        'id' => 'training_education',
        'title' => 'Training & Education',
        'icon' => '<i class="fas fa-chalkboard-teacher text-brand-teal icon-uniform"></i>',
        'summary' => 'Empowering individuals and teams with practical, engaging training to build digital skills and expertise for a technology-driven world.',
        'modal_content' => [
            'headline' => 'Building Capacity. Driving Proficiency.',
            'full_description' => 'At Salzee Solutions Ltd, we empower individuals and teams with practical, engaging training to build digital skills and expertise. In today’s fast-evolving business landscape across Scotland and the UK, staying ahead with technology is crucial for success. We offer comprehensive, hands-on IT training tailored to the needs of professionals and businesses alike. Whether for personal growth or organisational development, acquiring relevant technological skills is a smart investment in the digital age. We focus on practical application, ensuring participants leave with knowledge they can immediately apply to real-world challenges, making both individuals and organisations stronger and more capable in a technology-driven world.',
            'details' => [
                'Microsoft Office Mastery – Master the tools you use every day. You don’t just learn the features — you learn how to apply them to work smarter, faster, and with confidence.',
                'Data Analysis – Gain the skills to turn data into actionable insights.',
                'Business Analysis – Learn to evaluate processes, identify opportunities, and drive informed decisions.',
                'Project Management – Build the expertise to plan, execute, and deliver projects successfully.',
            ]
        ],
    ]
];

// Prepare data for JS lookup (ID -> data mapping)
$js_service_data = [];
foreach ($service_pillars as $pillar) {
    // We store the entire pillar object keyed by its ID for quick lookup in JS
    $js_service_data[$pillar['id']] = $pillar;
}
?>

<!-- Custom styles for the complex Service Pillar card grid, the modal, and brand colors.
     CRITICAL FIX: Initial hidden state for animation is in CSS to prevent "Flash of Unstyled Content" (FOUC).
-->
<style>
    /* Brand Color Variables based on Salzee Brand Guide */
    :root {
        --salzee-teal: #0097A7; /* Primary Brand Blue-Green (Teal) */
        --salzee-charcoal: #333333; /* Heading/Dark Text (Charcoal Gray) */
        --salzee-light-bg: #F9F9F9; /* Clean, modern background */
    }

    /* Core Card Styling for Professional Look and Uniformity */
    .service-card-container {
        /* Ensure the entire grid item is set up for animation and equal height */
        display: flex;
        flex-direction: column;
        height: 100%;
        /* Animation initial state - CRITICAL FIX: Set initial state in CSS */
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.7s ease-out, transform 0.7s ease-out;
    }
    .service-card-container.fade-in {
        opacity: 1;
        transform: translateY(0);
    }
    
    /* Ensure the card is the clickable element and uses a pointer cursor */
    .service-card {
        transition: all 0.3s ease-in-out;
        border-bottom: 4px solid transparent;
        cursor: pointer;
        /* Ensure all cards are equal height for aesthetic balance */
        display: flex;
        flex-direction: column;
        height: 100%; /* Must be 100% to fill the container */
    }
    .service-card:hover {
        border-bottom-color: var(--salzee-teal); /* Brand Teal border on hover */
        transform: translateY(-8px) scale(1.01); /* Subtle 3D lift effect (non-flat) */
        box-shadow: 0 15px 25px -5px rgba(51, 51, 51, 0.15), 0 4px 6px -2px rgba(51, 51, 51, 0.08); /* Pronounced shadow on hover */
    }

    .icon-uniform {
        font-size: 2rem; /* Adjust this value as needed */
    }
    
    /* Global scroll-reveal styles for sections */
    .scroll-reveal {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.6s ease-out, transform 0.6s ease-out;
    }
    .scroll-reveal.fade-in {
        opacity: 1;
        transform: translateY(0);
    }
    
    /* Modal Styling */
    .modal-hidden {
        opacity: 0;
        visibility: hidden; /* Use visibility for better state management */
        transition: opacity 0.3s ease-out, visibility 0.3s;
    }
    .modal-visible {
        opacity: 1;
        visibility: visible;
    }
    .modal-content-container {
        max-width: 90%;
        max-height: 90vh;
        overflow-y: auto;
        scrollbar-width: thin;
        scrollbar-color: var(--salzee-teal) #e2e8f0;
        /* Animation for content entering */
        transform: scale(0.95);
        opacity: 0;
        transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1); /* Professional, smooth animation */
    }
    .modal-visible .modal-content-container {
        transform: scale(1);
        opacity: 1;
    }
    .modal-list li {
        margin-bottom: 0.5rem;
        display: flex;
        align-items: flex-start;
    }
    .modal-list li svg {
        color: var(--salzee-teal); /* Use Brand Teal for checkmarks */
        margin-top: 4px;
        flex-shrink: 0;
    }
</style>

<main>
    <!-- 1. Hero Section: Page Title and Intro with Visual Impact -->
    <section class="py-16 md:py-24 bg-brand-light-bg scroll-reveal">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-12 items-center">
            
            <!-- Left Content (Text) -->
            <div class="order-2 lg:order-1">
                <p class="text-brand-teal font-heading text-lg font-semibold uppercase mb-2">Our Capabilities</p>
                <h1 class="font-heading text-4xl md:text-5xl lg:text-6xl font-extrabold text-brand-charcoal leading-tight mb-4">
                    Technology Made Simple. <span class="text-brand-teal">Solutions Made for You.</span>
                </h1>
                <p class="text-xl text-gray-700 max-w-xl font-body font-normal">
                    We provide simple, reliable and effective solutions that just work for you.
                </p>
            </div>
            
            <!-- Right Content (Professional IT Image Placeholder - Abstract Data Flow) -->
            <div class="order-1 lg:order-2">
                <!-- Placeholder image representing abstract IT strategy/data flow for a non-flat look -->
                <img 
                    src="assets/images/services_hero_section.webp" 
                    alt="Abstract IT Strategy and Digital Network Flow" 
                    class="rounded-xl shadow-2xl w-full h-auto object-cover border border-teal-500" 
                    onerror="this.onerror=null;this.src='https://placehold.co/800x500/333333/0097A7?text=DATA+FLOW+%7C+STRATEGY';">
            </div>
        </div>
    </section>

    <!-- 2. Services Grid - Main Pillars (Four Columns on Desktop) -->
    <section id="service-pillar" class="bg-white py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="font-heading text-3xl sm:text-4xl font-bold text-brand-teal mb-12 text-center scroll-reveal">
                Our Core Service Pillars
            </h2>

            <!-- The Services Grid (4 columns on desktop, 2 on tablet, 1 on mobile) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <?php $delay = 100; // Starting delay in ms ?>
                <?php foreach ($service_pillars as $pillar): ?>
                    <!-- Service Card Container (For Staggered Animation) -->
                    <div class="service-card-container" data-delay="<?php echo $delay; ?>">
                        <!-- Service Card (Interactive and Responsive, entire card is the click target) -->
                        <div 
                            class="service-card bg-brand-light-bg p-8 rounded-xl shadow-lg flex flex-col items-start h-full"
                            onclick="openModal('<?php echo $pillar['id']; ?>')"
                        >
                            <!-- Icon (Teal Circle Background) -->
                            <div class="p-3 bg-white rounded-lg shadow-inner mr-4 flex-shrink-0">
                                <?php echo $pillar['icon']; ?>
                            </div>
                            
                            <!-- Title -->
                            <h3 class="font-heading text-xl font-bold text-brand-charcoal mb-3">
                                <?php echo $pillar['title']; ?>
                            </h3>

                            <!-- Summary (Uses flex-grow to push CTA to the bottom for uniform card height) -->
                            <p class="text-gray-600 text-base mb-4 font-body flex-grow">
                                <?php echo $pillar['summary']; ?>
                            </p>

                            <!-- CTA Link (Now a consistent part of the bottom, clear target on mobile) -->
                            <button class="font-semibold text-brand-teal hover:text-brand-charcoal transition duration-150 flex items-center mt-auto border-t pt-4 w-full justify-start border-gray-100">
                                View Details 
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /></svg>
                            </button>
                        </div>
                    </div>
                <?php $delay += 150; // Increment delay for next card ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 3. Section for "Why Trust Us" (Strategic Flow-Through CTA) -->
    <section class="bg-brand-charcoal py-16 md:py-20 text-white scroll-reveal">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="font-heading text-3xl md:text-4xl font-extrabold mb-4 leading-tight">
                Ready to Simplify Your Technology?
            </h2>
            <p class="text-lg md:text-xl font-light mb-8 max-w-4xl mx-auto font-body">
                We combine deep technical expertise with real-world business insight to deliver solutions that make a lasting impact.
            </p>

            <a href="<?php echo clean_link('why_trust_us'); ?>" class="inline-flex items-center justify-center px-8 py-4 bg-brand-teal text-white border-2 border-brand-teal font-bold rounded-lg hover:bg-white hover:text-brand-charcoal border-brand-charcoal transition duration-150 shadow-xl transform hover:scale-[1.02] font-heading">
                See Our Approach and Values
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
            </a>
        </div>
    </section>

    <!-- 4. Final CTA Section -->
    <section class="bg-brand-light-bg py-16 md:py-24 text-center scroll-reveal">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="font-heading text-3xl md:text-4xl lg:text-5xl font-extrabold text-brand-charcoal mb-4 leading-tight">Connect With Us Today!</h2>
            <p class="text-lg md:text-xl text-gray-700 font-light mb-10 max-w-4xl mx-auto font-body">
                Let's discuss your consultancy needs and explore how technology can take your business to new heights!
            </p>

            <div class="flex justify-center">
                <a href="<?php echo clean_link('contact_us'); ?>" class="inline-flex items-center justify-center px-8 py-4 bg-brand-teal text-white border-2 border-brand-teal font-bold rounded-lg hover:bg-white hover:text-brand-teal transition duration-150 shadow-xl transform hover:scale-[1.02] font-heading">
                    Start a Conversation
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                    </svg>
                </a>
            </div>
        </div>
    </section>
</main>

<!-- Modal Structure for Detailed Service Information (Uses smooth transition) -->
<div id="pillarModal" class="fixed inset-0 bg-black bg-opacity-70 flex items-center justify-center z-50 modal-hidden" onclick="closeModal()">
    <div class="modal-content-container bg-white p-8 md:p-12 rounded-xl shadow-2xl max-w-4xl w-full mx-4" onclick="event.stopPropagation()">
        <!-- Modal Close Button (Brand Compliant X) -->
        <button onclick="closeModal()" class="absolute top-4 right-4 text-gray-500 hover:text-brand-charcoal transition duration-150 p-2 rounded-full border border-transparent hover:border-gray-200 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
        </button>

        <!-- Dynamic Content Area -->
        <h2 id="modalTitle" class="font-heading text-3xl font-extrabold text-brand-teal mb-4"></h2>
        <div id="modalDescription" class="text-lg text-gray-700 mb-6 font-body leading-relaxed space-y-4">
            <!-- Full descriptive paragraph(s) will be injected here -->
        </div>

        <!-- Details List -->
        <h3 class="font-heading text-xl font-bold text-brand-charcoal mb-4 pt-4 border-t border-gray-100">Key Offerings</h3>
        <ul id="modalDetails" class="modal-list space-y-4 text-lg text-gray-700">
            <!-- Bulleted details will be injected here -->
        </ul>

        <!-- Modal CTA -->
        <div class="mt-8 pt-6 border-t border-gray-100">
             <a href="<?php echo clean_link('contact_us'); ?>" class="inline-flex items-center justify-center px-6 py-3 bg-brand-teal text-white font-bold rounded-lg hover:bg-teal-700 transition duration-150 shadow-md font-heading">
                Discuss This Service
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                </svg>
            </a>
        </div>
    </div>
</div>

<script>
    // CRITICAL FIX: Centralized data structure for safe lookup, eliminating fragile PHP string escaping
    const SERVICE_DATA_MAP = <?php echo json_encode($js_service_data); ?>;

    // ADVANCED IT WEBSITE STANDARD: JavaScript for Scroll-Triggered Staggered Fade-In Animations (Intersection Observer)
    document.addEventListener('DOMContentLoaded', () => {
        const observerOptions = {
            root: null, 
            rootMargin: '0px',
            threshold: 0.1 
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const delay = parseInt(entry.target.getAttribute('data-delay') || '0', 10);
                    // Apply animation class after the specific delay for staggered effect
                    setTimeout(() => {
                        entry.target.classList.add('fade-in');
                    }, delay);
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Target all sections (.scroll-reveal) and the staggered card containers
        const animatedElements = document.querySelectorAll('.scroll-reveal, .service-card-container');
        
        animatedElements.forEach(element => {
            // All elements have their initial hidden state defined in CSS, preventing FOUC.
            observer.observe(element);
        });
    });

    /**
     * Opens the service detail modal and populates it with all content (full description + list).
     * @param {string} id - The ID of the service pillar to display (e.g., 'it_consultancy').
     */
    function openModal(id) {
        const data = SERVICE_DATA_MAP[id];
        
        if (!data) {
            console.error("Service data not found for ID:", id);
            // Graceful exit if data is missing
            return;
        }

        const modal = document.getElementById('pillarModal');
        const modalTitle = document.getElementById('modalTitle');
        const modalDescription = document.getElementById('modalDescription');
        const modalDetails = document.getElementById('modalDetails');
        
        const content = data.modal_content; // Direct access to the content object

        // 1. Populate Modal Elements
        modalTitle.textContent = data.title; // Use the main title
        modalDetails.innerHTML = ''; // Clear previous content

        // 2. Populate Full Description Paragraph(s)
        modalDescription.innerHTML = '';
        if (content.full_description) {
            // Use the complete descriptive text
            modalDescription.innerHTML = `<p>${content.full_description}</p>`;
        }

        // 3. Populate Detailed List Items
        if (content.details && Array.isArray(content.details)) {
            content.details.forEach(detail => {
                const li = document.createElement('li');
                li.className = 'flex items-start font-body';
                // Checkmark icon for bullet points
                li.innerHTML = `
                    <svg class="h-6 w-6 text-brand-teal mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                    </svg>
                    <span>${detail}</span>
                `;
                modalDetails.appendChild(li);
            });
        }
        
        // 4. Show the modal with professional transitions
        modal.classList.remove('modal-hidden');
        modal.classList.add('modal-visible');
        document.body.style.overflow = 'hidden'; // Prevent background scrolling
    }

    /**
     * Closes the modal.
     */
    function closeModal() {
        const modal = document.getElementById('pillarModal');
        modal.classList.remove('modal-visible');
        modal.classList.add('modal-hidden');
        document.body.style.overflow = ''; // Restore background scrolling
    }

    // Close modal with the ESC key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && document.getElementById('pillarModal').classList.contains('modal-visible')) {
            closeModal();
        }
    });
</script>

<?php
    // Include the standard footer
    include 'includes/footer.php';
?>
