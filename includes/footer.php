<?php
// NOTE: $nav_links array should ideally be defined in header.php and available here, 
// but it is redefined here for safety if the user prefers standalone includes.
$nav_links = [
    // We now pass the slug to clean_link() for dynamic path creation
    'home' => ['text' => 'Home', 'url' => clean_link('home')], 
    'about_us' => ['text' => 'About Us', 'url' => clean_link('about_us')],
    'services' => ['text' => 'Services', 'url' => clean_link('services')],
    'why_trust_us' => ['text' => 'Why Trust Us', 'url' => clean_link('why_trust_us')],
    'contact_us' => ['text' => 'Contact Us', 'url' => clean_link('contact_us')],
    'Privacy Policy' => ['text' =>  'Privacy Policy',   'url'   =>  clean_link('privacy_policy')],
    'Terms and Conditions' => ['text' =>  'Terms and Conditions',   'url'   =>  clean_link('terms')],
];
?>

    <!-- NOTE: The closing sections of the main content (which would include the final CTA) are expected to be in the calling file -->
    
    <!-- Footer Section -->
    <!-- Brand Guide: Background uses Brand Charcoal #333333, text is white, links accent with Brand Teal #0097A7 -->
    <footer class="bg-brand-charcoal text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-10">

            <!-- Footer Main Columns -->
            <!-- Layout is a responsive grid (2 columns on mobile, 4 on tablet/desktop) -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-10 lg:gap-16 mb-12 border-b border-gray-700 pb-10">
                
                <!-- Column 1: Logo & Tagline/Mission -->
                <div class="col-span-2 md:col-span-1">
                    <a href="<?php echo clean_link('home'); ?>" class="flex items-center space-x-3 flex-shrink-0">
                        <!-- IMPORTANT: Corrected the image path to use forward slashes (/) for universal web compatibility -->
                        <img src="assets\images\Salzee logo horizontal for dark backgrounds.png" alt="Salzee Solutions Logo" class="h-10 w-auto" onerror="this.onerror=null;this.src='https://placehold.co/150x50/F9F9F9/0097A7?text=SALZEE';">
                    </a>
                    <p class="text-gray-400 text-sm mb-4 mt-4 leading-relaxed">
                        Simplifying technology. Empowering businesses and individuals.
                    </p>
                    <p class="text-gray-500 text-xs">
                        Registered in Scotland<br>
                        Company number: SC862216
                    </p>
                </div>

                <!-- Column 2: Quick Links -->
                <div>
                    <h3 class="font-heading text-lg font-semibold mb-4 text-brand-teal">Quick Links</h3>
                    <ul class="space-y-3 text-sm">
                        <?php
                        foreach ($nav_links as $link) {
                            echo '<li><a href="' . $link['url'] . '" class="text-gray-400 hover:text-brand-teal transition duration-150">' . $link['text'] . '</a></li>';
                        }
                        ?>
                    </ul>
                </div>

                <!-- Column 3: Our Services (Detailed List) -->
                <div>
                    <h3 class="font-heading text-lg font-semibold mb-4 text-brand-teal">Our Services</h3>
                    <ul class="space-y-3 text-sm">
                        <!-- Example services based on the content document -->
                        <li><a href="<?php echo clean_link('services'); ?>#service-pillar" class="text-gray-400 hover:text-brand-teal transition duration-150">IT Consultancy</a></li>
                        <li><a href="<?php echo clean_link('services'); ?>#service-pillar" class="text-gray-400 hover:text-brand-teal transition duration-150">Policy Research</a></li>
                        <li><a href="<?php echo clean_link('services'); ?>#service-pillar" class="text-gray-400 hover:text-brand-teal transition duration-150">Capacity Building & Training</a></li>
                        <li><a href="<?php echo clean_link('services'); ?>#service-pillar" class="text-gray-400 hover:text-brand-teal transition duration-150">Digital Transformation</a></li>
                    </ul>
                </div>

                <!-- Column 4: Contact & Social -->
                <div>
                    <h3 class="font-heading text-lg font-semibold mb-4 text-brand-teal">Get in Touch</h3>
                    <ul class="space-y-4 text-sm">
                        <!-- Phone -->
                        <li class="flex items-start text-gray-400">
                            <!-- Phone Icon - Set to Brand Teal #0097A7 -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mt-0.5 mr-3 flex-shrink-0 text-[#0097A7]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <span class="break-words">+44 (0)141 270852</span>
                        </li>
                        
                        <!-- Email -->
                        <li class="flex items-start text-gray-400">
                            <!-- Email Icon - Set to Brand Teal #0097A7 -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mt-0.5 mr-3 flex-shrink-0 text-[#0097A7]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8m-2 4v7a2 2 0 01-2 2H7a2 2 0 01-2-2v-7" />
                            </svg>
                            <a href="mailto:info@salzeeglobal.com" class="hover:text-brand-teal transition duration-150 break-all">info@salzeeglobal.com</a>
                        </li>
                        
                        <!-- Address -->
                        <li class="flex items-start text-gray-400">
                             <!-- Location Icon - Set to Brand Teal #0097A7 -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mt-0.5 mr-3 flex-shrink-0 text-[#0097A7]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            Glasgow city, Scotland, UK
                        </li>

                    </ul>
                </div>
            </div>

            <!-- Footer Bottom Bar & Copyright -->
            <div class="flex flex-col md:flex-row justify-between items-center text-sm text-gray-500 pt-4">
                <p>&copy; 2025 Salzee Solutions Ltd. All Rights Reserved.</p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <!-- Social Media Icons (Standard practice for footers) -->
                    <!-- LinkedIn -->
                    <a href="#" aria-label="LinkedIn" class="hover:text-brand-teal transition duration-150">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.564-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.753 7 2.45v6.785z"/></svg>
                    </a>
                    <!-- Facebook -->
                    <a href="#" aria-label="Facebook" class="hover:text-brand-teal transition duration-150">
                         <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-4h-3.83c-3.123 0-5.17 1.786-5.17 5.513v2.487z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Note: The closing </body> and </html> tags are in the original file, I am omitting them here as is standard for an include file. -->
