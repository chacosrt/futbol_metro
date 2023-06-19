
    <?php foreach ($d->movements as $mov): ?>
      <div class="box box-primary">
        <div class="box-header ui-sortable-handle" style="cursor: move; text-right"><h3 class="box-title">INFORMACIÓN LABORAL</h3> </div>
        <div class="box-body">
          
          <div class='row'><div class='col-md-12'><span class="input-group-addon"><b>DEMANDAS LABORALES:</b></span></div></div>
          <div class='row'>
            <div class='col-md-3'> <span class="input-group-addon"> <b>SI/NO: </b> <?php if($mov->campol == 1){echo "SI";}else{echo "NO";}?></span></div>
            <div class='col-md-3'><span class="input-group-addon"> <b>FECHA: </b> <?php echo $mov->fechal;?></span></div>
            <div class='col-md-3'><span class="input-group-addon"><b>ACUERDO:</b> <?php echo $mov->acuerdol;?></span></div>
          </div>
          <br>
          <div class='row'><div class='col-md-12'><span class="input-group-addon"><b>COMENTARIOS:</b> <?php echo $mov->comentariol;?></span></div></div>


          <div class='row'><div class='col-md-12'><span class="input-group-addon"><b>DEMANDAS CIVILES :</b></span></div></div>
          <div class='row'>
            <div class='col-md-3'> <span class="input-group-addon"> <b>SI/NO: </b> <?php if($mov->campoc == 1){echo "SI";}else{echo "NO";}?></span></div>
            <div class='col-md-3'><span class="input-group-addon"> <b>FECHA: </b> <?php echo $mov->fechac;?></span></div>
            <div class='col-md-3'><span class="input-group-addon"><b>ACUERDO:</b> <?php echo $mov->acuerdoc;?></span></div>
          </div>
          <br>
          <div class='row'><div class='col-md-12'><span class="input-group-addon"><b>COMENTARIOS:</b> <?php echo $mov->comentarioc;?></span></div></div>


          <div class='row'><div class='col-md-12'><span class="input-group-addon"><b>DEMANDAS FAMILIARES :</b></span></div></div>
          <div class='row'>
            <div class='col-md-3'> <span class="input-group-addon"> <b>SI/NO: </b> <?php if($mov->campof == 1){echo "SI";}else{echo "NO";}?></span></div>
            <div class='col-md-3'><span class="input-group-addon"> <b>FECHA: </b> <?php echo $mov->fechaf;?></span></div>
            <div class='col-md-3'><span class="input-group-addon"><b>ACUERDO:</b> <?php echo $mov->acuerdof;?></span></div>
          </div>
          <br>
          <div class='row'><div class='col-md-12'><span class="input-group-addon"><b>COMENTARIOS:</b> <?php echo $mov->comentariof;?></span></div></div>


          <div class='row'><div class='col-md-12'><span class="input-group-addon"><b>DEMANDAS PENALES :</b></span></div></div>
          <div class='row'>
            <div class='col-md-3'> <span class="input-group-addon"> <b>SI/NO: </b> <?php if($mov->campop == 1){echo "SI";}else{echo "NO";}?></span></div>
            <div class='col-md-3'><span class="input-group-addon"> <b>FECHA: </b> <?php echo $mov->fechap;?></span></div>
            <div class='col-md-3'><span class="input-group-addon"><b>ACUERDO:</b> <?php echo $mov->acuerdop;?></span></div>
          </div>
          <br>
          <div class='row'><div class='col-md-12'><span class="input-group-addon"><b>COMENTARIOS:</b> <?php echo $mov->comentariop;?></span></div></div>


          <div class='row'><div class='col-md-12'><span class="input-group-addon"><b>DEMANDAS ADMINISTRATIVAS :</b></span></div></div>
          <div class='row'>
            <div class='col-md-3'> <span class="input-group-addon"> <b>SI/NO: </b> <?php if($mov->campoa == 1){echo "SI";}else{echo "NO";}?></span></div>
            <div class='col-md-3'><span class="input-group-addon"> <b>FECHA: </b> <?php echo $mov->fechaa;?></span></div>
            <div class='col-md-3'><span class="input-group-addon"><b>ACUERDO:</b> <?php echo $mov->acuerdoa;?></span></div>
          </div>
          <br>
          <div class='row'><div class='col-md-12'><span class="input-group-addon"><b>COMENTARIOS:</b> <?php echo $mov->comentarioa;?></span></div></div>


          <div class='row'><div class='col-md-12'><span class="input-group-addon"><b>ALERTAS INTERNACIONALES :</b></span></div></div>
          <div class='row'>
            <div class='col-md-3'> <span class="input-group-addon"> <b>SI/NO: </b> <?php if($mov->campoi == 1){echo "SI";}else{echo "NO";}?></span></div>
            <div class='col-md-3'><span class="input-group-addon"> <b>FECHA: </b> <?php echo $mov->fechai;?></span></div>
            <div class='col-md-3'><span class="input-group-addon"><b>ACUERDO:</b> <?php echo $mov->acuerdoi;?></span></div>
          </div>
          <br>
          <div class='row'><div class='col-md-12'><span class="input-group-addon"><b>COMENTARIOS:</b> <?php echo $mov->comentarioi;?></span></div></div>


          <div class='row'><div class='col-md-12'><span class="input-group-addon"><b>SAT CONTRIBUYENTE :</b></span></div></div>
          <div class='row'>
            <div class='col-md-3'> <span class="input-group-addon"> <b>SI/NO: </b> <?php if($mov->camposat == 1){echo "SI";}else{echo "NO";}?></span></div>
            <div class='col-md-3'><span class="input-group-addon"> <b>FECHA: </b> <?php echo $mov->fechasat;?></span></div>
            <div class='col-md-3'><span class="input-group-addon"><b>ACUERDO:</b> <?php echo $mov->acuerdosat;?></span></div>
          </div>
          <br>
          <div class='row'><div class='col-md-12'><span class="input-group-addon"><b>COMENTARIOS:</b> <?php echo $mov->comentariosat;?></span></div></div>
          

        </div>
      </div>

        
     
  <?php endforeach; ?>
