<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" type="image/png" href="<?= base_url() ?>/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="<?= base_url() ?>/favicon-16x16.png" sizes="16x16" />

  <title><?= $title; ?></title>

  <!-- Custom fonts for this template-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets/backend/') ?>css/sb-admin-2.css" rel="stylesheet">
  <link href="<?= base_url('assets/backend/') ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

  <style>
    .my-notif:before {
      content: "\f0f3";
      font-family: "Font Awesome 5 Free";
      display: inline-block;
      padding-right: 13px;
      vertical-align: middle;
      font-weight: 900;
      font-size: 20px;
    }
    .my-notif {
      position: fixed;
      top: 0;
      left: 50%;
      transform: translateX(-50%);
      width: 100%;
      font-size: 1rem;
      z-index: 999;
      box-shadow: 1px 1px 17px rgba(0,0,0,.3);
    }

  </style>

</head>

<body class="<?= validation_errors()?'bg-gradient-danger':''; ?>">
  <?php if( $this->session->flashdata('msg')) : ?>
    <div class="alert alert-<?= $this->session->flashdata('type'); ?> alert-dismissible fade show text-center my-notif" role="alert"><?= $this->session->flashdata('msg'); ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
  <?php endif; ?>
  <section class="<?= validation_errors()?'':'bg-color-gradient'; ?>"></section>
  <div class="container ">
   
