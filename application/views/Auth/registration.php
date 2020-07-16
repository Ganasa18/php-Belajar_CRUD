<div class="page-header header-filter">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 ml-auto mr-auto">
        <div class="card card-login">
          <form class="form" method="post" action="<?= base_url('auth/registration') ?>">
            <div class="card-header card-header-primary text-center">
              <h4 class="card-title">Registration</h4>
            </div>
            <div class="card-body pt-2 pb-2">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">mail</i>

                  </span>

                </div>

                <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email..." value="<?= set_value('email'); ?>">
              </div>
              <div class="col-lg text-center ">
                <?= form_error('email', '<small class="text-danger pl-2">', '</small>'); ?>
              </div>

              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">person</i>
                  </span>
                </div>
                <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Username..." value="<?= set_value('name'); ?>">
              </div>
              <div class="col-lg text-center ">
                <?= form_error('name', '<small class="text-danger pl-2">', '</small>'); ?>
              </div>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                </div>
                <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password...">
              </div>
              <div class="col-lg text-center ">
                <?= form_error('password', '<small class="text-danger pl-2">', '</small>'); ?>
              </div>
            </div>
            <div class="footer text-center">
              <a href="<?= base_url('auth'); ?>" class="btn btn-primary btn-link btn-wd btn-lg">Have Account</a>
              <button type="submit" class="btn btn-primary btn-link btn-wd btn-lg">Register</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>