<table id="example5" class="table table-bordered table-striped">
    <thead>
          
        
        <tr>
          <th>Id</th>
          <th>Empresa</th>
          <th>Nombre</th>
          <th>Correo</th>
          <th>Telefono</th>
          <th>Celular</th>
          <th>Comentarios</th>
          <th>Acciones</th>
        </tr>
        
    </thead>
    <tbody>
        <?php if ($d->movements): ?>
            <?php foreach ($d->movements as $mov): ?>
                <tr class='gradeX text-center'>
                    <td><?php echo $mov->idEmpCliente;?></td>
                    <td><?php echo $mov->nombreEmpr;?></td>
                    <td><?php echo $mov->nombre;?></td>
                    <td><?php echo $mov->correo;?></td>
                    <td><?php echo $mov->telefono;?></td>
                    <td><?php echo $mov->celular;?></td>
                    <td><?php echo $mov->comentarios;?></td>
                    
                    <td>
                      <?php if($mov->sistema == '' || $mov->sistema != 1){?>
                        <button type="button" class="btn btn-success btn-sm" data-unoo="<?php echo $mov->idEmpCliente; ?>" data-dos="<?php echo $mov->correo; ?>" data-toggle="modal" data-target="#altasistema" title="Agregar usuario al sistema">
                          <i class="fa fa-user-plus"></i>
                        </button>
                      <?php }else{?>
                      <button type="button" class="btn btn-danger btn-sm" data-unoo="<?php echo $mov->idEmpCliente; ?>" data-toggle="modal" data-target="#bajasistema" title="Eliminar usuario"><i class="fa fa-user-times"></i></button>
                      <?php }?>
                      
                      <button type="button" class="btn btn-warning btn-sm" data-unoo="<?php echo $mov->idEmpCliente; ?>" data-toggle="modal" data-target="#editarCliente" title="Editar cliente"><i class="fa fa-pencil"></i></button>
                      <button type="button" class="btn btn-danger btn-sm" data-unoo="<?php echo $mov->idEmpCliente; ?>" data-toggle="modal" data-target="#eliminarCliente" title="Eliminar cliente"><i class="fa fa-trash"></i></button>
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
    $('#example5').DataTable({
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