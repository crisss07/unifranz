<style type="text/css">
    #miTabla{
        font-size: 12px;
    }
</style>
<!-- ==========================CONTENIDO========================== --> 
<div class="row justify-content-center">
	<div class="col-12">
        <div class="card wizard-content">
           	<div class="card">
                <div class="card-header" style="background-color: #5c5c5c;">
                    <h4 class="mb-0 text-white">Listado de Inscritos - Charlas</h4>
                </div>
            </div>
            <div align="center">
                <h3><?php echo $titulo->empresa .' - '. $titulo->tema; ?></h3>
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
                                        <th>Carrera</th>
                                        <th>Celular</th>
                                        <th>Email</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $num = 1; ?>
                                    <?php foreach ($inscritos as $key => $ins): ?>
                                    <tr>
                                        <td><?php echo $num++; ?></td>
                                        <td><?php echo $ins->nombres . ' ' .$ins->apellidos; ?></td>
                                        <td><?php echo $ins->ci; ?></td>
                                        <td><?php echo $ins->carrera; ?></td>
                                        <td><?php echo $ins->celular; ?></td>
                                        <td><?php echo $ins->email; ?></td>
                                        <td>acciones</td>
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
