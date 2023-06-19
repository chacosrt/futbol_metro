
<div class="row">
    <?php foreach ($d->movements as $mov): ?>
      
    <div class="col-md-4">
        <div class="box box-success ">
            <div class="box-header with-border">
                <h3 class="box-title"><?php echo $mov->pregunta;?></h3>
            </div>
            <div class="box-body"><?php echo $mov->respuesta;?></div>
        </div>
    </div>
    
    <?php endforeach; ?>
</div>
