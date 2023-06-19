//////////////////////////////////////////////////////////////////////////////////
          //SECCION PARA MODALS Y FUNCION DE JAVASCRIPT
          //////////////////////////////////////////////////////////////////////////////////
          
          /* modal para eliminar */
          $('#eliminar').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var recipient = button.data('unoo');
            var modal = $(this);
            modal.find('.modal-body #______').val(recipient);
          });
          
          /* modal para editar */
          $('#editar').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var valor = button.data('unoo');
            var modal = $(this);
            modal.find('.modal-body #_____').val(valor);
            data        = new FormData($('._______________').get(0))
            var wrapper = $('.________________');
            //data.push(['valor',valor]);
            $.ajax({
              url: '$nomcarpeta/______________',
              type: 'POST',
              dataType: 'json',
              contentType: false,
              processData: false,
              cache: false,
              data: data,
              /* con esta linea mostramos el cargador de los formularios */
              beforeSend: function() { wrapper.waitMe(); }
            }).done(function(res) {
              if(res.status === 200) {  
                wrapper.html(res.data); 
                //qactualizamos la seccion de contenido
                _______();
              } 
              else { 
                toastr.error(res.msg, '¡Upss!');
                wrapper.html('');
              }
            })
            .fail(function(err) {
              toastr.error('Hubo un error en la petición', '¡Upss!');
              wrapper.html('');
            })
            .always(function() {
              wrapper.waitMe('hide');
            })
          });
          //////////////////////////////////////////////////////////////////////////////////

          //////////////////////////////////////////////////////////////////////////////////
          // SECCION PARA FUNCION QUE INICIARAN A CARGAR EL DOCUMENTO                    ///
          //////////////////////////////////////////////////////////////////////////////////
          
          $(document).ready(function() {

          /* opciones generales del toaster */
          toastr.options = { 'closeButton': true, 'debug': false, 'newestOnTop': true, 'progressBar': true, 'positionClass': 'toast-bottom-full-width', 'preventDuplicates': true, 'onclick': null,  'showDuration': '200', 'hideDuration': '1000', 'timeOut': '2000', 'extendedTimeOut': '1000', 'showEasing': 'swing', 'hideEasing': 'linear', 'showMethod': 'fadeIn', 'hideMethod': 'fadeOut'}
          
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
        
          //////////////////////////////////////////////////////////////////////////////////
          //SECCION DE FUNCIONES Y CARGAS
          //////////////////////////////////////////////////////////////////////////////////
        
          /* cargamos el concentrado de la secciones */
          _________();
          function _______________() {
            /* seleccionamos el div en que vamos a modificar los valores */
            var wrapper = $('.tblmenus');
            $.ajax({
              url: '$nomcarpeta/________________________',
              type: 'POST',
              dataType: 'json',
              contentType: false,
              processData: false,
              cache: false,
              /* con esta linea mostramos el cargador de los formularios */
              beforeSend: function() { wrapper.waitMe();  }
            }).done(function(res) {
              if(res.status === 200) {  wrapper.html(res.data); } 
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
          //////////////////////////////////////////////////////////////////////////////////
        
          //////////////////////////////////////////////////////////////////////////////////
          //SECCION PARA EL ENVIO DE FORMULARIO Y/O ELEMENTOS
          //////////////////////////////////////////////////////////////////////////////////
        
          /* SECCION PARA LA SOLICITUD DE PUESTO */
          /* generamos la nueva seccion */
          $('body').on('submit', '._______', ___________);
          function ___________(event) {
            event.preventDefault();
            var form    = $('.____________');
            data        = new FormData(form.get(0));
            __________ = $('#__________').val();
            // Validacion campo form
            if(________ === '' ) {
              toastr.error('______________', '¡Upss!');
              return;
            }
            // AJAX
            $.ajax({
              url: '$nomcarpeta/_______________',
              type: 'post',
              dataType: 'json',
              contentType: false,
              processData: false,
              cache: false,
              data : data,
              beforeSend: function() { form.waitMe(); }
            }).done(function(res) {
              if(res.status === 200) {
                toastr.success(res.msg, '¡Bien!');
                form.trigger('reset');
                $('#___________').modal('hide');
                ____________();
              } 
              else { toastr.error(res.msg, '¡Upss!'); }
            }).fail(function(err) {
              toastr.error('Hubo un error en la petición', '¡Upss!');
            }).always(function() {
              form.waitMe('hide');
            })
          }
          //////////////////////////////////////////////////////////////////////////////////
        });