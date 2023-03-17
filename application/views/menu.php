<section class="sidebar">
  <!-- Sidebar user panel -->
   

  <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu">
    <li class="header" style='color:#fff; text-transform:uppercase; border-bottom:2px solid #00c0ef'>MENU </li>
     
	<li class="treeview">
      <a href="#"><i class="fa fa-home"></i> <span>Main Menu</span><i class="fa fa-angle-left pull-right"></i></a>
      <ul class="treeview-menu">
		<?php
			echo "<li><a href='".base_url()."User/Index'><i class='fa fa-circle-o'></i>Index</a></li>";
			//echo "<li><a href='".base_url()."User/operations_qual'><i class='fa fa-circle-o'></i>Operations Quality</a></li>";
      #echo "<li><a href='".base_url()."User/C_ItemCard'><i class='fa fa-circle-o'></i>Items</a></li>";  
        ?>
      </ul>
    </li>
    
    <!-- <li class="treeview">
      <a href="#"><i class="fa fa-industry"></i> <span>QHSE</span><i class="fa fa-angle-left pull-right"></i></a>
      <ul class="treeview-menu">
		<?php
			#echo "<li><a href='".base_url()."User/Index'><i class='fa fa-circle-o'></i>Operations Quality</a></li>";
      echo "<li><a href='".base_url()."User/hse'><i class='fa fa-circle-o'></i>HSE</a></li>";
      echo "<li><a href='".base_url()."User/ims'><i class='fa fa-circle-o'></i>IMS</a></li>";
      echo "<li><a href='".base_url()."User/sqd'><i class='fa fa-circle-o'></i>SQD</a></li>";
      echo "<li><a href='".base_url()."User/projects_qual'><i class='fa fa-circle-o'></i>Projects Quality</a></li>";
			echo "<li><a href='".base_url()."User/operations_qual'><i class='fa fa-circle-o'></i>Operations Quality</a></li>";
      #echo "<li><a href='".base_url()."User/C_ItemCard'><i class='fa fa-circle-o'></i>Items</a></li>";  
        ?>
      </ul>
    </li>

    <li class="treeview">
      <a href="#"><i class="fa fa-user-circle"></i> <span>Human Resources</span><i class="fa fa-angle-left pull-right"></i></a>
      <ul class="treeview-menu">
		<?php
			#echo "<li><a href='".base_url()."User/Index'><i class='fa fa-circle-o'></i>Operations Quality</a></li>";
      echo "<li><a href='".base_url()."User/hr_overview'><i class='fa fa-circle-o'></i>HR - Overview</a></li>";
      echo "<li><a href='".base_url()."User/hr_absence'><i class='fa fa-circle-o'></i>HR - Absence</a></li>";
      echo "<li><a href='".base_url()."User/hr_hirings'><i class='fa fa-circle-o'></i>HR - Hirings</a></li>";
      #echo "<li><a href='".base_url()."User/projects_qual'><i class='fa fa-circle-o'></i>Projects Quality</a></li>";
			#echo "<li><a href='".base_url()."User/operations_qual'><i class='fa fa-circle-o'></i>Operations Quality</a></li>";
      #echo "<li><a href='".base_url()."User/C_ItemCard'><i class='fa fa-circle-o'></i>Items</a></li>";  
        ?>
      </ul>
    </li>
	 <!-- <li class="treeview">
      <a href="<?php echo base_url(); ?>User/C_Incident"><i class="fa fa-exclamation-triangle "></i> <span>Incident Module</span><i class="fa fa-angle-left pull-right"></i></a>
    </li> 
	<li class="treeview">
       <a href="http://main.cor.sys/User/Login"><i class="fa fa-industry"></i> <span>COR</span><i class="fa fa-angle-left pull-right"></i></a>
    </li>
	<li class="treeview">
		<a href="<?php echo base_url(); ?>User/Help"><i class="fa fa-question-circle"></i> <span>Help</span><i class="fa fa-angle-left pull-right"></i></a>
		<ul class="treeview-menu">
		<?php
			echo "<li><a href='".base_url()."User/Help_HSE'><i class='fa fa-circle-o'></i>HSE</a></li>";
			echo "<li><a href='".base_url()."User/Help_Quality'><i class='fa fa-circle-o'></i>QUALITY</a></li>"; 
        ?>
      </ul>
	</li>	
	<li class="treeview">
		<a href="<?php echo base_url(); ?>User/Category"><i class="fa fa-question-circle"></i> <span>List</span><i class="fa fa-angle-left pull-right"></i></a>
		<ul class="treeview-menu">
		<?php
			echo "<li><a href='".base_url()."User/V_Category'><i class='fa fa-circle-o'></i>Category</a></li>";
        ?>
      </ul>
	</li>	 -->
    <li><a href="<?php echo base_url(); ?>Main/V_Login"><i class="fa fa-power-off"></i> <span>Login</span></a></li>
  </ul>
</section>