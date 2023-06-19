<table id="example6" class="table table-bordered table-striped">
    <thead>
        <tr>
          <th>Parentesco</th>
          <th>Edad</th>
          <th>Ocupación</th>
          <th>Labora /estudia</th>
          <th>Dirección</th>
          <th>Tiempo de residir</th>
          <th>Télefono</th>
          <th>Acción</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($d->movements): ?>
            <?php foreach ($d->movements as $mov): ?>
              <tr>
              <td><?php echo $mov->familiar;?></td>
              <td><?php echo $mov->edad;?></td>
              <td><?php echo $mov->ocupacion;?></td>
              <td><?php echo $mov->laboraEstudia;?></td>
              <td><?php echo $mov->calle." | ".$mov->numero." | ".$mov->colonia." | ".$mov->delegacionMunicipio." | ".$mov->ciudad." | ".$mov->estado." | ".$mov->cpde;?></td>
              <td><?php echo $mov->tiempoReside;?></td>
              <td><?php echo $mov->tel1;?></td>
              <td>
                <button type="button" class="btn btn-block btn-danger" data-toggle="modal" data-unoo="<?php echo $mov->idEstructura;?>"  data-target="#eliEstru"><i class='fa fa-trash'></i></button>
                <button type="button" class="btn btn-block btn-warning" data-toggle="modal" data-unoo="<?php echo $mov->idEstructura;?>"  data-target="#ediestruc"><i class='fa fa-edit'></i></button>
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
    $('#example6').DataTable({
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






   