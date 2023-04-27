  const emailInput = document.querySelector('input[name="email"]');
  const messageInput = document.querySelector('textarea[name="message"]');
  const emailError = document.querySelector('.email-error');
  const messageError = document.querySelector('.message-error');
  const submitButton = document.querySelector('button[type="submit"]');
  
  submitButton.addEventListener('click', function(event) {
    event.preventDefault();
  
    let hasError = false;
  
    if (emailInput.value.trim() === '') {
      emailError.textContent = 'Wymagany adres e-mail';
      emailError.style.color = 'red';
      hasError = true;
    } else if (!/\S+@\S+\.\S+/.test(emailInput.value.trim())) {
      emailError.textContent = 'Niepoprawny adres e-mail';
      emailError.style.color = 'red';
      hasError = true;
    } else {
      emailError.textContent = 'Poprawny adres e-mail';
      emailError.style.color = 'green';
    }
  
    if (messageInput.value.trim() === '') {
      messageError.textContent = 'Wymagana wiadomość';
      messageError.style.color = 'red';
      hasError = true;
    } else {
      messageError.textContent = 'Poprawnie wypełnione pole';
      messageError.style.color = 'green';
    }
  
    if (!hasError) {
      submitButton.closest('form').submit();
    }
  });