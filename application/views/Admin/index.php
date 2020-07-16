<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1><?= $title; ?></h1>
      <small class="ml-4">
        <?php
        $tanggal = mktime(date("m"), date("d"), date("Y"));
        echo "Tanggal : <b>" . date("d-M-Y", $tanggal) . "</b> ";
        date_default_timezone_set('Asia/Jakarta');
        $jam = date("H:i:s");
        echo "| Pukul : <b>" . $jam . " " . "</b>";
        $a = date("H");
        if (($a >= 6) && ($a <= 11)) {
          echo "<b>, Selamat Pagi !!</b>";
        } else if (($a > 11) && ($a <= 12)) {
          echo ", Selamat Pagi !!";
        } else if (($a > 12) && ($a <= 18)) {
          echo ", Selamat Siang !!";
        } else {
          echo ", <b> Selamat Malam </b>";
        }
        ?>
      </small>
    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
              <i class="far fa-user"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Total User</h4>
              </div>
              <div class="card-body">
                <?= $num_users; ?>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-danger">
              <i class="far fa-newspaper"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Total Mahasiswa</h4>
              </div>
              <div class="card-body">
                <?= $num_mahasiswa; ?>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-warning">
              <i class="far fa-file"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Total Dosen</h4>
              </div>
              <div class="card-body">
                <?= $num_dosen; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="card mt-4">
            <div class="card-body">
              <canvas id="myChart" width="1000" height="280"></canvas>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card mt-4">
            <div class="card-body">
              <canvas id="myChart2" width="1000" height="280"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</section>
</div>