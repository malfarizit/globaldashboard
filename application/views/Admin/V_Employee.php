            <div class="col-xs-12">  
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Employee</h3>
                  <a class='pull-right btn btn-primary btn-sm' href='<?php echo base_url(); ?>Main/C_Employee'>Add Data</a>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th style='width:20px'>No</th>
                        <th>Emploee ID</th>
                        <th>Employee Name</th>
                        <th>Title</th> 
                        <th>Level Position</th> 
                        <th>DeptID</th> 
                        <th style='width:70px'>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                  <?php 
                    $no = 1;
                    foreach ($record as $row){ 
                     
                    echo "<tr>
							<td>$no</td>
                            <td>$row[EmpID]</td>
                            <td>$row[EmpName]</td>
                            <td>$row[Title]</td> 
                            <td>$row[Level_Position]</td> 
                            <td>$row[DeptID]</td> 
                            <td><center>
                                  <a class='btn btn-success btn-xs' style='width:52px' title='Edit Data' href='".base_url()."Main/U_Employee/$row[EmpID]'><span class='glyphicon glyphicon-edit'></span></a>
								  <a class='btn btn-danger btn-xs' title='Delete Data' href='".base_url()."Main/D_Employee/$row[EmpID]' onclick=\"return confirm('Apa anda yakin untuk hapus Data ini?')\"><span class='glyphicon glyphicon-remove'></span></a>
                                </center></td>
						</tr>";
                    $no++;
                    }
                  ?>
                  </tbody>
                </table>
              </div>