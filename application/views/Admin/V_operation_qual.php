			<div class="col-xs-12">  
			<div class="box">
			  <div class="box-header">
				<h3 class="box-title">Operation Quality</h3>
				
				<a class='pull-right btn btn-success btn-sm' href='<?php echo base_url(); ?>Export/generateXls'><i class="fa fa-file-excel-o"></i> Export</a>
				<a class='pull-right btn btn-success btn-sm' href='<?php echo base_url(); ?>Main/C_operation_qual'><i class="fa fa-file-excel-o"></i> Add Data</a>
			   
			  </div><!-- /.box-header -->
			  <div class="table-responsive box-body">
				<table id="example1" class="table table-bordered table-striped table-responsive">
				  <thead class="thead-responsive">
					<tr>
					  <th style='width:20px'>id</th>
					  <th>Inspection Process</th>
					  <th>Date</th>
					  <th>Material Type</th>
					  <th>Project No.</th>
					  <th>Cladtek Item No.</th>
					  <th>Result</th>
					  <th>Category Inspection</th>
					  <!-- <th>Issue</th> -->
					  <th>Remarks</th>
					  <th>Freq Inspection</th>
					  <th>Unit</th>
					  <th style='width:50px'>Action</th>
					</tr>
				  </thead>
				  <tbody>
					<?php
					$no = 1; 
					  foreach ($record as $row){  
					  echo "<tr>
					  		<td>$no</td>
							  <td>$row[Inspection_Process]</td>
							  <td>$row[Date]</td>
							  <td>$row[Material_Type]</td>
							  <td>$row[Project_No]</td>
							  <td>$row[Cladtek_Item_No]</td>
							  <td>$row[Result]</td>
							  <td>$row[CategoryInspection]</td>
							  <td>$row[Issue]</td>
							  <td>$row[Freq_Inspection]</td>
							  <td>$row[Unit]</td>";
							  if($this->session->level='admin'){								
							  echo "<td><center>
									  <a class='btn btn-danger btn-xs' title='Delete Data' href='".base_url()."Main/D_hse_lagging/$row[id]' onclick=\"return confirm('Apa anda yakin untuk hapus Data ini?')\"><span class='glyphicon glyphicon-remove'></span></a>
								  </center></td>";
							  }							
					  echo "</tr>";
					  $no++;
					  }
					?>
				</tbody>
			  </table>
			</div>
	