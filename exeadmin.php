<?php
include 'db/dbcon.php';
if (isset($_POST['Submit'])) {
$FirstName=$_POST['FirstName'] ;
$LastName= $_POST['LastName'] ;					
$email=$_POST['email'] ;
$phone=$_POST['phone'] ;
$Address=$_POST['Address'] ; 
$usertype=$_POST['usertype'] ;
$Password=$_POST['Password'] ; 


 mysqli_query($conn,"INSERT INTO  users (users_first_name,users_last_name,email,phone,users_address,users_user_type,password) 
VALUES ('$FirstName','$LastName','$email','$phone','$Address','$usertype','$Password')"); 

echo '<script>alert("User successfully added !!")</script>';
echo '<script>windows: location="admins.php"</script>';

}
?>
