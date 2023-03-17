<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>WELCOME ADMINISTRATOR</title>
    <meta name="author" content="COC.com">
    <link rel="shortcut icon" type="image/ico" href="<?php echo base_url(); ?>asset/images/cladtek.png">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/plugins/font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- Ionicons -->
     <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>/asset/plugins/ionic/ionicons.min.css"> 
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/plugins/datatables/dataTables.bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/plugins/daterangepicker/daterangepicker-bs3.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/jQuery/example-styles.css">
    <style type="text/css"> .files{ position:absolute; z-index:2; top:0; left:0; filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"; opacity:0; background-color:transparent; color:transparent; } </style>
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/asset/plugins/pace/pace.min.css"></link>
    <style type="text/css">.checkbox-scroll { border:1px solid #ccc; width:100%; height: 114px; padding-left:8px; overflow-y: scroll; }</style> 
    <script type="text/javascript">
    function nospaces(t){
        if(t.value.match(/\s/g)){
            alert('Maaf, Tidak Boleh Menggunakan Spasi,..');
            t.value=t.value.replace(/\s/g,'');
        }
    }
	function checkp(){
		var pass = document.getElementById('b'); 
        if(pass.value.length < 6){
            alert('Maaf, Password harus lebih dari 6 digit,..'); 
        }
    }
	
	function checknp(){
		var pass = document.getElementById('np'); 
        if(pass.value.length < 6){
            alert('Maaf, Password harus lebih dari 6 digit,..'); 
        }
    }
	
	function checkPass()
	{
    var pass1 = document.getElementById('b'); 
    var message = document.getElementById('error-nwl');
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
	var neutralColor = '#fff';
 	
    if(pass1.value.length > 6)
    {
        pass1.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "character number ok!"
    }
	else if (pass1.value.length == 0) {
		pass1.style.backgroundColor = neutralColor;
		message.style.color = neutralColor;
    } 
    else
    {
        pass1.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = " you have to enter at least 6 digit!"
        return;
    } 
	} 
	
	function checkPassnp()
	{
    var pass1 = document.getElementById('np'); 
    var message = document.getElementById('error-nwl');
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
	var neutralColor = '#fff';
 	
    if(pass1.value.length > 6)
    {
        pass1.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "character number ok!"
    }
	else if (pass1.value.length == 0) {
		pass1.style.backgroundColor = neutralColor;
		message.style.color = neutralColor;
    } 
    else
    {
        pass1.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = " you have to enter at least 6 digit!"
        return;
    } 
	}  

    </script>
  </head>
  <body class="hold-transition skin-red sidebar-mini" onload="clock()">
    <div class="wrapper">
      <header class="main-header">
          <?php include "main_header.php"; ?>
      </header> 
      <aside class="main-sidebar">
          <?php include "menu.php"; ?>
      </aside> 
      <div class="content-wrapper">
        <section class="content-header">
          <h1> HSE Observation Card</h1>
        </section> 
		 <?php if($this->session->flashdata('success')){ 
			echo '<script>alert("You Have Successfully Submit this Record!");</script>';   
		} ?> 	
		<section class="content">
            <?php echo $contents; ?> 
        </section>  
        <div style='clear:both'></div>
      </div><!-- /.content-wrapper -->
      <footer class="main-footer"> 
		<div class="text-center py-1 bg-dark text-white font-weight-bold">
			© 2021 PT. CLADTEK BI-METAL MANUFACTURING BATAM. All rights reserved.
		</div> 
      </footer>
    </div><!-- ./wrapper -->
	<script type="text/javascript" src="<?php echo base_url(); ?>/asset/plugins/jQuery/jquery-1.12.3.min.js"></script>
    <script src="<?php echo base_url(''); ?>asset/ckeditor/ckeditor.js"></script>
    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url(); ?>asset/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 --> 
    <script src="<?php echo base_url(); ?>asset/plugins/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>$.widget.bridge('uibutton', $.ui.button);</script>
    <!--<script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script-->
	<script src="<?php echo base_url(); ?>asset/plugins/highcharts.js"></script> 
	<script src="<?php echo base_url(); ?>asset/plugins/data.js"></script> 
	<script src="<?php echo base_url(); ?>asset/plugins/exporting.js"></script> 
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url(); ?>asset/bootstrap/js/bootstrap.min.js"></script> 
	<script src="<?php echo base_url(); ?>asset/plugins/pace/pace.min.js"> </script>
    <!-- DataTables -->
    <script src="<?php echo base_url(); ?>asset/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- Morris.js charts -->
   
    <script src="<?php echo base_url(); ?>asset/plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url(); ?>asset/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="<?php echo base_url(); ?>asset/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url(); ?>asset/plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker --> 
	<script src="<?php echo base_url(); ?>asset/plugins/chart/moment.min.js"></script> 
    <script src="<?php echo base_url(); ?>asset/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="<?php echo base_url(); ?>asset/plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Slimscroll -->
    <script src="<?php echo base_url(); ?>asset/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url(); ?>asset/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>asset/dist/js/app.min.js"></script> 
	<script src="<?php echo base_url(); ?>asset/jQuery/jquery.multi-select.js"></script>
	 <!-- Chart App -->
    <script src="<?php echo base_url(); ?>asset/plugins/pace/chart.js@2.8.0"></script> 
    <script>
    $('#rangepicker').daterangepicker();
    $('.datepicker').datepicker();
      $(function () { 
        $("#example1").DataTable({ 
          "lengthMenu": [ 100, 200, 300, 400, 500]
        });
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>  
	<script>
		function clock() {
		var clockDiv = document.querySelector("#clock");
		return setInterval(() => {
			let date = new Date();
			let tick = date.toLocaleTimeString();
			clockDiv.textContent = tick;
		}, 1000);
		}
	</script>
	
  </body>
</html>

