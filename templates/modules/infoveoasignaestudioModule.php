<?php if ($d->movements): ?>
    <?php foreach ($d->movements as $mov): ?>
      <div class="row">
            
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Nombre</label>
                <input type="text" class="form-control" id="nombreCandidato" name="nombreCandidato" value='<?php echo $mov->nombreCandidato?>' disabled>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Apellido Paterno</label>
                <input type="text" class="form-control" id="apePaterno" name="apePaterno" required value='<?php echo $mov->apePaterno?>' disabled>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Apellido Materno</label>
                <input type="text" class="form-control" id="apeMaterno" name="apeMaterno" required value='<?php echo $mov->apeMaterno?>' disabled>
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label for="exampleInputPassword1">Puesto</label>
                <input type="text" class="form-control" id="puesto" name="puesto" required value='<?php echo $mov->puesto?>' disabled>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">RFC</label>
                <input type="text" class="form-control" id="rfc" name="rfc" value='<?php echo $mov->rfc?>' disabled>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">CURP</label>
                <input type="text" class="form-control" id="curp" name="curp" value='<?php echo $mov->curp?>' disabled>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">NSS</label>
                <input type="text" class="form-control" id="nss" name="nss" value='<?php echo $mov->nss?>' disabled>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Tipo de servicio</label>
                <input type="text" class="form-control" id="nss" name="nss" value='<?php echo $mov->tiposervicio?>' disabled>
                
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Télefono</label>
                <input type="number" class="form-control" id="telefono" name="telefono" value='<?php echo $mov->telefono?>' disabled>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Correo</label>
                <input type="text" class="form-control" id="correo" name="correo" value='<?php echo $mov->correo?>' disabled>
              </div>
            </div>

            <div class="col-md-12 text-center">
            <a href='<?php echo CONTENEDOR."estudios/estudioNum_".$mov->idEstudio."/".$mov->archivo; ?>' style='cursor:pointer' target='_blank'><i class='fa fa-file'></i> Ver archivo</a>
              
            </div>

      </div>  
<?php endforeach; ?>
<?php else: ?>
    <tr><td colspan="9">No se encuentran registros</td></tr>
<?php endif; ?>
   