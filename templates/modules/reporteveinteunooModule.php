

    
      <div class="box box-primary">
        <div class="box-header ui-sortable-handle" style="cursor: move;"><h3 class="box-title">DOCUMENTACIÓN OFICIAL</h3> </div>
        <div class="box-body">
          <table class="table table-bordered table-striped">
            <thead>
                <tr>
                <th>Titulo</th>
                <th>Folio</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($d->movements): ?>
                    <?php foreach ($d->movements as $mov): ?>
                      <tr>
                      <td><?php echo $mov->titulo;?></td>
                      <td><?php echo $mov->folio;?></td>
                      
                      </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr><td colspan="9">No se encuentran registros</td></tr>
                <?php endif; ?>
            </tbody>

        </table>

        </div>
      </div>
        
     
  