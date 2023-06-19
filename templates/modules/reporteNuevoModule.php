
    <?php foreach ($d->movements as $mov): ?>
      <div class="box box-primary">

        <div class="box-header ui-sortable-handle" style="cursor: move; "><h3 class="box-title">Nivel Academico</h3></div>
        <!-- /.box-header -->
        <div class="box-body">
          
          <div class='row'>

           <div class='col-md-4'>
            <span class="input-group-addon"><b> Último grado de estudios:</b> <?php echo $mov->ultimo;?> </span> 
           </div>

           <div class='col-md-4'>
            <span class="input-group-addon"><b>Periodo:</b> <?php echo $mov->periodo;?></span>
           </div>

           <div class='col-md-4'>
            <span class="input-group-addon"><b>Profesional:</b> <?php echo $mov->profesional;?></span>
           </div>

          </div>
          <br>

          <div class='row'>

           <div class='col-md-4'>
            <span class="input-group-addon"><b> No. de cédula:</b> <?php echo $mov->cedula;?> </span> 
           </div>

           <div class='col-md-4'>
            <span class="input-group-addon"><b>Especialidad:</b> <?php echo $mov->especialidad;?></span>
           </div>

           <div class='col-md-4'>
            <span class="input-group-addon"><b>En caso de no tener cédula profesional especifica último grado:</b> <?php echo $mov->caso;?></span>
           </div>

          </div>
          <br>
          <div class='row'>

            <div class='col-md-6'>
            <span class="input-group-addon"><b>Otros:</b> <?php echo $mov->otros;?> </span> 
            </div>

          </div>
          

        </div>
      </div>
     
                      
     
  <?php endforeach; ?>
