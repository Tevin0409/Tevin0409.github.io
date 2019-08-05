<?php require "protect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>TheVlage - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="fontawesome-free-5.9.0-web/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/main.css" rel="stylesheet">
  <link rel="stylesheet" href="css/dashboard.css">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

     <!--Side Bar -->
      <?php require "sidebar.php"?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
            <?php require "TopbarNavbar.php"?>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <!-- Content Row -->
          <!--<div class="row">-->

            <!--&lt;!&ndash; Earnings (Monthly) Card Example &ndash;&gt;-->
            <!--&lt;!&ndash;<div class="col-xl-3 col-md-6 mb-4">&ndash;&gt;-->
              <!--&lt;!&ndash;<div class="card border-left-primary shadow h-100 py-2">&ndash;&gt;-->
                <!--&lt;!&ndash;<div class="card-body">&ndash;&gt;-->
                  <!--&lt;!&ndash;<div class="row no-gutters align-items-center">&ndash;&gt;-->
                    <!--&lt;!&ndash;<div class="col mr-2">&ndash;&gt;-->
                      <!--&lt;!&ndash;<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Earnings (Monthly)</div>&ndash;&gt;-->
                      <!--&lt;!&ndash;<div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>&ndash;&gt;-->
                    <!--&lt;!&ndash;</div>&ndash;&gt;-->
                    <!--&lt;!&ndash;<div class="col-auto">&ndash;&gt;-->
                      <!--&lt;!&ndash;<i class="fas fa-calendar fa-2x text-gray-300"></i>&ndash;&gt;-->
                    <!--&lt;!&ndash;</div>&ndash;&gt;-->
                  <!--&lt;!&ndash;</div>&ndash;&gt;-->
                <!--&lt;!&ndash;</div>&ndash;&gt;-->
              <!--&lt;!&ndash;</div>&ndash;&gt;-->
            <!--&lt;!&ndash;</div>&ndash;&gt;-->

            <!--&lt;!&ndash;&lt;!&ndash; Earnings (Monthly) Card Example &ndash;&gt;&ndash;&gt;-->
            <!--&lt;!&ndash;<div class="col-xl-3 col-md-6 mb-4">&ndash;&gt;-->
              <!--&lt;!&ndash;<div class="card border-left-success shadow h-100 py-2">&ndash;&gt;-->
                <!--&lt;!&ndash;<div class="card-body">&ndash;&gt;-->
                  <!--&lt;!&ndash;<div class="row no-gutters align-items-center">&ndash;&gt;-->
                    <!--&lt;!&ndash;<div class="col mr-2">&ndash;&gt;-->
                      <!--&lt;!&ndash;<div class="text-xs font-weight-bold text-success text-uppercase mb-1">Earnings (Annual)</div>&ndash;&gt;-->
                      <!--&lt;!&ndash;<div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>&ndash;&gt;-->
                    <!--&lt;!&ndash;</div>&ndash;&gt;-->
                    <!--&lt;!&ndash;<div class="col-auto">&ndash;&gt;-->
                      <!--&lt;!&ndash;<i class="fas fa-dollar-sign fa-2x text-gray-300"></i>&ndash;&gt;-->
                    <!--&lt;!&ndash;</div>&ndash;&gt;-->
                  <!--&lt;!&ndash;</div>&ndash;&gt;-->
                <!--&lt;!&ndash;</div>&ndash;&gt;-->
              <!--&lt;!&ndash;</div>&ndash;&gt;-->
            <!--&lt;!&ndash;</div>&ndash;&gt;-->

            <!--&lt;!&ndash;&lt;!&ndash; Earnings (Monthly) Card Example &ndash;&gt;&ndash;&gt;-->
            <!--&lt;!&ndash;<div class="col-xl-3 col-md-6 mb-4">&ndash;&gt;-->
              <!--&lt;!&ndash;<div class="card border-left-info shadow h-100 py-2">&ndash;&gt;-->
                <!--&lt;!&ndash;<div class="card-body">&ndash;&gt;-->
                  <!--&lt;!&ndash;<div class="row no-gutters align-items-center">&ndash;&gt;-->
                    <!--&lt;!&ndash;<div class="col mr-2">&ndash;&gt;-->
                      <!--&lt;!&ndash;<div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks</div>&ndash;&gt;-->
                      <!--&lt;!&ndash;<div class="row no-gutters align-items-center">&ndash;&gt;-->
                        <!--&lt;!&ndash;<div class="col-auto">&ndash;&gt;-->
                          <!--&lt;!&ndash;<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>&ndash;&gt;-->
                        <!--&lt;!&ndash;</div>&ndash;&gt;-->
                        <!--&lt;!&ndash;<div class="col">&ndash;&gt;-->
                          <!--&lt;!&ndash;<div class="progress progress-sm mr-2">&ndash;&gt;-->
                            <!--&lt;!&ndash;<div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>&ndash;&gt;-->
                          <!--&lt;!&ndash;</div>&ndash;&gt;-->
                        <!--&lt;!&ndash;</div>&ndash;&gt;-->
                      <!--&lt;!&ndash;</div>&ndash;&gt;-->
                    <!--&lt;!&ndash;</div>&ndash;&gt;-->
                    <!--&lt;!&ndash;<div class="col-auto">&ndash;&gt;-->
                      <!--&lt;!&ndash;<i class="fas fa-clipboard-list fa-2x text-gray-300"></i>&ndash;&gt;-->
                    <!--&lt;!&ndash;</div>&ndash;&gt;-->
                  <!--&lt;!&ndash;</div>&ndash;&gt;-->
                <!--&lt;!&ndash;</div>&ndash;&gt;-->
              <!--&lt;!&ndash;</div>&ndash;&gt;-->
            <!--&lt;!&ndash;</div>&ndash;&gt;-->

            <!--&lt;!&ndash; Pending Requests Card Example &ndash;&gt;-->
            <!--&lt;!&ndash;<div class="col-xl-3 col-md-6 mb-4">&ndash;&gt;-->
              <!--&lt;!&ndash;<div class="card border-left-warning shadow h-100 py-2">&ndash;&gt;-->
                <!--&lt;!&ndash;<div class="card-body">&ndash;&gt;-->
                  <!--&lt;!&ndash;<div class="row no-gutters align-items-center">&ndash;&gt;-->
                    <!--&lt;!&ndash;<div class="col mr-2">&ndash;&gt;-->
                      <!--&lt;!&ndash;<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Requests</div>&ndash;&gt;-->
                      <!--&lt;!&ndash;<div class="h5 mb-0 font-weight-bold text-gray-800">18</div>&ndash;&gt;-->
                    <!--&lt;!&ndash;</div>&ndash;&gt;-->
                    <!--&lt;!&ndash;<div class="col-auto">&ndash;&gt;-->
                      <!--&lt;!&ndash;<i class="fas fa-comments fa-2x text-gray-300"></i>&ndash;&gt;-->
                    <!--&lt;!&ndash;</div>&ndash;&gt;-->
                  <!--&lt;!&ndash;</div>&ndash;&gt;-->
                <!--&lt;!&ndash;</div>&ndash;&gt;-->
              <!--&lt;!&ndash;</div>&ndash;&gt;-->
            <!--&lt;!&ndash;</div>&ndash;&gt;-->
          <!--</div>-->

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Profile</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body" >
                  <div class="text-sm-center">
                    <img src="img/tev.PNG" class="img-profile  rounded-circle" width="90px" height="90px" alt="">
                    <br>
                    <span>Tevin Obai</span>
                    <br>
                    <span>Co living Resident</span>
                    <hr class="sidebar-divider">
                    <div style="background-color: #333;">
                      Created 4 months ago
                      <br>
                      Last Updated 13 minutes ago
                    </div>
                    <hr class="sidebar-divider">
                    <a href="#" class="d-none d-lg-inline-block btn btn-lg btn-primary shadow-lg edt-btn">Edit Profile</a>

                  </div>
                </div>
              </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Recent Notifications</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <a class="d-flex align-items-center" href="#">
                    <div class="mr-3">
                      <div class="icon-circle bg-success">
                        <i class="fas fa-donate text-white"></i>
                      </div>
                    </div>
                    <div>
                      <div class="small text-gray-500">December 7, 2019</div>
                      $290.29 has been deposited into your account!
                    </div>
                  </a>
                  <a class="d-flex align-items-center" href="#">
                    <div class="mr-3">
                      <div class="icon-circle bg-warning">
                        <i class="fas fa-exclamation-triangle text-white"></i>
                      </div>
                    </div>
                    <div>
                      <div class="small text-gray-500">December 2, 2019</div>
                      Spending Alert: We've noticed unusually high spending for your account.
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; TheVlage 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/dash.js"></script>




</body>

</html>
