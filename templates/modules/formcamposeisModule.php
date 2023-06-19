<?php if ($d->movements): ?>
    <?php foreach ($d->movements as $mov): ?>
      
      <input type="hidden" name="idConducta" id="idConducta" value='<?php echo $mov->idConducta;?>' >
              
        <div class="col-md-6">
          <div class="form-group">
            <label for="exampleInputPassword1">¿Quién estuvo presente?</label>
            <input type="text" class="form-control" id="quienEstuvo"  value='<?php echo $mov->quienEstuvo;?>' name="quienEstuvo" required>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="exampleInputPassword1">Conducta del entrevistado</label>
            <input type="text" class="form-control" id="conductaEntrevistado" name="conductaEntrevistado" value='<?php echo $mov->conductaEntrevistado;?>' required>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="exampleInputPassword1">Relación con los vecinos</label>
            <input type="text" class="form-control" id="relacionVecinos" name="relacionVecinos" value='<?php echo $mov->relacionVecinos;?>' required>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="exampleInputPassword1">¿Pertenece a algún grupo social?</label>
            <input type="text" class="form-control" id="pertenecegrupo" name="pertenecegrupo" value='<?php echo $mov->pertenecegrupo;?>' required>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="exampleInputPassword1">¿Ha tenido problemas legales?</label>
            <input type="text" class="form-control" id="problemasLegales" name="problemasLegales" value='<?php echo $mov->problemasLegales;?>' required>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="exampleInputPassword1">¿Tiene algun familiar recluido?</label>
            <input type="text" class="form-control" id="familiarRecluido" name="familiarRecluido" value='<?php echo $mov->familiarRecluido;?>' required>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="exampleInputPassword1">¿Tiene un familiar en la empresa?</label>
            <input type="text" class="form-control" id="familiaresAdentro" name="familiaresAdentro" value='<?php echo $mov->familiaresAdentro;?>' required>
          </div>
        </div>
   
                   
            
            <div class="col-md-12"> <button type="submit" class="btn btn-block btn-warning" > Editar</button> </div>

  <?php endforeach; ?>

<?php else: ?>

        <input type="hidden" name="idConducta" id="idConducta" >
              
        <div class="col-md-6">
          <div class="form-group">
            <label for="exampleInputPassword1">¿Quién estuvo presente?</label>
            <input type="text" class="form-control" id="quienEstuvo"   name="quienEstuvo" required>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="exampleInputPassword1">Conducta del entrevistado</label>
            <input type="text" class="form-control" id="conductaEntrevistado" name="conductaEntrevistado"  required>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="exampleInputPassword1">Relación con los vecinos</label>
            <input type="text" class="form-control" id="relacionVecinos" name="relacionVecinos"  required>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="exampleInputPassword1">¿Pertenece a algún grupo social?</label>
            <input type="text" class="form-control" id="pertenecegrupo" name="pertenecegrupo"  required>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="exampleInputPassword1">¿Ha tenido problemas legales?</label>
            <input type="text" class="form-control" id="problemasLegales" name="problemasLegales"  required>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="exampleInputPassword1">¿Tiene algun familiar recluido?</label>
            <input type="text" class="form-control" id="familiarRecluido" name="familiarRecluido"  required>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="exampleInputPassword1">¿Tiene un familiar en la empresa?</label>
            <input type="text" class="form-control" id="familiaresAdentro" name="familiaresAdentro"  required>
          </div>
        </div>
             
      
      <div class="col-md-12"><button type="submit" class="btn btn-block btn-primary" > Guardar cambios</button></div>

<?php endif; ?>
   