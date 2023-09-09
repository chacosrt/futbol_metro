

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
                            <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text"><?php echo $_SESSION["nombre"]?></span>
                            <span class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text"><?php echo $_SESSION["roles"]?></span>
                        </span>
                    </span>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <h6 class="dropdown-header">Bienvenido <?php echo $_SESSION["nombre"]?></h6>
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
                        <a class="nav-link menu-link" href="<?php echo URL.'torneos/index';?>"  role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                            <svg width="15" height="15" viewBox="0 0 24 24" data-v-8dea8908="" style="--sx: 1; --sy: 1; --r: 0deg;"><path d="M18 2C17.1 2 16 3 16 4H8C8 3 6.9 2 6 2H2V11C2 12 3 13 4 13H6.2C6.6 15 7.9 16.7 11 17V19.08C8 19.54 8 22 8 22H16C16 22 16 19.54 13 19.08V17C16.1 16.7 17.4 15 17.8 13H20C21 13 22 12 22 11V2H18M6 11H4V4H6V11M20 11H18V4H20V11Z" data-v-8dea8908=""></path></svg> 
                            <span >Torneos</span>
                        </a>
                    </li> <!-- end Dashboard Menu -->
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="<?php echo URL.'equipos/index';?>" role="button" aria-expanded="false" aria-controls="sidebarApps">
                            <svg width="15" height="15" viewBox="0 0 24 24" data-v-8dea8908="" style="--sx: 1; --sy: 1; --r: 0deg;"><path d="M4,4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4H4M4,6H11V8.13C9.24,8.59 8,10.18 8,12C8,13.82 9.24,15.41 11,15.87V18H4V16H7V8H4V6M13,6H20V8H17V16H20V18H13V15.87C14.76,15.41 16,13.82 16,12C16,10.18 14.76,8.59 13,8.13V6M4,10H5V14H4V10M19,10H20V14H19V10M13,10.27C13.62,10.63 14,11.29 14,12C14,12.71 13.62,13.37 13,13.73V10.27M11,10.27V13.73C10.38,13.37 10,12.71 10,12C10,11.29 10.38,10.63 11,10.27Z" data-v-8dea8908=""></path></svg>
                            <span>Equipos</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                            <i class="las la-columns"></i> <span data-key="t-layouts">Layouts</span> <span class="badge badge-pill bg-danger" data-key="t-hot">Hot</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarLayouts">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="layouts-horizontal.html" target="_blank" class="nav-link" data-key="t-horizontal">Horizontal</a>
                                </li>
                                <li class="nav-item">
                                    <a href="layouts-detached.html" target="_blank" class="nav-link" data-key="t-detached">Detached</a>
                                </li>
                                <li class="nav-item">
                                    <a href="layouts-two-column.html" target="_blank" class="nav-link" data-key="t-two-column">Two Column</a>
                                </li>
                                <li class="nav-item">
                                    <a href="layouts-vertical-hovered.html" target="_blank" class="nav-link" data-key="t-hovered">Hovered</a>
                                </li>
                            </ul>
                        </div>
                    </li> <!-- end Dashboard Menu -->

                    <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">Pages</span></li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarAuth" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAuth">
                            <i class="lar la-user-circle"></i> <span data-key="t-authentication">Authentication</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarAuth">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="#sidebarSignIn" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSignIn" data-key="t-signin"> Sign In
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarSignIn">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="auth-signin-basic.html" class="nav-link" data-key="t-basic"> Basic </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-signin-cover.html" class="nav-link" data-key="t-cover"> Cover </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="#sidebarSignUp" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSignUp" data-key="t-signup"> Sign Up
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarSignUp">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="auth-signup-basic.html" class="nav-link" data-key="t-basic"> Basic </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-signup-cover.html" class="nav-link" data-key="t-cover"> Cover </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="nav-item">
                                    <a href="#sidebarResetPass" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarResetPass" data-key="t-password-reset"> Password Reset
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarResetPass">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="auth-pass-reset-basic.html" class="nav-link" data-key="t-basic"> Basic </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-pass-reset-cover.html" class="nav-link" data-key="t-cover"> Cover </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="nav-item">
                                    <a href="#sidebarchangePass" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarchangePass" data-key="t-password-create">
                                        Password Create
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarchangePass">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="auth-pass-change-basic.html" class="nav-link" data-key="t-basic">
                                                    Basic </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-pass-change-cover.html" class="nav-link" data-key="t-cover">
                                                    Cover </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="nav-item">
                                    <a href="#sidebarLockScreen" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLockScreen" data-key="t-lock-screen"> Lock Screen
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarLockScreen">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="auth-lockscreen-basic.html" class="nav-link" data-key="t-basic"> Basic </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-lockscreen-cover.html" class="nav-link" data-key="t-cover"> Cover </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="nav-item">
                                    <a href="#sidebarLogout" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLogout" data-key="t-logout"> Logout
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarLogout">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="auth-logout-basic.html" class="nav-link" data-key="t-basic"> Basic </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-logout-cover.html" class="nav-link" data-key="t-cover"> Cover </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="#sidebarSuccessMsg" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSuccessMsg" data-key="t-success-message"> Success Message
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarSuccessMsg">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="auth-success-msg-basic.html" class="nav-link" data-key="t-basic"> Basic </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-success-msg-cover.html" class="nav-link" data-key="t-cover"> Cover </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="#sidebarTwoStep" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTwoStep" data-key="t-two-step-verification"> Two Step Verification
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarTwoStep">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="auth-twostep-basic.html" class="nav-link" data-key="t-basic"> Basic </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-twostep-cover.html" class="nav-link" data-key="t-cover"> Cover </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="#sidebarErrors" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarErrors" data-key="t-errors"> Errors
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarErrors">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="auth-404-basic.html" class="nav-link" data-key="t-404-basic"> 404 Basic </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-404-cover.html" class="nav-link" data-key="t-404-cover"> 404 Cover </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-404-alt.html" class="nav-link" data-key="t-404-alt"> 404 Alt </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-500.html" class="nav-link" data-key="t-500"> 500 </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-offline.html" class="nav-link" data-key="t-offline-page"> Offline Page </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarPages" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
                            <i class="las la-pager"></i> <span data-key="t-pages">Pages</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarPages">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="pages-starter.html" class="nav-link" data-key="t-starter"> Starter </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#sidebarProfile" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProfile" data-key="t-profile"> Profile
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarProfile">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="pages-profile.html" class="nav-link" data-key="t-simple-page"> Simple Page </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="pages-profile-settings.html" class="nav-link" data-key="t-settings"> Settings </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="pages-team.html" class="nav-link" data-key="t-team"> Team </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages-timeline.html" class="nav-link" data-key="t-timeline"> Timeline </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages-faqs.html" class="nav-link" data-key="t-faqs"> FAQs </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages-pricing.html" class="nav-link" data-key="t-pricing"> Pricing </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages-gallery.html" class="nav-link" data-key="t-gallery"> Gallery </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages-maintenance.html" class="nav-link" data-key="t-maintenance"> Maintenance </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages-coming-soon.html" class="nav-link" data-key="t-coming-soon"> Coming Soon </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages-sitemap.html" class="nav-link" data-key="t-sitemap"> Sitemap </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages-search-results.html" class="nav-link" data-key="t-search-results"> Search Results </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages-privacy-policy.html" class="nav-link"><span data-key="t-privacy-policy">Privacy Policy</span> <span class="badge badge-pill bg-success" data-key="t-new">New</span></a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages-term-conditions.html" class="nav-link"><span data-key="t-term-conditions">Term & Conditions</span> <span class="badge badge-pill bg-success" data-key="t-new">New</span></a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarLanding" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLanding">
                            <i class="ri-rocket-line"></i> <span data-key="t-landing">Landing</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarLanding">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="landing.html" class="nav-link" data-key="t-one-page"> One Page </a>
                                </li>
                                <li class="nav-item">
                                    <a href="nft-landing.html" class="nav-link" data-key="t-nft-landing"> NFT Landing </a>
                                </li>
                                <li class="nav-item">
                                    <a href="job-landing.html" class="nav-link"><span data-key="t-job">Job</span> <span class="badge badge-pill bg-success" data-key="t-new">New</span></a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-components">Components</span></li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarUI" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarUI">
                            <i class="las la-pencil-ruler"></i> <span data-key="t-base-ui">Base UI</span>
                        </a>
                        <div class="collapse menu-dropdown mega-dropdown-menu" id="sidebarUI">
                            <div class="row">
                                <div class="col-lg-4">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="ui-alerts.html" class="nav-link" data-key="t-alerts">Alerts</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ui-badges.html" class="nav-link" data-key="t-badges">Badges</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ui-buttons.html" class="nav-link" data-key="t-buttons">Buttons</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ui-colors.html" class="nav-link" data-key="t-colors">Colors</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ui-cards.html" class="nav-link" data-key="t-cards">Cards</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ui-carousel.html" class="nav-link" data-key="t-carousel">Carousel</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ui-dropdowns.html" class="nav-link" data-key="t-dropdowns">Dropdowns</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ui-grid.html" class="nav-link" data-key="t-grid">Grid</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="ui-images.html" class="nav-link" data-key="t-images">Images</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ui-tabs.html" class="nav-link" data-key="t-tabs">Tabs</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ui-accordions.html" class="nav-link" data-key="t-accordion-collapse">Accordion & Collapse</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ui-modals.html" class="nav-link" data-key="t-modals">Modals</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ui-offcanvas.html" class="nav-link" data-key="t-offcanvas">Offcanvas</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ui-placeholders.html" class="nav-link" data-key="t-placeholders">Placeholders</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ui-progress.html" class="nav-link" data-key="t-progress">Progress</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ui-notifications.html" class="nav-link" data-key="t-notifications">Notifications</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="ui-media.html" class="nav-link" data-key="t-media-object">Media object</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ui-embed-video.html" class="nav-link" data-key="t-embed-video">Embed Video</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ui-typography.html" class="nav-link" data-key="t-typography">Typography</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ui-lists.html" class="nav-link" data-key="t-lists">Lists</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ui-general.html" class="nav-link" data-key="t-general">General</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ui-ribbons.html" class="nav-link" data-key="t-ribbons">Ribbons</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ui-utilities.html" class="nav-link" data-key="t-utilities">Utilities</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarAdvanceUI" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAdvanceUI">
                            <i class="las la-briefcase"></i> <span data-key="t-advance-ui">Advance UI</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarAdvanceUI">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="advance-ui-sweetalerts.html" class="nav-link" data-key="t-sweet-alerts">Sweet Alerts</a>
                                </li>
                                <li class="nav-item">
                                    <a href="advance-ui-nestable.html" class="nav-link" data-key="t-nestable-list">Nestable List</a>
                                </li>
                                <li class="nav-item">
                                    <a href="advance-ui-scrollbar.html" class="nav-link" data-key="t-scrollbar">Scrollbar</a>
                                </li>
                                <li class="nav-item">
                                    <a href="advance-ui-animation.html" class="nav-link" data-key="t-animation">Animation</a>
                                </li>
                                <li class="nav-item">
                                    <a href="advance-ui-tour.html" class="nav-link" data-key="t-tour">Tour</a>
                                </li>
                                <li class="nav-item">
                                    <a href="advance-ui-swiper.html" class="nav-link" data-key="t-swiper-slider">Swiper Slider</a>
                                </li>
                                <li class="nav-item">
                                    <a href="advance-ui-ratings.html" class="nav-link" data-key="t-ratings">Ratings</a>
                                </li>
                                <li class="nav-item">
                                    <a href="advance-ui-highlight.html" class="nav-link" data-key="t-highlight">Highlight</a>
                                </li>
                                <li class="nav-item">
                                    <a href="advance-ui-scrollspy.html" class="nav-link" data-key="t-scrollSpy">ScrollSpy</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="widgets.html">
                            <i class="las la-flask"></i> <span data-key="t-widgets">Widgets</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarForms" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarForms">
                            <i class="lar la-newspaper"></i> <span data-key="t-forms">Forms</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarForms">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="forms-elements.html" class="nav-link" data-key="t-basic-elements">Basic Elements</a>
                                </li>
                                <li class="nav-item">
                                    <a href="forms-select.html" class="nav-link" data-key="t-form-select"> Form Select </a>
                                </li>
                                <li class="nav-item">
                                    <a href="forms-checkboxs-radios.html" class="nav-link" data-key="t-checkboxs-radios">Checkboxs & Radios</a>
                                </li>
                                <li class="nav-item">
                                    <a href="forms-pickers.html" class="nav-link" data-key="t-pickers"> Pickers </a>
                                </li>
                                <li class="nav-item">
                                    <a href="forms-masks.html" class="nav-link" data-key="t-input-masks">Input Masks</a>
                                </li>
                                <li class="nav-item">
                                    <a href="forms-advanced.html" class="nav-link" data-key="t-advanced">Advanced</a>
                                </li>
                                <li class="nav-item">
                                    <a href="forms-range-sliders.html" class="nav-link" data-key="t-range-slider"> Range Slider </a>
                                </li>
                                <li class="nav-item">
                                    <a href="forms-validation.html" class="nav-link" data-key="t-validation">Validation</a>
                                </li>
                                <li class="nav-item">
                                    <a href="forms-wizard.html" class="nav-link" data-key="t-wizard">Wizard</a>
                                </li>
                                <li class="nav-item">
                                    <a href="forms-editors.html" class="nav-link" data-key="t-editors">Editors</a>
                                </li>
                                <li class="nav-item">
                                    <a href="forms-file-uploads.html" class="nav-link" data-key="t-file-uploads">File Uploads</a>
                                </li>
                                <li class="nav-item">
                                    <a href="forms-layouts.html" class="nav-link" data-key="t-form-layouts">Form Layouts</a>
                                </li>
                                <li class="nav-item">
                                    <a href="forms-select2.html" class="nav-link" data-key="t-select2">Select2</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarTables" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTables">
                            <i class="las la-table"></i> <span data-key="t-tables">Tables</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarTables">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="tables-basic.html" class="nav-link" data-key="t-basic-tables">Basic Tables</a>
                                </li>
                                <li class="nav-item">
                                    <a href="tables-gridjs.html" class="nav-link" data-key="t-grid-js">Grid Js</a>
                                </li>
                                <li class="nav-item">
                                    <a href="tables-listjs.html" class="nav-link" data-key="t-list-js">List Js</a>
                                </li>
                                <li class="nav-item">
                                    <a href="tables-datatables.html" class="nav-link" data-key="t-datatables">Datatables</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarCharts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCharts">
                            <i class="las la-chart-pie"></i> <span data-key="t-charts">Charts</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarCharts">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="#sidebarApexcharts" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApexcharts" data-key="t-apexcharts"> Apexcharts
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarApexcharts">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="charts-apex-line.html" class="nav-link" data-key="t-line"> Line </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="charts-apex-area.html" class="nav-link" data-key="t-area"> Area </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="charts-apex-column.html" class="nav-link" data-key="t-column"> Column </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="charts-apex-bar.html" class="nav-link" data-key="t-bar"> Bar </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="charts-apex-mixed.html" class="nav-link" data-key="t-mixed"> Mixed </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="charts-apex-timeline.html" class="nav-link" data-key="t-timeline"> Timeline </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="charts-apex-candlestick.html" class="nav-link" data-key="t-candlstick"> Candlstick </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="charts-apex-boxplot.html" class="nav-link" data-key="t-boxplot"> Boxplot </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="charts-apex-bubble.html" class="nav-link" data-key="t-bubble"> Bubble </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="charts-apex-scatter.html" class="nav-link" data-key="t-scatter"> Scatter </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="charts-apex-heatmap.html" class="nav-link" data-key="t-heatmap"> Heatmap </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="charts-apex-treemap.html" class="nav-link" data-key="t-treemap"> Treemap </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="charts-apex-pie.html" class="nav-link" data-key="t-pie"> Pie </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="charts-apex-radialbar.html" class="nav-link" data-key="t-radialbar"> Radialbar </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="charts-apex-radar.html" class="nav-link" data-key="t-radar"> Radar </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="charts-apex-polar.html" class="nav-link" data-key="t-polar-area"> Polar Area </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="charts-chartjs.html" class="nav-link" data-key="t-chartjs"> Chartjs </a>
                                </li>
                                <li class="nav-item">
                                    <a href="charts-echarts.html" class="nav-link" data-key="t-echarts"> Echarts </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarIcons" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarIcons">
                            <i class="lab la-fonticons"></i> <span data-key="t-icons">Icons</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarIcons">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="icons-remix.html" class="nav-link" data-key="t-remix">Remix</a>
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
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarMaps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMaps">
                            <i class="las la-map"></i> <span data-key="t-maps">Maps</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarMaps">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="maps-google.html" class="nav-link" data-key="t-google">
                                        Google
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="maps-vector.html" class="nav-link" data-key="t-vector">
                                        Vector
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="maps-leaflet.html" class="nav-link" data-key="t-leaflet">
                                        Leaflet
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarMultilevel" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMultilevel">
                            <i class="las la-folder-plus"></i> <span data-key="t-multi-level">Multi Level</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarMultilevel">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="#" class="nav-link" data-key="t-level-1.1"> Level 1.1 </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#sidebarAccount" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAccount" data-key="t-level-1.2"> Level 1.2
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarAccount">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="#" class="nav-link" data-key="t-level-2.1"> Level 2.1 </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#sidebarCrm" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCrm" data-key="t-level-2.2"> Level 2.2
                                                </a>
                                                <div class="collapse menu-dropdown" id="sidebarCrm">
                                                    <ul class="nav nav-sm flex-column">
                                                        <li class="nav-item">
                                                            <a href="#" class="nav-link" data-key="t-level-3.1"> Level 3.1 </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="#" class="nav-link" data-key="t-level-3.2"> Level 3.2 </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>

                </ul>
            </div>
            <!-- Sidebar -->
        </div>

        <div class="sidebar-background"></div>
    </div>
    <!-- Left Sidebar End -->
    <!-- Vertical Overlay-->
    <div class="vertical-overlay"></div>

