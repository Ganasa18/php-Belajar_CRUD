<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title><?= $title; ?></title>

  <!-- General CSS Files -->
  <link href="<?= base_url(); ?>assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Calendar -->

  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/fullcalendar/core/main.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/fullcalendar/daygrid/main.css">

  <!-- Chart -->
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/chart/Chart.min.css">

  <!-- Template CSS -->
  <link rel=" stylesheet" href="<?= base_url(); ?>vendor/stisla-master/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>vendor/stisla-master/assets/css/style.css">
  <link rel="stylesheet" href="<?= base_url(); ?>vendor/stisla-master/assets/css/components.css">

  <style type="text/css">
    .preloader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 9999;
      opacity: 0.4;
      background-color: #fff;
    }

    .preloader .loading {
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%, -50%);
      font: 14px arial;
    }
  </style>
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <div class="preloader">
        <div class="loading">
          <img src="<?= base_url('assets/img/loader.gif'); ?>" width="100%">
        </div>
      </div>