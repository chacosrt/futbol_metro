<?php if ($d->movements): ?>
    <?php foreach ($d->movements as $mov): ?>
        <div class="row">

            <div class="col-md-4">
            <div class="form-group">
                <label for="exampleInputPassword1">Parentesco</label>
                <select name='familiar' id='familiar' class='form-control'>
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
                <label for="exampleInputPassword1">Ocupación</label>
                <input type="text" class="form-control" id="ocupacion" name="ocupacion" value="<?php echo $mov->ocupacion ?>">
            </div>
            </div>

            <div class="col-md-4">
            <div class="form-group">
                <label for="exampleInputPassword1">Edad</label>
                <input type="number" class="form-control" id="edad" name="edad" value="<?php echo $mov->edad ?>">
            </div>
            </div>



            <div class="col-md-3">
            <div class="form-group">
                <label for="exampleInputPassword1">Donde labora o estudia</label>
                <input type="text" class="form-control" id="laboraEstudia" name="laboraEstudia" value="<?php echo $mov->laboraEstudia ?>">
            </div>
            </div>

            <div class="col-md-3">
            <div class="form-group">
                <label for="exampleInputPassword1">Calle</label>
                <input type="text" class="form-control" id="calle" name="calle" value="<?php echo $mov->calle ?>">
            </div>
            </div>

            <div class="col-md-3">
            <div class="form-group">
                <label for="exampleInputPassword1">Numero</label>
                <input type="number" class="form-control" id="numero" name="numero" value="<?php echo $mov->numero ?>">
            </div>
            </div>

            <div class="col-md-3">
            <div class="form-group">
                <label for="exampleInputPassword1">Colonia</label>
                <input type="text" class="form-control" id="colonia" name="colonia" value="<?php echo $mov->colonia ?>">
            </div>
            </div>

            <div class="col-md-3">
            <div class="form-group">
                <label for="exampleInputPassword1">Delegacion / municipio</label>
                <input type="text" class="form-control" id="delegacionMunicipio" name="delegacionMunicipio" value="<?php echo $mov->delegacionMunicipio ?>">
            </div>
            </div>

            <div class="col-md-3">
            <div class="form-group">
                <label for="exampleInputPassword1">Ciudad</label>
                <input type="text" class="form-control" id="ciudad" name="ciudad" value="<?php echo $mov->ciudad ?>">
            </div>
            </div>

            <div class="col-md-3">
            <div class="form-group">
                <label for="exampleInputPassword1">Estado</label>
                <select name="estado" id="estado" class="form-control">
                <option >Aguascalientes</option>
                <option >Baja California</option>
                <option >Baja California</option>
                <option >Campeche</option>
                <option >Chiapas</option>
                <option >Chihuahua</option>
                <option >Ciudad de México</option>
                <option >Coahuila</option>
                <option >Colima</option>
                <option >Durango</option>
                <option >Guanajuato</option>
                <option >Guerrero</option>
                <option >Hidalgo</option>
                <option >Jalisco</option>
                <option >México</option>
                <option >Michoacán</option>
                <option >Morelos</option>
                <option >Nayarit</option>
                <option >Nuevo León</option>
                <option >Oaxaca</option>
                <option >Puebla</option>
                <option >Querétaro</option>
                <option >Quintana Roo</option>
                <option >San Luis Potosí</option>
                <option >Sinaloa</option>
                <option >Sonora</option>
                <option >Tabasco</option>
                <option >Tamaulipas</option>
                <option >Tlaxcala</option>
                <option >Veracruz</option>
                <option >Yucatán</option>
                <option >Zacatecas</option>
                </select>
            </div>
            </div>

            <div class="col-md-3">
            <div class="form-group">
                <label for="exampleInputPassword1">CP</label>
                <input type="number" class="form-control" id="cpde" name="cpde" value="<?php echo $mov->cpde ?>">
            </div>
            </div>

            <div class="col-md-3">
            <div class="form-group">
                <label for="exampleInputPassword1">Tiempo de resindir</label>
                <input type="number" class="form-control" id="tiempoReside" name="tiempoReside" value="<?php echo $mov->tiempoReside ?>">
            </div>
            </div>

            <div class="col-md-3">
            <div class="form-group">
                <label for="exampleInputPassword1">Teléfono</label>
                <input type="number" class="form-control" id="tel1" name="tel1" value="<?php echo $mov->tel1 ?>">
            </div>
            </div>


</div><?php endforeach; ?>
<?php else: ?>
    <tr><td colspan="9">No se encuentran registros</td></tr>
<?php endif; ?>
   