<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo $this->tool_entidad->sitio(); ?>files/web/styles.css">
	
    <!-- Incluye el script de Bootstrap (jQuery es requerido) -->
	
	
	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
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
		<!-- 
      <li class="nav-item active">
		<a class="nav-link" href="#">INICIO</a>
      </li>
	   -->
      <li class="nav-item">
		<a class="nav-link" href="#empresas">EMPRESAS PARTICIPANTES</a>
      </li>
	  <!-- 
      <li class="nav-item">
		<a class="nav-link" href="#">OFERTAS DE TRABAJO</a>
      </li>
	   -->
      <li class="nav-item">
		<a class="nav-link" href="#cronograma">CRONOGRAMA</a>
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
	<div class="content bg-white" style="margin-top:80px;" data-aos="fade">
        <img src="<?php echo $this->tool_entidad->sitio(); ?>files/web/imagenes/cabecera-min.png" class="w-100" alt="unifranz" >
	</div>
	<div class="d-none d-sm-block" style="margin-bottom:-40px;">&nbsp;</div>
	<div class="container-fluid bg-white">
		<div class="row justify-content-center m-0 b-0 montserrat-regular d-flex align-items-center" data-aos="fade-up" data-aos-delay="500">
			<div class="col-lg-8 col-md-9 col-11 p-4 colort-4 text-center">
				<h4 class="arialmt-b colort-1">¡Explora Tu Futuro Profesional<br> en la Feria de Empleabilidad UNIFRANZ 2023!</h4>
				<p>
				Damos la bienvenida a estudiantes y empresas y público en general a la Feria de Empleabilidad UNIFRANZ 2023, un evento que conecta talento con grandes oportunidades profesionales.
				<br>
				<br>
				<b>
				Este año, nos enorgullece anunciar su realización en nuestras sedes en las siguientes fechas:</b><br>
				
			</div>
		</div>
	</div>
	<div class="contain fondo-c1">
		<div class="row justify-content-center m-0 b-0 p-3 montserrat-medium d-flex align-items-center text-center" style="line-height:14px;">
    <div class="col-lg-3 col-md-3 col-11 m-3 p-0 colort-4" data-aos="flip-up" data-aos-duration="700">
        <h3 class="text-white"><b>LA PAZ / EL ALTO</b><br>
            <b>24 de noviembre</b></h3>
        <h4 class="colort-2"><b>10:00 a 18:00</b></h4><br>
        <p class="colort-2"><b>Real Plaza Hotel & Convention Center</b></p>
        <p class="colort-2">Av. Arce nro. 2177</p>
    </div>
    <div class="d-none d-md-flex d-lg-flex text-center align-items-center">
		<p style="border-left: 1px solid white; height: 160px;"></p>
	</div>
    <div class="col-lg-3 col-md-3 col-11 m-3 p-0 colort-4" data-aos="flip-up" data-aos-duration="700">
        <h3 class="text-white"><b>SANTA CRUZ</b><br>
            <b>28 de noviembre</b></h3>
        <h4 class="colort-2"><b>09:00 a 13:00</b></h4><br>
        <p class="colort-2"><b>Campus UNIFRANZ</b></p>
        <p class="colort-2">Av. Bush esq. 2do Anillo, nro. 111</p>
    </div>
    <div class="d-none d-md-flex d-lg-flex text-center align-items-center">
		<p style="border-left: 1px solid white; height: 160px;"></p>
	</div>
    <div class="col-lg-3 col-md-3 col-11 m-3 p-0 colort-4" data-aos="flip-up" data-aos-duration="700">
        <h3 class="text-white"><b>COCHABAMBA</b><br>
            <b>08 de diciembre</b></h3>
        <h4 class="colort-2"><b>10:00 a 16:00</b></h4><br>
        <p class="colort-2"><b>Campus UNIFRANZ</b></p>
        <p class="colort-2">Av. Villaroel esq. c. Portales, nro. 359</p>
    </div>
</div>

	</div>
	<div class="container-fluid fondo-c4">
		<div class="row justify-content-center m-0 b-0 montserrat-regular d-flex align-items-center">
			<div class="col-lg-4 col-md-4 col-11 p-4 colort-4" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
				<h3 class="arialmt-b colort-2">¿Qué Puedes Esperar?</h3>
				<p class="mensaje-1"><b>Oportunidades para insertarse en el mercado laboral </b>
				Explora opciones de carrera con empresas de renombre en diversos sectores.<br><br>
				<b>Networking de Calidad</b><br> Conecta con profesionales y crea conexiones valiosas.<br><br>
				<b>Charlas Inspiradoras</b><br>Escucha a expertos de la industria compartiendo sus experiencias y consejos.
				</p>
			</div>
			<div class="col-lg-3 col-md-3 col-11 text-center arialmt-b p-3" style="line-height:31px;" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
				 <span class="colort-1" style="font-size:2.6em;">estudiantes</span> <br> 
				 <span class="colort-1" style="font-size:2.8em;">egresados</span> <br> 
				 <span class="colort-1" style="font-size:2.3em;">profesionales</span> <br> 
				<span class="colort-2" style="font-size:2.6em;">UNIFRANZ</span><br>
				<span class="montserrat-bold" style="font-size:0.6em;">LA PAZ - EL ALTO - COCHABAMBA - SANTA CRUZ</span>
			</div>
			<div class="col-lg-3 col-md-3 col-11 text-center" data-aos="flip-right" data-aos-offset="300"
     data-aos-easing="ease-in-sine">
				<img class="img-sesion" src="<?php echo $this->tool_entidad->sitio(); ?>files/web/imagenes/iniciar_sesion.png" alt="Descripción de la imagen" >
				<a class="montserrat-bold" style="color:var(--color-principal);" href="<?php echo $this->tool_entidad->sitioindex(); ?>Login/registro">REGISTRATE</a>
			</div>
		</div>
		<div class="row justify-content-center m-0 b-0 d-flex align-items-center p-2" style="padding-top:60px;padding-bottom:60px;" data-aos="fade-up" data-aos-anchor-placement="center-bottom">    
			<div class="col-lg-9 col-md-9 col-11 text-center montserrat-regular">
				<br>
				<h4 class="colort-1">¡Prepárate para descubrir oportunidades, ampliar tu red y dar el siguiente paso en tu carrera profesional en la <b>Feria de Empleabilidad UNIFRANZ 2023</b>!</h4>
			</div>    
		</div>  
	</div>
	<div style="margin-bottom:10px;" id="empresas">&nbsp;</div>
	<div class="row justify-content-center m-0 b-0 montserrat-regular d-flex align-items-center bg-white"> 
        <div class="col-lg-5 col-md-5 col-11 text-center colort-2 arialmt-b" data-aos="zoom-in">
			<div class="d-block d-lg-none d-md-none" style="hight:40px;">&nbsp;</div>
			<p class="bd"><b>EN LA FERIA</b></p>
            <p class="bd"><b>PARTICIPAN</b></p>
            <p class="bd-numero colort-1"><b>+60</b></p>
            <p class="bd"><b>EMPRESAS</b></p>
			<div class="d-block d-lg-none d-md-none" style="hight:40px;">&nbsp;</div>
		</div>
        <div class="col-lg-5 col-md-5 col-12 text-center p-lg-5 p-4">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="<?php echo $this->tool_entidad->sitio(); ?>files/web/imagenes/logos_pantalla01.png" class="d-block w-100" alt="Primera Imagen">
					</div>
					<div class="carousel-item">
						<img src="<?php echo $this->tool_entidad->sitio(); ?>files/web/imagenes/logos_pantalla02.png" class="d-block w-100" alt="Segunda Imagen">
					</div>
					<div class="carousel-item">
						<img src="<?php echo $this->tool_entidad->sitio(); ?>files/web/imagenes/logos_pantalla03.png" class="d-block w-100" alt="Tercera Imagen">
					</div>
					<div class="carousel-item">
						<img src="<?php echo $this->tool_entidad->sitio(); ?>files/web/imagenes/logos_pantalla04.png" class="d-block w-100" alt="Cuarta Imagen">
					</div>
					<div class="carousel-item">
						<img src="<?php echo $this->tool_entidad->sitio(); ?>files/web/imagenes/logos_pantalla05.png" class="d-block w-100" alt="Quinta Imagen">
					</div>
				</div>
				
			<div style="margin-top:50px;position:relative;">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
				</ol>
			</div>
			</div>
		</div>
		<div class="d-block d-lg-none d-md-none" style="margin-bottom:30px;">&nbsp;</div>
	</div>
	<div class="row justify-content-center m-0 b-0 montserrat-regular d-flex align-items-center fondo-c3" style="padding-top:30px;padding-bottom:30px;">        
        <div class="col-lg-10 col-md-10 col-11 text-center text-white" data-aos="flip-up" 
    data-aos-duration="700">
			<h1 class="montserrat-medium colort-1">Impulsa tu Potencial Profesional</h1>
            <h5 class="montserrat">Conoce el servicio de Career Coaching de la universidad, sumérgete en Charlas Impactantes y Conéctate a una Red de Networking que marcará la Diferencia</h5>
			<h3 class="montserrat-medium colort-1">¡Impulsa tu Futuro Laboral!</h3>
		</div>
    </div>
	<div class="content">
        <img src="<?php echo $this->tool_entidad->sitio(); ?>files/web/imagenes/foto-medio.png" class="w-100" alt="unifranz" >
	</div>
	<div id="cronograma" style="margin-top:-120px;margin-bottom:120px;">
	</div>
	
	<div class="row justify-content-center m-0 b-0 montserrat-regular p-2" style="padding-top:60px;padding-bottom:60px;">       <!---- 
        <div class="col-lg-5 col-md-5 col-12 text-center"><br>
			<div class="row justify-content-center m-0 b-0 montserrat-regular d-flex align-items-center" >   
				<br><br>			
				<div class="col-lg-12 col-md-12 col-11 bg-white" style="border-radius:30px 30px 0 0;">
				<br>
					<div class="text-center arialmt-b colort-2">
						<h2 class="colort-1" style="line-height:20px;">PROGRAMA</h2>
						<h2>LA PAZ <span class="colort-1">|</span> EL ALTO</h2>
					</div>
					<div>
						<h5 class="colort-1 montserrat-bold">Viernes 24 de Noviembre</h5>
						<?php foreach ($charlasLP as $charla): ?>
						<br>
						<div class="row justify-content-center m-0 b-0 montserrat-medium">
							<div class="col-lg-3 col-md-6 col-12">
							<p class="colort-4">
							<?php echo $charla['horario']; ?>
							</p>
							</div>
							<div class="col-lg-1 col-md-6 col-12" style="border-left:1px solid var(--color-principal-4);">
							</div>
							<div class="col-lg-8 col-md-6 col-12" style="text-align:left; line-height:18px;">
								<p class="colort-1">CHARLA</p>
								<b class="colort-4">
								<?php echo $charla['tema']; ?>
								</b>
								<p class="colort-4">
								<?php echo $charla['expositor']; ?>
								</p>
							</div>
						</div>
						<?php endforeach; ?>
						<br>
					</div>
				</div>
				<br><br>
				<div class="col-lg-12 col-md-12 col-11 fondo-c1" style="border-radius:0 0 30px 30px;">
					<br>
					<br>
				</div>
			</div>
		</div>
		
        <div class="col-lg-5 col-md-5 col-12 text-center"><br>
			<div class="row justify-content-center m-0 b-0 montserrat-regular d-flex align-items-center" >   
				<br><br>			
				<div class="col-lg-12 col-md-12 col-11 bg-white" style="border-radius:30px 30px 0 0;">
				<br>
					<div class="text-center arialmt-b colort-2">
						<h2 class="colort-1" style="line-height:20px;">PROGRAMA</h2>
						<h2>SANTA CRUZ</h2>
					</div>
					<div>
						<h5 class="colort-1 montserrat-bold">Martes 28 de Noviembre</h5>
						<?php foreach ($charlasSC as $charla): ?>
						<br>
						<div class="row justify-content-center m-0 b-0 montserrat-medium">
							<div class="col-lg-3 col-md-6 col-12">
							<p class="colort-4">
							<?php echo $charla['horario']; ?>
							</p>
							</div>
							<div class="col-lg-1 col-md-6 col-12" style="border-left:1px solid var(--color-principal-4);">
							</div>
							<div class="col-lg-8 col-md-6 col-12" style="text-align:left; line-height:18px;">
								<p class="colort-1">CHARLA</p>
								<b class="colort-4">
								<?php echo $charla['tema']; ?>
								</b>
								<p class="colort-4">
								<?php echo $charla['expositor']; ?>
								</p>
							</div>
						</div>
						<?php endforeach; ?>
						<br>
					</div>
				</div>
				<br><br>
				<div class="col-lg-12 col-md-12 col-11 fondo-c1" style="border-radius:0 0 30px 30px;">
					<br>
					<br>
				</div>
			</div>
		</div>
		
		---->
		<div class="col-lg-6 col-md-6 col-12 text-center"><br>
			<div class="row justify-content-center m-0 b-0 montserrat-regular d-flex align-items-center" >   
				<br><br>			
				<div class="col-lg-12 col-md-12 col-11 bg-white" style="border-radius:30px 30px 0 0;">
				<br>
					<div class="text-center arialmt-b colort-2">
						<h2 class="colort-1" style="line-height:20px;">PROGRAMA</h2>
						<h2>COCHABAMBA</h2>
					</div>
					<div>
						<h5 class="colort-1 montserrat-bold">Viernes 8 de Diciembre</h5>
						<?php foreach ($charlas as $charla): ?>
						<br>
						<div class="row justify-content-center m-0 b-0 montserrat-medium">
							<div class="col-lg-3 col-md-6 col-12">
							<p class="colort-4">
							<?php echo $charla['horario']; ?>
							</p>
							</div>
							<div class="col-lg-1 col-md-6 col-12" style="border-left:1px solid var(--color-principal-4);">
							</div>
							<div class="col-lg-8 col-md-6 col-12" style="text-align:left; line-height:18px;">
								<p class="colort-1">CHARLA</p>
								<b class="colort-4">
								<?php echo $charla['tema']; ?>
								</b>
								<p class="colort-4">
								<?php echo $charla['expositor']; ?>
								</p>
							</div>
						</div>
						<?php endforeach; ?>
						<br>
					</div>
				</div>
				<br><br>
				<div class="col-lg-12 col-md-12 col-11 fondo-c1" style="border-radius:0 0 30px 30px;">
					<br>
					<br>
				</div>
			</div>
		</div>
    </div>
	<br>
	<br>
	<br>
	<br>
	
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
