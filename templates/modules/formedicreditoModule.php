<?php if ($d->movements): ?>
    <?php foreach ($d->movements as $mov): ?>
      <div class="row">
            
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Fecha</label>
                <input type="text" class="form-control" id="fecha" name="fecha" value='<?php echo $mov->fecha;?>'>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Entidad Financiera</label>
                <input type="text" class="form-control" id="entidad" name="entidad" value='<?php echo $mov->entidad;?>'>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Monto a pagar mensualmente </label>
                <input type="text" class="form-control" id="monto" name="monto" value='<?php echo $mov->monto;?>'>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Total de credito </label>
                <input type="text" class="form-control" id="total" name="total" value='<?php echo $mov->total;?>'>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Estatus </label>
                <input type="text" class="form-control" id="estatus" name="estatus" value='<?php echo $mov->estatus;?>'>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Nivel de endeudamiento total </label>
                <input type="text" class="form-control" id="endeudamiento" name="endeudamiento" value='<?php echo $mov->endeudamiento;?>'>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Nivel endeudamiento hipoteca </label>
                <input type="text" class="form-control" id="hipoteca" name="hipoteca" value='<?php echo $mov->hipoteca;?>'>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">score </label>
                <input type="text" class="form-control" id="score" name="score" value='<?php echo $mov->score;?>'>
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label for="exampleInputPassword1">Comentarios</label>
                <input type="text" class="form-control" id="comentario" name="comentario" value='<?php echo $mov->comentario;?>'>
              </div>
            </div>


          </div>  
    <?php endforeach; ?>
<?php else: ?>
    <tr><td colspan="9">No se encuentran registros</td></tr>
<?php endif; ?>
   