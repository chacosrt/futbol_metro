<?php if ($d->movements): ?>
    <?php foreach ($d->movements as $mov): ?>
      <div class="row">
            
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $mov->nombre ?>">
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Tiempo de conocerlo</label>
                <input type="text" class="form-control" id="tiempoConocerlo" name="tiempoConocerlo" value="<?php echo $mov->tiempoConocerlo ?>">
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Relación</label>
                <input type="text" class="form-control" id="relacion" name="relacion" value="<?php echo $mov->relacion ?>">
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Domicilio</label>
                <input type="text" class="form-control" id="domicilio" name="domicilio" value="<?php echo $mov->domicilio ?>">
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Teléfono</label>
                <input type="text" class="form-control" id="tel1" name="tel1" value="<?php echo $mov->tel1 ?>">
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label for="exampleInputPassword1">Opinión sobre el Candidato:</label>
                <textarea name="opinion" id="opinion" cols="30" rows="3" class='form-control'><?php echo $mov->opinion ?>"</textarea>
              </div>
            </div>
          

          </div>

        <?php endforeach; ?>
<?php else: ?>
    <tr><td colspan="9">No se encuentran registros</td></tr>
<?php endif; ?>
   