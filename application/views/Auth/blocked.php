<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Blocked</title>
  <!-- Bootstrap Core CSS -->
  <link href="<?= base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- You can change the theme colors from here -->
  <link href="<?= base_url(); ?>css/colors/blue.css" id="theme" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css">

</head>

<body class="fix-header card-no-border">
  <!-- ============================================================== -->
  <!-- Main wrapper - style you can find in pages.scss -->
  <!-- ============================================================== -->
  <section id="wrapper" class="error-page">
    <div class="error-box">
      <div class="error-body text-center">
        <h1>404</h1>
        <h3 class="text-uppercase">Page Not Found !</h3>
        <p class="text-muted m-t-30 m-b-30">YOU SEEM TO BE TRYING TO FIND HIS WAY HOME</p>
        <a href="<?= base_url('user'); ?>" class="btn btn-info btn-rounded waves-effect waves-light m-b-40">Back to home</a>
      </div>

    </div>

  </section>
  <script src="<?= base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap tether Core JavaScript -->
  <script src="<?= base_url(); ?>assets/plugins/bootstrap/js/tether.min.js"></script>
  <script src="<?= base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
  <!--Wave Effects -->
  <script src="<?= base_url(); ?>assets/css/js/waves.js"></script>
</body>

</html>