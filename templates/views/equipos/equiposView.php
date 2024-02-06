<!doctype html>
<html lang="en" data-layout="horizontal" data-layout-style="" data-layout-position="fixed" data-topbar="light">

<head>

    <meta charset="utf-8" />
    <title>Equipos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets/images/logo_metro.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">


    <!-- Sweet Alert css-->
    <link href="../assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

     <!--datatable css-->
     <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">


    <!-- Layout config Js -->
    <script src="../assets/js/layout.js"></script>    
    <!-- Bootstrap Css -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" /> 
    <!-- <link href="../assets/css/bootstrap-select.css" rel="stylesheet" type="text/css" />   -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <!-- Icons Css -->
    <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="../assets/css/custom.min.css" rel="stylesheet" type="text/css" />
    
</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

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
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h2 class="mb-sm-0">Equipos</h2> 
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="d-flex align-items-center flex-wrap gap-2">
                                        <div class="flex-grow-1">
                                            <button class="btn btn-info add-btn" data-bs-toggle="modal" data-bs-target="#showModal"><i class="ri-add-fill me-1 align-bottom"></i> Agregar Equipo</button>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div class="hstack text-nowrap gap-2">
                                                <label for="numeroRegistros" class="form-label">Mostrar:</label>
                                                <select class = "form-select col-lg-3" id="numeroRegistros">
                                                <!-- Agrega más opciones según tus datos -->
                                                </select>                                                
                                                <button class="btn btn-soft-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Importar
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    <li><a id="tabla_pdf" class="dropdown-item" href="#">PDF</a></li>
                                                    <li><a id="tabla_excel" class="dropdown-item" href="#">Excel</a></li>   
                                                    <li><a id="tabla_print" class="dropdown-item" href="#">Imprimir</a></li>                                                   
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-xxl-12">
                            <div class="card" id="companyList">
                                <div class="card-header">
                                    <div class="row g-2">
                                        <div class="col-md-3">
                                            <div class="search-box">
                                                <input id = "tableSearch" type="text" class="form-control search" placeholder="Buscar...">
                                                <i class="ri-search-line search-icon"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div>    
                                                <select class="form-select" id = "liga-filtro" name="liga-filtro" data-placeholder="  Selecciona el torneo">
                                                                                                                            
                                                </select>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <div class="table-responsive table-card mb-3">
                                            <table class="table align-middle table-hover" id="equiposTable">
                                                <thead class="table-light">
                                                    <tr>
                                                        <!-- <th scope="col" style="width: 50px;">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                            </div>
                                                        </th> -->
                                                       <!--  <th class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ001</a>
                                                        </th> -->
                                                        <th class="text-center" data-sort="name" scope="col">Img</th>
                                                        <th class="text-center" data-sort="name" scope="col">Equipo</th>
                                                        <th class="text-center" data-sort="owner" scope="col">Liga</th>
                                                        <th class="text-center" data-sort="industry_type" scope="col">Delegado</th>
                                                        <th class="text-center" data-sort="industry_type" scope="col">Estatus</th>
                                                        <th class="text-center" scope="col">Accion</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list form-check-all">

                                                </tbody>
                                            </table>
                                            <div class="noresult" style="display: none">
                                                <div class="text-center">
                                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px">
                                                    </lord-icon>
                                                    <h5 class="mt-2">Ups, No hay resultados</h5>                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content border-0">
                                                <div class="modal-header bg-soft-info p-3">
                                                    <h5 class="modal-title" id="">Nuevo Equipo</h5>
                                                    <button type="button" class="btn-close close-modal" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                                                </div>
                                                <form id="miEquipo" class="miEquipo" method="POST" enctype="multipart/form-data">
                                                    <div class="modal-body">                                                        
                                                        <div class="row g-3">
                                                            <div class="col-lg-12">
                                                                <div class="text-center">
                                                                    <div class="position-relative d-inline-block">
                                                                        <div class="position-absolute bottom-0 end-0">
                                                                            <label for="company-logo-input" class="mb-0" data-bs-toggle="tooltip" data-bs-placement="right" title="Select Image">
                                                                                <div class="avatar-xs cursor-pointer">
                                                                                    <div class="avatar-title bg-light border rounded-circle text-muted">
                                                                                        <i class="ri-image-fill"></i>
                                                                                    </div>
                                                                                </div>
                                                                            </label>
                                                                            <input class="form-control d-none" name="company-logo-input" id="company-logo-input" type="file" accept="image/png, image/gif, image/jpeg">
                                                                            <input type="text" id="id-edit" name="id-edit" hidden>
                                                                        </div>
                                                                        <div class="avatar-lg p-1">
                                                                            <div id="imgForm" class="avatar-title bg-light rounded-circle">
                                                                                <img src="../assets/images/users/multi-user.jpg" id="companylogo-img" class="avatar-md rounded-circle object-cover" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <h5 class="fs-13 mt-3">Equipo Logo</h5>
                                                                </div>                                                                
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <label for="nombre" class="form-label">Nombre</label>
                                                                <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ingrese nombre" required />
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div>
                                                                    <label for="liga" class="form-label">Torneo</label>
                                                                    <select class="form-select" id = "liga" name="liga" data-placeholder="  Selecciona el torneo" style="width: 100%;" aria-hidden="true">
                                                                                                                                                
                                                                    </select>
                                                                </div>
                                                            </div>            
                                                            <div class="col-lg-6">
                                                                <div >
                                                                    <label for="delegado" class="form-label">Delegado</label>    
                                                                    <input type="text" id="delegado" name="delegado" class="form-control" placeholder="Ingrese nombre" required />        
                                                                    <!-- <select class="form-select" id = "delegado" name="delegado" data-placeholder="  Selecciona al delegado" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                                                       
                                                                    </select> -->
                                                                </div>
                                                            </div>  
                                                            <div class="col-lg-6">
                                                                <div>
                                                                    <label for="liga" class="form-label">Estatus</label>
                                                                    <select class="form-select" id = "estatus" name="estatus" data-placeholder="  Selecciona el estatus" style="width: 100%;" aria-hidden="true">
                                                                        <option value="1">Activo</option>
                                                                        <option value="2">Baja</option>                                                                            
                                                                    </select>
                                                                </div>
                                                            </div>                                                                                                            
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <div class="hstack gap-2 justify-content-end">
                                                            <button type="button" class="btn btn-light close-modal" data-bs-dismiss="modal">Cerrar</button>
                                                            <button type="submit" class="btn btn-success">Guardar</button>
                                                            <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end add modal-->

                                    <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-labelledby="deleteRecordLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close" id="deleteRecord-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
                                                </div>
                                                <div class="modal-body p-5 text-center">
                                                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#405189,secondary:#f06548" style="width:90px;height:90px"></lord-icon>
                                                    <div class="mt-4 text-center">
                                                        <h4 class="fs-semibold">Deseas eliminar el torneo?</h4>
                                                        <p class="text-muted fs-14 mb-4 pt-1">El torneo se eliminara permanentemente de la base de datos</p>
                                                        <div class="hstack gap-2 justify-content-center remove">
                                                            <button class="btn btn-link link-success fw-medium text-decoration-none" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Cancelar</button>
                                                            <button class="btn btn-danger" id="delete-record">Si, Eliminar!!</button>
                                                            <input type="text" hidden id="idEquipo">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end delete modal -->

                                </div>
                            </div>
                            <!--end card-->
                        </div>
                    </div>
                    <!--end row-->

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
    <script src="https://code.jquery.com/jquery-3.7.0.min.js?v=2" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>
    <script src="../assets/libs/simplebar/simplebar.min.js"></script>
    <script src="../assets/libs/node-waves/waves.min.js"></script>
    <script src="../assets/libs/feather-icons/feather.min.js"></script>
    <script src="../assets/js/pages/plugins/lord-icon-2.1.0.js"></script>    
    <script src="../assets/js/plugins.js"></script>
    <!-- Sweet Alerts js -->
    <script src="../assets/libs/sweetalert2/sweetalert2.min.js"></script>
    <!-- App js -->
    
    <!--datatable js-->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js?v=2"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>



    <script src="../assets/js/pages/datatables.init.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script type="text/javascript" src="<?php echo JS.'menu.js'; ?>"></script>   
    <script type="text/javascript" src="<?php echo JS.'equipos.js?v=2'; ?>"></script>  
    <!-- list.js min js -->
    <script src="../assets/libs/list.js/list.min.js"></script>
    <script src="../assets/libs/list.pagination.js/list.pagination.min.js"></script>
    <script type="text/javascript" src="../assets/js/app.js"></script>                                                 
</body>

</html>