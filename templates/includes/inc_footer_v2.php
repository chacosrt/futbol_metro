


<footer class="main-footer">
    <div class="pull-right hidden-xs"> 
        <a data-toggle="modal" data-target="#eliminar" style="cursor: pointer"><img src="<?php echo IMAGES."/pa.png";?>" style="height:30px;" class="grow" style='cursor:pointer;'></a>
        <b>Version</b> 1.1 
    </div>
    <strong><?php echo get_sitename().' '.date('Y').' &copy; Todos los derechos reservados.'; ?></strong> 
</footer>

<div class="modal inmodal fade" id="eliminar" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">¿Cual es tu duda?</h4>
            </div>
            <div class="modal-body">
                <form action="controlador/catareasControlador.php" method="POST">
                <input type="hidden" name="accion" value="2">
                <input type="hidden" name="idArea" id="idArea">
                <div class="row">
                    <div class="col-md-12">
                        <input type="text" class="form-control" placeholder="Ingresa tu palabra o frase de lo que tienes dudas">
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
            </div>
            </form>
        </div>
    </div>
</div>

<script src="<?php echo BOWER.'jquery/dist/jquery.min.js'; ?>"></script>
<script src="<?php echo BOWER.'jquery-ui/jquery-ui.min.js'; ?>"></script>
<script src="<?php echo BOWER.'bootstrap/dist/js/bootstrap.min.js'; ?>"></script>
<script src="<?php echo BOWER.'raphael/raphael.min.js'; ?>"></script>
<script src="<?php echo BOWER.'morris.js/morris.min.js'; ?>"></script>
<script src="<?php echo BOWER.'jquery-sparkline/dist/jquery.sparkline.min.js'; ?>"></script>
<script src="<?php echo ASSETS.'plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'; ?>"></script>
<script src="<?php echo ASSETS.'plugins/jvectormap/jquery-jvectormap-world-mill-en.js'; ?>"></script>
<script src="<?php echo BOWER.'jquery-knob/dist/jquery.knob.min.js'; ?>"></script>
<script src="<?php echo BOWER.'moment/min/moment.min.js'; ?>"></script>
<script src="<?php echo BOWER.'bootstrap-daterangepicker/daterangepicker.js'; ?>"></script>
<script src="<?php echo BOWER.'bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js'; ?>"></script>
<script src="<?php echo ASSETS.'plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'; ?>"></script>
<script src="<?php echo BOWER.'jquery-slimscroll/jquery.slimscroll.min.js'; ?>"></script>
<script src="<?php echo BOWER.'fastclick/lib/fastclick.js'; ?>"></script>
<script src="<?php echo ASSETS.'dist/js/adminlte.min.js'; ?>"></script>

<script src="<?php echo BOWER.'datatables.net/js/jquery.dataTables.min.js'; ?>"></script>
<script src="<?php echo BOWER.'datatables.net-bs/js/dataTables.bootstrap.min.js'; ?>"></script>

<!-- toastr js -->
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<!-- waitme js -->
<script src="<?php echo PLUGINS.'waitme/waitMe.min.js'; ?>"></script>

<script src="<?php echo JS.$_SESSION['paraArchivo'].'.js'; ?>"></script>

<!--para botones de datatable-->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>

<!-- para la seccion de iconos -->
<script src="<?php echo ASSETS.'plugins/iconos/fontawesome-iconpicker.js'; ?>"></script>


</body>
</html>