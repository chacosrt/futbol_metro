<?php if ($d->movements): ?>

    <?php foreach ($d->movements as $mov): 
        ?>
        <div class="col-md-2">
            <div class="box box-primary">
                <div class="box-header"><h3 class="box-title"><b><?php echo $mov->nombre;?></b></h3></div>
                

                <div class="box-body">
                    <!-- tabla con el concentrado-->
                    <form class="sub<?php echo $mov->dato;?>" id="sub<?php echo $mov->dato;?>">

                        <input type="hidden" value="<?php echo $mov->idMenu;?>" name="idMenu">
                        <input type="hidden" value="<?php echo $mov->nombre;?>" name="nombre">
                        <input type="hidden" value="<?php echo $mov->padre;?>" name="padre">
                        <input type="hidden" value="<?php echo $mov->dato;?>" name="dato">
                        <input type="hidden" value="<?php echo $mov->icono;?>" name="icono">
                        <input type="hidden" value="<?php echo $_SESSION['idUsuario'];?>" name="idUsuario">
                        <input type="hidden" id="idPermiso_<?php echo $mov->dato;?>" name='idPermiso'>

                    <ul class="todo-list ui-sortable">
                    <li>
                        <span class="handle ui-sortable-handle"><i class="fa fa-ellipsis-v"></i><i class="fa fa-ellipsis-v"></i></span>
                        <input type="checkbox" value="1" id="administrador_<?php echo $mov->dato;?>" name="administrador" onclick="accionadmin('<?php echo $mov->dato;?>')">
                        <span class="text">ADMINISTRADOR</span>
                    </li>
                    <li>
                        <span class="handle ui-sortable-handle"><i class="fa fa-ellipsis-v"></i><i class="fa fa-ellipsis-v"></i></span>
                        <input type="checkbox" value="1" id="consulta_<?php echo $mov->dato;?>" name="consulta" onclick="accionconsulta('<?php echo $mov->dato;?>')">
                        <span class="text">CONSULTA</span>
                    </li>
                    <li>
                        <span class="handle ui-sortable-handle"><i class="fa fa-ellipsis-v"></i><i class="fa fa-ellipsis-v"></i></span>
                        <input type="checkbox" value="1" id="agregar_<?php echo $mov->dato;?>" name="agregar">
                        <span class="text">Agregar</span>
                    </li>
                    <li>
                        <span class="handle ui-sortable-handle"><i class="fa fa-ellipsis-v"></i><i class="fa fa-ellipsis-v"></i></span>
                        <input type="checkbox" value="1" id="editar_<?php echo $mov->dato;?>" name="editar">
                        <span class="text">Editar</span>
                    </li>
                    <li>
                        <span class="handle ui-sortable-handle"><i class="fa fa-ellipsis-v"></i><i class="fa fa-ellipsis-v"></i></span>
                        <input type="checkbox" value="1" id="eliminar_<?php echo $mov->dato;?>" name="eliminar">
                        <span class="text">Eliminar</span>
                    </li>
                    <li>
                        <span class="handle ui-sortable-handle"><i class="fa fa-ellipsis-v"></i><i class="fa fa-ellipsis-v"></i></span>
                        <input type="checkbox" value="1" id="exportar_<?php echo $mov->dato;?>" name="exportar">
                        <span class="text">Exportar</span>
                    </li>
                    <li>
                        <span class="handle ui-sortable-handle"><i class="fa fa-ellipsis-v"></i><i class="fa fa-ellipsis-v"></i></span>
                        <input type="checkbox" value="1" id="especiales_<?php echo $mov->dato;?>" name="especiales">
                        <span class="text">Especiales</span>
                    </li>
                    </ul>
                </div>
                <div class="box-footer clearfix">
                    <div id="btnGuardo<?php echo $mov->dato;?>">
                    <a onclick="guardosubmenu('sub<?php echo $mov->dato;?>')" >
                    <button type="submit" class=" btn btn-primary" style="width: 100%" >Guardar permisos</button>
                    </a>
                    </div>
                    <div id="btnEdit<?php echo $mov->dato;?>" style="display:none">
                    <a onclick="editoubmenu('sub<?php echo $mov->dato;?>')" >
                    <button type="submit" class=" btn btn-warning" style="width: 100%" >Editar permisos</button>
                    </a>
                    </div>
                </div>
                </form>
            </div>
        </div>
    <?php endforeach; ?>
    
    <?php else: ?>
        <b>Ha seleccionado una sección que no tiene submodulos, dicha seccion a sido asignada al usuario</b>
    <?php endif; ?>

   