<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>WELCOME ADMINISTRATOR</title>
    <meta name="author" content="COC.com">
    <link rel="shortcut icon" type="image/ico" href="<?php echo base_url(); ?>asset/images/cladtek.png">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/plugins/font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
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
    <style type="text/css"> .files{ position:absolute; z-index:2; top:0; left:0; filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"; opacity:0; background-color:transparent; color:transparent; } </style>
    <script type="text/javascript" src="<?php echo base_url(); ?>/asset/plugins/jQuery/jquery-1.12.3.min.js"></script>
    <script src="<?php echo base_url(''); ?>asset/ckeditor/ckeditor.js"></script>
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

    </script>
  </head>
  <body class="hold-transition skin-red sidebar-mini">
    <div class="wrapper">
      <header class="main-header">
          <?php include "main_header.php"; ?>
      </header> 
      <aside class="main-sidebar">
          <?php include "menu.php"; ?>
      </aside> 
      <div class="content-wrapper">
        <section class="content-header">
          <h1> Dashboard <small>Control panel </small> </h1>
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
			© 2021 Cladtek HSE. All rights reserved.
		</div> 
      </footer>
    </div><!-- ./wrapper -->
    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url(); ?>asset/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>$.widget.bridge('uibutton', $.ui.button);</script>
    <script src="<?php echo base_url(); ?>asset/plugins/chart/highcharts.js"></script>
    <script src="<?php echo base_url(); ?>asset/plugins/chart/data.js"></script>
    <script src="<?php echo base_url(); ?>asset/plugins/chart/exporting.js"></script>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="<?php echo base_url(); ?>asset/plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Slimscroll -->
    <script src="<?php echo base_url(); ?>asset/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url(); ?>asset/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>asset/dist/js/app.min.js"></script> 
	 <!-- Chart App -->
    <script src="<?php echo base_url(); ?>asset/plugins/pace/chart.js@2.8.0"></script> 
    <script>
    $('#rangepicker').daterangepicker();
    $('.datepicker').datepicker();
      $(function () { 
        $("#example1").DataTable();
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
	
	<script type="text/javascript">
	<?php 
    /* Mengambil query report*/
     foreach($report as $result10){
	$date10[] = $result10->Month; //ambil bulan
    $value10[] = (float)$result10->total; //ambil nilai
	 }
    /* end mengambil query*/ 
	?>
		$(function () {
			$('#report').highcharts({
				chart: {
					type: 'column',
					margin: 60,
					options3d: {
						enabled: false, alpha: 20, beta: 25, depth: 4
					}
				},
				title: {
					text: 'Total Observation/Month',
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
					categories:  <?php echo json_encode($date10);?>
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
						return 'The value for <b>' + this.x + '</b> is <b>' + Highcharts.numberFormat(this.y,0) + '</b>, in '+ this.series.name;
					}
				},
				series: [{
					name: 'Total',
					data: <?php echo json_encode($value10);?>,
					shadow : false,
					dataLabels: {
						enabled: true,
						color: '#045396',
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
	
   <!--<script>
    CKEDITOR.replace('editor1' ,{
      filebrowserBrowseUrl: '<?php echo base_url('asset/kcfinder/browse.php'); ?>',
      filebrowserImageBrowseUrl: '<?php echo base_url('asset/kcfinder/browse.php?type=Images'); ?>',
      filebrowserUploadUrl: '<?php echo base_url('asset/kcfinder/uploader/upload.php'); ?>',
      filebrowserImageUploadUrl: '<?php echo base_url('asset/kcfinder/uploader/upload.php?type=Images'); ?>'
    });
  </script>-->
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
	    $('.Re-list').on('change', function() {
		    $('.Re-list').not(this).prop('checked', false);  
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
		
		  $('#l').change(function () {
			var SelectedText = $('option:selected',this).text();
			var SelectedValue = $('option:selected',this).val(); 
                if (SelectedValue == "Others") {
                    $("#otherCategory").show(); 
                    $("#otherCategory").prop('required',true);	
                } else {
                    $("#otherCategory").hide(); 
					$("#otherCategory").prop('required',false);	
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
                             html2 += '<option value="'+data[i].EmpName+'"></option>';  
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
		function PreviewImage() {
			var oFReader = new FileReader();
			oFReader.readAsDataURL(document.getElementById("im").files[0]); 
			oFReader.onload = function (oFREvent) {
				document.getElementById("uploadPreview").src = oFREvent.target.result;
			};
		}; 
	</script> 
  </body>
</html>

