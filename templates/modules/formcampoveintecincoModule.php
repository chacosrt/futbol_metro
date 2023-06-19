<?php if ($d->movements): ?>
    <?php foreach ($d->movements as $mov): ?>
      
                      
          <input type='hidden' name='idInfona' id='idInfona' value='<?php echo $mov->idInfona;?>'>
            
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Estatus</label>
                <input type="text" class="form-control" id="estatus" name="estatus" value='<?php echo $mov->estatus;?>' required>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Puntos</label>
                <input type="text" class="form-control" id="puntos" name="puntos" value='<?php echo $mov->puntos;?>' required>
              </div>
            </div>


            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Subcuenta vivienda</label>
                <input type="text" class="form-control" id="subcuenta" name="subcuenta" value='<?php echo $mov->subcuenta;?>' required>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Prestamo Máximo</label>
                <input type="text" class="form-control" id="maximo" name="maximo" value='<?php echo $mov->maximo;?>' required>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Descuento hipoteca:</label>
                <input type="text" class="form-control" id="hipoteca" name="hipoteca" value='<?php echo $mov->hipoteca;?>' required>
              </div>
            </div>

    
            <div class="col-md-12"> <button type="submit" class="btn btn-block btn-warning" > Editar</button> </div>

  <?php endforeach; ?>

<?php else: ?>
                     
  <input type='hidden' name='idInfona' id='idInfona' >
            
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Estatus</label>
                <input type="text" class="form-control" id="estatus" name="estatus" >
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Puntos</label>
                <input type="text" class="form-control" id="puntos" name="puntos" >
              </div>
            </div>


            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Subcuenta vivienda</label>
                <input type="text" class="form-control" id="subcuenta" name="subcuenta" >
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Prestamo Máximo</label>
                <input type="text" class="form-control" id="maximo" name="maximo" >
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Descuento hipoteca:</label>
                <input type="text" class="form-control" id="hipoteca" name="hipoteca" >
              </div>
            </div>
      <div class="col-md-12"><button type="submit" class="btn btn-block btn-primary" > Guardar cambios</button></div>

<?php endif; ?>
   