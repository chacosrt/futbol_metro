<?php if ($d->movements): ?>
    <?php foreach ($d->movements as $mov): ?>
      
                      
      <input type="hidden" name="idHobby" id="idHobby" value="<?php echo $mov->idHobby;?>">

                      
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Deportes</label>
                          <input type="text" name="deportes" id='deportes' class='form-control' value='<?php echo $mov->deportes;?>'>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Cual</label>
                          <input type="text" name="cual" id='cual' class='form-control' value='<?php echo $mov->cual;?>'>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Frecuencia</label>
                          <input type="text" name="frecuencia" id='frecuencia' class='form-control' value='<?php echo $mov->frecuencia;?>'>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Pasatiempos</label>
                          <input type="text" name="pasatiempos" id='pasatiempos' class='form-control' value='<?php echo $mov->pasatiempos;?>'>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Otros</label>
                          <input type="text" name="otros" id='otros' class='form-control' value='<?php echo $mov->otros;?>'>
                        </div>
                      </div>
                   
            
            <div class="col-md-12"> <button type="submit" class="btn btn-block btn-warning" > Editar</button> </div>

  <?php endforeach; ?>

<?php else: ?>
                     
  
        <input type="hidden" name="idHobby" id="idHobby" >
        
        
                          
            
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Deportes</label>
                          <input type="text" name="deportes" id='deportes' class='form-control' >
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Cual</label>
                          <input type="text" name="cual" id='cual' class='form-control' >
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Frecuencia</label>
                          <input type="text" name="frecuencia" id='frecuencia' class='form-control' >
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Pasatiempos</label>
                          <input type="text" name="pasatiempos" id='pasatiempos' class='form-control' >
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Otros</label>
                          <input type="text" name="otros" id='otros' class='form-control' >
                        </div>
                      </div>
                  
                </div>
      
      <div class="col-md-12"><button type="submit" class="btn btn-block btn-primary" > Guardar cambios</button></div>

<?php endif; ?>
   