
    
      <div class="box box-primary">
        <div class="box-header ui-sortable-handle" style="cursor: move; text-right"><h3 class="box-title">CRÉDITOS ACTIVOS E HISTORIAL DE PAGO</h3> </div>
        <div class="box-body">
          <table class="table table-bordered table-striped">
            <thead>
                <tr>
                <th>Fecha</th>
          <th>Entidad Financiera</th>
          <th>Monto pagar mensual</th>
          <th>total de credito</th>
          <th>Estatus</th>
          <th>Comentario</th>
          <th>Nivel endeudamiento total</th>
          <th>Nivel endeudamiento sin hipoteca</th>
          <th>Score</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($d->movements): ?>
                    <?php foreach ($d->movements as $mov): ?>
                      <tr>
                      <td><?php echo $mov->fecha;?></td>
                <td><?php echo $mov->entidad;?></td>
                <td><?php echo $mov->monto;?></td>
                <td><?php echo $mov->total;?></td>
                <td><?php echo $mov->estatus;?></td>
                <td><?php echo $mov->comentario;?></td>
                <td><?php echo $mov->endeudamiento;?></td>
                <td><?php echo $mov->hipoteca;?></td>
                <td><?php echo $mov->score;?></td>
                      </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr><td colspan="9">No se encuentran registros</td></tr>
                <?php endif; ?>
            </tbody>

        </table>

        </div>
      </div>
        
     
  
