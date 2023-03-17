<section class="sidebar">
  <!-- Sidebar user panel -->
  <div class="user-panel"> 
	<div class="pull-left image">
    <?php $usr = $this->Main_model->view_where('user', array('username'=> $this->session->username))->row_array();
	$foto='avatar2.png';
           ?>
		   <img src="<?php echo base_url(); ?>/asset/images/<?php echo $foto; ?>" class="img-circle" alt="User Image"> 
    </div>
    <div class="pull-left info">
      <?php echo "<p>$usr[username]</p>"; ?>
      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
  </div>

  <!-- sidebar menu: : style can be found in sidebar.less -->
  <!-- <ul class="sidebar-menu"> -->
    <!-- <li class="header" style='color:#fff; text-transform:uppercase; border-bottom:2px solid #00c0ef'>MENU <span class='uppercase'><?php echo $this->session->level; ?></span></li> -->
    <ul class="sidebar-menu">
    <li class="header" style='color:#fff; text-transform:uppercase; border-bottom:2px solid #00c0ef'>MENU QHSE</li>

	  <li class="treeview">
      <a href="#"><i class="fa fa-shield"></i> <span>QHSE Dashboard</span><i class="fa fa-angle-left pull-right"></i></a>
      <ul class="treeview-menu">
		<?php
			#echo "<li><a href='".base_url()."User/Index'><i class='fa fa-circle-o'></i>Operations Quality</a></li>";
      echo "<li><a href='".base_url()."Main/hse'><i class='fa fa-circle-o'></i>HSE</a></li>";
      echo "<li><a href='".base_url()."Main/ims'><i class='fa fa-circle-o'></i>IMS</a></li>";
      echo "<li><a href='".base_url()."Main/sqd'><i class='fa fa-circle-o'></i>SQD</a></li>";
      echo "<li><a href='".base_url()."Main/projects_qual'><i class='fa fa-circle-o'></i>Projects Quality</a></li>";
			echo "<li><a href='".base_url()."Main/operations_qual'><i class='fa fa-circle-o'></i>Operations Quality</a></li>";
      #echo "<li><a href='".base_url()."User/C_ItemCard'><i class='fa fa-circle-o'></i>Items</a></li>";  
        ?>
      </ul>
    </li>

    
	<li class="treeview">
      <a href="#"><i class="fa fa-database"></i> <span>QHSE Data Control</span><i class="fa fa-angle-left pull-right"></i></a>
      <ul class="treeview-menu">
		<?php
			#echo "<li><a href='".base_url()."User/Index'><i class='fa fa-circle-o'></i>Operations Quality</a></li>";
    //   echo "<li><a href='".base_url()."Main/C_hse_leading'><i class='fa fa-circle-o'></i>HSE - LEADING</a></li>";
    //   echo "<li><a href='".base_url()."Main/C_hse_lagging'><i class='fa fa-circle-o'></i>HSE - LAGGING</a></li>";
    //   echo "<li><a href='".base_url()."Main/C_hse_keylag'><i class='fa fa-circle-o'></i>HSE - KEYLAG</a></li>";
	  // echo "<li><a href='".base_url()."#'><i class='fa fa-circle-o'></i>IMS - PROCEDURE</a></li>";
    //   echo "<li><a href='".base_url()."#'><i class='fa fa-circle-o'></i>IMS - AUDIT</a></li>";
    //   echo "<li><a href='".base_url()."#'><i class='fa fa-circle-o'></i>SQD - NCR SUP</a></li>";
	  // echo "<li><a href='".base_url()."#'><i class='fa fa-circle-o'></i>PROJECTS QUALITY</a></li>";
	  echo "<li><a href='".base_url()."Main/V_Import'><i class='fa fa-circle-o'></i>OPERATIONS QUALITY</a></li>";
      #echo "<li><a href='".base_url()."User/projects_qual'><i class='fa fa-circle-o'></i>Projects Quality</a></li>";
			#echo "<li><a href='".base_url()."User/operations_qual'><i class='fa fa-circle-o'></i>Operations Quality</a></li>";
      #echo "<li><a href='".base_url()."User/C_ItemCard'><i class='fa fa-circle-o'></i>Items</a></li>";  
        ?>
      </ul>
    </li>
    <li class="header" style='color:#fff; text-transform:uppercase; border-bottom:2px solid #00c0ef'>MENU OPEX</li>
    <li class="treeview">
      <a href="#"><i class="fa fa-check-circle"></i> <span>Operation Excellence</span><i class="fa fa-angle-left pull-right"></i></a>
      <ul class="treeview-menu">
		<?php
			#echo "<li><a href='".base_url()."User/Index'><i class='fa fa-circle-o'></i>Operations Quality</a></li>";
      echo "<li><a href='".base_url()."Main/dsa'><i class='fa fa-circle-o'></i>In-Shield</a></li>";
      echo "<li><a href='".base_url()."Main/asd'><i class='fa fa-circle-o'></i>Improvement Tracker</a></li>";
      echo "<li><a href='".base_url()."Main/e'><i class='fa fa-circle-o'></i>Automation</a></li>";
      echo "<li><a href='".base_url()."Main/e'><i class='fa fa-circle-o'></i>Design</a></li>";
      #echo "<li><a href='".base_url()."User/projects_qual'><i class='fa fa-circle-o'></i>Projects Quality</a></li>";
			#echo "<li><a href='".base_url()."User/operations_qual'><i class='fa fa-circle-o'></i>Operations Quality</a></li>";
      #echo "<li><a href='".base_url()."User/C_ItemCard'><i class='fa fa-circle-o'></i>Items</a></li>";  
        ?>
      </ul>
    </li>
    <li class="header" style='color:#fff; text-transform:uppercase; border-bottom:2px solid #00c0ef'>MENU SCM</li>
    <li class="treeview">
      <a href="#"><i class="fa fa-shopping-cart"></i> <span>SCM</span><i class="fa fa-angle-left pull-right"></i></a>
      <ul class="treeview-menu">
		<?php
			#echo "<li><a href='".base_url()."User/Index'><i class='fa fa-circle-o'></i>Operations Quality</a></li>";
      echo "<li><a href='".base_url()."Main/dsa'><i class='fa fa-circle-o'></i>Supply Chain</a></li>";
      echo "<li><a href='".base_url()."Main/stores_kpi'><i class='fa fa-circle-o'></i>Stores</a></li>";
      #echo "<li><a href='".base_url()."User/projects_qual'><i class='fa fa-circle-o'></i>Projects Quality</a></li>";
			#echo "<li><a href='".base_url()."User/operations_qual'><i class='fa fa-circle-o'></i>Operations Quality</a></li>";
      #echo "<li><a href='".base_url()."User/C_ItemCard'><i class='fa fa-circle-o'></i>Items</a></li>";  
        ?>
      </ul>
    </li>

    <li class="header" style='color:#fff; text-transform:uppercase; border-bottom:2px solid #00c0ef'>MENU ENGINEERING</li>
    <li class="treeview">
      <a href="#"><i class="fa fa-cogs"></i> <span>Engineering</span><i class="fa fa-angle-left pull-right"></i></a>
      <ul class="treeview-menu">
		<?php
			#echo "<li><a href='".base_url()."User/Index'><i class='fa fa-circle-o'></i>Operations Quality</a></li>";
      echo "<li><a href='".base_url()."Main/engineering_kpi'><i class='fa fa-circle-o'></i>KPI - Engineering</a></li>";
      #echo "<li><a href='".base_url()."User/projects_qual'><i class='fa fa-circle-o'></i>Projects Quality</a></li>";
			#echo "<li><a href='".base_url()."User/operations_qual'><i class='fa fa-circle-o'></i>Operations Quality</a></li>";
      #echo "<li><a href='".base_url()."User/C_ItemCard'><i class='fa fa-circle-o'></i>Items</a></li>";  
        ?>
      </ul>
    </li>

    <li class="header" style='color:#fff; text-transform:uppercase; border-bottom:2px solid #00c0ef'>MENU PROJECTS</li>
    <li class="treeview">
      <a href="#"><i class="fa fa-cog"></i> <span>Projects</span><i class="fa fa-angle-left pull-right"></i></a>
      <ul class="treeview-menu">
		<?php
			#echo "<li><a href='".base_url()."User/Index'><i class='fa fa-circle-o'></i>Operations Quality</a></li>";
      echo "<li><a href='".base_url()."Main/projects_kpi'><i class='fa fa-circle-o'></i>KPI - Projects</a></li>";
      #echo "<li><a href='".base_url()."User/projects_qual'><i class='fa fa-circle-o'></i>Projects Quality</a></li>";
			#echo "<li><a href='".base_url()."User/operations_qual'><i class='fa fa-circle-o'></i>Operations Quality</a></li>";
      #echo "<li><a href='".base_url()."User/C_ItemCard'><i class='fa fa-circle-o'></i>Items</a></li>";  
        ?>
      </ul>
    </li>

    <li class="header" style='color:#fff; text-transform:uppercase; border-bottom:2px solid #00c0ef'>MENU ITES</li>
    <li class="treeview">
      <a href="#"><i class="fa fa-code"></i> <span>IT & Digital</span><i class="fa fa-angle-left pull-right"></i></a>
      <ul class="treeview-menu">
		<?php
			#echo "<li><a href='".base_url()."User/Index'><i class='fa fa-circle-o'></i>Operations Quality</a></li>";
      echo "<li><a href='".base_url()."Main/ites'><i class='fa fa-circle-o'></i>KPI - IT & Digital</a></li>";
      #echo "<li><a href='".base_url()."User/projects_qual'><i class='fa fa-circle-o'></i>Projects Quality</a></li>";
			#echo "<li><a href='".base_url()."User/operations_qual'><i class='fa fa-circle-o'></i>Operations Quality</a></li>";
      #echo "<li><a href='".base_url()."User/C_ItemCard'><i class='fa fa-circle-o'></i>Items</a></li>";  
        ?>
      </ul>
    </li>

    <li class="treeview">
      <a href="#"><i class="fa fa-industry"></i> <span>Operations</span><i class="fa fa-angle-left pull-right"></i></a>
      <ul class="treeview-menu">
		<?php
			#echo "<li><a href='".base_url()."User/Index'><i class='fa fa-circle-o'></i>Operations Quality</a></li>";
      echo "<li><a href='".base_url()."Main/dsa'><i class='fa fa-circle-o'></i>Productions</a></li>";
      echo "<li><a href='".base_url()."Main/operations_main_kpi'><i class='fa fa-circle-o'></i>Maintenance</a></li>";
      #echo "<li><a href='".base_url()."User/projects_qual'><i class='fa fa-circle-o'></i>Projects Quality</a></li>";
			#echo "<li><a href='".base_url()."User/operations_qual'><i class='fa fa-circle-o'></i>Operations Quality</a></li>";
      #echo "<li><a href='".base_url()."User/C_ItemCard'><i class='fa fa-circle-o'></i>Items</a></li>";  
        ?>
      </ul>
    </li>

    <!-- <ul class="sidebar-menu">
    <li class="header" style='color:#fff; text-transform:uppercase; border-bottom:2px solid #00c0ef'>MENU HR</li> -->
    <li class="treeview">
      <a href="#"><i class="fa fa-user "></i> <span>People & Culture</span><i class="fa fa-angle-left pull-right"></i></a>
      <ul class="treeview-menu">
		<?php
			#echo "<li><a href='".base_url()."User/Index'><i class='fa fa-circle-o'></i>Operations Quality</a></li>";
      echo "<li><a href='".base_url()."Main/hr_kpi'><i class='fa fa-circle-o'></i>HR - KPI</a></li>";
      echo "<li><a href='".base_url()."Main/hr_overview'><i class='fa fa-circle-o'></i>HR - Overview</a></li>";
      echo "<li><a href='".base_url()."Main/hr_absence'><i class='fa fa-circle-o'></i>HR - Absence</a></li>";
      echo "<li><a href='".base_url()."Main/hr_hirings'><i class='fa fa-circle-o'></i>HR - Hirings</a></li>";
      echo "<li><a href='".base_url()."Main/hr_hirings'><i class='fa fa-circle-o'></i>L&D</a></li>";
      echo "<li><a href='".base_url()."Main/hr_hirings'><i class='fa fa-circle-o'></i>ESG</a></li>";
      echo "<li><a href='".base_url()."Main/hr_hirings'><i class='fa fa-circle-o'></i>M&B</a></li>";
      #echo "<li><a href='".base_url()."User/projects_qual'><i class='fa fa-circle-o'></i>Projects Quality</a></li>";
			#echo "<li><a href='".base_url()."User/operations_qual'><i class='fa fa-circle-o'></i>Operations Quality</a></li>";
      #echo "<li><a href='".base_url()."User/C_ItemCard'><i class='fa fa-circle-o'></i>Items</a></li>";  
        ?>
      </ul>
    </li>

    <li><a href="<?php echo base_url(); ?>Main/das"><i class="fa fa-money"></i> <span>Finance</span></a></li>
	
    <!-- <ul class="sidebar-menu">
    <li class="header" style='color:#fff; text-transform:uppercase; border-bottom:2px solid #00c0ef'>MENU ADMIN</li> -->
	
    <li class="treeview">
      <a href="#"><i class="fa fa-users"></i> <span>User Module</span><i class="fa fa-angle-left pull-right"></i></a>
      <ul class="treeview-menu">
		<?php
			echo "<li><a href='".base_url()."Main/V_User'><i class='fa fa-circle-o'></i> Manajemen User</a></li>";
		?>
      </ul>
    </li>
	
	<li class="treeview">
      <a href="#"><i class="fa fa-user-plus"></i> <span>Employee Module</span><i class="fa fa-angle-left pull-right"></i></a>
      <ul class="treeview-menu">
		<?php
			echo "<li><a href='".base_url()."Main/V_Employee'><i class='fa fa-circle-o'></i> Manajemen Employee</a></li>";
		?>
      </ul>
    </li>
    <li class="treeview">
      <a href="#"><i class="fa fa-question-circle"></i> <span>Help</span><i class="fa fa-angle-left pull-right"></i></a>
	  <ul class="treeview-menu">
		<?php
			echo "<li><a href='".base_url()."#'><i class='fa fa-circle-o'></i>Dashboard</a></li>";
			echo "<li><a href='".base_url()."#'><i class='fa fa-circle-o'></i>Data Control</a></li>"; 
        ?>
      </ul>
    </li>
    <li><a href="<?php echo base_url(); ?>Main/V_Profile/<?php echo $this->session->username; ?>"><i class="fa fa-edit"></i> <span>Edit Profile</span></a></li>
    <li><a href="<?php echo base_url(); ?>Main/V_LoginUser"><i class="fa fa-list"></i> <span>Login User</span></a></li>
    <li><a href="<?php echo base_url(); ?>Main/logout"><i class="fa fa-power-off"></i> <span>Logout</span></a></li>
  </ul>
</section>