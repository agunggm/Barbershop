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
      <div id="breadcrumb"> <a href="hal_admin" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Dashboard</a> <a href="kel_model" class="current">Model Rambut</a> </div>
      <h1>Kelola Model Rambut</h1>
      <button class="btn btn-default buttons-print btn-sm" tabindex="0" aria-controls="datatable-buttons" data-toggle="modal" data-target="#tamModel" style="margin-left:20px"><span>Tambah Model Rambut</span></buttons>
      </div>

  <!--End-breadcrumbs-->

  <!--Action boxes-->
    <div class="container-fluid">
      <hr>
      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
              <h5>Data Model Rambut</h5>
            </div>
            <div class="widget-content nopadding">
              <table class="table table-bordered data-table">
                <thead>
                  <tr>
                    <th style="width:5%">No</th>
                    <th style="width:10%">Nama</th>
                    <th style="width:10%">Deskripsi</th>
                    <th style="width:10%">Harga</th>
                    <th style="width:20%">Foto</th>
                    <th style="width:20%">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $i = 1;
                  foreach ($model as $key => $value) {
                    ?>
                  <tr class="gradeX">
                    <td style="text-align:center"><?php echo $i; ?></td>
                    <td style="text-align:center"><?php echo $value['nama_rambut']; ?></td>
                    <td style="text-align:center"><?php echo $value['deskripsi_rambut']; ?></td>
                    <td style="text-align:center"><?php echo $value['harga_rambut']; ?></td>
                    <td style="text-align:center"><img src="<?php echo base_url();?>assets/images/model/<?php echo $value['gambar_rambut']; ?>" width="75px" height="75px"></td>
                    <td class="center" style="text-align:center">
                      <button class="btn btn-info btn-xs" data-toggle="modal" data-target="#edit<?php echo $value['id_rambut'] ?>"><i class="fa fa-pencil"></i> Edit </button>
                      <a href="kel_model/hapModel?id=<?php echo $value['id_rambut']?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Hapus </a>
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
  <div class="modal fade" id="tamModel" tabindex="-1" role="dialog" aria-labelledby="tamUserLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true"?>&times</span></button>
          <h4 class="modal-title" id="tamUserLabel">Model Rambut Baru</h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal form-label-left" action="kel_model/tamModel" method="post" novalidate enctype="multipart/form-data">
            <p>Silahkan isi form berikut dengan data model rambut baru</a>
            </p>

            <div class="control-group">
              <label class="control-label">Nama :</label>
              <div class="controls">
                <input id="nama" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="nama"  required="required" type="text">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Deskripsi :</label>
              <div class="controls">
                <input id="nama" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="deskripsi"  required="required" type="text">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Harga :</label>
              <div class="controls">
                <input id="nama" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="harga"  required="required" type="text">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Foto :</label>
              <div class="controls">
                <input type="file" id="foto" name="foto"  required="required">
              </div>
            </div>
        <div class="modal-footer">
          <div class="form-action">
            <button type="reset" class="btn btn-warning">Reset</button>
            <button id="send" type="submit" class="btn btn-success">Tambah</button>
          </div>
        </form>
        </div>
      </div>
      </div>
    </div>
  </div>
  <?php
  $i = 1;
  foreach ($model as $key => $value) {
    ?>
  <div class="modal fade" id="edit<?php echo $value['id_rambut'] ?>" tabindex="-1" role="dialog" aria-labelledby="rincianLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true"?>&times</span></button>
          <h4 class="modal-title" id="rincianLabel">Edit Rincian Model Rambut</h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal form-label-left" action="kel_model/edModel" method="post" enctype="multipart/form-data">
            <p>Silahkan isi form berikut dengan data model rambut terbaru</p>
            <input type="hidden" name="id_barberman" value="<?php echo $value['id_rambut']?>">
            <div class="control-group">
              <label class="control-label">Nama :</label>
              <div class="controls">
                <input id="nama" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="nama" value="<?php echo $value['nama_rambut']?>"  type="text">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Deskripsi :</label>
              <div class="controls">
                <input id="nama" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="deskripsi" value="<?php echo $value['deskripsi_rambut']?>"  type="text">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Harga :</label>
              <div class="controls">
                <input id="nama" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="harga" value="<?php echo $value['harga_rambut']?>"  type="text">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Foto baru :</label>
              <div class="controls">
                <input type="file" id="foto" name="foto" >
              </div>
            </div>
        <div class="modal-footer">
          <div class="form-action">
            <button type="reset" class="btn btn-warning">Reset</button>
            <button id="send" type="submit" class="btn btn-success">Ubah</button>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
    <?php $i++;} ?>
</body>
</html>
