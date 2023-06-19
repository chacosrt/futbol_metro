
    
      <div class="box box-primary">
        <div class="box-header ui-sortable-handle" style="cursor: move; text-right"><h3 class="box-title">ESTRUCTURA FAMILIAR</h3> </div>
        <div class="box-body">
          <table class="table table-bordered table-striped">
            <thead>
                <tr>
                  <th>PARENTESCO</th>
                  <th>EDAD</th>
                  <th>OCUPACIÓN</th>
                  <th>DONDE LABORA O ESTUDIA</th>
                  <th>TELÉFONO</th>
                  <th>DOMICILIO</th>

              
                </tr>
            </thead>
            <tbody>
                <?php if ($d->movements): ?>
                    <?php foreach ($d->movements as $mov): ?>
                      <tr>
                          <td><?php echo $mov->familiar;?></td>
                          <td><?php echo $mov->edad;?></td>
                          <td><?php echo $mov->ocupacion;?></td>
                          <td><?php echo $mov->laboraEstudia;?></td>
                          <td><?php echo $mov->tel1;?></td>
                          <td><?php echo $mov->calle." ".$mov->calle." ".$mov->numero." ".$mov->colonia;?></td>
                          
                      </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr><td colspan="9">No se encuentran registros</td></tr>
                <?php endif; ?>
            </tbody>

        </table>

        </div>
      </div>
        
