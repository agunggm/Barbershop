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
      <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Dashboard</a></div>
    </div>
  <!--End-breadcrumbs-->

  <!--Action boxes-->
    <div class="container-fluid">

      <div class="row-fluid">
        <?php echo $user['username'];?>
        <?php echo $user['password'];?>
      </div>
  <!--End-Chart-box-->
    </div>
  </div>
</body>
</html>
