<?php 

require 'session.php';

include('db/dbcon.php');
$user_query = mysqli_query($conn, "select * from users where id='$id_session'") or die(mysqli_error());
$row = mysqli_fetch_array($user_query);
{

?>
  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>W</b>B</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Water </b> Billing</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav"> 
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $row['users_first_name'];?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                 <?php echo $row['users_first_name'];?> - <?php echo $row['users_first_name'];?>
                  <small>Member since <?php echo $row['created'];?></small>
                </p>
              </li>
             
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="profile.php" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                <!-- /  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a> -->
                  <a class="btn btn-danger" for="DeleteAdmin" href="#logout" data-toggle="modal"
                       data-target="#logout">
                        Sign out
                    </a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->

         

          
        </ul>
      </div>
    </nav>
  </header>
  <?php
  }
include('nav.php');


  ?>

   <!-- delete modal user -->
          <div class="modal fade" id="logout" tabindex="-1" role="dialog"
               aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h4 class="modal-title" id="myModalLabel"><i class="fa fa-user"></i> Logout
                          </h4>
                      </div>
                      <div class="modal-body">
                          <div class="alert alert-danger">
                              Are you sure you want to logout?
                          </div>
                          <div class="modal-footer">
                              <button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true"><i
                                      class="glyphicon glyphicon-remove icon-white"></i> No
                              </button>
                              <a href="logout.php"
                                 style="margin-bottom:5px;" class="btn btn-primary"><i
                                      class="glyphicon glyphicon-ok icon-white"></i> Yes</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>