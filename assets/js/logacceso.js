/* para los datatable */
$(function () {
  $('#example1').DataTable()
  $('#example2').DataTable({ 'paging'      : true,'lengthChange': false,'searching'   : false, 'ordering'    : true, 'info'        : true, 'autoWidth'   : false })
})

$(document).ready(function() {


  /* boton de salida */
  $('#btnSalidar').on('click', salgosistema);/* con eso hacemos que solo funcione el boton que se seleccione */
  function salgosistema(event) {
    $.ajax({
      url: 'salir/salgo',
      type: 'post',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,

    }).done(function(res) { if(res.status === 200) { window.location='index.php';  } })
    .fail(function(err) { toastr.error('Hubo un error en la petición', '¡Upss!'); })
  };

  /* obtenemos el concentrado de acceso */
  cargaHistorial();
  function cargaHistorial() {
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.tblHistoAcceso');

    $.ajax({
      url: 'log/cargaHistorial',
      type: 'POST',
      dataType: 'json',
      cache: false,
      
      /* con esta linea mostramos el cargador de los formularios */
      beforeSend: function() { wrapper.waitMe(); }

    }).done(function(res) {
      
      if(res.status === 200) { wrapper.html(res.data); } 
      
      else { 
        toastr.error(res.msg, '¡Upss!');
        wrapper.html('');
      }

    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
      wrapper.html('');

    }).always(function() {
      wrapper.waitMe('hide');
    })
  }

  
  
});