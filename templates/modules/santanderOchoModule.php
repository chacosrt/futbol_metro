
    <?php foreach ($d->movements as $mov): ?>
      
      <div class="box box-primary">
        <div class="box-header ui-sortable-handle" style="cursor: move; text-right"><h3 class="box-title">NIVEL ACADÉMICO</h3> </div>
        <div class="box-body">

          <div class='row'>
           <div class='col-md-6'>
            <span class="input-group-addon"> <b>ÚLTIMO GRADO DE ESTUDIOS:</b> <?php echo $mov->ultimo;?></span></div>
           
           <div class='col-md-6'>
            <span class="input-group-addon"> <b>PERIODO:</b> <?php echo $mov->periodo;?></span></div>
           
        
          </div>
          <br>

          <div class='row'>
            <div class='col-md-3'>
              <span class="input-group-addon"><b>PROFESIONAL:</b> <?php echo $mov->profesional;?></span></div>
           
            <div class='col-md-3'>
             <span class="input-group-addon"><b> NO. DE CÉDULA:</b> <?php echo $mov->cedula;?></span></div>
           
            <div class='col-md-3'>
              <span class="input-group-addon"> <b>ESPECIALIDAD:</b> <?php echo $mov->especialidad;?></span></div>
           
            <div class='col-md-3'>
              <span class="input-group-addon"><b> OTROS:</b> <?php echo $mov->otros;?></span></div>
           
          </div>

          <br>
          <div class='row'>
            <div class='col-md-12'>
              <span class="input-group-addon"><b>EN CASO DE NO TENER CÉDULA PROFESIONAL, ESPECIFICA ÚLTIMO GRADO: </b> <?php echo $mov->caso;?></span></div>
           
          </div>


        </div>
      </div>
        
     
  <?php endforeach; ?>
