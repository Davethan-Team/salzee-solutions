<?php
// ====================================================================
// PRODUCTION READY: Removed temporary PHP debugging lines for security.
// ====================================================================

// Use PHPMailer classes (assuming your environment handles includes)
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Define the page title
$page_title = 'Contact Us - Salzee Solutions Ltd';
$current_page = 'contact_us';

// ====================================================================
// START AJAX PROCESSING BLOCK - RETAINED AND CRITICAL FOR HOSTINGER SETUP
// This block handles the server-side email sending logic.
// NOTE: This PHP block is now effectively deactivated/bypassed by the
// new client-side JavaScript, but it is retained as requested.
// ====================================================================

// Check if this is an AJAX request (using a hidden field in the form data)
if (isset($_POST['is_ajax']) && $_POST['is_ajax'] == '1') {

 // Set headers and ensure a clean start for JSON response
 if (ob_get_length()) {
  ob_clean();
 }
 header('Content-Type: application/json');

 $response = [
  'success' => false,
  'message' => 'An unknown error occurred during submission.'
 ];

 try {
  // --- 1. Validate Input (Basic Check) ---
  // Ensure all required fields, including the new 'type_of_inquiry', are present
  if (empty($_POST['first_name']) || empty($_POST['email_address']) || empty($_POST['type_of_inquiry']) || empty($_POST['project_details']) || empty($_POST['privacy_consent'])) {
   $response['message'] = 'Validation failed: Please ensure all required fields are filled out and the privacy consent box is checked.';
   echo json_encode($response);
   exit;
  }

  // --- 2. Sanitize and Collect Data ---
  $first_name  = htmlspecialchars(trim($_POST['first_name']));
  $email_address = htmlspecialchars(trim($_POST['email_address']));
  $type_of_inquiry = htmlspecialchars(trim($_POST['type_of_inquiry']));
  $project_details = htmlspecialchars(trim($_POST['project_details']));
 
  // The outgoing email Subject uses the new Inquiry Type for routing
  $email_subject = "NEW Salzee Inquiry: " . $type_of_inquiry . " from " . $first_name;

  // --- 3. PHPMailer Setup & Body Construction ---
 
  // Body of the email (HTML format for professional presentation)
  $body = "
   <html>
   <head>
    <style>
     body { font-family: Arial, sans-serif; line-height: 1.6; color: #333333; }
     .container { max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #eee; border-radius: 8px; }
     h2 { color: #0097A7; border-bottom: 2px solid #0097A7; padding-bottom: 10px; }
     .detail-row { margin-bottom: 15px; padding: 10px; background-color: #f9f9f9; border-radius: 4px; }
     .label { font-weight: bold; color: #333333; display: block; margin-bottom: 3px;}
     .content { margin-top: 0; }
    </style>
   </head>
   <body>
    <div class='container'>
     <h2>New Salzee Solutions Ltd Website Inquiry (Server Side Email Body)</h2>
     <p>The following inquiry was submitted via the Contact Us form:</p>
    
     <div class='detail-row'>
      <span class='label'>Name:</span>
      <p class='content'>{$first_name}</p>
     </div>
    
     <div class='detail-row'>
      <span class='label'>Email:</span>
      <p class='content'>{$email_address}</p>
     </div>

     <div class='detail-row' style='background-color: #e6f9e9;'>
      <span class='label' style='color: #0097A7;'>Inquiry Type:</span>
      <p class='content'><strong>{$type_of_inquiry}</strong></p>
     </div>
    
     <div class='detail-row'>
      <span class='label'>Message / Project Details:</span>
      <p class='content'>{$project_details}</p>
     </div>
    
    </div>
   </body>
   </html>
  ";
 
  // --- MOCKING EMAIL SEND LOGIC ---
  // The client-side JS is now responsible for sending the email via EmailJS.
  // This entire block is now functionally obsolete but preserved as requested.
  $email_sent_successfully = false; // Set to false so the client-side fetch always fails (forcing the client-side JS to take over)
 
  if ($email_sent_successfully) {
   $response['success'] = true;
   $response['message'] = 'Thank you! Your message has been sent successfully. We will be in touch within 24 business hours as promised.';
  } else {
   // Since the client-side JS is now handling the submission, we can signal a failure
   // here to ensure the client-side JavaScript handles the success state.
   $response['message'] = 'Client-side processing will now take over.';
  }

 } catch (Exception $e) {
  // Catch any critical PHP/PHPMailer errors
  $response['message'] = "Server Error: Could not process request. Please contact system administrator.";
 }

 // We MUST exit here to prevent the rest of the HTML page from loading if this was an AJAX call
 // echo json_encode($response);
 // exit;
}
// ====================================================================
// END AJAX PROCESSING BLOCK
// ====================================================================

// Include the standard header for HTML structure, metadata, and main navigation
include 'includes/header.php';
?>

<!-- Add Google Fonts for Brand Guide Compliance: Montserrat (Headings) and Open Sans (Body) -->
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<!-- Load Tailwind CSS CDN -->
<script src="https://cdn.tailwindcss.com"></script>

<!-- Custom CSS for Brand Guide colors, fonts, and the modal/form aesthetics -->
<style>
 /* Brand Guide Colors & Typography Implementation */
 :root {
  --brand-teal: #0097A7; 
  --brand-charcoal: #333333;
  --brand-background: #F9F9F9;
  --brand-aqua-accent: #4DD0E1;
  --success-green: #2E7D32;
  --error-red: #B91C1C; 
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
  .hover\:bg-brand-teal-dark:hover { background-color: #007A8A; } /* A darker shade of teal for hover state */


 /* Custom Input Focus State */
 .form-input-focus:focus {
  border-color: var(--brand-teal);
  box-shadow: 0 0 0 3px rgba(0, 151, 167, 0.3); /* Teal ring */
 }

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

 /* Custom Modal/Overlay Styles */
 #form-overlay {
  transition: opacity 0.3s ease-in-out;
  z-index: 50;
 }
 .modal-box {
  transition: transform 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
 }
</style>

<main>
 <!-- 1. Hero Section: Contact Us -->
 <section class="py-16 md:py-24 bg-brand-charcoal
bg-[url('assets/images/contact.webp')]
bg-cover bg-center
relative overflow-hidden">

  <!-- Updated: Increased opacity from opacity-40 to opacity-60 to darken the background image slightly -->
  <div class="absolute inset-0 bg-black opacity-60"></div>

  <div class="max-w-7xl mx-auto container-padding text-center relative z-10">
  
   <h1 class="font-heading text-4xl md:text-5xl lg:text-6xl font-extrabold text-white leading-tight mb-4 max-w-4xl mx-auto">
    Contact Us
   </h1>
  
   <p class="text-xl text-white max-w-3xl mx-auto font-body mb-8">
    Let’s build something great together. We look forward to hearing from you.
   </p>
  </div>
 </section>

 <!-- 2. Contact Grid: Info & Form -->
 <section class="py-16 md:py-24 bg-white">
  <div class="max-w-7xl mx-auto container-padding">
   <div class="grid lg:grid-cols-2 gap-12">
   
    <!-- Left Column: Contact Information and Trust Signals (Visually Enhanced) -->
    <div class="space-y-12">
    
     <h2 class="font-heading text-3xl font-bold text-brand-teal  border-b pb-3 border-gray-100">
      Get In Touch
     </h2>
    
     <p class="text-lg text-gray-700 font-body">
      Whether you’re looking for IT consultancy, policy research, technical support, or training, we’d love to hear from you. Get in touch today through any of the channels below, or fill out the contact form, and let’s explore how we can work together.
     </p>

     <!-- Contact Details Blocks (Highlighted with Bright Aqua Accent) -->
     <div class="space-y-6">
     
      <!-- Email -->
      <div class="flex items-center space-x-4 p-4 rounded-lg border border-gray-100 shadow-sm hover:shadow-md transition duration-200">
       <div class="p-3 rounded-full bg-brand-aqua-accent flex-shrink-0">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
         <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8m-2 4v7a2 2 0 01-2 2H7a2 2 0 01-2-2v-7" />
        </svg>
       </div>
       <div>
        <h3 class="font-heading text-lg font-semibold text-brand-charcoal">Email Us</h3>
        <p class="text-gray-600 font-body break-words">info@salzeeglobal.com</p>
       </div>
      </div>

      <!-- Phone -->
      <div class="flex items-center space-x-4 p-4 rounded-lg border border-gray-100 shadow-sm hover:shadow-md transition duration-200">
       <div class="p-3 rounded-full bg-brand-aqua-accent flex-shrink-0">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
         <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.79 21 3 14.21 3 6V5z" />
        </svg>
       </div>
       <div>
        <h3 class="font-heading text-lg font-semibold text-brand-charcoal">Call Us</h3>
        <p class="text-gray-600 font-body">+44 (0)141 270852</p>
       </div>
      </div>
     </div>
    
     <!-- Location Visual Trust Signal (Simulated Map) -->
     <div class="mt-8 pt-6 border-t border-gray-100">
      <h3 class="font-heading text-xl font-semibold text-brand-charcoal mb-4">
       Our Location
      </h3>
      <p class="text-gray-600 font-body mb-4">
       Glasgow city, Scotland, UK
      </p>
      <!-- Simulated Map Placeholder -->
      <div class="w-full h-48 rounded-lg overflow-hidden border-2 border-brand-teal/50 shadow-lg">
       <img src="assets/images/glasgow_city.webp"
        alt="Map showing Glasgow, Scotland, UK location."
        class="w-full h-full object-cover"
        onerror="this.onerror=null; this.src='https://placehold.co/700x300/F0F7F7/0097A7?text=Location+Trust+Signal';"
       >

      </div>
     </div>

    </div>

    <!-- Right Column: Contact Form (Updated Fields) -->
    <div>
     <h2 class="font-heading text-3xl font-bold text-brand-charcoal border-b pb-3 border-gray-100 mb-6">
      Leave a Message
     </h2>
    
     <form id="contact-form" class="space-y-5">
      <input type="hidden" name="is_ajax" value="1">

      <!-- Full Name -->
      <div>
       <label for="first_name" class="block text-sm font-medium text-brand-charcoal mb-1">Full Name <span class="text-red-500">*</span></label>
       <input type="text" id="first_name" name="first_name" required
        class="form-input-focus mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-1 transition font-body"
        placeholder="Enter your full name">
      </div>

      <!-- Email Address -->
      <div>
       <label for="email_address" class="block text-sm font-medium text-brand-charcoal mb-1">Email Address <span class="text-red-500">*</span></label>
       <input type="email" id="email_address" name="email_address" required
        class="form-input-focus mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-1 transition font-body"
        placeholder="Enter your business email address">
      </div>
     
      <!-- Type of Inquiry (Dropdown for Lead Routing) -->
      <div>
       <label for="type_of_inquiry" class="block text-sm font-medium text-brand-charcoal mb-1">Type of Inquiry <span class="text-red-500">*</span></label>
       <select id="type_of_inquiry" name="type_of_inquiry" required
        class="form-input-focus mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-1 transition appearance-none bg-white font-body">
        <option value="" disabled selected>Select an inquiry type...</option>
        <option value="IT Consultancy & Strategy">IT Consultancy & Strategy</option>
        <option value="Technical Support Request">Technical Support Request</option>
        <option value="Training Services Enrollment">Training Services Enrollment</option>
        <option value="Policy Research & Analysis">Policy Research & Analysis</option>
        <option value="General Question">General Question</option>
       </select>
      </div>

      <!-- Message / Project Details -->
      <div>
       <label for="project_details" class="block text-sm font-medium text-brand-charcoal mb-1">Message / Project Details <span class="text-red-500">*</span></label>
       <textarea id="project_details" name="project_details" rows="6" required
        class="form-input-focus mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-1 transition font-body"
        placeholder="Tell us about your project, challenge, or how we can help your team..."></textarea>
      </div>
     
      <!-- Privacy Consent Checkbox -->
      <div class="flex items-start">
       <input type="checkbox" id="privacy_consent" name="privacy_consent" required
        class="h-4 w-4 text-brand-teal border-gray-300 rounded focus:ring-brand-teal mt-1">
       <label for="privacy_consent" class="ml-3 text-sm text-gray-700 font-body">
        I consent to Salzee Solutions Ltd using my details to contact me regarding my inquiry.
       </label>
      </div>
     
      <!-- RESPONSE TIME PROMISE - Confirmed as a Trust Signal -->
      <p class="text-sm text-gray-500 pt-1 font-body flex items-center">
       <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-brand-teal flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
       </svg>
       Our team guarantees a personalized response within 24 business hours.
      </p>

      <!-- Submission Button -->
      <div>
       <button type="submit" id="submit-button"
        class="w-full inline-flex items-center justify-center px-8 py-4 bg-brand-teal text-white border-2 border-brand-teal font-bold rounded-lg hover:bg-white hover:text-brand-teal transition duration-150 shadow-xl transform hover:scale-[1.02] font-heading">
        Send Message
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 9l3 3m0 0l-3 3m3-3H8m-8 9h16a2 2 0 002-2V5a2 2 0 00-2-2H4a2 2 0 00-2 2v14a2 2 0 002 2z" /></svg>
       </button>
      </div>
     </form>
    </div>
   </div>
  </div>
 </section>

 <!-- Overlay/Modal for Success and Error Messages -->
 <div id="form-overlay" class="fixed inset-0 bg-black bg-opacity-70 flex items-center justify-center opacity-0 pointer-events-none" style="z-index: 9999;">
  <div id="form-wrapper" class="modal-box bg-white p-8 rounded-xl shadow-2xl text-center transform scale-[0.7] opacity-0 transition duration-300" onclick="event.stopPropagation()">
   <!-- Content is injected here -->
  </div>
 </div>
</main>

<!-- IMPORTANT: EmailJS SDK MUST be loaded before your script runs -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>

<!-- The new EmailJS logic is contained in this script block -->
<script>
 // --- 1. CONFIGURE EMAILJS IDS ---
 // IMPORTANT: You must replace these placeholders with your actual IDs from the EmailJS dashboard.
 const SERVICE_ID = 'service_ruw5x74'; // e.g., 'service_xxxxxxxx'
 const TEMPLATE_ID = 'template_sl4ixce'; // e.g., 'template_xxxxxxxx'
 const PUBLIC_KEY = 'UDEIuDVy1NBGmYbTU'; // e.g., 'aBcDeFgHiJkL-12345'
 
 document.addEventListener('DOMContentLoaded', () => {
  const form = document.getElementById('contact-form');
  const formOverlay = document.getElementById('form-overlay');
  const formWrapper = document.getElementById('form-wrapper');
  const submitButton = document.getElementById('submit-button');

  // Initialize EmailJS with your Public Key
  if (typeof emailjs !== 'undefined') {
   emailjs.init(PUBLIC_KEY);
  } else {
   console.error("EmailJS SDK not loaded. Check the script tag source.");
  }


  // Add event listener to close overlay when clicking outside the modal box
  formOverlay.addEventListener('click', (event) => {
   if (event.target === formOverlay) {
    hideOverlay();
   }
  });


  /**
  * Shows the message overlay with the given status and message.
  * @param {boolean} success - True for success, false for error.
  * @param {string} message - The message content to display.
  */
  function showOverlay(success, message) {
   // Setup styles for success or error
   const colorClass = success ? 'text-success-green' : 'text-error-red';
   const icon = success
    ? '<svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-success-green mx-auto mb-3" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>'
    : '<svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-error-red mx-auto mb-3" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" /></svg>';

   const title = success ? 'Success' : 'Error';
   const buttonClass = success ? 'bg-green-100 text-success-green hover:bg-green-200' : 'bg-red-100 text-error-red hover:bg-red-200';

   formWrapper.innerHTML = `
    ${icon}
    <p class="text-3xl font-extrabold ${colorClass} font-heading">${title}</p>
    <p class="text-md text-gray-700 mt-2 max-w-sm font-body">${message}</p>
    <button onclick="window.hideOverlay()" class="mt-4 px-4 py-2 ${buttonClass} font-semibold rounded-lg transition">Close</button>
   `;

   // Display modal
   formOverlay.classList.remove('opacity-0', 'pointer-events-none');
   formWrapper.classList.add('scale-100', 'opacity-100');
   formWrapper.classList.remove('scale-[0.7]', 'opacity-0');
   document.body.style.overflow = 'hidden'; // Prevent background scrolling
  }

  /**
  * Hides the message overlay.
  */
  window.hideOverlay = function() {
   formOverlay.classList.add('opacity-0', 'pointer-events-none');
   formWrapper.classList.add('scale-[0.7]', 'opacity-0');
   formWrapper.classList.remove('scale-100', 'opacity-100');
   document.body.style.overflow = ''; // Restore background scrolling
  }

  form.addEventListener('submit', async (e) => {
   e.preventDefault();
  
   // Check if EmailJS is initialized before proceeding
   if (typeof emailjs === 'undefined' || PUBLIC_KEY === 'YOUR_EMAILJS_PUBLIC_KEY') {
    showOverlay(false, 'Email service error: Please ensure EmailJS is loaded and configured with valid IDs.');
    return;
   }

   // Store original button content for reset
   const originalButtonContent = submitButton.innerHTML;

   submitButton.innerHTML = '<svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg> Sending...';
   submitButton.disabled = true;
   submitButton.classList.add('opacity-70');

   try {
    // Collect form data for EmailJS payload
    const formData = new FormData(form);
   
    // --- MAPPING FORM DATA TO EMAILJS TEMPLATE VARIABLES ---
    const templateParams = {
     // Maps to {{name}} in your template
     name: formData.get('first_name'),
     
     // Maps to {{email}} in your template (used for Reply-To header)
     email: formData.get('email_address'),
     
     // Maps to {{inquiry_type}} in your template (used in the subject line and body)
     inquiry_type: formData.get('type_of_inquiry'),
     
     // Maps to {{message}} in your template
     message: formData.get('project_details'),
    };
   
    // --- NEW: EmailJS API Call ---
    const response = await emailjs.send(
     SERVICE_ID,
     TEMPLATE_ID,
     templateParams
    );

    // Check the response status
    if (response.status === 200) {
     showOverlay(true, 'Thank you! Your message has been sent successfully. We will be in touch within 24 business hours as promised.');
     form.reset(); // Clear the form on success
    } else {
     // EmailJS error (e.g., template not found, service down)
     showOverlay(false, 'The email service failed to send your message. Error Code: ' + response.status + '. Please try again or contact us directly at info@salzeeglobal.com.');
    }
   } catch (error) {
    console.error('EmailJS Submission failed:', error);
    // Critical network or system error (e.g., API key issue, network down)
    showOverlay(false, 'A critical error occurred while sending your message. Please try again or contact system administrator.');
   } finally {
    // Reset button state
    submitButton.innerHTML = originalButtonContent;
    submitButton.disabled = false;
    submitButton.classList.remove('opacity-70');
   }
  });
 });
</script>

<?php
 // Include the standard footer to close the page body and add copyright
 include 'includes/footer.php';
?>
