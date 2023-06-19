<table class="table table-bordered table-striped zero-configuration9">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Tiempo de conocerlo</th>
            <th>Relación</th>
            <th>Domicilio</th>
            <th>Teléfono</th>
            <th>Opinion sobre el candidato</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($d->movements): ?>
            <?php foreach ($d->movements as $mov): ?>
              <tr>
                <td><?php echo $mov->nombre;?></td>
                <td><?php echo $mov->tiempoConocerlo;?></td>
                <td><?php echo $mov->relacion;?></td>
                <td><?php echo $mov->domicilio;?></td>
                <td><?php echo $mov->tel1;?></td>
                <td><?php echo $mov->opinion;?></td>
                <td>
                    <button type="button" class="btn btn-block btn-danger" data-toggle="modal" data-unoo="<?php echo $mov->idRefePersonales;?>" data-target="#eliRper"><i class='fa fa-trash'></i></button>
                    <button type="button" class="btn btn-block btn-warning" data-toggle="modal" data-unoo="<?php echo $mov->idRefePersonales;?>" data-target="#editaRper"><i class='fa fa-edit'></i></button>
                </td>
              </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="9">No se encuentran registros</td></tr>
        <?php endif; ?>
    </tbody>

</table>
<script>
    
$('.zero-configuration9').DataTable({
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