<!DOCTYPE html> 
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CLADTEK OBSERVATION SYSTEM</title>
    <meta name="author" content="COC.com">  
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/bootstrap/css/bootstrap.min2.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/plugins/font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/plugins/ionic/ionicons.min.css"> 
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/plugins/datatables/dataTables.bootstrap.css">
    <!-- Theme style
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/dist/css/AdminLTE.css"> -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/jQueryUI/jquery-ui.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/dist/css/AdminLTE.min2.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/dist/css/skins/_all-skins.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skinsfolder instead of downloading all of them to reduce the load. --> 
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/plugins/iCheck/flat/blue.css">
    <!-- Morris chart
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/plugins/morris/morris.css"> -->
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/plugins/daterangepicker/daterangepicker-bs3.css"> 
    <script type="text/javascript" src="<?php echo base_url(); ?>/asset/plugins/jQuery/jquery-1.12.3.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/asset/plugins/pace/pace.min.css"></link>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/asset/plugins/toastr/toastr.min.css"></links> 
	<style type="text/css"> .files{ position:absolute; z-index:2; top:0; left:0; filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"; opacity:0; background-color:transparent;  color:transparent; } </style>
    <style type="text/css">.checkbox-scroll { border:1px solid #ccc; width:100%; height: 114px; padding-left:8px; overflow-y: scroll; }</style> 
    <style>
		.required-field::before {
			content: "*";
			color: red;
		}
	</style>
	<script type="text/javascript">
		function nospaces(t){
			if(t.value.match(/\s/g)){
				alert('Maaf, Tidak Boleh Menggunakan Spasi,..');
				t.value=t.value.replace(/\s/g,'');
			}
		} 

		function checkfield(){ 
			var observation = document.getElementById('ASA') ; 
			var observation1 = document.getElementById('ASC') ; 
			var observation2 = document.getElementById('ASB') ;    
			var Company =  document.getElementById('c');   
			var Remark =  document.getElementsByName('d');   
			var type = document.getElementById('b'); 
			var Name= document.getElementById('e'); 
			var other= document.getElementById('otherAnswer');  
			var quality= document.getElementById('SO');  
			var Client= document.getElementById('Cl');  
			var Employee= document.getElementById('x');  
			if (observation.checked==true){ 
				if (type.value==''){
				alert('Maaf, Type observasi tidak boleh kosong,..'); 
				}else{  }
			}
			else if (observation1.checked==true){
				if (other.value==''){
				alert('Maaf, Field other tidak boleh kosong,..');  
				}else{  }
			}
			else if (observation2.checked==true){
				if (quality.value==''){
				alert('Maaf, Field Quality tidak boleh kosong,..');  
				}else{  }
			}else{
				 
			}
			
			if (Company.value==''){
				alert('Maaf, Company tidak boleh kosong,..'); 
			}else{ 
			} 
						
			if (Remark[0].checked==true){
				if (Name.value==''){
				alert('Maaf, Nama Visitor tidak boleh kosong,..'); 
				}else{ } 
			}
			else if(Remark[1].checked==true){
				if (Client.value==''){
				alert('Maaf, Project tidak boleh kosong,..'); 
				}else{  } 
			}
			else if(Remark[2].checked==true){
				if (Employee.value==''){
				alert('Maaf, Empolyee ID tidak boleh kosong,..');
				 
				}else{ }
			}else if(Remark[0].checked==false && Remark[1].checked==false && Remark[2].checked==false){
				alert('Maaf, Kolom Remark tidak boleh kosong,..');
			}
			else{
				  
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
          <h1>Quality Observation Card</h1>
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
		<div class="text-center py-1 bg-white text-red font-weight-bold">
			<b>© 2021 PT. CLADTEK BI-METAL MANUFACTURING BATAM. All rights reserved.</b>
		</div> 
      </footer>
    </div><!-- ./wrapper -->
    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url(); ?>asset/plugins/jQuery/jQuery-2.1.4.min.js"></script>  
	<!-- CKEDITOR -->
	<script src="<?php echo base_url(''); ?>asset/ckeditor/ckeditor.js"></script> 
	<script src="<?php echo base_url(); ?>asset/jQueryUI/jquery-ui.min2.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip
	<script>$.widget.bridge('uibutton', $.ui.button);</script> -->
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
    
    <script src="<?php echo base_url(); ?>asset/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="<?php echo base_url(); ?>asset/plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Slimscroll -->
    <script src="<?php echo base_url(); ?>asset/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url(); ?>asset/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>asset/dist/js/app.min.js"></script> 
	
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
	    $('.Remark-list').on('change', function() {
		    $('.Remark-list').not(this).prop('checked', false);  
		});
    </script>
	  <script type="text/javascript">
	    // $('.Shift-list').on('change', function() {
		    // $('.Shift-list').not(this).prop('checked', false);  
		// });
    // </script>
  	<script>
        $(document).ready(function() {
            $("input[type='radio'] ").change(function() {
                if ($(this).val() == "OTHERS") {
                    $("#otherAnswer").show(); 
                    $("#otherAnswer").prop('required',true);	
                } else {
                    $("#otherAnswer").hide(); 
					$("#otherAnswer").prop('required',false);	
                }
            });
        });
		  $(document).ready(function() {
            $("input[type='radio']").change(function() {
                if ($(this).val() == "HSE") {
                    $("#b").show();  
                    $("#b").prop('required',true);	  
                } else {
                    $("#b").hide();  
					$("#b").prop('required',false);	  
                }
            });
        });  
		 $(document).ready(function() {
            $("input[type='radio']").change(function() {
                if ($(this).val() == "QUALITY") {
                    $("#SO").show();
                    $("#SO").prop('required',true);	 
                } else {
                    $("#SO").hide();  
					 $("#SO").prop('required',false);	 
                }
            });
        }); 
		$(document).ready(function() {
            $("input[type='checkbox']").change(function() {
                if ($(this).val() == "Client") {
                    $("#Cl").show();
					$("#Cl").prop('required',true);					
                } else {
                    $("#Cl").hide();  
                }
            });
        });
		$(document).ready(function() {
            $("input[type='checkbox']").change(function() {
                if ($(this).val() == "Employee") {
                    $("#Em").show();  					
                    $("#x").prop('required',true);  					
                    $("#Ep").show();   		  					
                } else {
                    $("#Em").hide();  
                    $("#Ep").hide();  
                }
            });
        }); 
    </script> 
	 
	<script type="text/javascript">
        $(document).ready(function(){ 
            $('#h').change(function(){ 
                var AreaID=$(this).val();
                $.ajax({
                    url : "<?php echo site_url('User/get_Loc');?>",
                    method : "POST",
                    data : {AreaID: AreaID},
                    async : true,
                    dataType : 'json', 
                    success: function(data){ 
                        var html = ''; 
                        var html2 = '';  
                        var i;
                        for(i=0; i<data.length; i++){
                            html += '<option value='+data[i].LocID+'>'+data[i].LocName+'</option>';   
                            html2 += '<option value="'+data[i].LocName+'">'+data[i].LocName+'</option>';   
                           
                        }
                        $('#i').html(html);   
                        $('#lname').html(html2);  
                    }
                });
                return false;
            });  
        });
    </script>
	<script type="text/javascript">
        $(document).ready(function(){ 
            $('#lo').change(function(){ 
                var LocID=$(this).val();
                $.ajax({
                    url : "<?php echo site_url('User/get_subloc');?>",
                    method : "POST",
                    data : {LocID: LocID},
                    async : true,
                    dataType : 'json', 
                    success: function(data){ 
                        var html = '';  
                        var i;
                        for(i=0; i<data.length; i++){
                            html += '<option value="'+data[i].Sub_Name+'">'+data[i].Sub_Name+'</option>';    
                        }
                        $('#sl').html(html);   
                       // $('#lname').html(html2);  
                    }
                });
                return false;
            });  
        });
    </script>  	
	<script type="text/javascript">
        $(document).ready(function(){ 
            $('#aa').click(function(){ 
                var LocID=$(this).val();
                $.ajax({
                    url : "<?php echo site_url('User/get_subloc');?>",
                    method : "POST",
                    data : {LocID: LocID},
                    async : true,
                    dataType : 'json', 
                    success: function(data){ 
                        var html = '';  
                        var i;
                        for(i=0; i<data.length; i++){  
							html += '<option value="'+data[i].Sub_Name+'">'+data[i].Sub_Name+'</option>';   
                        } 
                        $('#lname').html(html);   
                    }
                });
                return false;
            });  
        });
    </script>
	<script type="text/javascript">
        $(document).ready(function(){ 
            $('#h').click(function(){ 
                var AreaID=$(this).val();
                $.ajax({
                    url : "<?php echo site_url('User/get_Area');?>",
                    method : "POST",
                    data : {AreaID: AreaID},
                    async : true,
                    dataType : 'json', 
                    success: function(data){ 
                        var html = '';  
                        var i;
                        for(i=0; i<data.length; i++){  
							html += '<option value="'+data[i].AreaName+'">'+data[i].AreaName+'</option>';   
                        } 
                        $('#Aname').html(html);   
                    }
                });
                return false;
            });  
        });
    </script>  	
	<script>
		$(document).ready(function(){ 
		 load_data(); 
		 function load_data(query)
		 {
		  $.ajax({
		   url:"<?php echo base_url(); ?>User/fetch",
		   method:"POST",
		   data:{query:query},
		   success:function(data){
			$('#z').html(data);
		   }
		  }) 
		 }

		$('#x').keyup(function(){
			var search = $(this).val();
			if(search != '')
			{
			load_data(search);
			}else
			{
			load_data();
			}
			});
		});
	</script> 
	
	<script>
		$(document).ready(function(){ 
		 load_data(); 
		 function load_data(query2)
		 {
		  $.ajax({
		   url:"<?php echo base_url(); ?>User/fetch2",
		   method:"POST",
		   data:{query2:query2},
		   success:function(data){
			$('#emp').html(data);
		   }
		  }) 
		 }

		$('#x').keyup(function(){
			var search = $(this).val();
			if(search != '')
			{
			load_data(search);
			}else
			{
			load_data();
			}
			});
		});
	</script> 
	
	<script type='text/javascript'>
    $(document).ready(function(){ 
     // Initialize 
     $("#a").autocomplete({
        source: function( request, response ) {
          // Fetch data
          $.ajax({
            url: "<?php echo base_url(); ?>User/EmployeeList",
            type: 'post',
            dataType: "json",
            data: {
              search: request.term
            },
            success: function( data ) {
              response( data );
            }
          });
        },
        select: function (event, ui) {
          // Set selection
          $('#a').val(ui.item.label); // display the selected text
          $('#s').val(ui.item.value); // save selected id to input
          return false;
        }
      });

    });
    </script>
	 
	<script type="text/javascript"> 
		function PreviewImage() {
			var oFReader = new FileReader();
			oFReader.readAsDataURL(document.getElementById("l").files[0]); 
			oFReader.onload = function (oFREvent) {
				document.getElementById("uploadPreview").src = oFREvent.target.result;
			};
		}; 
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

