<table class="table table-bordered table-striped zero-configuration7">
    <thead>
        <tr>
          <th>Nombre</th>
          <th>Parentesco</th>
          <th>Salario</th>
          <th>Ingreso</th>
          <th>Concepto</th>
          <th>Supervit</th>
          <th>Observaciones</th>
          <th>Accion</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($d->movements): ?>
            <?php foreach ($d->movements as $mov): ?>
              <tr>
                <td><?php echo $mov->nombre;?></td>
                <td><?php echo $mov->parentesco;?></td>
                <td><?php echo $mov->salario;?></td>
                <td><?php echo $mov->ingreso;?></td>
                <td><?php echo $mov->concepto;?></td>
                <td><?php echo $mov->superavit;?></td>
                <td><?php echo $mov->observaciones;?></td>
               
                <td><button type="button" class="btn btn-block btn-danger" data-toggle="modal" data-unoo="<?php echo $mov->idSituacion;?>" data-target="#eliSituFa"><i class='fa fa-trash'></i></button>
                <button type="button" class="btn btn-block btn-warning" data-toggle="modal" data-unoo="<?php echo $mov->idSituacion;?>" data-target="#editositudu"><i class='fa fa-edit'></i></button>
              </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="9">No se encuentran registros</td></tr>
        <?php endif; ?>
    </tbody>

</table>

<script>
    
$('.zero-configuration7').DataTable({
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
})
</script>






   