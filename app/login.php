<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {

$email=$_POST['email'] ;
$pass= $_POST['pass'] ;	

$login_query = mysqli_query($conn, "SELECT * from clients WHERE email='$email'  ");
$count = mysqli_num_rows($login_query);
$row = mysqli_fetch_array($login_query);

if ($count > 0) {
	
	$password=$row['password']; 

	if ($pass!=$password) {
		# code...
		echo "Invalid Password";
	}else{

		echo "Welcome";	
}


}else{

	echo "User Not Found";
}
}

?>