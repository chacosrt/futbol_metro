

    <header id="page-topbar">
<div class="layout-width">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box horizontal-logo">
                <a id="regresoInicio" href="<?php echo URL.'dash/index';?>" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="../assets/images/logo.png" alt="" height="50">
                    </span>
                    <span class="logo-lg">
                        <img src="../assets/images/logo.png" alt="" height="50">
                    </span>
                </a>

                <a id="regresoInicio" href="" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="../assets/images/logo.png" alt="" height="50">
                    </span>
                    <span class="logo-lg">
                        <img src="../assets/images/logo.png" alt="" height="50">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger" id="topnav-hamburger-icon">
                <span class="hamburger-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </button>
        </div>

        <div class="d-flex align-items-center">

            <div class="ms-1 header-item d-none d-sm-flex">
                <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" data-toggle="fullscreen">
                    <i class='bx bx-fullscreen fs-22'></i>
                </button>
            </div>

            <div class="ms-1 header-item d-none d-sm-flex">
                <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode">
                    <i class='bx bx-moon fs-22'></i>
                </button>
            </div>

            <div class="dropdown ms-sm-3 header-item topbar-user">
                <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="d-flex align-items-center">
                        <img class="rounded-circle header-profile-user" src="../assets/images/users/avatar-3.jpg" alt="Header Avatar">
                        <span class="text-start ms-xl-2">
                            <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text usuario"></span>
                            <span class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text roles"></span>
                        </span>
                    </span>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <h6 class="dropdown-header bienvenido">Bienvenido</h6>
                    <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Perfil</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="pages-profile-settings.html"><span class="badge bg-soft-success text-success mt-1 float-end">New</span><i class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Configuración</span></a>
                    <a class="dropdown-item" href="auth-lockscreen-basic.html"><i class="mdi mdi-lock text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Lock screen</span></a>
                    <a class="dropdown-item salir" href="javascript:salgosistema()"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Cerrar Sesión</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
</header>

    <!-- ========== App Menu ========== -->
    <div class="app-menu navbar-menu">
        <!-- LOGO -->
        <div class="navbar-brand-box">
            <!-- Dark Logo-->
            <a href="index.html" class="logo logo-dark">
                <span class="logo-sm">
                    <img src="../assets/images/logo.png" alt="" height="22">
                </span>
                <span class="logo-lg">
                    <img src="../assets/images/logo.png" alt="" height="60">
                </span>
            </a>
            <!-- Light Logo-->
            <a href="index.html" class="logo logo-light">
                <span class="logo-sm">
                    <img src="../assets/images/logo.png" alt="" height="22">
                </span>
                <span class="logo-lg">
                    <img src="../assets/images/logo.png" alt="" height="60">
                </span>
            </a>
            <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                <i class="ri-record-circle-line"></i>
            </button>
        </div>

        <div id="scrollbar">
            <div class="container-fluid">

                <div id="two-column-menu">
                </div>
                <ul class="navbar-nav" id="navbar-nav">
                    <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                    <li class="nav-item">
                        <a id = "link-torneos" class="nav-link menu-link spinner-link" href="<?php echo URL.'torneos/index';?>"  role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                            <svg width="15" height="15" viewBox="0 0 24 24" data-v-8dea8908="" style="--sx: 1; --sy: 1; --r: 0deg;"><path d="M18 2C17.1 2 16 3 16 4H8C8 3 6.9 2 6 2H2V11C2 12 3 13 4 13H6.2C6.6 15 7.9 16.7 11 17V19.08C8 19.54 8 22 8 22H16C16 22 16 19.54 13 19.08V17C16.1 16.7 17.4 15 17.8 13H20C21 13 22 12 22 11V2H18M6 11H4V4H6V11M20 11H18V4H20V11Z" data-v-8dea8908=""></path></svg> 
                            <span >Torneos</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a id = "link-equipos" class="nav-link menu-link spinner-link" href="<?php echo URL.'equipos/index';?>" role="button" aria-expanded="false" aria-controls="sidebarApps">
                            <svg width="15" height="15" viewBox="0 0 24 24" data-v-8dea8908="" style="--sx: 1; --sy: 1; --r: 0deg;"><path d="M4,4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4H4M4,6H11V8.13C9.24,8.59 8,10.18 8,12C8,13.82 9.24,15.41 11,15.87V18H4V16H7V8H4V6M13,6H20V8H17V16H20V18H13V15.87C14.76,15.41 16,13.82 16,12C16,10.18 14.76,8.59 13,8.13V6M4,10H5V14H4V10M19,10H20V14H19V10M13,10.27C13.62,10.63 14,11.29 14,12C14,12.71 13.62,13.37 13,13.73V10.27M11,10.27V13.73C10.38,13.37 10,12.71 10,12C10,11.29 10.38,10.63 11,10.27Z" data-v-8dea8908=""></path></svg>
                            <span>Equipos</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a id = "link-jugadores" class="nav-link menu-link spinner-link" href="<?php echo URL.'jugadores/index';?>" role="button" aria-expanded="false" aria-controls="sidebarApps">
                            <svg width="15" height="15" viewBox="0 0 24 24" data-v-8dea8908="" style="--sx: 1; --sy: 1; --r: 0deg;"><path d="M12,5.5A3.5,3.5 0 0,1 15.5,9A3.5,3.5 0 0,1 12,12.5A3.5,3.5 0 0,1 8.5,9A3.5,3.5 0 0,1 12,5.5M5,8C5.56,8 6.08,8.15 6.53,8.42C6.38,9.85 6.8,11.27 7.66,12.38C7.16,13.34 6.16,14 5,14A3,3 0 0,1 2,11A3,3 0 0,1 5,8M19,8A3,3 0 0,1 22,11A3,3 0 0,1 19,14C17.84,14 16.84,13.34 16.34,12.38C17.2,11.27 17.62,9.85 17.47,8.42C17.92,8.15 18.44,8 19,8M5.5,18.25C5.5,16.18 8.41,14.5 12,14.5C15.59,14.5 18.5,16.18 18.5,18.25V20H5.5V18.25M0,20V18.5C0,17.11 1.89,15.94 4.45,15.6C3.86,16.28 3.5,17.22 3.5,18.25V20H0M24,20H20.5V18.25C20.5,17.22 20.14,16.28 19.55,15.6C22.11,15.94 24,17.11 24,18.5V20Z" data-v-8dea8908=""></path></svg>
                            <span>Jugadores</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a id = "link-partidos" class="nav-link menu-link spinner-link" href="<?php echo URL.'partidos/index';?>" role="button" aria-expanded="false" aria-controls="sidebarApps">
                            <!-- <span width="15" height="15" class="ico-sprite" style="background-image:url(../assets/images/partidos_ico.png)"></span> -->
                            <svg width="20" height="20" viewBox="30 0 20 15" style="--sx: 1; --sy: 1; --r: 0deg;" xmlns="http://www.w3.org/2000/svg">
                                <!-- Uso de la etiqueta <image> para incluir una imagen PNG como icono -->
                                <image href="../assets/images/partidos_ico.png"  />
                            </svg>
                            <span>Partidos / Resultados</span>
                        </a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarIcons" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarIcons">
                                <svg class="svg-icon" viewBox="0 0 20 20">
                                    <path d="M17.431,2.156h-3.715c-0.228,0-0.413,0.186-0.413,0.413v6.973h-2.89V6.687c0-0.229-0.186-0.413-0.413-0.413H6.285c-0.228,0-0.413,0.184-0.413,0.413v6.388H2.569c-0.227,0-0.413,0.187-0.413,0.413v3.942c0,0.228,0.186,0.413,0.413,0.413h14.862c0.228,0,0.413-0.186,0.413-0.413V2.569C17.844,2.342,17.658,2.156,17.431,2.156 M5.872,17.019h-2.89v-3.117h2.89V17.019zM9.587,17.019h-2.89V7.1h2.89V17.019z M13.303,17.019h-2.89v-6.651h2.89V17.019z M17.019,17.019h-2.891V2.982h2.891V17.019z"></path>
                                </svg> 
                                <span data-key="t-icons">Estadisticas</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarIcons">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="<?php echo URL.'tabla/index';?>" class="nav-link menu-link spinner-link" data-key="t-remix">
                                            <svg width="20" height="20" viewBox="30 0 20 15" style="--sx: 1; --sy: 1; --r: 0deg;" xmlns="http://www.w3.org/2000/svg">
                                                <!-- Uso de la etiqueta <image> para incluir una imagen PNG como icono -->
                                                <image href="../assets/images/tabla_ico.png"  />
                                            </svg>
                                            <span>Tabla de Posiciones</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="icons-boxicons.html" class="nav-link" data-key="t-boxicons">Boxicons</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="icons-materialdesign.html" class="nav-link" data-key="t-material-design">Material Design</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="icons-lineawesome.html" class="nav-link" data-key="t-line-awesome">Line Awesome</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="icons-feather.html" class="nav-link" data-key="t-feather">Feather</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="icons-crypto.html" class="nav-link"> <span data-key="t-crypto-svg">Crypto SVG</span></a>
                                    </li>
                                </ul>
                            </div>
                        </li> <!-- end Dashboard Menu -->
                </ul>
            </div>
            <!-- Sidebar -->
        </div>

        <div class="sidebar-background"></div>
    </div>
    <!-- Left Sidebar End -->
    <!-- Vertical Overlay-->
    <div class="vertical-overlay"></div>

