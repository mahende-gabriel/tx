document.addEventListener('DOMContentLoaded', function () {
    const emailInput = document.getElementById('email');
    const invalidEmail = document.getElementById('invalid-email');
  
    emailInput.addEventListener('input', function () {
      if (!isValidEmail(emailInput.value)) {
        invalidEmail.style.display = 'block';
      } else {
        invalidEmail.style.display = 'none';
      }
    });
  
    function isValidEmail(email) {
      // Basic email format validation (you can use a more sophisticated method)
      const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      return emailPattern.test(email);
    }
  });

  
  document.addEventListener('DOMContentLoaded', function () {
    const passwordInput = document.getElementById('password');
    const confirmPasswordInput = document.getElementById('confirm-password');
    const passwordMismatch = document.getElementById('password-mismatch');
  
    confirmPasswordInput.addEventListener('input', function () {
      if (passwordInput.value !== confirmPasswordInput.value) {
        passwordMismatch.style.display = 'block';
      } else {
        passwordMismatch.style.display = 'none';
      }
    });
  });


  document.addEventListener('DOMContentLoaded', function () {
    const passwordInput = document.getElementById('password');
    const passwordValidation = document.getElementById('password-validation');
  
    passwordInput.addEventListener('input', function () {
      const password = passwordInput.value;
      const hasUppercase = /[A-Z]/.test(password);
      const hasSpecialCharacter = /[!@#$%^&*()_+{}\[\]:;<>,.?~\\/-]/.test(password);
      const isLengthValid = password.length >= 8;
  
      if (isLengthValid && hasUppercase && hasSpecialCharacter) {
        passwordValidation.style.display = 'none';
      } else {
        passwordValidation.style.display = 'block';
      }
    });
  });
  
  