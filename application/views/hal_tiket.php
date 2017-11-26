<!DOCTYPE html>
<html>
<head>
  <title>New Rizal</title>
  <style media="screen">
  @import url(https://fonts.googleapis.com/css?family=Arvo);
  body{
    background:url("localhost/barbershop/assets/images/tiket/bg-tiket.png");
    font-family:Arvo;
  }
  .box{
    margin:0px auto;
    margin-top:80px;
    background:#FFF9EE url("localhost/barbershop/assets/images/tiket/tiket.png");
    color:#333;
    text-transform:uppercase;
    padding:8px;
    width:512px;
    font-weight:bold;
    text-shadow:0px 1px 0px #fff;
    font-family:"arvo";
    font-size: 11px;
    border-left: 1px dashed rgba(51, 51, 51, 0.5);
    -webkit-filter: drop-shadow(0 5px 18px #000);
  }

  .inner{
    border: 2px dashed rgba(51, 51, 51, 0.5);
    min-height:100px;
    padding:8px;

  }
  .inner h1{
    padding:5px 0px;
    margin:0px;
    font-size:18px;
    border-bottom: 1px solid rgba(51, 51, 51, 0.3);
    text-align:center;
  }
  .info{
    width:100%;
    margin-top:5px;
  }
  .info .wp{
    float: left;
    padding: 5px;
    width: 83px;
    text-align: center;
  }
  .info .wp h2{
    margin: 8px;
  }
  .total{
    border-top: 1px solid rgba(51, 51, 51, 0.3);
  }

  .clearfix:after {
    content: ".";
    display: block;
    height: 0;
    clear: both;
    visibility: hidden;
  }
  .total h2{
    padding-left:115px;
    margin:10px 0px;
    font-size: 10px;
  }
  .total p{float:right;margin:0px;margin-right: 15px;}

  a.buy{
    color:#fff;
    text-align:center;
    font-size:25px;
    text-decoration:none;
    display:block;
    width:200px;
    margin:0px auto;
    margin-top:50px;
    padding:5px;
    background:rgba(0,0,0,0.5);
  }
  #tiket{
    font-size:12px;
  }
  </style>
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
              <li><a href="<?php echo base_url(); ?>hal_tiket" class="active"><span>Tiket</span></a></li>
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
          <li>Ambil Tiket</li>
        </ul>
      </div>
    </div>
    <!-- //breadcrumb -->
    <!--/content-inner-section-->
    <div class="w3_content_agilleinfo_inner">
      <div class="container">
        <div class="title-agileits">
          <h2 class="w3l-agile">Ambil Tiket</h2>
        </div>
        <?php if (!$tiket): ?>
        <div class="w3_mail_grids">
          <form action="kel_antrian/tamAntrian" method="post" class="form-horizontal">
            <input type="hidden" value="<?php echo $kode?>" name="id_antrian">
            <div class="col-md-1"></div>
            <div class="col-md-10 w3_agile_mail_grid">
              <div class="row">
                <div class="col-md-6">
                  <div class="control-group" style="text-align:center">
                    <label class="control-label" for="nama" ><span class="btn btn-default" style="margin-bottom:10px">Nama</span></label>
                    <div class="controls">
                      <input type="text" name="nama" >
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="control-group" style="text-align:center">
                    <label class="control-label" for="telp" ><span class="btn btn-default" style="margin-bottom:10px">No. Telp</span></label>
                    <div class="controls">
                      <input type="text" name="telp" >
                    </div>
                  </div>
                </div>
              </div>
              <div class="control-group" style="text-align:center">
                <label class="control-label"><span class="btn btn-default" style="margin-bottom:10px">Model Rambut</span></label>
                <div class="controls">
                  <div class="row">
                  <?php
  								$i = 1;
  								foreach ($rambut as $key => $value) {
  									?>
                  <div class="button col-md-1" style="padding:5px">
                    <input type="radio" name="id_rambut" value="<?php echo $value['id_rambut']?>" id="id_<?php echo $value['id_rambut']?>" class="id_rambut"/>
                    <label for="id_<?php echo $value['id_rambut']?>" class=""><img src="<?php echo base_url();?>assets/images/model/<?php echo $value['gambar_rambut']?>" style="width:64px;height:64px;margin:2px" data-toggle="tooltip" title="<?php echo $value['nama_rambut']?>" ></label>
                  </div>
                  <?php $i++;} ?>
                </div>
                </div>
              </div>
              <div class="control-group" style="text-align:center">
                <label class="control-label" for="layanan" ><span class="btn btn-default" style="margin-bottom:10px">Paket Pelayanan</span></label>
                <div class="controls">
                  <select name="id_paket" class="form-control" id="layanan">
                    <?php
    								$i = 1;
    								foreach ($paket as $key => $value) {
    									?>
                    <option value="<?php echo $value['id_paket']?>"><?php echo $value['nama_paket']?> - <?php  echo "Rp. ".number_format($value['harga_paket'],2); ?></option>
                    <?php $i++;} ?>
                  </select>
                </div>
              </div>
              <div class="control-group" style="text-align:center">
                <label class="control-label" ><span class="btn btn-default" style="margin-bottom:10px">Barberman</span></label>
                <div class="controls">
                  <div class="row">
                  <?php
  								$i = 1;
  								foreach ($barberman as $key => $value) {
  									?>
                  <div class="button col-md-1" style="padding:5px">
                    <input type="radio" name="id_barberman" value="<?php echo $value['id_barberman']?>" id="bb/<?php echo $value['id_barberman']?>" class="id_barberman"/>
                    <label for="bb/<?php echo $value['id_barberman']?>"><img src="<?php echo base_url();?>assets/images/barberman/<?php echo $value['foto_barber']?>?>" style="width:64px;height:64px;margin:2px" data-toggle="tooltip" title="<?php echo $value['nama_barber']?>"></label>
                  </div>
                  <?php $i++;} ?>
                </div>
                </div>
              </div>
              <div class="control-group" style="text-align:center">
                <button class="btn btn-info" type="submit">Ambil Tiket</button>
              </div>
            </div>
            <div class="col-md-1"></div>
            <div class="clearfix"> </div>
          </form>
        <?php endif; ?>
        <?php if ($tiket): ?>
          <div class="box">
            <div class='inner'>
              <h1>New Rizal Barbershop</h1>
              <div class='info clearfix'>
                <?php
                $i = 1;
                foreach ($rincian as $key => $value) {
                  ?>
                <div class='wp'>Antrian<h2 id="tiket"><?php echo $value['id_antrian']; ?></h2></div>
                <div class='wp'>Model<h2 id="tiket"><?php echo $value['nama_rambut']; ?></h2></div>
                <div class='wp'>Paket<h2 id="tiket"><?php echo $value['nama_paket']; ?></h2></div>
                <div class='wp'>Barberman<h2 id="tiket"><?php echo $value['nama_barber']; ?></h2></div>
              </div>
              <div class='total clearfix'>
                <h2 id="tiket">Nama : <p><?php echo $value['nama']; ?></p></h2>
                <h2 id="tiket">No. Telp : <p><?php echo $value['telp']; ?></p></h2>
              </div>
              <div class='total clearfix'>
                <h2 id="tiket">Total : <p><?php  $total=$value['harga_paket']+$value['harga_rambut'];
                echo "Rp. ".number_format($total,2); ?></p></h2>
              </div>
              <?php $i++;} ?>
            </div>
          </div>
          <hr>
          <p>*Silahkan ingat nomor antrian anda atau screenshot halaman ini.</p>
        <?php endif; ?>
    </div>
      </div>
    </div>
  </body>
  </html>
