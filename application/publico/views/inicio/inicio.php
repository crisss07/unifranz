<!-- fin login -->
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5 class="modal-title colort-1 montserrat-bold text-center">CHARLA</h5>
        <h4 class="modal-title colort-2 montserrat-medium text-center" id="charlaHorario"></h4>
        <h5 class="modal-title colort-2 montserrat-bold text-center" id="charlaTema">""</h5>
		<h6 class="colort-2 montserrat text-center" id="charlaExpositor"></h6>
        <hr style="border-top:1px solid var(--color-principal);">
		<h6 class="colort-2 montserrat text-center" id="charlaDescripcion"></h6>
        <div class="text-center">
        <input type="hidden" name="charlaId" id="charlaId">
        <button type="button" class="btn btn-primary montserrat-bold text-white" style="background-color:var(--color-principal-2);border-radius:30px;font-size:14px;" onclick="registrar_charla()">REGISTRARME
		</button>
		</div>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
	<div class="container-fluid m-0 p-0" style="background-color:#f3f3f3;">
	<div class="content" style="margin-top:80px;" data-aos="fade">
        <img src="<?php echo $this->tool_entidad->sitio(); ?>files/web/imagenes/cab-interna.png" class="w-100" alt="unifranz" >
	</div>
	<div class="row justify-content-center m-0 b-0 montserrat-regular d-flex align-items-center p-2" style="padding-top:60px;padding-bottom:60px;">        
        <div class="col-lg-6 col-md-6 col-12 text-center">
			<div class="row justify-content-center m-0 b-0 montserrat-regular d-flex align-items-center" >   
				<br><br>			
				<div class="col-lg-12 col-md-12 col-11 bg-white" style="border-radius:30px 30px 0 0;">
				<br>
					<div class="text-center arialmt-b colort-2">
						<h2 class="colort-1" style="line-height:20px;">PROGRAMA</h2>
						<h2>LA PAZ <span class="colort-1">|</span> EL ALTO</h2>
					</div>
					<div>
						<h5 class="colort-1 montserrat-bold">Jueves 23 de Noviembre</h5>
						
						<br>
						<div class="row justify-content-center m-0 b-0 montserrat-medium" style="text-align:left; line-height:16px;padding-left:10px;">
							<div class="col-lg-3 col-md-3 col-12">
							<p class="colort-4">
							08:00
							</p>
							</div>
							<div class="col-lg-1 col-md-1 col-1" style="border-left:1px solid var(--color-principal-4);">
							</div>
							<div class="col-lg-6 col-md-6 col-7">
								<p class="colort-1">AMBIENTACIÓN STANDS</p>
								<p class="colort-4">
								Armado de Stands Expositores
								</p>
							</div>
							<div class="col-lg-2 col-md-2 col-3">
							</div>
						</div>
						<br>
						
						<div class="row justify-content-center m-0 b-0 montserrat-medium" style="text-align:left; line-height:16px;padding-left:10px;">
							<div class="col-lg-3 col-md-3 col-12">
							<p class="colort-4">
							10:00
							</p>
							</div>
							<div class="col-lg-1 col-md-1 col-1" style="border-left:1px solid var(--color-principal-4);">
							</div>
							<div class="col-lg-6 col-md-6 col-7" style="text-align:left; line-height:16px;">
								<p class="colort-1">RECEPCIÓN Y BIENBENIDA</p>
								<p class="colort-4">
								Recibimiento Participantes e Invitados
								</p>
							</div>
							<div class="col-lg-2 col-md-2 col-3">
							</div>
						</div><br>
						<div class="row justify-content-center m-0 b-0 montserrat-medium" style="text-align:left; line-height:16px;padding-left:10px;">
							<div class="col-lg-3 col-md-3 col-12">
							<p class="colort-4">
							10:30
							</p>
							</div>
							<div class="col-lg-1 col-md-1 col-1" style="border-left:1px solid var(--color-principal-4);">
							</div>
							<div class="col-lg-7 col-md-7 col-8" style="text-align:left; line-height:16px;">
								<p class="colort-1">INAUGURACION</p>
								<p class="colort-4">
									<b>Palabras de Bienvenida a cargo de Pedro Sáenz Muñoz</b><br>
									PhD.c Vicerrector Sede La Paz<br><br>
									<b>Palabras invitado Especial Fernando Aramayo</b><br>
									Coordinador de Programas y Gestión Institucional del PNUD<br><br>
									<b>Palabras Invitado Especial Ing. Pablo Camacho</b><br>
									Presidente Cámara Nacional de Industrias<br><br>
									<b>Palabras Invitado Especial Ing. Jaime Ascarrunz</b><br>
									Presidente Cámara Nacional de Comercio<br><br>
									<b>Brindis de Honor a Cargo de Lic. Eve Gomez Ferrufino</b><br>
									Vicerrectora Sede El Alto<br><br>
									<b>Corte de Cinta</b>
								</p>
							</div>
							<div class="col-lg-1 col-md-1 col-1">
							</div>
						</div>
						<?php foreach ($charlas as $charla): ?>
						<br>
						<div class="row justify-content-center m-0 b-0 montserrat-medium" style="text-align:left; line-height:16px;padding-left:10px;">
							<div class="col-lg-3 col-md-3 col-12">
							<p class="colort-4">
							<?php echo $charla['horario']; ?>
							</p>
							</div>
							<div class="col-lg-1 col-md-1 col-1" style="border-left:1px solid var(--color-principal-4);">
							</div>
							<div class="col-lg-6 col-md-6 col-7" style="text-align:left; line-height:16px;">
								<b class="colort-1">
								<?php echo $charla['tema']; ?>
								</b>
								<p class="colort-4">
								<?php echo $charla['expositor']; ?>
								</p>
							</div>
							<div class="col-lg-2 col-md-2 col-3">
								<svg data-toggle="modal" data-target="#exampleModalCenter" class="ver-cro" data-charla="<?php echo $charla['id']; ?>" width="50" height="50" xmlns="http://www.w3.org/2000/svg">
								  <!-- Círculo con fondo naranja -->
								  <circle cx="25" cy="25" r="20" fill="var(--color-principal)" />

								  <!-- Icono de "+" -->
								  <text x="17" y="37" font-family="Arial" font-size="30" fill="white">+</text>
								</svg>
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
    </div>
	
	<br>
	<br>
<div class="row justify-content-center m-0 b-0 montserrat-regular d-flex align-items-center bg-white"> 
        <div class="col-lg-5 col-md-5 col-11 text-center colort-2 arialmt-b" data-aos="zoom-in">
			<div class="d-block d-lg-none d-md-none" style="hight:40px;">&nbsp;</div>
			<p class="bd"><b>EN LA FERIA</b></p>
            <p class="bd"><b>PARTICIPAN</b></p>
            <p class="bd-numero colort-1"><b>+50</b></p>
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
				</div>
				
			<div style="margin-top:50px;position:relative;">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
				</ol>
			</div>
			</div>
		</div>
	</div>
<style>
.ver-cro{
	
}
.ver-cro:hover{
	cursor: pointer;
}
.modal.fade.show {
    background-color: (0,0,0, 0.5); /* Ajusta el último valor (0.5) para cambiar la opacidad */
  }
.modal-content {
	background-color: (255,255,255, 0.5);
	border-radius:30px;
	
    }
</style>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
$('#myModal').on('hidden.bs.modal', function (e) {
  // do something...
})
</script>
<script>
    function actualizarModal(charlaIndex) {
        var charla = <?php echo json_encode($charlas); ?>[charlaIndex];
        if(charla.id!=0){
        document.getElementById('charlaId').value = charla.id;
        }
        document.getElementById('charlaHorario').innerText = charla.horario;
        document.getElementById('charlaTema').innerText = charla.tema;
        document.getElementById('charlaExpositor').innerText = charla.expositor;
        document.getElementById('charlaDescripcion').innerText = charla.descripcion;
    }

    var buttons = document.querySelectorAll('[data-toggle="modal"]');
    buttons.forEach(function(button) {
        button.addEventListener('click', function() {
            var charlaIndex = this.getAttribute('data-charla');
            actualizarModal(charlaIndex-1);
        });
    });
    
    function registrar_charla() {
		var charla_id = document.getElementById('charlaId').value;
		var enlace  = '<?php echo $this->tool_entidad->sitioindex(); ?>';
		$.ajax({
	        url: enlace+'Inicio/ajax_registrarCharla',
	        type: 'POST',
	        dataType: 'json',
	        data: { charla_id: charla_id },
	        success: function(data) {
	            if(data.error){
	            	Swal.fire({
	                    title: "Error!",
	                    text: data.message,
	                    icon: "error",
	                    confirmButtonColor: '#3085d6',
	                    confirmButtonText: 'Ok'
	                });
	            } else {
	                Swal.fire({
	                    title: "Correcto!",
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