

<header class="main-header">

  <a href="index" class="logo">

    <span class="logo-mini">MRh</span>

    <span class="logo-lg"><b>App</b>Midas</span>

  </a>

  <nav class="navbar navbar-static-top">

    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button"><span class="sr-only">Toggle navigation</span></a>

    <div class="navbar-custom-menu">

      <ul class="nav navbar-nav">

        <li class="dropdown tasks-menu">

          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="hidden-xs"><?php echo date('d-m-Y H:m:s');?> </span> |  No.Usuario: <?php echo $_SESSION['nombre']; ?> | </a>

        </li>

        <li> <a id="btnSalidar" style="cursor: pointer;" > <i class="fa fa-sign-out"></i> Salir </a></li>

      </ul>

    </div>

  </nav>

</header>