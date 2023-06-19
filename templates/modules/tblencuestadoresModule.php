
<table id="example2" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Ciudad | Estado</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Pago</th>
            <th>Cuenta | Banco</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($d->movements): ?>
            <?php foreach ($d->movements as $mov): ?>
                <tr>
                    <td><?php echo $mov->encuestador;?></td>
                    <td><?php echo $mov->ciudad." | ".$mov->estado;?></td>
                    <td><?php echo $mov->correo;?></td>
                    <td><?php echo $mov->telefono;?></td>
                    <td><?php echo $mov->pago;?></td>
                    <td><?php echo $mov->cuenta; echo "<br>"; echo $mov->banco;?></td>
                    <td>
                      <?php if($mov->sistema == '' || $mov->sistema == NULL){?>
                        <button type="button" class="btn btn-success btn-sm" data-unoo="<?php echo $mov->idEncuestadores; ?>" data-dos="<?php echo $mov->correo; ?>" data-toggle="modal" data-target="#altasistema" title="Crear acceso al sistema">
                          <i class="fa fa-user-plus"></i>
                        </button>
                      <?php }else{?>
                      <button type="button" class="btn btn-danger btn-sm" data-unoo="<?php echo $mov->idEncuestadores; ?>" data-toggle="modal" data-target="#bajasistema" title="Eliminar acceso al sistema"><i class="fa fa-user-times"></i></button>
                      <?php }?>
                      <button type="button" class="btn btn-danger btn-sm" data-unoo="<?php echo $mov->idEncuestadores; ?>" data-toggle="modal" data-target="#eliminar" title="Eliminar encuestador"><i class="fa fa-trash"></i></button>
                      <button type="button" class="btn btn-warning btn-sm" data-unoo="<?php echo $mov->idEncuestadores; ?>" data-toggle="modal" data-target="#ediElemen" title="Editar encuestador"><i class="fa fa-pencil"></i></button>
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
      pageLength: 15,
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