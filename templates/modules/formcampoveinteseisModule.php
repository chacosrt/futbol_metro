<?php if ($d->movements): ?>
    <?php foreach ($d->movements as $mov): ?>
      
                      
          <input type='hidden' name='idSerMedi' id='idSerMedi' value='<?php echo $mov->idSerMedi;?>'>
            
            

            <div class="col-md-12"><label for="exampleInputPassword1">IMSS</label></div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">No. clinica</label>
                <input type="text" class="form-control" id="clinicaim" name="clinicaim" value='<?php echo $mov->clinicaim;?>' required>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">No. Incidente</label>
                <input type="text" class="form-control" id="incidenteim" name="incidenteim" value='<?php echo $mov->incidenteim;?>' required>
              </div>
            </div>


            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Tipo de Enfermedad</label>
                <input type="text" class="form-control" id="tipoim" name="tipoim" value='<?php echo $mov->tipoim;?>' required>
              </div>
            </div>

            <div class="col-md-12"><label for="exampleInputPassword1">ISSSTE</label></div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">No. clinica</label>
                <input type="text" class="form-control" id="clinicais" name="clinicais" value='<?php echo $mov->clinicais;?>' required>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">No. Incidente</label>
                <input type="text" class="form-control" id="incidenteis" name="incidenteis" value='<?php echo $mov->incidenteis;?>' required>
              </div>
            </div>


            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Tipo de Enfermedad</label>
                <input type="text" class="form-control" id="tipois" name="tipois" value='<?php echo $mov->tipois;?>' required>
              </div>
            </div>

            <div class="col-md-12"><label for="exampleInputPassword1">SEGURO POPULAR</label></div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">No. clinica</label>
                <input type="text" class="form-control" id="clinicase" name="clinicase" value='<?php echo $mov->clinicase;?>' required>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">No. Incidente</label>
                <input type="text" class="form-control" id="incidentese" name="incidentese" value='<?php echo $mov->incidentese;?>' required>
              </div>
            </div>


            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Tipo de Enfermedad</label>
                <input type="text" class="form-control" id="tipose" name="tipose" value='<?php echo $mov->tipose;?>' required>
              </div>
            </div>

            <div class="col-md-12"><label for="exampleInputPassword1">PRIVADO</label></div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Aseguradora</label>
                <input type="text" class="form-control" id="aseguradora" name="aseguradora" value='<?php echo $mov->aseguradora;?>' required>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">No. Incidente</label>
                <input type="text" class="form-control" id="incidentepri" name="incidentepri" value='<?php echo $mov->incidentepri;?>' required>
              </div>
            </div>


            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Tipo de Enfermedad</label>
                <input type="text" class="form-control" id="tipopri" name="tipopri" value='<?php echo $mov->tipopri;?>' required>
              </div>
            </div>

            <div class="col-md-12"><label for="exampleInputPassword1">ISSEMYM</label></div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">No. clinica</label>
                <input type="text" class="form-control" id="clinicaisse" name="clinicaisse" value='<?php echo $mov->clinicaisse;?>' required>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">No. Incidente</label>
                <input type="text" class="form-control" id="incidenteisse" name="incidenteisse" value='<?php echo $mov->incidenteisse;?>' required>
              </div>
            </div>


            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Tipo de Enfermedad</label>
                <input type="text" class="form-control" id="tipoisse" name="tipoisse" value='<?php echo $mov->tipoisse;?>' required>
              </div>
            </div>

           

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">No tiene</label>
                <input type="text" class="form-control" id="notiene" name="notiene" value='<?php echo $mov->notiene;?>' required>
              </div>
            </div>

    
            <div class="col-md-12"> <button type="submit" class="btn btn-block btn-warning" > Editar</button> </div>

  <?php endforeach; ?>

<?php else: ?>
                     
  <input type='hidden' name='idSerMedi' id='idSerMedi' >
            
           

            <div class="col-md-12"><label for="exampleInputPassword1">IMSS</label></div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">No. clinica</label>
                <input type="text" class="form-control" id="clinicaim" name="clinicaim" >
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">No. Incidente</label>
                <input type="text" class="form-control" id="incidenteim" name="incidenteim" >
              </div>
            </div>


            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Tipo de Enfermedad</label>
                <input type="text" class="form-control" id="tipoim" name="tipoim" >
              </div>
            </div>

            <div class="col-md-12"><label for="exampleInputPassword1">ISSSTE</label></div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">No. clinica</label>
                <input type="text" class="form-control" id="clinicais" name="clinicais" >
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">No. Incidente</label>
                <input type="text" class="form-control" id="incidenteis" name="incidenteis" >
              </div>
            </div>


            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Tipo de Enfermedad</label>
                <input type="text" class="form-control" id="tipois" name="tipois" >
              </div>
            </div>

            <div class="col-md-12"><label for="exampleInputPassword1">SEGURO POPULAR</label></div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">No. clinica</label>
                <input type="text" class="form-control" id="clinicase" name="clinicase" >
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">No. Incidente</label>
                <input type="text" class="form-control" id="incidentese" name="incidentese" >
              </div>
            </div>


            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Tipo de Enfermedad</label>
                <input type="text" class="form-control" id="tipose" name="tipose" >
              </div>
            </div>

            <div class="col-md-12"><label for="exampleInputPassword1">PRIVADO</label></div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Aseguradora</label>
                <input type="text" class="form-control" id="aseguradora" name="aseguradora" >
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">No. Incidente</label>
                <input type="text" class="form-control" id="incidentepri" name="incidentepri" >
              </div>
            </div>


            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Tipo de Enfermedad</label>
                <input type="text" class="form-control" id="tipopri" name="tipopri" >
              </div>
            </div>

            <div class="col-md-12"><label for="exampleInputPassword1">ISSEMYM</label></div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">No. clinica</label>
                <input type="text" class="form-control" id="clinicaisse" name="clinicaisse" >
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">No. Incidente</label>
                <input type="text" class="form-control" id="incidenteisse" name="incidenteisse">
              </div>
            </div>


            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Tipo de Enfermedad</label>
                <input type="text" class="form-control" id="tipoisse" name="tipoisse">
              </div>
            </div>

           

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">No tiene</label>
                <input type="text" class="form-control" id="notiene" name="notiene" >
              </div>
            </div>
      <div class="col-md-12"><button type="submit" class="btn btn-block btn-primary" > Guardar cambios</button></div>

<?php endif; ?>
   