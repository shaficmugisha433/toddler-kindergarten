<?php
include 'includes/header.php';
?>
    
    <main id="main-content">
        <!-- Page Header -->
        <section class="page-header">
            <div class="container">
                <h1>Contact Us</h1>
                <nav class="breadcrumb">
                    <a href="index.php">Home</a>
                    <span class="separator">/</span>
                    <span class="current">Contact</span>
                </nav>
            </div>
        </section>
        
        <!-- Contact Info & Form -->
        <section class="contact-section section">
            <div class="container">
                <div class="contact-grid">
                    <!-- Contact Form -->
                    <div class="contact-form-wrapper fade-in-left">
                        <div class="section-header">
                            <span class="section-badge">Get In Touch</span>
                            <h2 class="section-title">Send Us a Message</h2>
                            <p class="section-description">Have questions? We'd love to hear from you. Send us a message and we'll respond within 24 hours.</p>
                        </div>
                        
                        <form id="contactForm" class="contact-form" data-validate>
                            <input type="hidden" name="form_type" value="contact">
                            <div class="form-grid">
                                <div class="form-group">
                                    <label for="contactName">Full Name *</label>
                                    <input type="text" id="contactName" name="contactName" required placeholder="Your full name">
                                </div>
                                <div class="form-group">
                                    <label for="contactEmail">Email Address *</label>
                                    <input type="email" id="contactEmail" name="contactEmail" required placeholder="your@email.com">
                                </div>
                                <div class="form-group">
                                    <label for="contactPhone">Phone Number</label>
                                    <input type="tel" id="contactPhone" name="contactPhone" placeholder="+256 742 384 700">
                                </div>
                                <div class="form-group">
                                    <label for="contactSubject">Subject *</label>
                                    <select id="contactSubject" name="contactSubject" required>
                                        <option value="">Select a subject</option>
                                        <option value="admissions">Admissions Inquiry</option>
                                        <option value="tour">Schedule a Tour</option>
                                        <option value="curriculum">Curriculum Questions</option>
                                        <option value="employment">Employment Opportunities</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div class="form-group full-width">
                                    <label for="contactMessage">Message *</label>
                                    <textarea id="contactMessage" name="contactMessage" rows="5" required placeholder="How can we help you?"></textarea>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary btn-large">
                                    <i class="fas fa-paper-plane"></i> Send Message
                                </button>
                            </div>
                        </form>
                    </div>
                    
                    <!-- Contact Information -->
                    <div class="contact-info-wrapper fade-in-right">
                        <div class="info-card">
                            <div class="info-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="info-content">
                                <h4>Our Location</h4>
                                <p>Kampala Along Hoima Road<br></p>
                                <a href="#map" class="info-link">Get Directions <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        
                        <div class="info-card">
                            <div class="info-icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="info-content">
                                <h4>Phone Numbers</h4>
                                <p>Main: +256 742 384 700<br>Admissions: +256 742 384 700</p>
                                <a href="tel:+256742384700" class="info-link">Click to Call <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        
                        <div class="info-card">
                            <div class="info-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="info-content">
                                <h4>Email Addresses</h4>
                                <p>General: info@toddertown.edu<br>Admissions: admissions@toddertown.edu</p>
                                <a href="mailto:info@toddertown.edu" class="info-link">Send Email <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        
                        <div class="info-card">
                            <div class="info-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="info-content">
                                <h4>Office Hours</h4>
                                <p>Monday - Friday: 7:30 AM - 6:00 PM<br>Saturday - Sunday: Closed</p>
                                <span class="info-note">Extended care available until 6:00 PM</span>
                            </div>
                        </div>
                        
                        <div class="social-contact">
                            <h4>Follow Us</h4>
                            <div class="social-links-large">
                                <a href="#" class="social-link facebook"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="social-link instagram"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="social-link twitter"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="social-link youtube"><i class="fab fa-youtube"></i></a>
                                <a href="#" class="social-link wechat"><i class="fab fa-weixin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Map Section -->
        <section class="map-section" id="map">
            <div class="container-fluid">
                <div class="map-wrapper fade-in-up">
                    <div class="map-container">
                        <!-- Google Maps Embed -->
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3426.123456789!2d121.4737!3d31.2304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzHCsDEzJzQ5LjQiTiAxMjHCsDI4JzI1LjMiRQ!5e0!3m2!1sen!2sus!4v1234567890" 
                            width="100%" 
                            height="500" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            title="Toddler Town Kindergarten Location">
                        </iframe>
                    </div>
                    <div class="map-overlay">
                        <div class="map-info-card">
                            <h4>Visit Us</h4>
                            <p>Kampala Along Hoima Road</p>
                            <a href="https://maps.google.com" target="_blank" class="btn btn-primary">
                                <i class="fas fa-directions"></i> Get Directions
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Staff Directory -->
        <section class="staff-directory section">
            <div class="container">
                <div class="section-header text-center">
                    <span class="section-badge">Our Team</span>
                    <h2 class="section-title">Staff Directory</h2>
                    <p class="section-description">Reach out to the right person for your needs</p>
                </div>
                
                <div class="staff-grid">
                    <div class="staff-card fade-in-up">
                        <div class="staff-image">
                            <img src="images/staff-1.jpg" alt="Dr. Mei Lin" loading="lazy">
                            <div class="staff-status online"></div>
                        </div>
                        <div class="staff-info">
                            <h4>Dr. Mei Lin</h4>
                            <span class="staff-role">Principal</span>
                            <div class="staff-contact">
                                <a href="mailto:meilin@toddertown.edu"><i class="fas fa-envelope"></i></a>
                                <a href="tel:+256742384700"><i class="fas fa-phone"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="staff-card fade-in-up" data-delay="100">
                        <div class="staff-image">
                            <img src="images/staff-2.jpg" alt="Ms. Jennifer Wong" loading="lazy">
                            <div class="staff-status online"></div>
                        </div>
                        <div class="staff-info">
                            <h4>Ms. Jennifer Wong</h4>
                            <span class="staff-role">Curriculum Director</span>
                            <div class="staff-contact">
                                <a href="mailto:jennifer@toddertown.edu"><i class="fas fa-envelope"></i></a>
                                <a href="tel:+256742384700"><i class="fas fa-phone"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="staff-card fade-in-up" data-delay="200">
                        <div class="staff-image">
                            <img src="images/staff-3.jpg" alt="Mr. David Chen" loading="lazy">
                            <div class="staff-status away"></div>
                        </div>
                        <div class="staff-info">
                            <h4>Mr. David Chen</h4>
                            <span class="staff-role">Operations Director</span>
                            <div class="staff-contact">
                                <a href="mailto:david@toddertown.edu"><i class="fas fa-envelope"></i></a>
                                <a href="tel:+256742384700"><i class="fas fa-phone"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="staff-card fade-in-up" data-delay="300">
                        <div class="staff-image">
                            <img src="images/staff-4.jpg" alt="Ms. Sarah Johnson" loading="lazy">
                            <div class="staff-status online"></div>
                        </div>
                        <div class="staff-info">
                            <h4>Ms. Sarah Johnson</h4>
                            <span class="staff-role">Admissions Coordinator</span>
                            <div class="staff-contact">
                                <a href="mailto:admissions@toddertown.edu"><i class="fas fa-envelope"></i></a>
                                <a href="tel:+256742384700"><i class="fas fa-phone"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="staff-card fade-in-up" data-delay="400">
                        <div class="staff-image">
                            <img src="images/staff-3.jpg" alt="Ms. Lily Chen" loading="lazy">
                            <div class="staff-status online"></div>
                        </div>
                        <div class="staff-info">
                            <h4>Ms. Lily Chen</h4>
                            <span class="staff-role">Lead Teacher</span>
                            <div class="staff-contact">
                                <a href="mailto:lily@toddertown.edu"><i class="fas fa-envelope"></i></a>
                                <a href="tel:+256742384700"><i class="fas fa-phone"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="staff-card fade-in-up" data-delay="500">
                        <div class="staff-image">
                            <img src="images/staff-2.jpg" alt="Mr. Alex Rivera" loading="lazy">
                            <div class="staff-status online"></div>
                        </div>
                        <div class="staff-info">
                            <h4>Mr. Alex Rivera</h4>
                            <span class="staff-role">Assistant Director</span>
                            <div class="staff-contact">
                                <a href="mailto:alex@toddertown.edu"><i class="fas fa-envelope"></i></a>
                                <a href="tel:+256742384700"><i class="fas fa-phone"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Emergency Contact -->
        <section class="emergency-contact section" style="background: var(--bg-pink);">
            <div class="container">
                <div class="emergency-content fade-in-up">
                    <div class="emergency-icon">
                        <i class="fas fa-ambulance"></i>
                    </div>
                    <div class="emergency-info">
                        <h2>Emergency Contact Information</h2>
                        <p>For urgent matters outside of office hours, please use the following contacts:</p>
                        <div class="emergency-numbers">
                            <div class="emergency-number">
                                <i class="fas fa-phone-alt"></i>
                                <div>
                                    <span class="label">Emergency Services</span>
                                    <a href="tel:911" class="number">911</a>
                                </div>
                            </div>
                            <div class="emergency-number">
                                <i class="fas fa-phone"></i>
                                <div>
                                    <span class="label">School Emergency Line</span>
                                    <a href="tel:+15559876543" class="number">+1 (555) 987-6543</a>
                                </div>
                            </div>
                            <div class="emergency-number">
                                <i class="fas fa-mobile-alt"></i>
                                <div>
                                    <span class="label">Non-Emergency Admin</span>
                                    <a href="tel:+15559876544" class="number">+1 (555) 987-6544</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Parent Portal -->
        <section class="parent-portal section">
            <div class="container">
                <div class="portal-content fade-in-up">
                    <div class="portal-text">
                        <span class="section-badge">For Current Parents</span>
                        <h2>Parent Portal Login</h2>
                        <p>Access your child's information, view photos, check the calendar, and communicate with teachers through our secure parent portal.</p>
                        <ul class="portal-features">
                            <li><i class="fas fa-check-circle"></i> Daily activity reports</li>
                            <li><i class="fas fa-check-circle"></i> Photo gallery access</li>
                            <li><i class="fas fa-check-circle"></i> Calendar & events</li>
                            <li><i class="fas fa-check-circle"></i> Direct messaging with teachers</li>
                            <li><i class="fas fa-check-circle"></i> Bill payment</li>
                        </ul>
                        <a href="#" class="btn btn-primary btn-large">
                            <i class="fas fa-lock"></i> Login to Portal
                        </a>
                    </div>
                    <div class="portal-image">
                        <img src="images/classroom-1.jpg" alt="Parent portal preview" loading="lazy">
                    </div>
                </div>
            </div>
        </section>
        
        <!-- FAQ Quick Links -->
        <section class="faq-quick section" style="background: var(--bg-cream);">
            <div class="container">
                <div class="section-header text-center">
                    <h2 class="section-title">Quick Answers</h2>
                </div>
                <div class="faq-quick-grid">
                    <a href="admission.php#faq" class="faq-quick-card fade-in-up">
                        <i class="fas fa-question-circle"></i>
                        <h4>Admissions FAQ</h4>
                        <p>Common enrollment questions</p>
                    </a>
                    <a href="curriculum.php" class="faq-quick-card fade-in-up" data-delay="100">
                        <i class="fas fa-book"></i>
                        <h4>Curriculum Info</h4>
                        <p>Learning programs & schedules</p>
                    </a>
                    <a href="admission.php#tuition" class="faq-quick-card fade-in-up" data-delay="200">
                        <i class="fas fa-dollar-sign"></i>
                        <h4>Tuition & Fees</h4>
                        <p>Pricing & payment options</p>
                    </a>
                    <a href="about.php#safety" class="faq-quick-card fade-in-up" data-delay="300">
                        <i class="fas fa-shield-alt"></i>
                        <h4>Safety Policies</h4>
                        <p>Health & security measures</p>
                    </a>
                </div>
            </div>
        </section>
    </main>
    
<?php
include 'includes/footer.php';
?>
