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
                      <th>Kode </th>
                      <th>Email</th>
                      <th>Matakuliah</th>
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