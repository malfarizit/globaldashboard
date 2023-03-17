<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Add Action</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart('Main/E_operation_qual',$attributes); 
			echo "<div class='col-md-12'>
                  <table class='table table-striped  table-bordered  table-responsive'>
					  <tbody>
					  <tr><th width='150px' scope='row' class='thead-responsive'>Tracking Number</th>   
							<td>
								<input type='text' class='form-control' name='id' value='$tr[id]' readonly='on'>
							</td>
						</tr>
					<tr><th scope='row'>Inspection Process</th>            
					  <td>
                        <input type='text' class='form-control' name='a' value='$tr[Inspection_Process]'>
					  </td>
				    </tr>
				  <tr><th scope='row'>Date</th>            
					  <td>
                          <input type='date' class='form-control' name='b' value='$tr[Date]' required>
					  </td>
				  </tr>
                  <tr><th scope='row'>Material Type</th>            
					  <td>
                        <input type='text' class='form-control' name='c' value='$tr[Material_Type]'>
					  </td>
				    </tr>
                  <tr><th scope='row'>Project No.</th>            
					  <td>
                        <input type='text' class='form-control' name='d' value='$tr[Project_No]'>
					  </td>
				    </tr>
                    <tr><th scope='row'>Cladtek Item No.</th>            
					  <td>
                        <input type='text' class='form-control' name='e' value='$tr[Cladtek_Item_No]'>
					  </td>
				    </tr>
                    <tr><th scope='row'>Result</th>            
					  <td>
                        <input type='text' class='form-control' name='f' value='$tr[Result]'>
					  </td>
				    </tr>
                    <tr><th scope='row'>Category Inspection</th>            
					  <td>
                        <input type='text' class='form-control' name='g' value='$tr[CategoryInspection]'>
					  </td>
				    </tr>
                    <tr><th scope='row'>Issue</th>            
					  <td>
                        <input type='text' class='form-control' name='h' value='$tr[Issue]'>
					  </td>
				    </tr>
                    <tr><th scope='row'>Freq. Inspection</th>            
					  <td>
                        <input type='text' class='form-control' name='j' value='$tr[Freq_Inspection]'>
					  </td>
				    </tr>
                    <tr><th scope='row'>Defect Zone</th>            
					  <td>
                        <input type='text' class='form-control' name='k' value='$tr[Defect_Zone]'>
					  </td>
				    </tr>
                    <tr><th scope='row'>Defect Length</th>            
					  <td>
                        <input type='text' class='form-control' name='l' value='$tr[Defect_Length]'>
					  </td>
				    </tr>
                    <tr><th scope='row'>Item Type</th>            
					  <td>
                        <input type='text' class='form-control' name='m' value='$tr[Item_Type]'>
					  </td>
				    </tr>
                    <tr><th scope='row'>Size</th>            
					  <td>
                        <input type='text' class='form-control' name='n' value='$tr[Size]'>
					  </td>
				    </tr>
                    <tr><th scope='row'>WOL Start Date</th>            
					  <td>
                        <input type='datetime-local' class='form-control' name='o' value='$tr[WOL_Start_Date]'>
					  </td>
				    </tr>
                    <tr><th scope='row'>WOL Finish Date</th>            
					  <td>
                        <input type='datetime-local' class='form-control' name='p' value='$tr[WOL_Finish_Date]'>
					  </td>
				    </tr>
                    <tr><th scope='row'>WOL Machine</th>            
					  <td>
                        <input type='text' class='form-control' name='q' value='$tr[WOL_Machine]'>
					  </td>
				    </tr>
                    <tr><th scope='row'>WOL Welder ID</th>            
					  <td>
                        <input type='text' class='form-control' name='r' value='$tr[WOL_Welder_ID]'>
					  </td>
				    </tr>
                    <tr><th scope='row'>Rework ADD Start Date/th>            
					  <td>
                        <input type='datetime-local' class='form-control' name='s' value='$tr[Rework_ADD_Start_Date]'>
					  </td>
				    </tr>
                    <tr><th scope='row'>Rework ADD Finish Date</th>            
					  <td>
                        <input type='datetime-local' class='form-control' name='t' value='$tr[Rework_ADD_Finish_Date]'>
					  </td>
				    </tr>
                    <tr><th scope='row'>Rework ADD Machine</th>            
					  <td>
                        <input type='text' class='form-control' name='u' value='$tr[Rework_ADD_Machine]'>
					  </td>
				    </tr>
                    <tr><th scope='row'>Rework ADD Welder ID</th>            
					  <td>
                        <input type='text' class='form-control' name='v' value='$tr[Rework_ADD_WelderID]'>
					  </td>
				    </tr>
                    <tr><th scope='row'>R1Start Date</th>            
					  <td>
                        <input type='date' class='form-control' name='w' value='$tr[R1Start_Date]'>
					  </td>
				    </tr>
                    <tr><th scope='row'>R1Finish Date</th>            
					  <td>
                        <input type='date' class='form-control' name='x' value='$tr[R1Finish_Date]'>
					  </td>
				    </tr>
                    <tr><th scope='row'>R1Machine</th>            
					  <td>
                        <input type='text' class='form-control' name='y' value='$tr[R1Machine]'>
					  </td>
				    </tr>
                    <tr><th scope='row'>R2Start Date</th>            
					  <td>
                        <input type='date' class='form-control' name='z' value='$tr[R2Start_Date]'>
					  </td>
				    </tr>
                    <tr><th scope='row'>R2Finish Date</th>            
					  <td>
                        <input type='date' class='form-control' name='aa' value='$tr[R2Finish_Date]'>
					  </td>
				    </tr>
                    <tr><th scope='row'>R2Machine</th>            
					  <td>
                        <input type='text' class='form-control' name='bb' value='$tr[R2Machine]'>
					  </td>
				    </tr>
                    <tr><th scope='row'>R3Start Date</th>            
					  <td>
                        <input type='date' class='form-control' name='cc' value='$tr[R3Start_Date]'>
					  </td>
				    </tr>
                    <tr><th scope='row'>R3Finish Date</th>            
					  <td>
                        <input type='date' class='form-control' name='dd' value='$tr[R3Finish_Date]'>
					  </td>
				    </tr>
                    <tr><th scope='row'>R3Machine</th>            
					  <td>
                        <input type='text' class='form-control' name='ee' value='$tr[R3Machine]'>
					  </td>
				    </tr>
                    <tr><th scope='row'>FMStart Date</th>            
					  <td>
                        <input type='date' class='form-control' name='ff' value='$tr[FMStart_Date]'>
					  </td>
				    </tr>
                    <tr><th scope='row'>FMFinish Date</th>            
					  <td>
                        <input type='date' class='form-control' name='gg' value='$tr[FMFinish_Date]'>
					  </td>
				    </tr>
                    <tr><th scope='row'>FMMachine</th>            
					  <td>
                        <input type='text' class='form-control' name='hh' value='$tr[FMMachine]'>
					  </td>
				    </tr>
                    <tr><th scope='row'>FMRepair Date</th>            
					  <td>
                        <input type='date' class='form-control' name='date' value='$tr[FMRepair_Date]'>
					  </td>
				    </tr>
                    <tr><th scope='row'>FMRepair Machine</th>            
					  <td>
                        <input type='text' class='form-control' name='ii' value='$tr[FMRepair_Machine]'>
					  </td>
				    </tr>
                    <tr><th scope='row'>Issue QC</th>            
					  <td>
                        <input type='text' class='form-control' name='jj' value='$tr[Issue_QC]'>
					  </td>
				    </tr>
                    <tr><th scope='row'>Length Repair</th>            
					  <td>
                        <input type='text' class='form-control' name='kk' value='$tr[Length_Repair]'>
					  </td>
				    </tr>
                    <tr><th scope='row'>Length Pipe</th>            
					  <td>
                        <input type='text' class='form-control' name='ll' value='$tr[Length_Pipe]'>
					  </td>
				    </tr>
                    <tr><th scope='row'>Size OD inc</th>            
					  <td>
                        <input type='text' class='form-control' name='mm' value='$tr[Size_OD_inc]'>
					  </td>
				    </tr>
                    <tr><th scope='row'>Size OD mm</th>            
					  <td>
                        <input type='text' class='form-control' name='nn' value='$tr[Size_OD_mm]'>
					  </td>
				    </tr>
                    <tr><th scope='row'>Area Surface Tested</th>            
					  <td>
                        <input type='text' class='form-control' name='oo' value='$tr[Area_Surface_Tested]'>
					  </td>
				    </tr>
                    <tr><th scope='row'>Unit</th>            
					  <td>
                        <input type='text' class='form-control' name='pp' value='$tr[Unit]' readonly='on'>
					  </td>
				    </tr>
					  </tbody>
                  </table>
				 </div>  
				<div class='box-footer'>
				<a href='..\V_Import'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
				<button type='submit' name='submit' class='btn btn-info'>Save</button>
                    ";
                "</div>
            </div></div></div>";
            echo form_close();