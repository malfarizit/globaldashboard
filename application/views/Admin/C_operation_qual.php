        <!-- File upload form -->
        <div class="col-md-12" id="importFrm" style="display: none;">
            <form action="<?php echo base_url('Main/SuccessImport'); ?>" method="post" enctype="multipart/form-data">
                <input type="file" name="file" />
                <input type="submit" class="btn btn-primary" name="importSubmit" value="IMPORT">
            </form>
        </div>
<script>
	function formToggle(ID){
    var element = document.getElementById(ID);
    if(element.style.display === "none"){
        element.style.display = "block";
    }else{
        element.style.display = "none";
    }
}
</script>
<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
				<a class='pull-left btn btn-success btn-sm' href='V_Import'>View Data</a>
                  <center><h2 class='box-title'>Insert Data</h2></center>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart('Main/C_operation_qual',$attributes); 
          echo "<div class='col-md-12'>
                  <table class='table table-striped table-bordered table-responsive'>
                  <tbody>
				  <tr><th scope='row'>Inspection Process</th>             
						<td><select name='a' id='a'  class='form-control'  >					
							  <option value='' selected>- Select Process-</option>; 
							  <option value='DPT' required>DPT</option>;
							  <option value='DPT SOL' required>DPT SOL</option>;
							  <option value='DPT WW' required>DPT WW</option>;
							  <option value='DRT' required>DRT</option>;
							  <option value='FDC' required>FDC</option>;
							  <option value='FVI' required>FVI</option>;
							  <option value='PAUT' required>PAUT</option>;
							  <option value='RT' required>RT</option>;
							  <option value='UT' required>UT</option>;
							  <option value='UT LD' required>UT LD</option>;
							  <option value='UT WT' required>UT WT</option>;

						</td>
					</tr>
				  <tr><th scope='row'>Date</th>             
				  <td><input type='date' class='form-control' name='b' required></td>
			  	</tr>
				  <tr><th scope='row'>Material Type</th>             
				  <td><select name='c' id='c'  class='form-control'  >					
						<option value='' selected>- Select Material Type-</option>; 
						<option value='BEND PIPE' required>BEND PIPE</option>;
						<option value='FITTING/FLANGE' required>FITTING/FLANGE</option>;
						<option value='LINED PIPE' required>LINED PIPE</option>;
						<option value='LINER' required>LINER</option>;
						<option value='MLP' required>MLP</option>;
						<option value='PIPE' required>PIPE</option>;
						<option value='PLATE' required>PLATE</option>;
						<option value='SPOOL' required>SPOOL</option>;

				  </td>
			  </tr>
			  <tr><th scope='row'>Project No.</th>                 
						<td><input type='text' class='form-control' name='d'  required></td>
					</tr>
					<tr><th scope='row'>Cladtek Item No.</th>                 
						<td><input type='text' class='form-control' name='e'  required></td>
					</tr>
					<tr><th scope='row'>Result</th>             
						<td><select name='f' id='f'  class='form-control'  >					
							  <option value='' selected>- Select Result-</option>; 
							  <option value='C' required>C</option>;
							  <option value='DNC' required>DNC</option>;
							  <option value='R/S' required>R/S</option>;
							  <option value='TBA' required>TBA</option>;           
						</td>
					</tr> 
					<tr><th scope='row'>Category Inspection</th>             
						<td><select name='g' id='g'  class='form-control'  >					
							  <option value='' selected>- Select Inspection-</option>; 
							  <option value='1st Dimensional' required>1st Dimensional</option>;
								<option value='1st Visual' required>1st Visual</option>;
								<option value='2nd Dimensional' required>2nd Dimensional</option>;
								<option value='2nd Visual' required>2nd Visual</option>;
								<option value='Hold by Porject from new destination' required>Hold by Porject from new destination</option>;
								<option value='Internal' required>Internal</option>;
								<option value='Internal Dimensional' required>Internal Dimensional</option>;
								<option value='Internal Dimensional & Witness by Client' required>Internal Dimensional & Witness by Client</option>;
								<option value='Internal Dimensional (1st)' required>Internal Dimensional (1st)</option>;
								<option value='Internal Dimensional (2nd)' required>Internal Dimensional (2nd)</option>;
								<option value='Internal Dimensional (3rd)' required>Internal Dimensional (3rd)</option>;
								<option value='Internal Dimensional (4th)' required>Internal Dimensional (4th)</option>;
								<option value='Internal Prod' required>Internal Prod</option>;
								<option value='Internal Visual' required>Internal Visual</option>;
								<option value='Internal Visual & Witness by Client' required>Internal Visual & Witness by Client</option>;
								<option value='Internal Visual (1st)' required>Internal Visual (1st)</option>;
								<option value='Internal Visual (2nd)' required>Internal Visual (2nd)</option>;
								<option value='Internal Visual (3rd)' required>Internal Visual (3rd)</option>;
								<option value='Offer to Client after Internal Dimensional' required>Offer to Client after Internal Dimensional</option>;
								<option value='Offer to Client after Internal Visual' required>Offer to Client after Internal Visual</option>;
								<option value='Offer to Client Without Internal' required>Offer to Client Without Internal</option>;
								<option value='Official' required>Official</option>;
								<option value='Re-Internal Visual and Witness by Client' required>Re-Internal Visual and Witness by Client</option>;
           
						</td>
					</tr> 
                    <tr><th scope='row'>Issue</th>                 
						<td><input type='text' class='form-control' name='h'  required></td>
					</tr>
					<tr><th scope='row'>Freq Inspection</th>             
						<td><select name='j' id='j'  class='form-control'  >					
							  <option value='' selected>- Select Result-</option>; 
							  <option value='1st' required>1st</option>;
							  <option value='2nd' required>2nd</option>;
							  <option value='3rd' required>3rd</option>;
							  <option value='4th' required>4th</option>;
							  <option value='5th' required>5th</option>;
							  <option value='6th' required>6th</option>;
							  <option value='7th' required>7th</option>;
							  <option value='8th' required>8th</option>;
							  <option value='9th' required>9th</option>;
							  <option value='10th' required>10th</option>;           
						</td>
					</tr>
					<tr><th scope='row'>Defect Zone</th>                 
						<td><input type='text' class='form-control' name='k'  required></td>
					</tr>
					<tr><th scope='row'>Defect Length</th>                 
						<td><input type='text' class='form-control' name='l'  required></td>
					</tr>
					<tr><th scope='row'>Item Type</th>                 
						<td><input type='text' class='form-control' name='m'  required></td>
					</tr>
					<tr><th scope='row'>Size</th>                 
						<td><input type='text' class='form-control' name='n'  required></td>
					</tr>
					<tr><th scope='row'>WOL Start Date</th>             
				  		<td><input type='datetime-local' class='form-control' name='o' required></td>
			  		</tr>
					<tr><th scope='row'>WOL Finish Date</th>             
					  <td><input type='datetime-local' class='form-control' name='p' required></td>
				 	 </tr>
					<tr><th scope='row'>WOL Machine</th>                 
					  <td><input type='text' class='form-control' name='q'  required></td>
				  	</tr>
					  <tr><th scope='row'>WOL Welder ID</th>                 
					  <td><input type='text' class='form-control' name='r'  required></td>
				  	</tr>
					  <tr><th scope='row'>REWORK / ADD Start Date</th>                 
					  <td><input type='datetime-local' class='form-control' name='s' required></td>
				  	</tr>
					  <tr><th scope='row'>REWORK / ADD Finish Date</th>                 
					  <td><input type='datetime-local' class='form-control' name='t' required></td>
				  	</tr>
					  <tr><th scope='row'>REWORK / ADD Machine</th>                 
					  <td><input type='text' class='form-control' name='u'  required></td>
				  	</tr>
					  <tr><th scope='row'>REWORK / ADD Welder ID</th>                 
					  <td><input type='text' class='form-control' name='v'  required></td>
				  	</tr>
					  <tr><th scope='row'>R1 Start Date</th>                 
					  <td><input type='datetime-local' class='form-control' name='w' required></td>
				  	</tr>
					  <tr><th scope='row'>R1 Finish Date</th>                 
					  <td><input type='datetime-local' class='form-control' name='x' required></td>
				  	</tr>
					  <tr><th scope='row'>R1 Machine</th>                 
					  <td><input type='text' class='form-control' name='y'  required></td>
				  	</tr>
					  <tr><th scope='row'>R2 Start Date</th>                 
					  <td><input type='datetime-local' class='form-control' name='z' required></td>
				  	</tr>
					  <tr><th scope='row'>R2 Finish Date</th>                 
					  <td><input type='datetime-local' class='form-control' name='aa' required></td>
				  	</tr>
					  <tr><th scope='row'>R2 Machine</th>                 
					  <td><input type='text' class='form-control' name='bb'  required></td>
				  	</tr>
					  <tr><th scope='row'>R3 Start Date</th>                 
					  <td><input type='datetime-local' class='form-control' name='cc' required></td>
				  	</tr>
					  <tr><th scope='row'>R3 Finish Date</th>                 
					  <td><input type='datetime-local' class='form-control' name='dd' required></td>
				  	</tr>
					  <tr><th scope='row'>R3 Machine</th>                 
					  <td><input type='text' class='form-control' name='ee'  required></td>
				  	</tr>
					  <tr><th scope='row'>FM START DATE</th>                 
					  <td><input type='datetime-local' class='form-control' name='ff' required></td>
				  	</tr>
					  <tr><th scope='row'>FM FINISH DATE</th>                 
					  <td><input type='datetime-local' class='form-control' name='gg' required></td>
				  	</tr>
					  <tr><th scope='row'>FM Machine</th>                 
					  <td><input type='text' class='form-control' name='hh'  required></td>
				  	</tr>
					  <tr><th scope='row'>FM REPAIR DATE</th>                 
					  <td><input type='datetime-local' class='form-control' name='date' required></td>
				  	</tr>
					  <tr><th scope='row'>FM Repair Machine</th>                 
					  <td><input type='text' class='form-control' name='ii'  required></td>
				  	</tr>
					  <tr><th scope='row'>Issue QC</th>                 
					  <td><input type='text' class='form-control' name='jj'  required></td>
				  	</tr>
					  <tr><th scope='row'>Length Repair (mm)</th>                 
					  <td><input type='text' class='form-control' name='kk'  required></td>
				  	</tr>
					  <tr><th scope='row'>Length Pipe</th>                 
					  <td><input type='text' class='form-control' name='ll'  required></td>
				  	</tr>
					  <tr><th scope='row'>Size OD (inch)</th>                 
					  <td><input type='text' class='form-control' name='mm'  required></td>
				  	</tr>
					  <tr><th scope='row'>Size OD (mm)</th>                 
					  <td><input type='text' class='form-control' name='nn'  required></td>
				  	</tr>
					  <tr><th scope='row'>Area Surface Tested (sq.mm)</th>                 
					  <td><input type='text' class='form-control' name='oo'  required></td>
				  	</tr>
					<tr><th scope='row'>Unit</th>             
						<td><select name='pp' id='pp'  class='form-control'  >					
							  <option value='' selected>- Select Result-</option>; 
							  <option value='CA' required>CA</option>;
							  <option value='CBM' required>CBM</option>;
							  <option value='CTB' required>CTB</option>;           
						</td>
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