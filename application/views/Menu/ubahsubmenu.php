<div class="main-content">
  <div class="section-body">
    <br><br><br><br><br><br>
    <div class="row-mt-3">
      <div class="col-lg-6 mx-auto">
        <div class="card mt-5 ">
          <div class="card-header">
            Form Ubah Submenu
          </div>
          <div class="card-body">
            <form action="" method="post">
              <input type="hidden" name="id" value="<?= $submenu['id']; ?>">
              <div class="form-group">
                <label for="title"> Title </label>
                <input type="text" class="form-control" id="title" name="title" value="<?= $submenu['title']; ?>">
              </div>
              <div class="form-group">
                <label for="menu_id"> Menu Id </label>
                <input type="text" class="form-control" id="menu_id" name="menu_id" value="<?= $submenu['menu_id']; ?>">
              </div>
              <div class="form-group">
                <label for="url"> Url </label>
                <input type="text" class="form-control" id="url" name="url" value="<?= $submenu['url']; ?>">
              </div>
              <div class="form-group">
                <label for="icon"> Icon </label>
                <input type="text" class="form-control" id="icon" name="icon" value="<?= $submenu['icon']; ?>">
              </div>

              <button type="submit" class="btn btn-success float-right">Ubah Data</button>
              <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>