
        <?php if ($d->movements): ?>
            <?php foreach ($d->movements as $mov): 
                $nombreCom = $mov->nombreCandidato." ".$mov->apePaterno." ".$mov->apeMaterno;
            ?>
                <a href='<?php echo CONTENEDOR."estudios/estudioNum_".$mov->idEstudio."/".$mov->archivo; ?>' style='cursor:pointer' target='_blank'>
                    <i class='fa fa-file'></i> <?php echo $mov->archivo;?>
                </a><br>

            <?php endforeach; ?>
        <?php else: ?>
            <b>No hay archivos adjuntos</b><br>
        <?php endif; ?>
    