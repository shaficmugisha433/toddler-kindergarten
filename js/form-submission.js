/**
 * ================================================
 * FORM SUBMISSION HANDLER - MySQL Backend
 * Toddler Town Kindergarten
 * ================================================
 */

const FormSubmissionHandler = {
    async submitToServer(form) {
        const submitBtn = form.querySelector('button[type="submit"]');
        const originalMarkup = submitBtn ? submitBtn.innerHTML : '';

        try {
            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
            }

            const formData = new FormData(form);
            const hiddenType = String(formData.get('form_type') || '').trim();
            const inferredType = form.id === 'admissionsForm' ? 'admission' : 'contact';
            formData.set('form_type', hiddenType || inferredType);

            const response = await fetch('api/forms/submit.php', {
                method: 'POST',
                body: formData,
                credentials: 'same-origin',
            });

            let result = {};
            try {
                result = await response.json();
            } catch (_error) {
                throw new Error('Unexpected server response.');
            }

            if (!response.ok || result.success === false) {
                throw new Error(result.message || 'Unable to submit form.');
            }

            this.showNotification(result.message || 'Form submitted successfully.', 'success');
            form.reset();
        } catch (error) {
            this.showNotification(error.message || 'Failed to submit form. Please try again.', 'error');
            console.error('Form submission error:', error);
        } finally {
            if (submitBtn) {
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalMarkup;
            }
        }
    },

    showNotification(message, type = 'info') {
        const existing = document.querySelector('.notification');
        if (existing) existing.remove();

        const notification = document.createElement('div');
        notification.className = `notification ${type}`;
        notification.setAttribute('role', 'alert');

        const icon = type === 'success'
            ? 'check-circle'
            : type === 'error'
                ? 'times-circle'
                : 'info-circle';

        notification.innerHTML = `
            <div class="notification-content">
                <i class="fas fa-${icon}"></i>
                <span>${message}</span>
            </div>
            <button class="notification-close" aria-label="Close notification">
                <i class="fas fa-times"></i>
            </button>
        `;

        notification.querySelector('.notification-close')?.addEventListener('click', () => {
            notification.classList.remove('show');
            setTimeout(() => notification.remove(), 250);
        });

        document.body.appendChild(notification);
        setTimeout(() => notification.classList.add('show'), 10);

        setTimeout(() => {
            if (!notification.parentElement) return;
            notification.classList.remove('show');
            setTimeout(() => {
                if (notification.parentElement) notification.remove();
            }, 250);
        }, 4500);
    },
};

if (typeof module !== 'undefined' && module.exports) {
    module.exports = FormSubmissionHandler;
}
