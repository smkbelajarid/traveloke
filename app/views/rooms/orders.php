  <body id="page-top">
    <?php include '../app/views/templates/user/header.php'; ?>
    <section id="content-detail">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="card border-0">
              <img src="<?= BASEURL; ?>/public/img/<?= $data['res']['hotels']['gambar']; ?>" alt="rio sadboy 2k19" class="img-fluid card-singgle-order-img" style="height: 400px;" />
              <div class="card-body">
                <p>Hotel</p>
                <h3 class="card-title"><?= $data['res']['hotels']['nama_hotel']; ?></h3>
                <p class="card-text">
                  <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-circle mx-2" style="font-size: 6px" aria-hidden="true"></i> Depasar
                </p>
              </div>
            </div>
            <div class="card border-0 mt-5">
              <div class="card-body">
                <h6>Deskripsi</h6>
                <div class="row justify-content-center">
                  <div class="col-12">
                    <p><?= $data['res']['hotels']['deskripsi']; ?></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card border-0 mt-5">
              <div class="card-body">
                <h6>Fasilitas</h6>
                <div class="row justify-content-center">
                  <div class="col-4 col-xl-3 col-md">
                    <p><i class="fa fa-wifi mx-2" aria-hidden="true"></i> Wifi</p>
                  </div>
                  <div class="col-4 col-xl-3 col-md-4">
                    <p><i class="fa fa-bed mx-2" aria-hidden="true"></i> Kasur</p>
                  </div>
                  <div class="col-4 col-xl-3 col-md-4">
                    <p><i class="fa fa-bath mx-2" aria-hidden="true"></i> Bath up</p>
                  </div>
                  <div class="col-4 col-xl-3 col-md-4">
                    <p><i class="fa fa-medkit mx-2" aria-hidden="true"></i> Medkit</p>
                  </div>
                  <div class="col-4 col-xl-3 col-md-4">
                    <p><i class="fa fa-beer mx-2" aria-hidden="true"></i> Bar</p>
                  </div>
                  <div class="col-4 col-xl-3 col-md-4">
                    <p><i class="fa fa-car mx-2" aria-hidden="true"></i> Antar Jemput Bandara</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php foreach ($data['res']['rooms'] as $res) : ?>
      <section id="order-layouts">
        <div class="container">
          <div class="row justify-content-center mt-5">
            <div class="col-12">
              <div class="row justify-content-center">
                <div class="col-xxl-3 col-xl-3 col-md-3">
                  <div class="card border-0">
                    <img src="<?= BASEURL; ?>/public/img/<?= $res['gambar']; ?>" alt="rio sadboy 2k19" class="img-fluid card-singgle-order-img" />
                    <div class="card-body">
                      <h6 class="card-title text-center"><?= $res['tipe_kamar']; ?></h6>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-9 col-xl-9 col-md-9">
                  <!-- looping -->
                  <div class="row justify-content-center mt-3">
                    <div class="col-xl-10 col-md-10 col-12">
                      <div class="card-body">
                        <h5><?= $res['tipe_kamar']; ?></h5>
                        <hr />
                        <p><i class="fa fa-wifi mx-2" aria-hidden="true"></i> Wifi</p>
                        <p><i class="fa fa-bed mx-2" aria-hidden="true"></i> Kasur Double</p>
                        <p><i class="fa fa-user mx-2" aria-hidden="true"></i> 2 Orang</p>
                      </div>
                    </div>
                    <div class="col-xl-2 col-md-2 col-12 d-flex align-items-center justify-content-center">
                      <a href="<?= BASEURL; ?>/rooms/orders/<?= $res['id_kamar']; ?>" class="btn btn-primary" data-toggle="modal" data-target="#editModal<?= $res['id_kamar']; ?>">Order</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <?php endforeach; ?>

    <!-- ============= Modal area ============= -->
    <!-- edit modal -->
    <?php foreach ($data['res']['rooms'] as $res) : ?>
      <div class="modal" id="editModal<?= $res['id_kamar']; ?>" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Order Kamar</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="<?= BASEURL; ?>/invoice/rooms/<?= $res['id_kamar']; ?>" method="post">
                <input type="hidden" name="id_kamar" value="<?= $res['id_kamar']; ?>" />
                <input type="hidden" name="id_user" value="<?= $_SESSION['user_session']; ?>" />
                <div class="form-group">
                  <!-- <label for="message-text" class="col-form-label">Gambar</label> -->
                  <img src="<?= BASEURL; ?>/public/img/<?= $res['gambar']; ?>" alt="" width="48">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Hari Mulai</label>
                  <input type="date" class="form-control" id="recipient-name" name="hari_mulai" />
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Hari Selesai</label>
                  <input type="date" class="form-control" id="recipient-name" name="hari_selesai" />
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Jumlah</label>
                  <input type="phone" class="form-control" id="message-text" name="jumlah" required></input>
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Harga</label>
                  <input type="text" class="form-control" id="recipient-name" name="harga" value="<?= $res['harga']; ?>" readonly />
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
    <?php include '../app/views/templates/user/logout.php'; ?>
    <!-- ============= Modal area ============= -->