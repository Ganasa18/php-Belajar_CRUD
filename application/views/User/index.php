<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>My Profile</h1>
    </div>



    <div class="section-body">
      <h2 class="section-title">Hi, <?= $user['name']; ?>!</h2>
      <div class="row mt-sm-4">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
        <div class="col-12 col-md-12 col-lg-6">
          <div class="card profile-widget">
            <div class="profile-widget-header">
              <img alt="image" src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="rounded-circle profile-widget-picture">
            </div>
            <div class="profile-widget-description">
              <div class="profile-widget-name"> <?= $user['name']; ?> <div class="text-muted d-inline font-weight-normal">
                  <div class="slash"></div> Web Developer
                </div>
              </div>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis velit beatae fugit ex,
              vel, at ullam facere optio, quisquam totam obcaecati necessitatibus! Aspernatur
              facere dolore quod, ullam error provident sed. <b>'<?= $user['name']; ?>'</b>.
            </div>
            <div class="card-footer text-center">
              <div class="font-weight-bold mb-2">Member Since <?= date('d F Y', $user['date_created']); ?></div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card mt-4">
            <div class="card-body">
              <div id="calendar"></div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
</div>