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
                    <h4 class="mb-0 text-white">Nueva Charla</h4>
                </div>
                <form action="#" id="miFormulario">
                    <?php 
                        if ($nuevo == 'si') {
                            $id = '';
                            $empresa = '';
                            $tema = '';
                            $descripcion = '';
                            $expositor = '';
                            $fecha = '';
                            $horario = '';
                            $sede = '';
                            $modalidad = '';
                            $estado = '';
                        } else {
                            $id = $datos_charla->id;
                            $empresa = $datos_charla->empresa;
                            $tema = $datos_charla->tema;
                            $descripcion = $datos_charla->descripcion;
                            $expositor = $datos_charla->expositor;
                            $fecha = $datos_charla->fecha;
                            $horario = $datos_charla->horario;
                            $sede = $datos_charla->sede;
                            $modalidad = $datos_charla->modalidad;
                            $estado = $datos_charla->estado;
                        }
                    ?>
                    <input type="hidden" name="id_charla" id="id_charla" value="<?php echo $id; ?>">
                    <div class="form-body">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Empresa</label>
                                        <input type="text" id="empresa" name="empresa" class="form-control" placeholder="nombre de la empresa" value="<?php echo $empresa; ?>">
                                        <small class="form-control-feedback"> <span class="requerido">* campo requerido </span></small> 
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Tema</label>
                                        <input type="text" id="tema" name="tema" class="form-control" placeholder="tema de la charla" value="<?php echo $tema; ?>">
                                        <small class="form-control-feedback"> <span class="requerido">* campo requerido </span></small> 
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Descripción</label>
                                        <textarea class="form-control" id="descripcion" name="descripcion" rows="3"><?php echo $descripcion; ?></textarea> 
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Expositor</label>
                                        <textarea class="form-control" id="expositor" name="expositor" rows="3"><?php echo $expositor; ?></textarea>
                                        <small class="form-control-feedback"> <span class="requerido">* campo requerido </span></small> 
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Fecha</label>
                                        <input type="date" id="fecha" name="fecha" class="form-control" value="<?php echo $fecha; ?>">
                                        <small class="form-control-feedback"> <span class="requerido">* campo requerido </span></small> 
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Horario</label>
                                        <input type="text" id="horario" name="horario" class="form-control" placeholder="ejemplo 08:00 a 09:00" value="<?php echo $horario; ?>">
                                        <small class="form-control-feedback"> <span class="requerido">* campo requerido </span></small> 
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Sede</label>
                                        <select class="form-control" id="sede" name="sede">
                                            <option value="">----Seleccione una Sede----</option>
                                            <option value="La Paz - El Alto" <?php echo ($sede == 'La Paz - El Alto') ? 'selected' : ''; ?>>La Paz - El Alto</option>
                                            <option value="Santa Cruz" <?php echo ($sede == 'Santa Cruz') ? 'selected' : ''; ?>>Santa Cruz</option>
                                            <option value="Cochabamba" <?php echo ($sede == 'Cochabamba') ? 'selected' : ''; ?>>Cochabamba</option>
                                        </select>
                                        <small class="form-control-feedback"> <span class="requerido">* campo requerido </span></small> 
                                    </div>
                                </div>    
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Modalidad</label>
                                        <input type="text" id="modalidad" name="modalidad" class="form-control" placeholder="modalidad" value="<?php echo $modalidad; ?>">
                                        <small class="form-control-feedback"> <span class="requerido">* campo requerido </span></small> 
                                    </div>
                                </div>
                            </div>
                            <div class="row">
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
                        </div>

                        <div class="form-actions" align="center">
                            <div class="card-body">
                                <button type="button" class="btn btn-success" onclick="guardar()"> <i class="fa fa-check"></i> Guardar</button>
                                <a href="<?php echo $this->tool_entidad->sitioadmin(); ?>Charla" class="btn btn-dark">Cancelar</a>
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
            url: enlace+'Charla/registrar_nuevo',
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
                          title: 'Bien',
                          text: data.message,
                          icon: 'success',
                          confirmButtonColor: '#3085d6', // Cambia el color del botón OK
                          confirmButtonText: 'Ok' // Cambia el texto del botón OK
                      }).then((result) => {
                          if (result.isConfirmed) {
                              // Redirige a otro lugar cuando se hace clic en el botón OK
                              window.location.href = enlace+'Charla';
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
            gravity: "top", // `top` or `bottom`
            position: "right", // `left`, `center` or `right`
            stopOnFocus: true, // Prevents dismissing of toast on hover
            style: {
                background: "linear-gradient(to right, #9f1b1b, #b24949)",
            
            },
            onClick: function(){} // Callback after click
        }).showToast();
    }
</script>
