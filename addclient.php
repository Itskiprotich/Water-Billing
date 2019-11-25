<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Water Billing| Clients</title>
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
        Clients
        <small>New Client</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Clients</a></li>
        <li class="active">New Client</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">New Client</h3>

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
          <form action="execlient.php" method="post">
            <div class="form-group">
            <label for="exampleInputEmail1">First Name</label>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="text" name="FirstName" class="form-control" placeholder="First Name">
              </div>
            </div>
             <div class="form-group">
            <label for="exampleInputEmail1">Last Name</label>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="text" name="LastName" class="form-control" placeholder="Last Name">
              </div>
            </div>
             <div class="form-group">
            <label for="exampleInputEmail1">Phone</label>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="number" name="Phone" class="form-control" placeholder="Phone">
              </div>
            </div>
             <div class="form-group">
            <label for="exampleInputEmail1">Plot No.</label>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="number" name="PlotNo" class="form-control" placeholder="Plot No.">
              </div>
            </div>
             <div class="form-group">
            <label for="exampleInputEmail1">Address</label>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="text" name="Address" class="form-control" placeholder="Address">
              </div>
            </div>
             <div class="form-group">
            <label for="exampleInputEmail1">Meter No.</label>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="text" name="MeterNo" class="form-control" placeholder="Meter No.">
              </div>
            </div>

            <div class="form-group">
               <a href="clients.php"> <button type="button" class="btn btn-primary">Cancel</button></a>
          <button type="submit" name="Submit" class="btn btn-success pull-right">Submit</button>
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
</body>
</html>
