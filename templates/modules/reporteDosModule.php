
    <?php foreach ($d->movements as $mov): 
      $_SESSION['dirdir'] =  $mov->calle." ".$mov->numero." ".$mov->colonia." ".$mov->delegacionMunicipio;
      ?>
      
      <div class="box box-primary">
        <div class="box-header ui-sortable-handle" style="cursor: move; text-right"><h3 class="box-title">DOMICILIO</h3> </div>
        <div class="box-body">
          <div class='row'>
           <div class='col-md-4'>
            <span class="input-group-addon"> <b>CALLE:</b> <?php echo $mov->calle;?></span>
           </div>
           <div class='col-md-4'>
            <span class="input-group-addon"><b>NÚMERO:</b> <?php echo $mov->numero;?></span>
           </div>
           <div class='col-md-4'>
            <span class="input-group-addon"><b>COLONIA:</b> <?php echo $mov->colonia;?></span>
           </div>
          </div>
          <br>
          <div class='row'>
            <div class='col-md-4'>
              <span class="input-group-addon"><b>DEL.O MPIO:</b> <?php echo $mov->delegacionMunicipio;?></span>
             </div>
             <div class='col-md-4'>
              <span class="input-group-addon"><b>CIUDAD:</b> <?php echo $mov->ciudad;?></span>
             </div>
             <div class='col-md-4'>
              <span class="input-group-addon"><b>ESTADO:</b> <?php echo $mov->estado;?></span>
             </div>

          </div>
          <br>
          <div class='row'>
            <div class='col-md-3'>
              <span class="input-group-addon"><b>C.P.:</b> <?php echo $mov->cp;?></span>
             </div>
             <div class='col-md-3'>
              <span class="input-group-addon"><b>TIEMPO DE RESIDIR:</b> <?php echo $mov->tiempoResindir;?></span>
             </div>
             <div class='col-md-3'>
              <span class="input-group-addon"><b>TELÉFONO:</b> <?php echo $mov->tel1;?></span>
             </div>
             <div class='col-md-3'>
              <span class="input-group-addon"><b>CELULAR:</b> <?php echo $mov->cel1;?></span>
             </div>


          </div>
          <br>

          <div class='row'>
            <div class='col-md-4'>
              <span class="input-group-addon"><b>EN CASO DE ACCIDENTE LLAMAR A:</b> <?php echo $_SESSION['llamadaEmergencia'];?></span>
             </div>
             <div class='col-md-4'>
              <span class="input-group-addon"><b>TELÉFONO:</b> <?php echo $_SESSION['telEmergencia'];?></span>
             </div>
             <div class='col-md-4'>
              <span class="input-group-addon"><b>PARENTESCO:</b> <?php echo $_SESSION['parentesco'];?></span>
             </div>
             

          </div>
          

        </div>
      </div>
                      
     
  <?php endforeach; ?>
