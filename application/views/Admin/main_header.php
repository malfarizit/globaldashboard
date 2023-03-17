<style type="text/css">
  .sekolah{
    float: left;
    background-color: transparent;
    background-image: none;
    padding: 15px 15px;
    font-family: fontAwesome;
    color:#fff;
  }
  .sekolah:hover{
    color:#fff;
  }
</style>
        <!-- Logo -->
        <a href="<?php echo base_url();?>Main/home" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>CLADTEK </b></span>
        </a>
        
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <!--<span class="sr-only">Toggle navigation</span>-->
			<span><b><?php date_default_timezone_set('Asia/Jakarta');  echo(strftime("%B %d %Y, %A")); ?></b></span>	
			<b><span id='clock' name='clock'></span><b>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->

            </ul>
          </div>
        </nav>