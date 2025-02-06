<!DOCTYPE html>
<html lang="en">
    
<?php session_start() ?>
<?php 

  require("../php/conexion.php");

?>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/fmsinlogan.png" rel="icon">
  <title>Dashboard</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <img src="img/logo/fmsinlogan.png">
        </div>
        <div class="sidebar-brand-text mx-3">Fraternidad Mundial</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="upload.php">
          <i class="fas fa-upload"></i>
          <span>Subir Articulo</span></a>
      </li>
      
      <hr class="sidebar-divider">
      <div class="version" id="version-ruangadmin"></div>
    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
        <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>  
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <!-- <i class="fas fa-search fa-fw"></i> -->
              </a>
               <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-1 small" placeholder="What do you want to look for?"
                      aria-label="Search" aria-describedby="basic-addon2" style="border-color: #3f51b5;">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>
         
               </li>

          <!--   <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-tasks fa-fw"></i>
                <span class="badge badge-success badge-counter">3</span>
              </a>
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Task
                </h6>
                <a class="dropdown-item align-items-center" href="#">
                  <div class="mb-3">
                    <div class="small text-gray-500">Design Button
                      <div class="small float-right"><b>50%</b></div>
                    </div>
                    <div class="progress" style="height: 12px;">
                      <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </a>
                <a class="dropdown-item align-items-center" href="#">
                  <div class="mb-3">
                    <div class="small text-gray-500">Make Beautiful Transitions
                      <div class="small float-right"><b>30%</b></div>
                    </div>
                    <div class="progress" style="height: 12px;">
                      <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </a>
                <a class="dropdown-item align-items-center" href="#">
                  <div class="mb-3">
                    <div class="small text-gray-500">Create Pie Chart
                      <div class="small float-right"><b>75%</b></div>
                    </div>
                    <div class="progress" style="height: 12px;">
                      <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">View All Taks</a>
              </div>
            </li> -->
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="img/boy.png" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-white small">Administrador</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Perfil
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Ajustes
                </a>
                <!-- <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a> -->
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Salir
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- Topbar -->
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Listado</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Listado</li>
              <li class="breadcrumb-item active" aria-current="page">Articulo</li>
            </ol>
          </div>
            <?php
                  $sqlArticulo  = ("SELECT * FROM articulo 
                                  where iEstatus=1; ");
                  $queryArticulo = mysqli_query($conn, $sqlArticulo);
                  $cantidad     = mysqli_num_rows($queryArticulo);
                  $articulosonline= array();
            ?>
          <!-- Row -->
          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Articulo</h6>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th>Nombre</th>
                        <th>Fecha</th>
                        <th>Descripción</th>
                        <th>Categoria</th>
                        <th>Imagen</th>
                        <th>Usuario</th>
                        <th>Estatus</th>
                       <!--  <th>Acciones</th> -->
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>Nombre</th>
                        <th>Fecha</th>
                        <th>Descripción</th>
                        <th>Categoria</th>
                        <th>Imagen</th>
                        <th>Usuario</th>
                        <th>Estatus</th>
                   <!--      <th>Acciones</th> -->
                      </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        while ($dataArticulo = mysqli_fetch_array($queryArticulo)) { ?>
                        
                     <tr>
                          
                            <td><?php echo strtoupper($dataArticulo['Nombre']); ?></td>
                            <td><?php echo $dataArticulo['Fecha']; ?></td>
                            <td><?php echo $dataArticulo['Descripcion']; ?></td>
                            <?php if($dataArticulo['fkiIdCategoria']==1) {?> 
                              <td>Teología</td>
                            <?php }?> 
                            <?php if($dataArticulo['fkiIdCategoria']==2) {?> 
                              <td>Filosofía</td>
                            <?php }?>
                            <?php if($dataArticulo['fkiIdCategoria']==3) {?> 
                              <td>Historia</td>
                            <?php }?>
                            <?php if($dataArticulo['fkiIdCategoria']==0) {?> 
                              <td>NA</td>
                            <?php }?>
                            <td><img src="<?php echo $dataArticulo['Imagen']; ?>" alt="ImagenA" width="100" height="100"> </td>
                            <td><?php echo $dataArticulo['usuario']; ?></td>
                            <?php if($dataArticulo['iEstatus']==1) {?> 
                              <td style="padding-left: 20px;"><span  class="badge badge-success" > <a class="text-white" href="func/updatestatus.php?id='<?php echo $dataArticulo['idArticulo']; ?>'&status=1">Activo<a></span></td> 
                            <?php }?> 
                            <?php if($dataArticulo['iEstatus']==0) {?> 
                              <td><span  class="badge badge-danger"><a class="text-white" href="func/updatestatus.php?id='<?php echo $dataArticulo['idArticulo']; ?>'&status=0">Inactivo</a></span></td> 
                            <?php }?>
                            <td>
                              <!--<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteChildresn<?php echo $dataArticulo['idArticulo']; ?>">
                                  Eliminar
                                </button>  -->
                               <!--  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editChildresn<?php echo $dataArticulo['idArticulo']; ?>">
                                  Modificar
                                </button> 
                                <button type="button" class="btn btn-warning" data-toggle="modal"  data-target="#cursomodal<?php echo $dataArticulo['idArticulo']; ?>">
                                  Agregar Curso
                                </button>  -->
                              
                          </td> 
                        </tr>
                            <?php //include('ModalAgregar.php'); ?>
                            <!--Ventana Modal para Actualizar--->
                            <?php //include('ModalEditar.php'); ?>
                            <!--Ventana Modal para la Alerta de Eliminar--->
                            <?php //include('ModalEliminar.php'); ?>
                            <!--Ventana Modal para Agregar Curso--->
                            <?php //include('ModalCurso.php'); ?>
              <?php  }?>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
           
          </div>
          <!--Row-->

          <!-- Documentation Link -->
          <div class="row">
           <!--  <div class="col-lg-12">
              <p>DataTables is a third party plugin that is used to generate the demo table below. For more information
                about DataTables, please visit the official <a href="https://datatables.net/" target="_blank">DataTables
                  documentation.</a></p>
            </div> -->
          </div>

          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>¿Estas seguro que deseas salir?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="login.html" class="btn btn-primary">Cerrar Sesión</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!---Container Fluid-->
      </div>

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>copyright &copy; <script> document.write(new Date().getFullYear()); </script> - developed by
              <b><a href="https://desetecnologias.net/" target="_blank">Dese Tecnologías</a></b>
            </span>
          </div>
        </div>
      </footer>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>

</body>

</html>