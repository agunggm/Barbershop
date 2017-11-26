<!DOCTYPE html>
<html lang="en">

<head>
        <title>Login Admin</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/matrix-login.css" />
        <link href="<?php echo base_url();?>assets/admin/font-awesome/css/font-awesome.css" rel="stylesheet" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

    </head>
<body>
  <div id="loginbox">
    <form id="loginform" class="form-vertical" action="admin/login" method="post">
      <div class="control-group normal_text"> <h3><img src="<?php echo base_url()?>assets/admin/img/asd.png" alt="Logo" /></h3></div>
      <div class="control-group">
        <div class="controls">
          <div class="main_input_box">
            <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="text" class="form-control" name="username" placeholder="Username" />
          </div>
        </div>
      </div>
      <div class="control-group">
        <div class="controls">
          <div class="main_input_box">
            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" class="form-control" name="password" placeholder="Password" />
          </div>
        </div>
      </div>
      <div class="form-actions">
        <span class="pull-left"><a href="<?php echo base_url()?>" class="flip-link btn btn-info" id="to-recover">Halaman pengunjung.</a></span>
        <span class="pull-right"><button type="submit" class="btn btn-success submit" name="submit" > Login</button></span>
      </div>
    </form>
    <form id="recoverform" action="#" class="form-vertical">
      <p class="normal_text">Masukan rincian akun anda untuk melakukan perubahan sandi.</p>

      <div class="controls">
        <div class="main_input_box">
          <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="text" placeholder="Username" />
        </div>
      </div>

      <div class="form-actions">
        <span class="pull-left"><a href="#" class="flip-link btn btn-success" id="to-login">&laquo; Kembali ke form login</a></span>
        <span class="pull-right"><a class="btn btn-info"/>Ubah sandi</a></span>
      </div>
    </form>
  </div>

          <script src="<?php echo base_url();?>assets/admin/js/jquery.min.js"></script>
          <script src="<?php echo base_url();?>assets/admin/js/matrix.login.js"></script>
      </body>

  </html>
