
<table id="example5" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre candidato</th>
            <th>Fecha de solicitud:</th>
            <th>Fecha de termino:</th>
            <th>NSS</th>
            <th>CURP</th>
            <th>Télefono</th>
            <th>Correo</th>
            <th>Realizo</th>
            <th>Empresa solicita</th>
            <th>Archivos</th>
            <th>Ver reporte</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($d->movements): ?>
            <?php foreach ($d->movements as $mov): 
                $nombreCom = $mov->nombre." ".$mov->apePaterno." ".$mov->apeMaterno;
            ?>
                <tr>
                    <td><?php echo $mov->idEstudio;?></td>
                    <td><?php echo $nombreCom;?></td>
                    <td><?php echo $mov->fechaSolicitud;?></td>
                    <td><?php echo $mov->fechaTermino;?></td>
                    <td><?php echo $mov->nss;?></td>
                    <td><?php echo $mov->curp;?></td>
                    <td><?php echo $mov->telefono;?></td>
                    <td><?php echo $mov->correo;?></td>
                    <td><?php echo $mov->usuarioRea;?></td>
                    <td><?php echo $mov->nomempresa;?></td>
                    <td>
                    <button class="btn btn-success " title="Ver archivos adjuntos" type="button" data-unoo="<?php echo $mov->idEstudio; ?>" data-toggle="modal" data-target="#archivos"><i class="fa fa-file"></i></button>
                    </td>
                   
                    <td>
                    <?php if($mov->idEmpresa == 53){?>
                            <a href='estudios/reportesantander?idEstudio=<?php echo $mov->idEstudio;?>'><button class="btn btn-success " type="button" ><i class="fa fa-file-pdf-o"></i></button></a>
                        <?php }else{?>
                            <a href='estudios/reporte?idEstudio=<?php echo $mov->idEstudio;?>'><button class="btn btn-success " type="button" ><i class="fa fa-file-pdf-o"></i></button></a>
                        <?php }?>
                        <?php if($_SESSION['idEncuestadores'] == NULL){?>
                        <a onclick="seguidetal(<?php echo $mov->idEstudio; ?>);" ><button class="btn btn-warning " type="button"><i class="fa fa-pencil"></i></button></a>
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