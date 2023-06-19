
        <?php if ($d->movements): ?>
            <?php foreach ($d->movements as $mov): ?>
                <div class="post">
                    <table class="table table-striped">
                            <tr>
                                <th colspan=""><b>Nombre del puesto:</b></th>
                                <td colspan="5"><?php echo $mov->nombre;?></td>
                            </tr>
                            <tr>
                                <th colspan=""><b>Actividades:</b></th>
                                <td colspan="5"><?php echo $mov->actividades;?></td>
                                
                            </tr>
                            <tr>
                                <th ><b>Area:</b></th>
                                <td><?php echo $mov->nombreArea;?></td>
                                <th ><b>Ubicación:</b></th>
                                <td><?php echo $mov->nombreUbicacion;?></td>
                                <th ><b>Jefe inmediato:</b></th>
                                <td><?php echo $mov->nombrejefe." ".$mov->apePaternojefe." ".$mov->apeMaternojefe;?></td>
                            </tr>
                            <tr>
                                <th ><b>Sueldo:</b></th>
                                <td><?php echo $mov->sueldo;?></td>
                                <th ><b> Justificación del puesto:</b></th>
                                <td><?php echo $mov->justificacion;?></td>
                                <th ><b>Causa del puesto:</b></th>
                                <td><?php echo $mov->causa;?></td>
                            </tr>
                            <tr>
                                <th ><b>Tipo de puesto:</b></th>
                                <td><?php echo $mov->ttipo;?></td>
                                <th ><b>Supervisa Personal:</b></th>
                                <td><?php if($mov->supervisa == 0 ) {echo "NO";} else{ echo "SI";}?></td>
                                <th ><b>Número de personas que supervisa:</b></th>
                                <td><?php echo $mov->noSupervisa;?></td>
                            </tr>
                            <tr>
                                <th ><b>Estudios minimos del puesto:</b></th>
                                <td><?php echo $mov->estudios;?></td>
                                <th ><b>Conocimientos:</b></th>
                                <td><?php echo $mov->conocimientos;?></td>
                            </tr>
                            <tr>
                                <th ><b>Experiencia:</b></th>
                                <td><?php echo $mov->experiencia;?></td>
                                <th ><b>Habilidades:</b></th>
                                <td><?php echo $mov->habilidades;?></td>
                                <th ><b>Rango de Edad:</b></th>
                                <td><?php echo $mov->rangoEdad;?></td>
                            </tr>
                            <tr>
                                <th ><b>Beneficios del puesto:</b></th>
                                <td><?php echo $mov->beneficios;?></td>
                                <th ><b>Horario:</b></th>
                                <td><?php echo $mov->horario;?></td>
                                <th ><b>Riesgo:</b></th>
                                <td><?php echo $mov->nomRiesgo;?></td>
                            </tr>
                            <tr>
                                <th colspan="2"><b>Caracteristicas Especificas del puesto:</b></th>
                                <td colspan="2"><?php echo $mov->caracteristicaEspecifica;?></td>
                                
                            </tr>
                            
                    </table>
                </div>
                
                             
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="9">No se encuentran registros</td></tr>
        <?php endif; ?>
   