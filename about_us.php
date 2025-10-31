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
       
        <p class="text-brand-teal font-heading text-lg font-semibold uppercase mb-2">Our Story</p>
        <!-- Title (H1 for page SEO) -->
        <h1 class="font-heading text-brand-teal text-4xl md:text-5xl lg:text-6xl font-extrabold leading-tight mb-6">
          About Salzee Solutions Ltd.
        </h1>
       
        <!-- Subheading (EXACT COPY from DOCX) -->
        <p class="text-lg text-gray-700 font-heading font-normal mb-8">
          Your trusted partner for technology and growth – technology consultancy, policy research and training services.
        </p>

        <!-- INTRO CONTENT (EXACT COPY from DOCX - Primary block) -->
        <p class="text-lg text-gray-700 leading-relaxed mb-6">
          We’re a UK-based technology services provider passionate about helping businesses and individuals use technology to work smarter. From strategy and support to training and innovation, we provide straightforward, simple, reliable and effective solutions that just work for you.
        </p>
        <p class="text-gray-700 text-lg leading-relaxed mb-8">
          We combine deep technical expertise with real-world business insight to deliver solutions that make a lasting impact. Our experience spans digital transformation, IT consultancy, policy research, programme management, and capacity building – giving us a unique ability to design approaches that are practical today and future-ready for tomorrow. And because technology never stands still, neither do we. We’re always learning, adapting, and innovating – so you stay ahead.
        </p>

        <a href="<?php echo clean_link('contact_us'); ?>" class="inline-flex items-center text-brand-teal font-semibold hover:text-brand-teal-dark transition duration-150">
          Talk to our Strategists
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
        </a>
      </div>

      <!-- Right Visual (Placeholder for Professional Image) -->
      <div class="order-2 lg:order-2 flex justify-center">
        <!-- Ready for a professional, full-width image of collaboration or strategy -->
        <img src="assets/images/about_us.webp" alt="Image representing Salzee Solutions team collaboration" class="rounded-xl shadow-2xl w-full max-w-lg transform hover:scale-[1.02] transition duration-500 ease-in-out">
      </div>
    </div>
  </section>

  <!-- 2. Bridging the Gap - Strategic Paragraph (New Section for User's Content) -->
  <section class="bg-white py-16 md:py-24 border-b border-gray-100 animate-on-scroll">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <h2 class="font-heading text-3xl sm:text-4xl font-bold text-brand-teal mb-4">
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
      <h2 class="font-heading text-3xl sm:text-4xl font-bold text-brand-teal mb-12">
        Our Guiding Principles
      </h2>

      <!-- Vision and Mission Block (Larger callout) -->
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-16">
        <!-- Vision (EXACT COPY from DOCX) -->
        <div class="p-8 rounded-xl text-left border-b-4 border-brand-teal shadow-lg bg-white">
          <h3 class="font-heading text-2xl font-bold text-brand-teal mb-3 flex items-center">
            <i class="fas fa-eye  mr-2"></i>
            Our Vision
          </h3>
          <p class="text-gray-700 text-lg">
            To champion a future where every business in Scotland and beyond can harness technology with confidence to grow, innovate, and succeed.
          </p>
        </div>
        <!-- Mission (EXACT COPY from DOCX) -->
        <div class="p-8 rounded-xl text-left border-b-4 border-brand-teal shadow-lg bg-white">
          <h3 class="font-heading text-2xl font-bold text-brand-teal mb-3 flex items-center">
            <i class="fas fa-bullseye  mr-2"></i>
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
              ['title' => 'People First', 'icon' => '<i class="fas fa-users text-brand-teal"></i>', 'desc' => 'We build solutions and services around people, not just technology.'],
              ['title' => 'Clarity', 'icon' => '<i class="fas fa-eye text-brand-teal"></i>', 'desc' => 'We communicate openly, simply, and without ambiguity.'],
              ['title' => 'Trust & Consistency', 'icon' => '<i class="fa-solid fa-lock text-brand-teal"></i>', 'desc' => 'We deliver solutions with lasting impact, building confidence through reliability and meaningful innovation.'],
              ['title' => 'Integrity', 'icon' => '<i class="fa-solid fa-shield-halved text-brand-teal"></i>', 'desc' => 'We act with honesty, transparency, and responsibility.'],
              ['title' => 'Knowledge Sharing', 'icon' => '<i class="fa-solid fa-brain text-brand-teal"></i>', 'desc' => 'We empower clients by transferring skills and insights.'],
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
  <section class="bg-brand-charcoal py-16 md:py-24 text-white animate-on-scroll">
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

  
  <!-- 6. Final CTA Section -->
  <section class="bg-brand-teal py-16 md:py-24 text-white text-center animate-on-scroll">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <h2 class="font-heading text-3xl md:text-4xl lg:text-5xl font-extrabold mb-4 leading-tight">Ready to Reach Out to Us?</h2>
      <p class="text-lg md:text-xl font-light mb-10 max-w-4xl mx-auto">
        Discover how our strategic approach can transform your challenges into growth opportunities. Let's discuss your next project.
      </p>

      <div class="flex justify-center">
        <a href="<?php echo clean_link('contact_us'); ?>" class="inline-flex items-center justify-center px-8 py-4 bg-brand-teal text-white border-2 border-white font-bold rounded-lg hover:bg-white hover:text-brand-teal transition duration-150 shadow-xl transform hover:scale-[1.02] font-heading">
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
