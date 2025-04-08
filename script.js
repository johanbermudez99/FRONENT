/* script.js */
/*
Funciones JS nativas para alternar entre login y registro:
*/
function mostrarRegistro() {
    document.querySelector('.login-container').classList.add('hidden');
    document.querySelector('.registro-container').classList.remove('hidden');
  }
  function volverLogin() {
    document.querySelector('.registro-container').classList.add('hidden');
    document.querySelector('.login-container').classList.remove('hidden');
  }