<?php if ($d->movements): ?>
    <?php foreach ($d->movements as $mov): ?>
        <div class="row">
            
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre"value="<?php echo $mov->nombre ?>">
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Parentesco</label>
                <select name='parentesco' id='parentesco' class='form-control'>
                  <option value="Padre">Padre</option>
                  <option value="Madre">Madre</option>
                  <option value="Hermano(a)">Hermano(a)</option>
                  <option value="Abuelo(a)">Abuelo(a)</option>
                  <option value="Tio(a)">Tio(a)</option>
                  <option value="Esposa/conyuge">Esposa/conyuge</option>
                  <option value="Hijo(a)">Hijo(a)</option>
                  <option value="Otro">Otro</option>
                </select>
              </div>
            </div>
            

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Salario</label>
                <input type="number" class="form-control" id="salario" name="salario"value="<?php echo $mov->salario ?>">
              </div>
            </div>

            

            <div class="col-md-3">
              <div class="form-group">
                <label for="exampleInputPassword1">Ingreso</label>
                <input type="number" class="form-control" id="ingreso" name="ingreso"value="<?php echo $mov->ingreso ?>">
              </div>
            </div>

            <div class="col-md-3">
              <div class="form-group">
                <label for="exampleInputPassword1">Concepto</label>
                <select name='concepto' id='concepto' class='form-control'>
                  <option value="Alimentación">Alimentación</option>
                  <option value="Renta">Renta</option>
                  <option value="Agua">Agua</option>
                  <option value="Luz">Luz</option>
                  <option value="Tel./cel">Tel./cel</option>
                  <option value="Gas">Gas</option>
                  <option value="Transporte">Transporte</option>
                  <option value="Internet">Internet</option>
                  <option value="Otro">Otro</option>
                </select>
              </div>
            </div>

            <div class="col-md-3">
              <div class="form-group">
                <label for="exampleInputPassword1">Egresos</label>
                <input type="number" class="form-control" id="egresos" name="egresos" value="<?php echo $mov->egresos ?>">
              </div>
            </div>
            
            <div class="col-md-3">
              <div class="form-group">
                <label for="exampleInputPassword1">Superavit</label>
                <input type="text" class="form-control" id="superavit" name="superavit" value="<?php echo $mov->superavit ?>">
              </div>
            </div>

          

            <div class="col-md-12">
              <div class="form-group">
                <label for="exampleInputPassword1">Observaciones</label>
                <textarea name="observaciones" id="observaciones" cols="30" rows="3" class='form-control'><?php echo $mov->observaciones ?></textarea>
              </div>
            </div>
          

          </div>
       <?php endforeach; ?>
<?php else: ?>
    <tr><td colspan="9">No se encuentran registros</td></tr>
<?php endif; ?>
   