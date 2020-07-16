<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1><?= $title; ?></h1>
    </div>
    <div class="section-body">
      <div class="row">

        <div class="col-12 col-md-6 col-lg-10">
          <div class="card">
            <div class="card-header">
              <h4><?= $title; ?></h4>
            </div>
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
            <div class="card-body">
              <a href="#" class="btn btn-primary mb-3" data-toggle="modal" data-target="#NewSubMenuModal"> Tambah Submenu </a>
              <div class="table-responsive">
                <table class="table table-bordered table-md">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Title</th>
                      <th>Menu</th>
                      <th>Url</th>
                      <th>Icon</th>
                      <th>Active</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($submenu as $sm) : ?>
                      <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $sm['title']; ?></td>
                        <td><?= $sm['menu_id']; ?></td>
                        <td><?= $sm['url']; ?></td>
                        <td><?= $sm['icon']; ?></td>
                        <td><?= $sm['is_active']; ?></td>
                        <td>
                          <a href="<?= base_url(); ?>menu/ubahsubmenu/<?= $sm['id'] ?>" class=" badge badge-success">Edit</a>
                          <a href="<?= base_url(); ?>menu/hapusSubMenu/<?= $sm['id'] ?>" class="badge badge-danger tombol-hapus">Delete</a>
                        </td>
                      </tr>
                      <?php $i++; ?>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>


<!-- MODAL -->

<div class="modal fade" id="NewSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="NewMenuModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="NewSubMenuModal">Add New Sub Menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('menu/submenu'); ?>" method="post">
        <div class="modal-body">

          <div class="form-group">
            <input type="text" class="form-control" id="title" name="title" placeholder="Sub Menu Title">
          </div>
          <div class="form-group">
            <select name="menu_id" id="menu_id" class="form-control">
              <option value="">Select Menu</option>
              <?php foreach ($menu as $m) : ?>
                <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="url" name="url" placeholder="Sub Menu Url">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="icon" name="icon" placeholder="Sub Menu Icon">
          </div>
          <div class="form-group">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" value="1" name="is_active" class="custom-control-input" id="is_active" checked>
              <label class="custom-control-label" for="is_active">Active ?</label>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add</button>
        </div>
      </form>
    </div>
  </div>
</div>