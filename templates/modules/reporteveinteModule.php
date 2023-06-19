
    <?php foreach ($d->movements as $mov): ?>
      <div class="box box-primary">
        <div class="box-header ui-sortable-handle" style="cursor: move;"><h3 class="box-title">RESUMEN</h3> </div>
        <div class="box-body">
          
          <div class='row'><div class='col-md-12'><span class="input-group-addon"><b>ÁREAS VERIFICADAS </b></span></div></div><br>
          <div class='row'>
            <div class='col-md-3'> <span class="input-group-addon"> <b>SOCIAL  : </b> <?php echo $mov->social;?></span></div>
            <div class='col-md-3'><span class="input-group-addon"> <b>ESCOLAR : </b> <?php echo $mov->escolar;?></span></div>
            <div class='col-md-3'><span class="input-group-addon"><b>ECONÓMICA :</b> <?php echo $mov->economica;?></span></div>
          </div>
          <br>
          
          <div class='row'>
            <div class='col-md-3'> <span class="input-group-addon"> <b>LABORAL  : </b> <?php echo $mov->laboral;?></span></div>
            <div class='col-md-3'><span class="input-group-addon"> <b>ACTITUD DEL CANDIDATO DURANTE LA ENTREVISTA : </b> <?php echo $mov->actitud;?></span></div>
          </div>
         <br>
          <div class='row'>
            <div class='col-md-12'> 
              
                <p><b>OBSERVACIONES : <br></b> <?php echo $mov->observaciones;?><br>
                <br><?php echo $mov->observacionesPersonal;?>
                <br><?php echo $mov->observacionesLaboral;?></p>
              
            </div>
          </div>


        </div>
      </div>

        
     
  <?php endforeach; ?>