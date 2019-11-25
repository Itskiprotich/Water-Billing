<?php
include 'db/dbcon.php';
$id = $_GET['id'];
 mysqli_query($conn,"DELETE from meter_readings WHERE id='$id'");
 echo "<script>windows: location='readings.php'</script>";	

?>