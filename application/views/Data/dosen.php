<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1><?= $title; ?></h1>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-lg">
          <div class="card">
            <div class="card-header">
              <h4><?= $title; ?></h4>
            </div>
            <?= form_error('data/dosen', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
            <div class="card-body">
              <a href="#" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newDosenModal"> Tambah Menu </a>
              <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nama</th>
                      <th>Kode </th>
                      <th>Email</th>
                      <th>Matakuliah</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($dosen as $d) : ?>
                      <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $d['nama']; ?></td>
                        <td><?= $d['kd']; ?></td>
                        <td><?= $d['email']; ?></td>
                        <td><?= $d['matakuliah']; ?></td>
                        <td>
                          <a href="<?= base_url(); ?>data/ubahdosen/<?= $d['id'] ?>" class="btn btn-warning"><i class="fa fa-fw fa-edit"></i>Edit Data</a>
                          <a href="<?= base_url(); ?>data/hapusdosen/<?= $d['id'] ?>" class="btn btn-danger tombol-hapus"><i class="fa fa-fw fa-trash"></i>Hapus</a>
                        </td>
                      </tr>
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

<!-- Modal -->
<div class="modal fade" id="newDosenModal" tabindex="-1" role="dialog" aria-labelledby="newDosenModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newDosenModalLabel"> Tambah Data Dosen </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('data/dosen'); ?>" method="post">
        <div class="modal-body">
          <div class="form-group">
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan Nama" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="kd" id="kd" placeholder="Masukan Inisial" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="email" id="email" placeholder="Masukan Email" required>
          </div>
          <div class="form-group">
            <select class="form-control" id="matakuliah" name="matakuliah">
              <option value="Pemodelan Sistem">Pemodelan Sistem</option>
              <option value="Akuntasi Dasar">Akuntasi Dasar</option>
              <option value="Pemodelan Database">Pemodelan Database</option>
              <option value="Bahasa Inggris">Bahasa Inggris</option>
              <option value="Web Programing">Web Programing</option>
              <option value="Statistika">Statistika</option>
            </select>
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