<select name="realizo" id="realizo" class="form-control" >
<option ></option>
  <?php foreach ($d->movements as $mov): ?>
     <option value="<?php echo $mov->idUsuario;?>" > <?php echo $mov->nombre;?> </option>
  <?php endforeach; ?>                           
</select>

