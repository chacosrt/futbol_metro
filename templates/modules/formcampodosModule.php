<?php if ($d->movements): ?>
    <?php foreach ($d->movements as $mov): ?>
      
                      
          <input type='text' name='idDomicilio' id='idDomicilio' value='<?php echo $mov->idDomicilio;?>'>
            
          <div class="col-md-4">
          <div class="form-group">
            <label for="exampleInputPassword1">Calle</label>
            <input type="text" class="form-control" id="calle"  name="calle" required value='<?php echo $mov->calle;?>'>
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-group">
            <label for="exampleInputPassword1">Numero</label>
            <input type="number" class="form-control" id="numero" name="numero"  required value='<?php echo $mov->numero;?>'>
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-group">
            <label for="exampleInputPassword1">Colonia</label>
            <input type="text" class="form-control" id="colonia" name="colonia"  required value='<?php echo $mov->colonia;?>'>
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-group">
            <label for="exampleInputPassword1">Delegación / Municipio</label>
            <input type="text" class="form-control" id="delegacionMunicipio" name="delegacionMunicipio"  required value='<?php echo $mov->delegacionMunicipio;?>'>
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-group">
            <label for="exampleInputPassword1">Ciudad</label>
            <input type="text" class="form-control" id="ciudad" name="ciudad"  required value='<?php echo $mov->ciudad;?>'>
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-group">
            <label for="exampleInputPassword1">Estado</label>
            <select name="estado" id="estado" class="form-control">
              <option <?php if($mov->estado == "Aguascalientes"){echo "selected";}?>>Aguascalientes</option>
              <option <?php if($mov->estado == "Baja California"){echo "selected";}?>>Baja California</option>
              <option <?php if($mov->estado == "Baja California"){echo "selected";}?>>Baja California</option>
              <option <?php if($mov->estado == "Campeche"){echo "selected";}?>>Campeche</option>
              <option <?php if($mov->estado == "Chiapas"){echo "selected";}?>>Chiapas</option>
              <option <?php if($mov->estado == "Chihuahua"){echo "selected";}?>>Chihuahua</option>
              <option <?php if($mov->estado == "Ciudad de México"){echo "selected";}?>>Ciudad de México</option>
              <option <?php if($mov->estado == "Coahuila"){echo "selected";}?>>Coahuila</option>
              <option <?php if($mov->estado == "Colima"){echo "selected";}?>>Colima</option>
              <option <?php if($mov->estado == "Durango"){echo "selected";}?>>Durango</option>
              <option <?php if($mov->estado == "Guanajuato"){echo "selected";}?>>Guanajuato</option>
              <option <?php if($mov->estado == "Guerrero"){echo "selected";}?>>Guerrero</option>
              <option <?php if($mov->estado == "Hidalgo"){echo "selected";}?>>Hidalgo</option>
              <option <?php if($mov->estado == "Jalisco"){echo "selected";}?>>Jalisco</option>
              <option <?php if($mov->estado == "México"){echo "selected";}?>>México</option>
              <option <?php if($mov->estado == "Michoacán"){echo "selected";}?>>Michoacán</option>
              <option <?php if($mov->estado == "Morelos"){echo "selected";}?>>Morelos</option>
              <option <?php if($mov->estado == "Nayarit"){echo "selected";}?>>Nayarit</option>
              <option <?php if($mov->estado == "Nuevo León"){echo "selected";}?>>Nuevo León</option>
              <option <?php if($mov->estado == "Oaxaca"){echo "selected";}?>>Oaxaca</option>
              <option <?php if($mov->estado == "Puebla"){echo "selected";}?>>Puebla</option>
              <option <?php if($mov->estado == "Querétaro"){echo "selected";}?>>Querétaro</option>
              <option <?php if($mov->estado == "Quintana Roo"){echo "selected";}?>>Quintana Roo</option>
              <option <?php if($mov->estado == "San Luis Potosí"){echo "selected";}?>>San Luis Potosí</option>
              <option <?php if($mov->estado == "Sinaloa"){echo "selected";}?>>Sinaloa</option>
              <option <?php if($mov->estado == "Sonora"){echo "selected";}?>>Sonora</option>
              <option <?php if($mov->estado == "Tabasco"){echo "selected";}?>>Tabasco</option>
              <option <?php if($mov->estado == "Tamaulipas"){echo "selected";}?>>Tamaulipas</option>
              <option <?php if($mov->estado == "Tlaxcala"){echo "selected";}?>>Tlaxcala</option>
              <option <?php if($mov->estado == "Veracruz"){echo "selected";}?>>Veracruz</option>
              <option <?php if($mov->estado == "Yucatán"){echo "selected";}?>>Yucatán</option>
              <option <?php if($mov->estado == "Zacatecas"){echo "selected";}?>>Zacatecas</option>
            </select>
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-group">
            <label for="exampleInputPassword1">CP</label>
            <input type="number" class="form-control" id="cp" name="cp"  required value='<?php echo $mov->cp;?>'>
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-group">
            <label for="exampleInputPassword1">Tiempo de residencia</label>
            <input type="number" class="form-control" id="tiempoResindir" name="tiempoResindir"  required value='<?php echo $mov->tiempoResindir;?>'>
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-group">
            <label for="exampleInputPassword1">Télefono</label>
            <input type="number" class="form-control" id="tel1" name="tel1"  required value='<?php echo $mov->tel1;?>'>
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-group">
            <label for="exampleInputPassword1">Télefono 2</label>
            <input type="number" class="form-control" id="tel2" name="tel2"  required value='<?php echo $mov->tel2;?>'>
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-group">
            <label for="exampleInputPassword1">Celular</label>
            <input type="number" class="form-control" id="cel1" name="cel1"  required value='<?php echo $mov->cel1;?>'>
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-group">
            <label for="exampleInputPassword1">Celular 2</label>
            <input type="number" class="form-control" id="cel2" name="cel2"  required value='<?php echo $mov->cel2;?>'>
          </div>
        </div>
       
            <div class="col-md-12"> <button type="submit" class="btn btn-block btn-warning" > Editar</button> </div>

  <?php endforeach; ?>

<?php else: ?>
        <input type='text' name='idDomicilio' id='idDomicilio'>
                      
        <div class="col-md-4">
          <div class="form-group">
            <label for="exampleInputPassword1">Calle</label>
            <input type="text" class="form-control" id="calle"  name="calle" required>
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-group">
            <label for="exampleInputPassword1">Numero</label>
            <input type="number" class="form-control" id="numero" name="numero"  required>
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-group">
            <label for="exampleInputPassword1">Colonia</label>
            <input type="text" class="form-control" id="colonia" name="colonia"  required>
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-group">
            <label for="exampleInputPassword1">Delegación / Municipio</label>
            <input type="text" class="form-control" id="delegacionMunicipio" name="delegacionMunicipio"  required>
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-group">
            <label for="exampleInputPassword1">Ciudad</label>
            <input type="text" class="form-control" id="ciudad" name="ciudad"  required>
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-group">
            <label for="exampleInputPassword1">Estado</label>
            <select name="estado" id="estado" class="form-control">
              <option >Aguascalientes</option>
              <option >Baja California</option>
              <option >Baja California</option>
              <option >Campeche</option>
              <option >Chiapas</option>
              <option >Chihuahua</option>
              <option >Ciudad de México</option>
              <option >Coahuila</option>
              <option >Colima</option>
              <option >Durango</option>
              <option >Guanajuato</option>
              <option >Guerrero</option>
              <option >Hidalgo</option>
              <option >Jalisco</option>
              <option >México</option>
              <option >Michoacán</option>
              <option >Morelos</option>
              <option >Nayarit</option>
              <option >Nuevo León</option>
              <option >Oaxaca</option>
              <option >Puebla</option>
              <option >Querétaro</option>
              <option >Quintana Roo</option>
              <option >San Luis Potosí</option>
              <option >Sinaloa</option>
              <option >Sonora</option>
              <option >Tabasco</option>
              <option >Tamaulipas</option>
              <option >Tlaxcala</option>
              <option >Veracruz</option>
              <option >Yucatán</option>
              <option >Zacatecas</option>
            </select>
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-group">
            <label for="exampleInputPassword1">CP</label>
            <input type="number" class="form-control" id="cp" name="cp"  required>
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-group">
            <label for="exampleInputPassword1">Tiempo de residencia</label>
            <input type="number" class="form-control" id="tiempoResindir" name="tiempoResindir"  required>
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-group">
            <label for="exampleInputPassword1">Télefono</label>
            <input type="number" class="form-control" id="tel1" name="tel1"  required>
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-group">
            <label for="exampleInputPassword1">Télefono 2</label>
            <input type="number" class="form-control" id="tel2" name="tel2"  required>
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-group">
            <label for="exampleInputPassword1">Celular</label>
            <input type="number" class="form-control" id="cel1" name="cel1"  required>
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-group">
            <label for="exampleInputPassword1">Celular 2</label>
            <input type="number" class="form-control" id="cel2" name="cel2"  required>
          </div>
        </div>
    

      <div class="col-md-12"><button type="submit" class="btn btn-block btn-primary" > Guardar cambios</button></div>

<?php endif; ?>
   