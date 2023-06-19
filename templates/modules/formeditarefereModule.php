
        <?php if ($d->movements): ?>
            <?php foreach ($d->movements as $mov): ?>
              <div class="row">
              
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Empresa</label>
                    <input type="text" class="form-control" id="empresa" name="empresa" value='<?php echo $mov->empresa;?>'>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Giro</label>
                    <input type="text" class="form-control" id="giro" name="giro"value='<?php echo $mov->giro;?>'>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Direccion</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" value='<?php echo $mov->direccion;?>'>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Teléfono</label>
                    <input type="text" class="form-control" id="telefono" name="telefono" value='<?php echo $mov->telefono;?>'>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Fecha de ingreso</label>
                    <input type="date" class="form-control" id="fechaIngreso" name="fechaIngreso" value='<?php echo $mov->fechaIngreso;?>'>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Fecha de egreso</label>
                    <input type="date" class="form-control" id="fechaEgreso" name="fechaEgreso" value='<?php echo $mov->fechaEgreso;?>'>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Puesto</label>
                    <input type="text" class="form-control" id="puesto" name="puesto" value='<?php echo $mov->puesto;?>'>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Área</label>
                    <input type="text" class="form-control" id="area" name="area" value='<?php echo $mov->area;?>'>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Salario</label>
                    <input type="number" class="form-control" id="salario" name="salario" value='<?php echo $mov->salario;?>'>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Motivo de salida</label>
                    <input type="text" class="form-control" id="motivoSalida" name="motivoSalida" value='<?php echo $mov->motivoSalida;?>'>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Quien proporciona informacion</label>
                    <input type="text" class="form-control" id="quienProporciono" name="quienProporciono" value='<?php echo $mov->quienProporciono;?>'>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Puesto</label>
                    <input type="text" class="form-control" id="puestoProporciono" name="puestoProporciono" value='<?php echo $mov->puestoProporciono;?>'>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Calificacion del 1 al 10</label>
                    <input type="number" class="form-control" id="calificacion" name="calificacion" value='<?php echo $mov->calificacion;?>'>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputPassword1">El candidato interpuso demanda</label>
                    <input type="text" class="form-control" id="demanda" name="demanda" value='<?php echo $mov->demanda;?>'>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Lo volveria a contratar</label>
                    <input type="text" class="form-control" id="volveria" name="volveria" value='<?php echo $mov->volveria;?>'>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Por que</label>
                    <input type="text" class="form-control" id="porque" name="porque" value='<?php echo $mov->porque;?>'>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputPassword1">El candidato es:</label>
                    <select name="candidatoes" id="candidatoes" class='form-control'>
                      <option <?php if($mov->candidatoes == "Recomendable"){ echo "selected";}?> value="Recomendable">Recomendable</option>
                      <option <?php if($mov->candidatoes == "Recomendable con reserva"){ echo "selected";}?> value="Recomendable con reserva">Recomendable con reserva</option>
                      <option <?php if($mov->candidatoes == "No recomendable"){ echo "selected";}?> value="No recomendable">No recomendable</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputPassword1">El candidato tiene periodos Inactivos</label>
                    <input type="text" class="form-control" id="periodosInactivo" name="periodosInactivo" value='<?php echo $mov->periodosInactivo;?>'>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Opinión sobre el Candidato:</label>
                    <textarea name="observaciones" id="observaciones" cols="30" rows="3" class='form-control'><?php echo $mov->observaciones?></textarea>
                  </div>
                </div>
              

              </div>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="9">No se encuentran registros</td></tr>
        <?php endif; ?>
   