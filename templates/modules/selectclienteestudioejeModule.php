<select name="idEmpresa" id="idEmpresa" class="form-control" >
<option ></option>
  <?php foreach ($d->movements as $mov): ?>
     <option value="<?php echo $mov->idEmpresa;?>" > <?php echo $mov->nombre;?> </option>
  <?php endforeach; ?>                           
</select>

