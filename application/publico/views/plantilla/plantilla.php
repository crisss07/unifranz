<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
    <!-- Incluye el script de Bootstrap (jQuery es requerido) -->
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<!-- ANIMACIONES -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	
	<!-- Google tag (gtag.js) -->
	<script async src=https://www.googletagmanager.com/gtag/js?id=G-PBNZ2PBM11></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-PBNZ2PBM11');
	</script>

    <title>UNIFRANZ</title>
</head>
<body>

<nav class="navbar navbar-expand-lg menu">
  <button class="navbar-toggler navbar-toggler-custom" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse montserrat-medium justify-content-end" style="font-size:14px;" id="navbarNav">
    <ul class="navbar-nav" data-aos="fade-right">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        	<?php if ($_SESSION['rol_id'] != 3 ) : ?>
        		Hola <?php echo $_SESSION['nombres']; ?>
        	<?php else: ?>   
        		Bienvenido <?php echo $_SESSION['nombres']; ?>
        	<?php endif ?>          
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" style="color:var(--color-principal);" href="<?php echo $this->tool_entidad->sitioindex(); ?>Login/cerrarSesion">Cerrar sesión</a>
        </div>
      </li>
    </ul>
  </div>
</nav>

<div class="container-fluid m-0 p-0">
	<div class="row justify-content-center m-0 b-0 montserrat-regular d-flex align-items-center">
		<?php echo $contenido; ?>
	</div>
</div>
	
		<div class="row justify-content-center m-0 b-0 footer-uni" style="background-color:#f3f3f3;">        
        <div class="col-lg-4">
		</div>      
        <div class="col-lg-7 col-md-7 col-11 text-end">
		<br>  
		<br>  
		<br>  
				<div class="row justify-content-end p-2">        
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
					  <img src="<?php echo $this->tool_entidad->sitio(); ?>files/web/imagenes/rrss/logo-pie.png" alt="unifranz">
				  </div> 
				</div>
				<div class="row justify-content-end montserrat-regular">        
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
				<div class="row justify-content-end montserrat-regular text-white" >        
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
</script></body>
</html>
<style>
@font-face {
            font-family: 'ArialMTBlack';
            src: url('<?php echo $this->tool_entidad->sitio(); ?>files/web/fonts/Arial-MT-Black.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }
@font-face {
            font-family: 'Montserrat-Regular';
            src: url('<?php echo $this->tool_entidad->sitio(); ?>files/web/fonts/Montserrat-Regular.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

@font-face {
            font-family: 'Montserrat-Medium';
            src: url('<?php echo $this->tool_entidad->sitio(); ?>files/web/fonts/Montserrat-Medium.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

@font-face {
            font-family: 'Montserrat-Bold';
            src: url('<?php echo $this->tool_entidad->sitio(); ?>files/web/fonts/Montserrat-Bold.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }
.arialmt-b{
	font-family: 'ArialMTBlack', Arial, sans-serif;
}
.montserrat-regular{
	font-family: 'Montserrat-Regular', Arial, sans-serif;
}
.montserrat-medium{
	font-family: 'Montserrat-Medium', Arial, sans-serif;
}	
.montserrat-bold{
	font-family: 'Montserrat-Bold', Arial, sans-serif;
}	
:root {
  --color-principal: #fa501e;
  --color-principal-2: #13064f;
  --color-principal-3: #0B032E;
  --color-principal-4: #7b7b7b;
}
.colort-1{
    color: var(--color-principal);
}
.colort-2{
    color: var(--color-principal-2);
}
.colort-3{
    color: var(--color-principal-3);
}
.colort-4{
    color: var(--color-principal-4);
}
.fondo-c1{
	background-color: var(--color-principal);
}
.fondo-c2{
	background-color: var(--color-principal-2);
}
.fondo-c3{
	background-color: var(--color-principal-3);
}

img {
    width: 100%;
    object-fit: cover;
}

.menu {
    width: 100%;
    height: 80px;
    background-color: rgba(11, 3, 46, 0.9); /* Cambié la transparencia a 0.6 para mayor visibilidad de la imagen */
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: fixed; /* Fija el menú en la parte superior de la pantalla */
    top: 0;
    z-index: 1000; /* Asegura que el menú esté por encima de otros elementos */
}
	.navbar-nav .nav-link {
        margin-right: 10px; /* Ajusta el valor según tus necesidades para el espacio a la derecha */
        margin-left: 10px;  /* Ajusta el valor según tus necesidades para el espacio a la izquierda */
		color:white;
    }
	.navbar-nav .nav-link:hover {
    /*background-color: #f0f0f0;*/
    color: var(--color-principal);
    cursor: pointer;
	}

	.navbar-toggler-custom {
        border-color: white;
        color: white;
    }

    .navbar-toggler-custom .navbar-toggler-icon::before,
    .navbar-toggler-custom .navbar-toggler-icon::after {
        background-color: var(--color-principal); /* Cambia el color de las líneas a tu preferencia */
		color: var(--color-principal);
    }
	.navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255,255,255, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
}

.carousel-item {
		/* border:2px solid gray; */
	}
	.carousel-indicators li {
        background-color: #e2e2e2;
        border-radius: 50%; /* Hace que los indicadores sean redondos */
        width: 12px; /* Ajusta el ancho según tus preferencias */
        height: 12px; /* Ajusta la altura según tus preferencias */
        margin-right: 6px; /* Ajusta el espacio entre los indicadores según tus preferencias */
        margin-left: 6px; /* Ajusta el espacio entre los indicadores según tus preferencias */
        cursor: pointer;
    }

    .carousel-indicators .active {
        width: 14px; /* Ajusta el ancho del indicador activo según tus preferencias */
        height: 14px; /* Ajusta la altura del indicador activo según tus preferencias */
        background-color: var(--color-principal) !important;
    }

.bd{
    font-size: 45px;
	line-height:27px;
    font-weight: bold;
}

.bd-numero{
    font-size: 185px;
	line-height:150px;
    font-weight: bold;
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
	.navbar-nav .nav-link {
		background-color: rgba(255, 255, 255, 0.9);
        margin-right: 20px; /* Ajusta el valor según tus necesidades para el espacio a la derecha */
        margin-left: 20px;  /* Ajusta el valor según tus necesidades para el espacio a la izquierda */
		padding-left: 10px;
		color:black;
    }
	.navbar-nav .nav-link:hover {
		/*background-color: #f0f0f0;*/
		color: var(--color-principal);
		cursor: pointer;
	}
	
	.bd{
		font-size: 40px;
		line-height:27px;
		font-weight: bold;
	}

	.bd-numero{
		font-size: 150px;
		line-height:150px;
		font-weight: bold;
	}
}
</style>
