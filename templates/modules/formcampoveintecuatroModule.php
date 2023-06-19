<table id="example187" class="table table-bordered table-striped">
    <thead>
        <tr>
          <th>Fecha</th>
          <th>Entidad Financiera</th>
          <th>Monto pagra mensual</th>
          <th>total de credito</th>
          <th>Estatus</th>
          <th>Comentario</th>
          <th>Nivel endeudamiento total</th>
          <th>Nivel endeudamiento sin hipoteca</th>
          <th>Score</th>
          <th>Acción</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($d->movements): ?>
            <?php foreach ($d->movements as $mov): ?>
              <tr>
                
                <td><?php echo $mov->fecha;?></td>
                <td><?php echo $mov->entidad;?></td>
                <td><?php echo $mov->monto;?></td>
                <td><?php echo $mov->total;?></td>
                <td><?php echo $mov->estatus;?></td>
                <td><?php echo $mov->comentario;?></td>
                <td><?php echo $mov->endeudamiento;?></td>
                <td><?php echo $mov->hipoteca;?></td>
                <td><?php echo $mov->score;?></td>
                <td>
                  <button type="button" class="btn btn-block btn-danger" data-toggle="modal" data-unoo="<?php echo $mov->idCredito;?>" data-target="#elicredit"><i class='fa fa-trash'></i></button>
                  <button type="button" class="btn btn-block btn-warning" data-toggle="modal" data-unoo="<?php echo $mov->idCredito;?>" data-target="#editocredito"><i class='fa fa-pencil'></i></button>
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
    $('#example187').DataTable({
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
