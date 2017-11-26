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
      <div id="breadcrumb"> <a href="hal_admin" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Dashboard</a> <a href="kel_antrian" class="current">Antrian</a> </div>
      <h1>Kelola Antrian</h1>
      </div>

  <!--End-breadcrumbs-->

  <!--Action boxes-->
    <div class="container-fluid">
      <hr>
      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
              <h5>Data Antrian</h5>
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
                    <th style="width:20%">Status</th>
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
                    <td class="center" style="text-align:center">
                      <a href="kel_antrian/hapAntrian?id=<?php echo $value['id_antrian']?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Hapus </a>
                    </td>
                  </tr>
                  <?php $i++;} ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
  <!--End-Chart-box-->
    </div>
  </div>
</body>
</html>
