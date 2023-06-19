
    
      <div class="box box-primary">
        <div class="box-header ui-sortable-handle" style="cursor: move; text-right"><h3 class="box-title">SITUACIÓN</h3> </div>
        <div class="box-body">
          <table class="table table-bordered table-striped">
            <thead>
                <tr>
                <th>Nombre</th>
                <th>Parentesco</th>
                <th>Salario</th>
                <th>Ingreso</th>
                <th>Concepto</th>
                <th>Egresos</th>
                <th>Supervit</th>
                <th>Observaciones</th>

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
                      <td><?php echo $mov->egresos;?></td>
                      <td><?php echo $mov->superavit;?></td>
                      <td><?php echo $mov->observaciones;?></td>
                      </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr><td colspan="9">No se encuentran registros</td></tr>
                <?php endif; ?>
            </tbody>

        </table>

        </div>
      </div>
        
     
  
