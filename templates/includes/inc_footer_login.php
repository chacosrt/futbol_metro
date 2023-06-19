<script src="<?php echo BOWER.'jquery/dist/jquery.min.js'; ?>"></script>
<script src="<?php echo BOWER.'bootstrap/dist/js/bootstrap.min.js'; ?>"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
  
  // Validación del formulario al hacer submit
  (function () {
    'use strict'

    window.addEventListener('load', function () {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation')

      // Loop over them and prevent submission
      Array.prototype.filter.call(forms, function (form) {
        form.addEventListener('submit', function (event) {
          if (form.checkValidity() === false) {
            event.preventDefault()
            event.stopPropagation()
          }
          form.classList.add('was-validated')
        }, false)
      })
    }, false)
  }());
</script>
<script src="<?php echo JS.'home.js'; ?>"></script>
<script src="<?php echo PLUGINS.'toastr/toastr.min.js'; ?>"></script>
<script src="<?php echo PLUGINS.'waitme/waitMe.min.js'; ?>"></script>
</body>
</html>
