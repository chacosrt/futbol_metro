
    <?php foreach ($d->movements as $mov): ?>
      
      <div class="box box-primary">
        <div class="box-header ui-sortable-handle" style="cursor: move; text-right"><h3 class="box-title">HOBBY / INTERECES</h3> </div>
        <div class="box-body">
          <div class='row'>
           <div class='col-md-6'>
            <div class="input-group"><span class="input-group-addon"> <b>DEPORTES: </b> <?php echo $mov->deportes;?></span></div>
           </div>
           <div class='col-md-3'>
            <div class="input-group"><span class="input-group-addon"><b>CUAL:</b> <?php echo $mov->cual;?></span></div>
           </div>
           <div class='col-md-3'>
            <div class="input-group"><span class="input-group-addon"><b>FRECUENCIA:</b> <?php echo $mov->frecuencia;?></span></div>
           </div>
          </div>
          <br>
          <div class='row'>
            <div class='col-md-6'>
             <div class="input-group"><span class="input-group-addon"> <b>PASATIEMPOS: </b> <?php echo $mov->pasatiempos;?></span></div>
            </div>
            <div class='col-md-6'>
             <div class="input-group"><span class="input-group-addon"><b>OTROS:</b> <?php echo $mov->otros;?></span></div>
            </div>
           </div>

        </div>
      </div>

        
     
  <?php endforeach; ?>
