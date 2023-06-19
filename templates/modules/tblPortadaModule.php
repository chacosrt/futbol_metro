
<table id="example2" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Archivo</th>
            <th>Estatus</th>
            <th>Fecha de creacion</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($d->movements): ?>
            <?php foreach ($d->movements as $mov): ?>
                <tr>
                    <td><?php echo $mov->idPortada;?></td>
                    <td><?php echo "<img src='".CONTENEDOR."portada/".$mov->archivo."' style='height:50px;'>";?></td>
                    <td><?php if($mov->estatus == 1){echo "Activo";} else{ echo "Inactivo";}?></td>
                    <td><?php echo $mov->fechaCrea;?></td>
                    <td class='text-center'>
                        <?php if($mov->estatus == 1){?>
                            <button class="btn btn-danger " type="button" data-unoo="<?php echo $mov->idPortada; ?>" data-toggle="modal" data-target="#darbaja"><i class="fa fa-toggle-down"></i></button>
                        <?php }else{?>
                           <button class="btn btn-success " type="button" data-unoo="<?php echo $mov->idPortada; ?>" data-toggle="modal" data-target="#daralta"><i class="fa  fa-toggle-up"></i></button>
                        <?php }?>
                            <button class="btn btn-danger " type="button" data-unoo="<?php echo $mov->idPortada; ?>" data-dos="<?php echo $mov->archivo; ?>" data-toggle="modal" data-target="#eliminar"><i class="fa fa-trash"></i></button>
                    </td>
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