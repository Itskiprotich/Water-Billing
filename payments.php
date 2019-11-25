<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Water Billing| Payments</title>
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
        Payments
        <small>All Payments</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Payments</a></li>
        <li class="active">All Payments</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Active</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Billing ID</th>
                  <th>Payment Date</th>
                  <th>Payment Amount</th>
                  <th>Payment Type</th>
                  <th>Action</th>
                  
                </tr>
              </thead>
                 <tbody>
        <?php
        $result = mysqli_query($conn, "SELECT * FROM payments order by id DESC") or die (mysqli_error($conn));
        $i = 0;
        while ($row = mysqli_fetch_array($result)) {
            $id = $row['id'];
            $i = $i + 1;
            ?>
            <tr>
                <td><?php echo $i; ?></td>

                <td><?php echo $row['billing_id']; ?></td>
                <td><?php echo $row['payment_date']; ?></td>
                <td>Kshs. <?php echo $row['payment_amount']; ?></td>
                <td><?php echo $row['payment_type']; ?></td> 
                <td>
                  <!-- 
                       <a href="updpay.php<?php echo '?id=' . $id; ?>"> <button type="button" class="btn btn-primary"><i class="fa fa-edit"></i></button></a> -->
                    <a class="btn btn-danger" for="DeleteAdmin" href="#delete<?php echo $id; ?>" data-toggle="modal"
                       data-target="#delete<?php echo $id; ?>">
                        <i class="fa fa-trash-o"></i>
                    </a>

                    <!-- delete modal user -->
                    <div class="modal fade" id="delete<?php echo $id; ?>" tabindex="-1" role="dialog"
                         aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-user"></i> Payment
                                    </h4>
                                </div>
                                <div class="modal-body">
                                    <div class="alert alert-danger">
                                        Are you sure you want to delete?
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true"><i
                                                class="glyphicon glyphicon-remove icon-white"></i> No
                                        </button>
                                        <a href="delpayment.php<?php echo '?id=' . $id; ?>"
                                           style="margin-bottom:5px;" class="btn btn-primary"><i
                                                class="glyphicon glyphicon-ok icon-white"></i> Yes</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- edit modal user -->
                    <div class="modal fade" id="edit<?php echo $id; ?>" tabindex="-1" role="dialog"
                         aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header success">
                                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-user"></i> Client
                                    </h4>
                                </div>

                                <div class="modal-body"> 
                                       <div class="box box-primary">
                                         <div class="box-header with-border">
                                           <h3 class="box-title">Update Details</h3>
                                         </div>  
                                           <div class="box-body">
                                            <div class="col-md-6">
                                              <!-- general form elements -->
                                              <div class="box box-primary">
                                              
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
                                   

                                       </div>
                                  
                                    <div class="modal-footer">
                                        <button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true"><i
                                                class="glyphicon glyphicon-remove icon-white"></i> Dismis
                                        </button>
                                 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        <?php } ?>
        </tbody>
            </table>
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
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
