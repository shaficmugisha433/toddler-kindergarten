<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Toddler Town Kindergarten</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Quicksand:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="admin-body">
    <main class="admin-app">
        <section id="loginView" class="admin-login-view">
            <div class="login-bg-shapes">
                <div class="shape shape-1"></div>
                <div class="shape shape-2"></div>
                <div class="shape shape-3"></div>
            </div>
            <div class="admin-login-card">
                <div class="admin-login-brand">
                    <div class="brand-icon-circle"><i class="fas fa-school"></i></div>
                    <div class="brand-info">
                        <h1>Toddler Town</h1>
                        <p>Management Portal</p>
                    </div>
                </div>


                <form id="adminLoginForm" class="admin-login-form">
                    <p style="margin: 0 0 14px; color: #4a5568; text-align: center;">
                        Continue to the admin dashboard.
                    </p>
                    <label for="adminUsername">Username</label>
                    <input
                        type="text"
                        id="adminUsername"
                        name="username"
                        placeholder="Enter username"
                        autocomplete="username"
                        required
                    >
                    <label for="adminPassword">Password</label>
                    <input
                        type="password"
                        id="adminPassword"
                        name="password"
                        placeholder="Enter password"
                        autocomplete="current-password"
                        required
                    >

                    <button type="submit" class="btn btn-primary admin-full-btn">
                        <i class="fas fa-right-to-bracket"></i> Enter Dashboard
                    </button>
                </form>
                <div id="loginNotice" class="admin-notice hidden" role="alert"></div>
                <div class="admin-login-help">
                    Use your admin account credentials to continue.
                </div>
                <div class="login-footer">
                    <a href="./index.php" class="back-link"><i class="fas fa-arrow-left"></i> Back to Home</a>
                </div>
            </div>
        </section>

        <section id="dashboardView" class="admin-dashboard-view hidden">
            <!-- Sidebar -->
            <aside class="admin-sidebar">
                <div class="sidebar-header">
                    <div class="sidebar-brand">
                        <div class="brand-icon sidebar-icon"><i class="fas fa-school"></i></div>
                        <div class="brand-text">
                            <h2>Toddler Town</h2>
                            <span>Kindergarten Admin</span>
                        </div>
                    </div>
                </div>
                <nav class="sidebar-nav">
                    <a href="#" class="sidebar-link active" data-module="dashboard"><i class="fas fa-home"></i> Dashboard</a>
                    <a href="#" class="sidebar-link" data-module="admissions"><i class="fas fa-user-graduate"></i> Admissions</a>
                    <a href="#" class="sidebar-link" data-module="contacts"><i class="fas fa-envelope"></i> Contacts</a>

                    <div class="sidebar-group">
                        <span class="sidebar-group-label">People</span>
                        <a href="#" class="sidebar-link" data-module="students"><i class="fas fa-children"></i> Students</a>
                        <a href="#" class="sidebar-link" data-module="teachers"><i class="fas fa-chalkboard-user"></i> Teachers</a>
                    </div>
                    
                    <div class="sidebar-group">
                        <span class="sidebar-group-label">Enrollments</span>
                        <a href="#" class="sidebar-link" data-module="enrollments"><i class="fas fa-list"></i> View All</a>
                        <a href="#" class="sidebar-link" data-module="enrollments-add"><i class="fas fa-user-plus"></i> Add New</a>
                    </div>

                    <div class="sidebar-group">
                        <span class="sidebar-group-label">Payments</span>
                        <a href="#" class="sidebar-link" data-module="payments"><i class="fas fa-receipt"></i> View All</a>
                        <a href="#" class="sidebar-link" data-module="payments-add"><i class="fas fa-plus-circle"></i> Record Pay</a>
                    </div>
                </nav>
            </aside>
            <div id="sidebarOverlay" class="admin-overlay hidden"></div>

            <!-- Main Content Area -->
            <main class="admin-main">
                <header class="admin-topbar">
                    <div class="topbar-left">
                        <button id="sidebarToggle" class="sidebar-toggle" type="button" aria-label="Toggle sidebar">
                            <i class="fas fa-bars"></i>
                        </button>
                        <div class="topbar-breadcrumb">
                            <i class="fas fa-th-large"></i>
                            <div>
                                <h2>Administrative Control Center</h2>
                                <p id="adminContextText" class="admin-context-text">Dashboard overview and activity</p>
                            </div>
                        </div>
                    </div>
                    <div class="admin-topbar-actions">
                        <button id="themeToggleBtn" type="button" class="btn btn-theme-toggle" aria-label="Toggle dark mode">
                            <i class="fas fa-moon"></i>
                            <span id="themeToggleText">Dark Mode</span>
                        </button>
                        <a href="index.php" target="_blank" class="btn btn-secondary-outline">
                            <i class="fas fa-external-link-alt"></i> View Site
                        </a>
                        <div class="user-profile-box">
                            <div class="user-avatar-mini">
                                <i class="fas fa-user-circle"></i>
                            </div>
                            <div class="user-profile-details">
                                <span id="adminUserLabel" class="user-display-name">Administrator</span>
                                <span class="user-status-text"><i class="fas fa-circle"></i> Online</span>
                            </div>
                        </div>
                        <button id="adminLogoutBtn" class="btn btn-danger">
                            <i class="fas fa-power-off"></i>
                        </button>
                    </div>
                </header>

                <div class="admin-content-pad">
                    <!-- Dashboard Module (Stats) -->
                    <div id="module-dashboard" class="module-view">
                        <div class="section-title mb-4">
                            <h3>Overview Statistics</h3>
                        </div>
                        <section class="dashboard-hero-panel">
                            <div class="dashboard-hero-copy">
                                <span class="dashboard-eyebrow">Daily Operations</span>
                                <h4>Welcome back, <span id="adminWelcomeLabel">Administrator</span></h4>
                                <p>Track admissions, parent inquiries, class enrollments, and fee performance from one central workspace.</p>
                            </div>
                            <div class="dashboard-hero-actions">
                                <button type="button" class="btn btn-secondary-outline quick-nav-btn" data-module="admissions">
                                    <i class="fas fa-user-graduate"></i> Review Admissions
                                </button>
                                <button type="button" class="btn btn-primary quick-nav-btn" data-module="payments">
                                    <i class="fas fa-wallet"></i> Open Payments
                                </button>
                            </div>
                        </section>
                        <section class="admin-stats-grid">
                            <article class="admin-stat-card clickable-stat" data-module="admissions">
                                <div class="stat-icon admissions-icon"><i class="fas fa-users"></i></div>
                                <div class="stat-info">
                                    <h4>Admissions</h4>
                                    <p id="statAdmissions">0</p>
                                </div>
                            </article>
                            <article class="admin-stat-card clickable-stat" data-module="contacts">
                                <div class="stat-icon contacts-icon"><i class="fas fa-comments"></i></div>
                                <div class="stat-info">
                                    <h4>Contacts</h4>
                                    <p id="statContacts">0</p>
                                </div>
                            </article>
                            <article class="admin-stat-card clickable-stat" data-module="enrollments">
                                <div class="stat-icon enrollments-icon"><i class="fas fa-user-check"></i></div>
                                <div class="stat-info">
                                    <h4>Enrollments</h4>
                                    <p id="statEnrollments">0</p>
                                </div>
                            </article>
                            <article class="admin-stat-card clickable-stat" data-module="payments">
                                <div class="stat-icon payments-icon"><i class="fas fa-credit-card"></i></div>
                                <div class="stat-info">
                                    <h4>Payments</h4>
                                    <p id="statPayments">0</p>
                                </div>
                            </article>
                            <article class="admin-stat-card admin-stat-highlight">
                                <div class="stat-icon unread-icon"><i class="fas fa-bell"></i></div>
                                <div class="stat-info">
                                    <h4>Unread Msgs</h4>
                                    <p id="statUnread">0</p>
                                </div>
                            </article>
                            <article class="admin-stat-card clickable-stat" data-module="payments">
                                <div class="stat-icon fees-icon"><i class="fas fa-wallet"></i></div>
                                <div class="stat-info">
                                    <h4>Total Fees</h4>
                                    <p id="statFees">0</p>
                                </div>
                            </article>
                        </section>
                    </div>

                    <!-- Other Modules Container -->
                    <div id="module-data" class="module-view hidden">
                        <section class="admin-module-shell">
                            <div class="admin-table-wrap">
                                <div class="admin-table-head">
                                    <h3 id="moduleHeading">Admissions</h3>
                                    <div class="table-actions">
                                        <div class="table-search-box">
                                            <i class="fas fa-search"></i>
                                            <input type="text" id="moduleSearch" placeholder="Search records...">
                                        </div>
                                        <button id="refreshModuleBtn" class="btn btn-secondary-outline"><i class="fas fa-rotate"></i> Refresh</button>
                                    </div>
                                </div>
                                <div id="adminNotice" class="admin-notice hidden"></div>
                                <div id="recordsGrid" class="records-grid"></div>
                            </div>
                        </section>
                    </div>

                    <!-- Sub Module: Add Enrollment -->
                    <div id="module-enrollments-add" class="module-view hidden">
                        <section class="admin-module-shell">
                            <div class="admin-inline-forms" style="padding: 24px;">
                                <form id="enrollmentForm" class="admin-inline-form">
                                    <h3><i class="fas fa-plus-circle"></i> Add Enrollment</h3>
                                    <div class="admin-form-grid">
                                        <input type="text" name="student_name" required placeholder="Student Name">
                                        <input type="date" name="date_of_birth" required>
                                        <select name="class_name" required>
                                            <option value="">Class</option>
                                            <option value="Toddlers (1-2 years)">Toddlers (1-2 years)</option>
                                            <option value="Preschool (2-4 years)">Preschool (2-4 years)</option>
                                            <option value="Kindergarten (4-6 years)">Kindergarten (4-6 years)</option>
                                        </select>
                                        <input type="date" name="enrollment_date" required>
                                        <input type="text" name="parent_name" required placeholder="Parent Name">
                                        <input type="email" name="parent_email" required placeholder="Parent Email">
                                        <input type="tel" name="parent_phone" placeholder="Parent Phone">
                                        <input type="text" name="status" placeholder="Status (active)" value="active">
                                        <textarea name="notes" rows="2" placeholder="Notes"></textarea>
                                    </div>
                                    <div class="form-actions-right">
                                        <button type="submit" class="btn btn-primary"><i class="fas fa-user-plus"></i> Save Enrollment</button>
                                    </div>
                                </form>
                            </div>
                        </section>
                    </div>

                    <!-- Sub Module: Add Payment -->
                    <div id="module-payments-add" class="module-view hidden">
                        <section class="admin-module-shell">
                            <div class="admin-inline-forms" style="padding: 24px;">
                                <form id="paymentForm" class="admin-inline-form">
                                    <h3><i class="fas fa-plus-circle"></i> Add Payment</h3>
                                    <div class="admin-form-grid">
                                        <input type="text" name="student_name" required placeholder="Student Name">
                                        <input type="number" name="amount" min="1" step="0.01" required placeholder="Amount">
                                        <input type="date" name="payment_date" required>
                                        <input type="text" name="term_label" required placeholder="Term / Semester">
                                        <select name="payment_method" required>
                                            <option value="">Payment Method</option>
                                            <option value="Cash">Cash</option>
                                            <option value="Bank Transfer">Bank Transfer</option>
                                            <option value="Mobile Money">Mobile Money</option>
                                        </select>
                                        <textarea name="notes" rows="2" placeholder="Notes"></textarea>
                                    </div>
                                    <div class="form-actions-right">
                                        <button type="submit" class="btn btn-primary"><i class="fas fa-receipt"></i> Save Payment</button>
                                    </div>
                                </form>
                            </div>
                        </section>
                    </div>
                </div>
            </main>
        </section>
    </main>

    <div id="profileModal" class="profile-modal hidden" role="dialog" aria-modal="true" aria-labelledby="profileModalTitle">
        <div class="profile-modal-backdrop"></div>
        <div class="profile-modal-dialog">
            <div class="profile-modal-header">
                <h3 id="profileModalTitle">Profile</h3>
                <button id="profileModalClose" class="profile-close-btn" type="button" aria-label="Close profile">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div id="profileModalBody" class="profile-modal-body"></div>
        </div>
    </div>

    <script src="js/admin.js" defer></script>
</body>
</html>
