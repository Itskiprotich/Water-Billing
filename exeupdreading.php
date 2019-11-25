<?php
include 'db/dbcon.php';
if (isset($_POST['Submit'])) {
$id = $_GET['id'];
$Date=$_POST['Date'];
$Reading=$_POST['Reading'] ;


mysqli_query($conn,"UPDATE meter_readings SET meter_read_date='$Date',meter_reading='$Reading' WHERE id='$id'");

echo '<script>alert("Meter successfully updated !!")</script>';
echo '<script>windows: location="readings.php"</script>';

}
?>