<?php
include 'includes/header.php';
?>
    
    <main id="main-content">
        <!-- Page Header -->
        <section class="page-header">
            <div class="container">
                <h1>Admissions & Enrollment</h1>
                <nav class="breadcrumb">
                    <a href="index.php">Home</a>
                    <span class="separator">/</span>
                    <span class="current">Admissions</span>
                </nav>
            </div>
        </section>
        
        <!-- Enrollment Process -->
        <section class="enrollment-process section">
            <div class="container">
                <div class="section-header text-center">
                    <span class="section-badge">Easy Enrollment</span>
                    <h2 class="section-title">3 Simple Steps to Join Our Family</h2>
                    <p class="section-description">Our streamlined admissions process makes enrollment quick and hassle-free</p>
                </div>
                
                <div class="process-steps">
                    <div class="process-step fade-in-up">
                        <div class="step-number">1</div>
                        <div class="step-icon">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <h3>Online Application</h3>
                        <p>Complete our simple online application form with your child's information and program preferences.</p>
                        <ul class="step-details">
                            <li><i class="fas fa-check"></i> Takes 10-15 minutes</li>
                            <li><i class="fas fa-check"></i> Save and resume anytime</li>
                            <li><i class="fas fa-check"></i> Immediate confirmation</li>
                        </ul>
                    </div>
                    
                    <div class="process-step fade-in-up" data-delay="100">
                        <div class="step-number">2</div>
                        <div class="step-icon">
                            <i class="fas fa-folder-open"></i>
                        </div>
                        <h3>Document Submission</h3>
                        <p>Upload required documents including birth certificate, vaccination records, and parent ID.</p>
                        <ul class="step-details">
                            <li><i class="fas fa-check"></i> Secure document upload</li>
                            <li><i class="fas fa-check"></i> Digital copies accepted</li>
                            <li><i class="fas fa-check"></i> We'll verify everything</li>
                        </ul>
                    </div>
                    
                    <div class="process-step fade-in-up" data-delay="200">
                        <div class="step-number">3</div>
                        <div class="step-icon">
                            <i class="fas fa-school"></i>
                        </div>
                        <h3>Campus Visit & Enrollment</h3>
                        <p>Schedule a tour, meet our teachers, and complete final enrollment with our admissions team.</p>
                        <ul class="step-details">
                            <li><i class="fas fa-check"></i> Personalized tour</li>
                            <li><i class="fas fa-check"></i> Meet the teachers</li>
                            <li><i class="fas fa-check"></i> Finalize enrollment</li>
                        </ul>
                    </div>
                </div>
                
                <div class="text-center mt-3">
                    <a href="#apply" class="btn btn-primary btn-large">
                        <i class="fas fa-pencil-alt"></i> Start Application
                    </a>
                </div>
            </div>
        </section>
        
        <!-- Application Form -->
        <section class="application-form section" id="apply" style="background: var(--bg-cream);">
            <div class="container">
                <div class="section-header text-center">
                    <span class="section-badge">Apply Now</span>
                    <h2 class="section-title">Online Application Form</h2>
                    <p class="section-description">Fill out the form below to begin your enrollment journey</p>
                </div>
                
                <div class="form-container fade-in-up">
                    <form id="admissionsForm" class="admissions-form" data-validate>
                        <input type="hidden" name="form_type" value="admission">
                        <div class="form-section">
                            <h3><i class="fas fa-child"></i> Child Information</h3>
                            <div class="form-grid">
                                <div class="form-group">
                                    <label for="childFirstName">First Name *</label>
                                    <input type="text" id="childFirstName" name="childFirstName" required placeholder="Enter child's first name">
                                </div>
                                <div class="form-group">
                                    <label for="childLastName">Last Name *</label>
                                    <input type="text" id="childLastName" name="childLastName" required placeholder="Enter child's last name">
                                </div>
                                <div class="form-group">
                                    <label for="childDOB">Date of Birth *</label>
                                    <input type="date" id="childDOB" name="childDOB" required>
                                </div>
                                <div class="form-group">
                                    <label for="childGender">Gender *</label>
                                    <select id="childGender" name="childGender" required>
                                        <option value="">Select Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div class="form-group full-width">
                                    <label for="programSelect">Program Interest *</label>
                                    <select id="programSelect" name="programSelect" required>
                                        <option value="">Select Program</option>
                                        <option value="toddlers">Toddlers (1-2 years)</option>
                                        <option value="preschool">Preschool (2-4 years)</option>
                                        <option value="kindergarten">Kindergarten (4-6 years)</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-section">
                            <h3><i class="fas fa-users"></i> Parent/Guardian Information</h3>
                            <div class="form-grid">
                                <div class="form-group">
                                    <label for="parentFirstName">First Name *</label>
                                    <input type="text" id="parentFirstName" name="parentFirstName" required placeholder="Enter your first name">
                                </div>
                                <div class="form-group">
                                    <label for="parentLastName">Last Name *</label>
                                    <input type="text" id="parentLastName" name="parentLastName" required placeholder="Enter your last name">
                                </div>
                                <div class="form-group">
                                    <label for="parentEmail">Email Address *</label>
                                    <input type="email" id="parentEmail" name="parentEmail" required placeholder="your@email.com">
                                </div>
                                <div class="form-group">
                                    <label for="parentPhone">Phone Number *</label>
                                    <input type="tel" id="parentPhone" name="parentPhone" required placeholder="+256 742 384 700">
                                </div>
                                <div class="form-group full-width">
                                    <label for="parentAddress">Home Address *</label>
                                    <input type="text" id="parentAddress" name="parentAddress" required placeholder="Full address">
                                </div>
                                <div class="form-group">
                                    <label for="relationship">Relationship to Child *</label>
                                    <select id="relationship" name="relationship" required>
                                        <option value="">Select Relationship</option>
                                        <option value="mother">Mother</option>
                                        <option value="father">Father</option>
                                        <option value="guardian">Legal Guardian</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="preferredContact">Preferred Contact Method *</label>
                                    <select id="preferredContact" name="preferredContact" required>
                                        <option value="">Select Method</option>
                                        <option value="email">Email</option>
                                        <option value="phone">Phone</option>
                                        <option value="both">Both</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-section">
                            <h3><i class="fas fa-file-upload"></i> Required Documents</h3>
                            <div class="document-upload">
                                <div class="upload-item">
                                    <i class="fas fa-certificate"></i>
                                    <div>
                                        <span>Birth Certificate</span>
                                        <small>PDF, JPG, or PNG (Max 5MB)</small>
                                    </div>
                                    <input type="file" id="birthCert" name="birthCert" accept=".pdf,.jpg,.jpeg,.png">
                                </div>
                                <div class="upload-item">
                                    <i class="fas fa-syringe"></i>
                                    <div>
                                        <span>Vaccination Record</span>
                                        <small>PDF, JPG, or PNG (Max 5MB)</small>
                                    </div>
                                    <input type="file" id="vaccination" name="vaccination" accept=".pdf,.jpg,.jpeg,.png">
                                </div>
                                <div class="upload-item">
                                    <i class="fas fa-id-card"></i>
                                    <div>
                                        <span>Parent ID Copy</span>
                                        <small>PDF, JPG, or PNG (Max 5MB)</small>
                                    </div>
                                    <input type="file" id="parentId" name="parentId" accept=".pdf,.jpg,.jpeg,.png">
                                </div>
                                <div class="upload-item">
                                    <i class="fas fa-camera"></i>
                                    <div>
                                        <span>Two Recent Photos of Child</span>
                                        <small>PDF, JPG, or PNG (Max 5MB)</small>
                                    </div>
                                    <input type="file" id="childPhotos" name="childPhotos" accept=".pdf,.jpg,.jpeg,.png">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-section">
                            <h3><i class="fas fa-comments"></i> Additional Information</h3>
                            <div class="form-grid">
                                <div class="form-group full-width">
                                    <label for="siblings">Do you have other children enrolled at Toddler town?</label>
                                    <select id="siblings" name="siblings">
                                        <option value="no">No</option>
                                        <option value="yes">Yes (Please provide names below)</option>
                                    </select>
                                </div>
                                <div class="form-group full-width">
                                    <label for="siblingNames">Sibling Names (if applicable)</label>
                                    <input type="text" id="siblingNames" name="siblingNames" placeholder="Enter sibling names">
                                </div>
                                <div class="form-group full-width">
                                    <label for="howHeard">How did you hear about us?</label>
                                    <select id="howHeard" name="howHeard">
                                        <option value="">Select Option</option>
                                        <option value="website">Website</option>
                                        <option value="social">Social Media</option>
                                        <option value="referral">Friend/Family Referral</option>
                                        <option value="search">Google Search</option>
                                        <option value="event">School Event</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div class="form-group full-width">
                                    <label for="additionalNotes">Additional Notes or Questions</label>
                                    <textarea id="additionalNotes" name="additionalNotes" rows="4" placeholder="Any allergies, special needs, or questions?"></textarea>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-section">
                            <div class="checkbox-group">
                                <input type="checkbox" id="termsAgree" name="termsAgree" required>
                                <label for="termsAgree">I agree to the <a href="#" target="_blank">Terms and Conditions</a> and <a href="#" target="_blank">Privacy Policy</a> *</label>
                            </div>
                            <div class="checkbox-group">
                                <input type="checkbox" id="newsletter" name="newsletter">
                                <label for="newsletter">I would like to receive newsletters and updates from Toddler town</label>
                            </div>
                        </div>
                        
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary btn-large">
                                <i class="fas fa-paper-plane"></i> Submit Application
                            </button>
                            <button type="reset" class="btn btn-secondary btn-large">
                                <i class="fas fa-undo"></i> Clear Form
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        
        <!-- Tuition & Fees -->
        <section class="tuition-fees section">
            <div class="container">
                <div class="section-header text-center">
                    <span class="section-badge">Transparent Pricing</span>
                    <h2 class="section-title">Tuition & Fees</h2>
                    <p class="section-description">Competitive rates with flexible payment options</p>
                </div>
                
                <div class="tuition-grid">
                    <div class="tuition-card fade-in-up">
                        <div class="tuition-header">
                            <h3>Toddlers</h3>
                            <span class="age-badge">1-2 Years</span>
                        </div>
                        <div class="tuition-amount">
                            <span class="currency">UGX</span>
                            <span class="amount">12,800/=</span>
                            <span class="period">Per term</span>
                        </div>
                        <ul class="tuition-includes">
                            <li><i class="fas fa-check"></i> Full-day program (8am-3pm)</li>
                            <li><i class="fas fa-check"></i> All meals and snacks</li>
                            <li><i class="fas fa-check"></i> Learning materials</li>
                            <li><i class="fas fa-check"></i> Outdoor activities</li>
                            <li><i class="fas fa-check"></i> Parent portal access</li>
                        </ul>
                        <a href="#apply" class="btn btn-secondary">Enroll Now</a>
                    </div>
                    
                    <div class="tuition-card featured fade-in-up" data-delay="100">
                        <div class="popular-badge">Most Popular</div>
                        <div class="tuition-header">
                            <h3>Preschool</h3>
                            <span class="age-badge">2-4 Years</span>
                        </div>
                        <div class="tuition-amount">
                            <span class="currency">UGX</span>
                            <span class="amount">15,800/=</span>
                            <span class="period">Per Term</span>
                        </div>
                        <ul class="tuition-includes">
                            <li><i class="fas fa-check"></i> Full-day program (8am-3:30pm)</li>
                            <li><i class="fas fa-check"></i> All meals and snacks</li>
                            <li><i class="fas fa-check"></i> Learning materials</li>
                            <li><i class="fas fa-check"></i> STEAM activities</li>
                            <li><i class="fas fa-check"></i> Music & Art classes</li>
                            <li><i class="fas fa-check"></i> Parent portal access</li>
                        </ul>
                        <a href="#apply" class="btn btn-primary">Enroll Now</a>
                    </div>
                    
                    <div class="tuition-card fade-in-up" data-delay="200">
                        <div class="tuition-header">
                            <h3>Kindergarten</h3>
                            <span class="age-badge">4-6 Years</span>
                        </div>
                        <div class="tuition-amount">
                            <span class="currency">UGX</span>
                            <span class="amount">18,800</span>
                            <span class="period">Per Term</span>
                        </div>
                        <ul class="tuition-includes">
                            <li><i class="fas fa-check"></i> Full-day program (8am-3:30pm)</li>
                            <li><i class="fas fa-check"></i> All meals and snacks</li>
                            <li><i class="fas fa-check"></i> Learning materials</li>
                            <li><i class="fas fa-check"></i> School readiness program</li>
                            <li><i class="fas fa-check"></i> Bilingual option available</li>
                            <li><i class="fas fa-check"></i> Parent portal access</li>
                        </ul>
                        <a href="#apply" class="btn btn-secondary">Enroll Now</a>
                    </div>
                </div>
                
                <!-- Additional Fees -->
                <div class="additional-fees fade-in-up">
                    <h3>Additional Fees</h3>
                    <div class="fees-table">
                        <div class="fee-row">
                            <span>Registration Fee (One-time)</span>
                            <span>2,000/=</span>
                        </div>
                        <div class="fee-row">
                            <span>Uniform Package (Optional)</span>
                            <span>¥800</span>
                        </div>
                        <div class="fee-row">
                            <span>Field Trips (Per Trip)</span>
                            <span>150/= - 300/=</span>
                        </div>
                        <div class="fee-row">
                            <span>Extended Care (After 3:30pm)</span>
                            <span>50/= /hour</span>
                        </div>
                    </div>
                </div>
                
                <!-- Payment Options -->
                <div class="payment-options fade-in-up">
                    <h3>Payment Options</h3>
                    <div class="payment-grid">
                        <div class="payment-card">
                            <i class="fas fa-credit-card"></i>
                            <h4>Semester Payment</h4>
                            <p>Pay once per Term (5% discount)</p>
                        </div>
                        <div class="payment-card">
                            <i class="fas fa-calendar-alt"></i>
                            <h4>Monthly Payment</h4>
                            <p>6 equal monthly installments</p>
                        </div>
                        <div class="payment-card">
                            <i class="fas fa-percentage"></i>
                            <h4>Sibling Discount</h4>
                            <p>15% off for second child enrolled</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Important Dates -->
        <section class="important-dates section" style="background: var(--bg-blue);">
            <div class="container">
                <div class="section-header text-center">
                    <span class="section-badge">2026 Academic Year</span>
                    <h2 class="section-title">Important Dates & Deadlines</h2>
                </div>
                
                <div class="dates-grid">
                    <div class="date-card fade-in-up">
                        <div class="date-icon">
                            <i class="fas fa-calendar-plus"></i>
                        </div>
                        <h4>Application Opens</h4>
                        <span class="date-value">April 1, 2026</span>
                        <p>Begin submitting applications for Fall 2026</p>
                    </div>
                    <div class="date-card fade-in-up" data-delay="100">
                        <div class="date-icon">
                            <i class="fas fa-calendar-check"></i>
                        </div>
                        <h4>Application Deadline</h4>
                        <span class="date-value">June 30, 2026</span>
                        <p>Last day to submit Fall 2026 applications</p>
                    </div>
                    <div class="date-card fade-in-up" data-delay="200">
                        <div class="date-icon">
                            <i class="fas fa-school"></i>
                        </div>
                        <h4>First Day of Term</h4>
                        <span class="date-value">September 1, 2026</span>
                        <p>Classes begin for new and returning students</p>
                    </div>
                    <div class="date-card fade-in-up" data-delay="300">
                        <div class="date-icon">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                        <h4>Parent Orientation</h4>
                        <span class="date-value">August 25, 2026</span>
                        <p>Meet teachers and tour classrooms</p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- FAQ Section -->
        <section class="faq-section section">
            <div class="container">
                <div class="section-header text-center">
                    <span class="section-badge">Common Questions</span>
                    <h2 class="section-title">Frequently Asked Questions</h2>
                </div>
                
                <div class="faq-grid">
                    <div class="faq-item fade-in-up">
                        <button class="faq-question">
                            <span>What is the minimum age for enrollment?</span>
                            <i class="fas fa-plus"></i>
                        </button>
                        <div class="faq-answer">
                            <p>We accept children from 12 months (1 year) of age for our Toddler program. Children must be toilet-trained for Preschool and Kindergarten programs.</p>
                        </div>
                    </div>
                    <div class="faq-item fade-in-up" data-delay="100">
                        <button class="faq-question">
                            <span>Is there a sibling discount?</span>
                            <i class="fas fa-plus"></i>
                        </button>
                        <div class="faq-answer">
                            <p>Yes! We offer a 15% discount on tuition for the second child enrolled. The discount applies to the lower tuition amount if children are in different programs.</p>
                        </div>
                    </div>
                    <div class="faq-item fade-in-up" data-delay="200">
                        <button class="faq-question">
                            <span>What are your operating hours?</span>
                            <i class="fas fa-plus"></i>
                        </button>
                        <div class="faq-answer">
                            <p>Regular hours are 8:00 AM to 3:30 PM, Monday through Friday. Extended care is available from 3:30 PM to 6:00 PM for an additional fee of ¥50/hour.</p>
                        </div>
                    </div>
                    <div class="faq-item fade-in-up" data-delay="300">
                        <button class="faq-question">
                            <span>Do you offer a trial period?</span>
                            <i class="fas fa-plus"></i>
                        </button>
                        <div class="faq-answer">
                            <p>Yes, we offer a 2-week trial period so your child can experience our program before committing to enrollment.</p>
                        </div>
                    </div>
                    <div class="faq-item fade-in-up" data-delay="400">
                        <button class="faq-question">
                            <span>What payment methods do you accept?</span>
                            <i class="fas fa-plus"></i>
                        </button>
                        <div class="faq-answer">
                            <p>We accept bank transfers, credit cards, and check payments. Payment plans are available for monthly or semester payments.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <?php
include 'includes/footer.php';
?>