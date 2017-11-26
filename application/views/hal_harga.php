<!DOCTYPE html>
<html>
<head>
  <title>New Rizal</title>
</head>
<body>
  <div id="demo-1" class="banner-inner">
    <!--/header-w3l-->
    <div class="header-w3-agileits" id="home">
      <div class="inner-header-agile">
        <nav class="navbar navbar-default">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <h1><a  href="<?php echo base_url(); ?>"><span>N</span><i class="fa fa-scissors" aria-hidden="true"></i>ew Rizal  <p class="s-log">Barber Shop</p></a>

            </h1>
          </div>
          <!-- navbar-header -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav linkEffects linkHoverEffect_12">
              <li><a href="<?php echo base_url(); ?>" ><span>Beranda</span></a></li>
              <li><a href="<?php echo base_url(); ?>hal_harga" class="active"><span>Harga</span></a></li>
              <li><a href="<?php echo base_url(); ?>hal_galeri"><span>Galeri</span></a></li>
              <li><a href="<?php echo base_url(); ?>hal_tiket"><span>Tiket</span></a></li>
              <li><a href="<?php echo base_url(); ?>hal_antrian"><span>Antrian</span></a></li>
            </ul>
          </div>
          <div class="clearfix"> </div>
        </nav>
      </div>
      <div class="contact-top-agileits two">
        <div class="col-md-4 contact-grid ">
          <div class="contact-grid1 agileits-w3layouts">
            <div class="con-w3l-info">
              <h4>Alamat </h4>
              <p>Jl. Raya Cianjur<span>Cianjur, Jawa Barat.</span></p>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="col-md-4 contact-grid">
          <div class="contact-grid2 w3">

            <div class="con-w3l-info">
              <h4>Telpon</h4>
              <p>(0263) 331212</p>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="col-md-4 contact-grid">
          <div class="contact-grid3 w3l">

            <div class="con-w3l-info">
              <h4>Email</h4>
              <p><a href="mailto:newrizal@barbershop.com">newrizal@barbershop.com</a>

              </div>
              <div class="clearfix"></div>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
    <div class="w3_breadcrumb">
      <div class="breadcrumb-inner">
        <ul>
          <li><a href="<?php echo base_url(); ?>">Beranda</a> <i> //</i></li>
          <li>Harga</li>
        </ul>
      </div>
    </div>
    <div class="price" id="price">
      <div class="col-md-6 w3l_about_bottom_right">
        <div class="title-agileits1">
          <h3>Daftar Layanan</h3>
        </div>
        <p>Berikut daftar layanan yang ditawarkan New Rizal Barber Shop.</p>
        <div class="price-list">
          <?php
          $i = 1;
          foreach ($paket as $key => $value) {
            ?>
          <div class="wthree-grids-price">
            <h4><?php echo $value['nama_paket'] ?></h4>
            <h5> <?php  echo "Rp. ".number_format($value['harga_paket'],2); ?></h5>
            <div class="clearfix"> </div>
          </div>
        <?php $i++;} ?>
        </div>
      </div>
      <div class="col-md-6 w3l_about_bottom_left">

      </div>

      <div class="clearfix"> </div>
    </div>
  </body>
  </html>
