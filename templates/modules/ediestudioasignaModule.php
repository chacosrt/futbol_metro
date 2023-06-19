<?php if ($d->movements): ?>
    <?php foreach ($d->movements as $mov): ?>
      <div class="row">
            
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Nombre</label>
                <input type="text" class="form-control" id="nombreCandidato" name="nombreCandidato" value='<?php echo $mov->nombreCandidato?>' required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Apellido Paterno</label>
                <input type="text" class="form-control" id="apePaterno" name="apePaterno" required value='<?php echo $mov->apePaterno?>'>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Apellido Materno</label>
                <input type="text" class="form-control" id="apeMaterno" name="apeMaterno" required value='<?php echo $mov->apeMaterno?>'>
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label for="exampleInputPassword1">Puesto</label>
                <input type="text" class="form-control" id="puesto" name="puesto" required value='<?php echo $mov->puesto?>'>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">RFC</label>
                <input type="text" class="form-control" id="rfc" name="rfc" value='<?php echo $mov->rfc?>'>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">CURP</label>
                <input type="text" class="form-control" id="curp" name="curp" value='<?php echo $mov->curp?>'>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">NSS</label>
                <input type="text" class="form-control" id="nss" name="nss" value='<?php echo $mov->nss?>'>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Tipo de servicio</label>
                <select multiple name="tiposervicio" id="tiposervicio" class='form-control'>
                  <option <?php if($mov->nombreCandidato == 1){echo "selected";}?> value="1">Estudio socioeconomico</option>
                  <option <?php if($mov->nombreCandidato == 2){echo "selected";}?> value="2">Estudio sociolaboral</option>
                  <option <?php if($mov->nombreCandidato == 3){echo "selected";}?> value="3">Consulta de demanda</option>
                  <option <?php if($mov->nombreCandidato == 4){echo "selected";}?> value="3">Consulta IMS</option>
                </select>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Télefono</label>
                <input type="number" class="form-control" id="telefono" name="telefono" value='<?php echo $mov->telefono?>'>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Correo</label>
                <input type="text" class="form-control" id="correo" name="correo" value='<?php echo $mov->correo?>'>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Fotografia</label>
                <input type="hidden" name='fileEdi' id='fileEdi' value='<?php echo $mov->foto ?>'>
                <input type="file" class="form-control" id="file" name="file">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Curriculum</label>
                <input type="hidden" name='fileEdi2' id='fileEdi2' value='<?php echo $mov->archivo ?>'>
                <input type="file" class="form-control" id="file2" name="file2">
              </div>
            </div>

      </div>  
<?php endforeach; ?>
<?php else: ?>
    <tr><td colspan="9">No se encuentran registros</td></tr>
<?php endif; ?>
   