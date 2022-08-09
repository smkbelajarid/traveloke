<body id="page-top">
<!-- Page Wrapper -->
<div id="wrapper">
<?php include '../app/views/templates/sidebar.php'; ?>
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

<!-- Topbar Navbar -->
<ul class="navbar-nav ml-auto">
<!-- Nav Item - Search Dropdown (Visible Only XS) -->
<li class="nav-item dropdown no-arrow d-sm-none">
<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fas fa-search fa-fw"></i>
</a>
<!-- Dropdown - Messages -->
<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
<form class="form-inline mr-auto w-100 navbar-search">
<div class="input-group">
<input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
<div class="input-group-append">
<button class="btn btn-primary" type="button">
<i class="fas fa-search fa-sm"></i>
</button>
</div>
</div>
</form>
</div>
</li>

<!-- Nav Item - User Information -->
<li class="nav-item dropdown no-arrow">
<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<span class="mr-2 d-none d-lg-inline text-gray-600 small">Danta</span>
<img class="img-profile rounded-circle" src="img/undraw_profile.svg" />
</a>
<!-- Dropdown - User Information -->
<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
<a class="dropdown-item" href="#">
<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
Profile
</a>
<a class="dropdown-item" href="#">
<i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
Settings
</a>
<a class="dropdown-item" href="#">
<i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
Activity Log
</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
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
<h1 class="h3 mb-0 text-gray-800">Mobil</h1>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between my-4">
<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#createModal"></i>Tambah Data Mobil</a>
<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

<?php if (isset($data['invoice'])){ ?>
<!-- Begin Page Content -->
<div class="container-fluid">
<!-- ========== Container neee  ==========  -->

<!-- DataTales Example -->
<div class="row justify-content-center align-items-center">
<div class="col-12 col-xl-8 col-md-10">
<div class="row justify-content-center">

<?php
if (isset($data['invoice']['cars'])) :
foreach ($data['invoice']['cars'] as $res) :
?>
<div class="col-xl-6">
<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary">Flights Data</h6>
</div>
<div class="card-body">
<img src="<?= $res['gambar']; ?>" alt="" class="img-fluid">
<div class="row justify-content-center mt-3">
<div class="col-xl-6 col-lg-6 col-md-6 ">
<h6>Tipe Mobil</h6>
<h6>Merek Mobil</h6>
<h6>Jumlah Kursi</h6>
<h6>Harga</h6>
</div>
<div class="col-xl-6 col-lg-6 col-md-6 text-right">
<h6 class="font-weight-bold text-dark"><?= $res['tipe_mobil']; ?></h6>
<h6 class="font-weight-bold text-dark"><?= $res['merk_mobil']; ?></h6>
<h6 class="font-weight-bold text-dark"><?= $res['jumlah_kursi']; ?></h6>
<h6 class="font-weight-bold text-dark">Rp. <?= $res['harga']; ?>/hari</h6>
</div>
</div>
</div>
</div>
</div>

<div class="col-xl-6">
<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary">Flights Data</h6>
</div>
<div class="card-body">
<div class="row justify-content-center">
<div class="col-xl-6 col-lg-6 col-md-6">
<h6>Id Pemesanan</h6>
<h6>Jenis Pemesanan</h6>
<h6>Hari Mulai</h6>
<h6>Hari Selesai</h6>
<hr>
<h6>Total Harga</h6>
</div>
<div class="col-xl-6 col-lg-6 col-md-6 text-right">
<h6 class="font-weight-bold text-dark"><?= $res['id_pemesanan'] ?></h6>
<h6 class="font-weight-bold text-dark"><?= $res['jenis_pesanan']; ?></h6>
<h6 class="font-weight-bold text-dark"><?= $res['hari_mulai']; ?></h6>
<h6 class="font-weight-bold text-dark"><?= $res['hari_selesai']; ?></h6>
<hr>
<h4 class="font-weight-bold text-primary fs-5"><?= $res['total_harga']; ?></h4>
</div>
</div>
</div>
</div>
</div>
<?php
endforeach;
endif;

if (isset($data['invoice']['flights'])) :
foreach ($data['invoice']['flights'] as $res) :
?>
<div class="col-xl-6">
<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary">Flights Data</h6>
</div>
<div class="card-body">
<img src="<?= $res['gambar']; ?>" alt="" class="img-fluid">
<div class="row justify-content-center mt-3">
<div class="col-xl-6 col-lg-6 col-md-6 ">
<h6>Kelas Penerbangan</h6>
<h6>Maskapai Penerbangan</h6>
<h6>Harga</h6>
</div>
<div class="col-xl-6 col-lg-6 col-md-6 text-right">
<h6 class="font-weight-bold text-dark"><?= $res['kelas_penerbangan']; ?></h6>
<h6 class="font-weight-bold text-dark"><?= $res['maskapai_penerbangan']; ?></h6>
<h6 class="font-weight-bold text-dark">Rp. <?= $res['harga']; ?>/hari</h6>
</div>
</div>
</div>
</div>
</div>

<div class="col-xl-6">
<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary">Flights Data</h6>
</div>
<div class="card-body">
<div class="row justify-content-center">
<div class="col-xl-6 col-lg-6 col-md-6">
<h6>Id Pemesanan</h6>
<h6>Jenis Pemesanan</h6>
<h6>Hari Mulai</h6>
<h6>Hari Selesai</h6>
<hr>
<h6>Total Harga</h6>
</div>
<div class="col-xl-6 col-lg-6 col-md-6 text-right">
<h6 class="font-weight-bold text-dark"><?= $res['id_pemesanan'] ?></h6>
<h6 class="font-weight-bold text-dark"><?= $res['jenis_pesanan']; ?></h6>
<h6 class="font-weight-bold text-dark"><?= $res['hari_mulai']; ?></h6>
<h6 class="font-weight-bold text-dark"><?= $res['hari_selesai']; ?></h6>
<hr>
<h4 class="font-weight-bold text-primary fs-5"><?= $res['total_harga']; ?></h4>
</div>
</div>
</div>
</div>
</div>
<?php
endforeach;
endif;

if (isset($data['invoice']['ships'])) :
foreach ($data['invoice']['ships'] as $res) :
?>
<div class="col-xl-6">
<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary">Flights Data</h6>
</div>
<div class="card-body">
<img src="<?= $res['gambar']; ?>" alt="" class="img-fluid">
<div class="row justify-content-center mt-3">
<div class="col-xl-6 col-lg-6 col-md-6 ">
<h6>Kelas Pelayaran</h6>
<h6>Maskapai Pelayaran</h6>
<h6>Harga</h6>
</div>
<div class="col-xl-6 col-lg-6 col-md-6 text-right">
<h6 class="font-weight-bold text-dark"><?= $res['kelas_pelayaran']; ?></h6>
<h6 class="font-weight-bold text-dark"><?= $res['maskapai_pelayaran']; ?></h6>
<h6 class="font-weight-bold text-dark">Rp. <?= $res['harga']; ?>/hari</h6>
</div>
</div>
</div>
</div>
</div>

<div class="col-xl-6">
<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary">Flights Data</h6>
</div>
<div class="card-body">
<div class="row justify-content-center">
<div class="col-xl-6 col-lg-6 col-md-6">
<h6>Id Pemesanan</h6>
<h6>Jenis Pemesanan</h6>
<h6>Hari Mulai</h6>
<h6>Hari Selesai</h6>
<hr>
<h6>Total Harga</h6>
</div>
<div class="col-xl-6 col-lg-6 col-md-6 text-right">
<h6 class="font-weight-bold text-dark"><?= $res['id_pemesanan'] ?></h6>
<h6 class="font-weight-bold text-dark"><?= $res['jenis_pesanan']; ?></h6>
<h6 class="font-weight-bold text-dark"><?= $res['hari_mulai']; ?></h6>
<h6 class="font-weight-bold text-dark"><?= $res['hari_selesai']; ?></h6>
<hr>
<h4 class="font-weight-bold text-primary fs-5"><?= $res['total_harga']; ?></h4>
</div>
</div>
</div>
</div>
</div>
<?php
endforeach;
endif;

if (isset($data['invoice']['rooms'])) :
foreach ($data['invoice']['rooms'] as $res) :
?>
<div class="col-xl-6">
<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary">Flights Data</h6>
</div>
<div class="card-body">
<img src="<?= $res['gambar']; ?>" alt="" class="img-fluid">
<div class="row justify-content-center mt-3">
<div class="col-xl-6 col-lg-6 col-md-6 ">
<h6>Tipe Kamar</h6>
<h6>Deskripsi</h6>
<h6>Harga</h6>
</div>
<div class="col-xl-6 col-lg-6 col-md-6 text-right">
<h6 class="font-weight-bold text-dark"><?= $res['tipe_kamar']; ?></h6>
<h6 class="font-weight-bold text-dark"><?= $res['deskripsi']; ?></h6>
<h6 class="font-weight-bold text-dark">Rp. <?= $res['harga']; ?>/hari</h6>
</div>
</div>
</div>
</div>
</div>

<div class="col-xl-6">
<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary">Flights Data</h6>
</div>
<div class="card-body">
<div class="row justify-content-center">
<div class="col-xl-6 col-lg-6 col-md-6">
<h6>Id Pemesanan</h6>
<h6>Jenis Pemesanan</h6>
<h6>Hari Mulai</h6>
<h6>Hari Selesai</h6>
<hr>
<h6>Total Harga</h6>
</div>
<div class="col-xl-6 col-lg-6 col-md-6 text-right">
<h6 class="font-weight-bold text-dark"><?= $res['id_pemesanan'] ?></h6>
<h6 class="font-weight-bold text-dark"><?= $res['jenis_pesanan']; ?></h6>
<h6 class="font-weight-bold text-dark"><?= $res['hari_mulai']; ?></h6>
<h6 class="font-weight-bold text-dark"><?= $res['hari_selesai']; ?></h6>
<hr>
<h4 class="font-weight-bold text-primary fs-5"><?= $res['total_harga']; ?></h4>
</div>
</div>
</div>
</div>
</div>
<?php
endforeach;
foreach ($data['invoice']['rooms'] as $res) :
?>
<div class="col-xl-6">
<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary">Flights Data</h6>
</div>
<div class="card-body">
<div class="row justify-content-center">
<div class="col-xl-6 col-lg-6 col-md-6">
<h6>Id Pemesanan</h6>
<h6>Jenis Pemesanan</h6>
<h6>Hari Mulai</h6>
<h6>Hari Selesai</h6>
<hr>
<h6>Total Harga</h6>
</div>
<div class="col-xl-6 col-lg-6 col-md-6 text-right">
<h6 class="font-weight-bold text-dark"><?= $res['id_pemesanan'] ?></h6>
<h6 class="font-weight-bold text-dark"><?= $res['jenis_pesanan']; ?></h6>
<h6 class="font-weight-bold text-dark"><?= $res['hari_mulai']; ?></h6>
<h6 class="font-weight-bold text-dark"><?= $res['hari_selesai']; ?></h6>
<hr>
<h4 class="font-weight-bold text-primary fs-5"><?= $res['total_harga']; ?></h4>
</div>
</div>
</div>
</div>
</div>

<div class="col-xl-6">
<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary">Flights Data</h6>
</div>
<div class="card-body">
<div class="row justify-content-center">
<div class="col-xl-6 col-lg-6 col-md-6">
<h6>Id Pemesanan</h6>
<h6>Jenis Pemesanan</h6>
<h6>Hari Mulai</h6>
<h6>Hari Selesai</h6>
<hr>
<h6>Total Harga</h6>
</div>
<div class="col-xl-6 col-lg-6 col-md-6 text-right">
<h6 class="font-weight-bold text-dark"><?= $res['id_pemesanan'] ?></h6>
<h6 class="font-weight-bold text-dark"><?= $res['jenis_pesanan']; ?></h6>
<h6 class="font-weight-bold text-dark"><?= $res['hari_mulai']; ?></h6>
<h6 class="font-weight-bold text-dark"><?= $res['hari_selesai']; ?></h6>
<hr>
<h4 class="font-weight-bold text-primary fs-5"><?= $res['total_harga']; ?></h4>
</div>
</div>
</div>
</div>
</div>
<?php
endforeach; 
endif;
 ?>

</div>
</div>
</div>
<!--  ========== akhir Container neee  ========== -->
</div>
<!-- /.container-fluid -->
<?php } ?>
</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
<div class="container my-auto">
<div class="copyright text-center my-auto">
<span>Copyright &copy; Your Website 2021</span>
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
<a class="btn btn-primary" href="login.html">Logout</a>
</div>
</div>
</div>
</div>