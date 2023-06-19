<?php if ($d->movements): ?>
    <?php foreach ($d->movements as $mov): ?>
      
      <input type="hidden" name="idEntorno" id="idEntorno" value='<?php echo $mov->idEntorno;?>' >
     
                        <div class="col-md-2">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Tipo de zona:</label>
                          <select name="tipoZona" id="tipoZona" class="form-control">
                            <option value="Urbana" <?php if($mov->tipoZona == "Urbana"){ echo "selected";}?> >Urbana</option>
                            <option value="Suburbana" <?php if($mov->tipoZona == "Suburbana"){ echo "selected";}?>>Suburbana</option>
                            <option value="Rural" <?php if($mov->tipoZona == "Rural"){ echo "selected";}?>>Rural</option>
                            <option value="Asentamiento" <?php if($mov->tipoZona == "Asentamiento"){ echo "selected";}?>>Asentamiento</option>
                          </select>
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Tipo de vivienda</label>
                          <select name="tipoVivienda" id="tipoVivienda" class="form-control">
                            <option value="Propia" <?php if($mov->tipoVivienda == "Propia"){ echo "selected";}?>>Propia</option>
                            <option value="Rentada" <?php if($mov->tipoVivienda == "Rentada"){ echo "selected";}?>>Rentada</option>
                            <option value="Familiar" <?php if($mov->tipoVivienda == "Familiar"){ echo "selected";}?>>Familiar</option>
                            <option value="Invitada" <?php if($mov->tipoVivienda == "Invitada"){ echo "selected";}?>>Invitada</option>
                            <option value="Prestada" <?php if($mov->tipoVivienda == "Prestada"){ echo "selected";}?>>Prestada</option>
                          </select>
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Edificación de Inmueble</label>
                          <select name="edificacion" id="edificacion" class="form-control">
                            <option value="Casa sola" <?php if($mov->edificacion == "Casa sola"){ echo "selected";}?>>Casa sola</option>
                            <option value="Departamento" <?php if($mov->edificacion == "Departamento"){ echo "selected";}?>>Departamento</option>
                            <option value="Vecindad" <?php if($mov->edificacion == "Vecindad"){ echo "selected";}?>>Vecindad</option>
                            <option value="Campamento" <?php if($mov->edificacion == "Campamento"){ echo "selected";}?>>Campamento</option>
                            <option value="Cuarto solo" <?php if($mov->edificacion == "Cuarto solo"){ echo "selected";}?>>Cuarto solo</option>
                          </select>
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Titular del inmueble</label>
                          <input type="text" class="form-control" id="titular" name="titular" value='<?php echo $mov->titular;?>' required>
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Parentesco</label>
                          <input type="text" class="form-control" id="parentesco" name="parentesco" value='<?php echo $mov->parentesco;?>' required>
                        </div>
                      </div>
                      <br>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Numero de recamaras</label>
                          <input type="text" class="form-control" id="numRecamaras" name="numRecamaras" value='<?php echo $mov->numRecamaras;?>' required>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Numero de baños</label>
                          <input type="text" class="form-control" id="nomBano" name="nomBano" value='<?php echo $mov->nomBano;?>' required>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Tipo de baño</label>
                          <select name="tipobano" id="tipobano" class='form-control'>
                            <option value="Privado" <?php if($mov->tipobano == "Privado"){ echo "selected";}?>>Privado</option>
                            <option value="Compartido" <?php if($mov->tipobano == "Compartido"){ echo "selected";}?>>Compartido</option>
                            <option value="Baño con regadera" <?php if($mov->tipobano == "Baño con regadera"){ echo "selected";}?>>Baño con regadera</option>
                          </select>
                        </div>
                      </div>

                      <div class="col-md-12 text-center">
                        <div class="form-group">
                          <div class="checkbox">
                            <label><br><input type="checkbox" name='sala' id='sala' value='1' <?php if($mov->sala == 1){ echo "checked";}?>>Sala</label>
                            <label><br><input type="checkbox" name='comedor' id='comedor' value='1' <?php if($mov->comedor == 1){ echo "checked";}?>>Comedor</label>
                            <label><br><input type="checkbox" name='cocina' id='cocina' value='1' <?php if($mov->cocina == 1){ echo "checked";}?>>Cocina</label>
                            <label><br><input type="checkbox" name='garaje' id='garaje' value='1' <?php if($mov->garaje == 1){ echo "checked";}?>>Garaje</label>
                            <label><br><input type="checkbox" name='jardin' id='jardin' value='1' <?php if($mov->jardin == 1){ echo "checked";}?>>Jardin</label>
                            <label><br><input type="checkbox" name='estudio' id='estudio' value='1' <?php if($mov->estudio == 1){ echo "checked";}?>>Estudio</label>
                            <label><br><input type="checkbox" name='zotehuela' id='zotehuela' value='1' <?php if($mov->zotehuela == 1){ echo "checked";}?>>Zotehuela</label>
                            <label><br><input type="checkbox" name='patio' id='patio' value='1' <?php if($mov->patio == 1){ echo "checked";}?>>Patio</label>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12 text-center">
                        <div class="form-group">
                          <div class="checkbox">
                            <label><br><input type="checkbox" name='agua' value='1' <?php if($mov->agua == 1){ echo "checked";}?>>Agua</label>
                            <label><br><input type="checkbox" name='luz' value='1' <?php if($mov->luz == 1){ echo "checked";}?>>Luz</label>
                            <label><br><input type="checkbox" name='drenaje' value='1' <?php if($mov->drenaje == 1){ echo "checked";}?>>Drenaje</label>
                            <label><br><input type="checkbox" name='pavimentacion' value='1' <?php if($mov->pavimentacion == 1){ echo "checked";}?>>Pavimentación</label>
                            <label><br><input type="checkbox" name='telefono' value='1' <?php if($mov->telefono == 1){ echo "checked";}?>>Teléfono</label>
                            <label><br><input type="checkbox" name='transporte' value='1' <?php if($mov->transporte == 1){ echo "checked";}?>>Transporte</label>
                            <label><br><input type="checkbox" name='areas' value='1' <?php if($mov->areas == 1){ echo "checked";}?>>Area de recreacion</label>
                            <label><br><input type="checkbox" name='vigilancia' value='1' <?php if($mov->vigilancia == 1){ echo "checked";}?>>Vigilancia</label>
                            <label><br><input type="checkbox" name='internet' value='1' <?php if($mov->internet == 1){ echo "checked";}?>>internet</label>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Tipo de paredes</label>
                          <select name="paredes" id="paredes" class='form-control'>
                            <option value="tabique" <?php if($mov->paredes == "Tabique"){ echo "selected";}?>>Tabique</option>
                            <option value="madera" <?php if($mov->paredes == "Madera"){ echo "selected";}?>>Madera</option>
                            <option value="carton" <?php if($mov->paredes == "Cartón"){ echo "selected";}?>>Carton</option>
                            <option value="otros materiales" <?php if($mov->paredes == "Otros materiales"){ echo "selected";}?>>Otros materiales</option>
                          </select>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Tipo de techos</label>
                          <select name="techos" id="techos" class='form-control'>
                            <option value="concreto" <?php if($mov->techos == "concreto"){ echo "selected";}?>>concreto</option>
                            <option value="lamina de asbesto" <?php if($mov->techos == "Lamina de asbesto"){ echo "selected";}?>>Lamina de asbesto</option>
                            <option value="lamina de carton" <?php if($mov->techos == "Lamina de cartón"){ echo "selected";}?>>Lamina de cartón</option>
                            <option value="lamina metalica" <?php if($mov->techos == "Lamina metalica"){ echo "selected";}?>>Lamina metalica</option>
                          </select>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Tipo de pisos</label>
                          <select name="pisos" id="pisos" class='form-control'>
                            <option value="mosaicos" <?php if($mov->pisos == "Mosaicos"){ echo "selected";}?>>Mosaicos</option>
                            <option value="loseta"> <?php if($mov->pisos == "Loseta"){ echo "selected";}?>Loseta</option>
                            <option value="cemento" <?php if($mov->pisos == "Cemento"){ echo "selected";}?>>Cemento</option>
                            <option value="tierra apisonada" <?php if($mov->pisos == "Tierra apisonadaa"){ echo "selected";}?>>Tierra apisonada</option>
                            <option value="madera" <?php if($mov->pisos == "Madera"){ echo "selected";}?>>Madera</option>

                          </select>
                        </div>
                      </div>

                      <div class="col-md-12 text-center">
                        <div class="form-group">
                          <div class="checkbox">
                            <label><br><input type="checkbox" name='telNormal' value='1' <?php if($mov->telNormal == 1){ echo "checked";}?>>Televisión normal</label>
                            <label><br><input type="checkbox" name='telPlasma' value='1' <?php if($mov->telPlasma == 1){ echo "checked";}?>>Televisión de plasma</label>
                            <label><br><input type="checkbox" name='estereo' value='1' <?php if($mov->estereo == 1){ echo "checked";}?>>Estéreo</label>
                            <label><br><input type="checkbox" name='dvd' value='1' <?php if($mov->dvd == 1){ echo "checked";}?>>DVD</label>
                            <label><br><input type="checkbox" name='blueray' value='1' <?php if($mov->blueray == 1){ echo "checked";}?>>Blue Ray</label>
                            <label><br><input type="checkbox" name='estufa' value='1' <?php if($mov->estufa == 1){ echo "checked";}?>>Estufa</label>
                            <label><br><input type="checkbox" name='horno' value='1' <?php if($mov->horno == 1){ echo "checked";}?>>Horno de microondas</label>
                            <label><br><input type="checkbox" name='lavadora' value='1' <?php if($mov->lavadora == 1){ echo "checked";}?>>Lavadora</label>
                            <label><br><input type="checkbox" name='centrolavado' value='1' <?php if($mov->centrolavado == 1){ echo "checked";}?>>Centro de lavado</label>
                            <label><br><input type="checkbox" name='refrigerador' value='1' <?php if($mov->refrigerador == 1){ echo "checked";}?>>Refrigerador</label>
                            <label><br><input type="checkbox" name='computadora' value='1' <?php if($mov->computadora == 1){ echo "checked";}?>>Computadora</label>

                          </div>
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Extensión del Inmueble</label>
                          <input type="text" class="form-control" id="extensionInmueble" name="extensionInmueble" value='<?php echo $mov->extensionInmueble;?>' required>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Condiciones Generales del Inmueble</label>
                          <input type="text" class="form-control" id="condicionesInmueble" name="condicionesInmueble" value='<?php echo $mov->condicionesInmueble;?>' required>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Condiciones del Mobiliario	</label>
                          <input type="text" class="form-control" id="condicionesMobiliario" name="condicionesMobiliario" value='<?php echo $mov->condicionesMobiliario;?>' required>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Orden</label>
                          <input type="text" class="form-control" id="orden" name="orden" value='<?php echo $mov->orden;?>' required>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Limpieza</label>
                          <input type="text" class="form-control" id="limpieza" name="limpieza" value='<?php echo $mov->limpieza;?>' required>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Delincuencia</label>
                          <input type="text" class="form-control" id="delincuencia" name="delincuencia" value='<?php echo $mov->delincuencia;?>' required>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Vandalismo</label>
                          <input type="text" class="form-control" id="vandalismo" name="vandalismo" value='<?php echo $mov->vandalismo;?>' required>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Drogadicción</label>
                          <input type="text" class="form-control" id="drogadiccion" name="drogadiccion" value='<?php echo $mov->drogadiccion;?>' required>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Alcoholismo</label>
                          <input type="text" class="form-control" id="alcoholismo" name="alcoholismo" value='<?php echo $mov->alcoholismo;?>' required>
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group"><br>
                          <label for="exampleInputPassword1">Rutas de acceso</label>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Principales Vías de acceso: </label>
                          <input type="text" class="form-control" id="viasdeacceso" name="viasdeacceso" value='<?php echo $mov->viasdeacceso;?>' required>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Medio de transporte: </label>
                          <input type="text" class="form-control" id="medioTransporte" name="medioTransporte" value='<?php echo $mov->medioTransporte;?>' required>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Tiempo aproximado a su Servicio: </label>
                          <input type="text" class="form-control" id="tiempoServicio" name="tiempoServicio" value='<?php echo $mov->tiempoServicio;?>' required>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Entre que calles: </label>
                          <input type="text" class="form-control" id="entreCalles" name="entreCalles" value='<?php echo $mov->entreCalles;?>' required>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Color de la vivienda: </label>
                          <input type="text" class="form-control" id="color" name="color" value='<?php echo $mov->color;?>' required>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Color del portón: </label>
                          <input type="text" class="form-control" id="porton" name="porton" value='<?php echo $mov->porton;?>' required>
                        </div>
                      </div>
                      <div class="col-md-9">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Referencia: </label>
                          <input type="text" class="form-control" id="referencias" name="referencias" value='<?php echo $mov->referencias;?>' required>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Renta mensual: </label>
                          <input type="text" class="form-control" id="renta" name="renta" value='<?php echo $mov->renta;?>' required>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Observaciones: </label>
                          <textarea name="observaciones" id="observaciones" cols="30" rows="3" class="form-control"><?php echo $mov->observaciones;?></textarea>
                        </div>
                      </div>
                
          <div class="col-md-12"> <button type="submit" class="btn btn-block btn-warning" > Editar</button> </div>

  <?php endforeach; ?>

<?php else: ?>

        <input type="hidden" name="idEntorno" id="idEntorno" >

          <div class="col-md-2">
            <div class="form-group">
              <label for="exampleInputPassword1">Tipo de zona:</label>
              <select name="tipoZona" id="tipoZona" class="form-control">
                <option value="Urbana"  >Urbana</option>
                <option value="Suburbana" >Suburbana</option>
                <option value="Rural" >Rural</option>
                <option value="Asentamiento" >Asentamiento</option>
              </select>
            </div>
          </div>

          <div class="col-md-2">
            <div class="form-group">
              <label for="exampleInputPassword1">Tipo de vivienda</label>
              <select name="tipoVivienda" id="tipoVivienda" class="form-control">
                <option value="Propia" >Propia</option>
                <option value="Rentada" >Rentada</option>
                <option value="Familiar" >Familiar</option>
                <option value="Invitada" >Invitada</option>
                <option value="Prestada" >Prestada</option>
              </select>
            </div>
          </div>

          <div class="col-md-2">
            <div class="form-group">
              <label for="exampleInputPassword1">Edificación de Inmueble</label>
              <select name="edificacion" id="edificacion" class="form-control">
                <option value="Casa sola" >Casa sola</option>
                <option value="Departamento" >Departamento</option>
                <option value="Vecindad">Vecindad</option>
                <option value="Campamento" >Campamento</option>
                <option value="Cuarto solo" >Cuarto solo</option>
              </select>
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-group">
              <label for="exampleInputPassword1">Titular del inmueble</label>
              <input type="text" class="form-control" id="titular" name="titular"  required>
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-group">
              <label for="exampleInputPassword1">Parentesco</label>
              <input type="text" class="form-control" id="parentesco" name="parentesco"  required>
            </div>
          </div>
          <br>
          <div class="col-md-4">
            <div class="form-group">
              <label for="exampleInputPassword1">Numero de recamaras</label>
              <input type="text" class="form-control" id="numRecamaras" name="numRecamaras"  required>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="exampleInputPassword1">Numero de baños</label>
              <input type="text" class="form-control" id="nomBano" name="nomBano"  required>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="exampleInputPassword1">Tipo de baño</label>
              <select name="tipobano" id="tipobano" class='form-control'>
                <option value="Privado" >Privado</option>
                <option value="Compartido" >Compartido</option>
                <option value="Baño con regadera" >Baño con regadera</option>
              </select>
            </div>
          </div>

          <div class="col-md-12 text-center">
            <div class="form-group">
              <div class="checkbox">
                <label><br><input type="checkbox" name='sala' id='sala' value='1' >Sala</label>
                <label><br><input type="checkbox" name='comedor' id='comedor' value='1' >Comedor</label>
                <label><br><input type="checkbox" name='cocina' id='cocina' value='1' >Cocina</label>
                <label><br><input type="checkbox" name='garaje' id='garaje' value='1' >Garaje</label>
                <label><br><input type="checkbox" name='jardin' id='jardin' value='1' >Jardin</label>
                <label><br><input type="checkbox" name='estudio' id='estudio' value='1' >Estudio</label>
                <label><br><input type="checkbox" name='zotehuela' id='zotehuela' value='1' >Zotehuela</label>
                <label><br><input type="checkbox" name='patio' id='patio' value='1' >Patio</label>
              </div>
            </div>
          </div>

          <div class="col-md-12 text-center">
            <div class="form-group">
              <div class="checkbox">
                <label><br><input type="checkbox" name='agua' value='1' >Agua</label>
                <label><br><input type="checkbox" name='luz' value='1' >Luz</label>
                <label><br><input type="checkbox" name='drenaje' value='1' >Drenaje</label>
                <label><br><input type="checkbox" name='pavimentacion' value='1' >Pavimentación</label>
                <label><br><input type="checkbox" name='telefono' value='1' >Teléfono</label>
                <label><br><input type="checkbox" name='transporte' value='1' >Transporte</label>
                <label><br><input type="checkbox" name='areas' value='1' >Area de recreacion</label>
                <label><br><input type="checkbox" name='vigilancia' value='1' >Vigilancia</label>
                <label><br><input type="checkbox" name='internet' value='1' >internet</label>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label for="exampleInputPassword1">Tipo de paredes</label>
              <select name="paredes" id="paredes" class='form-control'>
                <option value="tabique" >tabique</option>
                <option value="madera" >madera</option>
                <option value="carton" >carton</option>
                <option value="otros materiales" >otros materiales</option>
              </select>
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label for="exampleInputPassword1">Tipo de techos</label>
              <select name="techos" id="techos" class='form-control'>
                <option value="concreto" >concreto</option>
                <option value="lamina de asbesto" >lamina de asbesto</option>
                <option value="lamina de carton" >lamina de carton</option>
                <option value="lamina metalica" >lamina metalica</option>
              </select>
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label for="exampleInputPassword1">Tipo de pisos</label>
              <select name="pisos" id="pisos" class='form-control'>
                <option value="mosaicos" >mosaicos</option>
                <option value="loseta"> loseta</option>
                <option value="cemento" >cemento</option>
                <option value="tierra apisonada" >tierra apisonada</option>
                <option value="madera" >madera</option>

              </select>
            </div>
          </div>

          <div class="col-md-12 text-center">
            <div class="form-group">
              <div class="checkbox">
                <label><br><input type="checkbox" name='telNormal' value='1' >Televisión normal</label>
                <label><br><input type="checkbox" name='telPlasma' value='1' >Televisión de plasma</label>
                <label><br><input type="checkbox" name='estereo' value='1'>Estéreo</label>
                <label><br><input type="checkbox" name='dvd' value='1' >DVD</label>
                <label><br><input type="checkbox" name='blueray' value='1'>Blue Ray</label>
                <label><br><input type="checkbox" name='estufa' value='1' >Estufa</label>
                <label><br><input type="checkbox" name='horno' value='1' >Horno de microondas</label>
                <label><br><input type="checkbox" name='lavadora' value='1' >Lavadora</label>
                <label><br><input type="checkbox" name='centrolavado' value='1' >Centro de lavado</label>
                <label><br><input type="checkbox" name='refrigerador' value='1' >Refrigerador</label>
                <label><br><input type="checkbox" name='computadora' value='1' >Computadora</label>

              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-group">
              <label for="exampleInputPassword1">Extensión del Inmueble</label>
              <input type="text" class="form-control" id="extensionInmueble" name="extensionInmueble"  required>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="exampleInputPassword1">Condiciones Generales del Inmueble</label>
              <input type="text" class="form-control" id="condicionesInmueble" name="condicionesInmueble"  required>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="exampleInputPassword1">Condiciones del Mobiliario	</label>
              <input type="text" class="form-control" id="condicionesMobiliario" name="condicionesMobiliario"  required>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="exampleInputPassword1">Orden</label>
              <input type="text" class="form-control" id="orden" name="orden"  required>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="exampleInputPassword1">Limpieza</label>
              <input type="text" class="form-control" id="limpieza" name="limpieza"  required>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="exampleInputPassword1">Delincuencia</label>
              <input type="text" class="form-control" id="delincuencia" name="delincuencia"  required>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="exampleInputPassword1">Vandalismo</label>
              <input type="text" class="form-control" id="vandalismo" name="vandalismo"  required>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="exampleInputPassword1">Drogadicción</label>
              <input type="text" class="form-control" id="drogadiccion" name="drogadiccion"  required>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="exampleInputPassword1">Alcoholismo</label>
              <input type="text" class="form-control" id="alcoholismo" name="alcoholismo"  required>
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-group"><br>
              <label for="exampleInputPassword1">Rutas de acceso</label>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="exampleInputPassword1">Principales Vías de acceso: </label>
              <input type="text" class="form-control" id="viasdeacceso" name="viasdeacceso"  required>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="exampleInputPassword1">Medio de transporte: </label>
              <input type="text" class="form-control" id="medioTransporte" name="medioTransporte"  required>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="exampleInputPassword1">Tiempo aproximado a su Servicio: </label>
              <input type="text" class="form-control" id="tiempoServicio" name="tiempoServicio" required>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="exampleInputPassword1">Entre que calles: </label>
              <input type="text" class="form-control" id="entreCalles" name="entreCalles" required>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="exampleInputPassword1">Color de la vivienda: </label>
              <input type="text" class="form-control" id="color" name="color"  required>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="exampleInputPassword1">Color del portón: </label>
              <input type="text" class="form-control" id="porton" name="porton"  required>
            </div>
          </div>
          <div class="col-md-9">
            <div class="form-group">
              <label for="exampleInputPassword1">Referencia: </label>
              <input type="text" class="form-control" id="referencias" name="referencias"  required>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="exampleInputPassword1">Renta mensual: </label>
              <input type="text" class="form-control" id="renta" name="renta" required>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="exampleInputPassword1">Observaciones: </label>
              <textarea name="observaciones" id="observaciones" cols="30" rows="3" class="form-control"></textarea>
            </div>
          </div>


      
      <div class="col-md-12"><button type="submit" class="btn btn-block btn-primary" > Guardar cambios</button></div>

<?php endif; ?>
   