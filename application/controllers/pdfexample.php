 <?php
    class pdfexample extends CI_Controller{ 
    function __construct()
    { parent::__construct(); 
	} 
	
	function index() { 
    }
	
	public function genpdfqq() {
		$cardid = $this->uri->segment(3);
		$listInfo = $this->Main_model->view_detail('qoc', array('CardNo' => $cardid ))->row_array();  
		//$SubID=$this->Main_model->view_detail('disposition', array('disposition' => $SID ))->row_array();  
		$this->load->library('Pdf');
		// Clean any content of the output buffer
		ob_end_clean();  
		$pdf = new Pdf('P', 'mm', 'A3', true, 'UTF-8', false);
		$pdf->SetTitle('Pdf Example');
		$pdf->SetHeaderMargin(30);
		$pdf->SetTopMargin(20);
		$pdf->setFooterMargin(20);
		$pdf->SetAutoPageBreak(true);
		$pdf->SetAuthor('Author');
		$pdf->SetDisplayMode('real', 'default'); 
		$pdf->Write(5, 'CodeIgniter TCPDF Integration'); 
		$pdf->Output('pdfexample.pdf', 'I'); 
	}
    
	public function genpdfS() {
		ob_end_clean();  
		$NcrNo = $this->uri->segment(3);
		//$datas = $this->Main_model->getNCR($NcrNo)->result();
		//$data=json_encode($datas);
		$datas = $this->Main_model->view_join_ncr('ncr','qoc','NcrNo','CardNo',$NcrNo);
		//$datas = json_encode($data);  
		foreach ($datas as $sss => $data) {
		//$data = $this->Main_model->getNCR('qoc', array('CardNo' => $NcrNo ))->row_array();  
		//$SubID=$this->Main_model->view_detail('disposition', array('disposition' => $SID ))->row_array();  
			echo json_encode($data['CardNo']);
			//echo json_encode($data->CardNo);
			echo json_encode($data); 
			  
			//echo json_encode($datas['CardNo']);
		}
	}
    
	public function genpdf() {
		ob_end_clean();  
		$NcrNo = $this->uri->segment(3);
		//$datas = $this->Main_model->getNCR($NcrNo)->result();
		//$data=json_encode($datas);
		$Ncr = $this->Main_model->view_join_ncr('ncr','qoc','NcrNo','CardNo',$NcrNo);
		//$Record = json_encode($Ncr);  
		foreach ($Ncr as $NC => $data) {	 
		}  
		$loc=$data['Location'];
		$location=$this->Main_model->view_detail('qlocation', array('LocID'=> $loc))->row_array();
		//$data = $this->Main_model->getNCR('qoc', array('CardNo' => $NcrNo ))->row_array();  
		//$SubID=$this->Main_model->view_detail('disposition', array('disposition' => $SID ))->row_array();  
		$this->load->library('Pdf');
		// Clean any content of the output buffer
		
			$pdf = new Pdf('P', 'cm', 'A4', true, 'UTF-8', false);
			$dw=$data['CardNo'];
			$pdf->SetTitle($dw);
			$pdf->SetFont('times', '', 10); 
			$pdf->SetHeaderMargin(10);
			$pdf->SetTopMargin(20);
			$pdf->setFooterMargin(10);
			$pdf->SetAutoPageBreak(true);
			$pdf->SetAuthor('Author');
			$pdf->SetDisplayMode('real', 'default');  
			// add a page
			$pdf->AddPage(); 
			$html4 = ' 
			<table style="width: 100%; height:50%; border:1px solid black;">'; 
			$html4 .= '  <tr> 
							<th style="text-align:left;  border:none">
								<img src="asset/images/cladtek.png"  align="center" />
							</th> 
							<th colspan="5" align="center" vertical-align="center" style="vertical-align: center;">
								<br><br><h2 text-align="center">NON-CONFORMANCE REPORT (NCR) <br>
								</h2>
							</th>
						</tr> ';  
			$html4 .= '</table>'; 
			$html4 .= ' 
			<table border="1" style="width: 100%; height:100%; ">';  
			// concatenate a string, instead of calling $pdf->writeHTML()
			//$html4 .= '<tr><td>'.$data['CardNo'].'</td></tr>'; 
			$html4 .= '
						<tr border="1">
							<td >No</td> 
							<td colspan="2">'.$data['NcrNo'].'</td>
							<td   align="right">Rev.'.$data['Revision'].'</td>
							<td>Site/Location</td> 
							<td colspan="2">'.$data['Company'].'/ '.$location['Name'].'</td> 
						</tr>  
						<tr>
							<td >Category</td> 
							<td colspan="2">'.$data['ncrcategory'].'</td>
							<td></td>
							<td>Sub Location</td>  
							<td colspan="2">'.$data['Sub_Location'].'</td> 
						</tr>
						<tr>
							<td >Project</td> 
							<td colspan="2">'.$data['Project_No'].'</td>
							<td ></td>
							<td>Date</td> 
							<td colspan="2">'.(($data['Date']== 0) ? '' : date("m-d-Y", strtotime($data['Date']))).'</td> 
						</tr> 
						<tr>
							<td>Issued to</td> 
							<td colspan="6">'.$data['NCRIssued_to'].'</td> 
						</tr>  
						<tr>
							<td height="30px">Item Description</td>
							<td height="30px" colspan="6" >'.$data['Item_Desc'].'</td> 
						</tr>
						<tr>
							<td colspan="8" height="50px">Description of NonConformity:<br><br>'.$data['Description_Observation'].'</td>
							 
						</tr>
						<tr>
							<td colspan="8" height="40px">Reference Document / Standards:<br><br>'.$data['Reference'].'</td>
							 
						</tr>
						<tr>
							<td >Raised by</td>
							<td colspan="4">'.$data['Raised_by'].'</td> 
							<td>Date</td>
							<td>'.(($data['Date']== 0) ? '' : date("m-d-Y", strtotime($data['Date']))).'</td> 
						</tr>
						<tr>
							<td >Issued by</td>
							<td colspan="4">'.$data['NCRIssued_by'].'</td>   
							<td>Date</td>
							<td>'.(($data['NCRIssued_date']== 0) ? '' : date("m-d-Y", strtotime($data['NCRIssued_date']))).'</td> 
						</tr>
						<tr>
							<td colspan="8" height="50px">Correction / Immediate Action<br><br>'.$data['Corrective_action'].'</td> 							
						</tr>
						<tr>
							<td >Proposed by</td> 
							<td colspan="4">'.$data['Proposed_by'].'</td> 
							<td>Date</td>
							<td>'.(($data['Response_date']== 0) ? '' : date("m-d-Y", strtotime($data['Response_date']))).'</td> 
						</tr> 
						<tr>
							<td >Agreed by</td>
							<td colspan="4">'.$data['Agreed_by'].'</td> 
							<td>Date</td>
							<td>'.(($data['Response_date']== 0) ? '' : date("m-d-Y", strtotime($data['Response_date']))).'</td> 
						</tr>
						<tr>
							<td colspan="2" >Target Date of Completion</td>
							<td colspan="5" align="left">'.(($data['Target_date']== 0) ? '' : date("m-d-Y", strtotime($data['Target_date']))).'</td> 
						</tr>
						<tr>
							<td colspan="5" height="30px">Verification of Correction <br><br>'.$data['Verification'].'</td>
							<td colspan="2" height="30px">Verified by <br><br>'.$data['Verified_by'].' <&lt>'.(($data['Verified_date']== 0) ? '' : date("m-d-Y", strtotime($data['Verified_date']))).' </td>
						</tr> 
						<tr>
							<td colspan="2" height="20px">Disposition</td>
							<td colspan="6" height="20px">'.$data['NCRDisposition'].'</td> 
						</tr> 
						<tr >
							<td colspan="3" height="40px" style-border="0px solid">Closed by<br><br><br><br><br><br><br>'.(($data['Closed_by']=='') ? '' : 'QA MANAGER').'</td> 
							<td colspan="2" style-border="0px solid" align="center"><br><br>
							'.(($data['Closed_by']=='') ? '<br><br><br><br><br><br>' : '<img width: 30%;height:30%;  src="asset/images/Sign/SIGN.png"  align="center" />').'
							'.$data['Closed_by'].'</td>
							<td colspan="2" style-border="0px solid"><br><br><br><br><br><br><br><br>Date '.(($data['Closed_date']== 0) ? '' : date("m-d-Y", strtotime($data['Closed_date']))).'</td> 
						</tr>
						<tr >
							<td colspan="3" height="20px"style-border="0px solid">CAR Required?</td> 
							<td colspan="2" style-border="0px solid">'.$data['car_required'].'</td>
							<td colspan="2" style-border="0px solid">CAR No.  '.$data['CarNo'].'</td> 
						</tr>
						'; 
			$html4 .= '</table>
						<footer text-align="right">
						
						</footer>' ;
			//$pdf->setFooter('Form No. 13/01, Rev.4 Issued Date : 12 Apr 2022');
			$pdf->writeHTML($html4);
		
		
		
		//$pdf->Write(5, 'CodeIgniter TCPDF Integration'); 
		$pdf->Output('pdfexample.pdf', 'I'); 
		}
		
	public function genpdfcar() {
		ob_end_clean();  
		$cardid = $this->uri->segment(3);
		$car = $this->Main_model->view_join_ncr('ncr','qoc','NcrNo','CardNo',$cardid);
		foreach ($car as $NC => $data) {	 
		} 
		//$data = $this->Main_model->view_detail('ncr', array('CardNo' => $cardid ))->row_array();  
		//$SubID=$this->Main_model->view_detail('disposition', array('disposition' => $SID ))->row_array();   
		$this->load->library('Pdf2');
		// Clean any content of the output buffer 
		$pdf = new Pdf2('P', 'cm', 'A4', true, 'UTF-8', false);
		//$pdf->Footer2();
		$dw=$data['CardNo'];
		$pdf->SetTitle($dw);
		$pdf->SetFont('times', '', 10); 
		$pdf->SetHeaderMargin(10);
		$pdf->SetTopMargin(20);  
		$pdf->setFooterMargin(10); 
		$pdf->SetAutoPageBreak(true);  
		$pdf->SetAuthor('Author');
		$pdf->SetDisplayMode('real', 'default');  
		// add a page
		
		$pdf->AddPage(); 
		$html4 = ' 
		<table style="width: 100%; height:50%; border:1px solid black;">'; 
		$html4 .= '  <tr> 
						<th style="text-align:left;  border:none">
							<img src="asset/images/cladtek.png"   align="middle" />
						</th> 
						<th colspan="5" align="center" vertical-align="middle" style="vertical-align: center;">
							<br><br><h2 text-align="center">CORRECTIVE ACTION REQUEST (CAR)<br>
							</h2>
						</th>
					</tr> ';  
		$html4 .= '</table>'; 
		$html4 .= ' 
		<table style="width: 100%; height:100%; border-top:1px solid black;border-bottom:1px solid black;border-left:1px solid black;border-right:1px solid black;">'; 		
		// concatenate a string, instead of calling $pdf->writeHTML()
		//$html4 .= '<tr><td>'.$data['CardNo'].'</td></tr>'; 
		$html4 .= '
					<tr >
						<td style="border:1px solid black;">CAR No</td> 
						<td style="border:1px solid black;">'.$data['CarNo'].'</td>
						<td style="border:1px solid black;"align="right">Rev.'.$data['Revision'].'</td>
						<td style="border:1px solid black;">Date</td> 
						<td style="border:1px solid black;"colspan="2">'.$data['Date'].'</td> 
					</tr>  
					<tr>
						<td style="border:1px solid black;">Related NCR No</td> 
						<td style="border:1px solid black;">'.$data['ncrcategory'].'</td>
						<td style="border:1px solid black;"></td>
						<td style="border:1px solid black;">Project</td>  
						<td style="border:1px solid black;"colspan="2">'.$data['Project_No'].'</td> 
					</tr>
					<tr>
						<td style="border:1px solid black;"height="50px" colspan="6">Problem Description<br><br>'.$data['Description_Observation'].'</td>
					</tr>
					<tr>
						<td style="border:1px solid black;">CAR Issued by</td>
						<td style="border:1px solid black;"colspan="3">'.$data['NCRIssued_by'].'</td> 
						<td style="border:1px solid black;"colspan="2">CAR Issued Date  '.(($data['NCRIssued_date']== 0) ? '' : date("m-d-Y", strtotime($data['NCRIssued_date']))).'</td> 
					</tr>
					<tr>
						<td style="border:1px solid black;">CAR Issued to</td>
						<td style="border:1px solid black;"colspan="3">'.$data['NCRIssued_to'].'</td> 
						<td colspan="2">Response Due date</td> 
					</tr>
					<tr>
						<td style="border:1px solid black;"height="50px" colspan="6">Root Cause<br><br>'.$data['Root_Cause'].'</td>
					</tr>
					<tr>
						<td style="border:1px solid black;"colspan="6" height="50px">Corrective Action (Action to prevent recurrence)<br><br>'.$data['Corrective_action'].'</td>
					</tr>
					<tr>
						<td style="border:1px solid black;">Proposed by</td> 
						<td style="border:1px solid black;"colspan="3">'.$data['Proposed_by'].'</td> 
						<td style="border:1px solid black;"colspan="2">Date   '.(($data['Response_date']== 0) ? '' : date("m-d-Y", strtotime($data['Response_date']))).' </td> 
						 
					</tr> 
					<tr>
						<td style="border:1px solid black;">Agreed by</td>
						<td style="border:1px solid black;"colspan="3">'.$data['Agreed_by'].'</td> 
						<td style="border:1px solid black;"colspan="2">Date   '.(($data['Response_date']== 0) ? '' : date("m-d-Y", strtotime($data['Response_date']))).'</td> 
					</tr>
					<tr>
						<td style="border:1px solid black;">To be Performed by</td>
						<td style="border:1px solid black;"colspan="2">'.$data['Performed_by'].'</td>
						<td style="border:1px solid black;">Target Date</td>
						<td style="border:1px solid black;"colspan="2">'.(($data['Target_date']== 0) ? '' : date("m-d-Y", strtotime($data['Target_date']))).'</td> 
					</tr> 
					<tr>
						<td style="border:1px solid black;"colspan="3">All proposed corrective action accepted ?</td>
						<td style="border:1px solid black;"> YES/NO</td>
						<td style="border:1px solid black;"colspan="2" rowspan="3">Evidence of Corrective Action</td>
						<td style="border:1px solid black;"></td> 
					</tr>
					<tr>
						<td style="border:1px solid black;">Verification Date</td>
						<td style="border:1px solid black;"colspan="3">'.(($data['Verified_date']== 0) ? '' : date("m-d-Y", strtotime($data['Verified_date']))).'</td> 
						<td style="border:1px solid black;"colspan="3"></td> 
					</tr>
					<tr>
						<td style="border:1px solid black;">Verified By</td>
						<td style="border:1px solid black;"colspan="3">'.$data['Verified_by'].'</td> 
						<td style="border:1px solid black;"colspan="3"></td> 
					</tr>
					<tr>
						<td style="border:1px solid black;"colspan="3">All corrective action effective ?</td>
						<td style="border:1px solid black;">YES/NO</td>
						<td style="border:1px solid black;"colspan="3" rowspan="6" align="center">Closed by<br><br><br><br>'.$data['Closed_by'].'<br>QA Manager</td> 
					</tr>
					<tr>
						<td style="border:1px solid black;">Verification Date</td>
						<td style="border:1px solid black;"colspan="3">'.(($data['Verified_date']== 0) ? '' : date("m-d-Y", strtotime($data['Verified_date']))).'</td> 
						<td style="border:1px solid black;"colspan="3"></td> 
					</tr>
					<tr>
						<td style="border:1px solid black;">Verified By</td>
						<td style="border:1px solid black;"colspan="3">'.$data['Verified_by'].'</td> 
						<td style="border:1px solid black;"colspan="3"></td> 
					</tr>
					<tr>
						<td style="border:1px solid black;"colspan="3">Need to update Risk & Oppotunities</td>
						<td style="border:1px solid black;">YES/NO</td>
						<td style="border:1px solid black;"colspan="3"></td> 
					</tr>
					<tr>
						<td style="border:1px solid black;"colspan="4"></td>
						<td style="border:1px solid black;"colspan="3"></td>  
					</tr>
					<tr>
						<td style="border:1px solid black;"colspan="3">Need to make changes to QMS document</td>
						<td style="border:1px solid black;">'.$data['Issued_by'].'</td> 
						<td style="border:1px solid black;"colspan="3"></td> 
					</tr> 
					'; 
		$html4 .= '</table>
					<footer text-align="right">
					
					</footer>' ;
		
		//$pdf->setFooter('Form No. 13/01, Rev.4 Issued Date : 12 Apr 2022');
		
		$pdf->writeHTML($html4);
		//$pdf->Write(5, 'CodeIgniter TCPDF Integration'); 
		$pdf->Output('pdfexample.pdf', 'I'); 
		}
	
	
	public function genpdfall() {
		ob_end_clean();  
		$NcrNo = $this->uri->segment(3);
		//$datas = $this->Main_model->getNCR($NcrNo)->result();
		//$data=json_encode($datas);
		$Ncr = $this->Main_model->view_join_ncr('ncr','qoc','NcrNo','CardNo',$NcrNo);
		//$Record = json_encode($Ncr);  
		foreach ($Ncr as $NC => $data) {	 
		}
		
		$car = $this->Main_model->view_join_ncr('ncr','qoc','NcrNo','CardNo',$NcrNo);
		foreach ($car as $NC => $data) {	 
		} 
		
		$loc=$data['Location'];
		$location=$this->Main_model->view_detail('qlocation', array('LocID'=> $loc))->row_array();
		//$data = $this->Main_model->getNCR('qoc', array('CardNo' => $NcrNo ))->row_array();  
		//$SubID=$this->Main_model->view_detail('disposition', array('disposition' => $SID ))->row_array();  
		$this->load->library('Pdf');
		// Clean any content of the output buffer
		
			$pdf = new Pdf('P', 'cm', 'A4', true, 'UTF-8', false);
			//$pdf = new Pdf('P', 'cm', 'A4', true, 'ISO-8859-1', false);
			$dw=$data['CardNo'];
			$pdf->SetTitle($dw);
			//$pdf->SetFont('times', '', 10); 
			$pdf->SetFont('dejavusans', '', 10); 
			$pdf->SetHeaderMargin(10);
			$pdf->SetTopMargin(10);
			$pdf->SetLeftMargin(7);
			$pdf->SetRightMargin(7);
			$pdf->setFooterMargin(10);
			$pdf->SetAutoPageBreak(true);
			$pdf->SetAuthor('Author');
			$pdf->SetDisplayMode('real', 'default');  
			// add a page
			$pdf->AddPage(); 
			$html4 = ' 
			<table style="width: 100%; height:50%; border:1px solid black;">'; 
			$html4 .= '  <tr> 
							<th style="text-align:left;  border:none">
								<img src="asset/images/cladtek.png"  align="center" />
							</th> 
							<th colspan="5" align="center" vertical-align="center" style="vertical-align: center;">
								<br><br><h2 text-align="center">NON-CONFORMANCE REPORT (NCR) <br>
								</h2>
							</th>
						</tr> ';  
			$html4 .= '</table>'; 
			$html4 .= ' 
			<table border="1" style="width: 100%; height:100%; ">';  
			// concatenate a string, instead of calling $pdf->writeHTML()
			//$html4 .= '<tr><td>'.$data['CardNo'].'</td></tr>'; 
			$html4 .= '
						<tr border="1">
							<td >No</td> 
							<td colspan="2">'.$data['NcrNo'].'</td>
							<td   align="right">Rev.'.$data['Revision'].'</td>
							<td>Site/Location</td> 
							<td colspan="2">'.$data['Company'].'/ '.$location['Name'].'</td> 
						</tr>  
						<tr>
							<td >Category</td> 
							<td colspan="2">'.$data['ncrcategory'].'</td>
							<td></td>
							<td>Sub Location</td>  
							<td colspan="2">'.$data['Sub_Location'].'</td> 
						</tr>
						<tr>
							<td >Project</td> 
							<td colspan="2">'.$data['Project_No'].'</td>
							<td ></td>
							<td>Date</td> 
							<td colspan="2">'.(($data['Date']== 0) ? '' : date("m-d-Y", strtotime($data['Date']))).'</td> 
						</tr> 
						<tr>
							<td>Issued to</td> 
							<td colspan="6">'.$data['NCRIssued_to'].'</td> 
						</tr>  
						<tr>
							<td height="30px">Item Description</td>
							<td height="30px" colspan="6" >'.$data['Item_Desc'].'</td> 
						</tr>
						<tr>
							<td colspan="8" height="50px">Description of NonConformity:<br><br>'.$data['Description_Observation'].'</td>
							 
						</tr>
						<tr>
							<td colspan="8" height="40px">Reference Document / Standards:<br><br>'.$data['Reference'].'</td>
							 
						</tr>
						<tr>
							<td >Raised by</td>
							<td colspan="4">'.$data['Raised_by'].'</td> 
							<td>Date</td>
							<td>'.(($data['Date']== 0) ? '' : date("m-d-Y", strtotime($data['Date']))).'</td> 
						</tr>
						<tr>
							<td >Issued by</td>
							<td colspan="4">'.$data['NCRIssued_by'].'</td>   
							<td>Date</td>
							<td>'.(($data['NCRIssued_date']== 0) ? '' : date("m-d-Y", strtotime($data['NCRIssued_date']))).'</td> 
						</tr>
						<tr>
							<td colspan="8" height="50px">Correction / Immediate Action<br><br>'.$data['Corrective_action'].'</td> 							
						</tr>
						<tr>
							<td >Proposed by</td> 
							<td colspan="4">'.$data['Proposed_by'].'</td> 
							<td>Date</td>
							<td>'.(($data['Response_date']== 0) ? '' : date("m-d-Y", strtotime($data['Response_date']))).'</td> 
						</tr> 
						<tr>
							<td >Agreed by</td>
							<td colspan="4">'.$data['Agreed_by'].'</td> 
							<td>Date</td>
							<td>'.(($data['Response_date']== 0) ? '' : date("m-d-Y", strtotime($data['Response_date']))).'</td> 
						</tr>
						<tr>
							<td colspan="2" >Target Date of Completion</td>
							<td colspan="5" align="left">'.(($data['Target_date']== 0) ? '' : date("m-d-Y", strtotime($data['Target_date']))).'</td> 
						</tr>
						<tr>
							<td colspan="5" height="30px">Verification of Correction <br><br>'.$data['Verification'].'</td>
							<td colspan="2" height="30px">Verified by <br><br>'.$data['Verified_by'].' <&lt>'.(($data['Verified_date']== 0) ? '' : date("m-d-Y", strtotime($data['Verified_date']))).' </td>
						</tr> 
						<tr>
							<td colspan="2" height="20px">Disposition</td> 
							<td colspan="6" height="20px"  > 
								'.((strpos($data['NCRDisposition'],'Accepted through TQ')!==false) ? '&#10004; Accepted through TQ' : '&#9744; Accepted through TQ').'
								&#160;
								'.((strpos($data['NCRDisposition'],'Repair & Reinspect')!==false) ? '&#10004; Repair & Reinspect' : '&#9744; Repair & Reinspect').'
								&#160;
								'.((strpos($data['NCRDisposition'],'Use as it is')!==false) ? '&#10004; Use as it is' : '&#9744; Use as it is').'
								<br>  
								'.((strpos($data['NCRDisposition'],'Re-grade')!==false) ? '&#10004; Re-grade' : '&#9744; Re-grade').'
								&#160;
								'.((strpos($data['NCRDisposition'],'Return to Supplier')!==false) ? '&#10004; Return to Supplier' : '&#9744; Return to Supplier').'
								&#160; 
								'.((strpos($data['NCRDisposition'],'Scrap')!==false) ? '&#10004; Scrap' : '&#9744; Scrap').'
								&#160; 
								'.((strpos($data['NCRDisposition'],'Other')!==false) ? '<BR>&#160; &#10004; Other('.$data['Other'].')' : '&#9744; Other').'
							</td>   
						</tr> 
						<tr >
							<td colspan="3" height="40px" style-border="0px solid">Closed by<br><br><br><br><br><br><br>'.(($data['Closed_by']=='') ? '' : 'QA MANAGER').'</td> 
							<td colspan="2" style-border="0px solid" align="center"><br><br>
							'.(($data['Closed_by']=='') ? '<br><br><br><br><br><br>' : '<img width: 30%;height:30%;  src="asset/images/Sign/SIGN.png"  align="center" />').'
							'.$data['Closed_by'].'</td>
							<td colspan="2" style-border="0px solid"><br><br><br><br><br><br><br><br>Date '.(($data['Closed_by']== '') ? '' : date("m-d-Y", strtotime($data['Closed_date']))).'</td> 
						</tr>
						<tr >
							<td colspan="3" height="20px"style-border="0px solid">CAR Required?</td> 
							<td colspan="2" style-border="0px solid">'.$data['car_required'].'</td>
							<td colspan="2" style-border="0px solid">CAR No.  '.$data['CarNo'].'</td> 
						</tr>
						'; 
			$html4 .= '</table>
						<footer text-align="right"></footer>' ; 
			$pdf->writeHTML($html4); 
			//CAR
			IF($data['car_required']=='Yes'){
				$pdf->AddPage(); 
				$html5 = '<table style="width: 100%; height:50%; border:1px solid black;">'; 
				$html5 .= '  <tr> 
								<th style="text-align:left;  border:none">
									<img src="asset/images/cladtek.png"   align="middle" />
								</th> 
								<th colspan="5" align="center" vertical-align="middle" style="vertical-align: center;">
									<br><br><h2 text-align="center">CORRECTIVE ACTION REQUEST (CAR)<br>
									</h2>
								</th>
							</tr> ';  
				$html5 .= '</table>'; 
				$html5 .= ' 
				<table style="width: 100%; height:100%; border-top:1px solid black;border-bottom:1px solid black;border-left:1px solid black;border-right:1px solid black;">'; 		
				// concatenate a string, instead of calling $pdf->writeHTML()
				//$html4 .= '<tr><td>'.$data['CardNo'].'</td></tr>'; 
				$html5 .= '
							<tr >
								<td style="border:1px solid black;">CAR No</td> 
								<td style="border:1px solid black;">'.$data['CarNo'].'</td>
								<td style="border:1px solid black;"align="right">Rev.'.$data['Revision'].'</td>
								<td style="border:1px solid black;">Date</td> 
								<td style="border:1px solid black;"colspan="2">'.$data['Date'].'</td> 
							</tr>  
							<tr>
								<td style="border:1px solid black;">Related NCR No</td> 
								<td style="border:1px solid black;">'.$data['ncrcategory'].'</td>
								<td style="border:1px solid black;"></td>
								<td style="border:1px solid black;">Project</td>  
								<td style="border:1px solid black;"colspan="2">'.$data['Project_No'].'</td> 
							</tr>
							<tr>
								<td style="border:1px solid black;"height="50px" colspan="6">Problem Description<br><br>'.$data['Description_Observation'].'</td>
							</tr>
							<tr>
								<td style="border:1px solid black;">CAR Issued by</td>
								<td style="border:1px solid black;"colspan="3">'.$data['NCRIssued_by'].'</td> 
								<td style="border:1px solid black;"colspan="2">CAR Issued Date  '.(($data['NCRIssued_date']== 0) ? '' : date("m-d-Y", strtotime($data['NCRIssued_date']))).'</td> 
							</tr>
							<tr>
								<td style="border:1px solid black;">CAR Issued to</td>
								<td style="border:1px solid black;"colspan="3">'.$data['NCRIssued_to'].'</td> 
								<td colspan="2">Response Due date</td> 
							</tr>
							<tr>
								<td style="border:1px solid black;"height="50px" colspan="6">Root Cause<br><br>'.$data['Root_Cause'].'</td>
							</tr>
							<tr>
								<td style="border:1px solid black;"colspan="6" height="50px">Corrective Action (Action to prevent recurrence)<br><br>'.$data['Corrective_action'].'</td>
							</tr>
							<tr>
								<td style="border:1px solid black;">Proposed by</td> 
								<td style="border:1px solid black;"colspan="3">'.$data['Proposed_by'].'</td> 
								<td style="border:1px solid black;"colspan="2">Date   '.(($data['Response_date']== 0) ? '' : date("m-d-Y", strtotime($data['Response_date']))).' </td> 
								
							</tr> 
							<tr>
								<td style="border:1px solid black;">Agreed by</td>
								<td style="border:1px solid black;"colspan="3">'.$data['Agreed_by'].'</td> 
								<td style="border:1px solid black;"colspan="2">Date   '.(($data['Response_date']== 0) ? '' : date("m-d-Y", strtotime($data['Response_date']))).'</td> 
							</tr>
							<tr>
								<td style="border:1px solid black;">To be Performed by</td>
								<td style="border:1px solid black;"colspan="2">'.$data['Performed_by'].'</td>
								<td style="border:1px solid black;">Target Date</td>
								<td style="border:1px solid black;"colspan="2">'.(($data['Target_date']== 0) ? '' : date("m-d-Y", strtotime($data['Target_date']))).'</td> 
							</tr> 
							<tr>
								<td style="border:1px solid black;"colspan="3">All proposed corrective action accepted ?</td>
								<td style="border:1px solid black;">'.$data['action_accepted'].'</td>
								<td style="border:1px solid black;"colspan="2" rowspan="3">Evidence of Corrective Action</td>
								<td style="border:1px solid black;"></td> 
							</tr>
							<tr>
								<td style="border:1px solid black;">Verification Date</td>
								<td style="border:1px solid black;"colspan="3">'.(($data['Verified_date']== 0) ? '' : date("m-d-Y", strtotime($data['Verified_date']))).'</td> 
								<td style="border:1px solid black;"colspan="3"></td> 
							</tr>
							<tr>
								<td style="border:1px solid black;">Verified By</td>
								<td style="border:1px solid black;"colspan="3">'.$data['Verified_by'].'</td> 
								<td style="border:1px solid black;"colspan="3"></td> 
							</tr>
							<tr>
								<td style="border:1px solid black;"colspan="3">All corrective action effective ?</td>
								<td style="border:1px solid black;">'.$data['action_effective'].'</td>
								<td style="border:1px solid black;"colspan="3" rowspan="6" align="center">Closed by<br>'.(($data['Closed_by']=='') ? '<br>' : '<img width: 10%;height:10%;  src="asset/images/Sign/SIGN.png"  align="center" />').'<br>'.$data['Closed_by'].'<br>'.(($data['Closed_by']=='') ? '' : 'QA MANAGER').'</td> 
							</tr>
							<tr>
								<td style="border:1px solid black;">Verification Date</td>
								<td style="border:1px solid black;"colspan="3">'.(($data['Verified_date']== 0) ? '' : date("m-d-Y", strtotime($data['Verified_date']))).'</td> 
								<td style="border:1px solid black;"colspan="3"></td> 
							</tr>
							<tr>
								<td style="border:1px solid black;">Verified By</td>
								<td style="border:1px solid black;"colspan="3">'.$data['Verified_by'].'</td> 
								<td style="border:1px solid black;"colspan="3"></td> 
							</tr>
							<tr>
								<td style="border:1px solid black;"colspan="3" >Need to update Risk & Oppotunities<br>'.$data['remark2'].'</td>
								<td style="border:1px solid black;">'.$data['risk_opportunities'].'</td> 
							</tr> 
							<tr>
								<td style="border:1px solid black;"colspan="3" rowspan="2">Need to make changes to QMS document<br>'.$data['remark3'].'</td>
								<td style="border:1px solid black;" rowspan="2">'.$data['qms_document'].'</td>  
							</tr> 
							<tr>
								<td style="border:1px solid black;"colspan="3"></td> 
								<td style="border:1px solid black;"colspan="3"></td> 
							</tr>
							'; 
				$html5 .= '</table>
							<footer text-align="right"></footer>' ;
					//$pdf->setFooter('Form No. 13/01, Rev.4 Issued Date : 12 Apr 2022');
				$pdf->writeHTML($html5); 
			}ELSE{ 
			} 
			//$pdf->Write(5, 'CodeIgniter TCPDF Integration'); 
			$pdf->Output('pdfexample.pdf', 'I'); 
		}
		
	}
	?>