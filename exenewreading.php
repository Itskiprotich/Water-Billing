<?php
include 'db/dbcon.php';
if (isset($_POST['Submit'])) {

$ClientID=$_POST['ClientID'] ;
$Date= $_POST['Date'] ;					
$Reading=$_POST['Reading'] ; 

$data= preg_split("/[##]+/", $ClientID);

$id=$data[0];
$firstname=$data[1];
$lastname=$data[2];
$meterno=$data[3];
 

mysqli_query($conn,"INSERT INTO  meter_readings (meterno,name,client_id,meter_read_date,meter_reading) 
VALUES ('$meterno','$firstname  $lastname','$id','$Date','$Reading')"); 


$login_query = mysqli_query($conn, "SELECT * FROM settings where id='1' ");
$count = mysqli_num_rows($login_query);
$row = mysqli_fetch_array($login_query);

if ($count > 0) { 
    $price_per_unit= $row['price_per_unit'];
    $bill_amount=$price_per_unit * $Reading;
    $bill_no="WB". rand(1000,10000);
    $bill_balance=$bill_amount;
    $bill_date=date('Y-m-d',strtotime($Date.'+30 days'));

    /*``, ``, ``, ``, ``, `timestamps` FROM `` WHERE 1*/
    mysqli_query($conn,"INSERT INTO  billings (client,
    	meter_reading_id,bill_number,bill_amount,bill_deadline,bill_balance) 
    VALUES ('$firstname  $lastname','$meterno','$bill_no',' $bill_amount','$bill_date','$bill_balance')"); 


echo '<script>alert("Meter Reading successfully added !!")</script>';
echo '<script>windows: location="readings.php"</script>';
}

}
?>