<?php if ($d->movements): ?>
    <?php foreach ($d->movements as $mov): ?>

        <div class="direct-chat-msg <?php if($mov->tipo == 1){echo "right";}?>">
        
            <div class="direct-chat-info clearfix">
                <span class="direct-chat-name <?php if($mov->tipo == 1){echo "pull-right";}?>"><?php if($mov->tipo == 2){echo "Administrador";}else{echo NOMBREUSUARIO;}?></span>
                <span class="direct-chat-timestamp <?php if($mov->tipo == 1){echo "pull-left";} else{echo "pull-right";}?>"><?php echo $mov->fechaCrea?></span>
            </div>

            <div class="direct-chat-text"><?php echo $mov->respuesta?></div>
        </div>

    <?php endforeach; ?>
<?php else: ?>
    <div class="row"><div class="col-md-12"><div class="alert alert-warning text-center"><b>No cuentas con ninguna respuesta, en breve atenderemos su solicitud.</b></div></div></div>
<?php endif; ?>