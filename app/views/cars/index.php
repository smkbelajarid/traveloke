  <body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
          <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-home"></i>
          </div>
          <div class="sidebar-brand-text mx-3">TRAVELOKE</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0" />

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="<?= BASEURL; ?>/index">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider" />

        <!-- Heading -->
        <div class="sidebar-heading">Hotel</div>
        <li class="nav-item">
          <a class="nav-link collapsed" href="<?= BASEURL; ?>/hotels">
            <i class=" fas fa-fw fa-cog"></i>
            <span>Hotel</span>
          </a>
        </li>

        <div class="sidebar-heading">Tiket</div>
        <li class="nav-item">
          <a class="nav-link collapsed" href="<?= BASEURL; ?>/rooms">
            <i class="fas fa-fw fa-cog"></i>
            <span>Kamar</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="<?= BASEURL; ?>/flights">
            <i class="fas fa-fw fa-cog"></i>
            <span>Pesawat</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link collapsed" href="<?= BASEURL; ?>/cars">
            <i class="fas fa-fw fa-cog"></i>
            <span>Mobil</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link collapsed" href="<?= BASEURL; ?>/ships">
            <i class="fas fa-fw fa-cog"></i>
            <span>Kapal</span>
          </a>
        </li>

        <div class="sidebar-heading">Destinasi</div>
        <li class="nav-item">
          <a class="nav-link collapsed" href="<?= BASEURL; ?>/destination">
            <i class="fas fa-fw fa-cog"></i>
            <span>Wisata</span>
          </a>
        </li>
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
              <div class="dropdown">
                  <a href="" class="float-right" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user-circle fa-2x text-dark" aria-hidden="true"></i>
                  </a>
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
            <!-- ========== Container neee  ==========  -->

            <!-- flasher -->
            <div class="row">
              <div class="col-12">
                <?php Flasher::flash(); ?>
              </div>
            </div>

            <!-- endflasher -->

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Mobil</h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Id Mobil</th>
                        <th>Tipe Mobil</th>
                        <th>Merk Mobil</th>
                        <th>Jumlah Kursi</th>
                        <th>Harga</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($data['res']['cars'] as $cars) : ?>
                        <tr>
                          <td><?= $cars['id_mobil']; ?></td>
                          <td><?= $cars['tipe_mobil']; ?></td>
                          <td><?= $cars['merk_mobil']; ?></td>
                          <td><?= $cars['jumlah_kursi']; ?></td>
                          <td><?= $cars['harga']; ?></td>
                          <td><img src="<?= BASEURL; ?>/public/img/<?= $cars['image']; ?>" alt="" width="48"></td>
                          <td><a href="<?= BASEURL; ?>/cars/edit/<?= $cars['id_mobil']; ?>" class="btn btn-blue" data-toggle="modal" data-target="#editModal<?= $cars['id_mobil']; ?>">Edit</a> <a href="<?= BASEURL; ?>/cars/delete/<?= $cars['id_mobil']; ?>" class="btn btn-danger">Hapus</a></td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!--  ========== akhir Container neee  ========== -->
          </div>
          <!-- /.container-fluid -->
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
              <span aria-hidden="true">??</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="#">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- ============= Modal area ============= -->
    <!-- hotel create -->
    <div class="modal" id="createModal" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Tambah Data Mobil</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="<?= BASEURL; ?>/cars/add" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Tipe Mobil</label>
                <input type="text" class="form-control" id="recipient-name" name="tipe_mobil" />
              </div>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Merk Mobil</label>
                <input type="text" class="form-control" id="recipient-name" name="merk_mobil" />
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Jumlah Kursi</label>
                <input type="text" class="form-control" id="recipient-name" name="jumlah_kursi" />
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Harga</label>
                <input type="number" class="form-control" id="recipient-name" name="harga" />
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Gambar</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupFileAddon01">Upload Gambar</span>
                  </div>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="img">
                    <label class="custom-file-label" for="inputGroupFile01">Pilih File</label>
                  </div>
                </div>
              </div>

          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Kirim</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          </div>
          </form>
        </div>
      </div>
    </div>
    <!-- end create modal -->

    <?php foreach ($data['res']['cars'] as $cars) : ?>
      <!-- edit modal -->
      <div class="modal" id="editModal<?= $cars['id_mobil']; ?>" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Edit Mobil</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="<?= BASEURL; ?>/cars/edit" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id_mobil" value="<?= $cars['id_mobil']; ?>" />
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Tipe Mobil</label>
                  <input type="text" class="form-control" id="recipient-name" name="tipe_mobil" value="<?= $cars['tipe_mobil']; ?>" />
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Merk Mobil</label>
                  <input type="text" class="form-control" id="recipient-name" name="merk_mobil" value="<?= $cars['merk_mobil']; ?>" />
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Jumlah Kursi</label>
                  <input type="text" class="form-control" id="recipient-name" name="jumlah_kursi" value="<?= $cars['jumlah_kursi']; ?>" />
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Harga</label>
                  <input type="number" class="form-control" id="recipient-name" name="harga" value="<?= $cars['harga']; ?>" />
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Gambar</label>
                  <br>
                  <img src="<?= BASEURL; ?>/img/<?= $cars['image']; ?>" alt="" width="300" class="mb-3">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupFileAddon01">Upload Gambar</span>
                    </div>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="img">
                      <label class="custom-file-label" for="inputGroupFile01">Pilih File</label>
                    </div>
                  </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Kirim</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
            </form>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
    <!-- end hotel create -->
    <!-- ============= Modal area ============= -->