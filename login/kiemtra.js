const form = document.querySelector('form');
form.onsubmit = (e) => {
  if (form.checkValidity() === false) {
    //Ngăn ko cho form được gửi đi
    e.preventDefault();
    e.stopPropagation()
  }
  form.classList.add('was-validated');
};