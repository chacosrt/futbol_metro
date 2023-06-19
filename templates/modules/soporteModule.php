<?php if ($d->movements): ?>
    <?php foreach ($d->movements as $mov): ?>
        <!-- formulario para obtener el id del soporte y ponerlo en modulo -->
        <div class="row">
            <div class="col-md-12">
                <div class="box box-warning  direct-chat-warning">
                    <div class="box-header with-border"><h3 class="box-title">Numero de ticket: <?php echo $mov->idSoporte;?></h3></div>
                    
                    <form class="formiddeteccion"><input type="hidden" name="idSoporteResa" id="idSoporteResa" value="<?php echo $mov->idSoporte;?>"></form>

                    <div class="box-body">

                        <div class="direct-chat-msg ">
                            <div class="direct-chat-info clearfix">
                                <span class="direct-chat-name pull-left"><?php echo NOMBREUSUARIO;?></span>
                                <span class="direct-chat-timestamp pull-right"><?php echo $mov->fechaCrea;?></span>
                            </div>
                            <div class="direct-chat-text direct-chat-primary"><b><?php echo $mov->titulo;?></b>: <?php echo $mov->descripcion;?></div>
                        </div>

                        <!-- aqui van las respuestas por parte del admin o usuario -->
                        <div class="respuesabierta"></div>

                    </div>

                    <div class="box-footer">
                        <form class="respondeMensajeUsuario" >
                            <div class="input-group">
                                <input type="hidden" name="idSoporte" id="idSoporte" value="<?php echo $mov->idSoporte;?>">
                                <input type="text" name="mensjae" id="mensjae" placeholder="Responder ticket" class="form-control">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-primary btn-flat">Responder</button>
                                </span>
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-warning btn-flat" data-toggle='modal' data-unoo="<?php echo $mov->idSoporte; ?>" data-target='#cancelar'>Eliminar</button>
                                </span>
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-danger btn-flat" data-toggle='modal' data-dos="<?php echo $mov->idSoporte;?>" data-target='#terminartic'>Terminar</button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
    <?php endforeach; ?>
<?php else: ?>
    <div class="row"><div class="col-md-12"><div class="alert alert-warning text-center"><b>No cuentas con ningun ticket de soporte abierto</b></div></div></div>
<?php endif; ?>


