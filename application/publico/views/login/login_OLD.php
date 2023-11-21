<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Red Alumni</title>
    <!--custom style-->
    <link rel="stylesheet" href="<?php echo $this->tool_entidad->sitio(); ?>files/login_publico/css/style.css" />
    <!--bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  </head>
  
  <body class="px-4 px-lg-0">
    <div class="panel col-12 col-lg-8 offset-lg-2">
      <div class="row">
        <div class="panel__right col-lg-5 d-none d-lg-block py-5 px-3" style="background-image: url('<?php echo $this->tool_entidad->sitio(); ?>files/login_publico/imagenes/imagen-registro.png');">
          <div class="panel__right-title text-center">
            <!-- datos -->
          </div>
          <div class="panel__left-img text-center w-100">
            <!-- datos -->
          </div>
        </div>
        <div class="panel__left col-12 col-lg-7 py-4 px-4">
          <div class="panel__left-title text-center">  
            <br>
            <h3>Iniciar Sesión</h3> 
            <p class="texto-registro">Bienvenido, para el registro primero tenemos que realizar una verificación si todo va bien podras completar tu registro. Por favor llena la siguiente información</p>
          </div>
          <div class="panel__left-body">
            <form action="#">
              <div class="form-group">
                <label for="ci">Carnet Identidad</label>
                <input type="text" name="ci" id="ci" class="form-control" placeholder="CI." oninput="validarNumero(this)"/>
              </div>
              <div class="form-group">
                <label for="contrasena">Contraseña</label>
                <input type="password" name="contrasena" id="contrasena" class="form-control" placeholder="contraseña"/>
              </div>
              <div id="mensaje">

              </div>
              <div class="form-group text-center">
                <input type="button" value="Ingresar" class="btn btn-primary" onclick="ingresar();" />
              </div>
            </form>
          </div>
          <div class="panel__left-footer text-center">
            <a href="#" class="color-link" data-toggle="modal" data-target="#recuperarContraseñaModal">¿Olvidaste tu contraseña?</a><br>
            ¿No tienes cuenta? <a class="color-link" href="<?php echo $this->tool_entidad->sitioindex(); ?>Login/registro">Registrate</a>
          </div>
          <br>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal" id="recuperarContraseñaModal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Recuperar Contraseña</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- Formulario para ingresar el Carnet de Identidad -->
            <form id="recuperarContraseñaForm">
              <div class="form-group">
                <label for="carnetIdentidad">Carnet de Identidad:</label>
                <input type="text" class="form-control" id="carnetIdentidad" placeholder="Ingrese su Carnet de Identidad" oninput="validarNumero(this)">
              </div>
              <div id="mensaje_modal">
                
              </div>
              <div align="center">
                <button type="button" class="btn btn-primary mx-auto" onclick="recuperarContrasena()">Recuperar Contraseña</button>
              </div>
              
            </form>
          </div>
        </div>
      </div>
    </div>
    <!--boostrap-->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
    <!-- Incluir jQuery desde un CDN -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- <script src="<?php echo $this->tool_entidad->sitio(); ?>files/login_publico/js/main.js"></script> -->
    <script type="text/javascript">
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

      function ingresar() {
          var ci = $('#ci').val();
          var contrasena = $('#contrasena').val();
          // console.log(ci, contrasena);
          var enlace  = '<?php echo $this->tool_entidad->sitioindex(); ?>';
          var iniciaSesion = enlace+'Login';
          $.ajax({
              url: enlace+'Login/ajax_login',
              type: 'POST',
              dataType: 'json',
              data: { ci: ci, contrasena: contrasena },
              success: function(data) {
                  if(data.error){
                      var elementoMensaje = document.getElementById("mensaje");
                      var codigoHTML = `<span class="dato-mensaje"> ${data.message} </span><br><br>`;
                      elementoMensaje.innerHTML = codigoHTML;
                  } else {
                    window.location.href = iniciaSesion;
                  }
              }
          });
      }

      function recuperarContrasena() {
        var carnetIdentidad = $('#carnetIdentidad').val();
        if (carnetIdentidad.trim() === '') {
          var elementoMensajeModal = document.getElementById("mensaje_modal");
          var codigoHTMLModal = `<span class="dato-mensaje">Por favor, ingrese su Carnet de Identidad.</span><br><br>`;
          elementoMensajeModal.innerHTML = codigoHTMLModal;
          return;
        }
        var enlace  = '<?php echo $this->tool_entidad->sitioindex(); ?>';
        $.ajax({
            url: enlace+'Login/ajax_recuperar',
            type: 'POST',
            dataType: 'json',
            data: { carnetIdentidad: carnetIdentidad },
            success: function(data) {
                if(data.error){
                    var elementoMensaje = document.getElementById("mensaje_modal");
                    var codigoHTML = `<span class="dato-mensaje"> ${data.message} </span><br><br>`;
                    elementoMensaje.innerHTML = codigoHTML;
                } else {
                  $('#recuperarContraseñaModal').modal('hide');
                  Swal.fire({
                    title: "Felicidades!",
                    text: data.message,
                    icon: "success",
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Ok'
                  });
                }
            }
        });
      }
    </script>
  </body>
</html>
