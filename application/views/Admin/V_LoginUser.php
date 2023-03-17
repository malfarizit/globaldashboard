            <div class="col-xs-12">  
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">List Login User</h3>
                  
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1"  class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th style='width:10px'>No</th>
                        <th style='width: 27%'>Username</th> 
                        <th>Login Date</th> 
                        <th>Ip Address</th>  
                      </tr>
                    </thead>
                    <tbody>
                  <?php 
                    $no = 1;
                    foreach ($record as $row){ 
                     
                    echo "<tr><td>$no</td>
                              <td>$row[username]</td> 
                              <td>$row[login_date]</td> 
                              <td>$row[ip_address]</td>  
							</tr>";
                      $no++;
                    }
                  ?>
                  </tbody>
                </table>
              </div>