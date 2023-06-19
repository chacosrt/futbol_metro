<?php if ($d->movements): ?>
    <?php foreach ($d->movements as $mov): ?>
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label for="exampleInputPassword1">Parentesco</label>
            <input type="text" name="parentesco" id='parentesco' class='form-control' value='<?php echo $mov->parentesco;?>' >
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="exampleInputPassword1">Nombre</label>
            <input type="text" name="nombre" id='nombre' class='form-control' value='<?php echo $mov->nombre;?>' >
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="exampleInputPassword1">Edad</label>
            <input type="text" name="edad" id='edad' class='form-control' value='<?php echo $mov->edad;?>' >
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="exampleInputPassword1">Ocupación</label>
            <input type="text" name="ocupacion" id='ocupacion' class='form-control' value='<?php echo $mov->ocupacion;?>' >
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="exampleInputPassword1">Donde labora</label>
            <input type="text" name="donde" id='donde' class='form-control' value='<?php echo $mov->donde;?>' >
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="exampleInputPassword1">Calle</label>
            <input type="text" name="calle" id='calle' class='form-control'value='<?php echo $mov->calle;?>' >
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="exampleInputPassword1">Número</label>
            <input type="text" name="numero" id='numero' class='form-control' value='<?php echo $mov->numero;?>' >
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="exampleInputPassword1">Colonia</label>
            <input type="text" name="colonia" id='colonia' class='form-control' value='<?php echo $mov->colonia;?>' >
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="exampleInputPassword1">Delegación</label>
            <input type="text" name="del" id='del' class='form-control' value='<?php echo $mov->del;?>' >
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="exampleInputPassword1">Ciudad</label>
            <input type="text" name="ciudad" id='ciudad' class='form-control' value='<?php echo $mov->ciudad;?>' >
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="exampleInputPassword1">Estado</label>
            <input type="text" name="estado" id='estado' class='form-control' value='<?php echo $mov->estado;?>' >
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="exampleInputPassword1">C.P</label>
            <input type="text" name="cp" id='cp' class='form-control' value='<?php echo $mov->cp;?>' >
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="exampleInputPassword1">Tiempo</label>
            <input type="text" name="tiempo" id='tiempo' class='form-control' value='<?php echo $mov->tiempo;?>' >
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="exampleInputPassword1">Télefono</label>
            <input type="text" name="tel" id='tel' class='form-control' value='<?php echo $mov->tel;?>' >
          </div>
        </div>
        


      </div>
    <?php endforeach; ?>
<?php else: ?>
    <tr><td colspan="9">No se encuentran registros</td></tr>
<?php endif; ?>
   