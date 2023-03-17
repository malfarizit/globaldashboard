<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Insert Data</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart('Main/C_hse_keylag',$attributes); 
          echo "<div class='col-md-12'>
                  <table class='table table-striped table-bordered table-responsive'>
                  <tbody>
				  <tr><th scope='row'>Date</th>             
				  <td><input type='date' class='form-control' name='a' required></td>
			  </tr>
			  <tr><th scope='row'>Site</th>             
						<td><select name='b' id='b'  class='form-control'  >					
							  <option value='' selected>- Select Site-</option>; 
							  <option value='CA' required>CA</option>;
							  <option value='CBM' required>CBM</option>;
							  <option value='CTB' required>CTB</option>;           
						</td>
					</tr>
                    <tr><th scope='row'>LTIFR_TRIFRIndustryBenchmark</th>                 
						<td><input type='number' class='form-control' name='c'  required></td>
					</tr>
					<tr><th scope='row'>TRIFR_Actual</th>                 
						<td><input type='number' class='form-control' name='d'  required></td>
					</tr>
					<tr><th scope='row'>TRIFR_Actual</th>                 
						<td><input type='number' class='form-control' name='e'  required></td>
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
				<h3 class="box-title">HSE Keylag Benchmark</h3>
				
				<a class='pull-right btn btn-success btn-sm' href='<?php echo base_url(); ?>Export/generateXls'><i class="fa fa-file-excel-o"></i> Export</a>
			   
			  </div><!-- /.box-header -->
			  <div class="table-responsive box-body">
				<table id="example1" class="table table-bordered table-striped table-responsive">
				  <thead class="thead-responsive">
					<tr>
					  <th style='width:20px'>id</th>
					  <th>Date</th>
					  <th>Unit</th>
					  <th>LTIFR_TRIFRIndustryBenchmark</th>
					  <th>TRIFR_Actual</th>
					  <th>LTIFR_Actual</th>
					  <th style='width:70px'>Action</th>
					</tr>
				  </thead>
				  <tbody>
					<?php
					$no = 1; 
					  foreach ($key as $row){  
					  echo "<tr>
					  		<td>$row[id]</td>
							  <td>$row[Date]</td>
							  <td>$row[Unit]</td>
							  <td>$row[LTIFR_TRIFRIndustryBenchmark]</td>
							  <td>$row[TRIFR_Actual]</td>
							  <td>$row[LTIFR_Actual]</td>";
							  if($this->session->level='admin'){								
							  echo "<td><center>
									  <a class='btn btn-danger btn-xs' title='Delete Data' href='".base_url()."Main/D_hse_keylag/$row[id]' onclick=\"return confirm('Apa anda yakin untuk hapus Data ini?')\"><span class='glyphicon glyphicon-remove'></span></a>
								  </center></td>";
							  }							
					  echo "</tr>";
					  $no++;
					  }
					?>
				</tbody>
			  </table>
			</div>
	