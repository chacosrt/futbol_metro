<!doctype html>
<html lang="en" data-layout="horizontal" data-layout-style="" data-layout-position="fixed" data-topbar="light">

<head>

    <meta charset="utf-8" />
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets/images/logo_metro.png">

    <!-- plugin css -->
    <link href="../assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="../assets/js/layout.js"></script>
    <script src="<?php echo BOWER.'jquery/dist/jquery.min.js'; ?>"></script>
    <script src="<?php echo BOWER.'bootstrap/dist/js/bootstrap.min.js'; ?>"></script>

    <!-- Bootstrap Css -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="../assets/css/custom.min.css" rel="stylesheet" type="text/css" />
    <!-- cards Css-->
    <link href="../assets/css/extra.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <!-- Vertical Overlay-->
        <div class="horizontal-overlay">
            <?php
                require INCLUDES.'inc_header_menu.php'; //Menu
            ?>
        </div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">
                    <!-- start page title -->
                    <div class="row mb-3 pb-1">
                        <div class="col-12">
                            <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                <div class="flex-grow-1">
                                    <h4 class="fs-16 mb-1">Bienvenido <?php echo $_SESSION["nombre"] ?></h4>                                    
                                </div>
                            </div><!-- end card header -->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                   
                    <!-- end page title -->
                    <div class="row">
                        <div class="col">

                            <div class="h-100">   
                                
                                <div class="row">
                                    <div class="col-6">
                                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                            <h4 class="mb-sm-0">Ultimos Partidos</h4>                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <!-- card -->
                                        <div class="card card-animate">
                                            <div class="card-header text-center">
                                                <h5>Veteranos</h5>
                                            </div>
                                            <div class="card-body align-middle d-flex flex-nowrap">     
                                                <div class ="flex-1 border d-flex justify-content-center p-2">
                                                    <a href="https://fc-united.axiomthemes.com/team/fcunited/" title="FC United" >    
                                                        <img class="align-middle" height="30" width="30" src="../assets/images/escudo_futbol.jpg" alt="">                    
                                                        <p class="text-overflow text-center"><b>Dinos</b></p>
                                                    </a> 
                                                </div>      
                                                <div class ="flex-1 border d-flex justify-content-center">
                                                    <h5 class="sp-event-results text-center">
                                                        <span class="sp-result">0</span> - <span class="sp-result">0</span>							
                                                    </h5> 
                                                </div>       
                                                <div class ="flex-1 border d-flex justify-content-center">
                                                    <a class ="justify-content-center" href="https://fc-united.axiomthemes.com/team/fc-manchester/" title="FC Manchester">
                                                        <img class = "text-center" height="30" width="30" src="../assets/images/escudo_futbol.jpg" alt="">
                                                        <p class="text-overflow text-center"><b>Potros Metro</b></p>                                                                            
                                                    </a> 
                                                </div>                                                                                    
                                            </div>  
                                            <div class="card-footer align-middle d-flex justify-content-center">
                                                <div class = "text-center">
                                                    <p>08 de Julio de 2023,  Finalizado</p>
                                                    <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="#">
                                                        Ver Detalles
                                                    </a>
                                                </div>
                                            </div>                                          
                                        </div>
                                        <!-- end card -->
                                    </div><!-- end col -->
                                    <div class="col-md-4">
                                        <!-- card -->
                                        <div class="card card-animate">
                                            <div class="card-header text-center">
                                                <h5>Primera Fuerza</h5>
                                            </div>
                                            <div class="card-body">                                                
                                                <table class="table-borderless table-centered align-middle table-nowrap mb-0 ">
                                                    <tbody>
                                                        <tr class="align-middle text-center">
                                                            <td width ="150px" >                                                                         
                                                                <a href="https://fc-united.axiomthemes.com/team/fcunited/" title="FC United">    
                                                                    <img height="30" width="30" src="../assets/images/escudo_futbol.jpg" alt="">                    
                                                                    <p class="text-overflow text-center"><b>Material Rodante</b></p>
                                                                </a>                                               	
                                                            </td>
                                                            <td width ="150px">
                                                                <h5 class="sp-event-results text-center">
                                                                    <span class="sp-result">2</span> - <span class="sp-result">0</span>							
                                                                </h5>
                                                            </td>
                                                            <td width ="150px" >
                                                                <a class="team-logo logo-even" href="https://fc-united.axiomthemes.com/team/fc-manchester/" title="FC Manchester">
                                                                    <img height="30" width="30" src="../assets/images/escudo_futbol.jpg" class="attachment-sportspress-fit-icon size-sportspress-fit-icon wp-post-image" alt="" loading="lazy">
                                                                    <p class="text-overflow text-center"><b>Despacho de Carga</b></p>                                                                            
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="align-middle text-center">
                                                            <td colspan="3">
                                                                08 de Julio de 2023,  Finalizado
                                                            </td>
                                                        </tr>
                                                        <tr class="align-middle text-center">
                                                            <td colspan="3">                                                                
                                                                <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="#">
                                                                    Ver Detalles
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>                                                 
                                            </div>                                            
                                        </div>
                                        <!-- end card -->
                                    </div><!-- end col -->

                                    <div class="col-md-4">
                                        <!-- card -->
                                        <div class="card card-animate">
                                            <div class="card-header text-center">
                                                <h5>Segunda Fuerza</h5>
                                            </div>
                                            <div class="card-body">                                                
                                                <table class="table-borderless ">
                                                    <tbody>
                                                        <tr class="align-middle text-center">
                                                            <td width ="150px" >                                                                         
                                                                <a href="https://fc-united.axiomthemes.com/team/fcunited/" title="FC United">    
                                                                    <img height="30" width="30" src="https://fc-united.axiomthemes.com/wp-content/uploads/2018/11/go-4-copyright-400x400.png" alt="">                    
                                                                    <p class="text-overflow text-center"><b>Real Universidad</b></p>
                                                                </a>                                               	
                                                            </td>
                                                            <td width ="150px">
                                                                <h5 class="sp-event-results text-center">
                                                                    <span class="sp-result">3</span> - <span class="sp-result">1</span>							
                                                                </h5>
                                                            </td>
                                                            <td width ="150px" >
                                                                <a class="team-logo logo-even" href="https://fc-united.axiomthemes.com/team/fc-manchester/" title="FC Manchester">
                                                                    <img height="30" width="30" src="../assets/images/garibaldi.png" class="attachment-sportspress-fit-icon size-sportspress-fit-icon wp-post-image" alt="" loading="lazy">
                                                                    <p class="text-overflow text-center"><b>Garibaldi</b></p>                                                                            
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="align-middle text-center">
                                                            <td colspan="3">
                                                                09 de Julio de 2023,  Finalizado
                                                            </td>
                                                        </tr>
                                                        <tr class="align-middle text-center">
                                                            <td colspan="3">                                                                
                                                                <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="#">
                                                                    Ver Detalles
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>                                                 
                                            </div>                                            
                                        </div>
                                        <!-- end card -->
                                    </div><!-- end col -->

                                <div class="row">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                                <h4 class="mb-sm-0">Posiciones</h4>

                                                <div class="page-title-right">
                                                    <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="#">
                                                        Ver detalles
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="card">
                                            <div class="card-header align-items-center d-flex">
                                                <h4 class="card-title mb-0 flex-grow-1">Best Selling Products</h4>
                                                <div class="flex-shrink-0">
                                                    <div class="dropdown card-header-dropdown">
                                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="fw-semibold text-uppercase fs-13">Sort by:
                                                            </span><span class="text-muted">Today<i class="mdi mdi-chevron-down ms-1"></i></span>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Today</a>
                                                            <a class="dropdown-item" href="#">Yesterday</a>
                                                            <a class="dropdown-item" href="#">Last 7 Days</a>
                                                            <a class="dropdown-item" href="#">Last 30 Days</a>
                                                            <a class="dropdown-item" href="#">This Month</a>
                                                            <a class="dropdown-item" href="#">Last Month</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end card header -->

                                            <div class="card-body">
                                                <div class="table-responsive table-card">
                                                    <table class="table table-hover table-centered align-middle table-nowrap mb-0">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="avatar-sm bg-light rounded p-1 me-2">
                                                                            <img src="../assets/images/products/img-1.png" alt="" class="img-fluid d-block" />
                                                                        </div>
                                                                        <div>
                                                                            <h5 class="fs-14 my-1"><a href="apps-ecommerce-product-details.html" class="text-reset">Branded
                                                                                    T-Shirts</a></h5>
                                                                            <span class="text-muted">24 Apr 2021</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 my-1 fw-normal">$29.00</h5>
                                                                    <span class="text-muted">Price</span>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 my-1 fw-normal">62</h5>
                                                                    <span class="text-muted">Orders</span>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 my-1 fw-normal">510</h5>
                                                                    <span class="text-muted">Stock</span>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 my-1 fw-normal">$1,798</h5>
                                                                    <span class="text-muted">Amount</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="avatar-sm bg-light rounded p-1 me-2">
                                                                            <img src="../assets/images/products/img-2.png" alt="" class="img-fluid d-block" />
                                                                        </div>
                                                                        <div>
                                                                            <h5 class="fs-14 my-1"><a href="apps-ecommerce-product-details.html" class="text-reset">Bentwood
                                                                                    Chair</a></h5>
                                                                            <span class="text-muted">19 Mar 2021</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 my-1 fw-normal">$85.20</h5>
                                                                    <span class="text-muted">Price</span>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 my-1 fw-normal">35</h5>
                                                                    <span class="text-muted">Orders</span>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 my-1 fw-normal"><span class="badge badge-soft-danger">Out of
                                                                            stock</span> </h5>
                                                                    <span class="text-muted">Stock</span>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 my-1 fw-normal">$2982</h5>
                                                                    <span class="text-muted">Amount</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="avatar-sm bg-light rounded p-1 me-2">
                                                                            <img src="../assets/images/products/img-3.png" alt="" class="img-fluid d-block" />
                                                                        </div>
                                                                        <div>
                                                                            <h5 class="fs-14 my-1"><a href="apps-ecommerce-product-details.html" class="text-reset">Borosil Paper
                                                                                    Cup</a></h5>
                                                                            <span class="text-muted">01 Mar 2021</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 my-1 fw-normal">$14.00</h5>
                                                                    <span class="text-muted">Price</span>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 my-1 fw-normal">80</h5>
                                                                    <span class="text-muted">Orders</span>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 my-1 fw-normal">749</h5>
                                                                    <span class="text-muted">Stock</span>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 my-1 fw-normal">$1120</h5>
                                                                    <span class="text-muted">Amount</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="avatar-sm bg-light rounded p-1 me-2">
                                                                            <img src="../assets/images/products/img-4.png" alt="" class="img-fluid d-block" />
                                                                        </div>
                                                                        <div>
                                                                            <h5 class="fs-14 my-1"><a href="apps-ecommerce-product-details.html" class="text-reset">One Seater
                                                                                    Sofa</a></h5>
                                                                            <span class="text-muted">11 Feb 2021</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 my-1 fw-normal">$127.50</h5>
                                                                    <span class="text-muted">Price</span>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 my-1 fw-normal">56</h5>
                                                                    <span class="text-muted">Orders</span>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 my-1 fw-normal"><span class="badge badge-soft-danger">Out of
                                                                            stock</span></h5>
                                                                    <span class="text-muted">Stock</span>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 my-1 fw-normal">$7140</h5>
                                                                    <span class="text-muted">Amount</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="avatar-sm bg-light rounded p-1 me-2">
                                                                            <img src="../assets/images/products/img-5.png" alt="" class="img-fluid d-block" />
                                                                        </div>
                                                                        <div>
                                                                            <h5 class="fs-14 my-1"><a href="apps-ecommerce-product-details.html" class="text-reset">Stillbird
                                                                                    Helmet</a></h5>
                                                                            <span class="text-muted">17 Jan 2021</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 my-1 fw-normal">$54</h5>
                                                                    <span class="text-muted">Price</span>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 my-1 fw-normal">74</h5>
                                                                    <span class="text-muted">Orders</span>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 my-1 fw-normal">805</h5>
                                                                    <span class="text-muted">Stock</span>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 my-1 fw-normal">$3996</h5>
                                                                    <span class="text-muted">Amount</span>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                                <div class="align-items-center mt-4 pt-2 justify-content-between d-flex">
                                                    <div class="flex-shrink-0">
                                                        <div class="text-muted">Showing <span class="fw-semibold">5</span> of <span class="fw-semibold">25</span> Results
                                                        </div>
                                                    </div>
                                                    <ul class="pagination pagination-separated pagination-sm mb-0">
                                                        <li class="page-item disabled">
                                                            <a href="#" class="page-link">←</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="#" class="page-link">1</a>
                                                        </li>
                                                        <li class="page-item active">
                                                            <a href="#" class="page-link">2</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="#" class="page-link">3</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="#" class="page-link">→</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class="card card-height-100">
                                            <div class="card-header align-items-center d-flex">
                                                <h4 class="card-title mb-0 flex-grow-1">Top Sellers</h4>
                                                <div class="flex-shrink-0">
                                                    <div class="dropdown card-header-dropdown">
                                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="text-muted">Report<i class="mdi mdi-chevron-down ms-1"></i></span>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Download Report</a>
                                                            <a class="dropdown-item" href="#">Export</a>
                                                            <a class="dropdown-item" href="#">Import</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end card header -->

                                            <div class="card-body">
                                                <div class="table-responsive table-card">
                                                    <table class="table table-centered table-hover align-middle table-nowrap mb-0">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="flex-shrink-0 me-2">
                                                                            <img src="../assets/images/companies/img-1.png" alt="" class="avatar-sm p-2" />
                                                                        </div>
                                                                        <div>
                                                                            <h5 class="fs-14 my-1 fw-medium"><a href="apps-ecommerce-seller-details.html" class="text-reset">iTest Factory</a>
                                                                            </h5>
                                                                            <span class="text-muted">Oliver Tyler</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span class="text-muted">Bags and Wallets</span>
                                                                </td>
                                                                <td>
                                                                    <p class="mb-0">8547</p>
                                                                    <span class="text-muted">Stock</span>
                                                                </td>
                                                                <td>
                                                                    <span class="text-muted">$541200</span>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 mb-0">32%<i class="ri-bar-chart-fill text-success fs-16 align-middle ms-2"></i>
                                                                    </h5>
                                                                </td>
                                                            </tr><!-- end -->
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="flex-shrink-0 me-2">
                                                                            <img src="../assets/images/companies/img-2.png" alt="" class="avatar-sm p-2" />
                                                                        </div>
                                                                        <div class="flex-grow-1">
                                                                            <h5 class="fs-14 my-1 fw-medium"><a href="apps-ecommerce-seller-details.html" class="text-reset">Digitech
                                                                                    Galaxy</a></h5>
                                                                            <span class="text-muted">John Roberts</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span class="text-muted">Watches</span>
                                                                </td>
                                                                <td>
                                                                    <p class="mb-0">895</p>
                                                                    <span class="text-muted">Stock</span>
                                                                </td>
                                                                <td>
                                                                    <span class="text-muted">$75030</span>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 mb-0">79%<i class="ri-bar-chart-fill text-success fs-16 align-middle ms-2"></i>
                                                                    </h5>
                                                                </td>
                                                            </tr><!-- end -->
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="flex-shrink-0 me-2">
                                                                            <img src="../assets/images/companies/img-3.png" alt="" class="avatar-sm p-2" />
                                                                        </div>
                                                                        <div class="flex-gow-1">
                                                                            <h5 class="fs-14 my-1 fw-medium"><a href="apps-ecommerce-seller-details.html" class="text-reset">Nesta
                                                                                    Technologies</a></h5>
                                                                            <span class="text-muted">Harley
                                                                                Fuller</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span class="text-muted">Bike Accessories</span>
                                                                </td>
                                                                <td>
                                                                    <p class="mb-0">3470</p>
                                                                    <span class="text-muted">Stock</span>
                                                                </td>
                                                                <td>
                                                                    <span class="text-muted">$45600</span>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 mb-0">90%<i class="ri-bar-chart-fill text-success fs-16 align-middle ms-2"></i>
                                                                    </h5>
                                                                </td>
                                                            </tr><!-- end -->
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="flex-shrink-0 me-2">
                                                                            <img src="../assets/images/companies/img-8.png" alt="" class="avatar-sm p-2" />
                                                                        </div>
                                                                        <div class="flex-grow-1">
                                                                            <h5 class="fs-14 my-1 fw-medium"><a href="apps-ecommerce-seller-details.html" class="text-reset">Zoetic
                                                                                    Fashion</a></h5>
                                                                            <span class="text-muted">James Bowen</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span class="text-muted">Clothes</span>
                                                                </td>
                                                                <td>
                                                                    <p class="mb-0">5488</p>
                                                                    <span class="text-muted">Stock</span>
                                                                </td>
                                                                <td>
                                                                    <span class="text-muted">$29456</span>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 mb-0">40%<i class="ri-bar-chart-fill text-success fs-16 align-middle ms-2"></i>
                                                                    </h5>
                                                                </td>
                                                            </tr><!-- end -->
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="flex-shrink-0 me-2">
                                                                            <img src="../assets/images/companies/img-5.png" alt="" class="avatar-sm p-2" />
                                                                        </div>
                                                                        <div class="flex-grow-1">
                                                                            <h5 class="fs-14 my-1 fw-medium"><a href="apps-ecommerce-seller-details.html" class="text-reset">Meta4Systems</a>
                                                                            </h5>
                                                                            <span class="text-muted">Zoe Dennis</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span class="text-muted">Furniture</span>
                                                                </td>
                                                                <td>
                                                                    <p class="mb-0">4100</p>
                                                                    <span class="text-muted">Stock</span>
                                                                </td>
                                                                <td>
                                                                    <span class="text-muted">$11260</span>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 mb-0">57%<i class="ri-bar-chart-fill text-success fs-16 align-middle ms-2"></i>
                                                                    </h5>
                                                                </td>
                                                            </tr><!-- end -->
                                                        </tbody>
                                                    </table><!-- end table -->
                                                </div>

                                                <div class="align-items-center mt-4 pt-2 justify-content-between d-flex">
                                                    <div class="flex-shrink-0">
                                                        <div class="text-muted">Showing <span class="fw-semibold">5</span> of <span class="fw-semibold">25</span> Results
                                                        </div>
                                                    </div>
                                                    <ul class="pagination pagination-separated pagination-sm mb-0">
                                                        <li class="page-item disabled">
                                                            <a href="#" class="page-link">←</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="#" class="page-link">1</a>
                                                        </li>
                                                        <li class="page-item active">
                                                            <a href="#" class="page-link">2</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="#" class="page-link">3</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="#" class="page-link">→</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div> <!-- .card-body-->
                                        </div> <!-- .card-->
                                    </div> <!-- .col-->
                                </div> <!-- end row-->

                                <div class="row">
                                    <div class="col-xl-4">
                                        <div class="card card-height-100">
                                            <div class="card-header align-items-center d-flex">
                                                <h4 class="card-title mb-0 flex-grow-1">Store Visits by Source</h4>
                                                <div class="flex-shrink-0">
                                                    <div class="dropdown card-header-dropdown">
                                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="text-muted">Report<i class="mdi mdi-chevron-down ms-1"></i></span>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Download Report</a>
                                                            <a class="dropdown-item" href="#">Export</a>
                                                            <a class="dropdown-item" href="#">Import</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end card header -->

                                            <div class="card-body">
                                                <div id="store-visits-source" data-colors='["--vz-primary", "--vz-success", "--vz-warning", "--vz-danger", "--vz-info"]' class="apex-charts" dir="ltr"></div>
                                            </div>
                                        </div> <!-- .card-->
                                    </div> <!-- .col-->

                                    <div class="col-xl-8">
                                        <div class="card">
                                            <div class="card-header align-items-center d-flex">
                                                <h4 class="card-title mb-0 flex-grow-1">Recent Orders</h4>
                                                <div class="flex-shrink-0">
                                                    <button type="button" class="btn btn-soft-info btn-sm">
                                                        <i class="ri-file-list-3-line align-middle"></i> Generate Report
                                                    </button>
                                                </div>
                                            </div><!-- end card header -->

                                            <div class="card-body">
                                                <div class="table-responsive table-card">
                                                    <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                                        <thead class="text-muted table-light">
                                                            <tr>
                                                                <th scope="col">Order ID</th>
                                                                <th scope="col">Customer</th>
                                                                <th scope="col">Product</th>
                                                                <th scope="col">Amount</th>
                                                                <th scope="col">Vendor</th>
                                                                <th scope="col">Status</th>
                                                                <th scope="col">Rating</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <a href="apps-ecommerce-order-details.html" class="fw-medium link-primary">#VZ2112</a>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="flex-shrink-0 me-2">
                                                                            <img src="../assets/images/users/avatar-1.jpg" alt="" class="avatar-xs rounded-circle" />
                                                                        </div>
                                                                        <div class="flex-grow-1">Alex Smith</div>
                                                                    </div>
                                                                </td>
                                                                <td>Clothes</td>
                                                                <td>
                                                                    <span class="text-success">$109.00</span>
                                                                </td>
                                                                <td>Zoetic Fashion</td>
                                                                <td>
                                                                    <span class="badge badge-soft-success">Paid</span>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 fw-medium mb-0">5.0<span class="text-muted fs-11 ms-1">(61
                                                                            votes)</span></h5>
                                                                </td>
                                                            </tr><!-- end tr -->
                                                            <tr>
                                                                <td>
                                                                    <a href="apps-ecommerce-order-details.html" class="fw-medium link-primary">#VZ2111</a>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="flex-shrink-0 me-2">
                                                                            <img src="../assets/images/users/avatar-2.jpg" alt="" class="avatar-xs rounded-circle" />
                                                                        </div>
                                                                        <div class="flex-grow-1">Jansh Brown</div>
                                                                    </div>
                                                                </td>
                                                                <td>Kitchen Storage</td>
                                                                <td>
                                                                    <span class="text-success">$149.00</span>
                                                                </td>
                                                                <td>Micro Design</td>
                                                                <td>
                                                                    <span class="badge badge-soft-warning">Pending</span>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 fw-medium mb-0">4.5<span class="text-muted fs-11 ms-1">(61
                                                                            votes)</span></h5>
                                                                </td>
                                                            </tr><!-- end tr -->
                                                            <tr>
                                                                <td>
                                                                    <a href="apps-ecommerce-order-details.html" class="fw-medium link-primary">#VZ2109</a>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="flex-shrink-0 me-2">
                                                                            <img src="../assets/images/users/avatar-3.jpg" alt="" class="avatar-xs rounded-circle" />
                                                                        </div>
                                                                        <div class="flex-grow-1">Ayaan Bowen</div>
                                                                    </div>
                                                                </td>
                                                                <td>Bike Accessories</td>
                                                                <td>
                                                                    <span class="text-success">$215.00</span>
                                                                </td>
                                                                <td>Nesta Technologies</td>
                                                                <td>
                                                                    <span class="badge badge-soft-success">Paid</span>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 fw-medium mb-0">4.9<span class="text-muted fs-11 ms-1">(89
                                                                            votes)</span></h5>
                                                                </td>
                                                            </tr><!-- end tr -->
                                                            <tr>
                                                                <td>
                                                                    <a href="apps-ecommerce-order-details.html" class="fw-medium link-primary">#VZ2108</a>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="flex-shrink-0 me-2">
                                                                            <img src="../assets/images/users/avatar-4.jpg" alt="" class="avatar-xs rounded-circle" />
                                                                        </div>
                                                                        <div class="flex-grow-1">Prezy Mark</div>
                                                                    </div>
                                                                </td>
                                                                <td>Furniture</td>
                                                                <td>
                                                                    <span class="text-success">$199.00</span>
                                                                </td>
                                                                <td>Syntyce Solutions</td>
                                                                <td>
                                                                    <span class="badge badge-soft-danger">Unpaid</span>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 fw-medium mb-0">4.3<span class="text-muted fs-11 ms-1">(47
                                                                            votes)</span></h5>
                                                                </td>
                                                            </tr><!-- end tr -->
                                                            <tr>
                                                                <td>
                                                                    <a href="apps-ecommerce-order-details.html" class="fw-medium link-primary">#VZ2107</a>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="flex-shrink-0 me-2">
                                                                            <img src="../assets/images/users/avatar-6.jpg" alt="" class="avatar-xs rounded-circle" />
                                                                        </div>
                                                                        <div class="flex-grow-1">Vihan Hudda</div>
                                                                    </div>
                                                                </td>
                                                                <td>Bags and Wallets</td>
                                                                <td>
                                                                    <span class="text-success">$330.00</span>
                                                                </td>
                                                                <td>iTest Factory</td>
                                                                <td>
                                                                    <span class="badge badge-soft-success">Paid</span>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 fw-medium mb-0">4.7<span class="text-muted fs-11 ms-1">(161
                                                                            votes)</span></h5>
                                                                </td>
                                                            </tr><!-- end tr -->
                                                        </tbody><!-- end tbody -->
                                                    </table><!-- end table -->
                                                </div>
                                            </div>
                                        </div> <!-- .card-->
                                    </div> <!-- .col-->
                                </div> <!-- end row-->

                            </div> <!-- end .h-100-->

                        </div> <!-- end col -->

                    </div>

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <?php
                require INCLUDES.'inc_footer_v2.php'; //Menu
            ?>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!-- JAVASCRIPT -->
    <script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/libs/simplebar/simplebar.min.js"></script>
    <script src="../assets/libs/node-waves/waves.min.js"></script>
    <script src="../assets/libs/feather-icons/feather.min.js"></script>
    <script src="../assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="../assets/js/plugins.js"></script>

    <!-- apexcharts -->
    <script src="../assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Vector map-->
    <script src="../assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
    <script src="../assets/libs/jsvectormap/maps/world-merc.js"></script>

    <!-- Dashboard init -->
    <script src="../assets/js/pages/dashboard-analytics.init.js"></script>

    <!-- App js -->
    <script src="../assets/js/app.js"></script>
    <script src="<?php echo JS.'dash.js'; ?>"></script>
    <script src="<?php echo JS.'menu.js'; ?>"></script>    
    
</body>

</html>