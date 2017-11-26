<!DOCTYPE html>
<html lang="en">

<head>
  <title>New Rizal </title><meta charset="UTF-8" />
</head>
<body>
  <!--main-container-part-->
  <div id="content">
  <!--breadcrumbs-->
    <div id="content-header">
      <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Dashboard</a></div>
    </div>
  <!--End-breadcrumbs-->

  <!--Action boxes-->
    <div class="container-fluid">

      <div class="row-fluid">
        <div class="widget-box">
          <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
            <h5>Status Antrian</h5>
          </div>
          <div class="widget-content" >
            <?php
            $i = 1;
            foreach ($berikutnya as $key => $value) {
              ?>
            <div class="row-fluid">
              <div class="span9">
                <div style="text-align:center">
                  <h3>Antrian Berikutnya</h3>
                  <h1><?php echo $value['id_antrian']; ?></h1>
                  <table style="width:100%" >
                    <tr>
                      <td style="text-align :center"><h4>Nama :<?php echo $value['nama']; ?></h4></td>
                      <td style="text-align :center"><h4>No. Telp :<?php echo $value['telp']; ?></h4></td>
                    </tr>
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
              <div class="span3">
                <ul class="site-stats">
                  <li class="bg_lh" style="margin:0px auto" >  <a href="kel_antrian/prosesAntrian?id=<?php echo $value['id_antrian']?>"><i class="icon-plus"></i> <small >Proses</small></a></li>
                  <li class="bg_lh" style="margin:0px auto">  <a href="kel_antrian/batalAntrian?id=<?php echo $value['id_antrian']?>"><i class="icon-thumbs-down"></i><small>Batal </small></a></li>
                </ul>
              </div>
            </div>
            <?php $i++;} ?>
            <?php if (!$berikutnya): ?>
              <div class="row-fluid">
                <div class="span12">
                  <div style="text-align:center">
                    <h3>Antrian Berikutnya</h3>
                    <h1>Tidak ada</h1>
                  </div>
                </div>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
  <!--End-Chart-box-->
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
          <h5>Antrian dalam pemrosesan</h5>
        </div>
        <div class="widget-content nopadding">
          <table class="table table-bordered data-table">
            <thead>
              <tr>
                <th style="width:5%">No. Antrian</th>
                <th style="width:10%">Nama</th>
                <th style="width:10%">Telp</th>
                <th style="width:10%">Model</th>
                <th style="width:10%">Paket</th>
                <th style="width:10%">Barberman</th>
                <th style="width:10%">Total</th>
                <th style="width:20%">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $i = 1;
              foreach ($antrian as $key => $value) {
                ?>
              <tr class="gradeX">
                <td style="text-align:center"><?php echo $value['id_antrian']; ?></td>
                <td style="text-align:center"><?php echo $value['nama']; ?></td>
                <td style="text-align:center"><?php echo $value['telp']; ?></td>
                <td style="text-align:center"><?php echo $value['nama_rambut']; ?></td>
                <td style="text-align:center"><?php echo $value['nama_paket']; ?></td>
                <td style="text-align:center"><?php echo $value['nama_barber']; ?></td>
                <td style="text-align:center"><?php  $total=$value['harga_paket']+$value['harga_rambut'];
                echo "Rp. ".number_format($total,2); ?></td>
                <td class="center" style="text-align:center">
                  <a href="kel_antrian/bayarAntrian?id=<?php echo $value['id_antrian']?>" class="btn btn-success btn-xs"><i class="icon icon-money"></i> Bayar </a>
                </td>
              </tr>
              <?php $i++;} ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
    </div>
  </div>
</body>
</html>
