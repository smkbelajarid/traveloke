  <body class="bg-gradient-primary">
    <div class="container">
      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
            <div class="col-lg-7">
              <div class="p-3 p-xl-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Buat Akun</h1>
                </div>
                <form class="user" action="<?= BASEURL; ?>/register/auth" method="post">
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Nama" autocomplete="off" name="name" required/>
                    </div>
                    <div class="col-sm-6">
                      <input type="phone" class="form-control form-control-user" id="exampleLastName" placeholder="Telp" autocomplete="off" name="phone" required/>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="text" class="form-control form-control-user" id="exampleInputPassword" placeholder="Username" autocomplete="off" name="username" required/>
                    </div>
                    <div class="col-sm-6">
                      <input type="email" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Email" name="email" required/>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" autocomplete="off" name="password" required/>
                    </div>
                    <div class="col-sm-6">
                      <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Confirm Password" name="password2" required/>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary btn-user btn-block"> Register Account </button>
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
                  <p>Sudah Punya Akun ? <a href="<?= BASEURL; ?>/login">Login</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
