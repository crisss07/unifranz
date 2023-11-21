document.addEventListener("keydown", function(event) {
  // Mostrar el código de la tecla presionada en la consola
  // console.log("Tecla presionada - Código:", event.keyCode);
  if (event.keyCode === 13) {
    ingresar()
  } 
});

function validarNumero(input) {
  // Eliminar caracteres no numéricos
  input.value = input.value.replace(/[^0-9]/g, '');
}

function verificar() {
    var sede = $('#sede').val();
    var carrera = $('#carrera').val();
    var ci = $('#ci').val();
    var contar = 3;

    // var elementoMensaje = document.getElementById("mensaje");
    // var mensajes = "";

    // if (!isNaN(sede) && parseInt(sede) == sede && sede > 0) {
    //     contar++;
    // } else {
    //     mensajes += `<span class="dato-mensaje">Debe seleccionar una Sede</span><br>`;
    // }

    // if (!isNaN(carrera) && parseInt(carrera) == carrera && carrera > 0) {
    //     contar++;
    // } else {
    //     mensajes += `<span class="dato-mensaje">Debe seleccionar una Carrera</span><br>`;
    // }

    // if (!isNaN(ci) && parseInt(ci) == ci && ci > 0) {
    //     contar++;
    // } else {
    //     mensajes += `<span class="dato-mensaje">Debe llenar un CI válido</span><br>`;
    // }

    // elementoMensaje.innerHTML = mensajes;

    if (contar == 3) {
      var enlace = '<?php echo $enlace; ?>';
      $.ajax({
          url: enlace+'Login/ajax_verifica',
          type: 'POST',
          dataType: 'json',
          data: { sede: sede, carrera: carrera, ci: ci },
          success: function(data) {
              if(data.error){
                var elementoMensaje = document.getElementById("mensaje");
                var codigoHTML = `<span class="dato-mensaje"> ${data.message} </span><br><br>`;
                elementoMensaje.innerHTML = codigoHTML;
              } else {
                window.location.href = enlace+'Inicio';
              }
          }
      });
    } 
  
}

function registrar() {
    var email = $('#email').val();
    var password = $('#password').val();
    var enlace  = '<?php echo $this->tool_entidad->sitioindex(); ?>';
    $.ajax({
        url: enlace+'Login/ajax_login',
        type: 'POST',
        dataType: 'json',
        data: { email: email, password: password },
        success: function(data) {
            if(data.error){
                // alert(data.message);
                var elementoMensaje = document.getElementById("mensaje");
                var codigoHTML = `<span class="dato-mensaje"> ${data.message} </span><br><br>`;
                elementoMensaje.innerHTML = codigoHTML;

            } else {
              // Redireccionar a Login/principal
        window.location.href = enlace+'Inicio';
                // alert('si');
            }
        }
    });
}