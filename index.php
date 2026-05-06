<?php
include 'includes/header.php';
?>

    
    <!-- Main Content -->
    <main id="main-content">
        <!-- Hero Section -->
        <section class="hero" id="hero">
            <div class="hero-background">
                <div class="hero-overlay"></div>
            </div>
            <div class="container hero-content">
                <div class="hero-text fade-in-up">
                    <span class="hero-badge">Enrolling Now for 2026</span>
                    <h1 class="hero-title">Nurturing Curiosity,<br>Building Kindness,<br><span class="highlight">Growing Together</span></h1>
                    <p class="hero-description">Award-winning early childhood education for children ages 1-6. Where every child discovers their potential through play-based learning.</p>
                    <div class="hero-buttons">
                        <a href="admission.php" class="btn btn-primary btn-large">
                            <i class="fas fa-calendar-check"></i> Book a Tour
                        </a>
                        <a href="#programs" class="btn btn-secondary btn-large">
                            <i class="fas fa-play-circle"></i> Watch Video
                        </a>
                    </div>
                    <div class="hero-stats">
                        <div class="stat-item">
                            <span class="stat-number" data-count="15">0</span>
                            <span class="stat-label">Years Experience</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number" data-count="500">0</span>
                            <span class="stat-label">Happy Families</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number" data-count="12">0</span>
                            <span class="stat-label">Expert Teachers</span>
                        </div>
                    </div>
                </div>
                <div class="hero-image fade-in-right">
                    <div class="image-container">
                        <img src="images/hero-children.jpg" alt="Happy children playing at Toddler Town Kindergarten" class="hero-main-image">
                        <div class="image-accent"></div>
                    </div>
                    <div class="hero-card floating">
                        <i class="fas fa-star"></i>
                        <span>M0SeS Accredited</span>
                    </div>
                </div>
            </div>
            <div class="hero-wave">
                <svg viewBox="0 0 1440 120" preserveAspectRatio="none">
                    <path d="M0,64 C480,160 960,0 1440,64 L1440,120 L0,120 Z" fill="#ffffff"></path>
                </svg>
            </div>
        </section>
        
        <!-- Programs Section -->
        <section class="programs" id="programs">
            <div class="container">
                <div class="section-header text-center">
                    <span class="section-badge">Our Programs</span>
                    <h2 class="section-title">Age-Appropriate Learning</h2>
                    <p class="section-description">Tailored curriculum designed for each developmental stage</p>
                </div>
                
                <div class="programs-grid">
                    <div class="program-card fade-in-up" data-delay="0">
                        <div class="program-icon">
                            <i class="fas fa-baby"></i>
                        </div>
                        <h3>Toddlers</h3>
                        <span class="program-age">1-2 Years</span>
                        <p>Gentle introduction to structured learning through sensory play and social interaction.</p>
                        <ul class="program-features">
                            <li><i class="fas fa-check"></i> Sensory Development</li>
                            <li><i class="fas fa-check"></i> Motor Skills</li>
                            <li><i class="fas fa-check"></i> Social Interaction</li>
                        </ul>
                        <a href="curriculum.php" class="program-link">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                    
                    <div class="program-card fade-in-up" data-delay="100">
                        <div class="program-icon">
                            <i class="fas fa-shapes"></i>
                        </div>
                        <h3>Preschool</h3>
                        <span class="program-age">2-4 Years</span>
                        <p>Building foundational skills through creative play, early literacy, and numeracy activities.</p>
                        <ul class="program-features">
                            <li><i class="fas fa-check"></i> Early Literacy</li>
                            <li><i class="fas fa-check"></i> Number Concepts</li>
                            <li><i class="fas fa-check"></i> Creative Arts</li>
                        </ul>
                        <a href="curriculum.php" class="program-link">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                    
                    <div class="program-card fade-in-up" data-delay="200">
                        <div class="program-icon">
                            <i class="fas fa-book-open"></i>
                        </div>
                        <h3>Kindergarten</h3>
                        <span class="program-age">4-6 Years</span>
                        <p>Preparing for elementary school with advanced learning, critical thinking, and independence.</p>
                        <ul class="program-features">
                            <li><i class="fas fa-check"></i> Reading & Writing</li>
                            <li><i class="fas fa-check"></i> Class room Activities</li>
                            <li><i class="fas fa-check"></i> School Readiness</li>
                        </ul>
                        <a href="curriculum.php" class="program-link">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Why Choose Us Section -->
        <section class="why-choose" id="why-choose">
            <div class="container">
                <div class="why-choose-content">
                    <div class="why-choose-text fade-in-left">
                        <span class="section-badge">Why Choose Us</span>
                        <h2 class="section-title">A Place Where Children Thrive</h2>
                        <p class="section-description">We combine proven educational methods with a nurturing environment to help every child reach their full potential.</p>
                        
                        <div class="features-list">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-user-graduate"></i>
                                </div>
                                <div class="feature-content">
                                    <h4>Certified Teachers</h4>
                                    <p>All staff hold early childhood education certifications with ongoing training.</p>
                                </div>
                            </div>
                            
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <div class="feature-content">
                                    <h4>Safe Environment</h4>
                                    <p>24/7 security, biometric access, and comprehensive safety protocols.</p>
                                </div>
                            </div>
                            
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div class="feature-content">
                                    <h4>Low Teacher Ratio</h4>
                                    <p>1:4 for toddlers, 1:6 for preschool, 1:8 for kindergarten classes.</p>
                                </div>
                            </div>
                            
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-leaf"></i>
                                </div>
                                <div class="feature-content">
                                    <h4>Nature-Based Learning</h4>
                                    <p>Daily outdoor time with sensory gardens and nature exploration.</p>
                                </div>
                            </div>
                        </div>
                        
                        <a href="about.php" class="btn btn-primary">Learn More About Us</a>
                    </div>
                    
                    <div class="why-choose-images fade-in-right">
                        <div class="image-grid">
                            <img src="images/classroom-1.jpg" alt="Bright classroom with learning materials" class="img-1" loading="lazy">
                            <img src="images/playground-1.jpg" alt="Children playing outdoors" class="img-2" loading="lazy">
                            <img src="images/teacher-child.jpg" alt="Teacher helping child" class="img-3" loading="lazy">
                        </div>
                        <div class="experience-badge">
                            <span class="years">15+</span>
                            <span class="text">Years of Excellence</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Testimonials Section -->
        <section class="testimonials" id="testimonials">
            <div class="container">
                <div class="section-header text-center">
                    <span class="section-badge">Parent Testimonials</span>
                    <h2 class="section-title">What Families Say</h2>
                    <p class="section-description">Hear from parents who trust us with their children</p>
                </div>
                
                <div class="testimonials-slider" id="testimonialsSlider">
                    <div class="testimonial-card active">
                        <div class="testimonial-content">
                            <div class="quote-icon"><i class="fas fa-quote-left"></i></div>
                            <p class="testimonial-text">"My daughter loves the nurturing environment! The teachers truly care about each child's development. She's learned so much in just 6 months."</p>
                            <div class="testimonial-author">
                                <img src="images/parent-1.jpg" alt="Sarah L." class="author-image" loading="lazy">
                                <div class="author-info">
                                    <span class="author-name">Sarah L.</span>
                                    <span class="author-role">Parent since 2024</span>
                                </div>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <div class="quote-icon"><i class="fas fa-quote-left"></i></div>
                            <p class="testimonial-text">"The teachers truly understand early childhood development. The communication between school and home is exceptional."</p>
                            <div class="testimonial-author">
                                <img src="images/parent-2.jpg" alt="James T." class="author-image" loading="lazy">
                                <div class="author-info">
                                    <span class="author-name">James T.</span>
                                    <span class="author-role">Parent since 2023</span>
                                </div>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <div class="quote-icon"><i class="fas fa-quote-left"></i></div>
                            <p class="testimonial-text">"The bilingual program made all the difference. My son is now confident in both English and Mandarin. Highly recommend!"</p>
                            <div class="testimonial-author">
                                <img src="images/parent-3.jpg" alt="Mei Chen" class="author-image" loading="lazy">
                                <div class="author-info">
                                    <span class="author-name">Mei Chen</span>
                                    <span class="author-role">Parent since 2022</span>
                                </div>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="slider-controls">
                    <button class="slider-btn prev" id="sliderPrev"><i class="fas fa-chevron-left"></i></button>
                    <div class="slider-dots" id="sliderDots"></div>
                    <button class="slider-btn next" id="sliderNext"><i class="fas fa-chevron-right"></i></button>
                </div>
            </div>
        </section>
        
        <!-- Accreditations Section -->
        <section class="accreditations">
            <div class="container">
                <div class="section-header text-center">
                    <h2 class="section-title">Our Accreditations</h2>
                    <p class="section-description">Recognized for excellence in early childhood education</p>
                </div>
                
                <div class="accreditations-grid">
                    <div class="accreditation-item fade-in-up">
                        <img src="images/naeyc-logo.png" alt="NAEYC Accredited" class="accreditation-logo" loading="lazy">
                        <span>NAEYC Accredited</span>
                    </div>
                    <div class="accreditation-item fade-in-up" data-delay="100">
                        <img src="images/state-license.png" alt="State Licensed" class="accreditation-logo" loading="lazy">
                        <span>State Licensed</span>
                    </div>
                    <div class="accreditation-item fade-in-up" data-delay="200">
                        <img src="images/healthy-start.png" alt="Healthy Start Certified" class="accreditation-logo" loading="lazy">
                        <span>Healthy Start Certified</span>
                    </div>
                    <div class="accreditation-item fade-in-up" data-delay="300">
                        <img src="images/green-school.png" alt="Green School Award" class="accreditation-logo" loading="lazy">
                        <span>Green School Award</span>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- CTA Section -->
        <section class="cta-section">
            <div class="container">
                <div class="cta-content fade-in-up">
                    <h2>Ready to Join Our Family?</h2>
                    <p>Schedule a tour today and see why Toddler Town is the perfect place for your child to grow and learn.</p>
                    <div class="cta-buttons">
                        <a href="admission.php" class="btn btn-primary btn-large">
                            <i class="fas fa-calendar-check"></i> Schedule a Tour
                        </a>
                        <a href="contact.php" class="btn btn-outline btn-large">
                            <i class="fas fa-phone"></i> Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- News & Events Section -->
        <section class="news-events" id="news-events">
            <div class="container">
                <div class="section-header">
                    <span class="section-badge">Stay Updated</span>
                    <h2 class="section-title">News & Events</h2>
                    <a href="gallery.php" class="view-all">View All <i class="fas fa-arrow-right"></i></a>
                </div>
                
                <div class="events-grid">
                    <div class="event-card fade-in-up">
                        <div class="event-date">
                            <span class="day">15</span>
                            <span class="month">Apr</span>
                        </div>
                        <div class="event-content">
                            <h4>Open House</h4>
                            <p>Join us for a day of activities and meet our teachers.</p>
                            <span class="event-time"><i class="fas fa-clock"></i> 9:00 AM - 2:00 PM</span>
                        </div>
                    </div>
                    
                    <div class="event-card fade-in-up" data-delay="100">
                        <div class="event-date">
                            <span class="day">22</span>
                            <span class="month">Apr</span>
                        </div>
                        <div class="event-content">
                            <h4>Parent-Teacher Conference</h4>
                            <p>Schedule your individual meeting with your child's teacher.</p>
                            <span class="event-time"><i class="fas fa-clock"></i> 3:00 PM - 6:00 PM</span>
                        </div>
                    </div>
                    
                    <div class="event-card fade-in-up" data-delay="200">
                        <div class="event-date">
                            <span class="day">01</span>
                            <span class="month">May</span>
                        </div>
                        <div class="event-content">
                            <h4>Speech Day Performance</h4>
                            <p>Watch our children showcase their talents in music and dance.</p>
                            <span class="event-time"><i class="fas fa-clock"></i> 10:00 AM - 12:00 PM</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <?php
include 'includes/footer.php';
?>