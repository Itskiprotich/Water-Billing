<?php
include 'db/dbcon.php';
$id = $_GET['id'];
 mysqli_query($conn,"DELETE from payments WHERE id='$id'");
 echo "<script>windows: location='payments.php'</script>";	

?>