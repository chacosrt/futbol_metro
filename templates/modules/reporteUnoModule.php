
    <?php foreach ($d->movements as $mov): ?>
      <div class="box box-primary">

        <div class="box-header ui-sortable-handle" style="cursor: move; text-right"><h3 class="box-title">MIDAS HUMAN RESOURSES CONSULTING SERVICES SA DE CV</h3> <img src="<?php echo IMAGES."logo.png";?>" alt="" style='height:80px'></div>
        <!-- /.box-header -->
        <div class="box-body">
          
          <div class='row'>

           <div class='col-md-4'>
            <span class="input-group-addon"><b>SOLICITADO POR: </b> <?php echo $mov->nomsolicita." ".$mov->nomapepaterno." ".$mov->apematerno;?></span> 
           </div>

           <div class='col-md-4'>
            <span class="input-group-addon"><b>EMPRESA:</b> <?php echo $mov->nomempre;?></span>
           </div>

           <div class='col-md-4'>
            <span class="input-group-addon"><b>FECHA:</b> <?php echo $mov->fechaSolicitud;?></span>
           </div>

          </div>
          <br>
          <div class='row'>
           <div class='col-md-6'>
            <span class="input-group-addon"><b>NOMBRE DEL SOLICITANTE:</b> <?php echo $mov->nomsolicita." ".$mov->nomapepaterno." ".$mov->apematerno;?></span>
           </div>

           <div class='col-md-6'>
            <span class="input-group-addon"><b>NOMBRE DEL ANALISTA:</b> <?php echo $mov->ejesolicita." ".$mov->ejeapepaterno." ".$mov->ejeapematerno;?></span>
           </div>

          </div>

        </div>
      </div>
      <?php
        $_SESSION['llamadaEmergencia'] =  $mov->llamadaEmergencia;
        $_SESSION['parentesco'] =  $mov->parentesco;
        $_SESSION['telEmergencia'] =  $mov->telEmergencia;
        
        
        
      ?>
      <div class="box box-primary">
        <div class="box-header ui-sortable-handle" style="cursor: move;"><h3 class="box-title">DATOS GENERALES</h3> </div>
        <div class="box-body">
          <div class='row'>
           <div class='col-md-4'>
            <span class="input-group-addon"> <b>APELLIDO PATERNO:</b><?php echo $mov->paternocandi;?> </span>
           </div>
           <div class='col-md-4'>
            <span class="input-group-addon"><b>APELLIDO MATERNO:</b><?php echo $mov->maternocandi;?></span>
           </div>
           <div class='col-md-4'>
            <span class="input-group-addon"><b>NOMBRE (S)</b><?php echo $mov->nombreCandidato;?></span>
           </div>
          </div>
          <br>
          <div class='row'>
            <div class='col-md-4'>
              <span class="input-group-addon"><b>SEXO:</b> <?php if($mov->sexo == 'm'){echo "Masculino";}else{echo "Femenino";}?></span>
             </div>
             <div class='col-md-4'>
              <span class="input-group-addon"><b>EDAD:</b><?php echo $mov->edad;?></span>
             </div>
             <div class='col-md-4'>
              <span class="input-group-addon"><b>ESTADO CIVIL:<?php echo $mov->estadoCivil;?></b></span>
             </div>

          </div>
          <br>
          <div class='row'>
            <div class='col-md-3'>
              <span class="input-group-addon"><b>LUGAR DE NACIMIENTO:</b> <?php echo $mov->lugarNacimiento;?></span>
             </div>
             <div class='col-md-3'>
              <span class="input-group-addon"><b>FECHA DE NACIMIENTO:</b> <?php echo $mov->fechaNacimiento;?></span>
             </div>
          
            <div class='col-md-3'>
              <span class="input-group-addon"><b>ESCOLARIDAD MÁXIMA:</b> <?php echo $mov->escolaridad;?></span>
             </div>
             <div class='col-md-3'>
              <span class="input-group-addon"><b>RFC:</b> <?php echo $mov->rfc;?></span>
             </div>
          </div>

        </div>
      </div>

                      
     
  <?php endforeach; ?>
