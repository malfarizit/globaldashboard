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
				  <iframe title=\"HR - HIRINGS - HR - Hirings (CBM)\" width=\"100%\" height=\"700\" src=\"https://app.powerbi.com/view?r=eyJrIjoiOGE0MDM4MDYtZTA4YS00MGQzLWFkZDUtNmZlNWE2ZjBlYzgzIiwidCI6ImVmNzI2YmJkLWZhOTYtNDNmOS1hZmMxLTZjMDc5ZDk2YmQ5MSIsImMiOjEwfQ%3D%3D\" frameborder=\"0\" allowFullScreen=\"true\"></iframe>
                  </center>
					</tr>  
                  </tbody>
                  </table>
				 </div>  
				<div class='box-footer'>                </div>
            </div></div></div>";
            echo form_close();
	