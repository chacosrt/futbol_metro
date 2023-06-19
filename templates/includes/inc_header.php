<!DOCTYPE html>
<html lang="<?php echo LANG;?>">
<head>
  <base href="<?php echo BASEPATH;?>">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo isset($d->title) ? $d->title.' - '.get_sitename() : 'Bienvenido - '.get_sitename(); ?></title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo BOWER.'bootstrap/dist/css/bootstrap.min.css'; ?>">
  <link rel="stylesheet" href="<?php echo BOWER.'font-awesome/css/font-awesome.min.css'; ?>">
  <link rel="stylesheet" href="<?php echo BOWER.'Ionicons/css/ionicons.min.css'; ?>">
  <link rel="stylesheet" href="<?php echo ASSETS.'dist/css/AdminLTE.min.css'; ?>">
  <link rel="stylesheet" href="<?php echo ASSETS.'dist/css/skins/_all-skins.min.css'; ?>">
  <link rel="stylesheet" href="<?php echo ASSETS.'css/chat.css'; ?>">
  <link rel="stylesheet" href="<?php echo BOWER.'morris.js/morris.css'; ?>">
  <link rel="stylesheet" href="<?php echo BOWER.'jvectormap/jquery-jvectormap.css'; ?>">
  <link rel="stylesheet" href="<?php echo BOWER.'bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css'; ?>">
  <link rel="stylesheet" href="<?php echo BOWER.'bootstrap-daterangepicker/daterangepicker.css'; ?>">
  <link rel="stylesheet" href="<?php echo ASSETS.'plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css'; ?>">
  <link rel="shortcut icon" type="image/png" href="<?php echo IMAGES."favicon.png"?>">
  <link rel="stylesheet" href="<?php echo BOWER.'datatables.net-bs/css/dataTables.bootstrap.min.css'; ?>">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <!-- para los pdf con jquery -->
  <!-- <script src="<?php echo PLUGINS."jspdf-3/dist/jspdf.min.js";?>"></script>local -->
  
  <script src="<?php echo ASSETS."plugins/pdfmake-master/build/pdfmake.js";?>"></script>
  <script src="<?php echo ASSETS."plugins/pdfmake-master/build/pdfmake.js.map";?>"></script>
  <script src="<?php echo ASSETS."plugins/pdfmake-master/build/pdfmake.min.js";?>"></script>
  <script src="<?php echo ASSETS."plugins/pdfmake-master/build/pdfmake.min.js.map";?>"></script>
  <script src="<?php echo ASSETS."plugins/pdfmake-master/build/vfs_fonts.js";?>"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.js"></script>
  


  <!-- para la lista de iconos -->
  
  <link href="<?php echo ASSETS.'plugins/iconos/fontawesome-iconpicker.min.css'; ?>" rel="stylesheet">


  <style>
  .grow:hover
        {
        -webkit-transform: scale(1.3);
        -ms-transform: scale(1.3);
        transform: scale(1.3);
        }
  </style>
  

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class=" skin-blue sidebar-mini wysihtml5-supported hold-transition skin-blue sidebar-mini">
  