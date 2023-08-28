document.addEventListener('DOMContentLoaded', function () {
    const emailInput = document.getElementById('email');
    const passwordInput = document.getElementById('password');
    const emailError = document.getElementById('email-error');
    const passwordError = document.getElementById('password-error');
  
    emailInput.addEventListener('input', function () {
      const email = emailInput.value;
      if (!isValidEmail(email)) {
        emailError.textContent = 'Invalid email format';
        emailError.style.display = 'block';
      } else {
        emailError.style.display = 'none';
      }
    });
  
    passwordInput.addEventListener('input', function () {
      const password = passwordInput.value;
      if (!isValidPassword(password)) {
        passwordError.textContent = 'Password must be at least 8 characters long';
        passwordError.style.display = 'block';
      } else {
        passwordError.style.display = 'none';
      }
    });
  
    function isValidEmail(email) {
      const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      return emailPattern.test(email);
    }
  
    function isValidPassword(password) {
      return password.length >= 8;
    }
  });
  



