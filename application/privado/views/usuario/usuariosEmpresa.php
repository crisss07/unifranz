
<!-- ==========================CONTENIDO========================== --> 
<div class="row justify-content-center">
	<div class="col-12">
        <div class="card wizard-content">
           	<div class="card">
                <div class="card-header" style="background-color: #5c5c5c;">
                    <h4 class="mb-0 text-white">Listado de Usuarios Empresa</h4>
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
                                        <th>Razón Social</th>
                                        <th>NIT</th>
                                        <th>Tipo de Empresa</th>
                                        <th>Teléfono</th>
                                        <th>Dirección</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $num = 1; ?>
                                    <?php foreach ($usuariosEmpresa as $key => $value): ?>
                                    <tr>
                                        <td><?php echo $num++; ?></td>
                                        <td><?php echo $value->razon_social; ?></td>
                                        <td><?php echo $value->nit; ?></td>
                                        <td><?php echo $value->tipo_empresa; ?></td>
                                        <td><?php echo $value->telefono; ?></td>
                                        <td><?php echo $value->direccion; ?></td>
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
