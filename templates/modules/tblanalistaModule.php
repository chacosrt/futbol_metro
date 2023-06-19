
<table id="example2" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Perfil</th>
            <th>Correo</th>
            <th>Coordinador</th>
            <th>Dirección</th>
            <th>Telefonos</th>
            <th>Comentarios</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($d->movements): ?>
            <?php foreach ($d->movements as $mov): 
                $nombreCom = $mov->nombre." ".$mov->apePaterno." ".$mov->apeMaterno;
            ?>
                <tr>
                    <td><?php echo $mov->idAnalista;?></td>
                    <td>
                        <?php if($mov->archivo == ''){?>
                            <img class="img-circle" src="<?php echo  CONTENEDOR."analista/avatar.jpg"?>" style='height:40px;'>
                          <?php }else {?>
                            <img src='<?php echo  CONTENEDOR."analista/".$mov->archivo; ?>' style='height:50px;'>
                          <?php }?>
                    </td>
                    <td><?php echo $nombreCom;?></td>
                    <td>
                        <?php 
                        if($mov->idPerfil == 1){ echo "Director";}
                        if($mov->idPerfil == 2){ echo "Administrador";}
                        if($mov->idPerfil == 3){ echo "Coordinador";}
                        if($mov->idPerfil == 4){ echo "Analista";}
                        ?>
                    </td>
                    <td><?php echo $mov->correo;?></td>
                    <td><?php echo $mov->conombre." ".$mov->coapepaterno." ".$mov->coapematerno; ?></td>
                    <td><?php echo $mov->direccion;?></td>
                    <td><?php echo $mov->telefono; echo "<br>"; echo $mov->celular; ?></td>
                    <td><?php echo $mov->cuenta; echo "<br>"; echo $mov->banco;?></td>
                    <td><?php echo $mov->comentarios;?></td>

                    <?php if($mov->idUsuario != 10 && $mov->idUsuario != 11){?>
                        <td>
                            <?php if($mov->sistema == 1 ){?>
                            <button class="btn btn-danger " type="button" data-unoo="<?php echo $mov->idAnalista; ?>" data-toggle="modal" data-target="#bajasistema"><i class="fa fa-toggle-down"></i></button>
                            <?php }else{?>
                            <button class="btn btn-success " type="button" data-unoo="<?php echo $mov->idAnalista; ?>" data-dos="<?php echo $mov->correo; ?>" data-toggle="modal" data-target="#altasistema"><i class="fa  fa-toggle-up"></i></button>
                            <?php }?>
                            <button class="btn btn-warning " type="button" data-unoo="<?php echo $mov->idAnalista; ?>" data-toggle="modal" data-target="#editar"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-danger " type="button" data-unoo="<?php echo $mov->idAnalista; ?>" data-toggle="modal" data-target="#eliminar"><i class="fa fa-trash"></i></button>
                        </td>
                    <?php }?>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="9">No se encuentran registros</td></tr>
        <?php endif; ?>
    </tbody>

</table>


<script>
$(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false,
      pageLength: 25,
	  responsive: true,
      dom:'Bfrtilp',
      language: {
		processing:     "Procesando...",
		search:         "Buscar:",
		lengthMenu:     "Mostrar: _MENU_ elementos",
		info:           "Mostrando _START_ a _END_ de _TOTAL_ resultados",
		infoEmpty:      "Elemento 0 de 0 elementos encontrados",
		infoFiltered:   "(elementos filtrado _MAX_ de elementos maximos )",
		infoPostFix:    "",
		loadingRecords: "Cambios en Curso...",
		zeroRecords:    "No se encuentran elementos.",
		emptyTable:     "Tabla no disponible",
		paginate: {
			first:      "Adelante",
			previous:   "Anterior",
			next:       "Siguiente",
			last:       "Atrás"
        }
      },
      buttons: [
        {
          extend: 'excelHtml5',
          text: '<i class="fa fa-file-excel-o"></i>',
          titleAttr: 'Esportar a excel',
        },
        {
          extend: 'pdfHtml5',
          text: '<i class="fa fa-file-pdf-o"></i>',
          titleAttr: 'Esportar a excel',

        },
        {
            extend: 'print',
            text: '<i class="fa fa-print"></i>',
            autoPrint: false
        }
      ]
    })
  })
</script>