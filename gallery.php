<?php
include 'includes/header.php';
?>
    
    <main id="main-content">
        <!-- Page Header -->
        <section class="page-header">
            <div class="container">
                <h1>Photo Gallery</h1>
                <nav class="breadcrumb">
                    <a href="index.php">Home</a>
                    <span class="separator">/</span>
                    <span class="current">Gallery</span>
                </nav>
            </div>
        </section>
        
        <!-- Gallery Filter -->
        <section class="gallery-filter section">
            <div class="container">
                <div class="filter-tabs">
                    <button class="filter-tab active" data-filter="all">
                        <i class="fas fa-th"></i> All
                    </button>
                    <button class="filter-tab" data-filter="classrooms">
                        <i class="fas fa-chalkboard"></i> Classrooms
                    </button>
                    <button class="filter-tab" data-filter="outdoor">
                        <i class="fas fa-tree"></i> Outdoor Play
                    </button>
                    <button class="filter-tab" data-filter="events">
                        <i class="fas fa-calendar-alt"></i> Events
                    </button>
                    <button class="filter-tab" data-filter="daily">
                        <i class="fas fa-sun"></i> Daily Life
                    </button>
                    <button class="filter-tab" data-filter="videos">
                        <i class="fas fa-video"></i> Videos
                    </button>
                </div>
            </div>
        </section>
        
        <!-- Photo Grid -->
        <section class="gallery-grid-section section">
            <div class="container">
                <div class="gallery-grid">
                    <!-- Classroom Photos -->
                    <div class="gallery-item classrooms fade-in-up">
                        <img src="images/gallery-classroom-1.jpg" alt="Bright classroom with learning centers" loading="lazy">
                        <div class="gallery-overlay">
                            <h4>Learning Centers</h4>
                            <p>Toddlers Classroom</p>
                            <button class="gallery-zoom"><i class="fas fa-search-plus"></i></button>
                        </div>
                    </div>
                    
                    <div class="gallery-item classrooms fade-in-up" data-delay="100">
                        <img src="images/gallery-classroom-2.jpg" alt="Preschool reading corner" loading="lazy">
                        <div class="gallery-overlay">
                            <h4>Reading Corner</h4>
                            <p>Preschool Classroom</p>
                            <button class="gallery-zoom"><i class="fas fa-search-plus"></i></button>
                        </div>
                    </div>
                    
                    <div class="gallery-item classrooms fade-in-up" data-delay="200">
                        <img src="images/gallery-classroom-3.jpg" alt="Kindergarten math center" loading="lazy">
                        <div class="gallery-overlay">
                            <h4>Math Center</h4>
                            <p>Kindergarten Classroom</p>
                            <button class="gallery-zoom"><i class="fas fa-search-plus"></i></button>
                        </div>
                    </div>
                    
                    <!-- Outdoor Play Photos -->
                    <div class="gallery-item outdoor fade-in-up" data-delay="300">
                        <img src="images/gallery-outdoor-1.jpg" alt="Children playing on playground" loading="lazy">
                        <div class="gallery-overlay">
                            <h4>Playground Time</h4>
                            <p>Main Playground</p>
                            <button class="gallery-zoom"><i class="fas fa-search-plus"></i></button>
                        </div>
                    </div>
                    
                    <div class="gallery-item outdoor fade-in-up" data-delay="400">
                        <img src="images/gallery-outdoor-2.jpg" alt="Sensory garden exploration" loading="lazy">
                        <div class="gallery-overlay">
                            <h4>Sensory Garden</h4>
                            <p>Nature Learning Area</p>
                            <button class="gallery-zoom"><i class="fas fa-search-plus"></i></button>
                        </div>
                    </div>
                    
                    <div class="gallery-item outdoor fade-in-up" data-delay="500">
                        <img src="images/gallery-outdoor-3.jpg" alt="Water play area" loading="lazy">
                        <div class="gallery-overlay">
                            <h4>Water Play</h4>
                            <p>Summer Activities</p>
                            <button class="gallery-zoom"><i class="fas fa-search-plus"></i></button>
                        </div>
                    </div>
                    
                    <!-- Events Photos -->
                    <div class="gallery-item events fade-in-up" data-delay="600">
                        <img src="images/gallery-event-1.jpg" alt="Spring performance" loading="lazy">
                        <div class="gallery-overlay">
                            <h4>Spring Performance</h4>
                            <p>Annual Show 2025</p>
                            <button class="gallery-zoom"><i class="fas fa-search-plus"></i></button>
                        </div>
                    </div>
                    
                    <div class="gallery-item events fade-in-up" data-delay="700">
                        <img src="images/gallery-event-2.jpg" alt="Parent teacher conference" loading="lazy">
                        <div class="gallery-overlay">
                            <h4>Parent Conference</h4>
                            <p>Fall 2025</p>
                            <button class="gallery-zoom"><i class="fas fa-search-plus"></i></button>
                        </div>
                    </div>
                    
                    <div class="gallery-item events fade-in-up" data-delay="800">
                        <img src="images/gallery-event-3.jpg" alt="Graduation ceremony" loading="lazy">
                        <div class="gallery-overlay">
                            <h4>Graduation</h4>
                            <p>Kindergarten 2025</p>
                            <button class="gallery-zoom"><i class="fas fa-search-plus"></i></button>
                        </div>
                    </div>
                    
                    <!-- Daily Life Photos -->
                    <div class="gallery-item daily fade-in-up" data-delay="900">
                        <img src="images/gallery-daily-1.jpg" alt="Circle time activities" loading="lazy">
                        <div class="gallery-overlay">
                            <h4>Circle Time</h4>
                            <p>Morning Routine</p>
                            <button class="gallery-zoom"><i class="fas fa-search-plus"></i></button>
                        </div>
                    </div>
                    
                    <div class="gallery-item daily fade-in-up" data-delay="1000">
                        <img src="images/gallery-daily-2.jpg" alt="Lunch time" loading="lazy">
                        <div class="gallery-overlay">
                            <h4>Lunch Time</h4>
                            <p>Healthy Meals</p>
                            <button class="gallery-zoom"><i class="fas fa-search-plus"></i></button>
                        </div>
                    </div>
                    
                    <div class="gallery-item daily fade-in-up" data-delay="1100">
                        <img src="images/gallery-daily-3.jpg" alt="Nap time" loading="lazy">
                        <div class="gallery-overlay">
                            <h4>Rest Time</h4>
                            <p>Quiet Afternoon</p>
                            <button class="gallery-zoom"><i class="fas fa-search-plus"></i></button>
                        </div>
                    </div>
                    
                    <div class="gallery-item daily fade-in-up" data-delay="1200">
                        <img src="images/gallery-daily-4.jpg" alt="Art activities" loading="lazy">
                        <div class="gallery-overlay">
                            <h4>Art Studio</h4>
                            <p>Creative Expression</p>
                            <button class="gallery-zoom"><i class="fas fa-search-plus"></i></button>
                        </div>
                    </div>
                    
                    <div class="gallery-item daily fade-in-up" data-delay="1300">
                        <img src="images/gallery-daily-5.jpg" alt="Music class" loading="lazy">
                        <div class="gallery-overlay">
                            <h4>Music Class</h4>
                            <p>Rhythm & Movement</p>
                            <button class="gallery-zoom"><i class="fas fa-search-plus"></i></button>
                        </div>
                    </div>
                    
                    <div class="gallery-item daily fade-in-up" data-delay="1400">
                        <img src="images/gallery-daily-6.jpg" alt="Science experiment" loading="lazy">
                        <div class="gallery-overlay">
                            <h4>Science Discovery</h4>
                            <p>STEAM Learning</p>
                            <button class="gallery-zoom"><i class="fas fa-search-plus"></i></button>
                        </div>
                    </div>
                </div>
                
                <!-- Load More Button -->
                <div class="text-center mt-3">
                    <button class="btn btn-secondary btn-large" id="loadMore">
                        <i class="fas fa-plus"></i> Load More Photos
                    </button>
                </div>
            </div>
        </section>
        
        <!-- Video Section -->
        <section class="video-gallery section" style="background: var(--bg-cream);">
            <div class="container">
                <div class="section-header text-center">
                    <span class="section-badge">Video Tours</span>
                    <h2 class="section-title">See Our School in Action</h2>
                    <p class="section-description">Watch videos of daily activities, special events, and virtual tours</p>
                </div>
                
                <div class="video-grid">
                    <div class="video-card fade-in-up">
                        <div class="video-thumbnail">
                            <img src="images/video-thumb-1.jpg" alt="Virtual tour video" loading="lazy">
                            <button class="video-play" data-video="virtual-tour">
                                <i class="fas fa-play-circle"></i>
                            </button>
                        </div>
                        <div class="video-info">
                            <h4>Virtual Campus Tour</h4>
                            <p>5:32 minutes</p>
                        </div>
                    </div>
                    
                    <div class="video-card fade-in-up" data-delay="100">
                        <div class="video-thumbnail">
                            <img src="images/video-thumb-2.jpg" alt="Day in the life video" loading="lazy">
                            <button class="video-play" data-video="day-in-life">
                                <i class="fas fa-play-circle"></i>
                            </button>
                        </div>
                        <div class="video-info">
                            <h4>A Day at Toddler Town</h4>
                            <p>8:15 minutes</p>
                        </div>
                    </div>
                    
                    <div class="video-card fade-in-up" data-delay="200">
                        <div class="video-thumbnail">
                            <img src="images/video-thumb-3.jpg" alt="Spring performance video" loading="lazy">
                            <button class="video-play" data-video="spring-show">
                                <i class="fas fa-play-circle"></i>
                            </button>
                        </div>
                        <div class="video-info">
                            <h4>Spring Performance 2025</h4>
                            <p>12:45 minutes</p>
                        </div>
                    </div>
                    
                    <div class="video-card fade-in-up" data-delay="300">
                        <div class="video-thumbnail">
                            <img src="images/video-thumb-4.jpg" alt="Teacher interviews video" loading="lazy">
                            <button class="video-play" data-video="teacher-intro">
                                <i class="fas fa-play-circle"></i>
                            </button>
                        </div>
                        <div class="video-info">
                            <h4>Meet Our Teachers</h4>
                            <p>6:20 minutes</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- 360 Virtual Tour -->
        <section class="virtual-tour-section section">
            <div class="container">
                <div class="tour-360-content fade-in-up">
                    <div class="tour-text">
                        <span class="section-badge">Immersive Experience</span>
                        <h2 class="section-title">360° Virtual Tour</h2>
                        <p>Explore our campus from anywhere in the world. Click and drag to look around, zoom in to see details, and navigate through different areas of our school.</p>
                        <ul class="tour-features">
                            <li><i class="fas fa-check-circle"></i> Interactive 360° views</li>
                            <li><i class="fas fa-check-circle"></i> All classrooms & facilities</li>
                            <li><i class="fas fa-check-circle"></i> Outdoor play areas</li>
                            <li><i class="fas fa-check-circle"></i> Available 24/7</li>
                        </ul>
                        <a href="#" class="btn btn-primary btn-large">
                            <i class="fas fa-vr-cardboard"></i> Start Virtual Tour
                        </a>
                    </div>
                    <div class="tour-preview">
                        <img src="images/360-tour-preview.jpg" alt="360 virtual tour preview" loading="lazy">
                        <div class="tour-preview-overlay">
                            <i class="fas fa-expand"></i>
                            <span>Click to Explore</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Instagram Feed -->
        <section class="instagram-feed section" style="background: var(--bg-blue);">
            <div class="container">
                <div class="section-header text-center">
                    <span class="section-badge">Follow Us</span>
                    <h2 class="section-title">@Toddlertown_Kinder</h2>
                    <p class="section-description">Stay updated with daily moments from our school</p>
                    <a href="https://instagram.com" target="_blank" class="btn btn-outline">
                        <i class="fab fa-instagram"></i> Follow on Instagram
                    </a>
                </div>
                
                <div class="instagram-grid">
                    <div class="insta-item fade-in-up">
                        <img src="images/insta-1.jpg" alt="Instagram post" loading="lazy">
                        <a href="#" class="insta-link"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="insta-item fade-in-up" data-delay="100">
                        <img src="images/insta-2.jpg" alt="Instagram post" loading="lazy">
                        <a href="#" class="insta-link"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="insta-item fade-in-up" data-delay="200">
                        <img src="images/insta-3.jpg" alt="Instagram post" loading="lazy">
                        <a href="#" class="insta-link"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="insta-item fade-in-up" data-delay="300">
                        <img src="images/insta-4.jpg" alt="Instagram post" loading="lazy">
                        <a href="#" class="insta-link"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="insta-item fade-in-up" data-delay="400">
                        <img src="images/insta-5.jpg" alt="Instagram post" loading="lazy">
                        <a href="#" class="insta-link"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="insta-item fade-in-up" data-delay="500">
                        <img src="images/insta-6.jpg" alt="Instagram post" loading="lazy">
                        <a href="#" class="insta-link"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Photo Download -->
        <section class="photo-download section">
            <div class="container">
                <div class="download-content fade-in-up">
                    <div class="download-icon">
                        <i class="fas fa-download"></i>
                    </div>
                    <div class="download-info">
                        <h2>Download Photo Pack for Parents</h2>
                        <p>Current parents can download high-resolution photos from recent events and activities. Login to the parent portal to access the full gallery.</p>
                        <div class="download-buttons">
                            <a href="#" class="btn btn-primary">
                                <i class="fas fa-lock"></i> Parent Portal Login
                            </a>
                            <a href="#" class="btn btn-secondary">
                                <i class="fas fa-file-pdf"></i> Download Prospectus
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- CTA Section -->
        <section class="cta-section">
            <div class="container">
                <div class="cta-content fade-in-up">
                    <h2>Want to See More?</h2>
                    <p>Schedule an in-person tour to experience our school firsthand and meet our teachers.</p>
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
    </main>
    
    <!-- Lightbox Modal -->
    <div class="lightbox" id="lightbox">
        <button class="lightbox-close" id="lightboxClose">
            <i class="fas fa-times"></i>
        </button>
        <button class="lightbox-prev" id="lightboxPrev">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button class="lightbox-next" id="lightboxNext">
            <i class="fas fa-chevron-right"></i>
        </button>
        <div class="lightbox-content">
            <img src="" alt="" id="lightboxImage">
            <div class="lightbox-caption" id="lightboxCaption"></div>
        </div>
    </div>
    
    <!-- Video Modal -->
    <div class="video-modal" id="videoModal">
        <button class="video-modal-close" id="videoModalClose">
            <i class="fas fa-times"></i>
        </button>
        <div class="video-modal-content">
            <div class="video-container" id="videoContainer">
                <!-- Video will be loaded here -->
            </div>
        </div>
    </div>
    
<?php
include 'includes/footer.php';
?>