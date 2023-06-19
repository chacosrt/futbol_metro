<?php if ($d->movements): ?>
    <?php foreach ($d->movements as $mov): ?>
      
                      
      <input type="hidden" name="idRedes" id="idRedes" value="<?php echo $mov->idRedes;?>">
        
                        
          <div class="col-md-4">
            <div class="form-group">
              <label for="exampleInputPassword1">Facebook</label>
              <input type="text" class="form-control" id="facebook" value='<?php echo $mov->facebook;?>' name="facebook" required>
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label for="exampleInputPassword1">Twitter</label>
              <input type="text" class="form-control" id="twitter" name="twitter" value='<?php echo $mov->twitter;?>' required>
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label for="exampleInputPassword1">Linkedin</label>
              <input type="text" class="form-control" id="linkedin" name="linkedin" value='<?php echo $mov->linkedin;?>' required>
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label for="exampleInputPassword1">Instagram</label>
              <input type="text" class="form-control" id="instagram" name="instagram" value='<?php echo $mov->instagram;?>' required>
            </div>
          </div>
   
                   
            
            <div class="col-md-12"> <button type="submit" class="btn btn-block btn-warning" > Editar</button> </div>

  <?php endforeach; ?>

<?php else: ?>
                     
  
        <input type="hidden" name="idRedes" id="idRedes" >
        
        <div class="col-md-4">
            <div class="form-group">
              <label for="exampleInputPassword1">Facebook</label>
              <input type="text" class="form-control" id="facebook"  name="facebook" required>
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label for="exampleInputPassword1">Twitter</label>
              <input type="text" class="form-control" id="twitter" name="twitter"  required>
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label for="exampleInputPassword1">Linkedin</label>
              <input type="text" class="form-control" id="linkedin" name="linkedin"  required>
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label for="exampleInputPassword1">Instagram</label>
              <input type="text" class="form-control" id="instagram" name="instagram"  required>
            </div>
          </div>

      
      <div class="col-md-12"><button type="submit" class="btn btn-block btn-primary" > Guardar cambios</button></div>

<?php endif; ?>
   