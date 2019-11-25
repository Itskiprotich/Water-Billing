<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
 
$FirstName=$_POST['firstname'] ;
$LastName= $_POST['lastname'] ;					
$Phone=$_POST['phone'] ;
$PlotNo=$_POST['plot'] ;
$Address=$_POST['address'] ; 
$MeterNo=$_POST['meter'] ;
$email=$_POST['email'] ;
$pass1=$_POST['pass1'] ;
$gender=$_POST['gender'] ;
$username=$_POST['username'] ;
 
 $sql="INSERT INTO  clients (clients_first_name,clients_last_name,clients_phone_number,clients_plot_number,clients_address,clients_meter_number,active, email, password, gender,username) 
VALUES ('$FirstName','$LastName','$Phone','$PlotNo','$Address','$MeterNo','active','$email','$pass1','$gender','$username')";
 

if(mysqli_query($conn, $sql)){
    
    echo "Registration Successfull";
}
 else{

    echo "Registration not Successfull";

	}
 

  }
?>