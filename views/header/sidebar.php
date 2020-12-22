<header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>H</b>P</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Home Property</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
      
        
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?=base_url()?>uploads/usericon.png" class="user-image" alt="">
              <span class="hidden-xs">
Welcome admin
</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              
              <!-- Menu Body -->
             
              <!-- Menu Footer-->
              
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
      
          <li>
              <a href="<?=base_url()?>login/logout"><i class="fa fa-power-off"></i>Logout</a>
          </li>
       
        </ul>
      </div>
    </nav>
  </header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
   <section class="sidebar">
      <ul class="sidebar-menu" data-widget="tree">
         <li>
            <a href="<?=base_url();?>dashboard">
            <i class="fa fa-desktop"></i> <span>Dashboard</span>
            <span class="pull-right-container">
            </span>
            </a>
         </li>
         <li>
            <a href="<?=base_url()?>user/user_list">
            <i class="fa fa-user"></i><span>User</span>
            <span class="pull-right-container"></span>
            </a>
         </li>
         <li>
            <a href="<?=base_url()?>client/client_list">
            <i class="fa fa fa-user"></i><span>Client</span>
            <span class="pull-right-container">
            </span>
            </a>
         </li>
         
         <li class="treeview">
            <a href="#">
            <i class="fa fa fa-user"></i><span>Requirement Apartment</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
               <li><a href="<?=base_url()?>requirement_apartment/requirement_apartment_list"><i class="fa fa-user"></i>Requirement Apartment</a></li>
               <li><a href="<?=base_url()?>status_requirement/status_requirement_list"><i class="fa fa-check"></i>Status Requirement</a></li>
            </ul>
         </li>
          <li class="treeview">
            <a href="#">
            <i class="fa fa-building-o"></i><span>Apartment</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
               <li><a href="<?=base_url()?>apartment/apartment_list"><i class="fa fa-building-o"></i>Apartment List</a></li>
               <li><a href="<?=base_url()?>status/status_property"><i class="fa fa-check"></i>Status Property</a></li>
               <li><a href="<?=base_url()?>brokerout/broker_out"><i class="fa fa-user"></i>Broker Out</a></li>
               <li><a href="<?=base_url()?>brokerin/broker_in"><i class="fa fa-user"></i>Broker In</a></li>
               <li><a href="<?=base_url()?>developer/developer"><i class="fa fa-user"></i>Developer</a></li>
               <li><a href="<?=base_url()?>particular/particular"><i class="fa fa-circle"></i>Particular</a></li>
            </ul>
         </li>
           <li class="treeview">
            <a href="#">
            <i class="fa fa-list-alt"></i><span>Category</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
               <li><a href="<?=base_url()?>area/area"><i class="fa fa-arrow-right"></i>Area</a></li>
               <li><a href="<?=base_url()?>city/city"><i class="fa fa-arrow-right"></i>City</a></li>
               <li><a href="<?=base_url()?>zone/zone"><i class="fa fa-arrow-right"></i>Zone</a></li>
               <li><a href="<?=base_url()?>comission/comission_type"><i class="fa fa-arrow-right"></i>Comission Type</a></li>
               <li><a href="<?=base_url()?>department/department"><i class="fa fa-arrow-right"></i>Department</a></li>
               <li><a href="<?=base_url()?>enterto/enter_to"><i class="fa fa-arrow-right"></i>Enter To</a></li>
               <li><a href="<?=base_url()?>roadto/road_to"><i class="fa fa-arrow-right"></i>Road To</a></li>
               <li><a href="<?=base_url()?>transaction/transaction_type"><i class="fa fa-arrow-right"></i>Transaction Type</a></li>
               <li><a href="<?=base_url()?>typeapartment/type_apartment"><i class="fa fa-arrow-right"></i>Type Apartment</a></li>
               <li><a href="<?=base_url()?>typelaundry/type_laundry"><i class="fa fa-arrow-right"></i>Type Laundry</a></li>
            </ul>
         </li>
          <li>
            <a href="<?=base_url();?>admin_setting">
            <i class="fa fa-cog"></i> <span>Admin Setting</span>
            <span class="pull-right-container">
            </span>
            </a>
         </li>
      </ul>
   </section>
</aside>
