
<!-- ==========================CONTENIDO========================== --> 
<div class="row justify-content-center">
	<div class="col-12">
        <div class="card wizard-content">
           	<div class="card">
                <div class="card-header" style="background-color: #13064f;">
                    <h4 class="mb-0 text-white">Listado de Charlas</h4>
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
                                        <th>Empresa</th>
                                        <th>Tema</th>
                                        <th>Expositor</th>
                                        <th>Sede</th>
                                        <th>fecha</th>
                                        <th>Inscritos</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $num = 1; ?>
                                    <?php foreach ($charlas as $key => $value): ?>
                                    <tr>
                                        <td><?php echo $num++; ?></td>
                                        <td><?php echo $value->empresa; ?></td>
                                        <td><?php echo $value->tema; ?></td>
                                        <?php 
                                            // $hoin = DateTime::createFromFormat('H:i:s', $value->hora_inicio);
                                            // $hofi = DateTime::createFromFormat('H:i:s', $value->hora_fin);
                                            // $hi = $hoin->format('H:i'); $hf = $hofi->format('H:i');  
                                        ?>
                                        <td><?php echo $value->expositor; ?></td>
                                        <td><?php echo $value->sede; ?></td>
                                        <!-- <td><?php echo $hi . ' - ' .  $hf; ?></td> -->
                                        <td><?php echo $value->fecha; ?></td>
                                        <?php if ($value->numero_inscritos > 0): ?>
                                        <td><a href="<?php echo $this->tool_entidad->sitioadmin(); ?>Charla/inscritos/<?php echo base64_encode($value->id); ?>"><?php echo $value->numero_inscritos; ?></a></td>
                                        <?php else: ?>
                                        <td><?php echo $value->numero_inscritos; ?></td>
                                        <?php endif ?>
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
