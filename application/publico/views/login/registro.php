<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo $this->tool_entidad->sitio(); ?>files/web/styles.css">
    <!-- <link rel="stylesheet" href="<?php echo $this->tool_entidad->sitio(); ?>files/login_publico/css/style.css" /> -->
	
    <!-- Incluye el script de Bootstrap (jQuery es requerido) -->
	
		<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
	 <!-- ANIMACIONES -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	
	
    <title>UNIFRANZ</title>
</head>
<body>

<nav class="navbar navbar-expand-lg menu">
  <button class="navbar-toggler navbar-toggler-custom" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse montserrat-medium justify-content-end" style="font-size:14px;" id="navbarNav">
    <ul class="navbar-nav" data-aos="fade-right">
		<!-- 
      <li class="nav-item active">
		<a class="nav-link" href="#">INICIO</a>
      </li>
	   -->
	  <li class="nav-item">
			<a class="nav-link" href="<?php echo $this->tool_entidad->sitioindex(); ?>Web">PRINCIPAL</a>
    </li>
      <li class="nav-item">
		<a class="nav-link" href="<?php echo $this->tool_entidad->sitioindex(); ?>Web">EMPRESAS PARTICIPANTES</a>
      </li>
	  <!-- 
      <li class="nav-item">
		<a class="nav-link" href="#">OFERTAS DE TRABAJO</a>
      </li>
	   -->
      <li class="nav-item">
		<a class="nav-link" href="<?php echo $this->tool_entidad->sitioindex(); ?>Web">CRONOGRAMA</a>
      </li>
	  <!-- 
      <li class="nav-item">
		<a class="nav-link" href="#">TALENTO UNIFRANZ</a>
      </li>
	   -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:var(--color-principal);">
          INICIA SESIÓN
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?php echo $this->tool_entidad->sitioindex(); ?>Login">Alumni</a>
          <a class="dropdown-item" href="<?php echo $this->tool_entidad->sitioindex(); ?>LoginEmpresa">Empresa</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
	<!-- <div class="content" style="margin-top:80px;">
        <img src="<?php echo $this->tool_entidad->sitio(); ?>files/web/imagenes/cabecera.png" class="w-100" alt="unifranz" >
	</div> -->
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
	<div class="d-none d-sm-block" style="margin-bottom:-40px;">&nbsp;</div>
	<div class="container">
		<div class="row justify-content-center m-0 b-0 montserrat-regular d-flex align-items-center">

			<!-- desde aqui login -->
			<div class="panel col-12 col-lg-10 offset-lg-0" style="margin-top:130px; margin-bottom:30px;">
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
			<!-- fin login -->

		</div>
	</div>

	
		<div class="row justify-content-center m-0 b-0 footer-uni">        
        <div class="col-lg-4">
				</div>      
        <div class="col-lg-7 col-md-7 col-11 text-end">
		<br>  
		<br>  
		<br>  
				<div class="row justify-content-end p-2" data-aos="fade-up" data-aos-delay="200">        
				  <div class="col-lg-1 col-md-1 col-2 p-1">
					<a href="https://www.facebook.com/unifranz.edu" target="_blank">
					  <img src="<?php echo $this->tool_entidad->sitio(); ?>files/web/imagenes/rrss/fb.png" class="img-rrss" alt="unifranz">
					</a>
				  </div> 
				  <div class="col-lg-1 col-md-1 col-2 p-1">
					<a href="https://www.instagram.com/unifranz/?hl=es" target="_blank">
					  <img src="<?php echo $this->tool_entidad->sitio(); ?>files/web/imagenes/rrss/ig.png" class="img-rrss" alt="unifranz">
					</a>
				  </div> 
				  <div class="col-lg-1 col-md-1 col-2 p-1">
					<a href="https://www.tiktok.com/@unifranz.oficial" target="_blank">
					  <img src="<?php echo $this->tool_entidad->sitio(); ?>files/web/imagenes/rrss/tk.png" class="img-rrss" alt="unifranz">
					</a>
				  </div> 
				  <div class="col-lg-1 col-md-1 col-2 p-1">
					<a href="https://twitter.com/UnifranzBolivia" target="_blank">
					  <img src="<?php echo $this->tool_entidad->sitio(); ?>files/web/imagenes/rrss/tw.png" class="img-rrss" alt="unifranz">
					</a>
				  </div> 
				</div>
				<div class="row justify-content-end">        
				  <div class="col-lg-8 col-md-8 col-11 p-1">
					  <img src="<?php echo $this->tool_entidad->sitio(); ?>files/web/imagenes/rrss/logo-pie.png" data-aos="flip-up" alt="unifranz">
				  </div> 
				</div>
				<div class="row justify-content-end montserrat-regular" data-aos="fade-up" data-aos-delay="300">        
				  <div class="col-lg-3 col-md-3 col-11 p-2">
					<a href="https://api.whatsapp.com/send?phone=59171502211&text=%C2%A1Hola!%20Quiero%20recibir%20m%C3%A1s%20informaci%C3%B3n%20sobre%20la%20Red%20Alumni%20Unifranz" target="_blank" class="text-white u-none">
					  <img src="<?php echo $this->tool_entidad->sitio(); ?>files/web/imagenes/rrss/wp.png" class="img-rrss-2" alt="unifranz">
					  (+591) 715 022 11
					</a>
				  </div>     
				  <div class="col-lg-4 col-md-4 col-11 p-2">
					<a href="mailto: redalumin@unifranz.edu.bo" target="_blank" class="text-white u-none">
					  <img src="<?php echo $this->tool_entidad->sitio(); ?>files/web/imagenes/rrss/sobre.png" class="img-rrss-2" alt="unifranz">
					  redalumin<b class="colort-1">@</b>unifranz.edu.bo
					</a>
				  </div> 
				</div>
				<br><br><br>  
				<div class="row justify-content-end montserrat-regular text-white" data-aos="zoom-in" data-aos-delay="500">        
				  <div class="col-lg-3 col-md-3 col-11 text-center p-2">
					<b>UNIFRANZ</b><br>
					<a href="https://unifranz.edu.bo/" target="_blank" class="text-white u-none">
					  unifranz.edu.bo
					</a>
				  </div>     
				  <div class="col-lg-4 col-md-4 col-11 text-center p-2">
					<b>Red Alumni UNIFRANZ</b><br>
					<a href="https://www.alumni.unifranz.edu.bo/" target="_blank" class="text-white u-none">
					  alumni.unifranz.edu.bo
					</a>
				  </div>     
				  <div class="col-lg-5 col-md-5 col-11 text-center p-2">
					<b>Observatorio Nacional de Trabajo</b><br>
					<a href="https://ont.bolivia.bo/" target="_blank" class="text-white u-none">
					  ont.bolivia.bo
					</a>
				  </div>     
				</div>
				
		<br>
		</div>
		<a href="https://www.dibeltecnologia.com" class="p-dibel" target="_blank">
		Diseño y Desarrollo web: Dibel Soluciones en Tecnología
		</a>
    </div>
<script>
  AOS.init();
</script>
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
                    }, 3000); 
                  }
              }
          });
      }
    </script>
</body>
</html>
<style>
.rojo{
	border:2px solid red;
}
.verde{
	border:2px solid green;
}
.img-rrss{
	height:50px;width:auto;
}
.img-rrss-2{
	height:30px; width:auto;
}
.u-none{
	font-weight: 100;
	font-size:14px;
}
.u-none:hover{
	text-decoration:none;
}
.p-dibel{
	font-size:10px;
	color:#6699cc;
}
.p-dibel:hover{
	color:#6699cc;
	text-decoration:none;
}
.footer-uni{
	height:516px; 
	background-image: url('<?php echo $this->tool_entidad->sitio(); ?>files/web/imagenes/pie.png'); /* Ruta de la imagen de fondo */
    background-size: cover; /* Ajustar la imagen al tamaño del contenedor */
    background-position: center; /* Posición de la imagen en el contenedor */
}
/* Media Query para pantallas más pequeñas */
@media screen and (max-width: 600px) {

	.footer-uni{
		height:auto; 
	}
}
</style>
