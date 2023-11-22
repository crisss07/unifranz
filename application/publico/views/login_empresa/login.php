<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo $this->tool_entidad->sitio(); ?>files/web/styles.css">
    <!-- <link rel="stylesheet" href="<?php echo $this->tool_entidad->sitio(); ?>files/login_publico/css/style.css" /> -->
	
    <!-- Incluye el script de Bootstrap (jQuery es requerido) -->
	<!-- 
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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
      <!-- <li class="nav-item">
		<a class="nav-link" style="color:var(--color-principal);" href="<?php echo $this->tool_entidad->sitioindex(); ?>Login">INICIA SESIÓN</a>
      </li> -->
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
	          </div>
	          <div class="panel__left-img text-center w-100">
	          </div>
	        </div>
	        <div class="panel__left col-12 col-lg-7 py-4 px-4">
	          <div class="panel__left-title text-center">  
	            <br>
	            <h3>Iniciar Sesión</h3> 
	            <h3>Empresa</h3>
	            <p class="texto-registro">Bienvenido, ingresa los accesos que fueron proporcionados por Unifranz</p>
	          </div>
	          <div class="panel__left-body">
	            <form action="#">
	              <div class="form-group">
	                <label for="usuario">Usuario</label>
	                <input type="text" name="usuario" id="usuario" class="form-control" placeholder="usuario"/>
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
	        <!--   <div class="panel__left-footer text-center">
	            <a href="#" class="color-link" data-toggle="modal" data-target="#recuperarContraseñaModal">¿Olvidaste tu contraseña?</a><br>
	            ¿No tienes cuenta? <a class="color-link" href="<?php echo $this->tool_entidad->sitioindex(); ?>Login/registro">Registrate</a>
	          </div> -->
	          <br>
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
          var usuario = $('#usuario').val();
          var contrasena = $('#contrasena').val();
          // console.log(ci, contrasena);
          var enlace  = '<?php echo $this->tool_entidad->sitioindex(); ?>';
          var iniciaSesion = enlace+'LoginEmpresa';
          $.ajax({
              url: enlace+'LoginEmpresa/ajax_login',
              type: 'POST',
              dataType: 'json',
              data: { usuario: usuario, contrasena: contrasena },
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
