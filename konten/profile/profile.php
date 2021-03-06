<?php

include("../../koneksi/koneksi.php");

//MulaiSession
session_start();
if(empty($_SESSION['level'])){
	header("location:../../index.php?pesan=belumLogin");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>PT HERO SUPERMARKET TBK - PROFILE </title>

  <!-- Custom fonts for this template-->
  <link href="../../../../assets/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="../../assets/sb-admin-2.min.css" rel="stylesheet">
  <link href="../../assets/datatables/jquery.dataTables.min.css" rel="stylesheet">
  <link href="../../image/logohero2.png" rel="shortcut icon">
  <script src="../../assets/fontawesome.js" crossorigin="anonymous"></script>
</head>

<body class="bg-info">


  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-h-square"></i>
        </div>
        <div class="sidebar-brand-text mx-3"> PT HERO SUPERMARKET TBK <sup>admin</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <?php

      if($_SESSION['level']=='admin') { ?>
      <li class="nav-item active">
        <a class="nav-link" href="../dashboard.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span> Dashboard</span></a>
      </li>

      <?php } ?>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">

      </div>

      <!-- Nav Item -DATA PENITIPAN -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="../penitipan/penitipan.php">
          <i class="fas fa-server"></i>
          <span>DATA PENITIPAN </span>
        </a>
      </li>

      <!-- Nav Item - DATA LOKER -->
      <?php

      if($_SESSION['level']=='admin') { ?>
      <li class="nav-item">
        <a class="nav-link collapsed" href="../loker/loker.php">
        <i class="fas fa-door-closed"></i>
          <span>DATA LOKER</span>
        </a>
      </li>
      <?php } ?>


      <!-- Nav Item -DATA PENGAMBILAN -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="../pengambilan/pengambilan.php">
          <i class="fas fa-exchange-alt"></i>
          <span>DATA PENGAMBILAN</span>
        </a>
      </li>

      <!-- Nav Item - laporan Data -->
      <?php

      if($_SESSION['level']=='admin') { ?>
      <li class="nav-item">
        <a class="nav-link collapsed" href="../laporandata/laporandata.php">
          <i class="fas fa-chalkboard-teacher"></i>
          <span>LAPORAN DATA</span>
        </a>
      </li>

      <?php } ?>

      <!-- Nav Item - MANAGEMENT USER -->
      <?php

      if($_SESSION['level']=='admin') { ?>
      <li class="nav-item">
        <a class="nav-link collapsed" href="../managementuser/managementuser.php">
          <i class="fas fa-book-open"></i>
          <span>MANAGEMENT USER</span>
        </a>
      </li>

      <?php } ?>

    </ul>
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
              <input type="text-center" class="form-control bg-light border-0 small btn " placeholder="Search for..."
                aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>

              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                      aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

           <!-- Nav Item - Pesan Masuk -->
           <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Pesan Masuk -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Pesan Masuk -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  PESAN MASUK
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">Agustus 17, 2020</div>
                    <span class="font-weight-bold">Barang Ramadan setiawan Telah diambil</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">Juli 7, 2020</div>
                    Barang fahran setiabudi telah diambil
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">Juli 5, 2020</div>
                    Barang Nisa Telah diambil
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Pesan Masuk</a>
              </div>
            </li>


            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">(<?=$_SESSION['level']; ?>)</span>
                <i class="fas fa-user-cog"></i>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="profile.php">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile (<?=$_SESSION['nama']; ?>)
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Data Profile-->
          <div class="d-sm-flex justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 ">DATA PROFILE  </h1>
          </div>

          <!-- Page Data Profile -->
          <div class="row">
            <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <h4>NIK</h4>
                <p>20192919292</p>
                <h4>NAMA</h4>
                <p>RAMADAN SATRIA</p>
                <h4>TANGGAL LAHIR</h4>
                <p>17/08/1998</p>
                <h4>ALAMAT</h4>
                <p>Jl.Kenari Raya</p>
                <h4>No.Tlp</h4>
                <p>0882183213</p>
                <h4>Divisi Bagian</h4>
                <p>IT</p>
                
                <a href="editprofile.php" class="btn btn-sms btn-primary btn-sm"></i> EDIT PROFILE</a>      
                <a href="gantipassword.php" class="btn btn-sms btn-danger btn-sm"></i> GANTI PASSWORD</a>
              </div>
            </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-12 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="dropdown no-arrow">
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->
          <div class="row  ">
            <div class="col-lg-12 mb-4">

              <!-- Illustrations -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary text-center">FILASAFAT HERO</h6>
                </div>
                <div class="card-body">
                  <h6 class=" font-weight-bold text-primary">
                    <p>1. Kita Selalu Mengutamakan Service Yang Terbaik Kepada Pelanggan </p>
                    <p>2. Kita Selalu menyediakan produk yang bermutu tinggi sesuai dengan kebutuhan pelanggan</p>
                    <p>3. Kita Bersama-sama menciptakan kesatuan manajemen yang sempurna, sehingga Hero dapat
                      berpartisipasi dalam Pembangunan negara kita. Mencapai kesejahteraan sesama karyawan dan menuju
                      kemajuan perusahaan</p>
                  </h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Footer -->
      <footer class="sticky-footer bg-dark">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Aplikasi Penitipan Barang 2020</span>
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
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">"APAKAH ANDA YAKIN MAU LOGOUT ?" </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../../assets/jquery.min.js"></script>
  <script src="../../assets/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../../assets/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../../assets/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../../assets/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../../assets/chart-area-demo.js"></script>
  <script src="../../assets/chart-pie-demo.js"></script>
  <script src="../../assets/datatables/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#example').DataTable({
        "order": [
          [3, "desc"]
        ]
      });
    });
  </script>
</body>

</html>