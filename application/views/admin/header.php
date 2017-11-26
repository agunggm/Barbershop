<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/bootstrap.min.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/bootstrap-responsive.min.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/matrix-login.css" />
  <link href="<?php echo base_url();?>assets/admin/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/uniform.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/select2.css" />
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/fullcalendar.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/matrix-style.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/datepicker.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/matrix-media.css" />
</head>
<body>
  <!--Header-part-->
  <div id="header">
    <h1><a href="">Matrix Admin</a></h1>
  </div>
  <!--close-Header-part-->


  <!--top-Header-menu-->
  <div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav">
      <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Selamat datang</span></a></li>
    </ul>
  </div>
  <!--close-top-Header-menu-->
  <!--start-top-serch-->
  <div id="search">
    <a title="" href="admin/logout"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a>
  </div>
  <!--close-top-serch-->
  <!--sidebar-menu-->
  <div id="sidebar"><a href="" class="visible-phone"><i class="icon icon-home"></i> Tables</a>
    <ul>
      <li class="active"><a href="hal_admin"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
      <li> <a href="<?php echo base_url();?>kel_barberman"><i class="icon icon-user"></i> <span>Barberman</span></a> </li>
      <li> <a href="<?php echo base_url();?>kel_model"><i class="icon icon-inbox"></i> <span>Model Rambut</span></a> </li>
      <li><a href="<?php echo base_url();?>kel_paket"><i class="icon icon-th"></i> <span>Paket Pelayanan</span></a></li>
      <li><a href="<?php echo base_url();?>kel_antrian"><i class="icon icon-fullscreen"></i> <span>Antrian</span></a></li>
      <li><a href="<?php echo base_url();?>laporan"><i class="icon icon-list"></i> <span>Laporan</span></a></li>
      <li><a href="<?php echo base_url();?>admin/logout"><i class="icon icon-share-alt"></i> <span>Logout</span></a></li>
    </ul>
  </div>
  <!--sidebar-menu-->
