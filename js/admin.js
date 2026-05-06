const AdminDashboard = {
    activeModule: 'dashboard',
    currentRows: [],
    elements: {},

    init() {
        this.cacheElements();
        this.bindEvents();
        this.loadTheme();
        this.checkSession();
    },

    cacheElements() {
        this.elements.loginView = document.getElementById('loginView');
        this.elements.dashboardView = document.getElementById('dashboardView');
        this.elements.loginForm = document.getElementById('adminLoginForm');
        this.elements.loginNotice = document.getElementById('loginNotice');
        this.elements.logoutBtn = document.getElementById('adminLogoutBtn');
        this.elements.userLabel = document.getElementById('adminUserLabel');
        this.elements.welcomeLabel = document.getElementById('adminWelcomeLabel');
        this.elements.contextText = document.getElementById('adminContextText');
        this.elements.sidebar = document.querySelector('.admin-sidebar');
        this.elements.sidebarToggle = document.getElementById('sidebarToggle');
        this.elements.sidebarOverlay = document.getElementById('sidebarOverlay');
        this.elements.sidebarLinks = document.querySelectorAll('.sidebar-link');
        this.elements.quickNavButtons = document.querySelectorAll('.quick-nav-btn');
        this.elements.moduleDashboard = document.getElementById('module-dashboard');
        this.elements.moduleData = document.getElementById('module-data');
        this.elements.heading = document.getElementById('moduleHeading');
        this.elements.recordsGrid = document.getElementById('recordsGrid');
        this.elements.notice = document.getElementById('adminNotice');
        this.elements.refreshBtn = document.getElementById('refreshModuleBtn');
        this.elements.enrollmentForm = document.getElementById('enrollmentForm');
        this.elements.paymentForm = document.getElementById('paymentForm');
        this.elements.statAdmissions = document.getElementById('statAdmissions');
        this.elements.statContacts = document.getElementById('statContacts');
        this.elements.statEnrollments = document.getElementById('statEnrollments');
        this.elements.statPayments = document.getElementById('statPayments');
        this.elements.statUnread = document.getElementById('statUnread');
        this.elements.statFees = document.getElementById('statFees');
        this.elements.statCards = document.querySelectorAll('.clickable-stat');
        this.elements.moduleSearch = document.getElementById('moduleSearch');
        this.elements.moduleEnrollmentsAdd = document.getElementById('module-enrollments-add');
        this.elements.modulePaymentsAdd = document.getElementById('module-payments-add');
        this.elements.profileModal = document.getElementById('profileModal');
        this.elements.profileModalBody = document.getElementById('profileModalBody');
        this.elements.profileModalTitle = document.getElementById('profileModalTitle');
        this.elements.profileModalClose = document.getElementById('profileModalClose');
        this.elements.themeToggleBtn = document.getElementById('themeToggleBtn');
        this.elements.themeToggleText = document.getElementById('themeToggleText');
    },

    bindEvents() {
        this.elements.loginForm?.addEventListener('submit', (event) => this.handleLogin(event));
        this.elements.logoutBtn?.addEventListener('click', () => this.handleLogout());
        this.elements.refreshBtn?.addEventListener('click', () => this.loadModuleData());
        this.elements.enrollmentForm?.addEventListener('submit', (event) => this.handleEnrollment(event));
        this.elements.paymentForm?.addEventListener('submit', (event) => this.handlePayment(event));
        this.elements.moduleSearch?.addEventListener('input', () => this.handleSearch());
        this.elements.sidebarToggle?.addEventListener('click', () => this.toggleSidebar());
        this.elements.sidebarOverlay?.addEventListener('click', () => this.closeSidebar());
        this.elements.themeToggleBtn?.addEventListener('click', () => this.toggleTheme());
        this.elements.profileModalClose?.addEventListener('click', () => this.closeProfileModal());
        this.elements.profileModal?.addEventListener('click', (event) => {
            if (event.target.classList.contains('profile-modal-backdrop')) {
                this.closeProfileModal();
            }
        });
        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape') {
                this.closeProfileModal();
            }
        });

        this.elements.sidebarLinks.forEach((link) => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                this.switchModule(link.dataset.module || 'dashboard');
            });
        });
        this.elements.quickNavButtons.forEach((button) => {
            button.addEventListener('click', () => {
                const module = button.dataset.module;
                if (module) this.switchModule(module);
            });
        });

        this.elements.recordsGrid?.addEventListener('click', (event) => {
            const target = event.target.closest('button[data-action]');
            if (target) {
                const action = target.dataset.action;
                const module = target.dataset.module;
                const id = Number(target.dataset.id || 0);

                if (id < 1 || !module) return;

                if (action === 'read') {
                    this.markAsRead(module, id);
                }

                if (action === 'delete') {
                    this.deleteRecord(module, id);
                }

                return;
            }

            const card = event.target.closest('.profile-card, .record-card');
            if (!card) return;
            const recordId = Number(card.dataset.recordId || 0);
            if (recordId < 1) return;
            this.openProfile(recordId);
        });

        this.elements.statCards.forEach((card) => {
            card.addEventListener('click', () => {
                const module = card.dataset.module;
                if (module) this.switchModule(module);
            });
        });
    },

    openProfile(recordId) {
        const row = this.currentRows.find((item) => Number(item.id) === Number(recordId));
        if (!row) return;

        const profile = this.profileDataFor(this.activeModule, row);
        if (!profile) {
            return;
        }

        if (this.elements.profileModalTitle) {
            this.elements.profileModalTitle.textContent = profile.title;
        }
        if (this.elements.profileModalBody) {
            this.elements.profileModalBody.innerHTML = profile.fields.map((field) => `
                <div class="profile-row">
                    <span class="profile-label">${this.escape(field.label)}</span>
                    <span class="profile-value">${this.escape(field.value)}</span>
                </div>
            `).join('');
        }
        this.elements.profileModal?.classList.remove('hidden');
        document.body.classList.add('modal-open');
    },

    closeProfileModal() {
        this.elements.profileModal?.classList.add('hidden');
        document.body.classList.remove('modal-open');
    },

    profileDataFor(module, row) {
        if (module === 'students') {
            return {
                title: `Student Profile: ${row.full_name || 'Student'}`,
                fields: [
                    { label: 'Full Name', value: row.full_name || '-' },
                    { label: 'Class', value: row.class_name || '-' },
                    { label: 'Date Of Birth', value: row.date_of_birth || '-' },
                    { label: 'Admission Date', value: row.admission_date || '-' },
                    { label: 'Parent/Guardian', value: row.parent_name || '-' },
                    { label: 'Parent Number', value: row.parent_phone || '-' },
                    { label: 'Parent Email', value: row.parent_email || '-' },
                    { label: 'Status', value: row.status || '-' },
                    { label: 'Notes', value: row.notes || '-' },
                ],
            };
        }

        if (module === 'teachers') {
            return {
                title: `Teacher Profile: ${row.full_name || 'Teacher'}`,
                fields: [
                    { label: 'Full Name', value: row.full_name || '-' },
                    { label: 'Role', value: row.role_title || '-' },
                    { label: 'Class', value: row.class_name || '-' },
                    { label: 'Activity', value: row.activity_training || '-' },
                    { label: 'Phone', value: row.phone || '-' },
                    { label: 'Email', value: row.email || '-' },
                    { label: 'Parent/Guardian', value: row.parent_name || '-' },
                    { label: 'Parent Number', value: row.parent_phone || '-' },
                    { label: 'Hire Date', value: row.hire_date || '-' },
                    { label: 'Status', value: row.status || '-' },
                    { label: 'Bio', value: row.bio || '-' },
                ],
            };
        }

        if (module === 'enrollments') {
            return {
                title: `Enrollment Profile: ${row.student_name || 'Student'}`,
                fields: [
                    { label: 'Student', value: row.student_name || '-' },
                    { label: 'Class', value: row.class_name || '-' },
                    { label: 'Date Of Birth', value: row.date_of_birth || '-' },
                    { label: 'Enrollment Date', value: row.enrollment_date || '-' },
                    { label: 'Parent', value: row.parent_name || '-' },
                    { label: 'Parent Number', value: row.parent_phone || '-' },
                    { label: 'Parent Email', value: row.parent_email || '-' },
                    { label: 'Status', value: row.status || '-' },
                    { label: 'Notes', value: row.notes || '-' },
                ],
            };
        }

        return null;
    },

    async checkSession() {
        try {
            const result = await this.request('api/admin/session.php');
            if (result.authenticated) {
                this.showDashboard(result.user);
                await this.refreshDashboard();
            } else {
                this.showLogin();
            }
        } catch (error) {
            this.showLogin();
            this.showLoginNotice(error.message, 'error');
        }
    },

    async handleLogin(event) {
        event.preventDefault();
        this.showLoginNotice('');
        const formData = new FormData(event.target);
        const payload = Object.fromEntries(formData.entries());

        try {
            const result = await this.request('api/admin/login.php', {
                method: 'POST',
                data: payload,
            });

            this.showDashboard(result.user);
            this.showNotice(result.message, 'success');
            await this.refreshDashboard();
        } catch (error) {
            this.showLoginNotice(error.message, 'error');
        }
    },

    async handleLogout() {
        try {
            await this.request('api/admin/logout.php', { method: 'POST', data: {} });
        } catch (error) {
            console.error(error);
        }

        this.showLogin();
        this.showNotice('You have been logged out.', 'info');
    },

    async refreshDashboard() {
        await this.loadSummary();
        if (this.shouldLoadTableData(this.activeModule)) {
            await this.loadModuleData();
        }
        this.toggleInlineForms();
    },

    async loadSummary() {
        const result = await this.request('api/admin/summary.php');
        const summary = result.summary || {};

        this.elements.statAdmissions.textContent = summary.admissions ?? 0;
        this.elements.statContacts.textContent = summary.contacts ?? 0;
        this.elements.statEnrollments.textContent = summary.enrollments ?? 0;
        this.elements.statPayments.textContent = summary.payments ?? 0;
        this.elements.statUnread.textContent = summary.unread ?? 0;
        this.elements.statFees.textContent = this.formatCurrency(summary.total_fees ?? 0);
    },

    async loadModuleData() {
        this.elements.recordsGrid.innerHTML = '<div style="padding: 24px;">Loading records...</div>';
        const result = await this.request(`api/admin/list.php?module=${encodeURIComponent(this.activeModule)}`);
        const rows = Array.isArray(result.rows) ? result.rows : [];
        this.currentRows = rows;
        this.renderRows(rows);
    },

    renderRows(rows) {
        this.elements.recordsGrid.className = this.isListModule(this.activeModule) ? 'records-grid records-list' : 'records-grid';

        if (rows.length === 0) {
            this.elements.recordsGrid.innerHTML = '<div style="padding: 24px; color: var(--text-muted);">No records found.</div>';
            return;
        }

        const html = rows.map((row) => this.rowTemplate(row)).join('');
        this.elements.recordsGrid.innerHTML = html;
    },

    rowTemplate(row) {
        const module = this.activeModule;
        const isListModule = this.isListModule(module);
        let title = '';
        let infoItems = [];
        let message = '';
        let unreadBadge = '';

        if (module === 'admissions') {
            title = `${this.escape(row.child_first_name)} ${this.escape(row.child_last_name)}`;
            infoItems = [
                { icon: 'fas fa-graduation-cap', label: 'Program', value: row.program_interest },
                { icon: 'fas fa-user-friends', label: 'Parent', value: `${row.parent_first_name} ${row.parent_last_name}` },
                { icon: 'fas fa-envelope', label: 'Email', value: row.parent_email },
                { icon: 'fas fa-phone', label: 'Phone', value: row.parent_phone }
            ];
            message = row.additional_notes;
            unreadBadge = Number(row.is_read) === 0
                ? '<span class="admin-badge admin-badge-unread">New Application</span>'
                : '<span class="admin-badge admin-badge-read">Reviewed</span>';
        }

        if (module === 'contacts') {
            title = this.escape(row.full_name);
            infoItems = [
                { icon: 'fas fa-tag', label: 'Subject', value: row.subject },
                { icon: 'fas fa-envelope', label: 'Email', value: row.email },
                { icon: 'fas fa-phone', label: 'Phone', value: row.phone }
            ];
            message = row.message;
            unreadBadge = Number(row.is_read) === 0
                ? '<span class="admin-badge admin-badge-unread">New Message</span>'
                : '<span class="admin-badge admin-badge-read">Read</span>';
        }

        if (module === 'enrollments') {
            title = this.escape(row.student_name);
            infoItems = [
                { icon: 'fas fa-school', label: 'Class', value: row.class_name },
                { icon: 'fas fa-calendar-star', label: 'Enrolled', value: row.enrollment_date },
                { icon: 'fas fa-user-tie', label: 'Parent', value: row.parent_name },
                { icon: 'fas fa-info-circle', label: 'Status', value: row.status }
            ];
            message = row.notes;
        }

        if (module === 'students') {
            title = this.escape(row.full_name);
            infoItems = [
                { icon: 'fas fa-school', label: 'Class', value: row.class_name },
                { icon: 'fas fa-user-tie', label: 'Parent', value: row.parent_name },
                { icon: 'fas fa-phone', label: 'Parent No.', value: row.parent_phone },
                { icon: 'fas fa-envelope', label: 'Parent Email', value: row.parent_email },
            ];
            message = row.notes;
        }

        if (module === 'teachers') {
            title = this.escape(row.full_name);
            infoItems = [
                { icon: 'fas fa-briefcase', label: 'Role', value: row.role_title },
                { icon: 'fas fa-school', label: 'Class', value: row.class_name },
                { icon: 'fas fa-dumbbell', label: 'Activity', value: row.activity_training },
                { icon: 'fas fa-phone', label: 'Phone', value: row.phone },
                { icon: 'fas fa-mobile-alt', label: 'Contact', value: row.parent_phone || row.phone },
            ];
            message = row.bio;
        }

        if (module === 'payments') {
            title = this.escape(row.student_name);
            infoItems = [
                { icon: 'fas fa-money-bill-wave', label: 'Amount', value: this.formatCurrency(row.amount) },
                { icon: 'fas fa-university', label: 'Method', value: row.payment_method },
                { icon: 'fas fa-calendar-alt', label: 'Term', value: row.term_label }
            ];
            message = row.notes;
        }

        const readButton = (module === 'admissions' || module === 'contacts') && Number(row.is_read) === 0
            ? `<button class="admin-action-btn" data-action="read" data-module="${module}" data-id="${row.id}"><i class="fas fa-check"></i> Mark Read</button>`
            : '';
        const isProfileModule = ['students', 'teachers', 'enrollments'].includes(module);
        const cardClass = isProfileModule ? 'record-card profile-card' : 'record-card';

        const infoHtml = infoItems.map(item => `
            <div class="record-info-item">
                <i class="${item.icon}"></i>
                <span class="record-info-label">${item.label}:</span>
                <span>${this.escape(item.value)}</span>
            </div>
        `).join('');

        if (isListModule) {
            const listSummary = infoItems.map(item => `
                <span class="list-chip">
                    <i class="${item.icon}"></i> ${this.escape(item.label)}: ${this.escape(item.value ?? '-')}
                </span>
            `).join('');

            return `
                <div class="record-list-item profile-card" data-record-id="${Number(row.id) || 0}">
                    <div class="record-list-main">
                        <h4>${title}</h4>
                        <div class="record-list-meta">${listSummary}</div>
                    </div>
                    <div class="record-list-actions">
                        <span class="view-profile-text"><i class="fas fa-id-badge"></i> View Profile</span>
                        <button class="admin-action-btn danger" data-action="delete" data-module="${module}" data-id="${row.id}">
                            <i class="fas fa-trash"></i> Delete
                        </button>
                    </div>
                </div>
            `;
        }

        return `
            <div class="${cardClass}" data-record-id="${Number(row.id) || 0}">
                <div class="record-card-header">
                    <h4>${title}</h4>
                    ${unreadBadge}
                </div>
                <div class="record-card-body">
                    <div class="record-info-group">
                        ${infoHtml}
                        ${message ? `<div class="record-message-box"><strong>Note/Message:</strong><br>${this.escape(message)}</div>` : ''}
                    </div>
                </div>
                <div class="record-card-footer">
                    <div class="record-meta">
                        <span><i class="far fa-clock"></i> ${this.formatDate(row.created_at)}</span>
                    </div>
                    <div class="admin-actions">
                        ${readButton}
                        <button class="admin-action-btn danger" data-action="delete" data-module="${module}" data-id="${row.id}">
                            <i class="fas fa-trash"></i> Delete
                        </button>
                    </div>
                </div>
            </div>
        `;
    },

    switchModule(module) {
        this.activeModule = module;
        this.closeProfileModal();
        this.elements.sidebarLinks.forEach((link) => {
            link.classList.toggle('active', link.dataset.module === module);
        });
        this.closeSidebar();
        this.updateContext(module);
        
        // Reset view states
        this.elements.moduleDashboard.classList.add('hidden');
        this.elements.moduleData.classList.add('hidden');
        this.elements.moduleEnrollmentsAdd.classList.add('hidden');
        this.elements.modulePaymentsAdd.classList.add('hidden');

        if (module === 'dashboard') {
            this.elements.moduleDashboard.classList.remove('hidden');
            this.loadSummary().catch(console.error);
        } else if (module === 'enrollments-add') {
            this.elements.moduleEnrollmentsAdd.classList.remove('hidden');
        } else if (module === 'payments-add') {
            this.elements.modulePaymentsAdd.classList.remove('hidden');
        } else {
            this.elements.moduleData.classList.remove('hidden');
            this.elements.heading.textContent = this.labelForModule(module);
            if (this.elements.moduleSearch) this.elements.moduleSearch.value = '';
            this.loadModuleData().catch((error) => this.showNotice(error.message, 'error'));
        }
    },

    shouldLoadTableData(module) {
        return ['admissions', 'contacts', 'students', 'teachers', 'enrollments', 'payments'].includes(module);
    },

    isListModule(module) {
        return ['students', 'teachers'].includes(module);
    },

    updateContext(module) {
        if (!this.elements.contextText) return;
        const labels = {
            dashboard: 'Dashboard overview and activity',
            admissions: 'Review and manage admission applications',
            contacts: 'Handle parent and guardian inquiries',
            students: 'Student list and parent contact numbers',
            teachers: 'Teacher list and parent/guardian contact numbers',
            enrollments: 'Student enrollment records',
            'enrollments-add': 'Create a new enrollment record',
            payments: 'Payment history and fee tracking',
            'payments-add': 'Record a new payment entry',
        };

        this.elements.contextText.textContent = labels[module] || 'Administrative workspace';
    },

    toggleSidebar() {
        this.elements.sidebar?.classList.toggle('show');
        this.elements.sidebarOverlay?.classList.toggle('hidden');
    },

    closeSidebar() {
        this.elements.sidebar?.classList.remove('show');
        this.elements.sidebarOverlay?.classList.add('hidden');
    },

    handleSearch() {
        const query = this.elements.moduleSearch.value.toLowerCase().trim();
        const cards = this.elements.recordsGrid.querySelectorAll('.record-card');

        cards.forEach((card) => {
            const text = card.textContent.toLowerCase();
            card.style.display = text.includes(query) ? '' : 'none';
        });
    },

    toggleInlineForms() {
        // This function is now deprecated as forms are in their own modules
    },

    async markAsRead(module, id) {
        try {
            await this.request('api/admin/mark-read.php', {
                method: 'POST',
                data: { module, id },
            });

            await this.refreshDashboard();
            this.showNotice('Marked as read.', 'success');
        } catch (error) {
            this.showNotice(error.message, 'error');
        }
    },

    async deleteRecord(module, id) {
        if (!window.confirm('Delete this record permanently?')) {
            return;
        }

        try {
            await this.request('api/admin/delete.php', {
                method: 'POST',
                data: { module, id },
            });

            await this.refreshDashboard();
            this.showNotice('Record deleted.', 'success');
        } catch (error) {
            this.showNotice(error.message, 'error');
        }
    },

    async handleEnrollment(event) {
        event.preventDefault();
        const data = Object.fromEntries(new FormData(event.target).entries());

        try {
            await this.request('api/admin/create-enrollment.php', {
                method: 'POST',
                data,
            });

            event.target.reset();
            await this.refreshDashboard();
            this.showNotice('Enrollment saved successfully.', 'success');
            setTimeout(() => this.switchModule('enrollments'), 800);
        } catch (error) {
            this.showNotice(error.message, 'error');
        }
    },

    async handlePayment(event) {
        event.preventDefault();
        const data = Object.fromEntries(new FormData(event.target).entries());

        try {
            await this.request('api/admin/create-payment.php', {
                method: 'POST',
                data,
            });

            event.target.reset();
            await this.refreshDashboard();
            this.showNotice('Payment recorded successfully.', 'success');
            setTimeout(() => this.switchModule('payments'), 800);
        } catch (error) {
            this.showNotice(error.message, 'error');
        }
    },

    showDashboard(user) {
        this.elements.loginView.classList.add('hidden');
        this.elements.dashboardView.classList.remove('hidden');
        this.elements.userLabel.textContent = user.display_name;
        if (this.elements.welcomeLabel) {
            this.elements.welcomeLabel.textContent = user.display_name;
        }
        this.updateContext(this.activeModule);
    },

    showLogin() {
        this.closeProfileModal();
        this.elements.dashboardView.classList.add('hidden');
        this.elements.loginView.classList.remove('hidden');
    },

    showLoginNotice(message, type = 'error') {
        const notice = this.elements.loginNotice;
        if (!notice) return;

        if (!message) {
            notice.classList.add('hidden');
            notice.textContent = '';
            return;
        }

        notice.textContent = message;
        notice.className = `admin-notice ${type}`;
        notice.classList.remove('hidden');
    },

    showNotice(message, type = 'info') {
        const notice = this.elements.notice;
        notice.textContent = message;
        notice.className = `admin-notice ${type}`;
        notice.classList.remove('hidden');

        clearTimeout(this.noticeTimer);
        this.noticeTimer = setTimeout(() => {
            notice.classList.add('hidden');
        }, 4500);
    },

    async request(url, { method = 'GET', data = null } = {}) {
        const options = {
            method,
            headers: {},
            credentials: 'same-origin',
        };

        if (data && method !== 'GET') {
            options.headers['Content-Type'] = 'application/json';
            options.body = JSON.stringify(data);
        }

        const response = await fetch(url, options);
        let result = {};

        try {
            result = await response.json();
        } catch (_error) {
            throw new Error('Unexpected server response.');
        }

        if (!response.ok || result.success === false) {
            throw new Error(result.message || 'Request failed.');
        }

        return result;
    },

    labelForModule(module) {
        const labels = {
            admissions: 'Admissions',
            contacts: 'Contacts',
            students: 'Students',
            teachers: 'Teachers',
            enrollments: 'Enrollments',
            payments: 'Payments',
        };
        return labels[module] || 'Records';
    },

    formatDate(value) {
        if (!value) return '-';
        const isoValue = String(value).replace(' ', 'T');
        const date = new Date(isoValue);
        if (Number.isNaN(date.getTime())) return this.escape(value);
        return date.toLocaleString();
    },

    formatCurrency(value) {
        let amount = Number(value || 0);
        let suffix = '';

        if (amount >= 1000000) {
            amount = amount / 1000000;
            suffix = 'M';
        } else if (amount >= 1000) {
            amount = amount / 1000;
            suffix = 'K';
        }

        // Round to 1 decimal place if there is a fractional part after shortening
        const formatted = amount % 1 === 0 ? amount : amount.toFixed(1);
        return `UGX ${formatted}${suffix}`;
    },

    escape(value) {
        const text = String(value ?? '');
        return text
            .replaceAll('&', '&amp;')
            .replaceAll('<', '&lt;')
            .replaceAll('>', '&gt;')
            .replaceAll('"', '&quot;')
            .replaceAll("'", '&#039;');
    },

    loadTheme() {
        const savedTheme = localStorage.getItem('admin_theme');
        this.applyTheme(savedTheme === 'dark' ? 'dark' : 'light');
    },

    toggleTheme() {
        const isDark = document.body.classList.contains('theme-dark');
        this.applyTheme(isDark ? 'light' : 'dark');
    },

    applyTheme(theme) {
        const isDark = theme === 'dark';
        document.body.classList.toggle('theme-dark', isDark);
        localStorage.setItem('admin_theme', isDark ? 'dark' : 'light');

        if (this.elements.themeToggleText) {
            this.elements.themeToggleText.textContent = isDark ? 'Light Mode' : 'Dark Mode';
        }
        if (this.elements.themeToggleBtn) {
            this.elements.themeToggleBtn.setAttribute('aria-pressed', isDark ? 'true' : 'false');
            this.elements.themeToggleBtn.setAttribute('aria-label', isDark ? 'Switch to light mode' : 'Switch to dark mode');
            const icon = this.elements.themeToggleBtn.querySelector('i');
            if (icon) {
                icon.className = isDark ? 'fas fa-sun' : 'fas fa-moon';
            }
        }
    },
};

document.addEventListener('DOMContentLoaded', () => AdminDashboard.init());
