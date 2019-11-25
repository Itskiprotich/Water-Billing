<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Water Billing| Payment</title>
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
        Meter
        <small>Bill Payment</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Meter</a></li>
        <li class="active">Bill Payment</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Pay Bill</h3>

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
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
            </div>
          <form action="execpay.php" method="post">


            <div class="form-group">
            <label for="exampleInputEmail1">Bill</label>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-magnet"></i></span>
                <select name="ClientID" class="form-control select2" style="width: 100%;">
                <!-- php code select -->
                 <?php

include('db/dbcon.php');
$user_query = mysqli_query($conn, "select * from clients") or die(mysqli_error());

while ($row = mysqli_fetch_array($user_query)) {
                 ?>
                  
                  <option value="<?php echo $row['id'];?>##<?php echo $row['clients_first_name'];?>##<?php echo $row['clients_last_name'];?>##<?php echo $row['clients_meter_number'];?>"><?php echo $row['clients_first_name'];?> <?php echo $row['clients_last_name'];?></option>
               <?php } ?>
                  <!-- end of code -->
                </select>
              </div>
            </div>
             <div class="form-group">
            <label for="exampleInputEmail1">Payment Date</label>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                <input type="date" name="Date" class="form-control" placeholder="Payment Date">

              </div>
            </div>
             <div class="form-group">
            <label for="exampleInputEmail1">Payment Amount</label>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                <input type="number" name="Reading" class="form-control" placeholder="Payment Amount">
              </div>
            </div>
            
            <div class="form-group">
               <a href="readings.php"> <button type="button" class="btn btn-primary">Cancel</button></a>
          <button type="submit" name="Submit" class="btn btn-success pull-right">Pay bill</button>
        </div>
          </form>

        </div>
        <!-- /.box-body -->
        <div class="box-footer">
      
        </div>
        <!-- /.box-footer-->
        </div>
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

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
    })
  </script>
</body>
</html>
