<table id="example4" class="table table-bordered table-striped">
    <thead>
          
        <tr>
        <th>Id</th>
          <th>Logo</th>
          <th>Nombre</th>
          <th>Dirección</th>
          <th>Contacto</th>
          <th>Telefono</th>
          <th>Correo</th>
          <th>Pagina</th>
          <th>Comentarios</th>
          <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($d->movements): ?>
            <?php foreach ($d->movements as $mov): ?>
                <tr class='gradeX text-center'>
                    <td><?php echo $mov->idEmpresa;?></td>
                    <td><?php echo "<img src='".CONTENEDOR."empresas/".$mov->archivo."' style='height:50px;'>";?></td>
                    <td><?php echo $mov->nombre;?></td>
                    <td><?php echo $mov->direccion;?></td>
                    <td><?php echo $mov->contacto;?></td>
                    <td><?php echo $mov->telefono;?></td>
                    <td><?php echo $mov->correo;?></td>
                    <td><?php echo $mov->paginaWeb;?></td>
                    <td><?php echo $mov->comentarios;?></td>
                    <td>
                      <button type="button" class="btn btn-warning btn-sm" data-unoo="<?php echo $mov->idEmpresa; ?>" data-toggle="modal" data-target="#editarempresa" title="Editar encuestador"><i class="fa fa-pencil"></i></button>
                      <button type="button" class="btn btn-danger btn-sm" data-unoo="<?php echo $mov->idEmpresa; ?>" data-dos="<?php echo $mov->archivo; ?>" data-toggle="modal" data-target="#eliminarEmpresa" title="Eliminar encuestador"><i class="fa fa-trash"></i></button>
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
    $('#example4').DataTable({
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