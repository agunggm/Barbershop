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
              <li><a href="<?php echo base_url(); ?>hal_harga" ><span>Harga</span></a></li>
              <li><a href="<?php echo base_url(); ?>hal_galeri"><span>Galeri</span></a></li>
              <li><a href="<?php echo base_url(); ?>hal_tiket" ><span>Tiket</span></a></li>
              <li><a href="<?php echo base_url(); ?>hal_antrian" class="active"><span>Antrian</span></a></li>
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
              <p>Jl. Raya Cianjur<span> Cianjur, Jawa Barat.</span></p>
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
    <!--//banner-section-->
    <!--//main-header-->
    <!-- breadcrumb -->
    <div class="w3_breadcrumb">
      <div class="breadcrumb-inner">
        <ul>
          <li><a href="<?php echo base_url(); ?>">Beranda</a> <i>//</i></li>
          <li>Antrian</li>
        </ul>
      </div>
    </div>
    <!-- //breadcrumb -->
    <!--/content-inner-section-->
    <div class="w3_content_agilleinfo_inner">
      <div class="container">
        <div class="title-agileits">
          <h2 class="w3l-agile">Antrian Barbershop</h2>
        </div>
        <div class="w3_mail_grids">
          <?php
          $i = 1;
          foreach ($berikutnya as $key => $value) {
            ?>
          <div class="row">
            <div style="text-align:center">
            <h3>Antrian Berikutnya</h3>
            <h1><?php echo $value['id_antrian']; ?></h1><hr>
            <h4>Nama </h4>
            <h2><?php echo $value['nama']; ?></h2><hr>
            <table style="width:100%" >
              <tr>
                <td style="text-align :center"><h4>Barberman :<?php echo $value['nama_barber']; ?></h4></td>
                <td style="text-align :center"><h4>Model Rambut :<?php echo $value['nama_rambut']; ?></h4></td>
              </tr>
              <tr>
                <td style="text-align :center"><h4>Paket Pelayanan :<?php echo $value['nama_paket']; ?></h4></td>
                <td style="text-align :center"><h4>Total Pembayaran :<?php  $total=$value['harga_paket']+$value['harga_rambut'];
                echo "Rp. ".number_format($total,2); ?></h4></td>
              </tr>
            </table>
          </div>
          </div>
          <?php $i++;} ?>
          <?php if (!$berikutnya): ?>
            <div class="row-fluid">
                <div style="text-align:center">
                  <h3>Antrian Berikutnya</h3>
                  <h1>Tidak ada</h1>
                </div>
            </div>
          <?php endif; ?>
          <div class="row">
            <div class="col-md-6">
              <div style="text-align:center">
                <hr>
                <h3>Riwayat antrian sebelumnya</h3><br>
                <h5>Menampilkan 10 antrian sebelumnya pada hari ini.</h5><hr>
                <table style="width:100%;" class="table table-striped">
                  <tr>
                    <th style="text-align:center">No. Antrian</th>
                    <th style="text-align:center">Status</th>
                  </tr>
                  <?php
                  $i = 1;
                  foreach ($riwayat as $key => $value) {
                    ?>
                    <tr>
                      <td style="text-align:center"><?php echo $value['id_antrian']; ?></td>
                      <td style="text-align:center">
                        <?php
                        if ($value['status']=="0") { ?>
                          <button class="btn btn-info btn-xs">Menunggu</button>
                          <?php
                        }
                        elseif ($value['status']=="1") { ?>
                          <button class="btn btn-success btn-xs">Diproses</button>
                          <?php
                        }
                        elseif ($value['status']=="2") {?>
                          <button class="btn btn-success btn-xs">Dibayar</button>
                          <?php
                        }
                        else { ?>
                          <button class="btn btn-danger btn-xs">Kedaluwarsa</button>
                          <?php }
                          ?>
                        </td>
                      </tr>
                      <?php $i++;} ?>
                      <?php if (!$riwayat): ?>
                        <tr>
                          <td colspan="2"><h2>Tidak ada.</h2></td>
                        </tr>
                      <?php endif; ?>
                    </table>
                  </div>
            </div>
            <div class="col-md-6">
              <div style="text-align:center">
                <hr>
                <h3>Daftar antrian berikutnya</h3><br>
                <h5>Menampilkan 10 antrian berikutnya pada hari ini.</h5><hr>
                <table style="width:100%;" class="table table-striped">
                  <tr>
                    <th style="text-align:center">No. Antrian</th>
                  </tr>
                  <?php
                  $i = 1;
                  foreach ($next as $key => $value) {
                    ?>
                    <tr>
                      <td style="text-align:center"><?php echo $value['id_antrian']; ?></td>
                      </tr>
                      <?php $i++;} ?>
                      <?php if (!$next): ?>
                        <tr>
                          <td colspan="2"><h2>Tidak ada.</h2></td>
                        </tr>
                      <?php endif; ?>
                    </table>
                  </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  </html>
