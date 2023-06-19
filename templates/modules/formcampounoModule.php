<?php if ($d->movements): ?>
    <?php foreach ($d->movements as $mov): ?>
      
                      
          <input type='hidden' name='idDatos' id='idDatos' value='<?php echo $mov->idDatos;?>'>
            
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Sexo</label>
                <select name="sexo" id="sexo" class="form-control">
                  <option value="m" <?php if($mov->sexo == 'm'){ echo "selected";}?>>Masculino</option>
                  <option value="f" <?php if($mov->sexo == 'f'){ echo "selected";}?>>Femenino</option>
                </select>
                
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Edad</label>
                <input type="number" class="form-control" id="edad" name="edad" value='<?php echo $mov->edad;?>' required>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Estado Civil</label>
                <select name="estadoCivil" id="estadoCivil" class="form-control">
                  <option value="Soltero" <?php if($mov->estadoCivil == 'Soltero'){ echo "selected";}?>>Soltero</option>
                  <option value="Casado" <?php if($mov->estadoCivil == 'Casado'){ echo "selected";}?>>Casado</option>
                  <option value="Divorciado" <?php if($mov->estadoCivil == 'Divorciado'){ echo "selected";}?>>Divorciado</option>
                  <option value="Viudo" <?php if($mov->estadoCivil == 'Viudo'){ echo "selected";}?>>Viudo</option>
                  <option value="Union libre" <?php if($mov->estadoCivil == 'Unión libre'){ echo "selected";}?>>Unión libre</option>
                  <option value="Concubinado" <?php if($mov->estadoCivil == 'Concubinado'){ echo "selected";}?>>Concubinado</option>
                  <option value="Otro" <?php if($mov->estadoCivil == 'N/A'){ echo "selected";}?>>N/A</option>
                </select>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Lugar de Nacimiento</label>
                <input type="text" class="form-control" id="lugarNacimiento" name="lugarNacimiento" value='<?php echo $mov->lugarNacimiento;?>' required>
              </div>
            </div>

            <div class="col-md-3">
              <div class="form-group">
                <label for="exampleInputPassword1">Fecha de Nacimiento</label>
                <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" value='<?php echo $mov->fechaNacimiento;?>' required>
              </div>
            </div>

            <div class="col-md-3">
              <div class="form-group">
                <label for="exampleInputPassword1">Escolaridad</label>
                <select name="escolaridad" id="escolaridad" class="form-control">
                  <option value="Primaria" <?php if($mov->escolaridad == 'Primaria'){ echo "selected";}?>>Primaria</option>
                  <option value="Secundaria" <?php if($mov->escolaridad == 'Secundaria'){ echo "selected";}?>>Secundaria</option>
                  <option value="Preparatoria" <?php if($mov->escolaridad == 'Preparatoria'){ echo "selected";}?>>Preparatoria</option>
                  <option value="Bachillerato" <?php if($mov->escolaridad == 'Bachillerato'){ echo "selected";}?>>Bachillerato</option>
                  <option value="Carrera tecnica" <?php if($mov->escolaridad == 'Carrera tecnica'){ echo "selected";}?>>Carrera tecnica</option>
                  <option value="Universidad" <?php if($mov->escolaridad == 'Universidad'){ echo "selected";}?>>Universidad</option>
                  <option value="Maestria" <?php if($mov->escolaridad == 'Maestria'){ echo "selected";}?>>Maestria</option>
                  <option value="Doctorado" <?php if($mov->escolaridad == 'Doctorado'){ echo "selected";}?>>Doctorado</option>
                  <option value="Otro" <?php if($mov->escolaridad == 'Otro'){ echo "selected";}?>>Otro</option>
                </select>
              </div>
            </div>


            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">En caso de emergencia llamar a:</label>
                <input type="text" class="form-control" id="llamadaEmergencia" name="llamadaEmergencia" value='<?php echo $mov->llamadaEmergencia;?>' required>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Télefono:</label>
                <input type="number" class="form-control" id="telEmergencia" name="telEmergencia" value='<?php echo $mov->telEmergencia;?>' required>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Parentesco:</label>
                <input type="text" class="form-control" id="parentesco" name="parentesco" value='<?php echo $mov->parentesco;?>' required>
              </div>
            </div>

            
            <div class="col-md-12"> <button type="submit" class="btn btn-block btn-warning" > Editar</button> </div>

  <?php endforeach; ?>

<?php else: ?>
                     
      <div class="col-md-4">
        <div class="form-group">
          <label for="exampleInputPassword1">Sexo</label>
          <select name="sexo" id="sexo" class="form-control">
            <option value="m" >Masculino</option>
            <option value="f" >Femenino</option>
          </select>
          
        </div>
      </div>

      <div class="col-md-4">
        <div class="form-group">
          <label for="exampleInputPassword1">Edad</label>
          <input type="number" class="form-control" id="edad" name="edad" value='' required>
        </div>
      </div>

      <div class="col-md-4">
        <div class="form-group">
          <label for="exampleInputPassword1">Estado Civil</label>
          <select name="estadoCivil" id="estadoCivil" class="form-control">
            <option value="Soltero" >Soltero</option>
            <option value="Casado" >Casado</option>
            <option value="Divorciado">Divorciado</option>
            <option value="Viudo" >Viudo</option>
            <option value="Union libre">Union libre</option>
            <option value="Concubinado" >Concubinado</option>
            <option value="Otro" >Otro</option>
          </select>
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleInputPassword1">Lugar de Nacimiento</label>
          <input type="text" class="form-control" id="lugarNacimiento" name="lugarNacimiento" value='' required>
        </div>
      </div>

      <div class="col-md-3">
        <div class="form-group">
          <label for="exampleInputPassword1">Fecha de Nacimiento</label>
          <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" value='' required>
        </div>
      </div>

      <div class="col-md-3">
        <div class="form-group">
          <label for="exampleInputPassword1">Escolaridad</label>
          <select name="escolaridad" id="escolaridad" class="form-control">
            <option value="Primaria" >Primaria</option>
            <option value="Secundaria" >Secundaria</option>
            <option value="Preparatoria" >Preparatoria</option>
            <option value="Bachillerato" >Bachillerato</option>
            <option value="Carrera tecnica" >Carrera tecnica</option>
            <option value="Universidad" >Universidad</option>
            <option value="Maestria" >Maestria</option>
            <option value="Doctorado" >Doctorado</option>
            <option value="Otro" >Otro</option>
          </select>
        </div>
      </div>

      
      <div class="col-md-4">
        <div class="form-group">
          <label for="exampleInputPassword1">En caso de emergencia llamar a:</label>
          <input type="text" class="form-control" id="llamadaEmergencia" name="llamadaEmergencia" value='' required>
        </div>
      </div>

      <div class="col-md-4">
        <div class="form-group">
          <label for="exampleInputPassword1">Télefono:</label>
          <input type="number" class="form-control" id="telEmergencia" name="telEmergencia" value='' required>
        </div>
      </div>

      <div class="col-md-4">
        <div class="form-group">
          <label for="exampleInputPassword1">Parentesco:</label>
          <input type="text" class="form-control" id="parentesco" name="parentesco" value='' required>
        </div>
      </div>
      
      <div class="col-md-12"><button type="submit" class="btn btn-block btn-primary" > Guardar cambios</button></div>

<?php endif; ?>
   