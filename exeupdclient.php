<?php
include 'db/dbcon.php';
if (isset($_POST['Submit'])) {
$id = $_GET['id'];
$FirstName=$_POST['FirstName'] ;
$LastName=$_POST['LastName'] ;
$Phone=$_POST['Phone'] ;
$PlotNo=$_POST['PlotNo'] ;
$Address=$_POST['Address'] ;
$MeterNo=$_POST['MeterNo'] ;

mysqli_query($conn,"UPDATE clients SET  clients_first_name='$FirstName',clients_last_name='$LastName',clients_phone_number='$Phone',clients_plot_number='$PlotNo',clients_address='$Address',clients_meter_number='$MeterNo' WHERE id='$id'");

echo '<script>alert("Client successfully updated !!")</script>';
echo '<script>windows: location="clients.php"</script>';

}
?>