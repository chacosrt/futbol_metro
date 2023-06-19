<select name="puertollegada" id="puertollegada" class="form-control" >
<option ></option>
  <?php foreach ($d->movements as $mov): ?>
     <option value="<?php echo $mov->idPuertos?>" > <?php echo $mov->nombre;?> </option>
  <?php endforeach; ?>                           
</select>

