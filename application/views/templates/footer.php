<footer class="main-footer">
  <div class="footer-left">
    Copyright &copy; <script>
      document.write(new Date().getFullYear())
    </script>
    <div class="bullet"></div> Design By Team</a>
  </div>
</footer>
</div>
</div>

<!-- General JS Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="<?= base_url(); ?>vendor/stisla-master/assets/js/stisla.js"></script>


<!-- Template JS File -->
<script src="<?= base_url(); ?>vendor/stisla-master/assets/js/scripts.js"></script>
<script src="<?= base_url(); ?>vendor/stisla-master/assets/js/custom.js"></script>
<script src="<?= base_url(); ?>vendor/stisla-master/assets/js/bootstrap.min.js"></script>

<!--  Plugin for Sweet Alert -->
<script src="<?= base_url(); ?>assets/material/assets/js/style.js"></script>
<script src="<?= base_url(); ?>assets/material/assets/js/plugins/sweetalert2.js"></script>
<!-- Page Specific JS File -->
<script src="<?= base_url(); ?>vendor/stisla-master/assets/js/page/index-0.js"></script>

<!-- Calendar -->
<script src="<?= base_url(); ?>assets/fullcalendar/core/main.js"></script>
<script src="<?= base_url(); ?>assets/fullcalendar/daygrid/main.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      plugins: ['dayGrid']
    });

    calendar.render();
  });
</script>

<!-- Chart -->
<script src="<?= base_url(); ?>assets/chart/Chart.min.js"></script>

<script>
  var ctx = document.getElementById('myChart').getContext('2d');
  var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
      labels: ['Teknik Informatika', 'Sistem Informasi', 'Bahasa Inggris', 'Sastra Jepang', 'Sistem Akuntasi'],
      datasets: [{
        label: 'mahasiswa',
        backgroundColor: 'rgb(255, 99, 132)',
        borderColor: 'rgb(255, 99, 132)',
        data: [<?= $graph_mahasiswa; ?>]
      }]
    },

    // Configuration options go here
    options: {}
  });
</script>

<script>
  var ctx = document.getElementById('myChart2').getContext('2d');
  var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
      labels: ['Pemodelan Sistem', 'Akuntasi Dasar', 'Bahasa Inggris', 'Web Programing', 'Statistika', 'Pemodelan Database'],
      datasets: [{
        label: 'dosen',
        backgroundColor: 'rgb(255, 99, 132)',
        borderColor: 'rgb(255, 99, 132)',
        data: [<?= $graph_dosen; ?>]
      }]
    },

    // Configuration options go here
    options: {}
  });
</script>



<script>
  $(document).ready(function() {
    $(".preloader").fadeOut();
  });


  $('.custom-file-input').on('change', function() {
    let fileName = $(this).val().split('\\').pop();
    $(this).next('.custom-file-label').addClass("selected").html(fileName);
  });



  $('.form-check-input').on('click', function() {

    const menuId = $(this).data('menu');
    const roleId = $(this).data('role');

    $.ajax({
      url: "<?= base_url('admin/changeaccess'); ?>",
      type: 'post',
      data: {
        menuId: menuId,
        roleId: roleId
      },

      success: function() {
        document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
      }

    });

  });
</script>
</body>

</html>