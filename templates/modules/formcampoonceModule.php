<table id="example44" class="table table-bordered table-striped">
    
    <tbody>
        <?php if ($d->movements): ?>
            <?php foreach ($d->movements as $mov): ?>
              <tr>
                <td><b>Empresa:</b></td>
                <td><?php echo $mov->empresa;?></td>
                <td><b>Giro:</b></td>
                <td><?php echo $mov->giro;?></td>
                <td><b>Dirección:</b></td>
                <td><?php echo $mov->direccion;?></td>
              </tr>
              <tr>
                <td><b>Teléfono:</b></td>
                <td><?php echo $mov->telefono;?></td>
                <td><b>Fecha Ingreso:</b></td>
                <td><?php echo $mov->fechaIngreso;?></td>
                <td><b>Fecha Egreso:</b></td>
                <td><?php echo $mov->fechaEgreso;?></td>
                <td><b>Puesto Ocupado:</b></td>
                <td><?php echo $mov->puesto;?></td>
                <td><b>Area:</b></td>
                <td><?php echo $mov->area;?></td>
              </tr>
              <tr>
                <td><b>Salario:</b></td>
                <td><?php echo $mov->salario;?></td>
                <td><b>Motivo de salida:</b></td>
                <td><?php echo $mov->motivoSalida;?></td>
                <td><b>Quien proporciona la información:</b></td>
                <td><?php echo $mov->quienProporciono;?></td>
                <td><b>Puesto:</b></td>
                <td><?php echo $mov->puestoProporciono;?></td>
                <td><b>Calificación(Desempeño) del 1 al 10:</b></td>
                <td><?php echo $mov->calificacion;?></td>
              </tr>
              <tr>
                <td><b>Sabe usted si el Candidato interpuso alguna Demanda?:</b></td>
                <td><?php echo $mov->demanda;?></td>
                <td><b>Lo volvería a contratar: </b></td>
                <td><?php echo $mov->volveria;?></td>
                <td><b>¿Por qué?:</b></td>
                <td><?php echo $mov->porque;?></td>
                <td><b>El candidato es:</b></td>
                <td><?php echo $mov->candidatoes;?></td>
              </tr>
              <tr>
              <td><b>El candidato tiene periodos Inactivos</b></td>
                <td colspan="2"><td><?php echo $mov->periodosInactivo;?></td></td>
                <td colspan="7"><b>Observación:</b> <?php echo $mov->observaciones;?></td>
                
              </tr>
              <tr>
                <td colspan='5'><button type="button" class="btn btn-block btn-danger" data-toggle="modal" data-unoo="<?php echo $mov->idRefeLaborales;?>" data-target="#elirefelab"><i class='fa fa-trash'></i></button></td>
                <td colspan='5'><button type="button" class="btn btn-block btn-success" data-toggle="modal" data-unoo="<?php echo $mov->idRefeLaborales;?>" data-target="#editarantecedentes"><i class='fa fa-pencil'></i></button></td>
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
    $('#example44').DataTable({
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






   