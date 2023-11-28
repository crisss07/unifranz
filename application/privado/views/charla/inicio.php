<style type="text/css">
    .boton-edit{
        text-decoration: none; /* Quita el subrayado */
        color: #333; /* Cambia el color del texto, puedes ajustar el valor según tus preferencias */
    }
    .boton-edit:hover {
      color: #fa501e; /* Cambia el color del texto al pasar el mouse, puedes ajustar el valor según tus preferencias */
    }
    .boton-inscritos:hover {
      color: #fa501e; /* Cambia el color del texto al pasar el mouse, puedes ajustar el valor según tus preferencias */
    }
</style>
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
                    <div align="right" style="margin-right: 20px;">
                        <button type="button" class="btn btn-outline-success" onclick="nueva_charla();"><i class="fas fa-plus"></i> Nueva Charla</button>
                    </div>
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
                                        <th>Estado</th>
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
                                        <td><?php echo $value->expositor; ?></td>
                                        <td><?php echo $value->sede; ?></td>
                                        <td><?php echo $value->fecha; ?></td>
                                        <?php if ($value->numero_inscritos > 0): ?>
                                        <td><a href="<?php echo $this->tool_entidad->sitioadmin(); ?>Charla/inscritos/<?php echo base64_encode($value->id); ?>" class="boton-inscritos"><?php echo $value->numero_inscritos; ?></a></td>
                                        <?php else: ?>
                                        <td><?php echo $value->numero_inscritos; ?></td>
                                        <?php endif ?>
                                        <?php if ($value->estado == 'activo'): ?>
                                            <td>Activo</td>
                                        <?php else: ?>
                                            <?php if ($value->estado == 'inactivo'): ?>
                                               <td style="color: #009efb;">Inactivo</td> 
                                            <?php else: ?>
                                                <td style="color: #f62d51;">Baja</td>
                                            <?php endif ?>
                                        <?php endif ?>
                                        <td>
                                            <a href="#" class="boton-edit" onclick="edit('<?php echo $value->id; ?>');">
                                                <i class="far fa-edit"></i>
                                            </a>
                                        </td>
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

    function nueva_charla(){
        var enlace  = '<?php echo $this->tool_entidad->sitioadmin(); ?>';
        window.location.href = enlace+'Charla/nuevo';
    }

    function edit(id) {
        var idCodificado = btoa(id);
        var enlace  = '<?php echo $this->tool_entidad->sitioadmin(); ?>';
        window.location.href = enlace+'Charla/nuevo/'+idCodificado;
    }
</script>
