<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Add User</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart('Main/C_user',$attributes); 
          echo "<div class='col-md-12'>
					<table class='table table-condensed table-bordered'>
						<tbody>
							<tr><th width='140px' scope='row'>Username</th>   
								<td>
									<input type='text' class='form-control' name='a' onkeyup=\"nospaces(this)\" required>
								</td>
							</tr>
							<tr><th scope='row'>Password</th>                 
								<td>
									<input type='password' class='form-control' name='b' id='b' onkeyup='nospaces(this); checkPass(); return false;' required>
									<div id='error-nwl'></div>
								</td>
							</tr>
							<tr><th scope='row'>Name</th>             
								<td>
									<input type='text' class='form-control' name='c' required>
								</td>
							</tr>
							<tr><th scope='row'>Email</th>             
								<td>
									<input type='text' class='form-control' name='d' required onkeyup='nospaces(this)' placeholder='Ex:admin@gmail.com'>
								</td>
							</tr>
							 <tr><th scope='row'>No Hp</th>             
								<td>
									<input type='text' class='form-control' name='e' onkeyup='nospaces(this)' required placeholder='Ex:081245758457'>
								</td>
							</tr> 
							<tr><th scope='row'>Company</th>         
								<td><select name='pp' id='pp'  class='form-control'  >					
								<option value='' selected>- Select Result-</option>; 
								<option value='CA' required>CA</option>;
								<option value='CBM' required>CBM</option>;
								<option value='CTB' required>CTB</option>;           
								</td>					
							<tr><th scope='row'>Department</th>         
								<td>
									<select name='g' class='form-control' required>					
										<option value='' selected>- Select Department-</option>";
											foreach ($Dept as $row2){
												echo "<option value='$row2[DeptID]'>$row2[Dept_Name]</option>";
											}
								echo "</td>  
							<tr><th scope='row'>Level</th>                   
								<td>
									<input type='radio' name='h' value='admin' >Admin &nbsp; 
									<input type='radio' name='h' value='user' checked>User
								</td>
						   </tr>
						   <tr><th scope='row'>Access</th>             
							<td><select name='i' id='i'  class='form-control' required>					
								<option value='' selected >- Select Access-</option>; 
								<option value='HSE' required>HSE</option>;
								<option value='QUALITY' required>QUALITY</option>; 
								<option value='ALL' required>ALL</option>;        
							</td>
						</tr> 
						</tbody>
					</table>
				</div>  
				<div class='box-footer'>
                    <button type='submit' name='submit' onclick='checkp()' class='btn btn-info'>Save</button>
                    <a href='V_User'><button type='button' class='btn btn-default pull-right'>Cancel</button></a> 
                </div>
            </div></div></div>";
            echo form_close();