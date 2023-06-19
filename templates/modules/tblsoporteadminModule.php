<table id="example2" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Archivo</th>
            <th>Titulo</th>
            <th>Descripción</th>
            <th>Fecha de creacion</th>
            <th>Acciones</th>
            
        </tr>
    </thead>
    <tbody>
        <?php if ($d->movements): ?>
            <?php foreach ($d->movements as $mov): ?>
                <tr>
                    <td><?php echo $mov->idSoporte;?></td>
                    <td><?php echo "<img src='".CONTENEDOR."soporte/".$mov->archivo."' style='height:50px;'>";?></td>
                    <td><?php echo $mov->titulo;?></td>
                    <td><?php echo $mov->descripcion;?></td>
                    <td><?php echo $mov->fechaCrea;?></td>
                    <td class='text-center'>
                       <button class="btn btn-success " type="button" data-uno="<?php echo $mov->idSoporte; ?>" data-toggle="modal" data-target="#respuestaadmin">Responder</button>
                       <button class="btn btn-primary " type="button" data-unoo="<?php echo $mov->idSoporte; ?>" data-toggle="modal" data-target="#respuesta2"><i class="fa fa-search"></i></button>
                       <button class="btn btn-warning " type="button" data-dos="<?php echo $mov->idSoporte; ?>" data-toggle="modal" data-target="#cancelar">Cancelar</button>
                       <button class="btn btn-danger " type="button" data-tres="<?php echo $mov->idSoporte; ?>" data-toggle="modal" data-target="#terminartic">Terminar</button>
                       
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