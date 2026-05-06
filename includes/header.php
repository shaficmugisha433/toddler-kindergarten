<!DOCTYPE html>
<?php
include __DIR__ . '/../config/config.php';
$currentPage = basename($_SERVER['SCRIPT_NAME']);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Toddler Town Kindergarten - Nurturing curiosity, building kindness, growing together. Award-winning early childhood education for ages 1-6.">
    <meta name="keywords" content="kindergarten, pre-nursery, preschool, early childhood education, daycare, toddler care">
    <meta name="author" content="Toddler Town Kindergarten">
    <meta name="theme-color" content="#FFB347">
    
    <!-- Open Graph / Social Media -->
    <meta property="og:title" content="<?php echo $logo_name; ?> - Nurturing Curiosity, Building Kindness">
    <meta property="og:description" content="Nurturing curiosity, building kindness, growing together">
    <meta property="og:image" content="images/hero-children.jpg">
    <meta property="og:url" content="https://www.littleoakskindergarten.com">
    
    <title><?php echo $logo_name; ?> <?php echo $tagline_name; ?></title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <link rel="apple-touch-icon" href="assets/apple-touch-icon.png">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/animation.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Preload Critical Resources -->
    <link rel="preload" href="images/hero-bg.jpg" as="image">
</head>
<body>
    <!-- Skip to Main Content (Accessibility) -->
    <a href="#main-content" class="skip-link">Skip to main content</a>
    
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container">
            <div class="top-bar-content">
                <div class="contact-info">
                    <a href="tel:<?php echo $school_phone; ?>"><i class="fas fa-phone"></i> <?php echo $school_phone; ?></a>
                    <a href="mailto:<?php echo $school_email; ?>"><i class="fas fa-envelope"></i> <?php echo $school_email; ?></a>
                </div>
                <div class="top-bar-links">
                    <a href="contact.php"><i class="fas fa-map-marker-alt"></i> Get Directions</a>
                    <a href="admission.php" class="btn-apply-top">Apply Now</a>
                    <a href="admin.php" class="btn-admin-top" title="Admin Panel"><i class="fas fa-lock"></i> Admin</a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Navigation -->
    <nav class="navbar" id="navbar">
        <div class="container nav-container">
            <a href="index.php" class="logo">
                <div class="logo-icon">
                    <i class="fas fa-school"></i>
                </div>
                <div class="logo-text">
                    <span class="logo-name"><?php echo $school_name; ?></span>
                    <span class="logo-tagline"><?php echo $tagline_name; ?></span>
                </div>
            </a>
            
            <button class="mobile-menu-toggle" id="mobileMenuToggle" aria-label="Toggle navigation menu">
                <span class="hamburger"></span>
                <span class="hamburger"></span>
                <span class="hamburger"></span>
            </button>
            
            <ul class="nav-menu" id="navMenu">
                <li><a href="<?php echo $home_link; ?>" class="nav-link<?php echo $currentPage === basename($home_link) ? ' active' : ''; ?>">Home</a></li>
                <li><a href="<?php echo $about_link; ?>" class="nav-link<?php echo $currentPage === basename($about_link) ? ' active' : ''; ?>">About Us</a></li>
                <li><a href="<?php echo $curriculum_link; ?>" class="nav-link<?php echo $currentPage === basename($curriculum_link) ? ' active' : ''; ?>">Curriculum</a></li>
                <li><a href="<?php echo $admission_link; ?>" class="nav-link<?php echo $currentPage === basename($admission_link) ? ' active' : ''; ?>">Admissions</a></li>
                <li><a href="<?php echo $gallery_link; ?>" class="nav-link<?php echo $currentPage === basename($gallery_link) ? ' active' : ''; ?>">Gallery</a></li>
                <li><a href="<?php echo $contact_link; ?>" class="nav-link<?php echo $currentPage === basename($contact_link) ? ' active' : ''; ?>">Contact</a></li>
                <li><a href="<?php echo $admission_link; ?>" class="btn-nav">Book a Tour</a></li>
            </ul>
        
        </div>
    </nav>
