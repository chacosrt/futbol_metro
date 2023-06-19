
    <?php foreach ($d->movements as $mov): ?>
      <div class="box box-primary">

        <div class="box-header ui-sortable-handle" style="cursor: move; "><h3 class="box-title">Incidencias legales</h3></div>
        <!-- /.box-header -->
        <div class="box-body">

          <div class="row"> <div class="col-md-12"><label>Demandas Laborales</label></div>  </div>          
          <div class='row'>
            <div class='col-md-3'>
              <span class="input-group-addon"><b> Existe:</b> <?php  if($mov->campol == 1){ echo "SI";}else{ echo "NO";}?> </span> 
            </div>
            <div class='col-md-3'>
              <span class="input-group-addon"><b> Fecha:</b> <?php echo $mov->fechal;?> </span> 
            </div>
            <div class='col-md-3'>
              <span class="input-group-addon"><b>Acuerdo:</b> <?php echo $mov->acuerdol;?></span>
            </div>
            <div class='col-md-3'>
              <span class="input-group-addon"><b>Comentarios:</b> <?php echo $mov->comentariol;?></span>
            </div>
          </div>
          <br>
          <div class="row"> <div class="col-md-12"><label>Demandas Civiles</label></div>  </div>          
          <div class='row'>
            <div class='col-md-3'>
              <span class="input-group-addon"><b> Existe:</b> <?php if($mov->campoc == 1){ echo "SI";}else{ echo "NO";} ?> </span> 
            </div>
            <div class='col-md-3'>
              <span class="input-group-addon"><b> Fecha:</b> <?php echo $mov->fechac;?> </span> 
            </div>
            <div class='col-md-3'>
              <span class="input-group-addon"><b>Acuerdo:</b> <?php echo $mov->acuerdoc;?></span>
            </div>
            <div class='col-md-3'>
              <span class="input-group-addon"><b>Comentarios:</b> <?php echo $mov->comentarioc;?></span>
            </div>
          </div>
          <br>
          <div class="row"> <div class="col-md-12"><label>Demandas Familiares</label></div>  </div>          
          <div class='row'>
            <div class='col-md-3'>
              <span class="input-group-addon"><b> Existe:</b> <?php if($mov->campof == 1){ echo "SI";}else{ echo "NO";} ?> </span> 
            </div>
            <div class='col-md-3'>
              <span class="input-group-addon"><b> Fecha:</b> <?php echo $mov->fechaf;?> </span> 
            </div>
            <div class='col-md-3'>
              <span class="input-group-addon"><b>Acuerdo:</b> <?php echo $mov->acuerdof;?></span>
            </div>
            <div class='col-md-3'>
              <span class="input-group-addon"><b>Comentarios:</b> <?php echo $mov->comentariof;?></span>
            </div>
          </div>
          <br>
          <div class="row"> <div class="col-md-12"><label>Demandas penales</label></div>  </div>          
          <div class='row'>
            <div class='col-md-3'>
              <span class="input-group-addon"><b> Existe:</b> <?php if($mov->campop == 1){ echo "SI";}else{ echo "NO";} ?> </span> 
            </div>
            <div class='col-md-3'>
              <span class="input-group-addon"><b> Fecha:</b> <?php echo $mov->fechap;?> </span> 
            </div>
            <div class='col-md-3'>
              <span class="input-group-addon"><b>Acuerdo:</b> <?php echo $mov->acuerdop;?></span>
            </div>
            <div class='col-md-3'>
              <span class="input-group-addon"><b>Comentarios:</b> <?php echo $mov->comentariop;?></span>
            </div>
          </div>
          <br>
          <div class="row"> <div class="col-md-12"><label>Demandas Administrativa</label></div>  </div>          
          <div class='row'>
            <div class='col-md-3'>
              <span class="input-group-addon"><b> Existe:</b> <?php if($mov->ultimo == 1){ echo "SI";}else{ echo "NO";} ?> </span> 
            </div>
            <div class='col-md-3'>
              <span class="input-group-addon"><b> Fecha:</b> <?php echo $mov->ultimo;?> </span> 
            </div>
            <div class='col-md-3'>
              <span class="input-group-addon"><b>Acuerdo:</b> <?php echo $mov->periodo;?></span>
            </div>
            <div class='col-md-3'>
              <span class="input-group-addon"><b>Comentarios:</b> <?php echo $mov->profesional;?></span>
            </div>
          </div>
          <br>
          <div class="row"> <div class="col-md-12"><label>Demandas Internacional</label></div>  </div>          
          <div class='row'>
            <div class='col-md-3'>
              <span class="input-group-addon"><b> Existe:</b> <?php if($mov->campoa == 1){ echo "SI";}else{ echo "NO";} ?> </span> 
            </div>
            <div class='col-md-3'>
              <span class="input-group-addon"><b> Fecha:</b> <?php echo $mov->fechaa;?> </span> 
            </div>
            <div class='col-md-3'>
              <span class="input-group-addon"><b>Acuerdo:</b> <?php echo $mov->acuerdoa;?></span>
            </div>
            <div class='col-md-3'>
              <span class="input-group-addon"><b>Comentarios:</b> <?php echo $mov->comentarioa;?></span>
            </div>
          </div>
          <br>
          <div class="row"> <div class="col-md-12"><label>Demandas SAT</label></div>  </div>          
          <div class='row'>
            <div class='col-md-3'>
              <span class="input-group-addon"><b> Existe:</b> <?php if($mov->camposat == 1){ echo "SI";}else{ echo "NO";} ?> </span> 
            </div>
            <div class='col-md-3'>
              <span class="input-group-addon"><b> Fecha:</b> <?php echo $mov->fechasat;?> </span> 
            </div>
            <div class='col-md-3'>
              <span class="input-group-addon"><b>Acuerdo:</b> <?php echo $mov->acuerdosat;?></span>
            </div>
            <div class='col-md-3'>
              <span class="input-group-addon"><b>Comentarios:</b> <?php echo $mov->comentariosat;?></span>
            </div>
          </div>
          <br>
         

        </div>
      </div>
     
                      
     
  <?php endforeach; ?>
