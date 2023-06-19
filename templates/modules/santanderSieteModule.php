
    <?php foreach ($d->movements as $mov): ?>
      
      
      <div class="box box-primary">
        <div class="box-header ui-sortable-handle" style="cursor: move; text-right"><h3 class="box-title">BENEFICIARIOS</h3> </div>
        <div class="box-body">
          <div class='row'>
           <div class='col-md-4'>
            <span class="input-group-addon"> <b>PARENTESCO:</b>  <?php echo $mov->parentesco;?></span></div>
           
           <div class='col-md-4'>
            <span class="input-group-addon"> <b>NOMBRE:</b>  <?php echo $mov->nombre;?></span></div>
           
           <div class='col-md-4'>
            <span class="input-group-addon"><b>EDAD:</b> <?php echo $mov->edad;?></span></div>
           
          
          </div>
          <br>

          <div class='row'>
            <div class='col-md-3'>
              <span class="input-group-addon"><b>OCUPACIÓN:</b> <?php echo $mov->ocupacion;?></span></div>
           
            <div class='col-md-3'>
             <span class="input-group-addon"> <b>DONDE LABORA O ESTUDIA:</b>  <?php echo $mov->donde;?></span></div>
           
          </div>

          <br>
          <div class='row'>
            <div class='col-md-12'>
              <span class="input-group-addon"><b>DOMICLIO:</b></span></div>
           
          </div>

          <br>
          <div class='row'>
            <div class='col-md-4'>
             <span class="input-group-addon"> <b>CALLE:</b>  <?php echo $mov->calle;?></span></div>
           
            <div class='col-md-4'>
             <span class="input-group-addon"><b> NÚMERO:</b>  <?php echo $mov->numero;?></span></div>

            <div class='col-md-4'>
             <span class="input-group-addon"><b>COLONIA: </b><?php echo $mov->colonia;?></span></div>

          </div>

          <br>
          <div class='row'>
            <div class='col-md-4'>
             <span class="input-group-addon"><b> DEL. O MPIO: </b> <?php echo $mov->del;?></span></div>

            <div class='col-md-4'>
             <span class="input-group-addon"> <b>CIUDAD:</b>  <?php echo $mov->ciudad;?></span></div>

            <div class='col-md-4'>
             <span class="input-group-addon"><b>ESTADO:</b> <?php echo $mov->estado;?></span></div>

          </div>

          <br>
          <div class='row'>
            <div class='col-md-4'>
             <span class="input-group-addon"><b> C.P.: </b> <?php echo $mov->cp;?></span></div>

            <div class='col-md-4'>
             <span class="input-group-addon"> <b>TIEMPO DE RESIDIR:</b>  <?php echo $mov->tiempo;?></span></div>

            <div class='col-md-4'>
             <span class="input-group-addon"><b>TELÉFONO: </b><?php echo $mov->tel;?></span></div>

          </div>

        </div>
      </div>

        
     
  <?php endforeach; ?>
