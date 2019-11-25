
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p> <?php echo $row['users_first_name'];?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="dash.php"><i class="fa fa-circle-o"></i>Home</a></li>
           
          </ul>
        </li> 
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Admins</span>

            <span class="pull-right-container">

              <span class="label label-primary pull-right">3</span>

              
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="addadmin.php"><i class="fa fa-circle-o"></i>Add Admin</a></li>
            <li><a href="admins.php"><i class="fa fa-circle-o"></i> Vew Admins</a></li>
             
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Clients</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="addclient.php"><i class="fa fa-circle-o"></i> Add</a></li>
            <li><a href="clients.php"><i class="fa fa-circle-o"></i> Active clients</a></li>
          <!--   <li><a href="blacklist.php"><i class="fa fa-circle-o"></i> Black Listed clients</a></li> -->
           
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Meter Readings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="newreading.php"><i class="fa fa-circle-o"></i> Add</a></li>
            <li><a href="readings.php"><i class="fa fa-circle-o"></i> View</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Bills</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <!-- <li><a href="addbill.php"><i class="fa fa-circle-o"></i> Pay Bill</a></li> -->
            <li><a href="bills.php"><i class="fa fa-circle-o"></i> View Bills</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Payments</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="addpayment.php"><i class="fa fa-circle-o"></i>New Payment</a></li>
            <li><a href="payments.php"><i class="fa fa-circle-o"></i> View Payments</a></li>
          </ul>
        </li>
         
        <li><a href="settings.php"><i class="fa fa-cogs"></i> <span>Settings</span></a></li>
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  