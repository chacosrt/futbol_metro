<?php if ($d->movements): ?>
    <?php foreach ($d->movements as $mov): ?>
      
                      
          <input type='hidden' name='idProblema' id='idProblema' value='<?php echo $mov->idProblema;?>'>
            
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Nombre de la empresa</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value='<?php echo $mov->nombre;?>' required>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Nombre informante</label>
                <input type="text" class="form-control" id="informante" name="informante" value='<?php echo $mov->informante;?>' required>
              </div>
            </div>


            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Comentarios:</label>
                <input type="text" class="form-control" id="comentarios" name="comentarios" value='<?php echo $mov->comentarios;?>' required>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Existe problema:</label>
                <select name="dato" id="dato" class="form-control">
                  <option <?php if($mov->dato == 1){echo "selected";}?> value="1">Si</option>
                  <option <?php if($mov->dato == 2){echo "selected";}?> value="2">No</option>
                </select>
              </div>
            </div>

         
            
            <div class="col-md-12"> <button type="submit" class="btn btn-block btn-warning" > Editar</button> </div>

  <?php endforeach; ?>

<?php else: ?>
                     
  <input type='hidden' name='idProblema' id='idProblema'>
            
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Nombre de la empresa</label>
                <input type="text" class="form-control" id="nombre" name="nombre" >
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Nombre informante</label>
                <input type="text" class="form-control" id="informante" name="informante" >
              </div>
            </div>


            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Comentarios:</label>
                <input type="text" class="form-control" id="comentarios" name="comentarios" >
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Existe problema:</label>
                <select name="dato" id="dato" class="form-control">
                  <option <?php if($mov->dato == 1){echo "selected";}?> value="1">Si</option>
                  <option <?php if($mov->dato == 2){echo "selected";}?> value="2">No</option>
                </select>
              </div>
            </div>
      
      <div class="col-md-12"><button type="submit" class="btn btn-block btn-primary" > Guardar cambios</button></div>

<?php endif; ?>
   