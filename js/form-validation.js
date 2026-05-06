/**
 * ============================================
 * FORM VALIDATION - Toddler Town Kindergarten
 * ============================================
 */

document.addEventListener('DOMContentLoaded', () => {
    FormValidation.init();
});

const FormValidation = {
    forms: [],

    init() {
        this.forms = Array.from(document.querySelectorAll('form[data-validate]'));
        if (this.forms.length === 0) return;

        this.forms.forEach((form) => {
            form.addEventListener('submit', (event) => this.handleSubmit(event, form));

            const inputs = form.querySelectorAll('input, textarea, select');
            inputs.forEach((input) => {
                input.addEventListener('blur', () => this.validateField(input));
                input.addEventListener('input', () => this.clearError(input));
                input.addEventListener('change', () => this.clearError(input));
            });
        });
    },

    handleSubmit(event, form) {
        event.preventDefault();

        let isValid = true;
        const requiredFields = form.querySelectorAll('input[required], textarea[required], select[required]');

        requiredFields.forEach((input) => {
            const fieldValid = this.validateField(input);
            if (!fieldValid) isValid = false;
        });

        if (isValid) {
            this.submitForm(form);
        }
    },

    validateField(input) {
        const type = (input.type || '').toLowerCase();
        const name = (input.name || '').toLowerCase();
        const value = type === 'checkbox' ? (input.checked ? '1' : '') : input.value.trim();
        let isValid = true;
        let errorMessage = '';

        if (input.hasAttribute('required') && value === '') {
            isValid = false;
            errorMessage = 'This field is required';
        }

        if (type === 'email' && value !== '') {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(value)) {
                isValid = false;
                errorMessage = 'Please enter a valid email address';
            }
        }

        if ((name.includes('phone') || type === 'tel') && value !== '') {
            const phoneRegex = /^[\d\s+\-()]{9,}$/;
            if (!phoneRegex.test(value)) {
                isValid = false;
                errorMessage = 'Please enter a valid phone number';
            }
        }

        if (input.hasAttribute('minlength') && value !== '') {
            const minLength = parseInt(input.getAttribute('minlength') || '0', 10);
            if (value.length < minLength) {
                isValid = false;
                errorMessage = `Minimum ${minLength} characters required`;
            }
        }

        if (input.hasAttribute('maxlength') && value !== '') {
            const maxLength = parseInt(input.getAttribute('maxlength') || '0', 10);
            if (value.length > maxLength) {
                isValid = false;
                errorMessage = `Maximum ${maxLength} characters allowed`;
            }
        }

        if (input.hasAttribute('pattern') && value !== '') {
            const pattern = new RegExp(input.getAttribute('pattern') || '');
            if (!pattern.test(value)) {
                isValid = false;
                errorMessage = input.title || 'Invalid format';
            }
        }

        if (!isValid) {
            this.showError(input, errorMessage);
        } else {
            this.clearError(input);
        }

        return isValid;
    },

    showError(input, message) {
        this.clearError(input);
        input.classList.add('error');
        input.setAttribute('aria-invalid', 'true');

        const errorDiv = document.createElement('div');
        errorDiv.classList.add('error-message');
        errorDiv.setAttribute('role', 'alert');
        errorDiv.innerHTML = `<i class="fas fa-exclamation-circle"></i> ${message}`;

        input.parentNode.appendChild(errorDiv);
    },

    clearError(input) {
        input.classList.remove('error');
        input.removeAttribute('aria-invalid');

        const existingError = input.parentNode.querySelector('.error-message');
        if (existingError) {
            existingError.remove();
        }
    },

    submitForm(form) {
        if (typeof FormSubmissionHandler !== 'undefined') {
            FormSubmissionHandler.submitToServer(form);
        } else {
            this.showNotification('Submission handler failed to load.', 'error');
        }
    },

    showNotification(message, type) {
        if (typeof FormSubmissionHandler !== 'undefined' && FormSubmissionHandler.showNotification) {
            FormSubmissionHandler.showNotification(message, type);
        }
    },
};

const notificationStyles = `
<style>
.notification {
    position: fixed;
    top: 100px;
    right: 20px;
    background: #fff;
    padding: 0.9rem 1.1rem;
    border-radius: 10px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    display: flex;
    align-items: center;
    gap: 10px;
    z-index: 10000;
    transform: translateX(420px);
    transition: transform 0.25s ease;
    max-width: 420px;
}

.notification.show {
    transform: translateX(0);
}

.notification.success {
    border-left: 4px solid #7bc950;
}

.notification.success i {
    color: #7bc950;
}

.notification.error {
    border-left: 4px solid #ff6b6b;
}

.notification.error i {
    color: #ff6b6b;
}

.notification-close {
    background: none;
    border: none;
    cursor: pointer;
    color: #666;
    margin-left: auto;
}

.error-message {
    color: #ff6b6b;
    font-size: 0.875rem;
    margin-top: 0.25rem;
    display: flex;
    align-items: center;
    gap: 0.25rem;
}

input.error, textarea.error, select.error {
    border-color: #ff6b6b;
}
</style>
`;

document.head.insertAdjacentHTML('beforeend', notificationStyles);
