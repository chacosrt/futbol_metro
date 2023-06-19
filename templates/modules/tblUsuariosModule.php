
<table id="example2" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Usuario</th>
            <th>Analista</th>
            <th>Cliente</th>
            <th>Encuestador</th>
            <th>Correo</th>
            <th>Estatus</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($d->movements): ?>
            <?php foreach ($d->movements as $mov): 
                $nombreCom = $mov->nombre." ".$mov->apePaterno."".$mov->apeMaterno;
            ?>
                <tr>
                    <td><?php echo $mov->idUsuario;?></td>
                    <td><?php echo $mov->usuario;?></td>
                    <td><?php if($mov->idAnalista !=""){ echo "SI";} ?></td>
                    <td><?php if($mov->idCliente !=""){ echo "SI";} ?></td>
                    <td><?php if($mov->idEncuestadores !=""){ echo "SI";} ?></td>
                    <td><?php echo $mov->correo;?></td>
                    <td class="text-center">
                        <?php 
                            if($mov->estatus == 1){ echo "<i class='fa fa-circle' style='color:green'></i>";}
                            else{ echo "<i class='fa fa-circle' style='color:red'></i>";}
                        ?>
                    </td>
                    <?php if($mov->idUsuario != 10 && $mov->idUsuario != 11){?>
                        <td>
                            <?php if($mov->estatus == 1 ){?>
                            <button class="btn btn-danger " type="button" data-unoo="<?php echo $mov->idUsuario; ?>" data-toggle="modal" data-target="#darbaja"><i class="fa fa-toggle-down"></i></button>
                            <?php }else{?>
                            <button class="btn btn-success " type="button" data-unoo="<?php echo $mov->idUsuario; ?>" data-toggle="modal" data-target="#daralta"><i class="fa  fa-toggle-up"></i></button>
                            <?php }?>
                        </td>
                    <?php }else{?>
                        <td>Administrador</td>
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