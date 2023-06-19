<table id="example17" class="table table-bordered table-striped">
    <thead>
        <tr>
          <th>Nombre de la empresa</th>
          <th>Periodo laborado</th>
          <th>Motivo</th>
          <th>Acción</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($d->movements): ?>
            <?php foreach ($d->movements as $mov): ?>
              <tr>
                
                <td><?php echo $mov->nombre;?></td>
                <td><?php echo $mov->periodo;?></td>
                <td><?php echo $mov->motivo;?></td>
                <td><button type="button" class="btn btn-block btn-danger" data-toggle="modal" data-unoo="<?php echo $mov->idIncapacidad;?>" data-target="#eliincapa"><i class='fa fa-trash'></i></button></td>
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
    $('#example17').DataTable({
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
