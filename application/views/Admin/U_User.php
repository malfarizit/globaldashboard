<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                   <h3 class='box-title'>Detail User Accounts</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart('main/U_User',$attributes);             
          echo "<div class='col-md-12 table-responsive'>
                  <table class='table table-striped table-bordered table-responsive'>
					<tbody class='tbody-responsive'> 
						<tr><th width='150px' scope='row' class='thead-responsive'>Username</th>   
							<td>
								<input type='text' class='form-control' name='a' value='$rows[username]' readonly='on'>
							</td>
						</tr>
						<tr><th width='160px' scope='row'>Passsword</th>   
							<td>
								<input type='password' class='form-control' name='b' id='b' value='$rows[password]' >
							</td>
						</tr>
						<tr><th scope='row'>Name</th>                
							<td>
								<input type='text'  class='form-control' name='c' value='$rows[Name]'  >
							</td>
						</tr>
						<tr><th scope='row'>Email</th>                
							<td>
								<input type='text' class='form-control' name='d' value='$rows[Email]'>
							</td>
						</tr>
						<tr><th scope='row'>No HP</th>           
							<td>
								<input type='text' class='form-control' name='e' value='$rows[No_Hp]' >
							</td>
						</tr> 
						<tr><th scope='row'>Access</th>           
							<td>
								<input type='text' class='form-control' name='f' value='$rows[hak_akses]' >
							</td>
						</tr> 							
					</tbody>
                  </table>
				</div> 
				<div class='box-footer'> 
					<button type='submit' name='submit' class='btn btn-info'>Save</button>
					<a href='..\V_User'><button type='button' class='btn btn-default pull-right'>Cancel</button></a> 	
				</div>
              </div>
			 </div>
			</div>";
            echo form_close();