    <body id="page-top">
      <?php include '../app/views/templates/user/header.php'; ?>
  
      <section id="dashboard-layouts">
        <div class="container">
          <div class="row justify-content-center">
            <?php include '../app/views/templates/user/sidebar.php'; ?>
            <div class="col-xxl-9 col-xl-9 col-md-9">
              <section id="main-content">
                <div class="row justify-content-center">
                  <div class="col">
                    <h3>Selamat datang, <span class="name-user"><?= $data['user']['name']; ?></span></h3>
                  </div>
                </div>
                <div class="row justify-content-center card-container">
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-xs-12 col-12">
                    <div class="card card-list-container">
                      <a href="hotel-user.html" class="text-decoration-none text-dark">
                        <div class="row justify-content-center align-items-center">
                          <div class="col-9">
                            <div class="card-body">
                              <h2 class="card-title"><?= $_SESSION['count_rooms']; ?></h5>
                              <p class="card-text">Sewa Kamar</p>
                            </div>
                          </div>
                          <div class="col-3">
                            <div class="card-icon">
                              <i class="fa fa-file-text-o" aria-hidden="true"></i>
                            </div>
                          </div>
                        </div>
                      </a>
                      <div class="bootom-card">
                        <a href="">
                          <p>Selengkapnya <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-xs-12 col-12">
                    <div class="card card-list-container">
                      <a href="" class="text-decoration-none text-dark">
                        <div class="row justify-content-center align-items-center">
                          <div class="col-9">
                            <div class="card-body">
                              <h2 class="card-title"><?= $_SESSION['count_cars']; ?></h5>
                              <p class="card-text">Sewa Mobil</p>
                            </div>
                          </div>
                          <div class="col-3">
                            <div class="card-icon">
                              <i class="fa fa-file-text-o" aria-hidden="true"></i>
                            </div>
                          </div>
                        </div>
                      </a>
                      <div class="bootom-card">
                        <a href="">
                          <p>Selengkapnya <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-xs-12 col-12">
                    <div class="card card-list-container">
                      <a href="" class="text-decoration-none text-dark">
                        <div class="row justify-content-center align-items-center">
                          <div class="col-9">
                            <div class="card-body">
                              <h2 class="card-title"><?= $_SESSION['count_flights']; ?></h5>
                              <p class="card-text">Tiket Pesawat</p>
                            </div>
                          </div>
                          <div class="col-3">
                            <div class="card-icon">
                              <i class="fa fa-file-text-o" aria-hidden="true"></i>
                            </div>
                          </div>
                        </div>
                      </a>
                      <div class="bootom-card">
                        <a href="">
                          <p>Selengkapnya <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-xs-12 col-12">
                    <div class="card card-list-container">
                      <a href="" class="text-decoration-none text-dark">
                        <div class="row justify-content-center align-items-center">
                          <div class="col-9">
                            <div class="card-body">
                              <h2 class="card-title"><?= $_SESSION['count_ships']; ?></h5>
                              <p class="card-text">Tiket Kapal</p>
                            </div>
                          </div>
                          <div class="col-3">
                            <div class="card-icon">
                              <i class="fa fa-file-text-o" aria-hidden="true"></i>
                            </div>
                          </div>
                        </div>
                      </a>
                      <div class="bootom-card">
                        <a href="">
                          <p>Selengkapnya <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>
      </section>
      <?php include '../app/views/templates/user/logout.php'; ?>