<?php
include 'db/dbcon.php';
$id = $_GET['id'];
 mysqli_query($conn,"DELETE from billings WHERE id='$id'");
 echo "<script>windows: location='bills.php'</script>";	

?>