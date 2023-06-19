<div class="box box-primary">
        <div class="box-header ui-sortable-handle" style="cursor: move; text-right"><h3 class="box-title">REFERENCIAS LABORALES | INFORMACIÓN LABORAL </h3> </div>
        <div class="box-body">

        <table class="table table-bordered table-striped">
            
            <tbody>
                <?php if ($d->movements): ?>
                    <?php foreach ($d->movements as $mov): ?>
                      <tr>
                        <td><b>Empresa:</b></td>
                        <td><?php echo $mov->empresa;?></td>
                        <td><b>Giro:</b></td>
                        <td><?php echo $mov->giro;?></td>
                        <td><b>Dirección:</b></td>
                        <td colspan='2'><?php echo $mov->direccion;?></td>

                      </tr>
                      <tr>
                        <td><b>Teléfono:</b> <?php echo $mov->telefono;?></td>
                        <td><b>Fecha Ingreso:</b></td>
                        <td><?php echo $mov->fechaIngreso;?></td>
                        <td><b>Fecha Egreso:</b></td>
                        <td><?php echo $mov->fechaEgreso;?></td>
                      </tr>
                      <tr>
                        <td><b>Puesto Ocupado:</b></td>
                        <td><?php echo $mov->puesto;?></td>
                        <td><b>Area:</b> <?php echo $mov->area;?></td>
                        <td><b>Salario:</b></td>
                        <td><?php echo $mov->salario;?></td>

                      </tr>
                      <tr>
                        <td><b>Motivo de salida:</b></td>
                        <td><?php echo $mov->motivoSalida;?></td>
                        <td><b>Quien proporciona la información:</b></td>
                        <td><?php echo $mov->quienProporciono;?></td>
                        <td><b>Puesto:</b><?php echo $mov->puestoProporciono;?></td>
                      </tr>
                      <tr>
                         <td><b>Calificación(Desempeño) del 1 al 10:</b></td>
                        <td><?php echo $mov->calificacion;?></td>
                        <td><b>Sabe usted si el Candidato interpuso alguna Demanda?:</b></td>
                        <td><?php echo $mov->demanda;?></td>
                        <td><b>Lo volvería a contratar: </b></td>
                        <td><?php echo $mov->volveria;?></td>

                      </tr>
                      <tr>
                          <td><b>¿Por qué?:</b> <?php echo $mov->porque;?></td>
                        <td><b>El candidato es:</b></td>
                        <td><?php echo $mov->candidatoes;?></td>
                        <td colspan="4"><b>El candidato tiene periodos Inactivos</b> <?php echo $mov->periodosInactivo;?></td>
                      </tr>
                      <tr><td colspan="7" style="width:auto; padding: 5px 10px; text-align: center;"><b>Observación</b> <?php echo $mov->observaciones;?></td></tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr><td colspan="7">No se encuentran registros</td></tr>
                <?php endif; ?>
            </tbody>

        </table>
    </div>
</div>
