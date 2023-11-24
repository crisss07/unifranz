<!-- fin login -->
<!-- Modal -->
<div class="modal fade" id="modalDestacado" tabindex="-1" role="dialog" aria-labelledby="modalDestacadoTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<div class="row justify-content-center">
			<div class="col-lg-3 col-md-3 col-11">
				<div class="w-100 text-center" style="display: flex; justify-content: center; align-items: center;">
					<div style="height: 140px; width: 140px; border-radius: 100%; text-align: center;">
						<img src="<?php echo $this->tool_entidad->sitio(); ?>files/web/imagenes/ico-estudiantes.png" class="w-100">
					</div>
				</div>
			</div>
			<div class="col-lg-7 col-md-7 col-11">
				<h4 class="modal-title colort-2 montserrat-medium text-center" id="dNombre"></h4>
				<h5 class="modal-title colort-2 arialmt-b text-center">
				ESTUDIANTE DESTACADO
				</h5>
				<h5 class="modal-title colort-1 montserrat-bold text-center" id="dCarrera"></h5>
				<h5 class="modal-title colort-2 arialmt-b text-center" id="dSede"></h5>
			</div>
		</div>
		<br>
		<br>
        <div class="text-center m-0 p-0 b-0">
        <input type="hidden" name="desId" id="desId">
        <input type="hidden" id="dCV">
        <button type="button" id="dBoton" class="btn btn-primary montserrat-bold text-white" style="background-color:var(--color-principal);border-radius:30px;font-size:14px;" onclick="descargarCV()">DESCARGAR CV
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
	<div class="col-lg-2 col-md-2 col-4" style="border-width: 2px 0 0 2px; border-style: solid; border-color: var(--color-principal); border-radius: 30px 0 0 0;">
	<h1>&nbsp;</h1>
	</div>   
	<div class="col-lg-2 col-md-2 col-4"><h1>&nbsp;</h1></div>   
	<div class="col-lg-2 col-md-2 col-4" style="border-width: 2px 2px 0 0; border-style: solid; border-color: var(--color-principal); border-radius: 0 30px 0 0;">
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
		<select name="sede" class="combo-blanco">
			<option value="1">La Paz</option>
			<option value="2">El Alto</option>
		</select>
		</div>
		<div class="col-lg-3 col-md-3 col-11 text-start text-white">
		<h6 class="">CARRERA</h6>
		<select name="carrera_u" class="combo-blanco">
			<?php foreach ($carreras as $c): ?>	
			<option value="<?php echo $c['id']; ?>"><?php echo $c['carrera']; ?></option>
			<?php endforeach; ?>
		</select>
		</div>
		 <div class="col-lg-3 col-md-3">&nbsp;</div>
		<div class="col-lg-6 col-md-6 col-11 m-0 text-center text-white">
		<button type="submit" class="text-white btn-buscar" onclick="buscarDestacado()">BUSCAR TALENTO</button>
		</div>
    </div>  
	<div id="alumni" style="margin-top:-120px;margin-bottom:120px;">
	</div>
	<div id="resultados" class="row justify-content-center m-0 b-0 montserrat-bold d-flex align-items-center f-estudiantes" style="padding-top:30px;padding-bottom:10%;line-height:16px;">
		<?php foreach ($destacadosAll as $d): ?>	
		<div class="col-lg-3 col-md-3 col-11 text-center text-white filtrado" data-talento-id="<?php echo $d['id']; ?>" style="background-color: rgba(255, 255, 255, 0.6); backdrop-filter: blur(5px); padding:10px 15px 10px 15px; border-radius:30px; margin:7px;">
    
			<br>
			<div class="w-100 text-center" style="display: flex; justify-content: center; align-items: center;">
				<div style="height: 140px; width: 140px; border-radius: 100%; text-align: center;">
					<img src="<?php echo $this->tool_entidad->sitio(); ?>files/web/imagenes/ico-estudiantes.png" class="w-100">
				</div>
			</div>
			<br>
			<p class="colort-2"><?php echo $d['datos_contacto']; ?></p>
			<p class="colort-1"><?php echo $d['carrera_u']; ?></p>
			<p class="colort-1"><?php echo $d['sede_u']; ?></p>
			<svg data-toggle="modal" data-target="#modalDestacado" class="ver-cro" data-charla="<?php echo $d['id']; ?>" width="50" height="50" xmlns="http://www.w3.org/2000/svg">
								  <!-- Círculo con fondo naranja -->
								  <circle cx="25" cy="25" r="20" fill="var(--color-principal)" />

								  <!-- Icono de "+" -->
								  <text x="17" y="37" font-family="Arial" font-size="30" fill="white">+</text>
								</svg>
			<br><br>
			<p class="colort-1">MÁS INFORMACIÓN</p>
		</div>
		<?php endforeach; ?>
		</div>
		<!-- Paginación de Bootstrap -->
		<nav aria-label="Page navigation example">
			<ul id="pagination" class="pagination justify-content-center">
				<!-- Los elementos de la paginación se generarán automáticamente aquí -->
			</ul>
		</nav>
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
#dBoton{
	display:none;
}

// estilos de paginación

/* Estilos generales para la paginación */
#pagination {
    margin: 0; /* Elimina el margen predeterminado */
    padding: 0; /* Elimina el relleno predeterminado */
}

#pagination li {
    display: inline-block;
    margin-right: 5px; /* Espaciado entre elementos */
}

#pagination li a,
#pagination li span {
    color: #333; /* Color de texto predeterminado */
    background-color: #fff; /* Color de fondo predeterminado */
    border: 1px solid #ccc; /* Borde predeterminado */
    padding: 8px 12px; /* Relleno interno */
    text-decoration: none;
}

/* Estilo para el enlace activo */
#pagination li.active a,
#pagination li.active span {
    color: #fff; /* Color de texto cuando está activo */
    background-color: var(--color-principal); /* Color de fondo cuando está activo */
    border-color: var(--color-principal); /* Borde cuando está activo */
}

/* Estilos para los botones Anterior y Siguiente */
#pagination li#previous a,
#pagination li#next a {
    background-color: var(--color-principal); /* Color de fondo para Anterior y Siguiente */
    border-color: var(--color-principal); /* Borde para Anterior y Siguiente */
    color: #fff; /* Color de texto para Anterior y Siguiente */
}

/* Estilo para los botones Anterior y Siguiente cuando están deshabilitados */
#pagination li#previous.disabled a,
#pagination li#next.disabled a {
    background-color: #ccc; /* Color de fondo para Anterior y Siguiente cuando están deshabilitados */
    border-color: #ccc; /* Borde para Anterior y Siguiente cuando están deshabilitados */
    color: #fff; /* Color de texto para Anterior y Siguiente cuando están deshabilitados */
}

/* Cambiar el color al pasar el ratón sobre los enlaces */
#pagination li a:hover {
    background-color: #eee; /* Color de fondo al pasar el ratón */
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
function actualizarModal(desIndex) {
    var des = <?php echo json_encode($destacadosAll); ?>;
    
    des.forEach(function(d) {
        if (d.id === desIndex) {
            // alert("Valor encontrado: " + JSON.stringify(d));
			document.getElementById('dNombre').innerText = d.datos_contacto;
			document.getElementById('dCarrera').innerText = d.carrera_u;
			document.getElementById('dSede').innerText = d.sede_u;
			document.getElementById('desId').value = d.id;
			if (d.adjunto_cv !== "" && d.adjunto_cv !== null) {
				document.getElementById('dBoton').style.display = 'inline';
				document.getElementById('dCV').value = d.adjunto_cv;
			} else {
				document.getElementById('dBoton').style.display = 'none';
			}
		}
    });
}


    var buttons = document.querySelectorAll('[data-toggle="modal"]');
    buttons.forEach(function(button) {
        button.addEventListener('click', function() {
            var desIndex = this.getAttribute('data-charla');
            actualizarModal(desIndex);
        });
    });
    
function descargarCV() {
		var CV = document.getElementById('dCV').value;
        // Abre una nueva pestaña con el enlace proporcionado
        window.open(CV, '_blank');
    }

</script>
<script>
function buscarDestacado() {
    var sedeSeleccionada = $("select[name='sede']").val();
    var carreraSeleccionada = $("select[name='carrera_u']").val();

    // Filtrar según la búsqueda
    var talentosFiltrados = <?php echo json_encode($destacadosAll); ?>.filter(function (talento) {
        return (sedeSeleccionada === '0' || talento.sede_id === sedeSeleccionada) &&
               (carreraSeleccionada === '0' || talento.carrera_id === carreraSeleccionada);
    });

    // Ocultar todos los elementos .col-lg-3
    $("#resultados .col-lg-3").hide();
    $("#pagination").hide();

    // Mostrar solo los elementos correspondientes a talentosFiltrados
    talentosFiltrados.forEach(function(talento) {
        // Mostrar el elemento correspondiente a este talento filtrado
        $("#resultados .col-lg-3[data-talento-id='" + talento.id + "']").show();
    });
}



</script>
<script>
    $(document).ready(function () {
        var items = $("#resultados .col-lg-3");
        var numItems = items.length;
        var perPage = 6;
        var currentPage = 1;

        items.slice(perPage).hide();

        var totalPages = Math.ceil(numItems / perPage);

        function generatePagination() {
            $('#pagination').empty(); // Limpiamos la paginación actual antes de crear una nueva

            // Agregamos el botón "Anterior"
            $('#pagination').append('<li class="page-item disabled" id="previous"><a class="page-link" href="#alumni">Anterior</a></li>');

            // Mostramos hasta un máximo de 3 páginas
            var startPage = Math.max(1, currentPage - 1); // Aseguramos que no haya números negativos
            var endPage = Math.min(totalPages, startPage + 2); // Mostramos un máximo de 3 páginas

            for (var i = startPage; i <= endPage; i++) {
                var activeClass = (i === currentPage) ? 'active' : ''; // Marcamos solo la página actual
                $('#pagination').append('<li class="page-item ' + activeClass + '"><a class="page-link" href="#alumni">' + i + '</a></li>');
            }

            // Agregamos el botón "Siguiente"
            $('#pagination').append('<li class="page-item" id="next"><a class="page-link" href="#alumni">Siguiente</a></li>');

            // Deshabilitamos el botón "Anterior" en la primera página
            $('#previous').toggleClass('disabled', currentPage === 1);

            // Deshabilitamos el botón "Siguiente" en la última página
            $('#next').toggleClass('disabled', currentPage === totalPages);
        }

        generatePagination();

        $('#pagination').on('click', 'li', function () {
            var clickedPage = $(this).text();

            if ($(this).attr("id") === "previous") {
                currentPage = Math.max(currentPage - 1, 1);
            } else if ($(this).attr("id") === "next") {
                currentPage = Math.min(currentPage + 1, totalPages);
            } else {
                currentPage = parseInt(clickedPage);
            }

            var showFrom = perPage * (currentPage - 1);
            var showTo = showFrom + perPage;
            items.hide().slice(showFrom, showTo).show();

            // Regeneramos la paginación después de cambiar la página
            generatePagination();
        });
    });
</script>
