<?php if ($d->movements): ?>
    <?php foreach ($d->movements as $mov): ?>
      
                      
      <input type="hidden" name="idResumen" id="idResumen" value="<?php echo $mov->idResumen;?>">

                      
                      <div class="col-md-2">
                        <div class="form-group">
                          <br>
                          <label for="exampleInputPassword1">Áreas verificadas</label>
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Social:</label>
                          <select name="social" id="social" class="form-control">
                            <option value="Deficiente" <?php if($mov->social == 'Deficiente'){ echo "selected";}?> >Deficiente</option>
                            <option value="Regular" <?php if($mov->social == 'Regular'){ echo "selected";}?>>Regular</option>
                            <option value="Bueno" <?php if($mov->social == 'Bueno'){ echo "selected";}?>>Bueno</option>
                            <option value="Excelente" <?php if($mov->social == 'Excelente'){ echo "selected";}?>>Excelente</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Escolar:</label>
                          <select name="escolar" id="escolar" class="form-control">
                            <option value="Deficiente"<?php if($mov->escolar == 'Deficiente'){ echo "selected";}?>>Deficiente</option>
                            <option value="Regular" <?php if($mov->escolar == 'Regular'){ echo "selected";}?>>Regular</option>
                            <option value="Bueno" <?php if($mov->escolar == 'Bueno'){ echo "selected";}?>>Bueno</option>
                            <option value="Excelente" <?php if($mov->escolar == 'Excelente'){ echo "selected";}?>>Excelente</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Económica:</label>
                          <select name="economica" id="economica" class="form-control">
                            <option value="Deficiente" <?php if($mov->economica == 'Deficiente'){ echo "selected";}?>>Deficiente</option>
                            <option value="Regular" <?php if($mov->economica == 'Regular'){ echo "selected";}?>>Regular</option>
                            <option value="Bueno" <?php if($mov->economica == 'Bueno'){ echo "selected";}?>>Bueno</option>
                            <option value="Excelente" <?php if($mov->economica == 'Excelente'){ echo "selected";}?>>Excelente</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Laboral:</label>
                          <select name="laboral" id="laboral" class="form-control">
                            <option value="Deficiente" <?php if($mov->laboral == 'Deficiente'){ echo "selected";}?>>Deficiente</option>
                            <option value="Regular" <?php if($mov->laboral == 'Regular'){ echo "selected";}?>>Regular</option>
                            <option value="Bueno" <?php if($mov->laboral == 'Bueno'){ echo "selected";}?>>Bueno</option>
                            <option value="Excelente" <?php if($mov->laboral == 'Excelente'){ echo "selected";}?>>Excelente</option>
                          </select>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Actitud del candidato durante la entrevista:</label>
                          <select name="actitud" id="actitud" class="form-control">
                            <option value="Amable" <?php if($mov->actitud == 'Amable'){ echo "selected";}?>>Amable</option>
                            <option value="Preciso" <?php if($mov->actitud == 'Preciso'){ echo "selected";}?>>Preciso</option>
                            <option value="A disgusto" <?php if($mov->actitud == 'A disgusto'){ echo "selected";}?>>A disgusto</option>
                            <option value="Apático" <?php if($mov->actitud == 'Apático'){ echo "selected";}?>>Apático</option>
                          </select>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Recomendación para el puesto:</label>
                          <select name="recomendacion" id="recomendacion" class="form-control">
                            <option value="Si" <?php if($mov->recomendacion == 'Si'){ echo "selected";}?>>Si</option>
                            <option value="Bajo Reserva" <?php if($mov->recomendacion == 'Bajo Reserva'){ echo "selected";}?>>Bajo Reserva</option>
                            <option value="No" <?php if($mov->recomendacion == 'No'){ echo "selected";}?>>No</option>
                            <option value="No" <?php if($mov->recomendacion == 'avance'){ echo "selected";}?>>Avance</option>
                          </select>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Observaciones</label>
                          <textarea name="observaciones" id="observaciones" cols="30" rows="3" class="form-control"><?php echo $mov->observaciones;?></textarea>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Observaciones Personales</label>
                          <textarea name="observacionesPersonal" id="observacionesPersonal" cols="30" rows="3" class="form-control"><?php echo $mov->observacionesPersonal;?></textarea>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Observaciones Laborales</label>
                          <textarea name="observacionesLaboral" id="observacionesLaboral" cols="30" rows="3" class="form-control"><?php echo $mov->observacionesLaboral;?></textarea>
                        </div>
                      </div>
                      
   
                   
            
            <div class="col-md-12"> <button type="submit" class="btn btn-block btn-warning" > Editar</button> </div>

  <?php endforeach; ?>

<?php else: ?>
                     
  
        <input type="hidden" name="idResumen" id="idResumen" >
        
        
                          
                      <div class="col-md-2">
                        <div class="form-group">
                          <br>
                          <label for="exampleInputPassword1">Áreas verificadas</label>
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Social:</label>
                          <select name="social" id="social" class="form-control">
                            <option value="Deficiente"  >Deficiente</option>
                            <option value="Regular" >Regular</option>
                            <option value="Bueno" >Bueno</option>
                            <option value="Excelente" >Excelente</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Escolar:</label>
                          <select name="escolar" id="escolar" class="form-control">
                            <option value="Deficiente">Deficiente</option>
                            <option value="Regular" >Regular</option>
                            <option value="Bueno" >Bueno</option>
                            <option value="Excelente" >Excelente</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Económica:</label>
                          <select name="economica" id="economica" class="form-control">
                            <option value="Deficiente" >Deficiente</option>
                            <option value="Regular" >Regular</option>
                            <option value="Bueno" >Bueno</option>
                            <option value="Excelente">Excelente</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Laboral:</label>
                          <select name="laboral" id="laboral" class="form-control">
                            <option value="Deficiente">Deficiente</option>
                            <option value="Regular">Regular</option>
                            <option value="Bueno" >Bueno</option>
                            <option value="Excelente" >Excelente</option>
                          </select>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Actitud del candidato durante la entrevista:</label>
                          <select name="actitud" id="actitud" class="form-control">
                            <option value="Amable" >Amable</option>
                            <option value="Preciso" >Preciso</option>
                            <option value="A disgusto">A disgusto</option>
                            <option value="Apático">Apático</option>
                          </select>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Recomendación para el puesto:</label>
                          <select name="recomendacion" id="recomendacion" class="form-control">
                            <option value="Si" >Si</option>
                            <option value="Bajo Reserva" >Bajo Reserva</option>
                            <option value="No" >No</option>
                          </select>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Observaciones</label>
                          <textarea name="observaciones" id="observaciones" cols="30" rows="3" class="form-control"></textarea>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Observaciones Laborales</label>
                          <textarea name="observacionesLaboral" id="observacionesLaboral" cols="30" rows="3" class="form-control"></textarea>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Observaciones Personales</label>
                          <textarea name="observacionesPersonal" id="observacionesPersonal" cols="30" rows="3" class="form-control"></textarea>
                        </div>
                      </div>
                    
                  
                </div>
      
      <div class="col-md-12"><button type="submit" class="btn btn-block btn-primary" > Guardar cambios</button></div>

<?php endif; ?>
   