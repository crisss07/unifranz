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
    .modal-header{
        background-color: #fa501e;
    }
    .modal-title{
        color: #ffffff;
    }
</style>
<!-- ==========================CONTENIDO========================== --> 
<div class="row justify-content-center">
	<div class="col-12">
        <div class="card wizard-content">
           	<div class="card">
                <div class="card-header" style="background-color: #13064f;">
                    <h4 class="mb-0 text-white">Listado de Usuarios Empresa</h4>
                </div>
            </div>
            <div class="card-body">
                <div class="card">
                    <div align="right" style="margin-right: 20px;">
                        <button type="button" class="btn btn-outline-success" onclick="nueva_empresa();"><i class="fas fa-plus"></i> Nueva Empresa</button>
                    </div>
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
                                        <th>Usuario</th>
                                        <th>Estado</th>
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
                                        <td><?php echo $value->usuario; ?></td>
                                        <?php if ($value->estado == 'activo'): ?>
                                            <td>Activo</td>
                                        <?php else: ?>
                                            <?php if ($value->estado == 'inactivo'): ?>
                                               <td style="color: #009efb;">Inactivo</td> 
                                            <?php else: ?>
                                                <td style="color: #f62d51;">Baja</td>
                                            <?php endif ?>
                                        <?php endif ?>
                                        <td align="center">
                                            <a href="#" class="boton-edit" onclick="edit('<?php echo $value->id; ?>');">
                                                <i class="far fa-edit" data-toggle="tooltip" data-original-title="Editar Charla"></i>
                                            </a>
                                           <!--  <a href="#" class="boton-edit" onclick="editContrasena('<?php echo $value->id; ?>');">
                                                <i class="fas fa-lock" data-toggle="tooltip" data-original-title="Cambiar Contraseña"></i>
                                            </a> -->
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

<!-- Modal -->
<div class="modal" id="ContrasenaModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cambiar Contraseña</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="cerrarModal()">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Formulario para ingresar el Carnet de Identidad -->
                <form id="recuperarContraseñaForm">
                    <div class="form-group">
                        <label for="contrasena_new">Nueva Contraseña</label>
                        <input type="text" class="form-control" name="contrasena_new" id="contrasena_new" placeholder="Ingrese su Nueva Contraseña">
                    </div>
                    <input type="hidden" name="empresa_id" id="empresa_id">
                    <div align="center">
                        <button type="button" class="btn btn-primary mx-auto" onclick="nuevaContrasena()">Guardar</button>
                    </div>
                  
                </form>
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

    function nueva_empresa(){
        var enlace  = '<?php echo $this->tool_entidad->sitioadmin(); ?>';
        window.location.href = enlace+'UsuariosEmpresa/nuevo';
    }

    function edit(id) {
        var idCodificado = btoa(id);
        var enlace  = '<?php echo $this->tool_entidad->sitioadmin(); ?>';
        window.location.href = enlace+'UsuariosEmpresa/nuevo/'+idCodificado;
    }

    function editContrasena(id) {
        var inputElement = document.getElementById('empresa_id');
        inputElement.value = id;

        var modal = document.getElementById('ContrasenaModal');
        modal.style.display = 'block';
    }

    function cerrarModal() {
        var modal = document.getElementById('ContrasenaModal');
        modal.style.display = 'none';
    }

    function nuevaContrasena() {
        var contrasena_new = $('#contrasena_new').val();
        var empresa_id = $('#empresa_id').val();
        var enlace  = '<?php echo $this->tool_entidad->sitioadmin(); ?>';
        $.ajax({
            url: enlace+'UsuariosEmpresa/ajax_nuevaContrasena',
            type: 'POST',
            dataType: 'json',
            data: { empresa_id: empresa_id, contrasena_new: contrasena_new },
            success: function(data) {
                if(data.error){
                    var elementoMensaje = document.getElementById("mensaje_modal");
                    var codigoHTML = `<span class="dato-mensaje"> ${data.message} </span><br><br>`;
                    elementoMensaje.innerHTML = codigoHTML;
                } else {

                  Swal.fire({
                    title: "Correcto!",
                    text: data.message,
                    icon: "success",
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Ok'
                  });
                  $('#carnetIdentidad').val('');
                }
            }
        });
      }
</script>

