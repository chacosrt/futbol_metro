
    <?php foreach ($d->movements as $mov): ?>
      
      <div class="box box-primary">
        <div class="box-header ui-sortable-handle" style="cursor: move; text-right"><h3 class="box-title">PROBLEMAS EMPLEADOR ACTUAL</h3> </div>
        <div class="box-body">
          <div class='row'>
            <div class='col-md-3'><span class="input-group-addon"> <b>NOMBRE DE LA EMPRESA : </b> <?php echo $mov->nombre;?></span></div>
            
            <div class='col-md-3'><span class="input-group-addon"><b>NOMBRE INFORMANTE:</b> <?php echo $mov->informante;?></span></div>
      
            <div class='col-md-3'> <span class="input-group-addon"> <b>SI/NO: </b> <?php if($mov->dato == 1){echo "SI";}else{echo "NO";}?></span></div>

          </div>
          <br>
          <div class='row'>
            <div class='col-md-12'><span class="input-group-addon"><b>COMENTARIOS:</b> <?php echo $mov->comentarios;?></span></div>
           
          </div>

        </div>
      </div>

      
    
        
     
  <?php endforeach; ?>
