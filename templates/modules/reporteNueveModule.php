<div class="callout callout-info"><h4>HISTORIAL LABORAL</h4></div>


      <div class="box box-primary">
        <div class="box-header ui-sortable-handle" style="cursor: move; text-right"><h3 class="box-title">PERIODOS NO LABORADOS</h3> </div>
        <div class="box-body">
          <table class="table table-bordered table-striped">
            <thead>
               <tr>
                  <th>Inicio</th>
                  <th>Termino</th>
                  <th>Motivo</th>
                  <th>comentarios</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($d->movements): ?>
                    <?php foreach ($d->movements as $mov): ?>
                      <tr>
                
                        <td><?php echo $mov->inicio;?></td>
                        <td><?php echo $mov->termino;?></td>
                        <td><?php echo $mov->motivo;?></td>
                        <td><?php echo $mov->comentarios;?></td>
                      </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr><td colspan="9">No se encuentran registros</td></tr>
                <?php endif; ?>
            </tbody>

        </table>

        </div>
      </div>

   