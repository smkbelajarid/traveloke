  <body id="page-top">
    <section id="page-header">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col">
            <div id="page-header-box">
              <div class="col-xxl-10 col-xl-10 col-md-10 col-xs-10 col-10">
                <h1>Invoice</h1>
              </div>
              <div class="col-xxl-2 col-xl-2 col-md-2 col-xs-2 col-2">
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
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="dashboard-layouts">
      <div class="container">
        <div class="row justify-content-center">
          <?php include '../app/views/templates/user/sidebar.php'; ?>
          <div class="col-xxl-9 col-xl-9 col-md-9">
            <section id="main-content">
              <div class="row justify-content-center">
                <div class="col-12">
                  <!-- card- hotel -->
                  <div class="card mb-3">
                    <div class="card-header py-3">
                      <h6 class="m-0 font-weight-bold text-primary">Data Kamar</h6>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                            <tr>
                              <th>Id Pemesanan</th>
                              <th>Jenis Pemesanan</th>
                              <th>Hari Mulai</th>
                              <th>Hari Selesai</th>
                              <th>Tipe Kamar</th>
                              <th>Deskripsi</th>
                              <th>Harga</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php foreach ($data['invoice']['rooms'] as $res) : ?>
                              <tr>
                                <td><?= $res['id_pemesanan']; ?></td>
                                <td><?= $res['jenis_pesanan']; ?></td>
                                <td><?= $res['hari_mulai']; ?></td>
                                <td><?= $res['hari_selesai']; ?></td>
                                <td><?= $res['tipe_kamar']; ?></td>
                                <td><?= $res['deskripsi']; ?></td>
                                <td><?= $res['total_harga']; ?></td>
                              </tr>
                            <?php endforeach; ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-3">
                    <div class="card-header py-3">
                      <h6 class="m-0 font-weight-bold text-primary">Data Mobil</h6>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                            <tr>
                              <th>Id Pemesanan</th>
                              <th>Jenis Pemesanan</th>
                              <th>Hari Mulai</th>
                              <th>Hari Selesai</th>
                              <th>Tipe Mobil</th>
                              <th>Jumlah Kursi</th>
                              <th>Harga</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php foreach ($data['invoice']['cars'] as $res) : ?>
                              <tr>
                                <td><?= $res['id_pemesanan']; ?></td>
                                <td><?= $res['jenis_pesanan']; ?></td>
                                <td><?= $res['hari_mulai']; ?></td>
                                <td><?= $res['hari_selesai']; ?></td>
                                <td><?= $res['tipe_mobil']; ?></td>
                                <td><?= $res['jumlah_kursi']; ?></td>
                                <td><?= $res['total_harga']; ?></td>
                              </tr>
                            <?php endforeach; ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-3">
                    <div class="card-header py-3">
                      <h6 class="m-0 font-weight-bold text-primary">Data Penerbangan</h6>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                            <tr>
                              <th>Id Pemesanan</th>
                              <th>Jenis Pemesanan</th>
                              <th>Hari Mulai</th>
                              <th>Hari Selesai</th>
                              <th>Kelas Penerbangan</th>
                              <th>Maskapai Penerbangan</th>
                              <th>Harga</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php foreach ($data['invoice']['flights'] as $res) : ?>
                              <tr>
                                <td><?= $res['id_pemesanan']; ?></td>
                                <td><?= $res['jenis_pesanan']; ?></td>
                                <td><?= $res['hari_mulai']; ?></td>
                                <td><?= $res['hari_selesai']; ?></td>
                                <td><?= $res['kelas_penerbangan']; ?></td>
                                <td><?= $res['maskapai_penerbangan']; ?></td>
                                <td><?= $res['total_harga']; ?></td>
                              </tr>
                            <?php endforeach; ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-3">
                    <div class="card-header py-3">
                      <h6 class="m-0 font-weight-bold text-primary">Data Pelayaran</h6>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                            <tr>
                              <th>Id Pemesanan</th>
                              <th>Jenis Pemesanan</th>
                              <th>Hari Mulai</th>
                              <th>Hari Selesai</th>
                              <th>Kelas Pelayaran</th>
                              <th>Maskapai Pelayaran</th>
                              <th>Harga</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php foreach ($data['invoice']['ships'] as $res) : ?>
                              <tr>
                                <td><?= $res['id_pemesanan']; ?></td>
                                <td><?= $res['jenis_pesanan']; ?></td>
                                <td><?= $res['hari_mulai']; ?></td>
                                <td><?= $res['hari_selesai']; ?></td>
                                <td><?= $res['kelas_pelayaran']; ?></td>
                                <td><?= $res['maskapai_pelayaran']; ?></td>
                                <td><?= $res['total_harga']; ?></td>
                              </tr>
                            <?php endforeach; ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </section>

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
            <a class="btn btn-primary" href="<?= BASEURL; ?>/logout">Logout</a>
          </div>
        </div>
      </div>
    </div>