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
    <script src="https://code.highcharts.com/modules/exporting.js"></script
	<script src="https://code.highcharts.com/modules/accessibility.js"></script>
	<script src="https://code.highcharts.com/highcharts-3d.js"></script> -->
	<!-- <script src="<?php echo base_url(); ?>asset/plugins/highcharts.js"></script> -->
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
		// "paging": false,
        //"lengthMenu": [ 20 ]
		"ordering": false,
		"processing" : true,
		"serverSide" : true,
		"order" : [],
		"ajax" : {
			"url" : "<?= base_url('ajax/getData/')?>",
			type: 'POST',
		},
		// columns: [
        //     { data: 'id' },
        //     // { data: 'last_name' },
        //     // { data: 'position' },
        //     // { data: 'office' },
        //     // { data: 'start_date' },
        //     // { data: 'salary' },
        // ],
		"columnDefs" : [{
			"target" : [-1],
			"orderable" : false
		}]
        });
      });
    </script>
	
	<!-- <script type="text/javascript">
	<?php 
    /* Mengambil query report*/
     foreach($report as $result){
	$date[] = $result->Month; //ambil bulan
    $value[] = (float)$result->total; //ambil nilai
	 }
    /* end mengambil query*/ 
	?>
		$(function () {
			$('#report').highcharts({
				chart: {
					type: 'column',
					margin: 50,
					options3d: {
						enabled: false, alpha: 20, beta: 25, depth: 4
					}
				},
				title: {
					text: 'Total Observation/Month',
					style: {fontSize: '16px', fontFamily: 'Verdana, sans-serif bold', fontWeight: 'Bold'}
				}, 
				plotOptions: {
					column: {
						depth: 25
					}
				},color:['#1C9AD6'],
				credits: {
					enabled: false
				},
				xAxis: {
					categories:  <?php echo json_encode($date);?>
				},
				exporting: { 
					enabled: true 
				},
				yAxis: {
					title: {
						text: 'Total',
						style: {fontSize: '12px', fontFamily: 'Verdana, sans-serif bold', fontWeight: 'Bold'} 	
					},
				},
				tooltip: {
					formatter: function() {
						return 'The value for <b>' + this.x + '</b> is <b>' + Highcharts.numberFormat(this.y,0);
					}
				},
				series: [{
					name: 'Month',
					data: <?php echo json_encode($value);?>,
					shadow : false,
					dataLabels: {
						enabled: true,
						color: '#1C9AD6',
						align: 'center',
						formatter: function() {
							return Highcharts.numberFormat(this.y, 0);
						}, // one decimal
						y: 0, // 10 pixels down from the top
						style: {
							fontSize: '15px',
							fontFamily: 'Verdana, sans-serif bold'
						}
					}
				}]
			});
		});
    </script>
	
	<script type="text/javascript">
	<?php 
    /* Mengambil query report*/
     foreach($report1c as $result1c){
	$date1c[] = $result1c->Month; //ambil bulan
    $value1c[] = (float)$result1c->total; //ambil nilai
	 }
    /* end mengambil query*/ 
	?>
		$(function () {
			$('#report1c').highcharts({
				chart: {
					type: 'column',
					margin: 50,
					options3d: {
						enabled: false, alpha: 20, beta: 25, depth: 4
					}
				},
				title: {
					text: 'Total Observation/Month',
					style: {fontSize: '16px', fontFamily: 'Verdana, sans-serif bold', fontWeight: 'Bold'}
				}, 
				plotOptions: {
					column: {
						depth: 25
					}
				},color:['#1C9AD6'],
				credits: {
					enabled: false
				},
				xAxis: {
					categories:  <?php echo json_encode($date1c);?>
				},
				exporting: { 
					enabled: true 
				},
				yAxis: {
					title: {
						text: 'Total',
						style: {fontSize: '12px', fontFamily: 'Verdana, sans-serif bold', fontWeight: 'Bold'} 	
					},
				},
				tooltip: {
					formatter: function() {
						return 'The value for <b>' + this.x + '</b> is <b>' + Highcharts.numberFormat(this.y,0);
					}
				},
				series: [{
					name: 'Month',
					data: <?php echo json_encode($value1c);?>,
					shadow : false,
					dataLabels: {
						enabled: true,
						color: '#1C9AD6',
						align: 'center',
						formatter: function() {
							return Highcharts.numberFormat(this.y, 0);
						}, // one decimal
						y: 0, // 10 pixels down from the top
						style: {
							fontSize: '15px',
							fontFamily: 'Verdana, sans-serif bold'
						}
					}
				}]
			});
		});
    </script>
	
	<script type="text/javascript">
	<?php 
    /* Mengambil query report*/
     foreach($report2 as $result2){
	$date2[] = $result2->Year; //ambil bulan
    $value2[] = (float)$result2->total; //ambil nilai
	 }
    /* end mengambil query*/ 
	?>
		$(function () {
			$('#report2').highcharts({
				chart: {
					type: 'column',
					margin: 60,
					options3d: {
						enabled: false, alpha: 20, beta: 25, depth: 4
					}
				},
				title: {
					text: 'Total Observation/Year',
					style: {fontSize: '16px', fontFamily: 'Verdana, sans-serif bold', fontWeight: 'Bold'}
				}, 
				plotOptions: {
					column: {
						depth: 25
					}
				},color:['#1C9AD6'],
				credits: {
					enabled: false
				},
				xAxis: {
					categories:  <?php echo json_encode($date2);?>
				},
				exporting: { 
					enabled: true 
				},
				yAxis: {
					title: {
						text: 'Total',
						style: {fontSize: '12px', fontFamily: 'Verdana, sans-serif bold', fontWeight: 'Bold'} 	
					},
				},
				tooltip: {
					formatter: function() {
						return 'The value for <b>' + this.x + '</b> is <b>' + Highcharts.numberFormat(this.y,0);
					}
				},
				series: [{
					name: 'Year',
					data: <?php echo json_encode($value2);?>,
					shadow : false,
					dataLabels: {
						enabled: true,
						color: '#1C9AD6',
						align: 'center',
						formatter: function() {
							return Highcharts.numberFormat(this.y, 0);
						}, // one decimal
						y: 0, // 10 pixels down from the top
						style: {
							fontSize: '15px',
							fontFamily: 'Verdana, sans-serif bold'
						}
					}
				}]
			});
		});
    </script>
	
	<script type="text/javascript">
	<?php 
    /* Mengambil query report*/
     foreach($report3 as $result3){ 
	$status[] = $result3->Status; //ambil bulan
    $value3[] = (float)$result3->total; //ambil nilai
	 }  
    /* end mengambil query*/ 
	?>
		$(function () {
			 
			$('#report3').highcharts({
				chart: {
					type: 'column',
					margin: 60,
					options3d: {
						enabled: false, alpha: 20, beta: 25, depth: 4
					}
				},
				title: {
					text: 'Total Obersavation/Status',
					style: {fontSize: '16px', fontFamily: 'Verdana, sans-serif bold', fontWeight: 'Bold'}
				}, 
				plotOptions: {
					column: {
						depth: 25,
						colorByPoint: true
					}
				},colors: ['#FFD700', '#008000'],
				credits: {
					enabled: false
				},
				xAxis: { categories:<?php echo json_encode($status);?>,crosshair: true },
				exporting: { 
					enabled: true 
				},
				yAxis: {
					title: {
						text: 'Total',
						style: {fontSize: '12px', fontFamily: 'Verdana, sans-serif bold', fontWeight: 'Bold'} 	
					},
				},
				tooltip: {
					formatter: function() {
						return 'The value for <b>' + this.x + '</b> is <b>' + Highcharts.numberFormat(this.y,0);
					}
				},
				series: [{ 
					name: 'Status',
					data: <?php echo json_encode($value3);?>,
					shadow : false,
					dataLabels: {
						enabled: true,
						color: '#1C9AD6',
						align: 'center',
						formatter: function() {
							return Highcharts.numberFormat(this.y, 0);
						}, // one decimal
						y: 0, // 10 pixels down from the top
						style: {
							fontSize: '15px',
							fontFamily: 'Verdana, sans-serif bold'
						}
					}
				} ]
			});
		});
    </script>
	<script type="text/javascript">
	<?php 
    /* Mengambil query report*/
     foreach($report4 as $result4){ 
	$progress[] = $result4->ActionProgress; //ambil bulan
    $value4[] = (float)$result4->total; //ambil nilai
	 }  
    /* end mengambil query*/ 
	?>
		$(function () {
			 
			$('#report4').highcharts({
				chart: {
					type: 'column',
					margin: 60,
					options3d: {
						enabled: false, alpha: 20, beta: 25, depth: 4
					}
				},
				title: {
					text: 'Total Action Plan/Progress',
					style: {fontSize: '16px', fontFamily: 'Verdana, sans-serif bold', fontWeight: 'Bold'}
				}, 
				plotOptions: {
					column: {
						depth: 25,
						colorByPoint: true
					}
				},colors: ['#ff0000', '#008000', '#FFD700'],
				credits: {
					enabled: false
				},
				xAxis: { categories:<?php echo json_encode($progress);?>,crosshair: true },
				exporting: { 
					enabled: true 
				},
				yAxis: {
					title: {
						text: 'Total',
						style: {fontSize: '12px', fontFamily: 'Verdana, sans-serif bold', fontWeight: 'Bold'} 	
					},
				},
				tooltip: {
					formatter: function() {
						return 'The value for <b>' + this.x + '</b> is <b>' + Highcharts.numberFormat(this.y,0);
					}
				},
				series: [{ 
					name: 'Progress',
					data: <?php echo json_encode($value4);?>,
					shadow : false,
					dataLabels: {
						enabled: true,
						color: '#1C9AD6',
						align: 'center',
						formatter: function() {
							return Highcharts.numberFormat(this.y, 0);
						}, // one decimal
						y: 0, // 10 pixels down from the top
						style: {
							fontSize: '15px',
							fontFamily: 'Verdana, sans-serif bold'
						}
					}
				} ]
			});
		});
    </script>
	
	<script type="text/javascript">
	<?php 
    /* Mengambil query report*/
     foreach($reportfilter as $result40){ 
	$prog[] = $result40->ActionProgress; //ambil bulan
    $valuefilter1[] = $result40->Dat; //ambil nilai 
    $valuefilter2[] = (float)$result40->total; //ambil nilai 
	$datax=array('ActionProgress'=>$prog,'Total'=>$valuefilter2);
	}   
	 
    /* end mengambil query*/ 
	?>
		$(function () {
			 
			$('#reportfilter').highcharts({
				chart: {
					type: 'column',
					margin: 60,
					options3d: {
						enabled: false, alpha: 20, beta: 25, depth: 4
					}
				},
				title: {
					text: 'Total Summary Action Plan/Year',
					style: {fontSize: '16px', fontFamily: 'Verdana, sans-serif bold', fontWeight: 'Bold'}
				}, 
				plotOptions: {
					column: {
						depth: 25,
						colorByPoint: true
					}
				},colors: ['#ff0000', '#008000', '#FFD700'],
				credits: {
					enabled: true
				},
				xAxis: 
					{ categories:<?php echo json_encode($prog);?>,crosshair: true },  
				exporting: { 
					enabled: true 
				},
				yAxis: {
					title: {
						text: 'Total',
						style: {fontSize: '12px', fontFamily: 'Verdana, sans-serif bold', fontWeight: 'Bold'} 	
					},
				},
				tooltip: {
					formatter: function() {
						return 'The value for <b>' + this.x + '</b> is <b>' + Highcharts.numberFormat(this.y,0);
					}
				},
				series: [{ 
					name: 'Progress',
				data: <?php echo json_encode($valuefilter2);?>,
					//data: <?php echo json_encode($datax);?>,
					shadow : false,
					dataLabels: {
						enabled: true,
						color: '#1C9AD6',
						align: 'center',
						formatter: function() {
							return Highcharts.numberFormat(this.y, 0);
						}, // one decimal
						y: 0, // 10 pixels down from the top
						style: {
							fontSize: '15px',
							fontFamily: 'Verdana, sans-serif bold'
						}
					}
				} ]
			});
		});
    </script>
	
	<script type="text/javascript">
	<?php 
    /* Mengambil query report*/
     foreach($reportfilter2 as $resultfilter2){ 
	$progfil[] = $resultfilter2->ActionProgress; //ambil bulan
    $valuefil1[] = $resultfilter2->Dat; //ambil nilai 
    $valuefil2[] = (float)$resultfilter2->total; //ambil nilai 
	$datax=array('ActionProgress'=>$prog,'Total'=>$valuefilter2);
	}   
	 
    /* end mengambil query*/ 
	?>
		$(function () {
			 
			$('#reportfilter2').highcharts({
				chart: {
					type: 'column',
					margin: 60,
					options3d: {
						enabled: false, alpha: 20, beta: 25, depth: 4
					}
				},
				title: {
					text: 'Total Summary Action Plan/Year',
					style: {fontSize: '16px', fontFamily: 'Verdana, sans-serif bold', fontWeight: 'Bold'}
				}, 
				plotOptions: {
					column: {
						depth: 25,
						colorByPoint: true
					}
				},colors: ['#ff0000', '#008000', '#FFD700'],
				credits: {
					enabled: true
				},
				xAxis: 
					{ categories:<?php echo json_encode($progfil);?>,crosshair: true },  
				exporting: { 
					enabled: true 
				},
				yAxis: {
					title: {
						text: 'Total',
						style: {fontSize: '12px', fontFamily: 'Verdana, sans-serif bold', fontWeight: 'Bold'} 	
					},
				},
				tooltip: {
					formatter: function() {
						return 'The value for <b>' + this.x + '</b> is <b>' + Highcharts.numberFormat(this.y,0);
					}
				},
				series: [{ 
					name: 'Progress',
				data: <?php echo json_encode($valuefil2);?>,
					//data: <?php echo json_encode($datax);?>,
					shadow : false,
					dataLabels: {
						enabled: true,
						color: '#1C9AD6',
						align: 'center',
						formatter: function() {
							return Highcharts.numberFormat(this.y, 0);
						}, // one decimal
						y: 0, // 10 pixels down from the top
						style: {
							fontSize: '15px',
							fontFamily: 'Verdana, sans-serif bold'
						}
					}
				} ]
			});
		});
    </script>
	
	<script type="text/javascript">
	<?php 
    /* Mengambil query report*/
     foreach($report5 as $result5){ 
	$status5[] = $result5->Prog; //ambil bulan
    $value5[] = (float)$result5->total; //ambil nilai
	 }  
    /* end mengambil query*/ 
	?>
		$(function () {
			 
			$('#report5').highcharts({
				chart: {
					type: 'column',
					margin: 60,
					options3d: {
						enabled: false, alpha: 20, beta: 25, depth: 4
					}
				},
				title: {
					text: 'Total ActionPlan/Status',
					style: {fontSize: '16px', fontFamily: 'Verdana, sans-serif bold', fontWeight: 'Bold'}
				}, 
				plotOptions: {
					column: {
						depth: 25,
						colorByPoint: true
					}
				},
				credits: {
					enabled: false
				},colors: ['#008000', '#ff0000', '#ff0000'],
				xAxis: { categories:<?php echo json_encode($status5);?>,crosshair: true },
				exporting: { 
					enabled: true 
				},
				yAxis: {
					title: {
						text: 'Total',
						style: {fontSize: '12px', fontFamily: 'Verdana, sans-serif bold', fontWeight: 'Bold'} 	
					},
				},
				tooltip: {
					formatter: function() {
						return 'The value for <b>' + this.x + '</b> is <b>' + Highcharts.numberFormat(this.y,0);
					}
				},
				series: [{ 
					name: 'Status',
					data: <?php echo json_encode($value5);?>,
					shadow : false,
					dataLabels: {
						enabled: true,
						color: '#1C9AD6',
						align: 'center',
						formatter: function() {
							return Highcharts.numberFormat(this.y, 0);
						}, // one decimal
						y: 0, // 10 pixels down from the top
						style: {
							fontSize: '15px',
							fontFamily: 'Verdana, sans-serif bold'
						}
					}
				} ]
			});
		});
    </script>
	
	<script type="text/javascript">
	<?php 
    /* Mengambil query report*/
     foreach($report6d as $result6d){ 
	//$status6[] = $result6->Deptname; //ambil bulan
	$status6d[] = array($result6d->Deptname,$result6d->status);
    $value6d[] = (float)$result6d->total; //ambil nilai
	 }  
    /* end mengambil query*/ 
	?>
		$(function () {
			 
			$('#report6d').highcharts({
				chart: {
					type: 'column',
					margin: 70,
					options3d: {
						enabled: false, alpha: 20, beta: 25, depth: 4
					}
				},
				title: {
					text: 'Status ActionPlan/Department',
					style: {fontSize: '19px', fontFamily: 'Verdana, sans-serif bold', fontWeight: 'Bold'}
				}, 
				plotOptions: {
					column: {
						depth: 25,
						colorByPoint: false
					}
				},colors: ['#008000', '#ff0000'],
				credits: {
					enabled: false
				},
				xAxis: { 
				categories:<?php echo json_encode($status6d);?>,
				crosshair: true,
				labels: {
					style: {
						FontSize: '12px',sourceFontFamily: 'Verdana, sans-serif bold', fontWeight: 'Bold' 
					}
				},},
				exporting: { 
					enabled: true,
					sourceWidth:1600, 
					sourceHeight:1000, 
					sourceStyle: {FontSize: '15px',sourceFontFamily: 'Verdana, sans-serif bold', fontWeight: 'Bold'},
					labels: {
					style: {
						FontSize: '12px',sourceFontFamily: 'Verdana, sans-serif bold', fontWeight: 'Bold' 
					}
				},
				},
				yAxis: {
					title: {
						text: 'Total',
						style: {fontSize: '12px', fontFamily: 'Verdana, sans-serif bold', fontWeight: 'Bold'} 	
					},
				},
				tooltip: {
					formatter: function() {
						return 'The value for <b>' + this.x + '</b> is <b>' + Highcharts.numberFormat(this.y,0) + '</b>, in '+ this.series.name;
					}
				}, 
				series: [{ 
					name: 'Department',
					data: <?php echo json_encode($value6d);?>,
					shadow : false,
					dataLabels: {
						enabled: true,
						color: '#1C9AD6',
						align: 'center',
						formatter: function() {
							return Highcharts.numberFormat(this.y, 0);
						}, // one decimal
						y: 0, // 10 pixels down from the top
						style: {
							fontSize: '20px',
							fontFamily: 'Verdana, sans-serif bold'
						}
					}
				} ]
			});
		});
    </script>
	
	<script type="text/javascript">
	<?php 
    /* Mengambil query report*/
     foreach($report6 as $result6){ 
	//$status6[] = $result6->Deptname; //ambil bulan
	$status6[] = array($result6->empname);
    $value6[] = (float)$result6->total; //ambil nilai
	 }  
    /* end mengambil query*/ 
	?>
		$(function () {
			 
			$('#report6').highcharts({
				chart: {
					type: 'column',
					margin: 70,
					options3d: {
						enabled: false, alpha: 20, beta: 25, depth: 4
					}
				},
				title: {
					text: 'TOP 10 Contributed Employee',
					style: {fontSize: '19px', fontFamily: 'Verdana, sans-serif bold', fontWeight: 'Bold'}
				}, 
				plotOptions: {
					column: {
						depth: 25,
						colorByPoint: false
					}
				},colors: ['#E0AA3E'],
				credits: {
					enabled: false
				},
				xAxis: { 
				categories:<?php echo json_encode($status6);?>,
				crosshair: true,
				labels: {
					style: {
						FontSize: '12px',sourceFontFamily: 'Verdana, sans-serif bold', fontWeight: 'Bold' 
					}
				},},
				exporting: { 
					enabled: true,
					sourceWidth:1600, 
					sourceHeight:1000, 
					sourceStyle: {FontSize: '15px',sourceFontFamily: 'Verdana, sans-serif bold', fontWeight: 'Bold'},
					labels: {
					style: {
						FontSize: '12px',sourceFontFamily: 'Verdana, sans-serif bold', fontWeight: 'Bold' 
					}
				},
				},
				yAxis: {
					title: {
						text: 'Total',
						style: {fontSize: '12px', fontFamily: 'Verdana, sans-serif bold', fontWeight: 'Bold'} 	
					},
				},
				tooltip: {
					formatter: function() {
						return 'The value for <b>' + this.x + '</b> is <b>' + Highcharts.numberFormat(this.y,0);
					}
				}, 
				series: [{ 
					name: 'Employee Name',
					data: <?php echo json_encode($value6);?>,
					shadow : false,
					dataLabels: {
						enabled: true,
						color: '#1C9AD6',
						align: 'center',
						formatter: function() {
							return Highcharts.numberFormat(this.y, 0);
						}, // one decimal
						y: 0, // 10 pixels down from the top
						style: {
							fontSize: '20px',
							fontFamily: 'Verdana, sans-serif bold'
						}
					}
				} ]
			});
		});
    </script>
	
	<script type="text/javascript">
	<?php 
    /* Mengambil query report*/
     foreach($report7 as $result7){
	$Category7[] = $result7->Category; //ambil bulan
    $value7[] = (float)$result7->Total; //ambil nilai
	 }
    /* end mengambil query*/ 
	?>
		$(function () {
			$('#report7').highcharts({
				chart: {
					type: 'column',
					margin: 60,
					options3d: {
						enabled: false, alpha: 20, beta: 25, depth: 4
					}
				},
				title: {
					text: 'Total Observation/Category',
					style: {fontSize: '16px', fontFamily: 'Verdana, sans-serif bold'}
				}, 
				plotOptions: {
					column: {
						depth: 25
					}
				},color:['#1C9AD6'],
				credits: {
					enabled: false
				},
				xAxis: {
					categories:  <?php echo json_encode($Category7);?>
				},
				exporting: { 
					enabled: true 
				},
				yAxis: {
					title: {
						text: 'Total',
						style: {fontSize: '12px', fontFamily: 'Verdana, sans-serif bold'} 	
					},
				},
				tooltip: {
					formatter: function() {
						return 'The value for <b>' + this.x + '</b> is <b>' + Highcharts.numberFormat(this.y,0);
					}
				},
				series: [{
					name: 'Category',
					data: <?php echo json_encode($value7);?>,
					shadow : false,
					dataLabels: {
						enabled: true,
						color: '#1C9AD6',
						align: 'center',
						formatter: function() {
							return Highcharts.numberFormat(this.y, 0);
						}, // one decimal
						y: 0, // 10 pixels down from the top
						style: {
							fontSize: '15px',
							fontFamily: 'Verdana, sans-serif bold'
						}
					}
				}]
			});
		});
    </script>
	
	<script type="text/javascript">
	<?php 
    /* Mengambil query report*/
     foreach($report8 as $result8){
	$Type8[] = $result8->Type; //ambil bulan
    $value8[] = (float)$result8->Total; //ambil nilai
	 }
    /* end mengambil query*/ 
	?>
		$(function () {
			$('#report8').highcharts({
				chart: {
					type: 'column',
					margin: 60,
					options3d: {
						enabled: false, alpha: 20, beta: 25, depth: 4
					}
				},
				title: {
					text: 'Total Observation/Type',
					style: {fontSize: '16px', fontFamily: 'Verdana, sans-serif bold'}
				}, 
				plotOptions: {
					column: {
						depth: 25
					}
				},
				credits: {
					enabled: false
				},
				xAxis: {
					categories:  <?php echo json_encode($Type8);?>
				},
				exporting: { 
					enabled: true 
				},
				yAxis: {
					title: {
						text: 'Total',
						style: {fontSize: '12px', fontFamily: 'Verdana, sans-serif bold'} 	
					},
				},
				tooltip: {
					formatter: function() {
						return 'The value for <b>' + this.x + '</b> is <b>' + Highcharts.numberFormat(this.y,0);
					}
				},
				series: [{
					name: 'Type Observation',
					data: <?php echo json_encode($value8);?>,
					shadow : false,
					dataLabels: {
						enabled: true,
						color: '#1C9AD6',
						align: 'center',
						formatter: function() {
							return Highcharts.numberFormat(this.y, 0);
						}, // one decimal
						y: 0, // 10 pixels down from the top
						style: {
							fontSize: '15px',
							fontFamily: 'Verdana, sans-serif bold'
						}
					}
				}]
			});
		});
    </script>
	
	<script type="text/javascript">
	<?php 
    /* Mengambil query report*/
     foreach($report9 as $result9){ 
	//$status6[] = $result6->Deptname; //ambil bulan
	$status9[] = array($result9->Deptname);
    $value9[] = (float)$result9->total; //ambil nilai
	 }  
    /* end mengambil query*/ 
	?>
		$(function () {
			 
			$('#report9').highcharts({
				chart: {
					type: 'column',
					margin: 70,
					options3d: {
						enabled: false, alpha: 20, beta: 25, depth: 4
					}
				},
				title: {
					text: 'Status Closed ActionPlan/Department',
					style: {fontSize: '19px', fontFamily: 'Verdana, sans-serif bold', fontWeight: 'Bold'}
				}, 
				plotOptions: {
					column: {
						depth: 25,
						colorByPoint: false
					}
				},colors: ['#008000', '#ff0000'],
				credits: {
					enabled: false
				},
				xAxis: { 
				categories:<?php echo json_encode($status9);?>,
				crosshair: true,
				labels: {
					style: {
						FontSize: '12px',sourceFontFamily: 'Verdana, sans-serif bold', fontWeight: 'Bold' 
					}
				},},
				exporting: { 
					enabled: true,
					sourceWidth:1600, 
					sourceHeight:1000, 
					sourceStyle: {FontSize: '15px',sourceFontFamily: 'Verdana, sans-serif bold', fontWeight: 'Bold'},
					labels: {
					style: {
						FontSize: '12px',sourceFontFamily: 'Verdana, sans-serif bold', fontWeight: 'Bold' 
					}
				},
				},
				yAxis: {
					title: {
						text: 'Total',
						style: {fontSize: '12px', fontFamily: 'Verdana, sans-serif bold', fontWeight: 'Bold'} 	
					},
				},
				tooltip: {
					formatter: function() {
						return 'The value for <b>' + this.x + '</b> is <b>' + Highcharts.numberFormat(this.y,0);
					}
				}, 
				series: [{ 
					name: 'Department',
					data: <?php echo json_encode($value9);?>,
					shadow : false,
					dataLabels: {
						enabled: true,
						color: '#1C9AD6',
						align: 'center',
						formatter: function() {
							return Highcharts.numberFormat(this.y, 0);
						}, // one decimal
						y: 0, // 10 pixels down from the top
						style: {
							fontSize: '20px',
							fontFamily: 'Verdana, sans-serif bold'
						}
					}
				} ]
			});
		});
    </script>
	
	<script type="text/javascript">
	<?php 
    /* Mengambil query report*/
     foreach($report9v2 as $result9v2){ 
	//$status6[] = $result6->Deptname; //ambil bulan
	$status9v2[] = array($result9v2->Deptname);
    $value9v2[] = (float)$result9v2->total; //ambil nilai
	 }  
    /* end mengambil query*/ 
	?>
		$(function () {
			 
			$('#report9v2').highcharts({
				chart: {
					type: 'column',
					margin: 70,
					options3d: {
						enabled: false, alpha: 20, beta: 25, depth: 4
					}
				},
				title: {
					text: 'Status Open ActionPlan/Department',
					style: {fontSize: '19px', fontFamily: 'Verdana, sans-serif bold', fontWeight: 'Bold'}
				}, 
				plotOptions: {
					column: {
						depth: 25,
						colorByPoint: false
					}
				},colors: ['#ff0000'],
				credits: {
					enabled: false
				},
				xAxis: { 
				categories:<?php echo json_encode($status9v2);?>,
				crosshair: true,
				labels: {
					style: {
						FontSize: '12px',sourceFontFamily: 'Verdana, sans-serif bold', fontWeight: 'Bold' 
					}
				},},
				exporting: { 
					enabled: true,
					sourceWidth:1600, 
					sourceHeight:1000, 
					sourceStyle: {FontSize: '15px',sourceFontFamily: 'Verdana, sans-serif bold', fontWeight: 'Bold'},
					labels: {
					style: {
						FontSize: '12px',sourceFontFamily: 'Verdana, sans-serif bold', fontWeight: 'Bold' 
					}
				},
				},
				yAxis: {
					title: {
						text: 'Total',
						style: {fontSize: '12px', fontFamily: 'Verdana, sans-serif bold', fontWeight: 'Bold'} 	
					},
				},
				tooltip: {
					formatter: function() {
						return 'The value for <b>' + this.x + '</b> is <b>' + Highcharts.numberFormat(this.y,0);
					}
				}, 
				series: [{ 
					name: 'Department',
					data: <?php echo json_encode($value9v2);?>,
					shadow : false,
					dataLabels: {
						enabled: true,
						color: '#1C9AD6',
						align: 'center',
						formatter: function() {
							return Highcharts.numberFormat(this.y, 0);
						}, // one decimal
						y: 0, // 10 pixels down from the top
						style: {
							fontSize: '20px',
							fontFamily: 'Verdana, sans-serif bold'
						}
					}
				} ]
			});
		});
    </script>
	
	<script type="text/javascript">
	<?php 
    /* Mengambil query report*/
     foreach($report10 as $result10){
	$date10[] = $result10->Month; //ambil bulan
    $value10[] = (float)$result10->total; //ambil nilai
	 }
    /* end mengambil query*/ 
	?>
		$(function () {
			$('#report10').highcharts({
				chart: {
					type: 'column',
					margin: 60,
					options3d: {
						enabled: false, alpha: 20, beta: 25, depth: 4
					}
				},
				title: {
					text: 'Total Observation/Month',
					style: {fontSize: '16px', fontFamily: 'Verdana, sans-serif bold', fontWeight: 'Bold'}
				}, 
				plotOptions: {
					column: {
						depth: 25
					}
				},
				credits: {
					enabled: false
				},
				xAxis: {
					categories:  <?php echo json_encode($date10);?>
				},
				exporting: { 
					enabled: true 
				},
				yAxis: {
					title: {
						text: 'Total',
						style: {fontSize: '12px', fontFamily: 'Verdana, sans-serif bold', fontWeight: 'Bold'} 	
					},
				},
				tooltip: {
					formatter: function() {
						return 'The value for <b>' + this.x + '</b> is <b>' + Highcharts.numberFormat(this.y,0);
					}
				},
				series: [{
					name: 'Total',
					data: <?php echo json_encode($value10);?>,
					shadow : false,
					dataLabels: {
						enabled: true,
						color: '#1C9AD6',
						align: 'center',
						formatter: function() {
							return Highcharts.numberFormat(this.y, 0);
						}, // one decimal
						y: 0, // 10 pixels down from the top
						style: {
							fontSize: '15px',
							fontFamily: 'Verdana, sans-serif bold'
						}
					}
				}]
			});
		});
    </script>
	<script type="text/javascript">
	<?php 
    /* Mengambil query report*/
     foreach($report11 as $result11){
	$date11[] = $result11->Year; //ambil bulan
    $value11[] = (float)$result11->total; //ambil nilai
	 }
    /* end mengambil query*/ 
	?>
		$(function () {
			$('#report11').highcharts({
				chart: {
					type: 'column',
					margin: 60,
					options3d: {
						enabled: false, alpha: 20, beta: 25, depth: 4
					}
				},
				title: {
					text: 'Total Observation/Year',
					style: {fontSize: '16px', fontFamily: 'Verdana, sans-serif bold', fontWeight: 'Bold'}
				}, 
				plotOptions: {
					column: {
						depth: 25
					}
				},
				credits: {
					enabled: false
				},
				xAxis: {
					categories:  <?php echo json_encode($date11);?>
				},
				exporting: { 
					enabled: true 
				},
				yAxis: {
					title: {
						text: 'Total',
						style: {fontSize: '12px', fontFamily: 'Verdana, sans-serif bold', fontWeight: 'Bold'} 	
					},
				},
				tooltip: {
					formatter: function() {
						return 'The value for <b>' + this.x + '</b> is <b>' + Highcharts.numberFormat(this.y,0);
					}
				},
				series: [{
					name: 'Total',
					data: <?php echo json_encode($value11);?>,
					shadow : false,
					dataLabels: {
						enabled: true,
						color: '#1C9AD6',
						align: 'center',
						formatter: function() {
							return Highcharts.numberFormat(this.y, 0);
						}, // one decimal
						y: 0, // 10 pixels down from the top
						style: {
							fontSize: '15px',
							fontFamily: 'Verdana, sans-serif bold'
						}
					}
				}]
			});
		});
    </script>
	
	<script type="text/javascript">
	<?php 
    /* Mengambil query report*/
     foreach($report13 as $result13){
	$dept13[] = $result13->Category; //ambil bulan
    $value13[] = (float)$result13->Total; //ambil nilai
	 }
    /* end mengambil query*/ 
	?>
		$(function () {
			$('#report13').highcharts({
				chart: {
					type: 'column',
					margin: 60,
					options3d: {
						enabled: false, alpha: 20, beta: 25, depth: 4
					}
				},
				title: {
					text: 'Total Observation/Category',
					style: {fontSize: '16px', fontFamily: 'Verdana, sans-serif bold'}
				}, 
				plotOptions: {
					column: {
						depth: 25
					}
				},
				credits: {
					enabled: false
				},
				xAxis: {
					categories:  <?php echo json_encode($dept13);?>
				},
				exporting: { 
					enabled: true 
				},
				yAxis: {
					title: {
						text: 'Total',
						style: {fontSize: '12px', fontFamily: 'Verdana, sans-serif bold'} 	
					},
				},
				tooltip: {
					formatter: function() {
						return 'The value for <b>' + this.x + '</b> is <b>' + Highcharts.numberFormat(this.y,0);
					}
				},
				series: [{
					name: 'Total',
					data: <?php echo json_encode($value13);?>,
					shadow : false,
					dataLabels: {
						enabled: true,
						color: '#1C9AD6',
						align: 'center',
						formatter: function() {
							return Highcharts.numberFormat(this.y, 0);
						}, // one decimal
						y: 0, // 10 pixels down from the top
						style: {
							fontSize: '15px',
							fontFamily: 'Verdana, sans-serif bold'
						}
					}
				}]
			});
		});
    </script>
	
  <script type="text/javascript">
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: [
          <?php
            if (count($graph)>0) {
              foreach ($graph as $data) {
                echo "'" .$data->OCType ."',";
              }
            }
          ?>
        ],
        datasets: [{
            label: 'Observation',
            backgroundColor: [
              "#40E0D0",
              "#9FE2BF",
              "#6495ED",
              "#F4A460",
              "#0000FF",
              "#1D7A46",
              "#00FF00",
              "#CDA776",
              "#989898",
              "#CB252B",
              "#E39371", 
              "#FFBF00", 
              "#CD5C5C", 
              "#DFFF00", 
              "#DE3163", 
              "#800080", 
            ],
            borderColor: [
              "#CDA776",
              "#989898",
              "#6495ED",
              "#E39371",
              "#1D7A46",
              "#F4A460",
              "#CDA776",
              "#DEB887",
              "#A9A9A9",
              "#DC143C",
              "#F4A460",
              "#2E8B57",
            ],
            borderWidth: [1, 1, 1, 1, 1,1,1,1, 1, 1, 1,1,1],
            data: [
              <?php
                if (count($graph)>0) {
                   foreach ($graph as $data) { 
                    echo $data->Date . ", ";
                  }
                }
              ?>
            ]
        }]
    },
}); 
  </script>
  
  <script type="text/javascript">
	<?php 
    /* Mengambil query report*/
     foreach($reportinc as $result){
	$date[] = $result->Month; //ambil bulan
    $value[] = (float)$result->total; //ambil nilai
	 }
    /* end mengambil query*/ 
	?>
		$(function () {
			$('#reportinc').highcharts({
				chart: {
					type: 'column',
					margin: 50,
					options3d: {
						enabled: false, alpha: 20, beta: 25, depth: 4
					}
				},
				title: {
					text: 'Total Incident/Month',
					style: {fontSize: '16px', fontFamily: 'Verdana, sans-serif bold', fontWeight: 'Bold'}
				}, 
				plotOptions: {
					column: {
						depth: 25
					}
				},
				credits: {
					enabled: false
				},
				xAxis: {
					categories:  <?php echo json_encode($date);?>
				},
				exporting: { 
					enabled: true 
				},
				yAxis: {
					title: {
						text: 'Total',
						style: {fontSize: '12px', fontFamily: 'Verdana, sans-serif bold', fontWeight: 'Bold'} 	
					},
				},
				tooltip: {
					formatter: function() {
						return 'The value for <b>' + this.x + '</b> is <b>' + Highcharts.numberFormat(this.y,0);
					}
				},
				series: [{
					name: 'Month',
					data: <?php echo json_encode($value);?>,
					shadow : false,
					dataLabels: {
						enabled: true,
						color: '#1C9AD6',
						align: 'center',
						formatter: function() {
							return Highcharts.numberFormat(this.y, 0);
						}, // one decimal
						y: 0, // 10 pixels down from the top
						style: {
							fontSize: '15px',
							fontFamily: 'Verdana, sans-serif bold'
						}
					}
				}]
			});
		});
    </script>
	
	<script type="text/javascript">
	<?php 
    /* Mengambil query report*/
     foreach($reportincyear as $result2){
	$date2[] = $result2->Year; //ambil bulan
    $value2[] = (float)$result2->total; //ambil nilai
	 }
    /* end mengambil query*/ 
	?>
		$(function () {
			$('#reportincyear').highcharts({
				chart: {
					type: 'column',
					margin: 60,
					options3d: {
						enabled: false, alpha: 20, beta: 25, depth: 4
					}
				},
				title: {
					text: 'Total Incident/Year',
					style: {fontSize: '16px', fontFamily: 'Verdana, sans-serif bold', fontWeight: 'Bold'}
				}, 
				plotOptions: {
					column: {
						depth: 25
					}
				},
				credits: {
					enabled: false
				},
				xAxis: {
					categories:  <?php echo json_encode($date2);?>
				},
				exporting: { 
					enabled: true 
				},
				yAxis: {
					title: {
						text: 'Total',
						style: {fontSize: '12px', fontFamily: 'Verdana, sans-serif bold', fontWeight: 'Bold'} 	
					},
				},
				tooltip: {
					formatter: function() {
						return 'The value for <b>' + this.x + '</b> is <b>' + Highcharts.numberFormat(this.y,0);
					}
				},
				series: [{
					name: 'Year',
					data: <?php echo json_encode($value2);?>,
					shadow : false,
					dataLabels: {
						enabled: true,
						color: '#1C9AD6',
						align: 'center',
						formatter: function() {
							return Highcharts.numberFormat(this.y, 0);
						}, // one decimal
						y: 0, // 10 pixels down from the top
						style: {
							fontSize: '15px',
							fontFamily: 'Verdana, sans-serif bold'
						}
					}
				}]
			});
		});
    </script>
	
	<script type="text/javascript">
	<?php 
    /* Mengambil query report*/
     foreach($reportincstatus as $result3){ 
	$status[] = $result3->Status; //ambil bulan
    $value3[] = (float)$result3->total; //ambil nilai
	 }  
    /* end mengambil query*/ 
	?>
		$(function () {
			 
			$('#reportincstatus').highcharts({
				chart: {
					type: 'column',
					margin: 60,
					options3d: {
						enabled: false, alpha: 20, beta: 25, depth: 4
					}
				},
				title: {
					text: 'Total Incident/Status',
					style: {fontSize: '16px', fontFamily: 'Verdana, sans-serif bold', fontWeight: 'Bold'}
				}, 
				plotOptions: {
					column: {
						depth: 25,
						colorByPoint: true
					}
				},colors: ['#008000', '#FFD700'],
				credits: {
					enabled: false
				},
				xAxis: { categories:<?php echo json_encode($status);?>,crosshair: true },
				exporting: { 
					enabled: true 
				},
				yAxis: {
					title: {
						text: 'Total',
						style: {fontSize: '12px', fontFamily: 'Verdana, sans-serif bold', fontWeight: 'Bold'} 	
					},
				},
				tooltip: {
					formatter: function() {
						return 'The value for <b>' + this.x + '</b> is <b>' + Highcharts.numberFormat(this.y,0);
					}
				},
				series: [{ 
					name: 'Status',
					data: <?php echo json_encode($value3);?>,
					shadow : false,
					dataLabels: {
						enabled: true,
						color: '#1C9AD6',
						align: 'center',
						formatter: function() {
							return Highcharts.numberFormat(this.y, 0);
						}, // one decimal
						y: 0, // 10 pixels down from the top
						style: {
							fontSize: '15px',
							fontFamily: 'Verdana, sans-serif bold'
						}
					}
				} ]
			});
		});
    </script>
	
	<script type="text/javascript">
	<?php 
    /* Mengambil query report*/
     foreach($reportinvstatus as $resultinv){ 
	$statusinv[] = $resultinv->Status; //ambil bulan
    $valueinv[] = (float)$resultinv->total; //ambil nilai
	 }  
    /* end mengambil query*/ 
	?>
		$(function () {
			 
			$('#reportinvstatus').highcharts({
				chart: {
					type: 'column',
					margin: 60,
					options3d: {
						enabled: false, alpha: 20, beta: 25, depth: 4
					}
				},
				title: {
					text: 'Total Investigation/Status',
					style: {fontSize: '16px', fontFamily: 'Verdana, sans-serif bold', fontWeight: 'Bold'}
				}, 
				plotOptions: {
					column: {
						depth: 25,
						colorByPoint: true
					}
				},colors: ['#008000', '#FFD700'],
				credits: {
					enabled: false
				},
				xAxis: { categories:<?php echo json_encode($statusinv);?>,crosshair: true },
				exporting: { 
					enabled: true 
				},
				yAxis: {
					title: {
						text: 'Total',
						style: {fontSize: '12px', fontFamily: 'Verdana, sans-serif bold', fontWeight: 'Bold'} 	
					},
				},
				tooltip: {
					formatter: function() {
						return 'The value for <b>' + this.x + '</b> is <b>' + Highcharts.numberFormat(this.y,0);
					}
				},
				series: [{ 
					name: 'Status',
					data: <?php echo json_encode($valueinv);?>,
					shadow : false,
					dataLabels: {
						enabled: true,
						color: '#1C9AD6',
						align: 'center',
						formatter: function() {
							return Highcharts.numberFormat(this.y, 0);
						}, // one decimal
						y: 0, // 10 pixels down from the top
						style: {
							fontSize: '15px',
							fontFamily: 'Verdana, sans-serif bold'
						}
					}
				} ]
			});
		});
    </script>
	
	<script type="text/javascript">
	<?php 
    /* Mengambil query report*/
     foreach($reportinctype as $resulttype){
	$IncType[] = $resulttype->Type; //ambil bulan
    $valuetype[] = (float)$resulttype->Total; //ambil nilai
	 }
    /* end mengambil query*/ 
	?>
		$(function () {
			$('#reportinctype').highcharts({
				chart: {
					type: 'column',
					margin: 60,
					options3d: {
						enabled: false, alpha: 20, beta: 25, depth: 4
					}
				},
				title: {
					text: 'Total Incident/Type',
					style: {fontSize: '16px', fontFamily: 'Verdana, sans-serif bold'}
				}, 
				plotOptions: {
					column: {
						depth: 25
					}
				},
				credits: {
					enabled: false
				},
				xAxis: {
					categories:  <?php echo json_encode($IncType);?>
				},
				exporting: { 
					enabled: true 
				},
				yAxis: {
					title: {
						text: 'Total',
						style: {fontSize: '12px', fontFamily: 'Verdana, sans-serif bold'} 	
					},
				},
				tooltip: {
					formatter: function() {
						return 'The value for <b>' + this.x + '</b> is <b>' + Highcharts.numberFormat(this.y,0);
					}
				},
				series: [{
					name: 'Type',
					data: <?php echo json_encode($valuetype);?>,
					shadow : false,
					dataLabels: {
						enabled: true,
						color: '#1C9AD6',
						align: 'center',
						formatter: function() {
							return Highcharts.numberFormat(this.y, 0);
						}, // one decimal
						y: 0, // 10 pixels down from the top
						style: {
							fontSize: '15px',
							fontFamily: 'Verdana, sans-serif bold'
						}
					}
				}]
			});
		});
    </script>
	
	<script type="text/javascript">
	<?php 
    /* Mengambil query report*/
     foreach($reportincseverity as $resultseverity){
	$severity[] = $resultseverity->name; //ambil bulan
    $valueseverity[] = (float)$resultseverity->y; //ambil nilai
	$datas = array(array('name' => $severity, 'y' => $valueseverity));
	 }
	 
    /* end mengambil query*/ 
	?>
		$(function () {
			$('#reportincseverity').highcharts({
				chart: {
					type: 'pie',
					// margin: 60,
					options3d: {
						enabled: true, alpha: 45, beta: 0, depth: 4
					}
				},
				title: {
					text: 'Total Incident/Severity',
					style: {fontSize: '16px', fontFamily: 'Verdana, sans-serif bold'}
				}, 
				plotOptions: {
					pie: {
						allowPointSelect: true,
						cursor: 'pointer',
						shadow: true,
						depth: 25,
						dataLabels: {
							enabled: true,
							format: '{point.name}{series.y}'
						}
					}
				},
				credits: {
					enabled: false
				},
				xAxis: {
					//categories:  <?php echo json_encode($reportincseverity);?>
					//categories: ["First Aid Medical Treatment","First Aid Only","Property Damage","Tansfer Job"]
				},
				exporting: { 
					enabled: true 
				},
				yAxis: {
					title: {
						text: 'Total',
						style: {fontSize: '12px', fontFamily: 'Verdana, sans-serif bold'} 	
					},
				},
				tooltip: {
					//pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
					valueSuffix: ""
					},
				// tooltip: {
					// formatter: function() {
						// return 'Quantity ' + Highcharts.numberFormat(this.y,0);
					// }
				// },
				// series:  <?php echo json_encode($reportincseverity);?>,
				// series:  [{"name":"First Aid \/ Medical Treatment","y":"3"},{"name":"First Aid Only","y":"5"},{"name":"Property Damage","y":"9"},{"name":"Tansfer Job","y":"2"}]
			 series: [{
				type: 'pie',
				name: 'Quantity',
				//data: <?php echo json_encode($reportincseverity);?>, 
		
				data: [['First Aid / Medical Treatment',3],
						['First Aid Only',5],
						['Property Damage',9],
						['Tansfer Job',2]
					]
			
			}]
			
			
			// <?php echo json_encode($valueseverity);?>,
			 
					// name: 'Severity',
					//shadow : false,
					
					
					// dataLabels: {
						// enabled: true,
						// color: '#1C9AD6',
						// align: 'center',
						// formatter: function() {
							// return Highcharts.numberFormat(this.y, 0);
						// }, // one decimal
						// y: 0, // 10 pixels down from the top
						// style: {
							// fontSize: '15px',
							// fontFamily: 'Verdana, sans-serif bold'
						// }
					// }
				 
			});
		});
    </script> -->
<!-- 	
  <script>
    CKEDITOR.replace('editor1' ,{
      filebrowserBrowseUrl: '<?php echo base_url('asset/kcfinder/browse.php'); ?>',
      filebrowserImageBrowseUrl: '<?php echo base_url('asset/kcfinder/browse.php?type=Images'); ?>',
      filebrowserUploadUrl: '<?php echo base_url('asset/kcfinder/uploader/upload.php'); ?>',
      filebrowserImageUploadUrl: '<?php echo base_url('asset/kcfinder/uploader/upload.php?type=Images'); ?>'
    });
  </script> -->
  <script type="text/javascript">
  // To make Pace works on Ajax calls
  $(document).ajaxStart(function() { Pace.restart(); });
    $('.ajax').click(function(){
        $.ajax({url: '#', success: function(result){
            $('.ajax-content').html('<hr>Ajax Request Completed !');
        }});
    });


    var url = window.location;
    // for sidebar menu entirely but not cover treeview
    $('ul.sidebar-menu a').filter(function() {
      return this.href == url;
    }).parent().addClass('active');

    // for treeview
    $('ul.treeview-menu a').filter(function() {
      return this.href == url;
    }).closest('.treeview').addClass('active');
  </script> 
   <script type="text/javascript">
	    $('.subject-list').on('change', function() {
		    $('.subject-list').not(this).prop('checked', false);  
		});
    </script>
	 <script type="text/javascript">
	    $('.Remark-list').on('change', function() {
		    $('.Remark-list').not(this).prop('checked', false);  
		});
    </script>
	<script type="text/javascript">
	    $('.Re-list').on('change', function() {
		    $('.Re-list').not(this).prop('checked', false);  
		});
    </script>
	<script type="text/javascript">
	    $('.Shift-list').on('change', function() {
		    $('.Shift-list').not(this).prop('checked', false);  
		});
    </script>
  	<script>
        $(document).ready(function() {
            $("input[type='radio']").change(function() {
                if ($(this).val() == "OTHER") {
                    $("#otherAnswer").show(); 
                } else {
                    $("#otherAnswer").hide(); 
                }
            });
        });
    </script>
	 <script>
        $(document).ready(function() {
            $("input[type='radio']").change(function() {
                if ($(this).val() == "HSE") {
                    $("#b").show();  
                } else {
                    $("#b").hide();  
                }
            });
        });
    </script>
	<script type="text/javascript">
        $(document).ready(function(){ 
            $('#i').change(function(){ 
                if ($(this).val() == "Open") {
                    $("#op").show();
					$("#op").prop('required',true);
                } else {
                    $("#op").hide();  
					$("#op").prop('required',false);
                }
            });  
        });
	</script>
	
	<script> 
		$(document).ready(function() {
            $("input[type='checkbox']").change(function() {
                if ($(this).val() == "Yes") {
                    $("#m").show();
                    $("#nc").show();
                    $("#NCR").show();
					$("#m").prop('required',true);
					$("#otherCategory").hide(); 
					$("#otherCategory").prop('required',false);						
                } else {
                    $("#m").hide();  
                    $("#nc").hide();  
                    $("#NCR").hide();  
                }
            });
        });
		 
		$(document).ready(function() {
            $("input[type='radio']").change(function() {
                if ($(this).val() == "Yes") {
					$("#st").show();   		 				
					$("#sst").show();
					$("#st1").hide();   	
					$("#o").hide(); 

					$("#j").hide();  
                    $("#k").hide();  
                    $("#l").hide();  
					$("#ib").hide();  				 				
                    $("#it").hide();  				 				
                    $("#oc").hide();  						
                } else {
					$("#st").hide();   	
					$("#sst").hide();  
					$("#st1").show();   	
					$("#o").show();   						
                  	
					$("#j").show();  					
                    $("#k").show();  					
                    $("#l").show();  				 				
                    $("#ib").show();  				 				
                    $("#it").show();  				 				
                    $("#oc").show();  		
                }
            });
        }); 
		
		$('#cat').change(function () {
				var SelectedText = $('option:selected',this).text();
				var SelectedValue = $('option:selected',this).val();
				//var dropDownValue = document.querySelector('#cat').value;				
					if (SelectedText.includes("Others",0) == true) {
						$("#otherCategory").show(); 
						$("#otherCategory").prop('required',true);	
					} else {
						$("#otherCategory").hide(); 
						$("#otherCategory").prop('required',false);	
					}
			});
			
			$('#cat').change(function () {
			var SelectedText = $('option:selected',this).text();
			var SelectedValue = $('option:selected',this).val(); 
                if (SelectedText.includes("Positive Observation",0) == true) {
                    $("#positif").show(); 
                    $("#positif").prop('required',true);	
                } else {
                    $("#positif").hide(); 
					$("#positif").prop('required',false);	
                }
            });
       
    </script> 
	
	<script type="text/javascript">
        $(document).ready(function(){ 
            $('#d').change(function(){ 
                var EmpID=$(this).val();
                $.ajax({
                    url : "<?php echo site_url('Main/get_Dept');?>",
                    method : "POST",
                    data : {EmpID: EmpID},
                    async : true,
                    dataType : 'json',
                    success: function(data){ 
                        var html = '';
                        var html2 = '';
                        var i;
                        for(i=0; i<data.length; i++){
                             html += '<option value='+data[i].DeptID+'>'+data[i].DeptID+' </option>';
                             html2 += '<option value='+data[i].EmpName+'>'+data[i].EmpName+' </option>';
                        }
                        $('#e').html(html); 
                        $('#f').html(html2); 
                    }
                });
                return false;
            });  
        });
	</script> 
	
	<script type="text/javascript">
        $(document).ready(function(){ 
            $('#k').change(function(){ 
                var sid=$(this).val();
                $.ajax({
                    url : "<?php echo site_url('Main/get_EmailSection');?>",
                    method : "POST",
                    data : {sid: sid},
                    async : true,
                    dataType : 'json', 
                    success: function(data){ 
                        var html = '';  
                        var i;
                        for(i=0; i<data.length; i++){
                            html += '<input type="text" value="'+data[i].Email+'" name="Email" id="Email" class="form-control"> </input>';    
                        }
                        $('#Emailto').html(html);   
                       // $('#lname').html(html2);  
                    }
                });
                return false;
            });  
        });
    </script>  	
	
	<script type="text/javascript">
		$(function(){
			$('#cat').multiSelect(); 
		});
    </script>
	
	<script type="text/javascript"> 
		function PreviewImage() {
			var oFReader = new FileReader();
			oFReader.readAsDataURL(document.getElementById("im").files[0]); 
			oFReader.onload = function (oFREvent) {
				document.getElementById("uploadPreview").src = oFREvent.target.result;
			};
		}; 
	</script> 
	<script type="text/javascript"> 
		// Multiple images preview in browser
		function previewImages() { 
			var $preview = $('#preview').empty();
			if (this.files) $.each(this.files, readAndPreview); 
			function readAndPreview(i, file) { 
				if (!/\.(jpe?g|png|gif)$/i.test(file.name)){
					return alert(file.name +" is not an image");
				} // else... 
				var reader = new FileReader(); 
				$(reader).on("load", function() {
					$preview.append($("<img/>", {src:this.result, height:130, padding:5,boder:3}));
					}); 
				reader.readAsDataURL(file); 
			} 
		} 
		$('#userfile').on("change", previewImages);
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

