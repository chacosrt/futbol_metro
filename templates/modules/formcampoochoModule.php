<?php if ($d->movements): ?>
    <?php foreach ($d->movements as $mov): ?>
      
      <input type="hidden" name="idDeuda" id="idDeuda" value='<?php echo $mov->idDeuda;?>' >
     
                      
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">¿Cuenta con deudas?</label>
                          <input type="text" class="form-control" id="cuentaDeuda" name="cuentaDeuda" value='<?php echo $mov->cuentaDeuda;?>'  required>
                        </div>
                      </div>
              
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">¿Con quién ?</label>
                          <input type="text" class="form-control" id="conQuien" name="conQuien" value='<?php echo $mov->conQuien;?>'  required>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Monto adeudado</label>
                          <input type="text" class="form-control" id="monto" name="monto" value='<?php echo $mov->monto;?>'  required>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Abono mensual</label>
                          <input type="text" class="form-control" id="abonoMensual" name="abonoMensual" value='<?php echo $mov->abonoMensual;?>'  required>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">A pagar en</label>
                          <input type="text" class="form-control" id="apagaren" name="apagaren" value='<?php echo $mov->apagaren;?>'  required>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">¿Cuenta con Automóvil?</label>
                          <input type="text" class="form-control" id="cuentaauto" name="cuentaauto" value='<?php echo $mov->cuentaauto;?>'  required>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Modelo</label>
                          <input type="text" class="form-control" id="modelo" name="modelo" value='<?php echo $mov->modelo;?>'  required>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Placas</label>
                          <input type="text" class="form-control" id="placas" name="placas" value='<?php echo $mov->placas;?>'  required>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Valor de auto</label>
                          <input type="text" class="form-control" id="valorAuto" name="valorAuto" value='<?php echo $mov->valorAuto;?>'  required>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Cuenta con alguna propiedad?</label>
                          <input type="text" class="form-control" id="propiedad" name="propiedad" value='<?php echo $mov->propiedad;?>'  required>
                        </div>
                      </div>
                      <div class="col-md-9">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Ubicación</label>
                          <input type="text" class="form-control" id="ubicacon" name="ubicacon" value='<?php echo $mov->ubicacon;?>'  required>
                        </div>
                      </div>
                      <hr>
                      <div class="col-md-2">
                        <div class="form-group">
                          <label for="exampleInputPassword1">¿Cuenta con Tarjeta de Crédito ? </label>
                          <input type="text" class="form-control" id="tarjetaCredito" name="tarjetaCredito" value='<?php echo $mov->tarjetaCredito;?>'  required>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">¿Con qué Banco?</label>
                          <input type="text" class="form-control" id="bancotarjetaCredito" name="bancotarjetaCredito" value='<?php echo $mov->bancotarjetaCredito;?>'  required>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Línea de Crédito Autorizado</label>
                          <input type="text" class="form-control" id="creditoAutorizado" name="creditoAutorizado" value='<?php echo $mov->creditoAutorizado;?>' required>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">¿Cuenta con Tarjeta de Tienda Comercial?     </label>
                          <input type="text" class="form-control" id="tarjetaTienda" name="tarjetaTienda"  value='<?php echo $mov->tarjetaTienda;?>' required>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="form-group">
                          <label for="exampleInputPassword1">¿Con quién ?     </label>
                          <input type="text" class="form-control" id="conquienTienda" name="conquienTienda" value='<?php echo $mov->conquienTienda;?>'  required>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Línea de Crédito Autorizado Tienda</label>
                          <input type="text" class="form-control" id="creditoAutorizadotienda" name="creditoAutorizadotienda" value='<?php echo $mov->creditoAutorizadotienda;?>' required>
                        </div>
                      </div>
                      
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Observaciones</label>
                          <textarea name="observaciones" id="observaciones" cols="30" rows="3" class="form-control"><?php echo $mov->observaciones;?></textarea>
                          
                        </div>
                      </div>
                   
            
            <div class="col-md-12"> <button type="submit" class="btn btn-block btn-warning" > Editar</button> </div>

  <?php endforeach; ?>

<?php else: ?>

        <input type="hidden" name="idDeuda" id="idDeuda" >
                      
        <div class="col-md-3">
          <div class="form-group">
            <label for="exampleInputPassword1">¿Cuenta con deudas?</label>
            <input type="text" class="form-control" id="cuentaDeuda" name="cuentaDeuda"   required>
          </div>
        </div>

        <div class="col-md-3">
          <div class="form-group">
            <label for="exampleInputPassword1">¿Con quién ?</label>
            <input type="text" class="form-control" id="conQuien" name="conQuien"  required>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="exampleInputPassword1">Monto adeudado</label>
            <input type="text" class="form-control" id="monto" name="monto"   required>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="exampleInputPassword1">Abono mensual</label>
            <input type="text" class="form-control" id="abonoMensual" name="abonoMensual"   required>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="exampleInputPassword1">A pagar en</label>
            <input type="text" class="form-control" id="apagaren" name="apagaren"  required>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="exampleInputPassword1">¿Cuenta con Automóvil?</label>
            <input type="text" class="form-control" id="cuentaauto" name="cuentaauto"  required>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="exampleInputPassword1">Modelo</label>
            <input type="text" class="form-control" id="modelo" name="modelo"   required>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="exampleInputPassword1">Placas</label>
            <input type="text" class="form-control" id="placas" name="placas"   required>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="exampleInputPassword1">Valor de auto</label>
            <input type="text" class="form-control" id="valorAuto" name="valorAuto"   required>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="exampleInputPassword1">Cuenta con alguna propiedad?</label>
            <input type="text" class="form-control" id="propiedad" name="propiedad"   required>
          </div>
        </div>
        <div class="col-md-9">
          <div class="form-group">
            <label for="exampleInputPassword1">Ubicación</label>
            <input type="text" class="form-control" id="ubicacon" name="ubicacon"   required>
          </div>
        </div>
        <hr>
        <div class="col-md-2">
          <div class="form-group">
            <label for="exampleInputPassword1">¿Cuenta con Tarjeta de Crédito ? </label>
            <input type="text" class="form-control" id="tarjetaCredito" name="tarjetaCredito"   required>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="exampleInputPassword1">¿Con qué Banco?</label>
            <input type="text" class="form-control" id="bancotarjetaCredito" name="bancotarjetaCredito"   required>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group">
            <label for="exampleInputPassword1">Línea de Crédito Autorizado</label>
            <input type="text" class="form-control" id="creditoAutorizado" name="creditoAutorizado"  required>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="exampleInputPassword1">¿Cuenta con Tarjeta de Tienda Comercial?     </label>
            <input type="text" class="form-control" id="tarjetaTienda" name="tarjetaTienda"   required>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group">
            <label for="exampleInputPassword1">¿Con quién ?     </label>
            <input type="text" class="form-control" id="conquienTienda" name="conquienTienda"   required>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group">
            <label for="exampleInputPassword1">Línea de Crédito Autorizado Tienda</label>
            <input type="text" class="form-control" id="creditoAutorizadotienda" name="creditoAutorizadotienda"  required>
          </div>
        </div>
        
        <div class="col-md-12">
          <div class="form-group">
            <label for="exampleInputPassword1">Observaciones</label>
            <textarea name="observaciones" id="observaciones" cols="30" rows="3" class="form-control"></textarea>
            
          </div>
        </div>

      
      <div class="col-md-12"><button type="submit" class="btn btn-block btn-primary" > Guardar cambios</button></div>

<?php endif; ?>
   