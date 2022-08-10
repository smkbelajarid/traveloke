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
                <?php foreach ($data['res']['cars'] as $res) : ?>
                  <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-xs-12 col-12 mb-3">
                    <div class="card card-list-container-user p-2">
                      <a href="<?= BASEURL; ?>/cars/orders/<?= $res['id_mobil']; ?>" class="text-decoration-none text-dark">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="<?= BASEURL; ?>/public/img/<?= $res['image']; ?>" alt="raze" class="img-fluid" />
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title"><?= $res['tipe_mobil'] ?> - <?= $res['merk_mobil']; ?></h5>
                              <p class="card-text">
                                <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
                              </p>
                              <p class="card-text">
                                <i class="fa fa-wifi mx-2" aria-hidden="true"></i> <i class="fa fa-map mx-2" aria-hidden="true"></i> <i class="fa fa-music mx-2" aria-hidden="true"></i> <i class="fa fa-medkit mx-2" aria-hidden="true"></i>
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