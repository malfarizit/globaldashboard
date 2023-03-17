<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Insert Data</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart('Main/C_hse_leading',$attributes); 
          echo "<div class='col-md-12'>
                  <table class='table table-striped table-bordered table-responsive'>
                  <tbody>
				  <tr><th scope='row'>Date</th>             
				  <td><input type='date' class='form-control' name='a' required></td>
			  </tr>
					<tr><th scope='row'>HSE Indicator</th>            
						<td>
							<select name='b' class='form-control' required>					
								<option value='' selected>- Select Indicator-</option>";
									foreach ($indicator as $row2){
										echo "<option value='$row2[Description]'>$row2[Description]</option>";
									}
                    echo "</td>
					</tr>
					<tr><th scope='row'>Site</th>             
						<td><select name='c' id='c'  class='form-control'  >					
							  <option value='' selected>- Select Site-</option>; 
							  <option value='CA' required>CA</option>;
							  <option value='CBM' required>CBM</option>;
							  <option value='CTB' required>CTB</option>;           
						</td>
					</tr> 
                    <tr><th scope='row'>Qty</th>                 
						<td><input type='number' class='form-control' name='d'  required></td>
					</tr>
                    
                  </tbody>
                  </table>
				 </div>  
				<div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Save</button>
                    <a href='V_Observation'><button type='button' class='btn btn-default pull-right'>Cancel</button></a> 
                </div>
            </div></div></div>";
            echo form_close();
			?>

			<div class="col-xs-12">  
			<div class="box">
			  <div class="box-header">
				<h3 class="box-title">HSE Lagging Indicator</h3>
				
				<a class='pull-right btn btn-success btn-sm' href='<?php echo base_url(); ?>Export/generateXls'><i class="fa fa-file-excel-o"></i> Export</a>
			   
			  </div><!-- /.box-header -->
			  <div class="table-responsive box-body">
				<table id="example1" class="table table-bordered table-striped table-responsive">
				  <thead class="thead-responsive">
					<tr>
					  <th style='width:20px'>id</th>
					  <th>Date</th>
					  <th>Indicator</th>
					  <th>Unit</th>
					  <th>Qty</th>
					  <th style='width:70px'>Action</th>
					</tr>
				  </thead>
				  <tbody>
					<?php
					$no = 1; 
					  foreach ($lag as $row){  
					  echo "<tr>
					  		<td>$no</td>
							  <td>$row[Date]</td>
							  <td>$row[Description]</td>
							  <td>$row[Unit]</td>
							  <td>$row[QTY]</td>";
							  if($this->session->level='admin'){								
							  echo "<td><center>
									  <a class='btn btn-danger btn-xs' title='Delete Data' href='".base_url()."Main/D_hse_lagging/$row[id]' onclick=\"return confirm('Apa anda yakin untuk hapus Data ini?')\"><span class='glyphicon glyphicon-remove'></span></a>
								  </center></td>";
							  }else{ 
							  }									
					  echo "</tr>";
					  $no++;
					  }
					?>
				</tbody>
			  </table>
			</div>
	