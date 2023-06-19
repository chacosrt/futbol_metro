<?php if ($d->movements): ?>
    <?php foreach ($d->movements as $mov): ?>
        <div class="direct-chat-msg <?php if($mov->tipo == 2){echo "right";}?>">

            <div class="direct-chat-info clearfix"> <span class="direct-chat-name  <?php if($mov->tipo == 2){echo "pull-right";}else {echo "pull-left";}?>"><?php if($mov->tipo == 2){ echo "Administrador";}else{echo NOMBREUSUARIO;}?></span></div>
            <div class="direct-chat-text"> <?php echo $mov->respuesta;?> </div>
                      
        </div>
                   
    <?php endforeach; ?>
<?php else: ?>
    <b>No se registro ningun respuestas</b>
<?php endif; ?>
 

