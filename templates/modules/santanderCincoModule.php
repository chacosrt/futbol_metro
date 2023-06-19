
    <?php foreach ($d->movements as $mov): ?>
      <div class="box box-primary">
        <div class="box-header ui-sortable-handle" style="cursor: move; text-right"><h3 class="box-title">REDES SOCIALES</h3> </div>
        <div class="box-body">
          <div class='row'>
           <div class='col-md-4'>
            <div class="input-group"><span class="input-group-addon"> <b>FACEBOOK: </b><?php echo $mov->facebook;?> </span></div>
           </div>
           <div class='col-md-4'>
            <div class="input-group"><span class="input-group-addon"><b>TWITTER: </b><?php echo $mov->twitter;?></span></div>
           </div>
           <div class='col-md-4'>
            <div class="input-group"><span class="input-group-addon"><b>INSTAGRAM: </b><?php echo $mov->instagram;?></span></div>
           </div>
          </div>

        </div>
      </div>
        
     
  <?php endforeach; ?>
