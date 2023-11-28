<style type="text/css">
    #miTabla{
        font-size: 12px;
    }
    .boton-edit{
        text-decoration: none; /* Quita el subrayado */
        color: #333; /* Cambia el color del texto, puedes ajustar el valor según tus preferencias */
    }
    .boton-edit:hover {
      color: #fa501e; /* Cambia el color del texto al pasar el mouse, puedes ajustar el valor según tus preferencias */
    }
</style>
<!-- ==========================CONTENIDO========================== --> 
<div class="row justify-content-center">
	<div class="col-12">
        <div class="card wizard-content">
           	<div class="card">
                <div class="card-header" style="background-color: #13064f;">
                    <h4 class="mb-0 text-white">Listado de Inscritos - Charlas</h4>
                </div>
            </div>
            <div align="center">
                <h3><?php echo $titulo->empresa .' - '. $titulo->tema; ?></h3>
                <input type="hidden" name="id_charla" id="id_charla" value="<?php echo base64_encode($idCharla); ?>">
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
                                        <td>
                                            <a href="#" class="boton-edit" onclick="eliminar('<?php echo base64_encode($ins->id); ?>');">
                                                <i class="fas fa-trash" title="" data-toggle="tooltip" data-original-title="Eliminar Inscripción"></i>
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

    function eliminar(id) {
        var charla_id = $('#id_charla').val();
        var enlace  = '<?php echo $this->tool_entidad->sitioadmin(); ?>';
        $.ajax({
            url: enlace+'Charla/eliminar_inscrito',
            type: 'POST',
            dataType: 'json',
            data: {id: id},
            success: function(data) {
                if(data.error){
                    mostrarAlerta(data.message);
                } else {
                    Swal.fire({
                          title: 'Correcto',
                          text: data.message,
                          icon: 'success',
                          confirmButtonColor: '#3085d6', 
                          confirmButtonText: 'Ok' 
                      }).then((result) => {
                          if (result.isConfirmed) {
                              window.location.href = enlace+'Charla/inscritos/'+charla_id;
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
