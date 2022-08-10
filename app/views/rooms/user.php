  <body id="page-top hotel-user">
    <?php include '../app/views/templates/user/header.php'; ?>
    <section id="all-content">
      <div class="container">
        <div class="row justify-content-center">
          <?php include '../app/views/templates/user/sidebar.php'; ?>
          <div class="col-xxl-9 col-xl-9 col-md-9">
            <section id="main-content">
              <div class="row justify-content-center card-container">
                <!-- card -->
                <?php foreach ($data['res']['hotels'] as $hotels) : ?>
                  <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-xs-12 col-12 mb-3">
                    <div class="card card-list-container-user p-2">
                      <a href="<?= BASEURL; ?>/rooms/orders/<?= $hotels['id_hotel']; ?>" class="text-decoration-none text-dark">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="<?= BASEURL; ?>/public/img/<?= $hotels['gambar']; ?>" alt="raze" class="img-fluid" />
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title"><?= $hotels['nama_hotel']; ?></h5>
                              <p class="card-text">
                                <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-circle mx-2" style="font-size: 6px" aria-hidden="true"></i> Depasar
                              </p>
                              <p class="card-text">
                                <i class="fa fa-wifi mx-2" aria-hidden="true"></i> <i class="fa fa-bed mx-2" aria-hidden="true"></i> <i class="fa fa-bath mx-2" aria-hidden="true"></i> <i class="fa fa-medkit mx-2" aria-hidden="true"></i>
                              </p>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
            </section>
          </div>
        </div>
      </div>
    </section>
    <?php include '../app/views/templates/user/logout.php'; ?>