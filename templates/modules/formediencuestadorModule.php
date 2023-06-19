<?php if ($d->movements): ?>
    <?php foreach ($d->movements as $mov): ?>
      <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="exampleInputPassword1">Nombre</label>
              <input type="text" class="form-control" id="encuestador" name="encuestador" value='<?php echo $mov->encuestador;?>'>
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label for="exampleInputPassword1">Fecha de registro</label>
              <input type="date" class="form-control" id="fechaRegistro" name="fechaRegistro" value='<?php echo $mov->fechaRegistro;?>'>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="exampleInputPassword1">Estado</label>
              <select name="estado" id="estado" class="form-control">
                    <option <?php if($mov->estado == "Aguascalientes"){echo "selected";;}?> value="Aguascalientes">Aguascalientes</option>
                    <option <?php if($mov->estado == "Baja California"){echo "selected";}?> value="Baja California">Baja California</option>
                    <option <?php if($mov->estado == "Baja California Sur"){echo "selected";}?> value="Baja California Sur">Baja California Sur</option>
                    <option <?php if($mov->estado == "Campeche"){echo "selected";}?> value="Campeche">Campeche</option>
                    <option <?php if($mov->estado == "Chiapas"){echo "selected";}?> value="Chiapas">Chiapas</option>
                    <option <?php if($mov->estado == "Chihuahua"){echo "selected";}?> value="Chihuahua">Chihuahua</option>
                    <option <?php if($mov->estado == "Ciudad de México"){echo "selected";}?> value="Ciudad de México">Ciudad de México</option>
                    <option <?php if($mov->estado == "Coahuila"){echo "selected";}?> value="Coahuila">Coahuila</option>
                    <option <?php if($mov->estado == "Colima"){echo "selected";}?> value="Colima">Colima</option>
                    <option <?php if($mov->estado == "Durango"){echo "selected";}?> value="Durango">Durango</option>
                    <option <?php if($mov->estado == "Guanajuato"){echo "selected";}?> value="Guanajuato">Guanajuato</option>
                    <option <?php if($mov->estado == "Guerrero"){echo "selected";}?> value="Guerrero">Guerrero</option>
                    <option <?php if($mov->estado == "Hidalgo"){echo "selected";}?> value="Hidalgo">Hidalgo</option>
                    <option <?php if($mov->estado == "Jalisco"){echo "selected";}?> value="Jalisco">Jalisco</option>
                    <option <?php if($mov->estado == "México"){echo "selected";}?> value="México">México</option>
                    <option <?php if($mov->estado == "Michoacán"){echo "selected";}?> value="Michoacán">Michoacán</option>
                    <option <?php if($mov->estado == "Morelos"){echo "selected";}?> value="Morelos">Morelos</option>
                    <option <?php if($mov->estado == "Nayarit"){echo "selected";}?> value="Nayarit">Nayarit</option>
                    <option <?php if($mov->estado == "Nuevo León"){echo "selected";}?> value="Nuevo León">Nuevo León</option>
                    <option <?php if($mov->estado == "Oaxaca"){echo "selected";}?> value="Oaxaca">Oaxaca</option>
                    <option <?php if($mov->estado == "Puebla"){echo "selected";}?> value="Puebla">Puebla</option>
                    <option <?php if($mov->estado == "Querétaro"){echo "selected";}?> value="Querétaro">Querétaro</option>
                    <option <?php if($mov->estado == "Quintana Roo"){echo "selected";}?> value="Quintana Roo">Quintana Roo</option>
                    <option <?php if($mov->estado == "San Luis Potosí"){echo "selected";}?> value="San Luis Potosí">San Luis Potosí</option>
                    <option <?php if($mov->estado == "Sinaloa"){echo "selected";}?> value="Sinaloa">Sinaloa</option>
                    <option <?php if($mov->estado == "Sonora"){echo "selected";}?> value="Sonora">Sonora</option>
                    <option <?php if($mov->estado == "Tabasco"){echo "selected";}?> value="Tabasco">Tabasco</option>
                    <option <?php if($mov->estado == "Tamaulipas"){echo "selected";}?> value="Tamaulipas">Tamaulipas</option>
                    <option <?php if($mov->estado == "Tlaxcala"){echo "selected";}?> value="Tlaxcala">Tlaxcala</option>
                    <option <?php if($mov->estado == "Veracruz"){echo "selected";}?> value="Veracruz">Veracruz</option>
                    <option <?php if($mov->estado == "Yucatán"){echo "selected";}?> value="Yucatán">Yucatán</option>
                    <option <?php if($mov->estado == "Zacatecas"){echo "selected";}?> value="Zacatecas">Zacatecas</option>
              </select>
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label for="exampleInputPassword1">Ciudad</label>
              <input type="text" class="form-control" id="ciudad" name="ciudad" value='<?php echo $mov->ciudad;?>'>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label for="exampleInputPassword1">Correo</label>
              <input type="mail" class="form-control" id="correo" name="correo" required value='<?php echo $mov->correo;?>'>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label for="exampleInputPassword1">Telefono</label>
              <input type="number" class="form-control" id="telefono" name="telefono" value='<?php echo $mov->telefono;?>'>
            </div>
          </div>
        
        </div>
        <h4>Datos bancarios</h4>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="exampleInputPassword1">Numero de cuenta</label>
              <input type="number" class="form-control" id="cuenta" name="cuenta" value='<?php echo $mov->cuenta;?>'>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label for="exampleInputPassword1">Banco</label>
              <select name="banco" id="banco" class="form-control">
                <option <?php if($mov->estado == "ABC Capital"){echo "selected";}?>>ABC Capital</option>
                <option <?php if($mov->estado == "Accendo Banco"){echo "selected";}?>>Accendo Banco</option>
                <option <?php if($mov->estado == "American Express Bank (México)"){echo "selected";}?>>American Express Bank (México)</option>
                <option <?php if($mov->estado == "Banca Afirme"){echo "selected";}?>>Banca Afirme</option>
                <option <?php if($mov->estado == "Banca Mifel"){echo "selected";}?>>Banca Mifel</option>
                <option <?php if($mov->estado == "Banco Actinver"){echo "selected";}?>>Banco Actinver</option>
                <option <?php if($mov->estado == "Banco Ahorro Famsa"){echo "selected";}?>>Banco Ahorro Famsa</option>
                <option <?php if($mov->estado == "Banco Autofin México"){echo "selected";}?>>Banco Autofin México</option>
                <option <?php if($mov->estado == "Banco Azteca"){echo "selected";}?>>Banco Azteca</option>
                <option <?php if($mov->estado == "Banco Bancrea"){echo "selected";}?>>Banco Bancrea</option>
                <option <?php if($mov->estado == "Banco Base"){echo "selected";}?>>Banco Base</option>
                <option <?php if($mov->estado == "Banco Compartamos"){echo "selected";}?>>Banco Compartamos</option>
                <option <?php if($mov->estado == "Banco Credit Suisse (México)"){echo "selected";}?>>Banco Credit Suisse (México)</option>
                <option <?php if($mov->estado == "Banco de Inversión Afirme"){echo "selected";}?>>Banco de Inversión Afirme</option>
                <option <?php if($mov->estado == "Banco del Bajío"){echo "selected";}?>>Banco del Bajío</option>
                <option <?php if($mov->estado == "Banco Finterra"){echo "selected";}?>>Banco Finterra</option>
                <option <?php if($mov->estado == "Banco Forjadores"){echo "selected";}?>>Banco Forjadores</option>
                <option <?php if($mov->estado == "Banco Inbursa"){echo "selected";}?>>Banco Inbursa</option>
                <option <?php if($mov->estado == "Banco Inmobiliario Mexicano"){echo "selected";}?>>Banco Inmobiliario Mexicano</option>
                <option <?php if($mov->estado == "Banco Invex"){echo "selected";}?>>Banco Invex</option>
                <option <?php if($mov->estado == "Banco JP Morgan"){echo "selected";}?>>Banco JP Morgan</option>
                <option <?php if($mov->estado == "Banco KEB Hana México"){echo "selected";}?>>Banco KEB Hana México</option>
                <option <?php if($mov->estado == "Banco Monex"){echo "selected";}?>>Banco Monex</option>
                <option <?php if($mov->estado == "Banco Multiva"){echo "selected";}?>>Banco Multiva</option>
                <option <?php if($mov->estado == "Banco Nacional de México"){echo "selected";}?>>Banco Nacional de México</option>
                <option <?php if($mov->estado == "Banco PagaTodo"){echo "selected";}?>>Banco PagaTodo</option>
                <option <?php if($mov->estado == "Banco Regional de Monterrey"){echo "selected";}?>>Banco Regional de Monterrey</option>
                <option <?php if($mov->estado == "Banco S3 México"){echo "selected";}?>>Banco S3 México</option>
                <option <?php if($mov->estado == "Banco Sabadell"){echo "selected";}?>>Banco Sabadell</option>
                <option <?php if($mov->estado == "Banco Santander"){echo "selected";}?>>Banco Santander</option>
                <option <?php if($mov->estado == "Banco Shinhan de México"){echo "selected";}?>>Banco Shinhan de México</option>
                <option <?php if($mov->estado == "Banco Ve por Más"){echo "selected";}?>>Banco Ve por Más</option>
                <option <?php if($mov->estado == "BanCoppel"){echo "selected";}?>>BanCoppel</option>
                <option <?php if($mov->estado == "Bank of America Mexico"){echo "selected";}?>>Bank of America Mexico</option>
                <option <?php if($mov->estado == "Bank of China Mexico"){echo "selected";}?>>Bank of China Mexico</option>
                <option <?php if($mov->estado == "Bankaool"){echo "selected";}?>>Bankaool</option>
                <option <?php if($mov->estado == "Banorte"){echo "selected";}?>>Banorte</option>
                <option <?php if($mov->estado == "Bansí"){echo "selected";}?>>Bansí</option>
                <option <?php if($mov->estado == "Barclays Bank México"){echo "selected";}?>>Barclays Bank México</option>
                <option <?php if($mov->estado == "BBVA"){echo "selected";}?>>BBVA</option>
                <option <?php if($mov->estado == "CIBanco"){echo "selected";}?>>CIBanco</option>
                <option <?php if($mov->estado == "Consubanco"){echo "selected";}?>>Consubanco</option>
                <option <?php if($mov->estado == "Deutsche Bank México"){echo "selected";}?>>Deutsche Bank México</option>
                <option <?php if($mov->estado == "Fundación Dondé Banco"){echo "selected";}?>>Fundación Dondé Banco</option>
                <option <?php if($mov->estado == "HSBC México"){echo "selected";}?>>HSBC México</option>
                <option <?php if($mov->estado == "Industrial and Commercial Bank of China"){echo "selected";}?>>Industrial and Commercial Bank of China</option>
                <option <?php if($mov->estado == "Intercam Banco"){echo "selected";}?>>Intercam Banco</option>
                <option <?php if($mov->estado == "Mizuho Bank"){echo "selected";}?>>Mizuho Bank</option>
                <option <?php if($mov->estado == "MUFG Bank Mexico"){echo "selected";}?>>MUFG Bank Mexico</option>
                <option <?php if($mov->estado == "Scotiabank"){echo "selected";}?>>Scotiabank</option>
              </select>
              
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label for="exampleInputPassword1">Monto por estudio</label>
              <input type="number" class="form-control" id="pago" name="pago" value='<?php echo $mov->pago;?>'>
            </div>
          </div>

        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="exampleInputPassword1">Observaciones</label>
              <textarea name="comentarios" id="comentarios" cols="30" rows="3" class="form-control"> <?php echo $mov->comentarios;?></textarea>
            </div>
          </div>
        </div>  
    
    <?php endforeach; ?>
<?php else: ?>
    <tr><td colspan="9">No se encuentran registros</td></tr>
<?php endif; ?>
   