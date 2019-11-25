<!DOCTYPE html>
<html>
<head> 
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Water Billing| Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page"  style=" background:url(img/warer-flow-pipe4.gif); background-size:cover;" >
<div class="login-box" >
  <div class="login-logo">
    <a href="#" style="color: #fff"><b>Water</b>Billing</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body"  style=" background:url(img/warer-flow-pipe3.gif); background-size:cover;">
    <p class="login-box-msg" style="color: #fff">Sign in to start your session</p>

    <form action="" method="post">
      <div class="form-group has-feedback">
        <input type="email" name="username" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
           
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
 

 <!-- handle code -->
 <?php
 include('db/dbcon.php');

 if (isset($_POST['submit'])) {

     $username = $_POST['username'];
     $password = $_POST['password'];

     $login_query = mysqli_query($conn, "select * from users where email='$username' and password='$password'");
     $count = mysqli_num_rows($login_query);
     $row = mysqli_fetch_array($login_query);

     if ($count > 0) {
         session_start();
         $_SESSION['id'] = $row['id'];

         echo "<script>window.location='dash.php'</script>";
     } else {  
          
         echo "<script>alert('invalid email or password');</script>";  
         header ("location: index.php?err".mysqli_error());
     }
 }
 ?>

  </div>
  <!-- /.login-box-body -->



</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>

</body>
</html>
<?php
$file = "Ding-dong-intercom.mp3";
 if(isset($_GET['err'])){
   
  echo "<embed  src=\"Ding-dong-intercom.mp3\" autostart=\"true\" loop=\"false\" />";
  } ?>