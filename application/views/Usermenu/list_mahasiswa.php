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
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nama</th>
                      <th>Nim</th>
                      <th>Email</th>
                      <th>Jurusan</th>
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