<?php if ($d->movements): ?>
    <?php foreach ($d->movements as $mov): ?>
      <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="exampleInputPassword1">Empresa |<?php echo $mov->idEmpresa;?></label>
                <div class='selectclioenteedi'></div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label for="exampleInputPassword1">nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value='<?php echo $mov->nombre;?>'>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Correo</label>
                <input type="mail" class="form-control" id="correo" name="correo" required value='<?php echo $mov->correo;?>'>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Telefono</label>
                <input type="number" class="form-control" id="telefono" name="telefono" value='<?php echo $mov->telefono;?>'>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Celular</label>
                <input type="text" class="form-control" id="celular" name="celular" value='<?php echo $mov->celular;?>'>
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label for="exampleInputPassword1">Comentarios</label>
                <textarea name="comentarios" id="comentarios" cols="30" rows="3" class="form-control"><?php echo $mov->comentarios;?></textarea>
              </div>
            </div>
          </div>

      
      
    <?php endforeach; ?>
<?php else: ?>
    <tr><td colspan="9">No se encuentran registros</td></tr>
<?php endif; ?>
   