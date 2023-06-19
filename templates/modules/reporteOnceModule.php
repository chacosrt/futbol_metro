
    <?php foreach ($d->movements as $mov): ?>
      <div class="box box-primary">
        <div class="box-header ui-sortable-handle" style="cursor: move; text-right"><h3 class="box-title">HISTORIAL LABORAL</h3> </div>
        <div class="box-body">
          <div class='row'>
            <div class='col-md-3'>
              <span class="input-group-addon"> <b>ÚLTIMO SALARIO COTIZADO: </b><?php echo $mov->ultimo;?> </span></div>
            
            <div class='col-md-3'>
              <span class="input-group-addon"><b>VIDA LABORAL TOTAL: </b><?php echo $mov->vida;?></span></div>
            
            <div class='col-md-3'>
              <span class="input-group-addon"><b> NO. DE SEMANAS COTIZADAS: </b><?php echo $mov->nusemana;?></span></div>
            
            <div class='col-md-3'>
              <span class="input-group-addon"><b>% DE TIEMPO LABORADO: </b><?php echo $mov->porcentaje;?></span></div>
            
          </div>
          <br>
          <div class='row'>
            <div class='col-md-3'>
              <span class="input-group-addon"> <b>N. EMPLEADORES TOTAL Y DURACIÓN: </b><?php echo $mov->numeroempleadores;?> </span></div>
            
            <div class='col-md-3'>
              <span class="input-group-addon"><b>PROGRESIÓN SALARIAL: </b><?php echo $mov->progresion;?></span></div>
            
            <div class='col-md-3'>
              <span class="input-group-addon"><b>FINIQUITO: </b><?php echo $mov->finiquito;?></span></div>
            
            <div class='col-md-3'>
              <span class="input-group-addon"><b>LIQUIDACIÓN: </b><?php echo $mov->liquidacion;?></span></div>
            
          </div>
          <br>
          <div class='row'>
            <div class='col-md-3'>
              <span class="input-group-addon"> <b>AGUINALDO: </b><?php echo $mov->aguinaldo;?> </span></div>
            
            <div class='col-md-3'>
              <span class="input-group-addon"><b>VACACIONES: </b><?php echo $mov->vacaciones;?></span></div>
            
            <div class='col-md-6'>
              <span class="input-group-addon"><b>COMENTARIOS: </b><?php echo $mov->comentarios;?></span></div>
            
          </div>

        </div>
      </div>
        
     
  <?php endforeach; ?>
