<table id="example88" class="table table-bordered table-striped">
    
    <tbody>
        <?php if ($d->movements): ?>
            <?php foreach ($d->movements as $mov): ?>
              <tr>
                <td><b>Parentesco:</b></td>
                <td><?php echo $mov->parentesco;?></td>
                <td><b>Nombre:</b></td>
                <td><?php echo $mov->nombre;?></td>
                <td><b>Edad:</b></td>
                <td><?php echo $mov->edad;?></td>
                <td><b>Ocupación:</b></td>
                <td><?php echo $mov->ocupacion;?></td>
                <td><b>Delegación:</b></td>
                <td><?php echo $mov->del;?></td>
              </tr>
              <tr>
                
                <td><b>Donde labora:</b></td>
                <td><?php echo $mov->donde;?></td>
                <td><b>Calle:</b></td>
                <td><?php echo $mov->calle;?></td>
                <td><b>Número:</b></td>
                <td><?php echo $mov->numero;?></td>
                <td><b>Colonia:</b></td>
                <td><?php echo $mov->colonia;?></td>
                <td><b>Ciudad:</b></td>
                <td><?php echo $mov->ciudad;?></td>
              </tr>
              <tr>
                
                
                <td><b>Estado:</b></td>
                <td><?php echo $mov->estado;?></td>
                <td><b>C.P:</b></td>
                <td><?php echo $mov->cp;?></td>
                <td><b>Tiempo:</b></td>
                <td><?php echo $mov->tiempo;?></td>
                <td><b>Télefono:</b></td>
                <td><?php echo $mov->tel;?></td>
              </tr>

              <tr>
                <td colspan='5'><button type="button" class="btn btn-block btn-danger" data-toggle="modal" data-unoo="<?php echo $mov->idBeneficiario;?>" data-target="#elibene"><i class='fa fa-trash'></i></button></td>
                <td colspan='5'><button type="button" class="btn btn-block btn-success" data-toggle="modal" data-unoo="<?php echo $mov->idBeneficiario;?>" data-target="#editabenefi"><i class='fa fa-pencil'></i></button></td>
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
    $('#example88').DataTable({
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

