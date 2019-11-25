

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Water Billing| Settings</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<?php include('links.php')?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
 <?php include('header.php')?> 

  <?php include('nav.php');?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Settings
        <small>Settings</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Settings</a></li>
        <li class="active">All Settings</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Settings</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body"> 
             <div class="col-md-6">
                <div class="box box-primary">
                <div class="box-header with-border">
              <h3 class="box-title">Update System Settings</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="execupdset.php">
              <div class="box-body">
                <div class="form-group">
                  <?php
                  include('db/dbcon.php');
                  $user_query = mysqli_query($conn, "SELECT *  FROM settings where id='1'") or die(mysqli_error());
                  while ($row = mysqli_fetch_array($user_query)) {
                  ?>

                  <label for="exampleInputEmail1">Price per Unit</label>
                  <input type="number" name="Unit" value="<?php echo $row['price_per_unit'];?>" class="form-control" id="exampleInputEmail1" placeholder="Price">
                <?php  }  ?>
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="Update" class="btn btn-success pull-right">Update Settings</button>
              </div>
            </form>
          </div>
        </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include('footer.php');?>
 
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<?php include('scripts.php');?>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
</body>
</html>
