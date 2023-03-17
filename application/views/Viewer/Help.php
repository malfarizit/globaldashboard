<?php 
    echo " 
			<div class='box-body'> 
				<h2>1. How to raise Quality Observation </h2>
					<li>Go to Quality observation website : <a href='http://192.168.0.39/User/C_Qoc'>Link</a> </li>
					<li>Type in Employee ID and make sure it’s correct and select the employee ID</li></t>
					<li>Select Company,</li>
					<li>Select Location from dropdown list,</li>
					<li>Select Sublocation from dropdown list,</li>
					<li>Fill in Specific Location(Optional),</li>
					<li>Select Project ID from dropdown list,</li>
					<li>Type in Item description for the Project,</li>
					<li>Type in description observation </li>
					<li>Fill in reference of observation</li>
					<li>Fill in suggestion for observation</li>
					<li>Choose/take image from your gallery/camera,</li>
					<li>Click Save and wait for the form submitted.</li><br>
					<center><td> 
						<img class='rounded float-center' width='40%' height='40%' src='".base_url()."asset/images/Q1.PNG'>
					</td> 
					<td> 
						<img class='rounded float-center' width='46%' height='46%' src='".base_url()."asset/images/Q2.PNG'>
					</td> </center><br><br>
					<video width='100%' height='100%'  controls>
						<source src='".base_url()."asset/images/Create Observation.mp4'>Your browser does not support the video tag.
					</video> 
				<h2>2.How to issued quality observation</h2>
					<li>Go to login Page: <a href='http://192.168.0.39/Main/V_Login'>Link</a>  and login with QA/QC Engineer account,</li>
					<li>Open Quality Record from Quality Module→ Quality Record,</li>
					<li>On the observation list, choose 1 observation to be issued, click Update button,</li>
					<li>On the update form, update the data using below rules:</li>
					<br> -IF observation needs NCR, choose Yes on NCR Option and click save, Observation will automatically set to closed.</li>
					<br> -IF the observation doesn't need NCR click No, and go to the next process.</li>
					<li>After we choose No for NCR, we select Issuer from the dropdown list.</li>
					<li>Next we choose which department to be issued with this observation,</li>
					<li>Select the observation category, if we select others then we have to type in manual the category.</li>
					<li>Make sure the status is set to Issued,</li>
					<li>Click save and wait until the form is submitted.</li><br>
					<center><td> 
						<img class='rounded float-center' width='80%' height='50%' src='".base_url()."asset/images/QA3.PNG'>
					</td> <br><br>
					<td> 
						<img class='rounded float-center' width='80%' height='50%' src='".base_url()."asset/images/QC2.PNG'>
					</td> </center><br><br>
					<video width='100%' height='100%'  controls>
						<source src='".base_url()."asset/images/Issue Observation.mp4'>Your browser does not support the video tag.
					</video> 
				<h2>3.How to Respond any observation by PIC</h2>
					<li>Go to login Page: <a href='http://192.168.0.39/Main/V_Login'>Link</a> and login with PIC account,</li>
					<li>Open Quality Record from Quality Module→ Quality Record,</li>
					<li>On the observation list, choose 1 observation to respond, click Update button,</li>
					<li>Fill in action that PIC will do regarding the observation</li>
					<li>Select the target date for the action,</li>
					<li>Click save and wait until the form is submitted.</li><br>
					<center><td> 
						<img class='rounded float-center' width='80%' height='50%' src='".base_url()."asset/images/aws.PNG'>
					</td><br><br> 
					<td> 
						<img class='rounded float-center' width='80%' height='50%' src='".base_url()."asset/images/ww.PNG'>
					</td> </center><br><br>
					<video width='100%' height='100%'  controls>
						<source src='".base_url()."asset/images/PIC Action.mp4'>Your browser does not support the video tag.
					</video> 
				<h2>4.How to update/closed observation that already respond by PIC</h2>
					<li>Go to login Page <a href='http://192.168.0.39/Main/V_Login'>Link</a> and login with PIC account,</li>
					<li>Open Quality Record from Quality Module→ Quality Record,</li>
					<li>On the observation list, choose 1 observation to Closed/update, click Update button,</li>
					<li>On the update form, check whether the action is already done in Production.</li>
					<li>If the action is Done then change status field to Closed, then click save. If the action is still in progress and Target date is already expired, you can change the status field to Issue and click save to trigger notification for PIC or you can leave the record and wait until the action is done by PIC.</li><br>
					<center><td> 
						<img class='rounded float-center' width='80%' height='50%' src='".base_url()."asset/images/QCX.PNG'>
					</td><br><br> 
					<td> 
						<img class='rounded float-center' width='80%' height='50%' src='".base_url()."asset/images/WWQ.PNG'>
					</td> </center><br><br>
					<video width='100%' height='100%'  controls>
						<source src='".base_url()."asset/images/Closed Observation.mp4'>Your browser does not support the video tag.
					</video> 
				<h2>5.How to generate report</h2>
					<li>Go to login Page and login with PIC account,</li>
					<li>Open Quality Record from Quality Module→ Quality Record,</li>
					<li>On the top right corner, click the generate button to generate a report in excel.</li><br>
					<center><td> 
						<img class='rounded float-center' width='80%' height='50%' src='".base_url()."asset/images/WWW.PNG'>
					</td></center><br><br>
					<video width='100%' height='100%'  controls>
						<source src='".base_url()."asset/images/Export.mp4'>Your browser does not support the video tag.
					</video> 
				
			</div>";
            echo form_close();
	