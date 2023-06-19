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
  <link rel="stylesheet" href="<?php echo DIST.'css/AdminLTE.min.css'; ?>">
  <link rel="stylesheet" href="<?php echo PLUGINS.'iCheck/square/blue.css'; ?>">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="shortcut icon" type="image/png" href="<?php echo IMAGES."favicon.png"?>">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="stylesheet" href="<?php echo PLUGINS.'waitme/waitMe.min.css'; ?>">
  
</head>

<body class="hold-transition login-page bodyFon">