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
  <ul class="sidebar-menu">
    <li class="header" style='color:#fff; text-transform:uppercase; border-bottom:2px solid #00c0ef'>MENU <span class='uppercase'><?php echo $this->session->level; ?></span></li>
	<li class="treeview">
      <a href="#"><i class="fa fa-industry"></i> <span>QHSE Dashboard</span><i class="fa fa-angle-left pull-right"></i></a>
      <ul class="treeview-menu">
		<?php
			#echo "<li><a href='".base_url()."User/Index'><i class='fa fa-circle-o'></i>Operations Quality</a></li>";
      echo "<li><a href='".base_url()."Viewer/hse'><i class='fa fa-circle-o'></i>HSE</a></li>";
      echo "<li><a href='".base_url()."Viewer/ims'><i class='fa fa-circle-o'></i>IMS</a></li>";
      echo "<li><a href='".base_url()."Viewer/sqd'><i class='fa fa-circle-o'></i>SQD</a></li>";
      echo "<li><a href='".base_url()."Viewer/projects_qual'><i class='fa fa-circle-o'></i>Projects Quality</a></li>";
			echo "<li><a href='".base_url()."Viewer/operations_qual'><i class='fa fa-circle-o'></i>Operations Quality</a></li>";
      #echo "<li><a href='".base_url()."User/C_ItemCard'><i class='fa fa-circle-o'></i>Items</a></li>";  
        ?>
      </ul>
    </li>

    <li class="treeview">
      <a href="#"><i class="fa fa-user-circle"></i> <span>HR Dashboard</span><i class="fa fa-angle-left pull-right"></i></a>
      <ul class="treeview-menu">
		<?php
			#echo "<li><a href='".base_url()."User/Index'><i class='fa fa-circle-o'></i>Operations Quality</a></li>";
      echo "<li><a href='".base_url()."Viewer/hr_overview'><i class='fa fa-circle-o'></i>HR - Overview</a></li>";
      echo "<li><a href='".base_url()."Viewer/hr_absence'><i class='fa fa-circle-o'></i>HR - Absence</a></li>";
      echo "<li><a href='".base_url()."Viewer/hr_hirings'><i class='fa fa-circle-o'></i>HR - Hirings</a></li>";
      #echo "<li><a href='".base_url()."User/projects_qual'><i class='fa fa-circle-o'></i>Projects Quality</a></li>";
			#echo "<li><a href='".base_url()."User/operations_qual'><i class='fa fa-circle-o'></i>Operations Quality</a></li>";
      #echo "<li><a href='".base_url()."User/C_ItemCard'><i class='fa fa-circle-o'></i>Items</a></li>";  
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
    <li><a href="<?php echo base_url(); ?>Viewer/V_Profile/<?php echo $this->session->username; ?>"><i class="fa fa-edit"></i> <span>Edit Profile</span></a></li>
    <li><a href="<?php echo base_url(); ?>Viewer/logout"><i class="fa fa-power-off"></i> <span>Logout</span></a></li>
  </ul>
</section>