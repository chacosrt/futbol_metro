<?php if ($d->movements): ?>
    <?php foreach ($d->movements as $mov): ?>
      <input type="text" id="archivoedi" name="archivoedi" value="<?php echo $mov->archivo; ?>">
      <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="exampleInputPassword1">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $mov->nombre; ?>">
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label for="exampleInputPassword1">Dirección</label>
                <input type="text" class="form-control" id="direccion" name="direccion" value="<?php echo $mov->direccion; ?>">
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label for="exampleInputPassword1">Contacto</label>
                <input type="text" class="form-control" id="contacto" name="contacto" value="<?php echo $mov->contacto; ?>">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Correo</label>
                <input type="mail" class="form-control" id="correo" name="correo" required value="<?php echo $mov->correo; ?>">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Telefono</label>
                <input type="number" class="form-control" id="telefono" name="telefono" value="<?php echo $mov->telefono; ?>">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Pagina Web</label>
                <input type="text" class="form-control" id="paginaWeb" name="paginaWeb" value="<?php echo $mov->paginaWeb; ?>">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Logo</label>
                <input type="file" class="form-control" id="archivo" name="archivo">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label for="exampleInputPassword1">Comentarios</label>
                <textarea name="comentarios" id="comentarios" cols="30" rows="3" class="form-control"><?php echo $mov->comentarios; ?></textarea>
              </div>
            </div>
          </div>
    </div>

      
      
    <?php endforeach; ?>
<?php else: ?>
    <tr><td colspan="9">No se encuentran registros</td></tr>
<?php endif; ?>
   