<?php 
    echo "<div class='col-md-12'>
				<div class='box box-info'> 
              <div class='box-body'>";
               $attributes = array('class'=>'form-horizontal','role'=>'form');
			   $Date=date("Y-m-d");
              echo form_open_multipart('User/C_Observation',$attributes); 
          echo "<div class='col-md-12'>
                  <table class='table table-striped  table-condensed table-bordered table-responsive'>
                  <tbody>
				  <tr>
				  <center>
				  <iframe title=\"Quality\" width=\"100%\" height=\"800\" src=\"https://app.powerbi.com/view?r=eyJrIjoiMTgzYjE0YmMtNzU3Mi00MjFmLWJiOWEtMjQwYWU3NmQ0YjVhIiwidCI6ImVmNzI2YmJkLWZhOTYtNDNmOS1hZmMxLTZjMDc5ZDk2YmQ5MSIsImMiOjEwfQ%3D%3D\" frameborder=\"0\" allowFullScreen=\"true\"></iframe>
                  </center>
					</tr>  
                  </tbody>
                  </table>
				 </div>  
				<div class='box-footer'>                </div>
            </div></div></div>";
            echo form_close();
	