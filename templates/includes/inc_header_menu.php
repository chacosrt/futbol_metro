<aside class="main-sidebar">
    
    <section class="sidebar">

      <!-- imagen y nombre de usuario -->
      <div class="user-panel">
        <div class="pull-left image"> <img src="<?php echo IMAGES."favicon.png";?>" class="img-circle" alt="User Image"> </div>
        <div class="pull-left info">  <p><?php echo $_SESSION['usuario'];?></p> </div>
      </div>
    
      <!-- valor para consulta y creacion de menu -->
      <form class="conmenu"><input type="hidden" id="idUsuarioMenu" value="<?php echo IDUSUARIO;?>"></form>

      <!-- inicia menu -->
      <ul class="sidebar-menu tree" data-widget="tree">
        <li><a href="panel/"><i class="fa fa-home"></i> <span>Inicio </span></a></li>
        
        <!---seccion para clientes-->
        <?php if($_SESSION['idCliente'] != NULL ){?>
        <li class="header">Clientes</li>
        <li><a href="estudios/clientes"><i class="fa fa-edit"></i> <span>Estudios</span></a></li>
        <li><a href='soporte'><i class='fa fa-cogs'></i> <span>Soporte</span></a></li>
        <?php }?>

        <?php if( $_SESSION['idAnalista'] != NULL && $_SESSION['supervisor'] == NULL && $_SESSION['idUsuario'] != 88 ){?>
        <li class="header">Coodinacion</li>
        <li><a href="estudios/asignacion"><i class="fa fa-edit"></i> <span>Asignación de Estudios</span></a></li>
        <li><a href="estudios/seguimientocoordinador"><i class="fa fa-binoculars"></i> <span>Seguimiento</span></a></li>
        <!--li><a href="#"><i class="fa fa-line-chart"></i> <span>Reportes</span></a></!--li-->
        <li><a href="soporte"><i class="fa fa-cogs"></i> <span>Soporte</span></a></li>
        <?php }?>

        <?php if( $_SESSION['idUsuario'] == 88){?>
        <li class="header">Ejecutivos</li>
        <li><a href="estudios/seejecutivo"><i class="fa fa-binoculars"></i> <span>Seguimiento</span></a></li>
        <!--li><a href="#"><i class="fa fa-line-chart"></i> <span>Reportes</span></a></!--li-->
        <li><a href="soporte"><i class="fa fa-cogs"></i> <span>Soporte</span></a></li>
        <?php }?>

        <?php if( $_SESSION['idAnalista'] != NULL && $_SESSION['supervisor'] != NULL ){?>
        <li class="header">Ejecutivos</li>
        <li><a href="estudios/seejecutivo"><i class="fa fa-binoculars"></i> <span>Seguimiento</span></a></li>
        <!--li><a href="#"><i class="fa fa-line-chart"></i> <span>Reportes</span></a></!--li-->
        <li><a href="soporte"><i class="fa fa-cogs"></i> <span>Soporte</span></a></li>
        <?php }?>

        <?php if( $_SESSION['idEncuestadores'] != NULL && $_SESSION['supervisor'] == NULL && $_SESSION['idAnalista'] == NULL){?>
        <li class="header">Encuestadores</li>
        <li><a href="estudios/seencuestadores"><i class="fa fa-binoculars"></i> <span>Seguimiento</span></a></li>
        <!--li><a href="#"><i class="fa fa-line-chart"></i> <span>Reportes</span></a></!--li-->
        <li><a href="soporte"><i class="fa fa-cogs"></i> <span>Soporte</span></a></li>
        <?php }?>
        
        <!-- seccion de soporte tecnico -->
        
        
        <?php if( $_SESSION['admini'] != NULL){?>

        <li class="header">Clientes</li>
        <li><a href="estudios/clientes"><i class="fa fa-edit"></i> <span>Estudios</span></a></li>
        
        <li class="header">Coordinador</li>
        <li><a href="estudios/asignacion"><i class="fa fa-edit"></i> <span>Asignación de Estudios</span></a></li>
        <li><a href="estudios/seguimientocoordinador"><i class="fa fa-binoculars"></i> <span>Seguimiento</span></a></li>

        <li class="header">Ejecutivo</li>
        <li><a href="estudios/seejecutivo"><i class="fa fa-binoculars"></i> <span>Seguimiento</span></a></li>

        <li class="header">Encuestadores</li>
        <li><a href="estudios/seencuestadores"><i class="fa fa-binoculars"></i> <span>Seguimiento</span></a></li>


        <li class="header">Administrador</li>
        <li><a href="estudios/concentrado"><i class="fa fa-database"></i> <span>Concentrado Estudios</span></a></li>
        <li><a href="analista"><i class="fa fa-user"></i> <span>Analistas</span></a></li>
        <li><a href="clientes"><i class="fa fa-link"></i> <span>Clientes</span></a></li>
        <li><a href="encuestadores"><i class="fa fa-user-secret"></i> <span>Encuestadores</span></a></li>
        <li><a href="avisos"><i class="fa fa-comments-o"></i> <span>Avisos</span></a></li>
        
        <li><a href='soporte/admin'><i class='fa fa-cogs'></i> <span>Soporte</span></a></li>
        <li><a href='portada'><i class='fa fa-slideshare'></i> <span>Portada</span></a></li>

        <li><a href='usuarios'><i class='fa fa-address-book-o'></i> <span>Usuarios</span></a></li>
        <li class='treeview'>
        <a style='cursor:pointer'><i class='fa fa-search'></i> <span>Logs</span><span class='pull-right-container'><i class='fa fa-angle-left pull-right'></i></span></a>
        <ul class='treeview-menu'>
        <li><a href='log/acceso'>Acceso</a></li>
        <li><a href='log/actividades'>Actividades</a></li>
          </ul>
        <?php }?>
       
      
    </section>
    
  </aside>