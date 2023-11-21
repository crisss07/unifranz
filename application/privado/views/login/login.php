<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<!-- <link rel="icon" type="image/png" href="<?php echo $this->tool_entidad->sitio(); ?>files/login/images/icons/favicon.ico"/> -->
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $this->tool_entidad->sitio(); ?>files/public/assets/images/logo-unifranz-principal.png">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $this->tool_entidad->sitio(); ?>files/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $this->tool_entidad->sitio(); ?>files/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $this->tool_entidad->sitio(); ?>files/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $this->tool_entidad->sitio(); ?>files/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo $this->tool_entidad->sitio(); ?>files/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $this->tool_entidad->sitio(); ?>files/login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $this->tool_entidad->sitio(); ?>files/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo $this->tool_entidad->sitio(); ?>files/login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $this->tool_entidad->sitio(); ?>files/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $this->tool_entidad->sitio(); ?>files/login/css/main.css">
	<style>
		#mensaje {
		  	width: 100%; /* Ancho del div */
		  	background-color: transparent; /* Fondo transparente */
		  	/*margin-top: 0;*/
    		margin-bottom: -30px;
		}
		.dato-mensaje{
			color: red; 
			font-size: 15px;
		}
		.obligatorio{
			color: red;
		}
	</style>
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('<?php echo $this->tool_entidad->sitio(); ?>files/login/images/bg_01.jpg');">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				<form class="login100-form validate-form flex-sb flex-w" id="miFormulario">
					<span class="login100-form-title p-b-53">
                		<img src="<?php echo $this->tool_entidad->sitio(); ?>files/public/assets/images/logo-unifranz-principal.png" height="110px" id="logo">
					</span>
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Email <span class="obligatorio">*</span>
						</span>
					</div>
					<div class="wrap-input100">
						<input class="input100" type="email" name="email" id="email" placeholder="email" autofocus>
						<span class="focus-input100"></span>
					</div>
					
					<div class="p-t-13 p-b-9">
						<span class="txt1">
							Contraseña <span class="obligatorio">*</span>
						</span>
					</div>
					<div class="wrap-input100">
						<input class="input100" type="password" name="password" id="password" placeholder="contraseña">
						<span class="focus-input100"></span>
					</div>
					<div id="mensaje">

					</div>

					<div class="container-login100-form-btn m-t-17">
						<button type="button" class="login100-form-btn" onclick="ingresar();">
							Ingresar
						</button>
					</div>

					<!--<div class="w-full text-center p-t-55">-->
					<!--	<span class="txt2">-->
					<!--		¿Olvidaste tu contraseña?-->
					<!--	</span>-->

					<!--	<a href="#" class="txt2 bo1">-->
					<!--		Recupera aquí-->
					<!--	</a>-->
					<!--</div>-->
					
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?php echo $this->tool_entidad->sitio(); ?>files/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo $this->tool_entidad->sitio(); ?>files/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo $this->tool_entidad->sitio(); ?>files/login/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo $this->tool_entidad->sitio(); ?>files/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo $this->tool_entidad->sitio(); ?>files/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo $this->tool_entidad->sitio(); ?>files/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo $this->tool_entidad->sitio(); ?>files/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo $this->tool_entidad->sitio(); ?>files/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo $this->tool_entidad->sitio(); ?>files/login/js/main.js"></script>
	<script>
    document.addEventListener("keydown", function(event) {
      // Mostrar el código de la tecla presionada en la consola
      console.log("Tecla presionada - Código:", event.keyCode);
      if (event.keyCode === 13) {
      	ingresar()
      } 
    });

	function ingresar() {
	    var email = $('#email').val();
	    var password = $('#password').val();
	    var enlace  = '<?php echo $this->tool_entidad->sitioadmin(); ?>';
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
	</script>
</body>
</html>