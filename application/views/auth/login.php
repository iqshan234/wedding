<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-6 col-lg-6 col-md-6">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              
              <div class="col-lg-12">
                <div class="p-5">
               
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Selamat Datang Nazwa WO</h1>
										<br><center><p>Repost by <a href='https://stokcoding.com/' title='StokCoding.com' target='_blank'>StokCoding.com</a></p></center>
										
                  </div>
                   <?= $this->session->flashdata('message'); ?>
                  <form class="user" action="<?= base_url('auth/login'); ?>" method="post">
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email" value="admin@gmail.com" required>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password" value="admin" required>
                    </div>
                   
                    <input type="submit" name="login" class="btn btn-primary btn-user btn-block" value="Login">
                    <hr>
                   
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="<?= base_url('user/user/forget'); ?>">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="<?= base_url('user/user/register'); ?>">Create an Account!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
