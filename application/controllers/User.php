<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function index(){ 
			$this->load->library("session");
			$this->template->load('template','HomeUser');   
	} 
	
	// function operations_qual(){ 
	// 	$this->load->library("session");
	// 	$this->template->load('template','operations_quality');   
	// }

	// function hse(){ 
	// 	$this->load->library("session");
	// 	$this->template->load('template','hse');   
	// }

	// function ims(){ 
	// 	$this->load->library("session");
	// 	$this->template->load('template','ims');   
	// }

	// function sqd(){ 
	// 	$this->load->library("session");
	// 	$this->template->load('template','sqd');   
	// }

	// function projects_qual(){ 
	// 	$this->load->library("session");
	// 	$this->template->load('template','projects_quality');   
	// }

	// function hr_overview(){ 
	// 	$this->load->library("session");
	// 	$this->template->load('template','hr_overview');   
	// }

	// function hr_absence(){ 
	// 	$this->load->library("session");
	// 	$this->template->load('template','hr_absence');   
	// }

	// function hr_hirings(){ 
	// 	$this->load->library("session");
	// 	$this->template->load('template','hr_hirings');   
	// }

	function leadingtoJSON(){
		header('Access-Control-Allow-Origin: *');
		$content = $this->db->get('hse-leading'); //todolist table name
		$data = $content->result_array();
		
		echo json_encode($data, JSON_PRETTY_PRINT);
		
		//echo ($result);
    }

	function leadingid(){
		header('Access-Control-Allow-Origin: *');
		//$content = $this->db->get('hse-leading', 'id'); //todolist table name
		$content  = $this->Main_model->view_orderingg('hse-leading','id');
		//$data = $content->result_array();
		
		echo json_encode($content, JSON_PRETTY_PRINT);
		
		//echo ($result);
    }

	function rrtoJSON(){
		$content = $this->db->get('rework-rate'); //todolist table name
		$data = $content->result_array();
		
		echo json_encode($data, JSON_PRETTY_PRINT);
		
		//echo ($result);
    }
	// function C_Observation(){
	// 	//cek_session_admin();
    //     if (isset($_POST['submit'])){
	// 		//new code
	// 		$name_array = array();
	// 		$count = count($_FILES['userfile']['size']);
	// 		foreach($_FILES as $key=>$value)
	// 		for($s=0; $s<=$count-1; $s++) {
    //             $_FILES['userfile']['name']=$value['name'][$s];
    //             $_FILES['userfile']['type']    = $value['type'][$s];
    //             $_FILES['userfile']['tmp_name'] = $value['tmp_name'][$s];
    //             $_FILES['userfile']['error']       = $value['error'][$s];
    //             $_FILES['userfile']['size']    = $value['size'][$s];
    //             $config['upload_path'] = 'asset/images/Before';
    //             $config['allowed_types'] = 'gif|jpg|png|ico|jpeg';
	// 			$config['max_size'] = '200000'; // kb
    //             $this->load->library('upload', $config);
    //             $this->upload->do_upload();
    //             $data = $this->upload->data();
    //             $name_array[] = $data['file_name'];
	// 		} 
	// 		$names= implode('/', $name_array);  
			
	// 		//Old Code
	// 		// $config['upload_path'] = 'asset/images/Before';
    //         //$config['allowed_types'] = 'gif|jpg|png|ico|jpeg';
    //         // $config['allowed_types'] = '*';
    //         // $config['max_size'] = '200000'; // kb
    //         // $this->load->library('upload', $config);
    //         // $this->upload->do_upload('m');
    //         // $hasil=$this->upload->data(); 
			
	// 		if ($names ==''){ 
    //         // if ($hasil['file_name']==''){  
	// 			$data = array('TrackingNum'=>$this->Main_model->generate_TrackNum(),
	// 							//'OCType'=> ($this->input->post('otherAnswer'))=='' ? $this->db->escape_str($this->input->post('b')) : $this->db->escape_str($this->input->post('otherAnswer')), 
	// 							'OCType'=> ($this->input->post('otherAnswer'))!='' ?  $this->db->escape_str($this->input->post('otherAnswer')) :  $this->db->escape_str($this->input->post('b')), 
	// 							//'OCType'=> ($this->input->post('otherAnswer'))=='' ? (($this->input->post('b'))=='' ? $this->db->escape_str($this->input->post('SO')) : $this->db->escape_str($this->input->post('b'))) :  $this->db->escape_str($this->input->post('otherAnswer')), 
	// 							'CompanyID'=>$this->db->escape_str($this->input->post('c')),
	// 							'Remark'=>$this->db->escape_str($this->input->post('d')),
	// 							'Name'=>($this->input->post('d'))=='Visitor' ?  ($this->input->post('e')) : $this->db->escape_str($this->input->post('')), 
	// 							'CustID'=>($this->input->post('d'))=='Client' ?  ($this->input->post('Cl')) : $this->db->escape_str($this->input->post('')),
	// 							'EmpID'=>($this->input->post('d'))=='Employee' ? ($this->input->post('xy')) : $this->db->escape_str($this->input->post('')),
	// 							'EmpName'=>($this->input->post('d'))=='Employee' ?  ($this->input->post('emname')) :  ($this->input->post('')),
	// 							//'EmpName'=>($this->input->post('emname')),
	// 							//'Date'=>$this->db->escape_str($this->input->post('f')),
	// 							'Date'=>date('Ymd'),
	// 							'Shift'=>$this->db->escape_str($this->input->post('g')),
	// 							'AreaID'=>$this->db->escape_str($this->input->post('h')),
	// 							'AreaName'=>$this->db->escape_str($this->input->post('Aname')),
	// 							//'LocId'=>$this->db->escape_str($this->input->post('i')),
	// 							//'LocID'=>($this->input->post('Ots'))==''  ?  ($this->input->post('i')) : $this->db->escape_str($this->input->post('')),
	// 							'LocID'=>($this->input->post('i')),
	// 							'SubLocID '=>($this->input->post('Sl')),
    //                             'LocName'=>($this->input->post('Ots'))==''  ?  ($this->input->post('lname')) : $this->db->escape_str($this->input->post('')),
    //                             'ShortChart'=>($this->input->post('Ots'))=='' ?  ($this->input->post('Ott')) : $this->db->escape_str($this->input->post('Ots')),
	// 							'OCCategory'=>$this->db->escape_str($this->input->post('j')),
	// 							'Problem'=>$this->db->escape_str($this->input->post('k')),
	// 							'Suggestion'=>$this->db->escape_str($this->input->post('l')),  
	// 							//'EmpName'=> ($this->input->post('EmpName')),	  
	// 							'Status'=>$this->db->escape_str($this->input->post('n')));	  
	// 		}else{
	// 			$data = array('TrackingNum'=>$this->Main_model->generate_TrackNum(),
	// 							//'OCType'=> ($this->input->post('otherAnswer'))=='' ? $this->db->escape_str($this->input->post('b')) : $this->db->escape_str($this->input->post('otherAnswer')),  
	// 							'OCType'=> ($this->input->post('otherAnswer'))!='' ?  $this->db->escape_str($this->input->post('otherAnswer')) :  $this->db->escape_str($this->input->post('b')), 
	// 							//'OCType'=> ($this->input->post('otherAnswer'))=='' ? (($this->input->post('b'))=='' ? $this->db->escape_str($this->input->post('SO')) : $this->db->escape_str($this->input->post('b'))) :  $this->db->escape_str($this->input->post('otherAnswer')),
	// 							'CompanyID'=>$this->db->escape_str($this->input->post('c')),
	// 							'Remark'=>$this->db->escape_str($this->input->post('d')),
	// 							'Name'=>($this->input->post('d'))=='Visitor' ?  ($this->input->post('e')) : $this->db->escape_str($this->input->post('')), 
	// 							'EmpID'=>($this->input->post('d'))=='Employee' ?  ($this->input->post('xy')) : $this->db->escape_str($this->input->post('')), 
	// 							'CustID'=>($this->input->post('d'))=='Client' ?  ($this->input->post('Cl')) : $this->db->escape_str($this->input->post('')),
	// 							'EmpName'=>($this->input->post('d'))=='Employee' ?  ($this->input->post('emname')) : $this->db->escape_str($this->input->post('-')),								
	// 							//'EmpName'=> ($this->input->post('emname')),								
    //                             //'Date'=>$this->db->escape_str($this->input->post('f')),
    //                             'Date'=>date('Ymd'),
    //                             'Shift'=>$this->db->escape_str($this->input->post('g')),
    //                             'AreaID'=>$this->db->escape_str($this->input->post('h')),
	// 							'AreaName'=>$this->db->escape_str($this->input->post('Aname')),
    //                             'LocID'=>($this->input->post('i')),
	// 							'SubLocID '=>($this->input->post('Sl')),
	// 							//'LocID'=>($this->input->post('Ots'))==''  ?  ($this->input->post('i')) : $this->db->escape_str($this->input->post('')),
    //                             'LocName'=>($this->input->post('Ots'))==''  ?  ($this->input->post('lname')) : $this->db->escape_str($this->input->post('')),
    //                             'ShortChart'=>($this->input->post('Ots'))=='' ?  ($this->input->post('Ott')) : $this->db->escape_str($this->input->post('Ots')),
    //                             'OCCategory'=>$this->db->escape_str($this->input->post('j')),
    //                             'Problem'=>$this->db->escape_str($this->input->post('k')),
    //                             'Suggestion'=>$this->db->escape_str($this->input->post('l')),  
    //                             'Status'=>$this->db->escape_str($this->input->post('n')),
	// 							//'EmpName'=> ($this->input->post('EmpName')),	  
	// 							'BeforeAction'=>$names); 				
	// 							// 'BeforeAction'=>$hasil['file_name']); 				
	// 		}
	// 		//$ids = $this->db->escape_str($this->input->post('a')); 
	// 		$ids = $data['TrackingNum']; 
	// 		$this->Main_model->insert('oc',$data);
    //         redirect('Mailt/N_C_Observation/'.$ids);
            
	// 	}else{
	// 			//$track['TrackingNum'] = $this->Main_model->generate_TrackNum();  
	// 			$rec['record'] = $this->Main_model->view_ordering('oc','TrackingNum','DESC');
	// 			$area  = $this->Main_model->view_ordering('area','AreaID','ASC');
	// 			$occ  = $this->Main_model->view_ordering('category','OCCategory','DESC'); 
	// 			$Com  = $this->Main_model->view_ordering('company','CompanyID','DESC'); 
	// 			$data = array('record'=> $rec, 'area'=>$area, 'OC'=>$occ, 'CO'=>$Com);   
	// 			$this->template->load('template','HomeUser',$data);
	// 		} 
	// }

	
	
	// function C_Incident(){
	// 		if (isset($_POST['submit'])){ 
	// 		//$track['TrackingNum'] = $this->Main_model->generate_TrackNum();
	// 		$Injury =  implode(',', $this->input->post( 'Injury' , TRUE ) );
	// 		$Affected =  implode(',', $this->input->post( 'Affected' , TRUE ) ); 
	// 		$Contact =  implode(',', $this->input->post( 'Contact' , TRUE ) ); 
	// 		$With =  implode(',', $this->input->post( 'With' , TRUE ) );
	// 		$DEPT=$this->input->post('d');
	// 		$date2=$this->input->post('b');
	// 		$date3=date('Y-m-d', strtotime($date2. " + 1 day"));
	// 		$HOD= $this->Main_model->view_detail('user',array('DeptID' => $DEPT,'Position' => 'HOD' ))->row_array();
	// 		$HID=$HOD['username'];
	// 		//$MAIL=$HOD['Email'];
	// 		$name_array = array();
	// 		$count = count($_FILES['userfile']['size']);
	// 		foreach($_FILES as $key=>$value)
	// 		for($s=0; $s<=$count-1; $s++) {
    //             $_FILES['userfile']['name']=$value['name'][$s];
    //             $_FILES['userfile']['type']    = $value['type'][$s];
    //             $_FILES['userfile']['tmp_name'] = $value['tmp_name'][$s];
    //             $_FILES['userfile']['error']       = $value['error'][$s];
    //             $_FILES['userfile']['size']    = $value['size'][$s];
    //             $config['upload_path'] = 'asset/images/Incident';
    //             $config['allowed_types'] = 'gif|jpg|png|ico|jpeg';
	// 			$config['max_size'] = '200000'; // kb
    //             $this->load->library('upload', $config);
    //             $this->upload->do_upload();
    //             $data = $this->upload->data();
    //             $name_array[] = $data['file_name'];
	// 		} 
	// 		//$dump3=array($this->db->escape_str($this->input->post('xy')), $this->db->escape_str($this->input->post('emname')));
	// 		//$Emp=implode('/', $dump3);  
	// 		$names= implode('/', $name_array);  
    //         if ($names ==''){  
	// 			$data = array('IncidentNum'=>$this->Main_model->generate_IncidentNum(),
	// 							'CompanyID'=>$this->db->escape_str($this->input->post('a')),
	// 							'Initial_Incident'=>$this->db->escape_str($this->input->post('initial')),
	// 							'Incident_Date'=> $this->db->escape_str($this->input->post('b')),  
	// 							'Investigation_Date1'=> $date3,
	// 							'Time'=>$this->db->escape_str($this->input->post('c')),  
	// 							'DeptID'=>$this->db->escape_str($this->input->post('d')),  
	// 							'LocID'=>$this->db->escape_str($this->input->post('i')),
	// 							'ShortChart'=>($this->input->post('Ots'))=='' ?  ($this->input->post('Ott')) : $this->db->escape_str($this->input->post('Ots')),
	// 							'EmpID'=>($this->input->post('x'))!='' ?  ($this->input->post('xy')) : $this->db->escape_str($this->input->post('')),
	// 							'SpvID'=>$this->db->escape_str($this->input->post('sss')),
	// 							'EmpName'=>($this->input->post('x'))!='' ?  ($this->input->post('emname')) : $this->db->escape_str($this->input->post('')),
	// 							'SpvName'=>$this->db->escape_str($this->input->post('spvn')),
	// 							'Spv_email'=>$this->db->escape_str($this->input->post('email2')),
	// 							'Incident_type'=>$this->db->escape_str($this->input->post('ic')), 
	// 							'Shift'=>$this->db->escape_str($this->input->post('g')),  
	// 							'Vehicle_type'=>$this->db->escape_str($this->input->post('vehicle')),  
	// 							'Vehicle_id'=>$this->db->escape_str($this->input->post('VID')),  
	// 							'PropertyLost'=>($this->input->post('pro'))!='' ?  ($this->input->post('pro')) : $this->db->escape_str($this->input->post('')),
    //                             'NatureLost'=>($this->input->post('nat'))!='' ?  ($this->input->post('nat')) : $this->db->escape_str($this->input->post('')),
	// 							'Object_Involved'=>($this->input->post('obj'))!='' ?  ($this->input->post('obj')) : $this->db->escape_str($this->input->post('')),
	// 							'Amount_Spill'=>($this->input->post('amt'))!='' ?  ($this->input->post('amt')) : $this->db->escape_str($this->input->post('')),
	// 							'Nature_of_injury'=>$Injury,  
	// 							'Type_of_work1'=>$this->db->escape_str($this->input->post('ty')),  
	// 							'Part_affected'=>$Affected,  
	// 							'Type_of_contact'=>$Contact,  
	// 							'Contact_with'=>$With,  
	// 							'Incident_Desc'=>$this->db->escape_str($this->input->post('k')),  
	// 							'Nature_others'=>$this->db->escape_str($this->input->post('os')),  
	// 							'Part_affected_others'=>$this->db->escape_str($this->input->post('ot')),  
	// 							'T_Contact_others'=>$this->db->escape_str($this->input->post('ou')),  
	// 							'Contact_with_others'=>$this->db->escape_str($this->input->post('ov')),  
	// 							'Emp_statement'=>$this->db->escape_str($this->input->post('l')),
	// 							'Spv_statement'=> $this->db->escape_str($this->input->post('sps')),
	// 							'HOD_Name'=> $HID,
	// 							'Status'=>'Open',
	// 							'Supervisor_sign'=>($this->input->post('sign')));  
	// 		}else{
	// 			$data = array('IncidentNum'=>$this->Main_model->generate_IncidentNum(),
	// 							'CompanyID'=>$this->db->escape_str($this->input->post('a')),
	// 							'Initial_Incident'=>$this->db->escape_str($this->input->post('initial')),
	// 							'Incident_Date'=> $this->db->escape_str($this->input->post('b')),  
	// 							'Investigation_Date1'=> $date3,  
	// 							'Time'=>$this->db->escape_str($this->input->post('c')),
	// 							'DeptID'=>$this->db->escape_str($this->input->post('d')),  
	// 							'LocID'=>$this->db->escape_str($this->input->post('i')),
	// 							'ShortChart'=>($this->input->post('Ots'))=='' ?  ($this->input->post('Ott')) : $this->db->escape_str($this->input->post('Ots')),
	// 							'EmpID'=>($this->input->post('x'))!='' ?  ($this->input->post('xy')) : $this->db->escape_str($this->input->post('')),
	// 							'SpvID'=>$this->db->escape_str($this->input->post('sss')),
	// 							'EmpName'=>($this->input->post('x'))!='' ?  ($this->input->post('emname')) : $this->db->escape_str($this->input->post('')),
	// 							'SpvName'=>$this->db->escape_str($this->input->post('spvn')),
	// 							'Spv_email'=>$this->db->escape_str($this->input->post('email2')),
	// 							'Incident_type'=>$this->db->escape_str($this->input->post('ic')), 
	// 							'Shift'=>$this->db->escape_str($this->input->post('g')),  
	// 							'Vehicle_type'=>$this->db->escape_str($this->input->post('vehicle')),  
	// 							'Vehicle_id'=>$this->db->escape_str($this->input->post('VID')),  
	// 							'PropertyLost'=>($this->input->post('pro'))!='' ?  ($this->input->post('pro')) : $this->db->escape_str($this->input->post('')),
    //                             'NatureLost'=>($this->input->post('nat'))!='' ?  ($this->input->post('nat')) : $this->db->escape_str($this->input->post('')),
	// 							'Object_Involved'=>($this->input->post('obj'))!='' ?  ($this->input->post('obj')) : $this->db->escape_str($this->input->post('')),
	// 							'Amount_Spill'=>($this->input->post('amt'))!='' ?  ($this->input->post('amt')) : $this->db->escape_str($this->input->post('')),
	// 							'Nature_of_injury'=>$Injury,  
	// 							'Type_of_work1'=>$this->db->escape_str($this->input->post('ty')),  
	// 							'Part_affected'=>$Affected,  
	// 							'Type_of_contact'=>$Contact,  
	// 							'Contact_with'=>$With,  
	// 							'Incident_Desc'=>$this->db->escape_str($this->input->post('k')),  
	// 							'Nature_others'=>$this->db->escape_str($this->input->post('os')),  
	// 							'Part_affected_others'=>$this->db->escape_str($this->input->post('ot')),  
	// 							'T_Contact_others'=>$this->db->escape_str($this->input->post('ou')),  
	// 							'Contact_with_others'=>$this->db->escape_str($this->input->post('ov')),  
	// 							'Emp_statement'=>$this->db->escape_str($this->input->post('l')),
	// 							'Spv_statement'=> $this->db->escape_str($this->input->post('sps')),
	// 							'HOD_Name'=> $HID,
	// 							'Status'=>'Open',
	// 							'Image'=> $names,
	// 							'Supervisor_sign'=>($this->input->post('sign')));
	// 		}
	// 		//$ids = $this->db->escape_str($this->input->post('a')); 
	// 		//$ids = $data['TrackingNum']; 
	// 		$this->Main_model->insert('incident',$data);
    //         //redirect('Mailt/N_C_Observation/'.$ids);
    //         //redirect('User/success');
	// 		$ids = $data['IncidentNum'];  
	// 		$spvemail = $data['Spv_email'];  
	// 		$spvname = $data['SpvName'];  
	// 		if ($data['Incident_type']=='Injury' || $data['Incident_type']=='Occupational Illness'){
	// 			redirect('Mailt/N_C_Incident_HR/'.$ids.'/'.$spvemail.'/'.$spvname.'/'.$MAIL);
    //         }else{
	// 			redirect('Mailt/N_C_Incident/'.$ids.'/'.$spvemail.'/'.$spvname.'/'.$MAIL);
	// 		}
	// 	}else{		
	// 		$this->load->library("session");
	// 		$track['TrackingNum'] = $this->Main_model->generate_TrackNum();  
	// 		$rec['record'] = $this->Main_model->view_ordering('oc','TrackingNum','DESC');
	// 		$area  = $this->Main_model->view_ordering('area','AreaID','ASC');
	// 		$occ  = $this->Main_model->view_ordering('category','OCCategory','DESC'); 
	// 		$Com  = $this->Main_model->view_where('company',array('CompanyID'=> 'CBM'))->row_array();
	// 		$Cl  = $this->Main_model->view_ordering('customer','ProjectID','ASC'); 
	// 		$Em  = $this->Main_model->view_ordering('employee','EmpID','ASC'); 
	// 		$dep = $this->Main_model->view_ordering('department','DeptID','ASC');
	// 		$data = array('rows'=> $track, 'record'=> $rec, 'area'=>$area, 'OC'=>$occ, 'CO'=>$Com, 'Cl'=> $Cl, 'Em'=> $Em, 'dep'=>$dep); 
	// 		$this->template->load('template2','IncidentRecord',$data);   
	// 	}
	// }
	
	// function V_Category(){  
	// 	$data['record'] = $this->Main_model->view_ordering('category','OCCategory','DESC'); 
	// 	$this->template->load('template12','V_Category',$data);
	// }
	
	// function get_Loc(){
    //     $areaid = $this->input->post('AreaID',TRUE);
    //     $data = $this->Main_model->get_loc($areaid)->result();
    //     echo json_encode($data);
    // }
	
	// function get_SLoc(){
    //     $locid = $this->input->post('LocID',TRUE);
    //     $data = $this->Main_model->get_Sloc($locid)->result();
    //     echo json_encode($data);
    // }
	
	// function get_Area(){
    //     $areaid = $this->input->post('AreaID',TRUE);
    //     $data = $this->Main_model->get_Area($areaid)->result();
    //     echo json_encode($data);
    // }
	
	// function get_Loc2(){
    //     $LocID = $this->input->post('LocID',TRUE);
    //     $data = $this->Main_model->get_loc2($LocID)->result();
    //     echo json_encode($data);
    // }
	
	// function get_subloc(){
    //     $LocID = $this->input->post('LocID',TRUE);
    //     $data = $this->Main_model->get_subloc($LocID)->result();
    //     echo json_encode($data);
    // }
	
	public function success(){
		  $this->session->set_flashdata('success', 'Submit successfully');
		  redirect('User/Index');
	}
	
	function fetch()
	{
	  $output = '';
	  $query = '';
	  $this->load->model('Main_model');;
	  if($this->input->post('query'))
	  {
	   $query = $this->input->post('query');
	  }
	  $data = $this->Main_model->fetch_data($query);
	  $output .= '<td><select name="xy" id="xy" class="form-control" required >';	  
	  if($data->num_rows() > 0)
	  {
	   foreach($data->result() as $rowa)
	   {
		$output .=  '<option value='.$rowa->EmpID.'>'.$rowa->EmpID. '-' .$rowa->EmpName. '</option>'; 
		//$output .=  '<option name="emname"  id="emname"  value="'.$rowa->EmpName.'"> </option>';
		$output .=  '</td>'; 
			
		//$output .= '</select>';
	   }
	  }
	  else
	  {
	   $output .= '<tr> <td colspan="5">No Data Found</td> </tr>';
	  } 
	  echo $output;
	 } 
	
	function fetchspv()
	{
	  $output = '';
	  $query = '';
	  $this->load->model('Main_model');;
	  if($this->input->post('query'))
	  {
	   $query = $this->input->post('query');
	  }
	  $data = $this->Main_model->fetch_dataSPV($query);
	  $output .= '<td><select name="sss" id="sss" class="form-control" required  >';	  
	  if($data->num_rows() > 0)
	  {
	   foreach($data->result() as $rowa)
	   {
		//$output .=  '<option>elect Employee</option>'; 
		$output .=  '<option value='.$rowa->EmpID.'>'.$rowa->EmpID. '-' .$rowa->EmpName. '</option>'; 
		//$output .=  '<option name="emname"  id="emname"  value="'.$rowa->EmpName.'"> </option>';
		$output .=  '</td>'; 
			
		//$output .= '</select>';
	   }
	  }
	  else
	  {
	   $output .= '<tr> <td colspan="5">No Data Found</td> </tr>';
	  } 
	  echo $output;
	 } 
	 
	function fetch2(){
		$output2 = '';
		$query2 = '';
		$this->load->model('Main_model');;
		if($this->input->post('query2')){
			$query2 = $this->input->post('query2');
		}
		$data = $this->Main_model->fetch_data($query2);
		$output2 .= '<td><select name="emname" id="emname" class="form-control" required  >';	  
			if($data->num_rows() > 0){
				foreach($data->result() as $rowa){
					//$output2 .=  '<option value='.$rowa->EmpID.'>'.$rowa->EmpID. '-' .$rowa->EmpName. '</option>'; 
					$output2 .=  '<option value="'.$rowa->EmpName.'"> </option>';
					$output2 .=  '</td>'; 
					//$output .= '</select>';
				}
			}else{
					$output2 .= '<tr> <td colspan="5"></td> </tr>';
			} 
		echo $output2;
	}
	
	function fetch2spv()
	{
	  $output2 = '';
	  $query2 = '';
	  $this->load->model('Main_model');;
	  if($this->input->post('query2'))
	  {
	   $query2 = $this->input->post('query2');
	  }
	  $data = $this->Main_model->fetch_data($query2);
	  $output2 .= '<td><select name="spvn" id="spvn" class="form-control" required  >';	  
	  if($data->num_rows() > 0)
	  {
	   foreach($data->result() as $rowa)
	   {
		//$output2 .=  '<option value='.$rowa->EmpID.'>'.$rowa->EmpID. '-' .$rowa->EmpName. '</option>'; 
		$output2 .=  '<option value="'.$rowa->EmpName.'"> </option>';
		$output2 .=  '</td>'; 
			
		//$output .= '</select>';
	   }
	  }
	  else
	  {
	   $output2 .= '<tr> <td colspan="5"></td> </tr>';
	  } 
	  echo $output2;
	 } 	
	 
	function fetch3(){
		$output2 = '';
		$query2 = '';
		$this->load->model('Main_model');;
		if($this->input->post('query2')){
			$query2 = $this->input->post('query2');
		}
		$data = $this->Main_model->fetch_data($query2);
		$output2 .= '<td><select name="email" id="email" class="form-control" required  >';	  
			if($data->num_rows() > 0){
				foreach($data->result() as $rowa){
				//$output2 .=  '<option value='.$rowa->EmpID.'>'.$rowa->EmpID. '-' .$rowa->EmpName. '</option>'; 
				$output2 .=  '<option value="'.$rowa->email.'"> </option>';
				$output2 .=  '</td>'; 
				//$output .= '</select>';
				}
			}else{
				$output2 .= '<tr> <td colspan="5"></td> </tr>';
			} 
		echo $output2;
	} 
	
	function get_Emp(){
        $empid = $this->input->post('EmpID',TRUE);
        $data = $this->Main_model->get_Emp($empid)->result();
        echo json_encode($data);
    }

// 	function C_ItemCard(){ 
// 		//cek_session_admin(); 
		
// 		if (isset($_POST['submit'])){ 
// 		$name_array = array();
// 		$count = count($_FILES['userfile']['size']);
// 		foreach($_FILES as $key=>$value)
// 		for($s=0; $s<=$count-1; $s++) {
// 			$_FILES['userfile']['name']=$value['name'][$s];
// 			$_FILES['userfile']['type']    = $value['type'][$s];
// 			$_FILES['userfile']['tmp_name'] = $value['tmp_name'][$s];
// 			$_FILES['userfile']['error']       = $value['error'][$s];
// 			$_FILES['userfile']['size']    = $value['size'][$s];
// 			$config['upload_path'] = 'asset/images/Quality';
// 			$config['allowed_types'] = 'gif|jpg|png|ico|jpeg';
// 			$config['max_size'] = '200000'; // kb
// 			$this->load->library('upload', $config);
// 			$this->upload->do_upload();
// 			$data = $this->upload->data();
// 			$name_array[] = $data['file_name'];
// 		} 
// 		$dump3=array($this->db->escape_str($this->input->post('xy')), $this->db->escape_str($this->input->post('emname')));
// 		$Emp=implode('/', $dump3);  
// 		$names= implode(',', $name_array);
// 		if ($names ==''){  
// 			$data = array('CardNo'=>$this->Main_model->generate_iditem(),   
// 							'EmpID'=>$this->db->escape_str($this->input->post('xy')),
// 							//'EmpName'=>$this->db->escape_str($this->input->post('Name')),
// 							'EmpName'=>($this->input->post('x'))!='' ?  ($this->input->post('emname')) : $this->db->escape_str($this->input->post('')),
// 							'Company'=>$this->db->escape_str($this->input->post('company')),
// 							'Date'=>$this->db->escape_str($this->input->post('e')),
// 							'Items'=>$this->db->escape_str($this->input->post('item')),
// 							'Reason'=>$this->db->escape_str($this->input->post('reason')),
// 							'Status'=>$this->db->escape_str($this->input->post('m')));	  
// 		}else{
// 			$data = array('CardNo'=>$this->Main_model->generate_iditem(),   
// 							'EmpID'=>$this->db->escape_str($this->input->post('xy')),
// 							'EmpName'=>($this->input->post('x'))!='' ?  ($this->input->post('emname')) : $this->db->escape_str($this->input->post('')),
// 							'Company'=>$this->db->escape_str($this->input->post('company')),
// 							'Date'=>$this->db->escape_str($this->input->post('e')),
// 							'Items'=>$this->db->escape_str($this->input->post('item')),
// 							'Reason'=>$this->db->escape_str($this->input->post('reason')),
// 							'Status'=>$this->db->escape_str($this->input->post('m')),								
// 							'Image'=>$names);
// 		}
// 		//$ids = $this->db->escape_str($this->input->post('a')); 
// 		$ids = $data['CardNo']; 
// 		//$project = $data['Project_No']; 
// 		$this->Main_model->insert('items_status',$data);
// 		redirect('User/success');
// 		//redirect('Mailt/N_C_QualityObservation/'.$ids.'/'.$project);
		
// 	}else{
// 			//$track['TrackingNum'] = $this->Main_model->generate_TrackNum();  
// 			$rec['record'] = $this->Main_model->view_ordering('oc','TrackingNum','DESC');
// 			$area  = $this->Main_model->view_ordering('area','AreaID','ASC');
// 			$QC  = $this->Main_model->view_ordering('qualitycategory','Category','ASC'); 
// 			$Emp  = $this->Main_model->view_ordering('employee','EmpID','DESC'); 
// 			$Pro  = $this->Main_model->view_ordering('customer','ProjectID','DESC'); 
// 			$CO  = $this->Main_model->view_ordering('company','CompanyID','DESC'); 
// 			$Lo  = $this->Main_model->view_ordering('qlocation','LocID','ASC');
// 			//$items = $this->Main_model->viewAll('item_list');
// 			$qwerty = $this->Main_model->view_ordering('item_list', 'qty', 'ASC'); 
// 			$data = array( 'record'=> $rec, 'area'=>$area, 'QC'=>$QC, 'Emp'=>$Emp,'CO'=>$CO,'Lo'=>$Lo, 'Pro'=>$Pro, 'qwerty'=>$qwerty);   
// 			$this->template->load('template3','C_ItemCard',$data);
// 		} 
// }
	
// 	function C_Qoc(){ 
// 			//cek_session_admin(); 
// 			if (isset($_POST['submit'])){ 
// 			$name_array = array();
// 			$count = count($_FILES['userfile']['size']);
// 			foreach($_FILES as $key=>$value)
// 			for($s=0; $s<=$count-1; $s++) {
//                 $_FILES['userfile']['name']=$value['name'][$s];
//                 $_FILES['userfile']['type']    = $value['type'][$s];
//                 $_FILES['userfile']['tmp_name'] = $value['tmp_name'][$s];
//                 $_FILES['userfile']['error']       = $value['error'][$s];
//                 $_FILES['userfile']['size']    = $value['size'][$s];
//                 $config['upload_path'] = 'asset/images/Quality';
//                 $config['allowed_types'] = 'gif|jpg|png|ico|jpeg';
// 				$config['max_size'] = '200000'; // kb
//                 $this->load->library('upload', $config);
//                 $this->upload->do_upload();
//                 $data = $this->upload->data();
//                 $name_array[] = $data['file_name'];
// 			} 
// 			$dump3=array($this->db->escape_str($this->input->post('xy')), $this->db->escape_str($this->input->post('emname')));
// 			$Emp=implode('/', $dump3);  
// 			$names= implode(',', $name_array);
//             if ($names ==''){  
// 				$data = array('CardNo'=>$this->Main_model->generate_CardNo(), 
// 								'Raised_by'=> $Emp,  
// 								'Company'=>$this->db->escape_str($this->input->post('d')), 
// 								'Date'=>$this->db->escape_str($this->input->post('e')),
// 								'Location'=>$this->db->escape_str($this->input->post('lo')),
// 								'Sub_Location'=>$this->db->escape_str($this->input->post('sl')),
// 								'Project_No'=>$this->db->escape_str($this->input->post('P')),
// 								'Description_Observation'=>$this->db->escape_str($this->input->post('f')),    
// 								'Reference'=>$this->db->escape_str($this->input->post('re')),	  
// 								'Item_Desc'=>$this->db->escape_str($this->input->post('item')),	  
// 								'Suggestion'=>$this->db->escape_str($this->input->post('k')),	  
// 								'Specific_Location'=>$this->db->escape_str($this->input->post('spe')),	  
// 								'Status'=>$this->db->escape_str($this->input->post('m')));	  
// 			}else{
// 				$data = array('CardNo'=>$this->Main_model->generate_CardNo(), 
// 								'Raised_by'=>$Emp,    
// 								'Company'=>$this->db->escape_str($this->input->post('d')), 
// 								'Date'=>$this->db->escape_str($this->input->post('e')),
// 								'Location'=>$this->db->escape_str($this->input->post('lo')),
// 								'Sub_Location'=>$this->db->escape_str($this->input->post('sl')),
// 								'Project_No'=>$this->db->escape_str($this->input->post('P')),
// 								'Description_Observation'=>$this->db->escape_str($this->input->post('f')),    
// 								'Reference'=>$this->db->escape_str($this->input->post('re')),
// 								'Item_Desc'=>$this->db->escape_str($this->input->post('item')),								
// 								'Suggestion'=>$this->db->escape_str($this->input->post('k')),
// 								'Specific_Location'=>$this->db->escape_str($this->input->post('spe')),
// 								'Status'=>$this->db->escape_str($this->input->post('m')),								
// 								'Image'=>$names);
// 			}
// 			//$ids = $this->db->escape_str($this->input->post('a')); 
// 			$ids = $data['CardNo']; 
// 			$project = $data['Project_No']; 
// 			$this->Main_model->insert('qoc',$data);
//             //redirect('User/success');
// 			redirect('Mailt/N_C_QualityObservation/'.$ids.'/'.$project);
            
// 		}else{
// 				//$track['TrackingNum'] = $this->Main_model->generate_TrackNum();  
// 				$rec['record'] = $this->Main_model->view_ordering('oc','TrackingNum','DESC');
// 				$area  = $this->Main_model->view_ordering('area','AreaID','ASC');
// 				$QC  = $this->Main_model->view_ordering('qualitycategory','Category','ASC'); 
// 				$Emp  = $this->Main_model->view_ordering('employee','EmpID','DESC'); 
// 				$Pro  = $this->Main_model->view_ordering('customer','ProjectID','DESC'); 
// 				$CO  = $this->Main_model->view_ordering('company','CompanyID','DESC'); 
// 				$Lo  = $this->Main_model->view_ordering('qlocation','LocID','ASC'); 
// 				$data = array( 'record'=> $rec, 'area'=>$area, 'QC'=>$QC, 'Emp'=>$Emp,'CO'=>$CO,'Lo'=>$Lo, 'Pro'=>$Pro);   
// 				$this->template->load('template3','C_Qoc',$data);
// 			} 
// 	}
	
// 	function C_ioc(){ 
// 		//cek_session_admin(); 
// 		if (isset($_POST['submit'])){ 
// 		$name_array = array();
// 		$count = count($_FILES['userfile']['size']);
// 		foreach($_FILES as $key=>$value)
// 		for($s=0; $s<=$count-1; $s++) {
// 			$_FILES['userfile']['name']=$value['name'][$s];
// 			$_FILES['userfile']['type']    = $value['type'][$s];
// 			$_FILES['userfile']['tmp_name'] = $value['tmp_name'][$s];
// 			$_FILES['userfile']['error']       = $value['error'][$s];
// 			$_FILES['userfile']['size']    = $value['size'][$s];
// 			$config['upload_path'] = 'asset/images/Quality';
// 			$config['allowed_types'] = 'gif|jpg|png|ico|jpeg';
// 			$config['max_size'] = '200000'; // kb
// 			$this->load->library('upload', $config);
// 			$this->upload->do_upload();
// 			$data = $this->upload->data();
// 			$name_array[] = $data['file_name'];
// 		} 
// 		$dump3=array($this->db->escape_str($this->input->post('xy')), $this->db->escape_str($this->input->post('emname')));
// 		$Emp=implode('/', $dump3);  
// 		$names= implode(',', $name_array);
// 		if ($names ==''){  
// 			$data = array('CardNo'=>$this->Main_model->generate_iditem(), 
// 							'Raised_by'=> $Emp,  
// 							'Company'=>$this->db->escape_str($this->input->post('d')), 
// 							'Date'=>$this->db->escape_str($this->input->post('e')),
// 							'Location'=>$this->db->escape_str($this->input->post('lo')),
// 							'Sub_Location'=>$this->db->escape_str($this->input->post('sl')),
// 							'Project_No'=>$this->db->escape_str($this->input->post('P')),
// 							'Description_Observation'=>$this->db->escape_str($this->input->post('f')),    
// 							'Reference'=>$this->db->escape_str($this->input->post('re')),	  
// 							'Item_Desc'=>$this->db->escape_str($this->input->post('item')),	  
// 							'Suggestion'=>$this->db->escape_str($this->input->post('k')),	  
// 							'Specific_Location'=>$this->db->escape_str($this->input->post('spe')),	  
// 							'Status'=>$this->db->escape_str($this->input->post('m')));	  
// 		}else{
// 			$data = array('CardNo'=>$this->Main_model->generate_iditem(), 
// 							'Raised_by'=>$Emp,    
// 							'Company'=>$this->db->escape_str($this->input->post('d')), 
// 							'Date'=>$this->db->escape_str($this->input->post('e')),
// 							'Location'=>$this->db->escape_str($this->input->post('lo')),
// 							'Sub_Location'=>$this->db->escape_str($this->input->post('sl')),
// 							'Project_No'=>$this->db->escape_str($this->input->post('P')),
// 							'Description_Observation'=>$this->db->escape_str($this->input->post('f')),    
// 							'Reference'=>$this->db->escape_str($this->input->post('re')),
// 							'Item_Desc'=>$this->db->escape_str($this->input->post('item')),								
// 							'Suggestion'=>$this->db->escape_str($this->input->post('k')),
// 							'Specific_Location'=>$this->db->escape_str($this->input->post('spe')),
// 							'Status'=>$this->db->escape_str($this->input->post('m')),								
// 							'Image'=>$names);
// 		}
// 		//$ids = $this->db->escape_str($this->input->post('a')); 
// 		$ids = $data['CardNo']; 
// 		$project = $data['Project_No']; 
// 		$this->Main_model->insert('ioc',$data);
// 		redirect('User/success');
// 		//redirect('Mailt/N_C_QualityObservation/'.$ids.'/'.$project);
		
// 	}else{
// 			//$track['TrackingNum'] = $this->Main_model->generate_TrackNum();  
// 			$rec['record'] = $this->Main_model->view_ordering('oc','TrackingNum','DESC');
// 			$area  = $this->Main_model->view_ordering('area','AreaID','ASC');
// 			$QC  = $this->Main_model->view_ordering('qualitycategory','Category','ASC'); 
// 			$Emp  = $this->Main_model->view_ordering('employee','EmpID','DESC'); 
// 			$Pro  = $this->Main_model->view_ordering('customer','ProjectID','DESC'); 
// 			$CO  = $this->Main_model->view_ordering('company','CompanyID','DESC'); 
// 			$Lo  = $this->Main_model->view_ordering('qlocation','LocID','ASC');
// 			$Items  = $this->Main_model->view_ordering('item_list','items_id','ASC');
// 			//$Com  = $this->Main_model->view_where('company',array('CompanyID'=> 'CBM'))->row_array(); 
// 			$data = array( 'record'=> $rec, 'area'=>$area, 'QC'=>$QC, 'Emp'=>$Emp,'CO'=>$CO,'Lo'=>$Lo, 'Pro'=>$Pro, 'Item'=>$Items);   
// 			$this->template->load('template3','C_Ioc',$data);
// 		} 
// }
	
// 	function C_Qoc2(){ 
// 			//cek_session_admin();
//         if (isset($_POST['submit'])){
// 			//$track['TrackingNum'] = $this->Main_model->generate_TrackNum(); 
// 			//$dump=array($this->db->escape_str($this->input->post('a')), $this->db->escape_str($this->input->post('s')));
// 			//$Raisedby=implode('/', $dump);
// 			$dump3=array($this->db->escape_str($this->input->post('xy')), $this->db->escape_str($this->input->post('emname')));
// 			$Emp=implode('/', $dump3);
// 			$config['upload_path'] = 'asset/images/Quality';
//             $config['allowed_types'] = 'gif|jpg|png|ico|jpeg';
//             $config['max_size'] = '200000'; // kb
//             $this->load->library('upload', $config);
//             $this->upload->do_upload('l');
//             $hasil=$this->upload->data();   
//             if ($hasil['file_name']==''){  
// 				$data = array('CardNo'=>$this->Main_model->generate_CardNo(),
// 								//'OCType'=> ($this->input->post('otherAnswer'))=='' ? $this->db->escape_str($this->input->post('b')) : $this->db->escape_str($this->input->post('otherAnswer')), 
// 								//'Raised_by'=> $Raisedby,  
// 								'Raised_by'=> $Emp,  
// 								'Company'=>$this->db->escape_str($this->input->post('d')), 
// 								'Date'=>$this->db->escape_str($this->input->post('e')),
// 								'Location'=>$this->db->escape_str($this->input->post('lo')),
// 								'Sub_Location'=>$this->db->escape_str($this->input->post('sl')),
// 								'Project_No'=>$this->db->escape_str($this->input->post('P')),
// 								'Description_Observation'=>$this->db->escape_str($this->input->post('f')),    
// 								'Reference'=>$this->db->escape_str($this->input->post('re')),	
// 								'Item_Desc'=>$this->db->escape_str($this->input->post('item')),
// 								'Suggestion'=>$this->db->escape_str($this->input->post('k')),	  
// 								'Specific_Location'=>$this->db->escape_str($this->input->post('spe')),	  
// 								'Status'=>$this->db->escape_str($this->input->post('m')));	  
// 			}else{
// 				$data = array('CardNo'=>$this->Main_model->generate_CardNo(),
// 								//'OCType'=> ($this->input->post('otherAnswer'))=='' ? $this->db->escape_str($this->input->post('b')) : $this->db->escape_str($this->input->post('otherAnswer')), 
// 								//'Raised_by'=>$Raisedby,   
// 								'Raised_by'=> $Emp, 								
// 								'Company'=>$this->db->escape_str($this->input->post('d')), 
// 								'Date'=>$this->db->escape_str($this->input->post('e')),
// 								'Location'=>$this->db->escape_str($this->input->post('lo')),
// 								'Sub_Location'=>$this->db->escape_str($this->input->post('sl')),
// 								'Project_No'=>$this->db->escape_str($this->input->post('P')),
// 								'Description_Observation'=>$this->db->escape_str($this->input->post('f')),    
// 								'Reference'=>$this->db->escape_str($this->input->post('re')),
// 								'Item_Desc'=>$this->db->escape_str($this->input->post('item')),								
// 								'Suggestion'=>$this->db->escape_str($this->input->post('k')),
// 								'Specific_Location'=>$this->db->escape_str($this->input->post('spe')),
// 								'Status'=>$this->db->escape_str($this->input->post('m')),								
// 								'Image'=>$hasil['file_name']);	 
// 			}
// 			//$ids = $this->db->escape_str($this->input->post('a')); 
// 			$ids = $data['CardNo']; 
// 			$project = $data['Project_No']; 
// 			$this->Main_model->insert('qoc',$data);
//             //redirect('User/success');
// 			redirect('Mailt/N_C_QualityObservation/'.$ids.'/'.$project);
            
// 		}else{
// 				//$track['TrackingNum'] = $this->Main_model->generate_TrackNum();  
// 				$rec['record'] = $this->Main_model->view_ordering('oc','TrackingNum','DESC');
// 				$area  = $this->Main_model->view_ordering('area','AreaID','ASC');
// 				$QC  = $this->Main_model->view_ordering('qualitycategory','Category','ASC'); 
// 				$Emp  = $this->Main_model->view_ordering('employee','EmpID','DESC'); 
// 				$Pro  = $this->Main_model->view_ordering('customer','ProjectID','DESC'); 
// 				$CO  = $this->Main_model->view_ordering('company','CompanyID','DESC'); 
// 				$Lo  = $this->Main_model->view_ordering('qlocation','LocID','ASC'); 
// 				$data = array( 'record'=> $rec, 'area'=>$area, 'QC'=>$QC, 'Emp'=>$Emp,'CO'=>$CO,'Lo'=>$Lo, 'Pro'=>$Pro);   
// 				$this->template->load('template3','C_Qoc2',$data);
// 			} 
// 	} 
	
	public function EmployeeList(){
		// POST data
		$postData = $this->input->post(); 
		// Get data
		$data = $this->Main_model->getEmployee($postData); 
		echo json_encode($data);
	}  
	
	function Help_Quality(){
		$this->template->load('template_help','Help_Quality');
	}
	
	function Help_HSE(){
		$this->template->load('template_help_hse','Help_HSE');
	}
}
