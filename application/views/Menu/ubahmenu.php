<div class="main-content">
  <div class="section-body">
    <br><br><br><br><br><br>
    <div class="row-mt-3">
      <div class="col-lg-5">
        <div class="card mt-5">
          <div class="card-header">
            Form Ubah Menu
          </div>
          <div class="card-body">
            <form action="" method="post">
              <input type="hidden" name="id" value="<?= $menu['id']; ?>">
              <div class="form-group">
                <label for="menu"> Role </label>
                <input type="text" class="form-control" id="menu" name="menu" value="<?= $menu['menu']; ?>">
              </div>
              <button type="submit" class="btn btn-success float-right">Ubah Data</button>
              <button class="btn btn-info mb-3" onclick="window.history.go(-1)"><i class="fa fa-fw fa-home"></i> Kembali </button>
              <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>