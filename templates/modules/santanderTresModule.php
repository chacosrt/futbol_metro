
    <?php foreach ($d->movements as $mov): ?>
      <div class="box box-primary">
        <div class="box-header ui-sortable-handle" style="cursor: move; text-right"><h3 class="box-title">ENTORNO HABITACIONAL</h3> </div>
        <div class="box-body">
          <div class='row'>
           <div class='col-md-12'>
            <b><span class="input-group-addon"> <b>TIPO DE ZONA</b> <?php echo $mov->tipoZona;?></span>
           </div>
        </div>
        </div>
      </div>

      <div class="box box-primary">
        <div class="box-header ui-sortable-handle" style="cursor: move; text-right"><h3 class="box-title"><b>TIPO DE VIVIENDA </b> </h3> </div>
        <div class="box-body">

          <div class='row'>
            <div class='col-md-3'>
              <b><span class="input-group-addon"> <b>TIPO DE VIVIENDA:</b> <?php echo $mov->tipoVivienda;?></span>
            </div>
            <div class='col-md-3'>
              <b><span class="input-group-addon"><b>EDIFICACIÓN DE INMUEBLE:</b> <?php echo $mov->edificacion;?></span>
            </div>
              <div class='col-md-3'>
                <b><span class="input-group-addon"><b>TITULAR DEL INMUEBLE:</b> <?php echo $mov->titular;?></span>
              </div>
              <div class='col-md-3'>
                <b><span class="input-group-addon"><b>PARENTESCO:</b> <?php echo $mov->parentesco;?></span>
              </div>
          </div>
          <br>

          <div class='row'>
              <div class='col-md-12'><span class="input-group-addon">DISTRIBUCIÓN DE HOGAR</span></div></div>
          </div>
          <br>

          <div class='row'>
            <div class='col-md-2'><b><span class="input-group-addon"> <b>NO. DE RECAMARAS:</b> <?php echo $mov->numRecamaras;?></span></div>
            <div class='col-md-2'><b><span class="input-group-addon"> <b>SALA:</b> <?php if($mov->sala == "1"){ echo "Si";}else{echo "No";};?></span></div>
            <div class='col-md-2'><b><span class="input-group-addon"> <b>COMEDOR:</b> <?php if($mov->comedor == "1"){ echo "Si";}else{echo "No";};?></span></div>
            <div class='col-md-2'><b><span class="input-group-addon"> <b>COCINA:</b> <?php if($mov->cocina == "1"){ echo "Si";}else{echo "No";};?></span></div>
            <div class='col-md-2'><b><span class="input-group-addon"> <b>GARAJE:</b> <?php if($mov->garaje == "1"){ echo "Si";}else{echo "No";};?></span></div>
            <div class='col-md-2'><b><span class="input-group-addon"> <b>JARDIN:</b> <?php if($mov->jardin == "1"){ echo "Si";}else{echo "No";};?></span></div>
          </div>
          <br>

          <div class='row'>
            <div class='col-md-2'><b><span class="input-group-addon"> <b>NÚMERO DE BAÑOS::</b> <?php echo $mov->nomBano;?></span></div>
            <div class='col-md-2'><b><span class="input-group-addon"> <b>Tipo de baño:</b> <?php echo $mov->tipobano;?></span></div>
            <div class='col-md-2'><b><span class="input-group-addon"> <b>COMPARTIDO:</b> <?php if($mov->sala == "1"){ echo "Si";}else{echo "No";};?></span></div>
            <div class='col-md-2'><b><span class="input-group-addon"> <b>CON REGADERA:</b> <?php if($mov->sala == "1"){ echo "Si";}else{echo "No";};?></span></div>
            <div class='col-md-2'><b><span class="input-group-addon"> <b>RENTA MENSUAL::</b> <?php echo $mov->renta;?></span></div>
          </div>
          <br>
          <div class='row'>
            <div class='col-md-12'><b><span class="input-group-addon"> <b>DIRECCIÓN:</b> <?php echo $_SESSION['dirdir'];?></span></div>
          </div>
          <br>
        </div>
      </div>
    </div>
        
     
  <?php endforeach; ?>
