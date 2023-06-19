<select name="empleados" id="empleados" class="form-control">
    <option></option>
  <?php foreach ($d->movements as $mov): ?>
     <option value="<?php echo $mov->idEmpleado?>"><?php echo $mov->nombre." ".$mov->apePaterno." ".$mov->apeMaterno;?></option>
  <?php endforeach; ?>                           
</select>

