
<body class="bg-gradient-primary">
    <div class="container">
      <!-- Outer Row -->
      <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
          <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
              <!-- Nested Row within Card Body -->
              <div class="row">
                <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                <div class="col-lg-6">
                  <div class="p-5">
                    <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-4">Selamat Datang</h1>
                    </div>
                    <form class="user" action="<?= BASEURL; ?>/login/auth" method="post">
                      <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username" />
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password" />
                      </div>
                      <div class="row">
                        <div class="col-6">
                          <div class="form-group">
                            <div class="custom-control custom-checkbox small">
                              <input type="checkbox" class="custom-control-input" id="customCheck" />
                              <label class="custom-control-label" for="customCheck">Remember Me</label>
                            </div>
                          </div>
                        </div>
                        <div class="col-6 text-right">
                          <a class="small" href="forgot-password.html">Forgot Password?</a>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary btn-user btn-block">
                        Login
                      </button>
                      <hr />
                      <div class="row">
                        <div class="col-6">
                          <a href="index.html" class="btn btn-google btn-user btn-block"> <i class="fab fa-google fa-fw"></i> Register with Google </a>
                        </div>
                        <div class="col-6">
                          <a href="index.html" class="btn btn-facebook btn-user btn-block"> <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook </a>
                        </div>
                      </div>
                    </form>
                    <hr />
                    <div class="text-center">
                      <p>Belum Punya Akun ? <a href="register.html">Register</a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
