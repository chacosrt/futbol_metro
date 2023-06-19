<select name="coordinador" id="coordinador" class="form-control" >
  <option ></option>
  <?php foreach ($d->movements as $mov): ?>
     <option value="<?php echo $mov->idAnalista; ?>"><?php echo $mov->nombre;?></option>
  <?php endforeach; ?>                           
</select>

