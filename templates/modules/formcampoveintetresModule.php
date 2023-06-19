<?php if ($d->movements): ?>
    <?php foreach ($d->movements as $mov): ?>
      
                      
          <input type='hidden' name='idInfolaboral' id='idInfolaboral' value='<?php echo $mov->idInfolaboral;?>'>
            
            <div class="col-md-12"><label for="exampleInputPassword1">Demandas Laborales</label></div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Existe</label>
                <select name="campol" id="campol" class="form-control">
                  <option <?php if($mov->campol == 1){echo "selected";}?> value="1">Si</option>
                  <option <?php if($mov->campol == 2){echo "selected";}?> value="2">No</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Fecha</label>
                <input type="text" class="form-control" id="fechal" name="fechal" value='<?php echo $mov->fechal;?>' required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Acuerdo</label>
                <input type="text" class="form-control" id="acuerdol" name="acuerdol" value='<?php echo $mov->acuerdol;?>' required>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label for="exampleInputPassword1">Comentarios</label>
                <input type="text" class="form-control" id="comentariol" name="comentariol" value='<?php echo $mov->comentariol;?>' required>
              </div>
            </div>

            <div class="col-md-12"><label for="exampleInputPassword1">Demandas Civiles</label></div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Existe</label>
                <select name="campoc" id="campoc" class="form-control">
                  <option <?php if($mov->campoc == 1){echo "selected";}?> value="1">Si</option>
                  <option <?php if($mov->campoc == 2){echo "selected";}?> value="2">No</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Fecha</label>
                <input type="text" class="form-control" id="fechac" name="fechac" value='<?php echo $mov->fechac;?>' required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Acuerdo</label>
                <input type="text" class="form-control" id="acuerdoc" name="acuerdoc" value='<?php echo $mov->acuerdoc;?>' required>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label for="exampleInputPassword1">Comentarios</label>
                <input type="text" class="form-control" id="comentarioc" name="comentarioc" value='<?php echo $mov->comentarioc;?>' required>
              </div>
            </div>

            <div class="col-md-12"><label for="exampleInputPassword1">Demandas Familiares</label></div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Existe</label>
                <select name="campof" id="campof" class="form-control">
                  <option <?php if($mov->campof == 1){echo "selected";}?> value="1">Si</option>
                  <option <?php if($mov->campof == 2){echo "selected";}?> value="2">No</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Fecha</label>
                <input type="text" class="form-control" id="fechaf" name="fechaf" value='<?php echo $mov->fechaf;?>' required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Acuerdo</label>
                <input type="text" class="form-control" id="acuerdof" name="acuerdof" value='<?php echo $mov->acuerdof;?>' required>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label for="exampleInputPassword1">Comentarios</label>
                <input type="text" class="form-control" id="comentariof" name="comentariof" value='<?php echo $mov->comentariof;?>' required>
              </div>
            </div>

            <div class="col-md-12"><label for="exampleInputPassword1">Demandas penales</label></div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Existe</label>
                <select name="campop" id="campop" class="form-control">
                  <option <?php if($mov->campop == 1){echo "selected";}?> value="1">Si</option>
                  <option <?php if($mov->campop == 2){echo "selected";}?> value="2">No</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Fecha</label>
                <input type="text" class="form-control" id="fechap" name="fechap" value='<?php echo $mov->fechap;?>' required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Acuerdo</label>
                <input type="text" class="form-control" id="acuerdop" name="acuerdop" value='<?php echo $mov->acuerdop;?>' required>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label for="exampleInputPassword1">Comentarios</label>
                <input type="text" class="form-control" id="comentariop" name="comentariop" value='<?php echo $mov->comentariop;?>' required>
              </div>
            </div>

            <div class="col-md-12"><label for="exampleInputPassword1">Demandas Administrativa</label></div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Existe</label>
                <select name="campoa" id="campoa" class="form-control">
                  <option <?php if($mov->campoa == 1){echo "selected";}?> value="1">Si</option>
                  <option <?php if($mov->campoa == 2){echo "selected";}?> value="2">No</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Fecha</label>
                <input type="text" class="form-control" id="fechaa" name="fechaa" value='<?php echo $mov->fechaa;?>' required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Acuerdo</label>
                <input type="text" class="form-control" id="acuerdoa" name="acuerdoa" value='<?php echo $mov->acuerdoa;?>' required>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label for="exampleInputPassword1">Comentarios</label>
                <input type="text" class="form-control" id="comentarioa" name="comentarioa" value='<?php echo $mov->comentarioa;?>' required>
              </div>
            </div>

            <div class="col-md-12"><label for="exampleInputPassword1">Demandas Internacional</label></div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Existe</label>
                <select name="campoi" id="campoi" class="form-control">
                  <option <?php if($mov->campoi == 1){echo "selected";}?> value="1">Si</option>
                  <option <?php if($mov->campoi == 2){echo "selected";}?> value="2">No</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Fecha</label>
                <input type="text" class="form-control" id="fechai" name="fechai" value='<?php echo $mov->fechai;?>' required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Acuerdo</label>
                <input type="text" class="form-control" id="acuerdoi" name="acuerdoi" value='<?php echo $mov->acuerdoi;?>' required>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label for="exampleInputPassword1">Comentarios</label>
                <input type="text" class="form-control" id="comentarioi" name="comentarioi" value='<?php echo $mov->comentarioi;?>' required>
              </div>
            </div>

            <div class="col-md-12"><label for="exampleInputPassword1">Demandas SAT</label></div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Existe</label>
                <select name="camposat" id="camposat" class="form-control">
                  <option <?php if($mov->camposat == 1){echo "selected";}?> value="1">Si</option>
                  <option <?php if($mov->camposat == 2){echo "selected";}?> value="2">No</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Fecha</label>
                <input type="text" class="form-control" id="fechasat" name="fechasat" value='<?php echo $mov->fechasat;?>' required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Acuerdo</label>
                <input type="text" class="form-control" id="acuerdosat" name="acuerdosat" value='<?php echo $mov->acuerdosat;?>' required>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label for="exampleInputPassword1">Comentarios</label>
                <input type="text" class="form-control" id="comentariosat" name="comentariosat" value='<?php echo $mov->comentariosat;?>' required>
              </div>
            </div>

            <div class="col-md-12"> <button type="submit" class="btn btn-block btn-warning" > Editar</button> </div>

  <?php endforeach; ?>

<?php else: ?>
                     
  <input type='hidden' name='idInfolaboral' id='idInfolaboral' >
            
            <div class="col-md-12"><label for="exampleInputPassword1">Demandas Laborales</label></div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Existe</label>
                <select name="campol" id="campol" class="form-control">
                  <option  value="1">Si</option>
                  <option  value="2">No</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Fecha</label>
                <input type="text" class="form-control" id="fechal" name="fechal" >
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Acuerdo</label>
                <input type="text" class="form-control" id="acuerdol" name="acuerdol" >
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label for="exampleInputPassword1">Comentarios</label>
                <input type="text" class="form-control" id="comentariol" name="comentariol" >
              </div>
            </div>

            <div class="col-md-12"><label for="exampleInputPassword1">Demandas Civiles</label></div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Existe</label>
                <select name="campoc" id="campoc" class="form-control">
                  <option  value="1">Si</option>
                  <option  value="2">No</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Fecha</label>
                <input type="text" class="form-control" id="fechac" name="fechac" >
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Acuerdo</label>
                <input type="text" class="form-control" id="acuerdoc" name="acuerdoc" >
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label for="exampleInputPassword1">Comentarios</label>
                <input type="text" class="form-control" id="comentarioc" name="comentarioc" >
              </div>
            </div>

            <div class="col-md-12"><label for="exampleInputPassword1">Demandas Familiares</label></div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Existe</label>
                <select name="campof" id="campof" class="form-control">
                  <option  value="1">Si</option>
                  <option  value="2">No</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Fecha</label>
                <input type="text" class="form-control" id="fechaf" name="fechaf" >
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Acuerdo</label>
                <input type="text" class="form-control" id="acuerdof" name="acuerdof" >
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label for="exampleInputPassword1">Comentarios</label>
                <input type="text" class="form-control" id="comentariof" name="comentariof" >
              </div>
            </div>

            <div class="col-md-12"><label for="exampleInputPassword1">Demandas penales</label></div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Existe</label>
                <select name="campop" id="campop" class="form-control">
                  <option value="1">Si</option>
                  <option value="2">No</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Fecha</label>
                <input type="text" class="form-control" id="fechap" name="fechap" >
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Acuerdo</label>
                <input type="text" class="form-control" id="acuerdop" name="acuerdop" >
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label for="exampleInputPassword1">Comentarios</label>
                <input type="text" class="form-control" id="comentariop" name="comentariop" >
              </div>
            </div>

            <div class="col-md-12"><label for="exampleInputPassword1">Demandas Administrativa</label></div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Existe</label>
                <select name="campoa" id="campoa" class="form-control">
                  <option value="1">Si</option>
                  <option value="2">No</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Fecha</label>
                <input type="text" class="form-control" id="fechaa" name="fechaa" >
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Acuerdo</label>
                <input type="text" class="form-control" id="acuerdoa" name="acuerdoa" >
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label for="exampleInputPassword1">Comentarios</label>
                <input type="text" class="form-control" id="comentarioa" name="comentarioa" >
              </div>
            </div>

            <div class="col-md-12"><label for="exampleInputPassword1">Demandas Internacional</label></div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Existe</label>
                <select name="campoi" id="campoi" class="form-control">
                  <option value="1">Si</option>
                  <option value="2">No</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Fecha</label>
                <input type="text" class="form-control" id="fechai" name="fechai" >
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Acuerdo</label>
                <input type="text" class="form-control" id="acuerdoi" name="acuerdoi" >
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label for="exampleInputPassword1">Comentarios</label>
                <input type="text" class="form-control" id="comentarioi" name="comentarioi" >
              </div>
            </div>

            <div class="col-md-12"><label for="exampleInputPassword1">Demandas SAT</label></div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Existe</label>
                <select name="camposat" id="camposat" class="form-control">
                  <option value="1">Si</option>
                  <option value="2">No</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Fecha</label>
                <input type="text" class="form-control" id="fechasat" name="fechasat" >
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Acuerdo</label>
                <input type="text" class="form-control" id="acuerdosat" name="acuerdosat" >
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label for="exampleInputPassword1">Comentarios</label>
                <input type="text" class="form-control" id="comentariosat" name="comentariosat" >
              </div>
            </div>
      <div class="col-md-12"><button type="submit" class="btn btn-block btn-primary" > Guardar cambios</button></div>

<?php endif; ?>
   