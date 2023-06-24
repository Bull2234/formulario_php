const form = document.getElementById('myForm');

form.addEventListener('submit', (event) => {
  const password = document.getElementById('password').value;
  const confirmar = document.getElementById('confirmar').value;

  if (password !== confirmar) {
    Swal.fire({
  title: 'Error!',
  text: 'las contraseñas no coincide',
  icon: 'error',
  confirmButtonText: 'Ok'
});
    event.preventDefault(); // evita que el formulario se envíe
  }
else {
  Swal.fire({
    title: '¡Excelente!',
    text: 'Datos registrados',
    icon: 'success',
    confirmButtonText: 'Ok'
  });

}
});
