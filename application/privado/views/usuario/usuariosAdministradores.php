
<!-- ==========================CONTENIDO========================== --> 
<div class="row justify-content-center">
	<div class="col-12">
        <div class="card wizard-content">
           	<div class="card">
                <div class="card-header" style="background-color: #13064f;">
                    <h4 class="mb-0 text-white">Listado de Usuarios Administradores</h4>
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
                                        <th>Apellidos</th>
                                        <th>Email</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $num = 1; ?>
                                    <?php foreach ($usuariosAdministradores as $key => $value): ?>
                                    <tr>
                                        <td><?php echo $num++; ?></td>
                                        <td><?php echo $value->nombres; ?></td>
                                        <td><?php echo $value->apellidos; ?></td>
                                        <td><?php echo $value->email; ?></td>
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
