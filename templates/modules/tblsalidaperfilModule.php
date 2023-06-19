<table id="example8" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Fecha</th>
            <th>Motivo</th>
            <th>Hora Salida</th>
            <th>Hora entrada</th>
            <th>Autoriza</th>
            <th>Comentarios Aceptación</th>
            <th>Comentarios Rechazo</th>
            <th>Estatus</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($d->movements): ?>
            <?php foreach ($d->movements as $mov): ?>
                <tr class='gradeX'>
                    <td><?php echo $mov->idSalidas?></td>
                    <td><?php echo $mov->fechaSalida?></td>
                    <td><?php echo $mov->motivo?></td>
                    <td><?php echo $mov->horaSalida?></td>
                    <td><?php echo $mov->horaRegreso?></td>
                    <td><?php echo $mov->nombre." ".$mov->apePaterno." ".$mov->apeMaterno?></td>

                    <td><?php echo $mov->comentariosAutoriza?></td>
                    <td><?php echo $mov->comentariosRechaza?></td>
                    <td>    
                        <?php 
                            if($mov->estatus == 1){ echo "<button type='button' class='btn btn-w-m btn-default'><i class='fa fa-spinner'></i> </button>"; }
                            if($mov->estatus == 2){ echo "<button type='button' class='btn btn-w-m' style='background-color:#6ED44B; color:white;'><i class='fa fa-dot-circle-o'></i></button>"; }
                            if($mov->estatus == 3){ echo " <button type='button' class='btn btn-w-m btn-danger'><i class='fa fa-moon-o'></i></button>"; }
                        
                        ?>
                    </td>
                    <td>
                        <?php if($mov->estatus == 1 || $mov->estatus == 3){?>
                        <button class="btn btn-primary " type="button" data-unoo="<?php echo $mov->idSalidas; ?>" data-toggle="modal" data-target="#editarsalida"><i class="fa fa-pencil"></i></button>
                        <button class="btn btn-danger " type="button" data-unoo="<?php echo $mov->idSalidas; ?>" data-toggle="modal" data-target="#eliminarsalida"><i class="fa fa-trash"></i></button>
                        <?php }?>
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
    $('#example8').DataTable({
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