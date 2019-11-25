<?php
include 'db/dbcon.php';
$id = $_GET['id'];
 mysqli_query($conn,"DELETE from clients WHERE id='$id'");
 echo "<script>windows: location='clients.php'</script>";	

?>