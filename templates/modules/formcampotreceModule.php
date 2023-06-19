<?php if ($d->movements): ?>
    <?php foreach ($d->movements as $mov): ?>
      
                      
      <input type="hidden" name="idSalud" id="idSalud" value="<?php echo $mov->idSalud;?>">
        
                        
  
                      
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Ha consumido algún tipo de droga</label>
                          <input type="text" class="form-control" id="droga" name="droga" value='<?php echo $mov->droga;?>' required>
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">¿Cuál?</label>
                          <input type="text" class="form-control" id="cualDroga" name="cualDroga" required value='<?php echo $mov->cualDroga;?>'>
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Usted fuma</label>
                          <input type="text" class="form-control" id="fuma" name="fuma" required value='<?php echo $mov->fuma;?>'>
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Frecuencia</label>
                          <input type="text" class="form-control" id="frecuenciaFuma" name="frecuenciaFuma" required value='<?php echo $mov->frecuenciaFuma;?>'>
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Ingiere bebidas alcohólicas </label>
                          <input type="text" class="form-control" id="bebidas" name="bebidas" required value='<?php echo $mov->bebidas;?>'>
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Frecuencia</label>
                          <input type="text" class="form-control" id="frecuenciaBebidas" name="frecuenciaBebidas" required value='<?php echo $mov->frecuenciaBebidas;?>'>
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Toma café </label>
                          <input type="text" class="form-control" id="cafe" name="cafe" required value='<?php echo $mov->cafe;?>'>
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Frecuencia</label>
                          <input type="text" class="form-control" id="frecuenciaCafe" name="frecuenciaCafe" required value='<?php echo $mov->frecuenciaCafe;?>'>
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Utiliza lentes </label>
                          <input type="text" class="form-control" id="lentes" name="lentes" required value='<?php echo $mov->lentes;?>'>
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Diagnóstico</label>
                          <input type="text" class="form-control" id="diagnostico" name="diagnostico" required value='<?php echo $mov->diagnostico;?>'>
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Intervenciones quirúrgicas </label>
                          <input type="text" class="form-control" id="intervenciones" name="intervenciones" required value='<?php echo $mov->intervenciones;?>'>
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">¿De qué?</label>
                          <input type="text" class="form-control" id="dequeintervenciones" name="dequeintervenciones" required value='<?php echo $mov->dequeintervenciones;?>'>
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Enfermedades crónicas </label>
                          <input type="text" class="form-control" id="enfermedadesCronicas" name="enfermedadesCronicas" required value='<?php echo $mov->enfermedadesCronicas;?>'>
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">¿De qué?</label>
                          <input type="text" class="form-control" id="dequeCronicas" name="dequeCronicas" required value='<?php echo $mov->dequeCronicas;?>'>
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Enfermedades hereditarias </label>
                          <input type="text" class="form-control" id="hereditarias" name="hereditarias" required value='<?php echo $mov->hereditarias;?>'>
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">¿Cuál?</label>
                          <input type="text" class="form-control" id="cualHereditarias" name="cualHereditarias" required value='<?php echo $mov->cualHereditarias;?>'>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Usted o alguno de sus familiares requieren atención médica constante </label>
                          <input type="text" class="form-control" id="quienConstante" name="quienConstante" required value='<?php echo $mov->quienConstante;?>'>
                        </div>
                      </div>

                     
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">¿Por qué?</label>
                          <input type="text" class="form-control" id="porqueConstante" name="porqueConstante" required value='<?php echo $mov->porqueConstante;?>'>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Última vez que se realizó un examen médico </label>
                          <input type="text" class="form-control" id="ultimaVez" name="ultimaVez" required value='<?php echo $mov->ultimaVez;?>'>
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">¿Su salud la considera? </label>
                          <input type="text" class="form-control" id="considera" name="considera" required value='<?php echo $mov->considera;?>'>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">¿Por qué?</label>
                          <input type="text" class="form-control" id="porqueConsidera" name="porqueConsidera" required value='<?php echo $mov->porqueConsidera;?>'>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputPassword1">¿Practica algún deporte? </label>
                          <input type="text" class="form-control" id="deporte" name="deporte" required value='<?php echo $mov->deporte;?>'>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputPassword1">¿Cuál es su pasatiempo? </label>
                          <input type="text" class="form-control" id="pasatiempo" name="pasatiempo" required value='<?php echo $mov->pasatiempo;?>'>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Última vez que se enfermó. ¿De qué? </label>
                          <input type="text" class="form-control" id="ultimavezDeque" name="ultimavezDeque" required value='<?php echo $mov->ultimavezDeque;?>'>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputPassword1">¿Está embarazada? </label>
                          <input type="text" class="form-control" id="embarazo" name="embarazo" required value='<?php echo $mov->embarazo;?>'>
                        </div>
                      </div>
          
   
                   
            
            <div class="col-md-12"> <button type="submit" class="btn btn-block btn-warning" > Editar</button> </div>

  <?php endforeach; ?>

<?php else: ?>
                     
  
        <input type="hidden" name="idSalud" id="idSalud" >
        
        
                      
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Ha consumido algún tipo de droga</label>
                          <input type="text" class="form-control" id="droga" name="droga"  required>
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">¿Cuál?</label>
                          <input type="text" class="form-control" id="cualDroga" name="cualDroga" required >
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Usted fuma</label>
                          <input type="text" class="form-control" id="fuma" name="fuma" required >
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Frecuencia</label>
                          <input type="text" class="form-control" id="frecuenciaFuma" name="frecuenciaFuma" required >
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Ingiere bebidas alcohólicas </label>
                          <input type="text" class="form-control" id="bebidas" name="bebidas" required >
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Frecuencia</label>
                          <input type="text" class="form-control" id="frecuenciaBebidas" name="frecuenciaBebidas" required >
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Toma café </label>
                          <input type="text" class="form-control" id="cafe" name="cafe" required >
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Frecuencia</label>
                          <input type="text" class="form-control" id="frecuenciaCafe" name="frecuenciaCafe" required >
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Utiliza lentes </label>
                          <input type="text" class="form-control" id="lentes" name="lentes" required >
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Diagnóstico</label>
                          <input type="text" class="form-control" id="diagnostico" name="diagnostico" required >
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Intervenciones quirúrgicas </label>
                          <input type="text" class="form-control" id="intervenciones" name="intervenciones" required >
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">¿De qué?</label>
                          <input type="text" class="form-control" id="dequeintervenciones" name="dequeintervenciones" required >
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Enfermedades crónicas </label>
                          <input type="text" class="form-control" id="enfermedadesCronicas" name="enfermedadesCronicas" required >
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">¿De qué?</label>
                          <input type="text" class="form-control" id="dequeCronicas" name="dequeCronicas" required >
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Enfermedades hereditarias </label>
                          <input type="text" class="form-control" id="hereditarias" name="hereditarias" required >
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">¿Cuál?</label>
                          <input type="text" class="form-control" id="cualHereditarias" name="cualHereditarias" required >
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Usted o alguno de sus familiares requieren atención médica constante </label>
                          <input type="text" class="form-control" id="quienConstante" name="quienConstante" required >
                        </div>
                      </div>

                     
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">¿Por qué?</label>
                          <input type="text" class="form-control" id="porqueConstante" name="porqueConstante" required >
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Última vez que se realizó un examen médico </label>
                          <input type="text" class="form-control" id="ultimaVez" name="ultimaVez" required >
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">¿Su salud la considera? </label>
                          <input type="text" class="form-control" id="considera" name="considera" required >
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">¿Por qué?</label>
                          <input type="text" class="form-control" id="porqueConsidera" name="porqueConsidera" required >
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputPassword1">¿Practica algún deporte? </label>
                          <input type="text" class="form-control" id="deporte" name="deporte" required >
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputPassword1">¿Cuál es su pasatiempo? </label>
                          <input type="text" class="form-control" id="pasatiempo" name="pasatiempo" required >
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Última vez que se enfermó. ¿De qué? </label>
                          <input type="text" class="form-control" id="ultimavezDeque" name="ultimavezDeque" required >
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputPassword1">¿Está embarazada? </label>
                          <input type="text" class="form-control" id="embarazo" name="embarazo" required >
                        </div>
                      </div>
         
      
      <div class="col-md-12"><button type="submit" class="btn btn-block btn-primary" > Guardar cambios</button></div>

<?php endif; ?>
   