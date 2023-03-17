<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Add Employee</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart('Main/C_Employee',$attributes); 
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
					  <tbody>
						<tr><th width='140px' scope='row'>Employee ID</th>   
							<td>
								<input type='text' class='form-control' name='a' onkeyup=\"nospaces(this)\" required>
							</td>
						</tr>
						<tr><th scope='row' id='r'>Employee Name</th>                 
							<td>
								<input type='text' class='form-control' name='b'  required>
							</td>
						</tr> 
						 <tr><th scope='row'>No Hp</th>             
							<td><input type='text' class='form-control' name='c' required></td>
						</tr> 
						<tr><th scope='row'>Title</th>                 
							<td>
								<input type='text' class='form-control' name='d'  required>
							</td>
						</tr> 
						<tr><th scope='row'>Company</th>         
							<td><select name='pp' id='pp'  class='form-control'  >					
							<option value='' selected>- Select Company-</option>; 
							<option value='CA' required>CA</option>;
							<option value='CBM' required>CBM</option>;
							<option value='CTB' required>CTB</option>;           
							</td>						
						<tr><th scope='row'>Department</th>         
							<td>
								<select name='f' class='form-control' required>					
									<option value='' selected>- Select Department-</option>";
										foreach ($Dept as $row2){
											echo "<option value='$row2[DeptID]'>$row2[Dept_Name]</option>";
										}
						echo "</td></tr>
						<tr><th scope='row'>Email</th>                 
							<td>
								<input type='text' class='form-control' name='g'  required>
							</td>
						</tr> 
						
					  </tbody>
                  </table></div>  
				<div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Save</button>
                    <a href='V_Employee'><button type='button' class='btn btn-default pull-right'>Cancel</button></a> 
                  </div>
            </div></div></div>";
            echo form_close();