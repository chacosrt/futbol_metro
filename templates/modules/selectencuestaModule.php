<select name="encuestador" id="encuestador" class="form-control" >
  <option value=""></option>
  <?php foreach ($d->movements as $mov): ?>
     <option value="<?php echo $mov->idEncuestadores;?>" > <?php echo $mov->encuestador;?> </option>
  <?php endforeach; ?>                           
</select>

