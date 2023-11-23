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
        <img src="<?php echo $this->tool_entidad->sitio(); ?>files/web/imagenes/cab-empresas.png" class="w-100" alt="unifranz" >
	</div>
	</div>
	<div class="container-fluid m-0 p-0" style="background-color:#f3f3f3;" >
	<div class="row justify-content-center m-0 p-2" data-aos="fade-up"
     data-aos-anchor-placement="center-bottom">    
	<div class="col-lg-2 col-md-2 col-2" style="border-width: 2px 0 0 2px; border-style: solid; border-color: var(--color-principal); border-radius: 30px 0 0 0;">
	<h1>&nbsp;</h1>
	</div>   
	<div class="col-lg-2 col-md-2 col-2"><h1>&nbsp;</h1></div>   
	<div class="col-lg-2 col-md-2 col-2" style="border-width: 2px 2px 0 0; border-style: solid; border-color: var(--color-principal); border-radius: 0 30px 0 0;">
	<h1>&nbsp;</h1>
	</div>      
	</div>
	<div class="row justify-content-center" style="margin:-50px 0 0 0;">    
	<div class="col-lg-12 col-md-12 col-12 text-center arialmt-b">
		<h1 class="colort-2">TALENTO UNIFRANZ</h1>
		<h2 class="colort-1">LA PAZ <b class="colort-2">|</b>  EL ALTO <b class="colort-2">|</b> SANTA CRUZ <b class="colort-2">|</b> COCHABAMBA</h2>		
	</div>    
	</div>  
	<div class="row justify-content-center m-0 b-0 d-flex align-items-center p-2" style="padding-top:60px;padding-bottom:60px;" data-aos="fade-up"
     data-aos-anchor-placement="center-bottom">    
	<div class="col-lg-7 col-md-7 col-11 text-center montserrat">
	<br>
		<h5 class="colort-1">¡Presentamos a nuestros alumnos con desempeño destacado en las diferentes carreras de las diferentes sedes de la <b>UNIFRANZ</b>!</h5>
		<h6 class="colort-4">
		Ellos se encuentran preparados y con altas experiencias de unirse y crecer
		<br>
		<b>en el ambiente laboral de su Empresa o Institución</b><br><br>
		</h6>
	</div>    
	</div> 	
	<div class="row justify-content-center m-0 b-0 montserrat-medium d-flex align-items-center f-buscar" style="padding-top:30px;padding-bottom:30px;">        
        <div class="col-lg-3 col-md-3">&nbsp;</div>
        <div class="col-lg-3 col-md-3 col-11 text-start text-white">
		<h6>SEDE UNIFRANZ</h6>
		<select class="combo-blanco">
			<option value="1">La Paz</option>
			<option value="2">El Alto</option>
		</select>
		</div>
		<div class="col-lg-3 col-md-3 col-11 text-start text-white">
		<h6 class="">CARRERA</h6>
		<select class="combo-blanco">
			<?php foreach ($carreras as $c): ?>	
			<option name="carrera_u" value="<?php echo $c['id']; ?>"><?php echo $c['carrera']; ?></option>
			<?php endforeach; ?>
		</select>
		</div>
		 <div class="col-lg-3 col-md-3">&nbsp;</div>
		<div class="col-lg-6 col-md-6 col-11 m-0 text-center text-white">
		<button type="submit" class="text-white btn-buscar" style="">BUSCAR TALENTO</button>
		</div>
    </div>
	<div class="row justify-content-center m-0 b-0 montserrat-bold d-flex align-items-center f-estudiantes" style="padding-top:30px;padding-bottom:30px;line-height:16px;">   
		<?php foreach ($destacados as $d): ?>	
        <div class="col-lg-3 col-md-3 col-11 text-center text-white" style="background-color: rgba(255, 255, 255, 0.6); backdrop-filter: blur(5px); padding:10px 15px 10px 15px; border-radius:30px; margin:7px;">
			<br>
			<div class="w-100 text-center" style="display: flex; justify-content: center; align-items: center;">
				<div style="height: 140px; width: 140px; border-radius: 100%; text-align: center;">
					<img src="<?php echo $this->tool_entidad->sitio(); ?>files/web/imagenes/ico-estudiantes.png" class="w-100">
				</div>
			</div>
			<br>
			<p class="colort-2"><?php echo $d['datos_contacto']; ?></p>
			<p class="colort-1">Administración de Empresas</p>
			<p class="colort-1"><?php echo $d['sede_u']; ?></p>
			<svg class="ver-cro" width="50" height="50" xmlns="http://www.w3.org/2000/svg">
				<!-- Círculo con fondo naranja -->
				<circle cx="25" cy="25" r="20" fill="var(--color-principal)" />
				<!-- Icono de "+" -->
				<text x="17" y="37" font-family="Arial" font-size="30" fill="white">+</text>
			</svg><br><br>
			<p class="colort-1">MÁS INFORMACIÓN</p>
		</div>
		<?php endforeach; ?>
		</div>
	</div> 
	
    </div>
	
	
<style>
.rojo{
	border:2px solid red;
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
.f-buscar{
	height:340px; 
	background-image: url('<?php echo $this->tool_entidad->sitio(); ?>files/web/imagenes/ie-buscar.png'); /* Ruta de la imagen de fondo */
    background-size: cover; /* Ajustar la imagen al tamaño del contenedor */
    background-position: center; /* Posición de la imagen en el contenedor */
}
.f-estudiantes{
	height:auto; 
	padding-top:50px;
	padding-bottom:50px;
	background-image: url('<?php echo $this->tool_entidad->sitio(); ?>files/web/imagenes/ie-fondoe.png'); /* Ruta de la imagen de fondo */
    background-size: cover; /* Ajustar la imagen al tamaño del contenedor */
    background-position: center; /* Posición de la imagen en el contenedor */
	background-attachment: fixed;
}
.combo-blanco{
	padding: 10px; width: 100%; border: none; border-radius: 10px;color:var(--color-principal-4);background-color:$c3c3c3;
}
.btn-buscar{
	padding:10px 30px; background: linear-gradient(to bottom,  #0c0635 0%,#1a1a60 100%);
	border:none;
	border-radius:10px;
	cursor:pointer;
}
.btn-buscar:hover{
	transform: scale(1.05);
	background: linear-gradient(to top,  #0c0635 0%,#1a1a60 100%);
	cursor:pointer;
    transition: transform 0.3s, background 0.3s;
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