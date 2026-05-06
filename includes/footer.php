<!-- Footer -->
 <?php include __DIR__ . '/../config/config.php'; ?>
    <footer class="footer" id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="footer-grid">
                    <div class="footer-col">
                        <a href="index.php" class="footer-logo">
                            <div class="logo-icon">
                                <i class="fas fa-tree"></i>
                            </div>
                            <div class="logo-text">
                                <span class="logo-name"><?php echo $logo_name; ?></span>
                                <span class="logo-tagline"><?php echo $tagline_name; ?></span>
                            </div>
                        </a>
                        <p class="footer-description">Nurturing curiosity, building kindness, growing together. Award-winning early childhood education since 2011.</p>
                        <div class="social-links">
                            <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                            <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                    
                    <div class="footer-col">
                        <h4>Quick Links</h4>
                        <ul class="footer-links">
                            <li><a href="<?php echo $about_link; ?>">About Us</a></li>
                            <li><a href="<?php echo $curriculum_link; ?>">Curriculum</a></li>
                            <li><a href="<?php echo $admission_link; ?>">Admissions</a></li>
                            <li><a href="<?php echo $fees_link; ?>">School Fees</a></li>
                            <li><a href="<?php echo $gallery_link; ?>">Gallery</a></li>
                            <li><a href="<?php echo $contact_link; ?>">Contact</a></li>
                        </ul>
                    </div>
                    
                    <div class="footer-col">
                        <h4>Programs</h4>
                        <ul class="footer-links">
                            <li><a href="<?php echo $curriculum_link; ?>#toddlers">Toddlers (1-2 yrs)</a></li>
                            <li><a href="<?php echo $curriculum_link; ?>#preschool">Preschool (2-4 yrs)</a></li>
                            <li><a href="<?php echo $curriculum_link; ?>#kindergarten">Kindergarten (4-6 yrs)</a></li>
                            <li><a href="<?php echo $admission_link; ?>">Enrollment</a></li>
                            <li><a href="<?php echo $fees_link; ?>">Tuition &amp; Fees</a></li>
                        </ul>
                    </div>
                    
                    <div class="footer-col">
                        <h4>Contact Info</h4>
                        <ul class="footer-contact">
                            <li><i class="fas fa-map-marker-alt"></i> <?php echo $school_address; ?></li>
                            <li><i class="fas fa-phone"></i> <?php echo $school_phone; ?></li>
                            <li><i class="fas fa-envelope"></i> <?php echo $school_email; ?></li>
                            <li><i class="fas fa-clock"></i> <?php echo $work_days; ?>: <?php echo $open_time; ?> - <?php echo $close_time; ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-content">
                    <p>&copy; 2026 <?php echo $school_name; ?>. All rights reserved.</p>
                    <div class="footer-legal">
                        <a href="#">Privacy Policy</a>
                        <a href="#">Terms of Service</a>
                        <a href="#">Sitemap</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- Live Chat Widget -->
    <div class="live-chat" id="liveChat">
        <button class="chat-toggle" id="chatToggle">
            <i class="fas fa-comments"></i>
            <span class="chat-badge">3</span>
        </button>
        <div class="chat-window" id="chatWindow">
            <div class="chat-header">
                <h4>Live Chat</h4>
                <button class="chat-close" id="chatClose"><i class="fas fa-times"></i></button>
            </div>
            <div class="chat-body" id="chatBody">
                <div class="chat-message bot">
                    <p>Hi! Welcome to Toddler Town. How can we help you today?</p>
                </div>
            </div>
            <div class="chat-input">
                <input type="text" id="chatInput" placeholder="Type your message...">
                <button id="chatSend"><i class="fas fa-paper-plane"></i></button>
            </div>
        </div>
    </div>
    
    <!-- Scroll to Top Button -->
    <button class="scroll-top" id="scrollTop">
        <i class="fas fa-arrow-up"></i>
    </button>
    
    <!-- JavaScript Files -->
    <script src="js/main.js" defer></script>
    <script src="js/animation.js" defer></script>
    <script src="js/form-submission.js" defer></script>
    <script src="js/form-validation.js" defer></script>
    
    <!-- Schema.org Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "EducationalOrganization",
        "name": "<?php echo $school_name; ?>",
        "description": "Award-winning early childhood education for children ages 1-6",
        "url": "https://www.toddlertown.edu",
        "logo": "https://www.toddlertown.edu/images/logo.png",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "<?php echo $school_address; ?>",
            "addressLocality": "Kampala",
            "addressRegion": "Central",
            "postalCode": "00100",
            "addressCountry": "UG"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "<?php echo $school_phone; ?>",
            "contactType": "customer service",
            "email": "<?php echo $school_email; ?>",
            "availableLanguage": "<?php echo implode(", ", $available_languages); ?>"
        },
        "openingHours": "<?php echo $work_days; ?> <?php echo $open_time; ?>-<?php echo $close_time; ?>",
        "priceRange": "$$",
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.9",
            "reviewCount": "127"
        }
    }
    </script>
</body>
</html>
