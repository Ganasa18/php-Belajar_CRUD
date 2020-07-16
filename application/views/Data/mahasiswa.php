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
            <?= form_error('data/mahasiswa', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
            <div class="card-body">
              <a href="#" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newMahasiswaModal"> Tambah Menu </a>
              <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nama</th>
                      <th>Nim</th>
                      <th>Email</th>
                      <th>Jurusan</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($mahasiswa as $m) : ?>
                      <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $m['nama']; ?></td>
                        <td><?= $m['nim']; ?></td>
                        <td><?= $m['email']; ?></td>
                        <td><?= $m['jurusan']; ?></td>
                        <td>
                          <a href="<?= base_url(); ?>data/ubahsiswa/<?= $m['id'] ?>" class="btn btn-warning"><i class="fa fa-fw fa-edit"></i>Edit Data</a>
                          <a href="<?= base_url(); ?>data/hapusmahasiswa/<?= $m['id'] ?>" class="btn btn-danger tombol-hapus"><i class="fa fa-fw fa-trash"></i>Hapus</a>
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
<div class="modal fade" id="newMahasiswaModal" tabindex="-1" role="dialog" aria-labelledby="newMahasiswaModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newMahasiswaModalLabel"> Tambah Data Mahasiswa </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('data/mahasiswa'); ?>" method="post">
        <div class="modal-body">
          <div class="form-group">
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan Nama" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="nim" id="nim" placeholder="Masukan Nim" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="email" id="email" placeholder="Masukan Email" required>
          </div>
          <div class="form-group">
            <select class="form-control" id="jurusan" name="jurusan">
              <option value="Sistem Informasi">Sistem Informasi</option>
              <option value="Sistem Informasi">Manajemen Informatika</option>
              <option value="Teknik Informatika">Teknik Informatika</option>
              <option value="Bahasa Inggris">Bahasa Inggris</option>
              <option value="Sastra Jepang">Sastra Jepang</option>
              <option value="Sistem Akuntasi">Sistem Akuntasi</option>
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