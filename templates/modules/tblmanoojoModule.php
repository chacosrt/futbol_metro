<?php if ($d->movements): ?>
    <?php foreach ($d->movements as $mov): ?>
        <table class="table table-striped">
            <tr>
                <th ><b>Télefono de casa:</b></th>
                <td ><?php echo $mov->telCasa;?></td>
                <th ><b>Celular:</b></th>
                <td><?php echo $mov->celular;?></td>
                <th ><b>Tipo de sangre:</b></th>
                <td><?php echo $mov->sangre;?></td>
            </tr>
            <tr>
                <th ><b>Contacto 1:</b></th>
                <td ><?php echo $mov->con1;?></td>
                <th ><b>Parentesco:</b></th>
                <td><?php echo $mov->conParen1;?></td>
                <th ><b>Télefono:</b></th>
                <td><?php echo $mov->conTel1;?></td>
            </tr>
            <tr>
                <th ><b>Celular:</b></th>
                <td ><?php echo $mov->conCel1;?></td>
                <th ><b>Contacto 2:</b></th>
                <td><?php echo $mov->conParen2;?></td>
                <th ><b>Télefono:</b></th>
                <td><?php echo $mov->conTel2;?></td>
            </tr>
            <tr>
                <th ><b>Celular:</b></th>
                <td ><?php echo $mov->conCel2;?></td>
                <th ><b>Contacto 3:</b></th>
                <td><?php echo $mov->con3;?></td>
                <th ><b>Parentesco:</b></th>
                <td><?php echo $mov->conParen3;?></td>
            </tr>
            <tr>
                <th ><b>Télefono:</b></th>
                <td ><?php echo $mov->conTel3;?></td>
                <th ><b>Celular:</b></th>
                <td><?php echo $mov->conCel3;?></td>
            </tr>
            <tr>
                <th colspan="3"><b>Alergias:</b></th>
                <td colspan="3"><?php echo $mov->alergias;?></td>
            </tr>
            <tr>
                <th colspan="3"><b>Enfermedades:</b></th>
                <td colspan="3"><?php echo $mov->enfermedades;?></td>
            </tr>
            <tr>
                <th colspan="3"><b>Medicamentos:</b></th>
                <td colspan="3"><?php echo $mov->medicamentos;?></td>
            </tr>
    </table>
    <?php endforeach; ?>
<?php else: ?>
    <tr><td colspan="9">No se encuentran registros</td></tr>
<?php endif; ?>
  