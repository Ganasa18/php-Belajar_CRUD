<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1><?= $title; ?></h1>
    </div>


    <div class="section-body">
      <div class="row">
        <div class="col-12 col-md-12 col-lg-7">
          <div class="card">
            <?= form_open_multipart('user/edit'); ?>

            <div class="card-header">
              <h4>Edit Profile</h4>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="form-group col-md-6 col-12">
                  <label>Full Name</label>
                  <input type="text" class="form-control" id="name" name="name" value="<?= $user['name'] ?>">
                  <?= form_error('name', '<small class="text-danger pl-2">', '</small>'); ?>
                </div>
                <div class="form-group col-sm-3">
                  <label>Picture</label>
                  <img src="<?= base_url('assets/img/profile/') . $user['image']; ?> " class="img-thumbnail">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6 col-12">
                  <label>Email</label>
                  <input type="email" class="form-control" id="email" name="email" value="<?= $user['email'] ?>" readonly>
                </div>
                <div class="form-group col-md-6 col-12 mt-4 pt-1">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="image" name="image" for="image">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer text-right">
              <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>