document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    const firstNameInput = document.getElementById('first-name-input');
    const lastNameInput = document.getElementById('last-name-input');
    const emailInput = document.getElementById('email');
    const passwordInput = document.getElementById('password');
    const verifyPasswordInput = document.getElementById('verify-password');

    form.addEventListener('submit', function(event) {
        // Check if first name is empty
        if (firstNameInput.value.trim() === '') {
            event.preventDefault();
            document.getElementById('empty-first-name').classList.remove('hide');
        }

        // Check if last name is empty
        if (lastNameInput.value.trim() === '') {
            event.preventDefault();
            document.getElementById('empty-last-name').classList.remove('hide');
        }

        // Check if email is empty or invalid
        if (emailInput.value.trim() === '') {
            event.preventDefault();
            document.getElementById('empty-email').classList.remove('hide');
        }

        // Check if password is empty or invalid
        if (passwordInput.value.trim() === '') {
            event.preventDefault();
            document.getElementById('empty-password').classList.remove('hide');
        }

        // Check if confirm password is empty or does not match password
        if (verifyPasswordInput.value.trim() === '') {
            event.preventDefault();
            document.getElementById('empty-verify-password').classList.remove('hide');
        } else if (verifyPasswordInput.value !== passwordInput.value) {
            event.preventDefault();
            document.getElementById('verify-password-error').classList.remove('hide');
        }
    });

    // Hide error messages on input change
    [firstNameInput, lastNameInput, emailInput, passwordInput, verifyPasswordInput].forEach(input => {
        input.addEventListener('input', function() {
            const errorMessages = this.parentElement.querySelectorAll('.error-message');
            errorMessages.forEach(message => message.classList.add('hide'));
        });
    });
});
