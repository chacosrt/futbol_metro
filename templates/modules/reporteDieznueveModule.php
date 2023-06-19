
    <?php foreach ($d->movements as $mov): ?>
      <div class="box box-primary">
        <div class="box-header ui-sortable-handle" style="cursor: move; text-right"><h3 class="box-title">SERVICIO MÉDICO</h3> </div>
        <div class="box-body">
          
          <div class='row'><div class='col-md-12'><span class="input-group-addon"><b>INFONAVIT:</b></span></div></div>
          <div class='row'>
            <div class='col-md-3'> <span class="input-group-addon"> <b>NO. DE CLÍNICA : </b> <?php echo $mov->clinicai;?></span></div>
            <div class='col-md-3'><span class="input-group-addon"> <b>NO. DE INCIDENTE: </b> <?php echo $mov->incidentei;?></span></div>
            <div class='col-md-3'><span class="input-group-addon"><b>TIPO DE ENFERMEDAD:</b> <?php echo $mov->tipoi;?></span></div>
          </div>

          <div class='row'><div class='col-md-12'><span class="input-group-addon"><b>IMSS:</b></span></div></div>
          <div class='row'>
            <div class='col-md-3'> <span class="input-group-addon"> <b>NO. DE CLÍNICA : </b> <?php echo $mov->clinicaim;?></span></div>
            <div class='col-md-3'><span class="input-group-addon"> <b>NO. DE INCIDENTE: </b> <?php echo $mov->incidenteim;?></span></div>
            <div class='col-md-3'><span class="input-group-addon"><b>TIPO DE ENFERMEDAD:</b> <?php echo $mov->tipoim;?></span></div>
          </div>

          <div class='row'><div class='col-md-12'><span class="input-group-addon"><b>ISSSTE:</b></span></div></div>
          <div class='row'>
            <div class='col-md-3'> <span class="input-group-addon"> <b>NO. DE CLÍNICA : </b> <?php echo $mov->clinicais;?></span></div>
            <div class='col-md-3'><span class="input-group-addon"> <b>NO. DE INCIDENTE: </b> <?php echo $mov->incidenteis;?></span></div>
            <div class='col-md-3'><span class="input-group-addon"><b>TIPO DE ENFERMEDAD:</b> <?php echo $mov->tipois;?></span></div>
          </div>

          <div class='row'><div class='col-md-12'><span class="input-group-addon"><b> SEGURO POPULAR:</b></span></div></div>
          <div class='row'>
            <div class='col-md-3'> <span class="input-group-addon"> <b>NO. DE CLÍNICA : </b> <?php echo $mov->clinicase ;?></span></div>
            <div class='col-md-3'><span class="input-group-addon"> <b>NO. DE INCIDENTE: </b> <?php echo $mov->incidentese;?></span></div>
            <div class='col-md-3'><span class="input-group-addon"><b>TIPO DE ENFERMEDAD:</b> <?php echo $mov->tipose;?></span></div>
          </div>

          <div class='row'><div class='col-md-12'><span class="input-group-addon"><b>PRIVADO:</b></span></div></div>
          <div class='row'>
            <div class='col-md-3'> <span class="input-group-addon"> <b>ASEGURADORA : </b> <?php echo $mov->aseguradora;?></span></div>
            <div class='col-md-3'><span class="input-group-addon"> <b>NO. DE INCIDENTE: </b> <?php echo $mov->incidentepri;?></span></div>
            <div class='col-md-3'><span class="input-group-addon"><b>TIPO DE ENFERMEDAD:</b> <?php echo $mov->tipopri;?></span></div>
          </div>

          <div class='row'><div class='col-md-12'><span class="input-group-addon"><b>ISSEMYM:</b></span></div></div>
          <div class='row'>
            <div class='col-md-3'> <span class="input-group-addon"> <b>NO. DE CLÍNICA : </b> <?php echo $mov->clinicaisse ;?></span></div>
            <div class='col-md-3'><span class="input-group-addon"> <b>NO. DE INCIDENTE: </b> <?php echo $mov->incidenteisse;?></span></div>
            <div class='col-md-3'><span class="input-group-addon"><b>TIPO DE ENFERMEDAD:</b> <?php echo $mov->tipoisse;?></span></div>
          </div>

          
          <div class='row'>
            <div class='col-md-3'> <span class="input-group-addon"> <b> NO TIENE: </b> <?php echo $mov->notiene;?></span></div>
          
          </div>
          

        </div>
      </div>

        
     
  <?php endforeach; ?>
