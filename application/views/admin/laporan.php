<!DOCTYPE html>
<html lang="en">

<head>
  <title>New Rizal</title><meta charset="UTF-8" />
</head>
<body>
  <!--main-container-part-->
  <div id="content">
  <!--breadcrumbs-->
    <div id="content-header">
      <div id="breadcrumb"> <a href="hal_admin" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Dashboard</a> <a href="laporan" class="current">Laporan</a> </div>
      <h1>Laporan</h1>
      </div>
  <!--End-breadcrumbs-->
  <!--Action boxes-->
    <div class="container-fluid">
      <hr>
          <?php if (!$laporan) {?>
          <form action="<?php echo base_url(); ?>laporan/filter" method="post">
            <div class="row-fluid">
              <div class="col-md-4" style="text-align:center">
                <div class="controls">
                  <input type="text" name="awal" class="datepicker">
                  <span class="help-block">Tanggal awal laporan</span> </div>
              </div>
              <div class="col-md-1" style="margin-top:8px;margin-bottom:8px;text-align:center"><span style="text-align:center;" class="btn btn-default">Sampai</span></div>
              <div class="col-md-4" style="text-align:center">
                <div class="controls">
                  <input type="text" name="akhir" class="datepicker ">
                  <span class="help-block">Tanggal awal laporan</span> </div>
              </div>
              <div class="col-md-3" style="text-align:center"><span style="text-align:center;"><button type="submit" class="btn btn-success">Filter</button></span></div>
            </div>
          </form>
          <?php } ?>
          <?php if ($laporan): ?>
            <div class="row-fluid">
              <div class="span12">
                  <div class="widget-content">
                    <div class="row-fluid">
                      <div class="span6">
                        <table class="">
                          <tbody>
                            <tr>
                              <td><h4>New Rizal Barbershop</h4></td>
                            </tr>
                            <tr>
                              <td>Cianjur</td>
                            </tr>
                            <tr>
                              <td>Jawa Barat, indonesia</td>
                            </tr>
                            <tr>
                              <td>Telefon: +6281234567</td>
                            </tr>
                            <tr>
                              <td >newrizal@barbershop.com</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="span6">
                        <table class="table table-bordered table-invoice">
                          <tbody>
                            <tr>
                            <tr>
                              <td class="width30">Tanngal laporan</td>
                              <td class="width70"><strong><?php echo date("y-M-d") ?></strong></td>
                            </tr>
                            <tr>
                              <td>Dari </td>
                              <td><strong><?php echo $awal; ?></strong></td>
                            </tr>
                            <tr>
                              <td>Sampai</td>
                              <td><strong><?php echo $awal; ?></strong></td>
                            </tr>
                          </tr>
                            </tbody>

                        </table>
                      </div>
                    </div>
                    <div class="row-fluid">
                      <div class="span12">
                        <table class="table table-bordered table-invoice-full">
                          <thead>
                            <tr>
                              <th class="head0">Nama</th>
                              <th class="head1">Keterangan</th>
                              <th class="head0 right">Jumlah</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Pemotongan rambut</td>
                              <td>Jumlah proses pemotongan rambut hingga selesai dibayar oleh pelanggan.</td>
                              <td class="right"><strong><?php echo $dibayar ?></strong></td>
                            </tr>
                            <tr>
                              <td>Pembatalan pesanan</td>
                              <td>Jumlah tiket yang kedaluwarsa/tidak diproses</td>
                              <td class="right"><strong><?php echo $kedaluwarsa ?></strong></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <h4>Daftar Favorit</h4>
                    <div class="row-fluid">
                      <div class="span12">
                        <table class="table table-bordered table-invoice-full">
                          <thead>
                            <tr>
                              <th class="head0">Nama</th>
                              <th class="head1">Jenis</th>
                              <th class="head0 right">Jumlah</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Model Rambut</td>
                              <?php
                              $i = 1;
                              foreach ($model as $key => $value) {
                                ?>
                              <td><?php echo $value['nama_rambut'] ?></td>
                              <td class="right"><strong><?php echo $value['jumlah'] ?></strong></td>
                                <?php $i++;} ?>
                            </tr>
                            <tr>
                              <td>Paket Pelayanan</td>
                              <?php
                              $i = 1;
                              foreach ($paket as $key => $value) {
                                ?>
                              <td><?php echo $value['nama_paket'] ?></td>
                              <td class="right"><strong><?php echo $value['jumlah'] ?></strong></td>
                              <?php $i++;} ?>
                            </tr>
                            <tr>
                              <td>Barberman</td>
                              <?php
                              $i = 1;
                              foreach ($barberman as $key => $value) {
                                ?>
                              <td><?php echo $value['nama_barber'] ?></td>
                              <td class="right"><strong><?php echo $value['jumlah'] ?></strong></td>
                              <?php $i++;} ?>
                            </tr>
                          </tbody>
                        </table>
                        <div class="pull-right">
                          <br>
                          <a onclick="window.print();" class="btn btn-primary btn-large pull-right" >Cetak Laporan</a> </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          <?php endif; ?>

  <!--End-Chart-box-->
    </div>
  </div>
</body>
</html>
