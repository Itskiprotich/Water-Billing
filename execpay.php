<?php
include 'db/dbcon.php';
if (isset($_POST['Submit'])) {

$Bill=$_POST['Bill'] ;
$Date= $_POST['Date'] ;					
$Amount=$_POST['Amount'] ; 
$Method=$_POST['Method'] ; 

/*``, ``, ``, ``, `timestamps` FROM `payments`*/

mysqli_query($conn,"INSERT INTO  payments (billing_id,payment_date,payment_amount,payment_type) 
VALUES ('$Bill','$Date  ','$Amount','$Method')") or die(msqli_error()); 

/*`meter_reading_id`, `client`, ``, ``, `bill_deadline`, `bill_balance`, `timestamps` FROM `` WHERE 1*/
$login_query = mysqli_query($conn, "SELECT * FROM billings where bill_number='$Bill' ");
$count = mysqli_num_rows($login_query);
$row = mysqli_fetch_array($login_query);

if ($count > 0) { 
    $bill_amount= $row['bill_amount'];

    $current_bill=$bill_amount-$Amount;

    mysqli_query($conn,"UPDATE billings SET  bill_amount='$current_bill' WHERE  bill_number='$Bill' ");


echo '<script>alert("Payment successfully added !!")</script>';
echo '<script>windows: location="payments.php"</script>';
}

}