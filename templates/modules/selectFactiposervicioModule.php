<select name="tipoServicio" id="tipoServicio" class="form-control">
<option ></option>
  <?php foreach ($d->movements as $mov): ?>
     <option value="<?php echo $mov->idTipoServicio?>" > <?php echo $mov->clave."|".$mov->nombre?><?php echo $mov->nombre;?> </option>
  <?php endforeach; ?>                           


