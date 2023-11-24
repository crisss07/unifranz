
<!-- ==========================CONTENIDO========================== --> 
<div class="row justify-content-center">
	<div class="col-12">
        <div class="card wizard-content">
           	<div class="card">
                <div class="card-header" style="background-color: #13064f;">
                    <h4 class="mb-0 text-white">Listado de Alumnos Destacados</h4>
                </div>
            </div>
            <div class="card-body">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="miTabla">
                                <thead class="bg-inverse text-white">
                                    <tr>
                                        <th>Nro.</th>
                                        <th>Datos Contácto</th>
                                        <th>Edad</th>
                                        <th>Tipo</th>
                                        <th>Adjunto</th>
                                        <th>Más</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $num = 1; ?>
                                    <?php foreach ($alumnosDestacados as $key => $value): ?>
                                    <tr>
                                        <td><?php echo $num++; ?></td>
                                        <td><?php echo $value->datos_contacto; ?></td>
                                        <td><?php echo $value->edad; ?></td>
                                        <td><?php echo $value->tipo; ?></td>
                                        <td><a href="<?php echo $value->adjunto_cv; ?>" target="_blank">CV</a></td>
                                        <td style="font-size: 15px;"><a href="#" onclick="ver_mas('<?php echo $value->id; ?>','<?php echo $value->promedio; ?>','<?php echo $value->competencias; ?>','<?php echo $value->ocupacion_actual; ?>','<?php echo $value->descripcion_personal; ?>','<?php echo $value->ubicacion; ?>','<?php echo $value->sede; ?>','<?php echo $value->carrera; ?>')">+</a></td>
                                        <td><?php echo $value->estado; ?></td>
                                    </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</div>
</div>

<!-- modal -->
<div class="modal" id="miModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Encabezado del modal -->
            <div class="modal-header" style="background-color: #fa501e;">
                <h5 class="modal-title" style=" color: white;">Información adicional</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Contenido del modal -->
            <div class="modal-body">
                <table class="table no-border">
                    <tbody>
                    	<tr>
	                        <td>Promedio</td>
	                        <td class="font-medium" id="promedio"></td>
	                    </tr>
	                    <tr>
	                        <td>Competencias</td>
	                        <td class="font-medium" id="competencias"></td>
	                    </tr>
	                    <tr>
	                        <td>Ocupación actual</td>
	                        <td class="font-medium" id="ocupacion"></td>
	                    </tr>
	                    <tr>
	                        <td>Descripción personal</td>
	                        <td class="font-medium" id="descripcion"></td>
	                    </tr>
	                    <tr>
	                        <td>Ubicación</td>
	                        <td class="font-medium" id="ubicacion"></td>
	                    </tr>
	                    <tr>
	                        <td>Sede</td>
	                        <td class="font-medium" id="sede"></td>
	                    </tr>
	                    <tr>
	                        <td>Carrera</td>
	                        <td class="font-medium" id="carrera"></td>
	                    </tr>
	                </tbody>
	            </table>
            </div>
        </div>
    </div>
</div>
<!-- fin modal -->
<!-- ========================FIN CONTENIDO========================== --> 
<script>
    $(document).ready(function() {
        $('#miTabla').DataTable({
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.24/i18n/Spanish.json"
            }
        });
    });

    function ver_mas(id,promedio,competencias,ocupacion_actual,descripcion_personal,ubicacion,sede,carrera) {
	    var miModal = new bootstrap.Modal(document.getElementById('miModal'));
	    var promedioElement = document.getElementById('promedio');
	    promedioElement.textContent = promedio;

	    var promedioElement = document.getElementById('competencias');
	    promedioElement.textContent = competencias;

	    var promedioElement = document.getElementById('ocupacion');
	    promedioElement.textContent = ocupacion_actual;

	    var promedioElement = document.getElementById('descripcion');
	    promedioElement.textContent = descripcion_personal;

	    var promedioElement = document.getElementById('ubicacion');
	    promedioElement.textContent = ubicacion;

	    var promedioElement = document.getElementById('sede');
	    promedioElement.textContent = sede;
	    
	    var promedioElement = document.getElementById('carrera');
	    promedioElement.textContent = carrera;

    	miModal.show();
    }
</script>
