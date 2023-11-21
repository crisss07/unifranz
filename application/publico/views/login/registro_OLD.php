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
            <h3>REGISTRO</h3> 
            <p class="texto-registro">Bienvenido, para el registro primero tenemos que realizar una verificación si todo va bien podras completar tu registro. Por favor llena la siguiente información</p>
          </div>
          <div class="panel__left-body">
            <form action="#">
              <div class="form-group" id="ocultar_sede">
                <label for="sede">Sede</label>
                <select class="form-control" name="sede" id="sede">
                  <option value="">-----Selecciona tu sede-----</option>
                  <?php foreach ($sede as $key => $value): ?>
                    <option value="<?php echo $value->id; ?>"><?php echo $value->sede; ?></option>
                  <?php endforeach ?>
                </select>
              </div>
              <div class="form-group" id="ocultar_carrera">
                <label for="sede">Carrera</label>
                <select class="form-control" name="carrera" id="carrera">
                  <option value="">-----Selecciona tu carrera-----</option>
                  <?php foreach ($carrera as $key => $carre): ?>
                    <option value="<?php echo $carre->id; ?>"><?php echo $carre->carrera; ?></option>
                  <?php endforeach ?>
                </select>
              </div>
              <div class="form-group" id="ocultar_ci">
                <label for="ci">Carnet Identidad</label>
                <input type="text" name="ci" id="ci" class="form-control" placeholder="carnet identidad" oninput="validarNumero(this)"/>
              </div>
              <div id="mensaje">

              </div>
              <div class="form-group text-center" id="ocultar_btn_verificar">
                <input type="button" value="Verificar" class="btn btn-primary" onclick="verificar();" />
              </div>

              <div class="form-group" id="ocultar_celular">
                <label for="celular">Celular</label>
                <input type="text" name="celular" id="celular" class="form-control" placeholder="celular" oninput="validarNumeroCelular(this)"/>
              </div>

              <div class="form-group" id="ocultar_email">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="email" oninput="validarCorreo(this)"/>
              </div>

              <div class="form-group" id="ocultar_contrasena">
                <label for="contrasena">Contraseña</label>
                <input type="password" name="contrasena" id="contrasena" class="form-control" placeholder="contraseña"/>
              </div>

              <div id="mensaje_registro">

              </div>

              <div class="form-group text-center" id="ocultar_btn_registrar">
                <input type="button" value="Registrar" class="btn btn-primary" onclick="registrar();" />
              </div>
              <input type="hidden" name="est_tit_id" id="est_tit_id">
            </form>
          </div>
          <div class="panel__left-footer text-center">
            <!-- <a href="#">¿Olvidaste tu contraseña?</a> -->
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
      // document.addEventListener("keydown", function(event) {
      //   if (event.keyCode === 13) {
      //     verificar()
      //   } 
      // });

      function validarNumero(input) {
        // Eliminar caracteres no numéricos
        input.value = input.value.replace(/[^0-9]/g, '');
      }

      function validarNumeroCelular(input) {
        // Eliminar caracteres no numéricos
        input.value = input.value.replace(/[^0-9]/g, '');

        // Limitar la longitud a ocho caracteres
        if (input.value.length > 8) {
            input.value = input.value.slice(0, 8);
        }
      }

      function validarCorreo(input) {
        // Expresión regular para validar un correo electrónico
        var regexCorreo = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

        if (regexCorreo.test(input.value)) {
            console.log('Correo electrónico válido');
            // Aquí puedes realizar acciones adicionales si el correo es válido
        } else {
            console.log('Correo electrónico inválido');
            // Aquí puedes realizar acciones adicionales si el correo es inválido
        }
      }

      function verificar() {
          var sede = $('#sede').val();
          var carrera = $('#carrera').val();
          var ci = $('#ci').val();
          var enlace  = '<?php echo $this->tool_entidad->sitioindex(); ?>';
          var iniciaSesion = enlace+'Login';
          $.ajax({
              url: enlace+'Login/ajax_verifica',
              type: 'POST',
              dataType: 'json',
              data: { sede: sede, carrera: carrera, ci: ci },
              success: function(data) {
                  if(data.error){
                    if (data.tipo == 'no existe') {
                      Swal.fire({
                        title: data.message,
                        text: "Si no cuentas con ningun registro en la red de Unifranz, comunícate con Servicios Estudiantiles de tu sede!",
                        icon: "error",
                        confirmButtonColor: '#3085d6', // Cambia el color del botón OK
                        confirmButtonText: 'Ok' // Cambia el texto del botón OK
                      });
                    } else {
                      var elementoMensaje = document.getElementById("mensaje");
                      var codigoHTML = `<span class="dato-mensaje"> ${data.message} </span><br><br>`;
                      elementoMensaje.innerHTML = codigoHTML;
                    }
                  } else {
                    if (data.tipo == 'registrado') {
                      Swal.fire({
                          title: data.message,
                          text: 'Inicia Sesión',
                          icon: 'info',
                          confirmButtonColor: '#3085d6', // Cambia el color del botón OK
                          confirmButtonText: 'Aquí' // Cambia el texto del botón OK
                      }).then((result) => {
                          if (result.isConfirmed) {
                              // Redirige a otro lugar cuando se hace clic en el botón OK
                              window.location.href = iniciaSesion;
                          }
                      });
                    } else {
                      document.getElementById('ocultar_sede').style.display = 'none';
                      document.getElementById('ocultar_carrera').style.display = 'none';
                      document.getElementById('ocultar_ci').style.display = 'none';
                      document.getElementById('ocultar_btn_verificar').style.display = 'none';
                      document.getElementById('mensaje').style.display = 'none';

                      document.getElementById('ocultar_celular').style.display = 'block';
                      document.getElementById('ocultar_email').style.display = 'block';
                      document.getElementById('ocultar_contrasena').style.display = 'block';
                      document.getElementById('ocultar_btn_registrar').style.display = 'block';
                      document.getElementById('mensaje_registro').style.display = 'block';
                      var miInput = document.getElementById('est_tit_id');

                      // Establece un valor en el campo de entrada
                      miInput.value = data.est_titu_id;
                      Swal.fire({
                        title: data.message,
                        text: "Por Favor completa el siguiente formulario para terminar con tu registro!",
                        icon: "success",
                        confirmButtonColor: '#3085d6', // Cambia el color del botón OK
                        confirmButtonText: 'Ok' // Cambia el texto del botón OK
                      });
                    }
                  }
              }
          });
      }

      function registrar() {
          var est_tit_id = $('#est_tit_id').val();
          var celular = $('#celular').val();
          var email = $('#email').val();
          var contrasena = $('#contrasena').val();
          var enlace  = '<?php echo $this->tool_entidad->sitioindex(); ?>';
          var iniciaSesion = enlace+'Login';
          $.ajax({
              url: enlace+'Login/ajax_registrar',
              type: 'POST',
              dataType: 'json',
              data: { est_tit_id: est_tit_id, celular: celular, email: email, contrasena: contrasena },
              success: function(data) {
                  if(data.error){
                      var elementoMensaje = document.getElementById("mensaje_registro");
                      var codigoHTML = `<span class="dato-mensaje"> ${data.message} </span><br><br>`;
                      elementoMensaje.innerHTML = codigoHTML;
                  } else {
                    Swal.fire({
                        title: data.message,
                        text: "Felicidades!",
                        icon: "success",
                        confirmButtonColor: '#3085d6', // Cambia el color del botón OK
                        confirmButtonText: 'Ok' // Cambia el texto del botón OK
                      });
                    setTimeout(function () {
                        window.location.href = iniciaSesion;
                    }, 5000); 
                  }
              }
          });
      }
    </script>
  </body>
</html>
