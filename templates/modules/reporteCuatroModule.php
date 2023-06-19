      <div class="box box-primary">
        <div class="box-header ui-sortable-handle" style="cursor: move; text-right"><h3 class="box-title">REFERENCIA </h3> </div>
        <div class="box-body">
          <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Tiempo de conocerlo</th>
                    <th>Relación</th>
                    <th>Domicilio</th>
                    <th>Teléfono</th>
                    <th>Opinion sobre el candidato</th>
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
                      </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr><td colspan="9">No se encuentran registros</td></tr>
                <?php endif; ?>
            </tbody>

        </table>

        </div>
      </div>

   