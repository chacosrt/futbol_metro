<?php if ($d->movements): ?>
    <?php foreach ($d->movements as $mov): ?>
                      
      <input type="hidden" name="idHistorial" id="idHistorial" value="<?php echo $mov->idHistorial;?>">
                     
      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleInputPassword1">Ultimo salario cotizado</label>
          <input type="text" name="ultimo" id='ultimo' class='form-control' value='<?php echo $mov->ultimo;?>'>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleInputPassword1">Vida laboral total</label>
          <input type="text" name="vida" id='vida' class='form-control' value='<?php echo $mov->vida;?>'>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleInputPassword1">No. de semanas cotizadas</label>
          <input type="text" name="nusemana" id='nusemana' class='form-control' value='<?php echo $mov->nusemana;?>'>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleInputPassword1">% de tiempo laborado</label>
          <input type="text" name="porcentaje" id='porcentaje' class='form-control' value='<?php echo $mov->porcentaje;?>'>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleInputPassword1">N. empleadores total y duración</label>
          <input type="text" name="numeroempleadores" id='numeroempleadores' class='form-control' value='<?php echo $mov->numeroempleadores;?>'>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleInputPassword1">Progresión salarial</label>
          <input type="text" name="progresion" id='progresion' class='form-control' value='<?php echo $mov->progresion;?>'>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleInputPassword1">Finiquito</label>
          <input type="text" name="finiquito" id='finiquito' class='form-control' value='<?php echo $mov->finiquito;?>'>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleInputPassword1">Liquidación</label>
          <input type="text" name="liquidacion" id='liquidacion' class='form-control' value='<?php echo $mov->liquidacion;?>'>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleInputPassword1">Aguinaldo</label>
          <input type="text" name="aguinaldo" id='aguinaldo' class='form-control' value='<?php echo $mov->aguinaldo;?>'>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleInputPassword1">Vacaciones</label>
          <input type="text" name="vacaciones" id='vacaciones' class='form-control' value='<?php echo $mov->vacaciones;?>'>
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <label for="exampleInputPassword1">Comentarios</label>
          <input type="text" name="comentarios" id='comentarios' class='form-control' value='<?php echo $mov->comentarios;?>'>
        </div>
      </div>

    
      <div class="col-md-12"> <button type="submit" class="btn btn-block btn-warning" > Editar</button> </div>

  <?php endforeach; ?>

<?php else: ?>
                     
  
        <input type="hidden" name="idHistorial" id="idHistorial" >
        <div class="col-md-4">
        <div class="form-group">
          <label for="exampleInputPassword1">Ultimo salario cotizado</label>
          <input type="text" name="ultimo" id='ultimo' class='form-control' value='<?php echo $mov->ultimo;?>'>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label for="exampleInputPassword1">Vida laboral total</label>
          <input type="text" name="vida" id='vida' class='form-control' value='<?php echo $mov->vida;?>'>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label for="exampleInputPassword1">No. de semanas cotizadas</label>
          <input type="text" name="nusemana" id='nusemana' class='form-control' value='<?php echo $mov->nusemana;?>'>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleInputPassword1">% de tiempo laborado</label>
          <input type="text" name="porcentaje" id='porcentaje' class='form-control' value='<?php echo $mov->porcentaje;?>'>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleInputPassword1">N. empleadores total y duración</label>
          <input type="text" name="numeroempleadores" id='numeroempleadores' class='form-control' value='<?php echo $mov->numeroempleadores;?>'>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleInputPassword1">Progresión salarial</label>
          <input type="text" name="progresion" id='progresion' class='form-control' value='<?php echo $mov->progresion;?>'>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleInputPassword1">Finiquito</label>
          <input type="text" name="finiquito" id='finiquito' class='form-control' value='<?php echo $mov->finiquito;?>'>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleInputPassword1">Liquidación</label>
          <input type="text" name="liquidacion" id='liquidacion' class='form-control' value='<?php echo $mov->liquidacion;?>'>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleInputPassword1">Aguinaldo</label>
          <input type="text" name="aguinaldo" id='aguinaldo' class='form-control' value='<?php echo $mov->aguinaldo;?>'>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleInputPassword1">Vacaciones</label>
          <input type="text" name="vacaciones" id='vacaciones' class='form-control' value='<?php echo $mov->vacaciones;?>'>
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <label for="exampleInputPassword1">Comentarios</label>
          <input type="text" name="comentarios" id='comentarios' class='form-control' value='<?php echo $mov->comentarios;?>'>
        </div>
      </div>
      
      <div class="col-md-12"><button type="submit" class="btn btn-block btn-primary" > Guardar cambios</button></div>

<?php endif; ?>
   