            <div class="col-xs-12">  
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">User</h3>
                  <a class='pull-right btn btn-primary btn-sm' href='<?php echo base_url(); ?>Main/C_User'>Add Data</a>
                </div><!-- /.box-header -->
                 <div class="table-responsive box-body">
                  <table id="example1" class="table table-bordered table-striped">
                     <thead class="thead-responsive">
                      <tr>
                        <th style='width:20px'>No</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Name</th>
                        <th>No Hp</th>
                        <th>Level</th> 
                        <th style='width:70px'>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                  <?php 
                    $no = 1;
                    foreach ($record as $row){ 
                    if ($row['level'] == 'user'){ $level ='<span style="color:red">User</span>'; }else if($row['level'] == 'admin'){ $level ='<span style="color:green">Admin</span>'; }else if($row['level'] == 'store'){ $level ='<span style="color:blue">Store</span>'; }
                    echo "<tr>
								<td>$no</td>
								<td>$row[username]</td>
								<td>$row[Email]</td>
								<td>$row[Name]</td> 
								<td>$row[No_Hp]</td> 
								<td>$level</td>";
								if ($row['level']=='admin'){
									echo "<td><center>
									<a class='btn btn-success btn-xs' style='width:52px' title='Edit Data' href='".base_url()."Main/U_User/$row[username]'><span class='glyphicon glyphicon-edit'></span></a>
									</center></td>";
								}else{
									echo "<td>
											<center>
												<a class='btn btn-success btn-xs' title='Edit Data' href='".base_url()."Main/U_User/$row[username]'><span class='glyphicon glyphicon-edit'></span></a>
												<a class='btn btn-danger btn-xs' title='Delete Data' href='".base_url()."Main/D_User/$row[username]' onclick=\"return confirm('Apa anda yakin untuk hapus Data ini?')\"><span class='glyphicon glyphicon-remove'></span></a>
											</center>
										</td>";
								}
                          echo "</tr>";
                    $no++;
                    }
                  ?>
                  </tbody>
                </table>
              </div>