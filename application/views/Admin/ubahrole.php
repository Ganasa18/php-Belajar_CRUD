<div class="main-content">
  <div class="section-body">
    <br><br><br><br><br><br>
    <div class="row-mt-3">
      <div class="col-lg-5">
        <div class="card mt-5">
          <div class="card-header">
            Form Ubah Data Role
          </div>
          <div class="card-body">
            <form action="" method="post">
              <input type="hidden" name="id" value="<?= $role['id']; ?>">
              <div class="form-group">
                <label for="role"> Role </label>
                <input type="text" class="form-control" id="role" name="role" value="<?= $role['role'] ?>">
              </div>
              <button type="submit" class="btn btn-success float-right">Ubah Data</button>
              <a href="<?= base_url('admin/role');?>" class="btn btn-info mb-3" ><i class="fa fa-fw fa-home"></i> Kembali </a>
              <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>