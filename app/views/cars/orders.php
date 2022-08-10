  <body id="page-top">
    <?php include '../app/views/templates/user/header.php'; ?>
    <section id="content-detail">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="card border-0">
              <img src="<?= BASEURL; ?>/public/img/<?= $data['res']['cars']['image']; ?>" alt="" class="img-fluid card-singgle-order-img" style="height: 400px;" />
              <div class="card-body">
                <p>Mobil</p>
                <h3 class="card-title"><?= $data['res']['cars']['tipe_mobil']; ?> - <?= $data['res']['cars']['merk_mobil']; ?></h3>
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
                    <p><i class="fa fa-maps mx-2" aria-hidden="true"></i> Maps</p>
                  </div>
                  <div class="col-4 col-xl-3 col-md-4">
                    <p><i class="fa fa-music mx-2" aria-hidden="true"></i> Music</p>
                  </div>
                  <div class="col-4 col-xl-3 col-md-4">
                    <p><i class="fa fa-medkit mx-2" aria-hidden="true"></i> Medkit</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="order-layouts">
      <div class="container">
        <div class="row justify-content-center mt-5">
          <div class="col-12">
            <div class="row justify-content-center">
              <div class="col-xxl-3 col-xl-3 col-md-3">
                <div class="card border-0">
                  <img src="<?= BASEURL; ?>/public/img/<?= $data['res']['cars']['image']; ?>" alt="" class="img-fluid card-singgle-order-img" />
                  <div class="card-body">
                    <h6 class="card-title text-center"><?= $data['res']['cars']['tipe_mobil']; ?></h6>
                  </div>
                </div>
              </div>
              <div class="col-xxl-9 col-xl-9 col-md-9">
                <!-- looping -->
                <div class="row justify-content-center mt-3">
                  <div class="col-xl-10 col-md-10 col-12">
                    <div class="card-body">
                      <h5><?= $data['res']['cars']['tipe_mobil']; ?> - <?= $data['res']['cars']['merk_mobil']; ?></h5>
                      <hr />
                      <p><i class="fa fa-wifi mx-2" aria-hidden="true"></i> Wifi</p>
                      <p><i class="fa fa-map mx-2" aria-hidden="true"></i> Maps</p>
                      <p><i class="fa fa-music mx-2" aria-hidden="true"></i> Music</p>
                      <p><i class="fa fa-medkit mx-2" aria-hidden="true"></i> Medkit</p>
                    </div>
                  </div>
                  <div class="col-xl-2 col-md-2 col-12 d-flex align-items-center justify-content-center">
                    <a href="<?= BASEURL; ?>/cars/orders/<?= $data['res']['cars']['id_mobil']; ?>" class="btn btn-primary" data-toggle="modal" data-target="#editModal<?= $data['res']['cars']['id_mobil']; ?>">Order</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ============= Modal area ============= -->
    <!-- edit modal -->
    <div class="modal" id="editModal<?= $data['res']['cars']['id_mobil']; ?>" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Order Mobil</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="<?= BASEURL; ?>/invoice/cars/<?= $data['res']['cars']['id_mobil']; ?>" method="post">
              <input type="hidden" name="id_mobil" value="<?= $data['res']['cars']['id_mobil']; ?>" />
              <input type="hidden" name="id_user" value="<?= $_SESSION['user_session']; ?>" />
              <div class="form-group">
                <!-- <label for="message-text" class="col-form-label">Gambar</label> -->
                <img src="<?= BASEURL; ?>/public/img/<?= $data['res']['cars']['image']; ?>" alt="" width="48">
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
                <input type="text" class="form-control" id="recipient-name" name="harga" value="<?= $data['res']['cars']['harga']; ?>" readonly />
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
    <!-- end -->
    <?php include '../app/views/templates/user/logout.php'; ?>
    <!-- ============= Modal area ============= -->