<?php
include 'db/dbcon.php';
if (isset($_POST['Submit'])) {
$id = $_GET['id'];
$FirstName=$_POST['FirstName'] ;
$LastName=$_POST['LastName'] ;
$email=$_POST['email'] ;
$phone=$_POST['phone'] ;
$Address=$_POST['Address'] ;
$usertype=$_POST['usertype'] ;

mysqli_query($conn,"UPDATE users SET  users_first_name='$FirstName',users_last_name='$LastName',email='$email',phone='$phone',users_address='$Address',users_user_type='$usertype' WHERE id='$id'");

echo '<script>alert("Admin successfully updated !!")</script>';
echo '<script>windows: location="admins.php"</script>';

}
?>