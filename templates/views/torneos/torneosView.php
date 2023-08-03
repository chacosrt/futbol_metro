<!doctype html>
<html lang="en" data-layout="horizontal" data-layout-style="" data-layout-position="fixed" data-topbar="light">

<head>

    <meta charset="utf-8" />
    <title>Torneos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets/images/logo_metro.png">

    <!-- Sweet Alert css-->
    <link href="../assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

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
                                <h2 class="mb-sm-0">Torneos</h2> 
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
                                            <button class="btn btn-info add-btn" data-bs-toggle="modal" data-bs-target="#showModal"><i class="ri-add-fill me-1 align-bottom"></i> Agregar Torneo</button>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div class="hstack text-nowrap gap-2">
                                                <button class="btn btn-soft-danger" id="remove-actions" onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                                                <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#addmembers"><i class="ri-filter-2-line me-1 align-bottom"></i> Filtros</button>
                                                <button id="regresoInicio" class="btn btn-soft-primary">Importar</button>
                                                <button type="button" id="dropdownMenuLink1" data-bs-toggle="dropdown" aria-expanded="false" class="btn btn-soft-info"><i class="ri-more-2-fill"></i></button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                                    <li><a class="dropdown-item" href="#">All</a></li>
                                                    <li><a class="dropdown-item" href="#">Last Week</a></li>
                                                    <li><a class="dropdown-item" href="#">Last Month</a></li>
                                                    <li><a class="dropdown-item" href="#">Last Year</a></li>
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
                                                <input type="text" class="form-control search" placeholder="Buscar...">
                                                <i class="ri-search-line search-icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <div class="table-responsive table-card mb-3">
                                            <table class="table align-middle table-hover" id="torneosTable">
                                                <thead class="table-light">
                                                    <tr>
                                                        <!-- <th scope="col" style="width: 50px;">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                            </div>
                                                        </th> -->
                                                        <th class="text-center" data-sort="name" scope="col">Torneo</th>
                                                        <th class="text-center" data-sort="owner" scope="col">Lugar</th>
                                                        <th class="text-center" data-sort="industry_type" scope="col">Temporada</th>
                                                        <th class="text-center" data-sort="star_value" scope="col">Modalidad</th>
                                                        <th class="text-center" data-sort="location" scope="col">Dias</th>
                                                        <th class="text-center" data-sort="location" scope="col">Horarios</th>
                                                        <th class="text-center" data-sort="location" scope="col">Fecha Inicio</th>
                                                        <th class="text-center" data-sort="location" scope="col">Fecha Fin</th>
                                                        <th class="text-center" data-sort="location" scope="col">Categoría</th>
                                                        <th class="text-center" scope="col">Accion</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list form-check-all">
                                                    <?php
                                                        if ($d->lista):
                                                            foreach ($d->lista as $tor): 
                                                         
                                                    ?>
                                                    <tr>
                                                        <!-- <th scope="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                            </div>
                                                        </th> -->
                                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ001</a>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0">
                                                                    <img src="<?php echo IMAGES.$tor->img;?>" alt="" class="avatar-xxs rounded-circle image_src object-cover">
                                                                </div>
                                                                <div class="flex-grow-1 ms-2 name"><?php echo $tor->nombre_torneo;?>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center"><?php echo $tor->lugar;?></td>
                                                        <td class="text-center"><?php echo $tor->temporada;?></td>     
                                                        <td class="text-center"><?php echo $tor->modalidad;?></td>
                                                        <td class="text-center"><?php echo $tor->dias;?></td>  
                                                        <td class="text-center"><?php echo $tor->horarios;?></td>
                                                        <td class="text-center"><?php echo $tor->fecha_inicio;?></td>
                                                        <td class="text-center"><?php echo $tor->fecha_fin;?></td>
                                                        <td class="text-center"><?php echo $tor->categoria;?></td>   
                                                        <td>
                                                            <ul class="list-inline hstack gap-2 mb-0">                                                                
                                                                <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                                    <a href="javascript:void(0);" class="view-item-btn"><i class="ri-eye-fill align-bottom text-muted"></i></a>
                                                                </li>
                                                                <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                                                                    <a class="edit-item-btn" href="#showModal" data-bs-toggle="modal"><i class="ri-pencil-fill align-bottom text-muted"></i></a>
                                                                </li>
                                                                <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Delete">
                                                                    <a class="remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                        <i class="ri-delete-bin-fill align-bottom text-muted"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>                                             
                                                    </tr>
                                                    <?php endforeach; ?>

                                                <?php else: ?>

                                                    <tr><td colspan="9">No se encuentran registros</td></tr>

                                                <?php endif; ?>

                                                </tbody>
                                            </table>
                                            <div class="noresult" style="display: none">
                                                <div class="text-center">
                                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px">
                                                    </lord-icon>
                                                    <h5 class="mt-2">Sorry! No Result Found</h5>
                                                    <p class="text-muted mb-0">We've searched more than 150+ companies We did not find any
                                                        companies for you search.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end mt-3">
                                            <div class="pagination-wrap hstack gap-2">
                                                <a class="page-item pagination-prev disabled" href="#">
                                                    Atras
                                                </a>
                                                <ul class="pagination listjs-pagination mb-0"></ul>
                                                <a class="page-item pagination-next" href="#">
                                                    Siguiente
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content border-0">
                                                <div class="modal-header bg-soft-info p-3">
                                                    <h5 class="modal-title" id="">Torneo</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                                                </div>
                                                <form id="miTorneo" class="miTorneo" method="POST" enctype="multipart/form-data">
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
                                                                        </div>
                                                                        <div class="avatar-lg p-1">
                                                                            <div class="avatar-title bg-light rounded-circle">
                                                                                <img src="../assets/images/users/multi-user.jpg" id="companylogo-img" class="avatar-md rounded-circle object-cover" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <h5 class="fs-13 mt-3">Torneo Logo</h5>
                                                                </div>                                                                
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <label for="nombre" class="form-label">Nombre</label>
                                                                <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ingrese nombre" required />
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div>
                                                                    <label for="lugar" class="form-label">Lugar</label>
                                                                    <input type="text" id="lugar" name="lugar" class="form-control" placeholder="Ingrese lugar" required />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div>
                                                                    <label for="temporada" class="form-label">Temporada</label>
                                                                    <input type="text" id="temporada" name="temporada" class="form-control" placeholder="Ingrese temporada" required />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div>
                                                                    <label for="modalidad" class="form-label">Modalidad</label>
                                                                    <input type="text" id="modalidad" name="modalidad" class="form-control" placeholder="Ingrese modalidad" required />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div >
                                                                    <label for="dias" class="form-label">Dias</label>
                                                                    <input type="text" id="dias_text" name="dias_text" hidden>
                                                                    <select class="form-select" multiple="" id = "dias" name="dias" data-placeholder="  Selecciona los dias" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                                                        <option value="Martes">Martes</option>
                                                                        <option value="Miercoles">Miercoles</option>
                                                                        <option value="Jueves">Jueves</option>
                                                                        <option value="Viernes">Viernes</option>
                                                                        <option value="Sabado">Sabado</option>
                                                                        <option value="Domingo">Domingo</option>                                                                        
                                                                    </select>
                                                                </div>
                                                            </div>                                                            
                                                            <div class="col-lg-6">
                                                                <div >
                                                                    <label for="horarios" class="form-label">Horarios</label>
                                                                    <input type="text" id="horarios_text" name="horarios_text" hidden>
                                                                    <select class="form-select" multiple="" id = "horarios" name="horarios" data-placeholder="  Selecciona los horarios" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                                                        <?php for ($hora = 0; $hora <= 17; $hora++) {
                                                                                for ($minuto = 0; $minuto <= 30; $minuto += 30) { $hora_formato = sprintf('%02d:%02d', $hora, $minuto); 
                                                                                    if ($hora >= 8) {
                                                                                        echo '<option value="'.$hora_formato.'">'.$hora_formato.'</option>';
                                                                                    }                                                                                   
                                                                                }
                                                                            }?>                                                                       
                                                                    </select>
                                                                </div>
                                                            </div>  
                                                            <div class="col-lg-6">
                                                                <div>
                                                                    <label for="fecha_inicio" class="form-label">Fecha Inicio</label>
                                                                    <input class="form-control" type="date" id="fecha_inicio" name="fecha_inicio">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div>
                                                                    <label for="fecha_fin" class="form-label">Fecha Inicio</label>
                                                                    <input class="form-control" type="date" id="fecha_fin" name="fecha_fin">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div>
                                                                    <label for="categoria" class="form-label">Categoria</label>
                                                                    <input type="text" id="categoria" name="categoria" class="form-control" placeholder="Ingrese categoria" required />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <div class="hstack gap-2 justify-content-end">
                                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
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
                                                        <h4 class="fs-semibold">You are about to delete a company ?</h4>
                                                        <p class="text-muted fs-14 mb-4 pt-1">Deleting your company will remove all of your information from our database.</p>
                                                        <div class="hstack gap-2 justify-content-center remove">
                                                            <button class="btn btn-link link-success fw-medium text-decoration-none" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</button>
                                                            <button class="btn btn-danger" id="delete-record">Yes, Delete It!!</button>
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
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script> -->
    <script src="../assets/libs/simplebar/simplebar.min.js"></script>
    <script src="../assets/libs/node-waves/waves.min.js"></script>
    <script src="../assets/libs/feather-icons/feather.min.js"></script>
    <script src="../assets/js/pages/plugins/lord-icon-2.1.0.js"></script>    
    <script src="../assets/js/plugins.js"></script>

    <!-- list.js min js -->
    <script src="../assets/libs/list.js/list.min.js"></script>
    <script src="../assets/libs/list.pagination.js/list.pagination.min.js"></script>

    <!-- Sweet Alerts js -->
    <script src="../assets/libs/sweetalert2/sweetalert2.min.js"></script>

    <script src="../assets/js/pages/crm-companies.init.js"></script>
    <!-- App js -->
    <script src="../assets/js/app.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="<?php echo JS.'menu.js'; ?>"></script>   
    <script type="text/javascript" src="<?php echo JS.'torneos.js'; ?>"></script>                                                  
</body>

</html>