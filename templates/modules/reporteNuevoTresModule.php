
    <?php foreach ($d->movements as $mov): ?>
      <div class="box box-primary">

        <div class="box-header ui-sortable-handle" style="cursor: move; "><h3 class="box-title">Deudas</h3></div>
        <!-- /.box-header -->
        <div class="box-body">


          <div class='row'>
            <div class='col-md-4'>
              <span class="input-group-addon"><b> ¿Cuenta con deudas?:</b> <?php echo $mov->cuentaDeuda;?> </span> 
            </div>
            <div class='col-md-4'>
              <span class="input-group-addon"><b> ¿Con quién ?:</b> <?php echo $mov->conQuien;?> </span> 
            </div>
            <div class='col-md-4'>
              <span class="input-group-addon"><b>Monto adeudado:</b> <?php echo $mov->monto;?></span>
            </div>
          </div>
          <br>
          <div class='row'>
            <div class='col-md-4'>
              <span class="input-group-addon"><b> Abono mensual:</b> <?php echo $mov->abonoMensual;?> </span> 
            </div>
            <div class='col-md-4'>
              <span class="input-group-addon"><b> A pagar en:</b> <?php echo $mov->apagaren;?> </span> 
            </div>
            <div class='col-md-4'>
              <span class="input-group-addon"><b>¿Cuenta con Automóvil?:</b> <?php echo $mov->cuentaauto;?></span>
            </div>
          </div>
          <br>
          <div class='row'>
            <div class='col-md-4'>
              <span class="input-group-addon"><b> Modelo:</b> <?php echo $mov->modelo;?> </span> 
            </div>
            <div class='col-md-4'>
              <span class="input-group-addon"><b> Placas:</b> <?php echo $mov->placas;?> </span> 
            </div>
            <div class='col-md-4'>
              <span class="input-group-addon"><b>Valor de auto:</b> <?php echo $mov->valorAuto;?></span>
            </div>
          </div>
          <br>
          <div class='row'>
            <div class='col-md-4'>
              <span class="input-group-addon"><b> Cuenta con alguna propiedad?:</b> <?php echo $mov->propiedad;?> </span> 
            </div>
            <div class='col-md-8'>
              <span class="input-group-addon"><b> Ubicación:</b> <?php echo $mov->ubicacon;?> </span> 
            </div>
          </div>
          <br>
          <div class='row'>
            <div class='col-md-4'>
              <span class="input-group-addon"><b> ¿Cuenta con Tarjeta de Crédito ?:</b> <?php echo $mov->tarjetaCredito;?> </span> 
            </div>
            <div class='col-md-4'>
              <span class="input-group-addon"><b> ¿Con qué Banco?:</b> <?php echo $mov->bancotarjetaCredito;?> </span> 
            </div>
            <div class='col-md-4'>
              <span class="input-group-addon"><b>Línea de Crédito Autorizado:</b> <?php echo $mov->creditoAutorizado;?></span>
            </div>
          </div>
          <br>
          <div class='row'>
            <div class='col-md-4'>
              <span class="input-group-addon"><b> ¿Cuenta con Tarjeta de Tienda Comercial?:</b> <?php echo $mov->tarjetaTienda;?> </span> 
            </div>
            <div class='col-md-4'>
              <span class="input-group-addon"><b> ¿Con quién ?:</b> <?php echo $mov->conquienTienda;?> </span> 
            </div>
            <div class='col-md-4'>
              <span class="input-group-addon"><b>Línea de Crédito Autorizado Tienda:</b> <?php echo $mov->creditoAutorizadotienda;?></span>
            </div>
          </div>
          <br>
          <div class='row'>
            <div class='col-md-12'>
              <span class="input-group-addon"><b> Observaciones:</b> <?php echo $mov->observaciones;?> </span> 
            </div>
            
          </div>
          <br>

         

        </div>
      </div>
     
                      
     
  <?php endforeach; ?>
