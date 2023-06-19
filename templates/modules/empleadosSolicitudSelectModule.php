<option></option>
<?php foreach ($d->movements as $mov): ?>
<option value="<?php echo $mov->idEmpleado?>" <?php if($_SESSION['idEmpleado'] == $mov->idEmpleado){ echo "selected";}?>><?php echo $mov->nombre." ".$mov->apePaterno." ".$mov->apeMaterno;?></option>
<?php endforeach; ?>                           


