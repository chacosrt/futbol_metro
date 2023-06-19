
<table id="example2" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Id usuario</th>
            <th>Usuario</th>
            <th>Acción</th>
            <th>Fecha</th>
            <th>descripción</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($d->movements): ?>
            <?php foreach ($d->movements as $mov): ?>
                <?php 
                    $nombreCompleto = $mov->nombre." ".$mov->apePaterno." ".$mov->apeMaterno;
                    $nomfinal = ($mov->pruebousu == 0) ? "Anónimo"  : $nombreCompleto;    
                ?>
                <tr>
                    <td>
                        <?php 
                            if ($mov->idUsuario == '' || $mov->idUsuario == 0){ echo "Buzón"; }
                            else{ echo $mov->idUsuario; }
                        ?>
                    </td>
                    <td><?php echo $nomfinal; ?></td>
                    <td><?php echo $mov->nomacci; ?></td>
                    <td><?php echo $mov->fecha; ?></td>
                    <td><?php echo $mov->descripcion; ?></td>
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