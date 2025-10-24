<?php
  // Define the page title
  $page_title = 'Why Salzee Solutions Ltd?';
  $current_page = 'why_trust_us';

  // Include the standard header for HTML structure, metadata, and main navigation
  include 'includes/header.php';

  // --- Content Data (Pulled directly from the DOCX) ---
  // The five core reasons clients choose Salzee
  $trust_pillars = [
    [
      'title' => 'Proven Expertise',
      // Replaced Shield/Security with a Checkmark-in-Circle for Proven/Verified
      'icon' => '<i class="fas fa-check-circle text-white icon-uniform"></i>',
      'description' => 'We bring decades of experience delivering IT consultancy, services, policy research, and training.',
    ],
    [
      'title' => 'Practical Solutions',
      // Replaced Settings/Gears with the actual Cogs icon
      'icon' => '<i class="fas fa-cogs text-white icon-uniform"></i>',
      'description' => 'We simplify technology and focus on results that matter to you.',
    ],
    [
      'title' => 'Trust & Transparency',
      // Replaced Open Book/Integrity with a Scale for Trust/Fairness/Transparency
      'icon' => '<i class="fas fa-balance-scale text-white icon-uniform"></i>',
      'description' => 'Our services are built on integrity, trust and transparency. We take pride in ethical practices and open communication in every engagement.',
    ],
    [
      'title' => 'Empowering Clients',
      // Replaced Lightning Bolt with a Hand Raising (Empowerment)
      'icon' => '<i class="fas fa-hands-helping text-white icon-uniform"></i>',
      'description' => 'We transfer knowledge so your team can confidently deliver your objectives and grow. We are with you all the way.',
    ],
    [
      'title' => 'Innovation with Purpose',
      // Replaced Lightbulb/Idea with the actual Lightbulb icon
      'icon' => '<i class="fas fa-lightbulb text-white icon-uniform"></i>',
      'description' => 'We adopt technology thoughtfully to solve real business challenges. Whatever your needs are, we will work with you to address them.',
    ],
  ];


  // Testimonial Data (from the DOCX)
  $testimonials = [
    ['quote' => '“The data analysis training was excellent. The trainer explained complex concepts clearly and gave us hands-on exercises that really helped. Within weeks, our team was producing dashboards and reports that improved decision-making across the business.”', 'source' => 'Sarah L., Operations Manager'],
    ['quote' => '“I used to feel overwhelmed by spreadsheets, but after the training I feel confident using Excel and data tools every day. The sessions were practical, easy to follow, and full of useful tips I could apply straight away.”', 'source' => 'Ewere – Customer Experience Analyst'],
    ['quote' => '“This course transformed how our organisation approaches projects. From risk management to stakeholder engagement, we now handle challenges proactively and deliver results with far greater consistency.”', 'source' => 'Abdullahi O., PMO Lead'],
    ['quote' => '“Clear, practical, and instantly useful — the best training I’ve had in years.”', 'source' => 'Bright, Sales Analyst'],
    ['quote' => '“This training completely changed how we approach data in our projects. We’re now able to analyse trends, present insights clearly, and back up our decisions with evidence. The training paid for itself almost immediately.”', 'source' => 'Rasheed, Project Lead'],
    ['quote' => '“Practical, insightful, and instantly applicable. It’s made a huge difference to how we deliver projects.”', 'source' => 'Daniel A., Project Coordinator'],
    ['quote' => '“The business analysis training gave me a solid toolkit of techniques I can use every day. From requirements gathering to process mapping, I now feel much more confident working with stakeholders and adding value to projects.”', 'source' => 'John, Business Analyst'],
    ['quote' => '“It was a very great learning experience and I just want to appreciate the team at Salzee for the positive impact. I am now PMP-certified and able to apply the skills in my projects.”', 'source' => 'Rukayat, Tax Auditor'],
    ['quote' => '“The project management training gave our team a clear framework and common language to run projects more effectively. We’ve already seen improvements in planning, communication, and delivery timelines.”', 'source' => 'Remi O., Director PMO'],
    ['quote' => '“Before this training, I wasn’t certain about what path to take but the team at Salzee and my group project team made the training and project tasks an amazing success.”', 'source' => 'Rebecca, Student'],
    ['quote' => '“It was one of the best investments I’ve ever made with my money. Very enlightening and impactful.”', 'source' => 'Simon, Student'],
    ['quote' => '“Salzee helped us streamline our debit card issuance operations with a tailored software deployment. The transition was smooth, grew our sales volume, and has improved our efficiency significantly.”', 'source' => 'Kenny, IT Officer, Commercial Bank'],
    ['quote' => '“Salzee Solutions didn’t just give us technology; they gave us confidence. Their team listened to our concerns, explained everything clearly, and delivered a solution that really works for our people.”', 'source' => 'Wale P., HR Lead, Media organisation'],
  ];

?>

<!-- Add Google Fonts for Brand Guide Compliance: Montserrat (Headings) and Open Sans (Body) -->
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

<style>
  /* Brand Guide Colors & Typography Implementation */
  :root {
    --brand-teal: #0097A7;   /* Primary Brand Blue-Green (Trust, Innovation) */
    --brand-charcoal: #333333; /* Heading/Dark Text (Professionalism, Authority) */
    --brand-background: #F9F9F9; /* Clean, modern background */
    --brand-aqua-accent: #4DD0E1; /* Bright Aqua (Energy, Digital Feel) - Secondary Palette */
    --text-color: #4a5568;   /* Slightly softer body text for readability */
  }

  /* Utility Classes to apply colors */
  .font-heading { font-family: 'Montserrat', sans-serif; }
  .font-body { font-family: 'Open Sans', sans-serif; }
  .bg-brand-teal { background-color: var(--brand-teal); }
  .text-brand-teal { color: var(--brand-teal); }
  .bg-brand-charcoal { background-color: var(--brand-charcoal); }
  .text-brand-charcoal { color: var(--brand-charcoal); }
  .bg-brand-background { background-color: var(--brand-background); }
  .bg-brand-aqua-accent { background-color: var(--brand-aqua-accent); }

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

  /* Scroll Reveal Animation */
  .scroll-reveal {
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.7s ease-out, transform 0.7s ease-out;
  }
  .scroll-reveal.fade-in {
    opacity: 1;
    transform: translateY(0);
  }

  .icon-uniform {
    font-size: 2rem; /* Adjust this value as needed */
  }
 
  /* Testimonial Slider Styling */
  .testimonial-card {
    transition: opacity 0.6s ease-in-out;
    opacity: 0;
    position: absolute;
    width: 100%;
    height: auto;
  }
  .testimonial-card.active {
    opacity: 1;
    position: relative; /* Only active card takes up space */
    z-index: 10;
  }
  .testimonial-card:not(.active) {
    pointer-events: none; /* Make non-active cards non-interactive */
    z-index: 5;
  }

  /* Trust Pillar Card Hover Effect and Gradient Icon Background */
  .pillar-card {
    transition: all 0.3s ease-in-out;
    border-bottom: 4px solid transparent;
    cursor: pointer;
    /* Ensure all cards are equal height for aesthetic balance */
    display: flex;
    flex-direction: column;
    height: 100%; /* Must be 100% to fill the container */
  }
  .pillar-card:hover {
    border-bottom-color: var(--brand-teal); /* Brand Teal border on hover */
    transform: translateY(-8px) scale(1.01); /* Subtle 3D lift effect (non-flat) */
    box-shadow: 0 15px 25px -5px rgba(51, 51, 51, 0.15), 0 4px 6px -2px rgba(51, 51, 51, 0.08); /* Pronounced shadow on hover */
  }

  .icon-bg-gradient {
    /* Gradient using Primary Teal and Secondary Aqua Accent */
    background: linear-gradient(135deg, var(--brand-teal) 0%, var(--brand-aqua-accent) 100%);
  }
 
</style>
<script src="https://cdn.tailwindcss.com"></script>
<style>
 /* Define custom Tailwind colors if they aren't globally available */
 tailwind.config = {
  theme: {
   extend: {
    colors: {
     'brand-background': '#F9FAFB', /* Light gray/off-white */
     'brand-teal': '#2DD4BF',  /* Teal for accent */
     'brand-charcoal': '#1E293B', /* Dark blue/charcoal */
    }
   }
  }
 }
</style>
<main>
  <!-- 1. Hero Section: Why Salzee Solutions Ltd? (Visually Enhanced) -->
  <section class="py-16 md:py-24 bg-brand-charcoal
  bg-[url('assets/images/why_trust_us.webp')]
  bg-cover bg-center
  relative overflow-hidden">
 
  <!-- Updated: Increased opacity from opacity-40 to opacity-60 to darken the background image slightly -->
  <div class="absolute inset-0 bg-black opacity-60"></div>

  <div class="max-w-7xl mx-auto container-padding text-center relative z-10">

    <!-- Headline text color changed to white -->
    <h1 class="font-heading text-4xl md:text-5xl lg:text-6xl font-extrabold text-white leading-tight mb-4 max-w-4xl mx-auto scroll-reveal">
      Why Salzee Solutions Ltd?
    </h1>
   
    <!-- Subheading text color changed to light gray -->
    <p class="text-xl text-gray-200 max-w-3xl mx-auto font-body mb-6 scroll-reveal" data-delay="100">
      Choosing a strategic technology partner is a critical decision. Discover why Salzee is the partner of choice for your technological objectives.
    </p>

  </div>
</section>


  <!-- 2. Core Differentiators: Why Clients Choose Us (Refined Cards) -->
  <section class="bg-white py-16 md:py-24">
    <div class="max-w-7xl mx-auto container-padding">
      <h2 class="font-heading text-3xl sm:text-4xl font-bold text-brand-teal mb-4 text-center scroll-reveal">
        Why Clients Choose Us
      </h2>
      <p class="text-lg text-gray-600 max-w-3xl mx-auto text-center font-body mb-12 scroll-reveal" data-delay="100">
        Salzee combines expertise, practical solutions, and a client-first approach to make that choice easy. Here’s why businesses and individuals choose us:
      </p>

      <!-- Differentiators Grid (5 Pillars) -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6 md:gap-8">
        <?php $delay = 200; ?>
        <?php foreach ($trust_pillars as $pillar): ?>
          <div class="pillar-card bg-white p-6 rounded-xl text-center scroll-reveal flex flex-col justify-start items-center h-full" data-delay="<?php echo $delay; ?>">
           
            <!-- Icon (Teal/Aqua Gradient Circle) -->
                        <!-- FIX APPLIED: Added w-16 h-16 classes to ensure a perfect circular container -->
            <div class="p-4 icon-bg-gradient rounded-full shadow-lg mb-4 flex-shrink-0 flex items-center justify-center w-16 h-16">
              <?php echo $pillar['icon']; ?>
            </div>

            <!-- Title -->
            <h3 class="font-heading text-xl font-bold text-brand-charcoal mb-3">
              <?php echo $pillar['title']; ?>
            </h3>
           
            <!-- Description -->
            <p class="text-base text-gray-600 font-body flex-grow">
              <?php echo $pillar['description']; ?>
            </p>
          </div>
        <?php $delay += 150; ?>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Diagonal Separator (Added for Modern UI Break) -->
  <div class="relative h-20 bg-brand-background">
    <svg class="absolute bottom-0 w-full h-full text-white fill-current" viewBox="0 0 100 100" preserveAspectRatio="none">
      <polygon points="0,100 100,0 100,100"></polygon>
    </svg>
  </div>

  <!-- 3. Our Commitment to You -->
  <section class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto container-padding">
      <div class="max-w-4xl mx-auto text-center">
        <h2 class="font-heading text-3xl md:text-4xl font-extrabold text-brand-charcoal leading-tight mb-6 scroll-reveal">
          Our Commitment to You
        </h2>
        <p class="text-lg text-gray-700 mb-6 font-body scroll-reveal" data-delay="100">
          At Salzee, we believe partnerships are built on trust, clarity, and results. Our commitment is simple: we put your needs first and deliver solutions that genuinely add value to you, either as an individual or businesses.
        </p>
        <p class="text-lg text-gray-700 mb-8 font-body scroll-reveal" data-delay="200">
          We believe that every business is different. So, when you work with us, you can expect personalised support because we take time to understand your goals and tailor solutions that fit. Our advice will be clearly communicated – no ambiguity, no hidden surprises – just straightforward advice you can act on.
        </p>
        <p class="text-lg text-gray-700 mb-10 font-body scroll-reveal" data-delay="300">
          We are committed to ensure your technology works for you today and scales with you tomorrow. We don’t just fix problems; we empower you with the skills and confidence to succeed, because our success is measured by your success, growth, resilience, and innovation.
        </p>
       
        <!-- CTA Button -->
        <a href="<?php echo clean_link('contact_us'); ?>" class="inline-flex items-center justify-center px-8 py-4 bg-brand-teal text-white font-bold rounded-lg hover:bg-brand-teal-dark transition duration-150 shadow-xl transform hover:scale-[1.02] font-heading scroll-reveal" data-delay="400">
          Partner With Us Today
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" /></svg>
        </a>
      </div>
    </div>
  </section>
 
  <!-- 4. Success Stories / Testimonial Slider (Refined Visuals) -->
  <section class="bg-brand-background py-16 md:py-24">
    <div class="max-w-7xl mx-auto container-padding">
      <h2 class="font-heading text-3xl sm:text-4xl font-bold text-brand-charcoal mb-4 text-center scroll-reveal">
        Success Stories: What Our Clients Say
      </h2>
     
      <div class="max-w-4xl mx-auto relative mt-12 mb-8">
       
        <!-- Testimonial Cards Container -->
        <div id="testimonial-slider" class="relative overflow-hidden min-h-[300px] flex items-center">
          <?php $i = 0; ?>
          <?php foreach ($testimonials as $testimonial): ?>
            <div class="testimonial-card p-6 md:p-10 bg-white rounded-xl  transition-all duration-500 hidden <?php echo ($i === 0) ? 'active' : ''; ?>">
              <div class="text-brand-teal mb-4 flex items-start">
                <!-- Large Quote Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-brand-teal" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M11 20l-3-3m0 0l-3 3m3-3v8m8-11l-3 3m0 0l-3-3m3 3V3m0 18H5m14 0H5m14 0h5m-5 0h5m-5 0h-5m-5 0H5"/>
                </svg>
                <p class="text-2xl font-body italic text-gray-700 leading-relaxed ml-3 mt-1">
                  <?php echo $testimonial['quote']; ?>
                </p>
              </div>
             
              <p class="font-heading text-lg font-bold text-brand-charcoal mt-8 border-t pt-4 border-gray-100">
                <?php echo $testimonial['source']; ?>
              </p>
            </div>
            <?php $i++; ?>
          <?php endforeach; ?>
        </div>
       
        <!-- Slider Navigation Dots -->
        <div id="slider-nav" class="flex justify-center space-x-2 mt-8">
          <!-- Dots will be injected here by JavaScript -->
        </div>
       
      </div>
    </div>
  </section>

</main>

<script>
  // --- Scroll Reveal Logic ---
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
          setTimeout(() => {
            entry.target.classList.add('fade-in');
          }, delay);
          observer.unobserve(entry.target);
        }
      });
    }, observerOptions);

    document.querySelectorAll('.scroll-reveal').forEach(element => {
      observer.observe(element);
    });
   
    // --- Testimonial Slider Logic (Javscript Rendering) ---
    const sliderContainer = document.getElementById('testimonial-slider');
    const navContainer = document.getElementById('slider-nav');
    const cards = Array.from(sliderContainer.querySelectorAll('.testimonial-card'));
    const totalCards = cards.length;
    let currentIndex = 0;

    /**
    * Updates the slider to show the specified card index.
    * @param {number} newIndex - The index of the card to show.
    */
    const updateSlider = (newIndex) => {
      // Calculate new index, wrapping around if necessary
      currentIndex = (newIndex % totalCards + totalCards) % totalCards;

      // Update cards visibility
      cards.forEach((card, i) => {
        card.classList.remove('active', 'hidden');
        if (i === currentIndex) {
          card.classList.add('active');
        } else {
          card.classList.add('hidden');
        }
      });

      // Update navigation dots
      updateNavDots();
    };

    /**
    * Renders and updates the state of the navigation dots.
    */
    const updateNavDots = () => {
      // Only create dots once
      if (navContainer.children.length === 0) {
        for (let i = 0; i < totalCards; i++) {
          const dot = document.createElement('button');
          dot.classList.add('w-3', 'h-3', 'rounded-full', 'transition', 'duration-300', 'ease-in-out', 'flex-shrink-0');
          dot.setAttribute('aria-label', `Go to testimonial ${i + 1}`);
          dot.addEventListener('click', () => {
            updateSlider(i);
            resetAutoSlide();
          });
          navContainer.appendChild(dot);
        }
      }

      // Update state of all dots
      Array.from(navContainer.children).forEach((dot, i) => {
        if (i === currentIndex) {
          // Use a stronger highlight for the active dot
          dot.classList.add('bg-brand-teal', 'scale-125');
          dot.classList.remove('bg-gray-400', 'hover:bg-teal-700');
        } else {
          dot.classList.add('bg-gray-400', 'hover:bg-brand-teal/50');
          dot.classList.remove('bg-brand-teal', 'scale-125');
        }
      });
    };

    // Auto-advance logic
    let slideInterval;
    const autoSlide = () => {
      updateSlider(currentIndex + 1); // Move to the next card
    };

    const startAutoSlide = () => {
      // Set a slower interval (e.g., 8 seconds) for reading the full testimonial
      slideInterval = setInterval(autoSlide, 8000);
    };

    const resetAutoSlide = () => {
      clearInterval(slideInterval);
      startAutoSlide();
    };
   
    // Initial setup
    if (totalCards > 0) {
      updateSlider(0); // Initialize the slider
      startAutoSlide(); // Start the auto-slide loop
    }
  });
</script>

<?php
  // Include the standard footer to close the page body and add copyright
  include 'includes/footer.php';
?>
