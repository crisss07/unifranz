
<!-- ==========================CONTENIDO========================== --> 
<div class="row justify-content-center">
	<div class="col-12">
        <div class="card wizard-content">
           	<div class="card">
                <div class="card-header" style="background-color: #5c5c5c;">
                    <h4 class="mb-0 text-white">Listado de Usuarios Alumni</h4>
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
                                        <th>Nombres</th>
                                        <th>Carnet</th>
                                        <th>Celular</th>
                                        <th>Email</th>
                                        <th>Semestre</th>
                                        <th>Sede</th>
                                        <th>Carrera</th>
                                        <th>Rol</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $num = 1; ?>
                                    <?php foreach ($usuariosAlumni as $key => $value): ?>
                                    <tr>
                                        <td><?php echo $num++; ?></td>
                                        <td><?php echo $value->nombres.' '.$value->apellidos; ?></td>
                                        <td><?php echo $value->ci; ?></td>
                                        <td><?php echo $value->celular; ?></td>
                                        <td><?php echo $value->email; ?></td>
                                        <td><?php echo $value->semestre; ?></td>
                                        <td><?php echo $value->sede; ?></td>
                                        <td><?php echo $value->carrera; ?></td>
                                        <td><?php echo $value->rol; ?></td>
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
<!-- ========================FIN CONTENIDO========================== --> 
<script>
    $(document).ready(function() {
        $('#miTabla').DataTable({
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.24/i18n/Spanish.json"
            }
        });
    });
</script>
