<?php
include 'db/dbcon.php';
$id = $_GET['id'];
 mysqli_query($conn,"DELETE from users WHERE id='$id'");
 echo "<script>windows: location='admins.php'</script>";	

?>