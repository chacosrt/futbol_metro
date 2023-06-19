
    <?php foreach ($d->movements as $mov): ?>
      <div class="box box-primary">
        <div class="box-header ui-sortable-handle" style="cursor: move; text-right"><h3 class="box-title">ENTORNO HABITACIONAL</h3> </div>
        <div class="box-body">
          <div class='row'>
           <div class='col-md-12'>
            <b><span class="input-group-addon"> <b>TIPO DE ZONA</b> <?php echo $mov->tipoZona;?></span>
           </div>
        </div>
        </div>
      </div>

      <div class="box box-primary">
        <div class="box-header ui-sortable-handle" style="cursor: move; text-right"><h3 class="box-title"><b>TIPO DE VIVIENDA </b> </h3> </div>
        <div class="box-body">

          <div class='row'>
            <div class='col-md-3'>
              <b><span class="input-group-addon"> <b>TIPO DE VIVIENDA:</b> <?php echo $mov->tipoVivienda;?></span>
            </div>
            <div class='col-md-3'>
              <b><span class="input-group-addon"><b>EDIFICACIÓN DE INMUEBLE:</b> <?php echo $mov->edificacion;?></span>
            </div>
              <div class='col-md-3'>
                <b><span class="input-group-addon"><b>TITULAR DEL INMUEBLE:</b> <?php echo $mov->titular;?></span>
              </div>
              <div class='col-md-3'>
                <b><span class="input-group-addon"><b>PARENTESCO:</b> <?php echo $mov->parentesco;?></span>
              </div>
          </div>
          <br>

          <div class='row'>
              <div class='col-md-12'><span class="input-group-addon">DISTRIBUCIÓN DE HOGAR</span></div>
          </div>
          <br>

          <div class='row'>
            <div class='col-md-2'><b><span class="input-group-addon"> <b>NO. DE RECAMARAS:</b> <?php echo $mov->numRecamaras;?></span></div>
            <div class='col-md-2'><b><span class="input-group-addon"> <b>SALA:</b> <?php if($mov->sala == "1"){ echo "Si";}else{echo "No";};?></span></div>
            <div class='col-md-2'><b><span class="input-group-addon"> <b>COMEDOR:</b> <?php if($mov->comedor == "1"){ echo "Si";}else{echo "No";};?></span></div>
            <div class='col-md-2'><b><span class="input-group-addon"> <b>COCINA:</b> <?php if($mov->cocina == "1"){ echo "Si";}else{echo "No";};?></span></div>
            <div class='col-md-2'><b><span class="input-group-addon"> <b>GARAJE:</b> <?php if($mov->garaje == "1"){ echo "Si";}else{echo "No";};?></span></div>
            <div class='col-md-2'><b><span class="input-group-addon"> <b>JARDIN:</b> <?php if($mov->jardin == "1"){ echo "Si";}else{echo "No";};?></span></div>
          </div>
          <br>
          <div class='row'>
            <div class='col-md-2'><b><span class="input-group-addon"> <b>Estudio:</b> <?php if($mov->estudio == "1"){ echo "Si";}else{echo "No";};?></span></div>
            <div class='col-md-2'><b><span class="input-group-addon"> <b>Zotehuela:</b> <?php if($mov->zotehuela == "1"){ echo "Si";}else{echo "No";};?></span></div>
            <div class='col-md-2'><b><span class="input-group-addon"> <b>Agua:</b> <?php if($mov->agua == "1"){ echo "Si";}else{echo "No";};?></span></div>
            <div class='col-md-2'><b><span class="input-group-addon"> <b>Luz:</b> <?php if($mov->luz == "1"){ echo "Si";}else{echo "No";};?></span></div>
            <div class='col-md-2'><b><span class="input-group-addon"> <b>Drenaje:</b> <?php if($mov->drenaje == "1"){ echo "Si";}else{echo "No";};?></span></div>
            <div class='col-md-2'><b><span class="input-group-addon"> <b>Pavimentación:</b> <?php if($mov->pavimentacion == "1"){ echo "Si";}else{echo "No";};?></span></div>
          </div>
          <br>
          <div class='row'>
            <div class='col-md-2'><b><span class="input-group-addon"> <b>Teléfono:</b> <?php if($mov->telefono == "1"){ echo "Si";}else{echo "No";};?></span></div>
            <div class='col-md-2'><b><span class="input-group-addon"> <b>Transporte:</b> <?php if($mov->transporte == "1"){ echo "Si";}else{echo "No";};?></span></div>
            <div class='col-md-2'><b><span class="input-group-addon"> <b>Area de recreacion:</b> <?php if($mov->areas == "1"){ echo "Si";}else{echo "No";};?></span></div>
            <div class='col-md-2'><b><span class="input-group-addon"> <b>Vigilancia:</b> <?php if($mov->vigilancia == "1"){ echo "Si";}else{echo "No";};?></span></div>
            <div class='col-md-2'><b><span class="input-group-addon"> <b>internet:</b> <?php if($mov->internet == "1"){ echo "Si";}else{echo "No";};?></span></div>
            <div class='col-md-2'><b><span class="input-group-addon"> <b>Televisión normal:</b> <?php if($mov->telNormal == "1"){ echo "Si";}else{echo "No";};?></span></div>
          </div>
          <br>
          <div class='row'>
            <div class='col-md-2'><b><span class="input-group-addon"> <b>Televisión de plasma:</b> <?php if($mov->telPlasma == "1"){ echo "Si";}else{echo "No";};?></span></div>
            <div class='col-md-2'><b><span class="input-group-addon"> <b>Estéreo:</b> <?php if($mov->estereo == "1"){ echo "Si";}else{echo "No";};?></span></div>
            <div class='col-md-2'><b><span class="input-group-addon"> <b>DVD:</b> <?php if($mov->dvd == "1"){ echo "Si";}else{echo "No";};?></span></div>
            <div class='col-md-2'><b><span class="input-group-addon"> <b>Blue Ray:</b> <?php if($mov->blueray == "1"){ echo "Si";}else{echo "No";};?></span></div>
            <div class='col-md-2'><b><span class="input-group-addon"> <b>Estufa:</b> <?php if($mov->estufa == "1"){ echo "Si";}else{echo "No";};?></span></div>
            <div class='col-md-2'><b><span class="input-group-addon"> <b>Horno de microondas:</b> <?php if($mov->horno == "1"){ echo "Si";}else{echo "No";};?></span></div>
          </div>
          <br>
          <div class='row'>
  
            <div class='col-md-2'><b><span class="input-group-addon"> <b>Lavadora:</b> <?php if($mov->lavadora == "1"){ echo "Si";}else{echo "No";};?></span></div>
            <div class='col-md-2'><b><span class="input-group-addon"> <b>Refrigerador</b> <?php if($mov->refrigerador == "1"){ echo "Si";}else{echo "No";};?></span></div>
            <div class='col-md-2'><b><span class="input-group-addon"> <b>Computadora:</b> <?php if($mov->computadora == "1"){ echo "Si";}else{echo "No";};?></span></div>
            <div class='col-md-2'><b><span class="input-group-addon"> <b>NÚMERO DE BAÑOS::</b> <?php echo $mov->nomBano;?></span></div>
            <div class='col-md-2'><b><span class="input-group-addon"> <b>Tipo de baño:</b> <?php echo $mov->tipobano;?></span></div>
            <div class='col-md-2'><b><span class="input-group-addon"> <b>COMPARTIDO:</b> <?php if($mov->sala == "1"){ echo "Si";}else{echo "No";};?></span></div>
          </div>
          <br>

          <div class='row'>
            
            <div class='col-md-2'><b><span class="input-group-addon"> <b>CON REGADERA:</b> <?php if($mov->renta == "1"){ echo "Si";}else{echo "No";};?></span></div>
            <div class='col-md-2'><b><span class="input-group-addon"> <b>RENTA MENSUAL::</b> <?php echo $mov->renta;?></span></div>
            <div class='col-md-2'><b><span class="input-group-addon"> <b>Tipo de paredes:</b> <?php echo $mov->paredes;?></span></div>
            <div class='col-md-2'><b><span class="input-group-addon"> <b>Tipo de techos:</b> <?php echo $mov->techos;?></span></div>
            <div class='col-md-2'><b><span class="input-group-addon"> <b>Tipo de pisos:</b> <?php echo $mov->pisos;?></span></div>
            <div class='col-md-2'><b><span class="input-group-addon"> <b>Extensión del Inmueble:</b> <?php echo $mov->extensionInmueble;?></span></div>
          </div>
          <br>
          <div class='row'>
            <div class='col-md-2'><b><span class="input-group-addon"> <b>Condiciones Generales del Inmueble:</b> <?php echo $mov->condicionesInmueble;?></span></div>
            <div class='col-md-2'><b><span class="input-group-addon"> <b>Condiciones del Mobiliario:</b> <?php echo $mov->condicionesMobiliario;?></span></div>
            <div class='col-md-2'><b><span class="input-group-addon"> <b>Orden:</b> <?php echo $mov->orden;?></span></div>
            <div class='col-md-2'><b><span class="input-group-addon"> <b>Limpieza:</b> <?php echo $mov->limpieza;?></span></div>
            <div class='col-md-2'><b><span class="input-group-addon"> <b>Delincuencia:</b> <?php echo $mov->delincuencia ;?></span></div>
            <div class='col-md-2'><b><span class="input-group-addon"> <b>Vandalismo:</b> <?php echo $mov->vandalismo;?></span></div>
          </div>
          <br>
          <div class='row'>
            <div class='col-md-2'><b><span class="input-group-addon"> <b>Drogadicción:</b> <?php echo $mov->drogadiccion;?></span></div>
            <div class='col-md-2'><b><span class="input-group-addon"> <b>Alcoholismo:</b> <?php echo $mov->alcoholismo;?></span></div>
            <div class='col-md-2'><b><span class="input-group-addon"> <b>Principales Vías de acceso:</b> <?php echo $mov->viasdeacceso ;?></span></div>
            <div class='col-md-2'><b><span class="input-group-addon"> <b>Medio de transporte:</b> <?php echo $mov->medioTransporte ;?></span></div>
            <div class='col-md-2'><b><span class="input-group-addon"> <b>Tiempo aproximado a su Servicio:</b> <?php echo $mov->tiempoServicio;?></span></div>
            <div class='col-md-2'><b><span class="input-group-addon"> <b>Entre que calles:</b> <?php echo $mov->entreCalles;?></span></div>
          </div>
          <br>
          <div class='row'>
            
            <div class='col-md-2'><b><span class="input-group-addon"> <b>Color de la vivienda:</b> <?php echo $mov->color;?></span></div>
            <div class='col-md-2'><b><span class="input-group-addon"> <b>Color del portón:</b> <?php echo $mov->porton;?></span></div>
          </div>
          <br>
          <div class='row'>
            <div class='col-md-12'><b><span class="input-group-addon"> <b>DIRECCIÓN:</b> <?php echo $_SESSION['dirdir'];?></span></div>
          </div>
          <br>
        </div>
      </div>
    </div>
        
     
  <?php endforeach; ?>
