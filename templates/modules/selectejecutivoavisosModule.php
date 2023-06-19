<select name="dirigido" id="dirigido" class="form-control" >
  <option value=""></option>
  <option value='999'>Todos los usuarios</option>
  <?php foreach ($d->movements as $mov): ?>
     <option value="<?php echo $mov->idUsuario;?>" > <?php echo $mov->nombre;?> </option>
  <?php endforeach; ?>                           
</select>

