
    <?php foreach ($d->movements as $mov): ?>
      <div class="box box-primary">

        <div class="box-header ui-sortable-handle" style="cursor: move; "><h3 class="box-title">Conducta</h3></div>
        <!-- /.box-header -->
        <div class="box-body">


          <div class='row'>
            <div class='col-md-4'>
              <span class="input-group-addon"><b> ¿Quién estuvo presente?:</b> <?php echo $mov->quienEstuvo;?> </span> 
            </div>
            <div class='col-md-4'>
              <span class="input-group-addon"><b> Conducta del entrevistado</b> <?php echo $mov->conductaEntrevistado;?> </span> 
            </div>
            <div class='col-md-4'>
              <span class="input-group-addon"><b>Relación con los vecinos</b> <?php echo $mov->relacionVecinos;?></span>
            </div>
          </div>
          <br>
          <div class='row'>
            <div class='col-md-4'>
              <span class="input-group-addon"><b> ¿Pertenece a algún grupo social?</b> <?php echo $mov->pertenecegrupo;?> </span> 
            </div>
            <div class='col-md-4'>
              <span class="input-group-addon"><b> ¿Ha tenido problemas legales?</b> <?php echo $mov->problemasLegales;?> </span> 
            </div>
            <div class='col-md-4'>
              <span class="input-group-addon"><b>¿Tiene algun familiar recluido?</b> <?php echo $mov->familiarRecluido;?></span>
            </div>
          </div>
          <br>
          
          <div class='row'>
            <div class='col-md-12'>
              <span class="input-group-addon"><b> ¿Tiene un familiar en la empresa?</b> <?php echo $mov->familiaresAdentro;?> </span> 
            </div>
            
          </div>
          <br>

         

        </div>
      </div>
     
                      
     
  <?php endforeach; ?>
