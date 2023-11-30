<style type="text/css">
    .requerido{
        color: red;
    }
    .col-md-6{
        margin-top: -10px;
        margin-bottom: -10px;
    }
</style>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<!-- ==========================CONTENIDO========================== --> 
<div class="row justify-content-center">
	<div class="col-12">
        <div class="card wizard-content">
           	<div class="card">
                <div class="card-header" style="background-color: #13064f;">
                    <?php if ($nuevo == 'si'): ?>
                        <h4 class="mb-0 text-white">Nueva Empresa</h4>
                    <?php else: ?>
                        <h4 class="mb-0 text-white">Editar Empresa</h4>
                    <?php endif ?>
                    
                </div>
                <form action="#" id="miFormulario">
                    <?php 
                        if ($nuevo == 'si') {
                            $id = '';
                            $razon_social = '';
                            $nit = '';
                            $tipo_empresa = '';
                            $telefono = '';
                            $direccion = '';
                            $usuario = '';
                            $contrasena = '';
                            $estado = '';

                        } else {
                            $id = $datos_empresa->id;
                            $razon_social = $datos_empresa->razon_social;
                            $nit = $datos_empresa->nit;
                            $tipo_empresa = $datos_empresa->tipo_empresa;
                            $telefono = $datos_empresa->telefono;
                            $direccion = $datos_empresa->direccion;
                            $usuario = $datos_empresa->usuario;
                            $contrasena = $datos_empresa->contrasena;
                            $estado = $datos_empresa->estado;
                        }
                    ?>
                    <input type="hidden" name="id_empresa" id="id_empresa" value="<?php echo $id; ?>">
                    <div class="form-body">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Razon Social</label>
                                        <input type="text" id="razon_social" name="razon_social" class="form-control" placeholder="razon social" value="<?php echo $razon_social; ?>">
                                        <small class="form-control-feedback"> <span class="requerido">* campo requerido </span></small> 
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">NIT</label>
                                        <input type="text" id="nit" name="nit" class="form-control" placeholder="número de nit" value="<?php echo $nit; ?>">
                                        <!-- <small class="form-control-feedback"> <span class="requerido">* campo requerido </span></small>  -->
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Tipo de Empresa</label>
                                        <input type="text" id="tipo_empresa" name="tipo_empresa" class="form-control" placeholder="tipo" value="<?php echo $tipo_empresa; ?>">
                                        <!-- <small class="form-control-feedback"> <span class="requerido">* campo requerido </span></small>  -->
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Teléfono</label>
                                        <input type="text" id="telefono" name="telefono" class="form-control" placeholder="número telefónico" value="<?php echo $telefono; ?>">
                                        <!-- <small class="form-control-feedback"> <span class="requerido">* campo requerido </span></small>  -->
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Dirección</label>
                                        <input type="text" id="direccion" name="direccion" class="form-control" placeholder="dirección empresa" value="<?php echo $direccion; ?>">
                                        <!-- <small class="form-control-feedback"> <span class="requerido">* campo requerido </span></small>  -->
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Estado</label>
                                        <select class="form-control" id="estado" name="estado">
                                            <option value="activo" <?php echo ($estado == 'activo') ? 'selected' : ''; ?>>Activo</option>
                                            <option value="inactivo" <?php echo ($estado == 'inactivo') ? 'selected' : ''; ?>>Inactivo</option>
                                            <?php if ($nuevo == 'no'): ?>
                                            <option value="baja" <?php echo ($estado == 'baja') ? 'selected' : ''; ?>>Baja</option>   
                                            <?php endif ?>
                                        </select>
                                        <small class="form-control-feedback"> <span class="requerido">* campo requerido </span></small> 
                                    </div>
                                </div>  
                            </div>
                            <?php if ($nuevo == 'si'): ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Usuario</label>
                                        <input type="text" id="usuario" name="usuario" class="form-control" placeholder="nombre de usuario" value="<?php echo $usuario; ?>">
                                        <small class="form-control-feedback"> <span class="requerido">* campo requerido </span></small> 
                                    </div>
                                </div>   
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Contraseña</label>
                                        <input type="text" id="contrasena" name="contrasena" class="form-control" placeholder="contraseña" value="<?php echo $contrasena; ?>">
                                        <small class="form-control-feedback"> <span class="requerido">* campo requerido </span></small> 
                                    </div>
                                </div>
                            </div>
                            <?php endif ?>
                        </div>

                        <div class="form-actions" align="center">
                            <div class="card-body">
                                <button type="button" class="btn btn-success" onclick="guardar()"> <i class="fa fa-check"></i> Guardar</button>
                                <a href="<?php echo $this->tool_entidad->sitioadmin(); ?>UsuariosEmpresa" class="btn btn-dark">Cancelar</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            
		</div>
	</div>
</div>
<!-- ========================FIN CONTENIDO========================== --> 
<script src="<?php echo $this->tool_entidad->sitio(); ?>files/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script>
    document.addEventListener("keydown", function(event) {
        if (event.keyCode === 13) {
            guardar()
        } 
    });

    function guardar() {
        var formData = $('#miFormulario').serialize();
        var enlace  = '<?php echo $this->tool_entidad->sitioadmin(); ?>';
        $.ajax({
            url: enlace+'UsuariosEmpresa/registrar_nuevo',
            type: 'POST',
            dataType: 'json',
            data: formData,
            success: function(data) {
                if(data.error){
                    $.each(data.message, function (campo, mensaje) {
                        mostrarAlerta(mensaje);
                    });
                } else {
                    Swal.fire({
                          title: 'Correcto',
                          text: data.message,
                          icon: 'success',
                          confirmButtonColor: '#3085d6', 
                          confirmButtonText: 'Ok' 
                      }).then((result) => {
                          if (result.isConfirmed) {
                              window.location.href = enlace+'UsuariosEmpresa';
                          }
                      });
                }
            }
        });
    }

    function mostrarAlerta(mensaje){
        Toastify({
            text: mensaje,
            duration: 5000,
            newWindow: true,
            close: true,
            gravity: "top",
            position: "right", 
            stopOnFocus: true, 
            style: {
                background: "linear-gradient(to right, #9f1b1b, #b24949)",
            },
            onClick: function(){} 
        }).showToast();
    }
</script>
