

      <div class="box box-primary">
        <div class="box-header ui-sortable-handle" style="cursor: move; text-right"><h3 class="box-title">DÍAS INCAPACIDAD</h3> </div>
        <div class="box-body">
          <table class="table table-bordered table-striped">
            <thead>
               <tr>
               <th>Nombre de la empresa</th>
          <th>Periodo laborado</th>
          <th>Motivo</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($d->movements): ?>
                    <?php foreach ($d->movements as $mov): ?>
                      <tr>
                
                      <td><?php echo $mov->nombre;?></td>
                <td><?php echo $mov->periodo;?></td>
                <td><?php echo $mov->motivo;?></td>
                      </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr><td colspan="9">No se encuentran registros</td></tr>
                <?php endif; ?>
            </tbody>

        </table>

        </div>
      </div>

   