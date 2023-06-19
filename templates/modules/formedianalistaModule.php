<?php if ($d->movements): ?>
    <?php foreach ($d->movements as $mov): ?>
      <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $mov->nombre; ?>">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Apellido paterno</label>
                <input type="text" class="form-control" id="apePaterno" name="apePaterno" value="<?php echo $mov->apePaterno; ?>">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Apellido Materno</label>
                <input type="text" class="form-control" id="apeMaterno" name="apeMaterno" value="<?php echo $mov->apeMaterno; ?>">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Tipo de usuario</label>
                <select name="idPerfil" id="idPerfil" class='form-control'>
                  <option <?php if($mov->idPerfil == 2){echo "selected";}?> value="2">Administrador</option>
                  <option <?php if($mov->idPerfil == 3){echo "selected";}?> value="3">Supervisor</option>
                  <option <?php if($mov->idPerfil == 4){echo "selected";}?> value="4">Analista</option>
                </select>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Correo</label>
                <input type="mail" class="form-control" id="correo" name="correo" value="<?php echo $mov->correo; ?>">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Coordinador | <?php echo $mov->coordinador; ?></label>
                <div class="selectcoordinadoresedi"></div>
              </div>
            </div>


            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Cliente | <?php echo $mov->cliente; ?></label>
                <div class="selectclioenteedi"></div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Télefono</label>
                <input type="mail" class="form-control" id="telefono" name="telefono" required value="<?php echo $mov->telefono; ?>">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Celular</label>
                <input type="number" class="form-control" id="celular" name="celular" value="<?php echo $mov->celular; ?>">
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label for="exampleInputPassword1">Foto</label>
                <input type="file" class="form-control" id="archivo" name="archivo">
                <input type="hidden" class="form-control" id="archivoedi" name="archivoedi" value="<?php echo $mov->archivo; ?>">
                
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label for="exampleInputPassword1">Comentarios</label>
                <textarea name="comentarios" id="comentarios" cols="30" rows="3" class="form-control"><?php echo $mov->comentarios; ?></textarea>
              </div>
            </div>

          </div>
      
    <?php endforeach; ?>
<?php else: ?>
    <tr><td colspan="9">No se encuentran registros</td></tr>
<?php endif; ?>
   