<?php
include 'db/dbcon.php';
if (isset($_POST['Update'])) {

$Unit=$_POST['Unit'] ;

mysqli_query($conn,"UPDATE settings SET  price_per_unit='$Unit' WHERE id='1'");

echo '<script>alert("Settings successfully updated !!")</script>';
echo '<script>windows: location="settings.php"</script>';

}
?>