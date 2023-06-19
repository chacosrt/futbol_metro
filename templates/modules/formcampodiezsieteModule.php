<?php if ($d->movements): ?>
    <?php foreach ($d->movements as $mov): ?>
                      
      <input type="hidden" name="idNivel" id="idNivel" value="<?php echo $mov->idNivel;?>">
                     
      <div class="col-md-4">
        <div class="form-group">
          <label for="exampleInputPassword1">Último grado de estudios</label>
          <input type="text" name="ultimo" id='ultimo' class='form-control' value='<?php echo $mov->ultimo;?>'>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label for="exampleInputPassword1">Periodo</label>
          <input type="text" name="periodo" id='periodo' class='form-control' value='<?php echo $mov->periodo;?>'>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label for="exampleInputPassword1">Profesional</label>
          <input type="text" name="profesional" id='profesional' class='form-control' value='<?php echo $mov->profesional;?>'>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleInputPassword1">No. de cédula</label>
          <input type="text" name="cedula" id='cedula' class='form-control' value='<?php echo $mov->cedula;?>'>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleInputPassword1">Especialidad</label>
          <input type="text" name="especialidad" id='especialidad' class='form-control' value='<?php echo $mov->especialidad;?>'>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleInputPassword1">En caso de no tener cédula profesional especifica último grado</label>
          <input type="text" name="caso" id='caso' class='form-control' value='<?php echo $mov->caso;?>'>
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
                     
  
        <input type="hidden" name="idNivel" id="idNivel" >
        <div class="col-md-4">
        <div class="form-group">
          <label for="exampleInputPassword1">Último grado de estudios</label>
          <input type="text" name="ultimo" id='ultimo' class='form-control' >
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label for="exampleInputPassword1">Periodo</label>
          <input type="text" name="periodo" id='periodo' class='form-control' >
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label for="exampleInputPassword1">Profesional</label>
          <input type="text" name="profesional" id='profesional' class='form-control' >
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleInputPassword1">No. de cédula</label>
          <input type="text" name="cedula" id='cedula' class='form-control' >
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleInputPassword1">Especialidad</label>
          <input type="text" name="especialidad" id='especialidad' class='form-control' >
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleInputPassword1">En caso de no tener cédula profesional especifica último grado</label>
          <input type="text" name="caso" id='caso' class='form-control' >
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleInputPassword1">Otros</label>
          <input type="text" name="otros" id='otros' class='form-control' >
        </div>
      </div>
      
      <div class="col-md-12"><button type="submit" class="btn btn-block btn-primary" > Guardar cambios</button></div>

<?php endif; ?>
   