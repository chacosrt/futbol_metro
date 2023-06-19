<ul class="todo-list">
    <?php if ($d->movements): ?>
        <?php foreach ($d->movements as $mov): ?>                  
                  <li>
                    <span class="handle"> <i class="fa fa-ellipsis-v"></i> <i class="fa fa-ellipsis-v"></i>     </span>
                    <input type="checkbox" value="">
                    <span class="text"><?php echo $mov->mensaje?></span>
                    <small class="label label-primary"><i class="fa fa-clock-o"></i><?php echo $mov->fechaCrea?> </small>
                    <div class="tools"></div>
                  </li>
        <?php endforeach; ?>
    <?php else: ?>
        <li>
            <span class="handle"> <i class="fa fa-ellipsis-v"></i> <i class="fa fa-ellipsis-v"></i>     </span>
            <input type="checkbox" value="">
            <span class="text">No tienes alertas pendientes de leer</span>
            <small class="label label-primary"><i class="fa fa-clock-o"></i> fecha completa </small>
           
        </li>
    <?php endif; ?>
</ul>
      