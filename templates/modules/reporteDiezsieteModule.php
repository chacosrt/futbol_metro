
    <?php foreach ($d->movements as $mov): ?>
      <div class="box box-primary">
        <div class="box-header ui-sortable-handle" style="cursor: move; text-right"><h3 class="box-title">INFONAVIT</h3> </div>
        <div class="box-body">
          <div class='row'>
           <div class='col-md-4'>
            <span class="input-group-addon"> <b>ESTATUS: </b><?php echo $mov->estatus;?> </span></div>
           
           <div class='col-md-4'>
            <span class="input-group-addon"><b>PUNTOS: </b><?php echo $mov->puntos;?></span></div>
           
           <div class='col-md-4'>
            <span class="input-group-addon"><b>SUBCUENTA VIVIENDA: </b><?php echo $mov->subcuenta;?></span></div>
           
          </div>

          <div class='row'>
           <div class='col-md-4'>
            <span class="input-group-addon"> <b>PRÉSTAMO MÁXIMO: </b><?php echo $mov->maximo;?> </span></div>
           
           <div class='col-md-4'>
            <span class="input-group-addon"><b>DESCUENTO HIPOTECA: </b><?php echo $mov->hipoteca;?></span></div>
           
          </div>

        </div>
      </div>
        
     
  <?php endforeach; ?>
