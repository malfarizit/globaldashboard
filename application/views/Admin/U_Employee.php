<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                   <h3 class='box-title'>Detail Employee data</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart('main/U_Employee',$attributes);             
          echo "<div class='col-md-12 table-responsive'>
                  <table class='table table-striped table-bordered table-responsive'>
					<tbody class='tbody-responsive'> 
						<tr><th width='150px' scope='row' class='thead-responsive'>Employee ID</th>   
							<td>
								<input type='text' class='form-control' name='a' value='$rows[EmpID]' readonly='on'>
							</td>
						</tr>
						<tr><th width='160px' scope='row'>Employee Name</th>   
							<td>
								<input type='text' class='form-control' name='b' value='$rows[EmpName]' >
							</td>
						</tr>
						<tr><th scope='row'>No Handphone</th>                
							<td>
								<input class='form-control' name='c' value='$rows[No_Hp]'> 
							</td>
						</tr> 
						<tr><th scope='row'>Email</th>                
							<td>
								<input  type='text' class='form-control' name='d' value='$rows[email]'> 
							</td>
						</tr> 
					</tbody>
                  </table>
				</div> 
				<div class='box-footer'> 
					<button type='submit' name='submit' class='btn btn-info'>Save</button>
					<a href='..\V_Employee'><button type='button' class='btn btn-default pull-right'>Cancel</button></a> 	
				</div>
              </div>
			 </div>
			</div>";
            echo form_close();