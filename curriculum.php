<?php
include 'includes/header.php';
?>    
    <main id="main-content">
        <!-- Page Header -->
        <section class="page-header">
            <div class="container">
                <h1>Our Curriculum</h1>
                <nav class="breadcrumb">
                    <a href="index.php">Home</a>
                    <span class="separator">/</span>
                    <span class="current">Curriculum</span>
                </nav>
            </div>
        </section>
        
        <!-- Curriculum Overview -->
        <section class="curriculum-overview section">
            <div class="container">
                <div class="section-header text-center">
                    <span class="section-badge">Learning Approach</span>
                    <h2 class="section-title">Play-Based Learning for Whole-Child Development</h2>
                    <p class="section-description">Our curriculum nurtures cognitive, social-emotional, physical, and creative growth equally through joyful, hands-on exploration.</p>
                </div>
                
                <div class="age-groups-grid">
                    <div class="age-group-card fade-in-up" id="toddlers">
                        <div class="age-icon">
                            <i class="fas fa-baby"></i>
                        </div>
                        <h3>Toddlers</h3>
                        <span class="age-range">1-2 Years</span>
                        <p>Gentle introduction to structured learning through sensory play, music, and social interaction.</p>
                        <ul class="learning-goals">
                            <li><i class="fas fa-check"></i> Sensory Development</li>
                            <li><i class="fas fa-check"></i> Motor Skills (Fine & Gross)</li>
                            <li><i class="fas fa-check"></i> Language Acquisition</li>
                            <li><i class="fas fa-check"></i> Social Interaction</li>
                            <li><i class="fas fa-check"></i> Emotional Regulation</li>
                        </ul>
                        <a href="#toddlers-schedule" class="btn btn-secondary">View Schedule</a>
                    </div>
                    
                    <div class="age-group-card fade-in-up" data-delay="100" id="preschool">
                        <div class="age-icon">
                            <i class="fas fa-shapes"></i>
                        </div>
                        <h3>Preschool</h3>
                        <span class="age-range">2-4 Years</span>
                        <p>Building foundational skills through creative play, early literacy, numeracy, and STEAM activities.</p>
                        <ul class="learning-goals">
                            <li><i class="fas fa-check"></i> Early Literacy & Phonics</li>
                            <li><i class="fas fa-check"></i> Number Concepts</li>
                            <li><i class="fas fa-check"></i> Creative Arts</li>
                            <li><i class="fas fa-check"></i> Problem Solving</li>
                            <li><i class="fas fa-check"></i> Independence Skills</li>
                        </ul>
                        <a href="#preschool-schedule" class="btn btn-secondary">View Schedule</a>
                    </div>
                    
                    <div class="age-group-card fade-in-up" data-delay="200" id="kindergarten">
                        <div class="age-icon">
                            <i class="fas fa-book-open"></i>
                        </div>
                        <h3>Kindergarten</h3>
                        <span class="age-range">4-6 Years</span>
                        <p>Preparing for elementary school with advanced learning, critical thinking, and school readiness skills.</p>
                        <ul class="learning-goals">
                            <li><i class="fas fa-check"></i> Reading & Writing</li>
                            <li><i class="fas fa-check"></i> Mathematics</li>
                            <li><i class="fas fa-check"></i> STEAM Projects</li>
                            <li><i class="fas fa-check"></i> Critical Thinking</li>
                            <li><i class="fas fa-check"></i> School Readiness</li>
                        </ul>
                        <a href="#kindergarten-schedule" class="btn btn-secondary">View Schedule</a>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Daily Schedule Timeline -->
        <section class="daily-schedule section" style="background: var(--bg-cream);">
            <div class="container">
                <div class="section-header text-center">
                    <span class="section-badge">Daily Routine</span>
                    <h2 class="section-title">A Typical Day at Toddler Town</h2>
                    <p class="section-description">Balanced schedule combining learning, play, rest, and nutrition</p>
                </div>
                
                <div class="schedule-tabs">
                    <button class="schedule-tab active" data-target="toddlers-schedule">Toddlers</button>
                    <button class="schedule-tab" data-target="preschool-schedule">Preschool</button>
                    <button class="schedule-tab" data-target="kindergarten-schedule">Kindergarten</button>
                </div>
                
                <div class="schedule-content">
                    <!-- Toddlers Schedule -->
                    <div class="schedule-panel active" id="toddlers-schedule">
                        <div class="timeline-vertical">
                            <div class="timeline-item fade-in-up">
                                <div class="time-badge">8:00 AM</div>
                                <div class="timeline-content">
                                    <h4>Arrival & Free Play</h4>
                                    <p>Gentle welcome, free exploration, and morning socialization</p>
                                    <span class="activity-type"><i class="fas fa-smile"></i> Social</span>
                                </div>
                            </div>
                            <div class="timeline-item fade-in-up" data-delay="100">
                                <div class="time-badge">9:00 AM</div>
                                <div class="timeline-content">
                                    <h4>Circle Time</h4>
                                    <p>Songs, stories, and group activities</p>
                                    <span class="activity-type"><i class="fas fa-music"></i> Music & Language</span>
                                </div>
                            </div>
                            <div class="timeline-item fade-in-up" data-delay="200">
                                <div class="time-badge">10:00 AM</div>
                                <div class="timeline-content">
                                    <h4>Snack Time</h4>
                                    <p>Healthy nutritious snack</p>
                                    <span class="activity-type"><i class="fas fa-apple-alt"></i> Nutrition</span>
                                </div>
                            </div>
                            <div class="timeline-item fade-in-up" data-delay="300">
                                <div class="time-badge">10:30 AM</div>
                                <div class="timeline-content">
                                    <h4>Outdoor Play</h4>
                                    <p>Sensory garden exploration and gross motor activities</p>
                                    <span class="activity-type"><i class="fas fa-sun"></i> Physical</span>
                                </div>
                            </div>
                            <div class="timeline-item fade-in-up" data-delay="400">
                                <div class="time-badge">12:00 PM</div>
                                <div class="timeline-content">
                                    <h4>Lunch & Rest</h4>
                                    <p>Healthy meal followed by quiet rest time</p>
                                    <span class="activity-type"><i class="fas fa-bed"></i> Rest</span>
                                </div>
                            </div>
                            <div class="timeline-item fade-in-up" data-delay="500">
                                <div class="time-badge">3:00 PM</div>
                                <div class="timeline-content">
                                    <h4>Dismissal</h4>
                                    <p>Parent pickup and day recap</p>
                                    <span class="activity-type"><i class="fas fa-home"></i> Home</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Preschool Schedule -->
                    <div class="schedule-panel" id="preschool-schedule">
                        <div class="timeline-vertical">
                            <div class="timeline-item fade-in-up">
                                <div class="time-badge">8:00 AM</div>
                                <div class="timeline-content">
                                    <h4>Arrival & Free Play</h4>
                                    <p>Welcome activities and choice time</p>
                                    <span class="activity-type"><i class="fas fa-smile"></i> Social</span>
                                </div>
                            </div>
                            <div class="timeline-item fade-in-up" data-delay="100">
                                <div class="time-badge">9:00 AM</div>
                                <div class="timeline-content">
                                    <h4>Circle Time & Literacy</h4>
                                    <p>Phonics, stories, and group discussions</p>
                                    <span class="activity-type"><i class="fas fa-book"></i> Language Arts</span>
                                </div>
                            </div>
                            <div class="timeline-item fade-in-up" data-delay="200">
                                <div class="time-badge">10:00 AM</div>
                                <div class="timeline-content">
                                    <h4>Learning Stations</h4>
                                    <p>Rotating activities: math, art, science</p>
                                    <span class="activity-type"><i class="fas fa-flask"></i> STEAM</span>
                                </div>
                            </div>
                            <div class="timeline-item fade-in-up" data-delay="300">
                                <div class="time-badge">11:30 AM</div>
                                <div class="timeline-content">
                                    <h4>Outdoor Play</h4>
                                    <p>Playground time and nature exploration</p>
                                    <span class="activity-type"><i class="fas fa-running"></i> Physical</span>
                                </div>
                            </div>
                            <div class="timeline-item fade-in-up" data-delay="400">
                                <div class="time-badge">12:30 PM</div>
                                <div class="timeline-content">
                                    <h4>Lunch & Quiet Time</h4>
                                    <p>Meal and rest/reading time</p>
                                    <span class="activity-type"><i class="fas fa-utensils"></i> Nutrition</span>
                                </div>
                            </div>
                            <div class="timeline-item fade-in-up" data-delay="500">
                                <div class="time-badge">3:30 PM</div>
                                <div class="timeline-content">
                                    <h4>Dismissal</h4>
                                    <p>Parent pickup and reflection</p>
                                    <span class="activity-type"><i class="fas fa-home"></i> Home</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Kindergarten Schedule -->
                    <div class="schedule-panel" id="kindergarten-schedule">
                        <div class="timeline-vertical">
                            <div class="timeline-item fade-in-up">
                                <div class="time-badge">8:00 AM</div>
                                <div class="timeline-content">
                                    <h4>Arrival & Morning Work</h4>
                                    <p>Independent activities and journaling</p>
                                    <span class="activity-type"><i class="fas fa-pencil-alt"></i> Academic</span>
                                </div>
                            </div>
                            <div class="timeline-item fade-in-up" data-delay="100">
                                <div class="time-badge">9:00 AM</div>
                                <div class="timeline-content">
                                    <h4>Literacy Block</h4>
                                    <p>Reading, writing, and phonics instruction</p>
                                    <span class="activity-type"><i class="fas fa-book-reader"></i> Language Arts</span>
                                </div>
                            </div>
                            <div class="timeline-item fade-in-up" data-delay="200">
                                <div class="time-badge">10:30 AM</div>
                                <div class="timeline-content">
                                    <h4>Math & STEAM</h4>
                                    <p>Hands-on math and science projects</p>
                                    <span class="activity-type"><i class="fas fa-calculator"></i> Mathematics</span>
                                </div>
                            </div>
                            <div class="timeline-item fade-in-up" data-delay="300">
                                <div class="time-badge">12:00 PM</div>
                                <div class="timeline-content">
                                    <h4>Lunch & Recess</h4>
                                    <p>Meal and outdoor free play</p>
                                    <span class="activity-type"><i class="fas fa-running"></i> Physical</span>
                                </div>
                            </div>
                            <div class="timeline-item fade-in-up" data-delay="400">
                                <div class="time-badge">1:30 PM</div>
                                <div class="timeline-content">
                                    <h4>Specials</h4>
                                    <p>Music, Art, or Language rotation</p>
                                    <span class="activity-type"><i class="fas fa-palette"></i> Creative Arts</span>
                                </div>
                            </div>
                            <div class="timeline-item fade-in-up" data-delay="500">
                                <div class="time-badge">3:30 PM</div>
                                <div class="timeline-content">
                                    <h4>Dismissal</h4>
                                    <p>Parent pickup and day review</p>
                                    <span class="activity-type"><i class="fas fa-home"></i> Home</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Learning Activities Photo Grid -->
        <section class="learning-activities section">
            <div class="container">
                <div class="section-header text-center">
                    <span class="section-badge">Hands-On Learning</span>
                    <h2 class="section-title">Learning in Action</h2>
                    <p class="section-description">See our children engaged in meaningful, developmentally appropriate activities</p>
                </div>
                
                <div class="activity-grid">
                    <div class="activity-card fade-in-up">
                        <img src="images/activity-sensory.jpg" alt="Sensory play activity" loading="lazy">
                        <div class="activity-overlay">
                            <h4>Sensory Play</h4>
                            <p>Tactile exploration for brain development</p>
                        </div>
                    </div>
                    <div class="activity-card fade-in-up" data-delay="100">
                        <img src="images/activity-letters.jpg" alt="Letter learning activity" loading="lazy">
                        <div class="activity-overlay">
                            <h4>Early Literacy</h4>
                            <p>Phonics and letter recognition</p>
                        </div>
                    </div>
                    <div class="activity-card fade-in-up" data-delay="200">
                        <img src="images/activity-science.jpg" alt="Science experiment" loading="lazy">
                        <div class="activity-overlay">
                            <h4>Science Discovery</h4>
                            <p>Hands-on experiments and observation</p>
                        </div>
                    </div>
                    <div class="activity-card fade-in-up" data-delay="300">
                        <img src="images/activity-building.jpg" alt="Building blocks activity" loading="lazy">
                        <div class="activity-overlay">
                            <h4>Construction Play</h4>
                            <p>Spatial reasoning and engineering</p>
                        </div>
                    </div>
                    <div class="activity-card fade-in-up" data-delay="400">
                        <img src="images/activity-garden.jpg" alt="Gardening activity" loading="lazy">
                        <div class="activity-overlay">
                            <h4>Nature Learning</h4>
                            <p>Gardening and environmental awareness</p>
                        </div>
                    </div>
                    <div class="activity-card fade-in-up" data-delay="500">
                        <img src="images/activity-music.jpg" alt="Music activity" loading="lazy">
                        <div class="activity-overlay">
                            <h4>Music & Movement</h4>
                            <p>Rhythm, coordination, and expression</p>
                        </div>
                    </div>
                    <div class="activity-card fade-in-up" data-delay="600">
                        <img src="images/activity-art.jpg" alt="Art activity" loading="lazy">
                        <div class="activity-overlay">
                            <h4>Creative Arts</h4>
                            <p>Painting, drawing, and sculpting</p>
                        </div>
                    </div>
                    <div class="activity-card fade-in-up" data-delay="700">
                        <img src="images/activity-reading.jpg" alt="Reading activity" loading="lazy">
                        <div class="activity-overlay">
                            <h4>Story Time</h4>
                            <p>Reading comprehension and imagination</p>
                        </div>
                    </div>
                </div>
                
                <div class="text-center mt-3">
                    <a href="gallery.php" class="btn btn-primary btn-large">
                        <i class="fas fa-images"></i> View More Photos
                    </a>
                </div>
            </div>
        </section>
        
        <!-- Teacher-Child Ratio -->
        <section class="teacher-ratio section" style="background: var(--bg-blue);">
            <div class="container">
                <div class="section-header text-center">
                    <span class="section-badge">Individual Attention</span>
                    <h2 class="section-title">Low Teacher-Child Ratios</h2>
                    <p class="section-description">Ensuring every child receives personalized care and attention</p>
                </div>
                
                <div class="ratio-grid">
                    <div class="ratio-card fade-in-up">
                        <div class="ratio-number">1:4</div>
                        <h4>Toddler Class</h4>
                        <p>Maximum 4 children per teacher for intensive care and development support</p>
                        <ul class="ratio-features">
                            <li><i class="fas fa-check-circle"></i> Individual attention</li>
                            <li><i class="fas fa-check-circle"></i> Personalized care</li>
                            <li><i class="fas fa-check-circle"></i> Quick response to needs</li>
                        </ul>
                    </div>
                    <div class="ratio-card fade-in-up" data-delay="100">
                        <div class="ratio-number">1:6</div>
                        <h4>Preschool Class</h4>
                        <p>Optimal ratio for guided learning while fostering independence</p>
                        <ul class="ratio-features">
                            <li><i class="fas fa-check-circle"></i> Small group instruction</li>
                            <li><i class="fas fa-check-circle"></i> Social skill development</li>
                            <li><i class="fas fa-check-circle"></i> Guided exploration</li>
                        </ul>
                    </div>
                    <div class="ratio-card fade-in-up" data-delay="200">
                        <div class="ratio-number">1:8</div>
                        <h4>Kindergarten Class</h4>
                        <p>Preparing for elementary school with supportive teacher guidance</p>
                        <ul class="ratio-features">
                            <li><i class="fas fa-check-circle"></i> Academic support</li>
                            <li><i class="fas fa-check-circle"></i> School readiness</li>
                            <li><i class="fas fa-check-circle"></i> Individual progress tracking</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Special Programs -->
        <section class="special-programs section">
            <div class="container">
                <div class="section-header text-center">
                    <span class="section-badge">Enrichment</span>
                    <h2 class="section-title">Special Programs</h2>
                    <p class="section-description">Additional learning opportunities beyond core curriculum</p>
                </div>
                
                <div class="programs-grid-2">
                    <div class="special-program-card fade-in-up">
                        <div class="program-icon-large">
                            <i class="fas fa-language"></i>
                        </div>
                        <h3>Bilingual Program</h3>
                        <p>Mandarin English immersion for early language acquisition and cultural awareness.</p>
                        <ul class="program-benefits">
                            <li>Native speaker teachers</li>
                            <li>Daily language exposure</li>
                            <li>Cultural celebrations</li>
                        </ul>
                    </div>
                    <div class="special-program-card fade-in-up" data-delay="100">
                        <div class="program-icon-large">
                            <i class="fas fa-robot"></i>
                        </div>
                        <h3>STEAM Program</h3>
                        <p>Science, Technology, Engineering, Arts, and Mathematics integrated learning.</p>
                        <ul class="program-benefits">
                            <li>Hands-on experiments</li>
                            <li>Problem-solving skills</li>
                            <li>Creative thinking</li>
                        </ul>
                    </div>
                    <div class="special-program-card fade-in-up" data-delay="200">
                        <div class="program-icon-large">
                            <i class="fas fa-music"></i>
                        </div>
                        <h3>Music & Arts</h3>
                        <p>Weekly specialized instruction in music, visual arts, and creative movement.</p>
                        <ul class="program-benefits">
                            <li>Instrument exploration</li>
                            <li>Art techniques</li>
                            <li>Performance opportunities</li>
                        </ul>
                    </div>
                    <div class="special-program-card fade-in-up" data-delay="300">
                        <div class="program-icon-large">
                            <i class="fas fa-leaf"></i>
                        </div>
                        <h3>Nature Program</h3>
                        <p>Daily outdoor time with sensory gardens, nature trails, and environmental learning.</p>
                        <ul class="program-benefits">
                            <li>90-min outdoor time daily</li>
                            <li>Gardening activities</li>
                            <li>Environmental stewardship</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Assessment & Progress -->
        <section class="assessment section" style="background: var(--bg-cream);">
            <div class="container">
                <div class="assessment-content">
                    <div class="assessment-text fade-in-left">
                        <span class="section-badge">Tracking Progress</span>
                        <h2 class="section-title">Assessment & Parent Communication</h2>
                        <p class="section-description">We believe in transparent, ongoing communication about your child's development and learning journey.</p>
                        
                        <div class="assessment-features">
                            <div class="assessment-feature">
                                <div class="feature-icon-small">
                                    <i class="fas fa-clipboard-check"></i>
                                </div>
                                <div>
                                    <h4>Developmental Checklists</h4>
                                    <p>Regular assessments aligned with early learning standards</p>
                                </div>
                            </div>
                            <div class="assessment-feature">
                                <div class="feature-icon-small">
                                    <i class="fas fa-camera"></i>
                                </div>
                                <div>
                                    <h4>Photo Documentation</h4>
                                    <p>Daily photos and updates via parent portal</p>
                                </div>
                            </div>
                            <div class="assessment-feature">
                                <div class="feature-icon-small">
                                    <i class="fas fa-comments"></i>
                                </div>
                                <div>
                                    <h4>Parent-Teacher Conferences</h4>
                                    <p>Twice yearly detailed progress discussions</p>
                                </div>
                            </div>
                            <div class="assessment-feature">
                                <div class="feature-icon-small">
                                    <i class="fas fa-book"></i>
                                </div>
                                <div>
                                    <h4>Portfolio Development</h4>
                                    <p>Collection of child's work throughout the year</p>
                                </div>
                            </div>
                        </div>
                        
                        <a href="admission.php" class="btn btn-primary">Enroll Today</a>
                    </div>
                    <div class="assessment-image fade-in-right">
                        <img src="images/assessment-progress.jpg" alt="Teacher assessing child progress" loading="lazy">
                    </div>
                </div>
            </div>
        </section>
        
        <!-- CTA Section -->
        <section class="cta-section">
            <div class="container">
                <div class="cta-content fade-in-up">
                    <h2>Ready to See Our Curriculum in Action?</h2>
                    <p>Schedule a tour and observe our teachers engaging with children in our learning environment.</p>
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
    
    <?php
include 'includes/footer.php';
?>