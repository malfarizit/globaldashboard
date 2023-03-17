<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                   <h3 class='box-title'>Edit Profile</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart('main/V_Profile',$attributes);             
          echo "<div class='col-md-12 table-responsive'>
                  <table class='table table-striped table-bordered table-responsive'>
					<tbody class='tbody-responsive'> 
						<tr><th width='150px' scope='row' class='thead-responsive'>Username</th>   
							<td>
								<input type='text' class='form-control' name='a' value='$rows[username]' readonly='on'>
							</td>
						</tr>
						<tr><th width='160px' scope='row'>Password</th>   
							<td>
								<input type='password' class='form-control' name='b' value='$rows[password]' readonly='on'>
							</td>
						</tr>
						<tr><th scope='row'>Change Password?</th>                 
								<td>
									<input type='password' class='form-control' name='np' id='np' onkeyup='nospaces(this); checkPassnp(); return false;'>
									<div id='error-nwl'></div>
								</td>
						</tr>
						<tr><th scope='row'>Name</th>                
							<td>
								<input class='form-control' name='c' value='$rows[Name]' readonly='on'> 
							</td>
						</tr>
						<tr><th scope='row'>Email</th>                
							<td>
								<input class='form-control' name='c' value='$rows[Email]' readonly='on'> 
							</td>
						</tr>
						<tr><th scope='row'>No Hp</th>           
							<td>
								<input type='text' class='form-control' name='d' value='$rows[No_Hp]'readonly='on'>
							</td>
						</tr>
						<tr><th scope='row'>Session ID</th>            
							<td>
								<input type='text' class='form-control' name='e' value='$rows[id_session]'readonly='on'>
							</td>
						</tr>
						<tr><th scope='row'>Status</th>            
							<td>
								<input type='text' class='form-control' name='f' value='$rows[level]'readonly='on'>
							</td>
						</tr>  
					</tbody>
                  </table>
				</div> 
				<div class='box-footer'>
					<button type='submit' name='submit' class='btn btn-info'>Save</button>
					<a href='..\home'><button type='button' class='btn btn-default pull-right'>Cancel</button></a> 	
				</div>
              </div>
			 </div>
			</div>";
            echo form_close();