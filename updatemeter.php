

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Water Billing| Meter</title>
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
        <small>Update Meter</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Meter Reading</a></li>
        <small>Meter Reading</small>
        <li class="active">Update</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
        <small>Meter Reading</small>
          <h3 class="box-title">Update</h3>

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

          <?php
          include 'db/dbcon.php';
          $id = $_GET['id'];
          $user_query = mysqli_query($conn, "SELECT * FROM meter_readings WHERE id='$id'") or die(mysqli_error());
          while ($row = mysqli_fetch_array($user_query)) 
          {
          ?>
          <div class="box box-primary">
            <div class="box-header with-border">
            </div>
       <form action="exeupdreading.php<?php echo '?id=' . $id; ?>" method="post">


            <div class="form-group"> 
            <label for="exampleInputEmail1">Client</label>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" value="<?php echo $row['name']?>" name="Client" class="form-control" placeholder="Client">
              </div>
            </div>
            </div>
             <div class="form-group">
            <label for="exampleInputEmail1">Reading Date</label>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                <input type="date" value="<?php echo $row['meter_read_date']?>" name="Date" class="form-control" placeholder="Reading Date">

              </div>
            </div>
             <div class="form-group">
            <label for="exampleInputEmail1">Meter Reading</label>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                <input type="number" value="<?php echo $row['meter_reading']?>" name="Reading" class="form-control" placeholder="Meter Reading">
              </div>
            </div>
            
            <div class="form-group">
               <a href="readings.php"> <button type="button" class="btn btn-primary">Cancel</button></a>
          <button type="submit" name="Submit" class="btn btn-success pull-right">Submit</button>
        </div>
          </form>

        </div>
        <!-- /.box-body -->
        <div class="box-footer">
      
        </div>
        <!-- /.box-footer-->
        <?php  }?>
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
