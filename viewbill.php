<?php
include 'db/dbcon.php';
$id = $_GET['id'];

$result = mysqli_query($conn,"SELECT * FROM billings where id= '$id'");
while($row = mysqli_fetch_array($result))
{
	$meter_reading_id=$row['meter_reading_id'];
	$client=$row['client'];
	$bill_number=$row['bill_number'];
	$bill_amount=$row['bill_amount'];
	$bill_deadline=$row['bill_deadline'];
	$bill_balance=$row['bill_balance']; 


	$result2 = mysqli_query($conn,"SELECT * FROM clients where clients_meter_number= '$meter_reading_id'");
	while($row2 = mysqli_fetch_array($result2))
	{
	$clients_id=$row2['id'];
	$clients_first_name=$row2['clients_first_name'];
	$clients_last_name=$row2['clients_last_name'];
	$clients_address=$row2['clients_address'];
	$clients_phone_number=$row2['clients_phone_number'];
	$clients_plot_number=$row2['clients_plot_number'];
/*``, ``, ``, ``, ``, `clients_meter_number`, `active`, `timestamps`*/


	$result23 = mysqli_query($conn,"SELECT * FROM settings where id= '1'");
	while($row23 = mysqli_fetch_array($result23))
	{
	$price_per_unit=$row23['price_per_unit'];
	$mlo=$bill_amount/$price_per_unit;
	}

	}

}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Water Billing| View</title>
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
        Bill
        <small>view bill</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Bill</a></li>
        <li class="active">view bill</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">View Bill</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <!-- edited -->

          <div id="data">
          <center>
          <h4><center><b>Water Billing System</b></center></h4>
          <p>ESPSN - ESSP</p>
          <p><strong>Bill Invoice</strong></p>
          <p>Phone: +254 724 743 788</p>
          <i style="text-align:right; margin-left:250px;">Date: <?php echo $bill_deadline; ?></i>
          </center>
          <div id="context">
          <table class="table table-striped table-bordered">
          <tr>
          	<td>Last Name:</td>
          	<td><b><i><?php echo $clients_last_name; ?></i></b></td>
          	<td>Client ID</td>
          	<td><i>SMART/00<?php echo $clients_id; ?></i>
          	</td>
          </tr>
          <tr>
          	<td>First Name</td>
          	<td><b><i><?php echo $clients_first_name; ?></td>
          	<td bordercolor="#000000">Meter Number</td>
          	<td><?php echo $meter_reading_id; ?></td>
          </tr>

          <tr>
          	<td>Address: </td>
          	<td><b><i><?php echo $clients_address; ?></td>
          </tr>
          <tr>
          	<td bordercolor="#000000">Contact: </td>
          	<td><b><i><?php echo $clients_phone_number; ?></td>
          </tr>
          <tr><td bordercolor="#000000">Plot No :</td>
          	<td><b><i> <?php echo $clients_plot_number;?> </td>
          	 
          	</tr>
          <tr><td bordercolor="#000000">Consuption: </td><td><b><i><?php echo $mlo;?> </td><td bordercolor="#000000">Price / unit : </td>
          <td><b><i><?php echo $price_per_unit; ?>&nbsp;Kshs </td>
          </tr>
          <tr><td colspan="4"><center><h2>Total Invoice:<b><i>Kshs. <?php echo $bill_amount; ?><b><i> /= </h2></center></td></tr>
          <?php
          $session=$_SESSION['id'];
          
          $result = mysqli_query($conn,"SELECT * FROM users where id= '$id_session'");
          while($row = mysqli_fetch_array($result))
            {
            $sessionname=$row['users_first_name'];

            }
          ?>
          <tr><td>Casher:<?php echo $sessionname;?></td><td>Signature:_____________</td></tr>

           
          </table>



          </div>
          <!-- endof edit -->
        </div>
        <CENTER><button type="button"  class="btn btn-default " onclick="printDiv(data)"><span
class=" glyphicon glyphicon-print"></span>&nbsp;Print Bill</button>&nbsp;<a href="bills.php"><button class="btn btn-danger"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Go back</button></a></CENTER>
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
function printDiv(data) {
      var printContents = document.getElementById('data').innerHTML;    
   var originalContents = document.body.innerHTML;      
   document.body.innerHTML = printContents;     
   window.print();     
   document.body.innerHTML = originalContents;
   }
</script>
</body>
</html>
