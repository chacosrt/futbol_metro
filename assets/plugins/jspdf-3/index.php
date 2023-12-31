<?php
$con  = new mysqli("localhost","root","","jspdf3");
$sql = "select * from person";
$query = $con->query($sql);
$data = array();
while($r=$query->fetch_object()){
  $data[] =$r;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>JsPDF Ejemplo con AutoTable - Evilnapsis</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

    <script src="jspdf/dist/jspdf.min.js"></script>
    <script src="jspdf.plugin.autotable.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse navbar-static-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="./">JSPDF</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="./">INICIO</a></li>
        <!--
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
        -->
      </ul>


    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">

<div class="row">
<div class="col-md-12">

<h1>Ejemplo de jsPDF #3</h1>
<br>
<p>En este ejemplo usamos tablas con AutoTable, PHP y MySQL.</p>
<button id="generar" class="btn btn-default">Generar PDF</button>
<br>
<br>
<p>Powered by <a href="http://evilnapsis.com/" target="_blank">Evilnapsis</a></p>
</div>

</div>

</div>

<script>
$("#generar").click(function(){
  var pdf = new jsPDF();
  pdf.text(20,20,"Mostrando una Tabla con JsPDF y el Plugin AutoTable");

  var columns = ["Id", "Nombre", "Domicilio", "Telefono","Email"];
  var data = [
  <?php foreach($data as $d):?>
      [<?php echo $d->id; ?>, "<?php echo $d->name." ".$d->lastname; ?>", "<?php echo $d->address; ?>", "<?php echo $d->phone; ?>","<?php echo $d->email; ?>"],
      <?php endforeach; ?>
  ];

  pdf.autoTable(columns,data,
    { margin:{ top: 25  }}
  );

  pdf.save('mipdf.pdf');

});
</script>
</body>
</html>