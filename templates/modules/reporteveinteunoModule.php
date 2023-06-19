
    
      
                <?php if ($d->movements): ?>
                    <?php foreach ($d->movements as $mov): ?>
                      <img src="<?php echo "https://midas.midasrh.com.mx/assets/contenedor/estudios/estudioNum_".$mov->idEstudio."/".$mov->archivo;?>" alt=""><br>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr><td colspan="9">No se encuentran registros</td></tr>
                <?php endif; ?>
           
        
     
  