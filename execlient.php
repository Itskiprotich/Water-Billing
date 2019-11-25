<?php
include 'db/dbcon.php';
if (isset($_POST['Submit'])) {
$FirstName=$_POST['FirstName'] ;
$LastName= $_POST['LastName'] ;					
$Phone=$_POST['Phone'] ;
$PlotNo=$_POST['PlotNo'] ;
$Address=$_POST['Address'] ; 
$MeterNo=$_POST['MeterNo'] ;
 

mysqli_query($conn,"INSERT INTO  clients (clients_first_name,clients_last_name,clients_phone_number,clients_plot_number,clients_address,clients_meter_number,active) 
VALUES ('$FirstName','$LastName','$Phone','$PlotNo','$Address','$MeterNo','active')"); 

echo '<script>alert("User successfully added !!")</script>';
echo '<script>windows: location="clients.php"</script>';

}
?>