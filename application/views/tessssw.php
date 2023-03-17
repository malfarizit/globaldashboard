<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Spv extends CI_Controller {

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
		if (isset($_POST['submit'])){
			$username = $this->input->post('u');
			$password = md5($this->input->post('p'));
			$cek = $this->Main_model->cek_login($username,$password,'user');
		    $row = $cek->row_array();
		    $total = $cek->num_rows();
			if ($total > 0){
				$this->session->set_userdata('upload_image_file_manager',true);
				$this->session->set_userdata(array('username'=>$row['username'],
													'level'=>$row['level'], 
													'DeptID'=>$row['DeptID'], 
													'email'=>$row['Email'], 
													'position'=>$row['Position'], 
													'id_session'=>$row['id_session']));
				if ($this->session->level=='admin'){
					redirect('Main/home');
				}else if ($this->session->level=='user' && $this->session->position=='HOD' ){
					redirect('Hod/home'); 
				}else if ($this->session->level=='user' && $this->session->position=='SPV' ){
					redirect('Spv/home');
				} 
			}else{
				$data['title'] = 'Username atau Password salah!';
				$this->load->view('Admin/V_Login',$data);
			}
		}else{ 
			 redirect('User/Index');
		}
	}
	  
	function home(){ 
		cek_session_hod();
		if($this->session->hak_akses!='QUALITY'){ 
			//$data['record'] = $this->Main_model->view_ordering('user','username','DESC');  
			$data['graph'] = $this->Main_model->graph();
			$this->template->load('Spv/template','Spv/V_Home', $data);
			//redirect('Main/home'); 
		}else{
			redirect('Spv/home_quality');
		}
	}
	
	function home_quality(){ 
		cek_session_hod();  
		//$data['record'] = $this->Main_model->view_ordering('user','username','DESC');  
		//$data['graph'] = $this->Main_model->graph();
		$aa['report'] = $this->Main_model->month_quality(); 
		$ab['report'] = $this->Main_model->year_quality(); 
		$ac['report'] = $this->Main_model->status(); 
		$ad['report'] = $this->Main_model->dept(); 
		//$ad['report'] = $this->Main_model->progres(); 
		$ae['report'] = $this->Main_model->dept_open(); 
		$af['report'] = $this->Main_model->dept_closed(); 
		$ag['report'] = $this->Main_model->dept_all(); 
		$xx['report'] = $this->Main_model->progres(); 
		$wsa['report'] = $this->Main_model->action(); 
		$data = array('report10'=>$aa['report'],'report11'=>$ab['report']); 
		$this->template->load('Spv/template','Spv/V_Home_Quality', $data);
		//redirect('Main/home');  
        
	}
	  
	function V_Observation(){ 
		 cek_session_hod();
		$data['record'] = $this->Main_model->view_ordering('oc','TrackingNum','DESC');  
		$this->template->load('Spv/template','Spv/V_Observation',$data);
	}
	
	function V_ObservationDetail(){
		cek_session_hod();		
		$trackid = $this->uri->segment(3);
		$com = $this->uri->segment(4);
		$track= $this->Main_model->view_detail('oc', array('TrackingNum' => $trackid ))->row_array();  
		$data = array('rows'=>$track);  
		$this->template->load('Spv/template','Spv/V_ObservationDetail',$data);
	}
	  
	function logout(){
		$array_items = array('username', 'level','email','id_session');
		$this->session->unset_userdata($array_items);   
		$this->session->sess_destroy();
		$this->load->helper('cookie');
		delete_cookie('id_session');
		delete_cookie('username'); 
		redirect('Main/V_Login');
	}
	
	function V_ActionPlan(){
		cek_session_hod(); 
		$Dept=$this->Main_model->view_where('user', array('username'=> $this->session->username))->row_array();
		$REC = $this->Main_model->view_ordering('actionplan','ActionNum','DESC');  
		$data=array('record'=> $REC, 'Dept'=>$Dept);
		$this->template->load('Spv/template','Spv/V_ActionPlan',$data);
	}
	
	function C_ActionPlan(){
		cek_session_hod();
        if (isset($_POST['submit'])){
			$config['upload_path'] = 'asset/images/After';
		//$config['allowed_types'] = 'gif|jpg|png|ico|jpeg|mp4|jfif';
		$config['allowed_types'] = '*';
            $config['max_size'] = '200000'; // kb
            $this->load->library('upload', $config);
            $this->upload->do_upload('g'); 
            $hasil=$this->upload->data();  
            if ($hasil['file_name']=='' ){ 
				$data = array('TrackingNum'=>$this->db->escape_str($this->input->post('a')), 
                                'ActionNum'=>$this->db->escape_str($this->input->post('b')),
                                'Action'=>$this->db->escape_str($this->input->post('c')),
                                'EmpName'=>$this->db->escape_str($this->input->post('d')),
                                'ImplementDate'=>$this->db->escape_str($this->input->post('e')), 
                                'Status'=>$this->db->escape_str($this->input->post('f')));	
				$data2 = array('Action'=>$this->db->escape_str($this->input->post('c')),
                                'EmpName'=>$this->db->escape_str($this->input->post('d')),
                                'ImplementDate'=>$this->db->escape_str($this->input->post('e')), 
                                'Status'=>$this->db->escape_str($this->input->post('f')));	
			}else{
				$data = array('TrackingNum'=>$this->db->escape_str($this->input->post('a')), 
								'ActionNum'=>$this->db->escape_str($this->input->post('b')),
								'Action'=>$this->db->escape_str($this->input->post('c')),
								'EmpName'=>$this->db->escape_str($this->input->post('d')),
								'ImplementDate'=>$this->db->escape_str($this->input->post('e')), 
								'Status'=>$this->db->escape_str($this->input->post('f')),
								'AfterAction'=>$hasil['file_name'] );
				$data2 = array('Action'=>$this->db->escape_str($this->input->post('c')),
								'EmpName'=>$this->db->escape_str($this->input->post('d')),
								'ImplementDate'=>$this->db->escape_str($this->input->post('e')), 
								'Status'=>$this->db->escape_str($this->input->post('f')),
								'AfterAction'=>$hasil['file_name']);
			}
			$where = array('TrackingNum' => $this->input->post('a')); 
			$this->Main_model->insert('actionplan',$data);
			$this->Main_model->update('oc', $data2, $where);
            redirect('Main/Success');
		}else{
				$where="Status='Open'";
				$act['ActionNum'] = $this->Main_model->generate_ActNum(); 
				$tracks= $this->Main_model->view_ordering2('oc', $where); 
				$empname  = $this->Main_model->view_ordering('employee','EmpID','ASC'); 
				$data = array('rows'=> $act,'name'=>$empname,'tr'=>$tracks);  
				$this->template->load('Spv/template','Spv/C_ActionPlan',$data); 
			} 
		} 
		
	function C_ActionPlan2(){
		cek_session_hod();
        if (isset($_POST['submit'])){
			$config['upload_path'] = 'asset/images/After';
			//$config['allowed_types'] = 'gif|jpg|png|ico|jpeg|MP4|jfif';
			$config['allowed_types'] = '*';
            $config['max_size'] = '20000'; // kb
            $this->load->library('upload', $config);
            $this->upload->do_upload('h','i');  
            $hasil=$this->upload->data();   
            if ($hasil['file_name']=='' ){ 
				$data = array('TrackingNum'=>$this->db->escape_str($this->input->post('a')), 
                                'CompanyID'=>$this->db->escape_str($this->input->post('b')),
                                'ActionNum'=>$this->db->escape_str($this->input->post('c')),
                                'Action'=>$this->db->escape_str($this->input->post('d')),
                                'EmpName'=>$this->db->escape_str($this->input->post('e')),
                                'ImplementDate'=>$this->db->escape_str($this->input->post('f')), 
                                'Status'=>$this->db->escape_str($this->input->post('g')),	
                                'username'=>$this->session->userdata('username'));	
				$data2 = array('Action'=>$this->db->escape_str($this->input->post('d')),
                                'EmpName'=>$this->db->escape_str($this->input->post('e')),
                                'ImplementDate'=>$this->db->escape_str($this->input->post('f')), 
                                'Status'=>$this->db->escape_str($this->input->post('g')));	
			}else{
				$data = array('TrackingNum'=>$this->db->escape_str($this->input->post('a')), 
								'CompanyID'=>$this->db->escape_str($this->input->post('b')),
								'ActionNum'=>$this->db->escape_str($this->input->post('c')),
								'Action'=>$this->db->escape_str($this->input->post('d')),
								'EmpName'=>$this->db->escape_str($this->input->post('e')),
								'ImplementDate'=>$this->db->escape_str($this->input->post('f')), 
								'Status'=>$this->db->escape_str($this->input->post('g')),
								'username'=>$this->session->userdata('username'),
								'AfterAction'=>$hasil['file_name']);
				$data2 = array('Action'=>$this->db->escape_str($this->input->post('d')),
								'EmpName'=>$this->db->escape_str($this->input->post('e')),
								'ImplementDate'=>$this->db->escape_str($this->input->post('f')), 
								'Status'=>$this->db->escape_str($this->input->post('g')),
								'AfterAction'=>$hasil['file_name']);
			}
			$where = array('TrackingNum' => $this->input->post('a')); 
			$this->Main_model->insert('actionplan',$data);
			$this->Main_model->update('oc', $data2, $where);
            redirect('Main/Success');
		}else{
				$trackid = $this->uri->segment(3);  
				$track= $this->Main_model->view_detail('oc', array('TrackingNum' => $trackid ))->row_array();  
				$act['ActionNum'] = $this->Main_model->generate_ActNum(); 
				$empname  = $this->Main_model->view_ordering('employee','EmpID','ASC'); 
				$data = array('rows'=> $act,'name'=>$empname, 'tr'=>$track);  
				$this->template->load('Spv/template','Spv/C_ActionPlan2',$data); 
			} 
		}
	
	function U_ActionPlan(){
		cek_session_hod();
        // cek_session_akses('templatewebsite',$this->session->id_session);
        $id = $this->uri->segment(3);
        $tr = $this->uri->segment(4);
        if (isset($_POST['submit'])){
		$config['upload_path'] = 'asset/images/After';
		//$config['allowed_types'] = 'gif|jpg|png|ico|jpeg|mp4|jfif';
		$config['allowed_types'] = '*';
        $config['max_size'] = '200000'; // kb
        $this->load->library('upload', $config);
        $this->upload->do_upload('g'); 
        $hasil=$this->upload->data();  
        if ($hasil['file_name']=='' ){ 
           $data = array('ActionProgress'=>$this->db->escape_str($this->input->post('c')), 
								'Remark'=>($this->input->post('c'))=='In Progress' ? $this->db->escape_str($this->input->post('remark')) : $this->db->escape_str($this->input->post('')),
								'DueDate'=>($this->input->post('c'))=='In Progress' ? $this->db->escape_str($this->input->post('complete')) : $this->db->escape_str($this->input->post('')),
								'Action'=>($this->input->post('c'))=='Done' ? $this->db->escape_str($this->input->post('d')) : $this->db->escape_str($this->input->post('')), 
                                'ImplementDate'=>date('Ymd'));	 
		}else{
				$data = array('ActionProgress'=>$this->db->escape_str($this->input->post('c')), 
								'Remark'=>($this->input->post('c'))=='In Progress' ? $this->db->escape_str($this->input->post('remark')) : $this->db->escape_str($this->input->post('')),
								'DueDate'=>($this->input->post('c'))=='In Progress' ? $this->db->escape_str($this->input->post('complete')) : $this->db->escape_str($this->input->post('')),
								'Action'=>$this->db->escape_str($this->input->post('d')),
								'ImplementDate'=>date('Ymd'),   
								'AfterAction'=>$hasil['file_name']);  
				}								
			$where = array('ActionNum' => $this->input->post('a')); 
            $this->Main_model->update('actionplan', $data, $where); 
			$dt=($this->input->post('c'));
			$ids=($this->input->post('a')); 
			if ($dt=='In Progress'){
				redirect('Mailt/N_U_ActionPlanInProgress/'.$ids);
			}else if($dt=='Done'){
            redirect('Mailt/N_U_ActionPlanDone/'.$ids);
			}
        }else{ 
			//$proses = $this->Main_model->edit('actionplan', array('ActionNum' => $id))->row_array();
			$proses= $this->Main_model->view_join_2('actionplan','oc','area','location','LocID','AreaID','TrackingNum','ActionNum',$id);
			$track = $this->Main_model->view_detail('oc', array('TrackingNum' => $tr))->row_array();
            $data = array('rows' => $proses,'tr'=>$track);
            $this->template->load('Spv/template','Spv/U_ActionPlan',$data);
        }
    } 
		
	function V_ActionPlanDetail(){ 
		cek_session_hod(); 
		$actid = $this->uri->segment(3);
		$tr = $this->uri->segment(4);
		//$act= $this->Main_model->view_detail('actionplan', array('ActionNum' => $actid))->row_array(); 
		$act= $this->Main_model->view_join_2('actionplan','oc','area','location','LocID','AreaID','TrackingNum','ActionNum',$actid); 				
		$track= $this->Main_model->view_detail('oc', array('TrackingNum' => $tr))->row_array();  
		$data = array('rows'=>$act,'tr'=>$track);  
		$this->template->load('Spv/template','Spv/V_ActionPlanDetail',$data);
	} 
	
	function V_Quality(){  
		cek_session_hod();
		//$ema='moritt776@gmail.com';
		$ema=$this->session->userdata('email');			
		//$where="Status !=Open and a Like '%".$ema."%";  
		//'%".$postData['search']."%' 
		$data['record'] = $this->Main_model->view_orderwhere('qoc', $ema);
		$this->template->load('Spv/template','Spv/V_Quality',$data);
	}
	
	function U_QualityDetail(){ 
		cek_session_hod();  
        // cek_session_akses('templatewebsite',$this->session->id_session);
        $cardid = $this->uri->segment(3);
		if (isset($_POST['submit'])){
		$config['upload_path'] = 'asset/images/Evidence';
		//$config['allowed_types'] = 'gif|jpg|png|ico|jpeg|mp4|jfif';
		$config['allowed_types'] = '*';
        $config['max_size'] = '200000'; // kb
        $this->load->library('upload', $config);
        $this->upload->do_upload('im'); 
        $hasil=$this->upload->data();  
        if ($hasil['file_name']=='' ){ 
            $data = array(  'Action'=>$this->db->escape_str($this->input->post('l')),
							'Status'=>($this->input->post('sst')), 
							'Target_Date'=>($this->input->post('m')));
		}else{
			$data = array('Action'=>$this->db->escape_str($this->input->post('l')),
						'Status'=>($this->input->post('sst')), 
						'Target_Date'=>($this->input->post('m'))); 
			}	
			$where = array('CardNo' =>  $this->input->post('a')) ;
			//$ids=$this->db->escape_str($this->input->post('no')); 
			$car=$this->db->escape_str($this->input->post('a')); 
            $this->Main_model->update('qoc', $data, $where);            
           //redirect('User/V_Quality');
           redirect('Mailt/N_U_QualityAction/'.$car); 
        }else{
			$QC  = $this->Main_model->view_ordering('qualitycategory','Category','ASC');
			$Sect  = $this->Main_model->view_ordering('section','SectionID','ASC'); 			
			//$cardno=$this->Main_model->view_detail('qoc', array('CardNo' => $cardid ))->row_array(); 
			$cardno= $this->Main_model->view_join_7('qoc','qlocation','sublocation','Sub_Location','Sub_Name','Location','LocID','CardNo',$cardid);		
			$Emp  = $this->Main_model->view_ordering('employee','EmpID','DESC'); 			
			$data = array('rows'=>$cardno, 'QC'=>$QC, 'Emp'=>$Emp, 'Section'=>$Sect);  
			$this->template->load('Spv/template','Spv/U_QualityDetail',$data);
        }  
	}
	
	function V_QualityDetail(){ 
		cek_session_hod();
		$cardid = $this->uri->segment(3);		
        // cek_session_akses('templatewebsite',$this->session->id_session); 
		$QC  = $this->Main_model->view_ordering('qualitycategory','Category','ASC');
		$Sect  = $this->Main_model->view_ordering('section','SectionID','ASC'); 			
		//$cardno=$this->Main_model->view_detail('qoc', array('CardNo' => $cardid ))->row_array(); 
		$cardno= $this->Main_model->view_join_7('qoc','qlocation','sublocation','Sub_Location','Sub_Name','Location','LocID','CardNo',$cardid);		
		$Emp  = $this->Main_model->view_ordering('employee','EmpID','DESC'); 			
		$data = array('rows'=>$cardno, 'QC'=>$QC, 'Emp'=>$Emp, 'Section'=>$Sect);  
		$this->template->load('Spv/template','Spv/V_QualityDetail',$data); 
	}
	
	function V_Location(){
		cek_session_hod(); 
		$data['record'] = $this->Main_model->view_ordering('Location','LocName','DESC'); 
		$this->template->load('Spv/template','Spv/V_Location',$data);
	}   
	
	function V_Incident(){  
		cek_session_hod();
		$data['record'] = $this->Main_model->view_ordering('incident','IncidentNum','DESC');  
		$this->template->load('Spv/template','Spv/V_Incident',$data);
	}
	
	function V_IncidentDetail(){ 
		cek_session_hod();
		$incidentid = $this->uri->segment(3); 
		//$locid = $this->uri->segment(5);
		$empid = $this->uri->segment(4);
		$incident= $this->Main_model->view_detail('incident', array('IncidentNum' => $incidentid ))->row_array();
		//$inc= $this->Main_model->view_join_3('incident','area','location','LocID','AreaID','TrackingNum','IncidentNum',$incidentid);			
		//$loc= $this->Main_model->view_detail('location', array('LocID' => $locid ))->row_array();  
		$emp= $this->Main_model->view_detail('employee', array('EmpID' => $empid ))->row_array();  
		$data = array('rows'=>$incident,'emp'=>$emp);  
		$this->template->load('Spv/template','Spv/V_IncidentDetail',$data);
	}
	
	function U_IncidentDetail(){ 
		cek_session_hod();
		$incidentid = $this->uri->segment(3); 
		if (isset($_POST['submit'])){
			$data = array('Spv_statement'=> $this->input->post('ss'),
							'Supervisor_sign'=>($this->input->post('sign')),
							'spv_apv_date' => date('Ymd')); 
			$where = array('IncidentNum' => $this->input->post('a')); 
            $this->Main_model->update('incident', $data, $where);            
			//redirect('Spv/V_Incident');
			$ids = $this->input->post('a');   
			redirect('Mailt/N_SPV_Sign/'.$ids); 
        }else{ 
			$incident= $this->Main_model->view_detail('incident', array('IncidentNum' => $incidentid ))->row_array();
			//$inc= $this->Main_model->view_join_3('incident','area','location','LocID','AreaID','TrackingNum','IncidentNum',$incidentid);			
			//$loc= $this->Main_model->view_detail('location', array('LocID' => $locid ))->row_array();   
			$data = array('rows'=>$incident);  
			$this->template->load('Spv/template','Spv/U_IncidentDetail',$data);
		}
	}
	
	function U_Bypass_IncidentDetail(){ 
		cek_session_hod();
		$incidentid = $this->uri->segment(3); 
		if (isset($_POST['submit'])){
			$data = array('Spv_statement'=> $this->input->post('ss'),
							'Supervisor_sign'=>($this->input->post('sign')),
							'spv_apv_date' => date('Ymd')); 
			$where = array('IncidentNum' => $this->input->post('a')); 
            $this->Main_model->update('incident', $data, $where);            
			//redirect('Spv/V_Incident');
			$ids = $this->input->post('a');   
			redirect('Mailt/N_SPV_Sign/'.$ids); 
        }else{ 
			$incident= $this->Main_model->view_detail('incident', array('IncidentNum' => $incidentid ))->row_array();
			//$inc= $this->Main_model->view_join_3('incident','area','location','LocID','AreaID','TrackingNum','IncidentNum',$incidentid);			
			//$loc= $this->Main_model->view_detail('location', array('LocID' => $locid ))->row_array();   
			$data = array('rows'=>$incident);  
			$this->template->load('Spv/template','Spv/U_Bypass_IncidentDetail',$data);
		}
	}
	
	
	function C_Investigation(){
		cek_session_hod();
        if (isset($_POST['submit'])){
			$Cond =  implode(',', $this->input->post( 'Condition' , TRUE ) );
			$Practice =  implode(',', $this->input->post( 'Practice' , TRUE ) );
			//$Severity =  implode(',', $this->input->post( 'Severity' , TRUE ) );
			$PFactor =  implode(',', $this->input->post( 'Personal' , TRUE ) );
			$JFactor =  implode(',', $this->input->post( 'Job' , TRUE ) );
			$Lack =  implode(',', $this->input->post( 'Lack' , TRUE ) );
			$Member =  implode(';', $this->input->post( 'Member' , TRUE ) );
			$Witness =  implode(';', $this->input->post( 'Witness' , TRUE ) );
			$Cause =  implode(';', $this->input->post( 'cas' , TRUE ) );
			$Corrective =  implode(';', $this->input->post( 'cor' , TRUE ) ); 
			$Responsible =  implode(';', $this->input->post( 'responsible' , TRUE ) );
			$Tardate =  implode(';', $this->input->post( 'tardate' , TRUE ) );
			$Tar2 =  $this->input->post('tardate');
			$Actdate =  implode(';', $this->input->post( 'actdate' , TRUE ) );
			
			$count = count($_FILES['userfile']['size']);
			foreach($_FILES as $key=>$value)
			for($s=0; $s<=$count-1; $s++) {
                $_FILES['userfile']['name']=$value['name'][$s];
                $_FILES['userfile']['type']    = $value['type'][$s];
                $_FILES['userfile']['tmp_name'] = $value['tmp_name'][$s];
                $_FILES['userfile']['error']       = $value['error'][$s];
                $_FILES['userfile']['size']    = $value['size'][$s];
                $config['upload_path'] = 'asset/images/Investigation';
                $config['allowed_types'] = 'gif|jpg|png|ico|jpeg';
				$config['max_size'] = '200000'; // kb
                $this->load->library('upload', $config);
                $this->upload->do_upload();
                $data = $this->upload->data();
                $name_array[] = $data['file_name'];
			} $names= implode('/', $name_array);    
            if ($names==''){ 
				$data = array('InvestigationNum'=>$this->db->escape_str($this->input->post('h')), 
                                'IncidentNum'=>$this->db->escape_str($this->input->post('a')), 
                                'CompanyID'=>$this->db->escape_str($this->input->post('b')), 
								'Investigation_Date'=> $this->db->escape_str($this->input->post('i')),
                                'Leading_Investigation'=>$this->db->escape_str($this->input->post('lead')),
                                'Responsible_person'=>$Responsible, 
                                'Incident_Severity'=>$this->db->escape_str($this->input->post('Severity')), 
                                'Investigation_level'=>$this->db->escape_str($this->input->post('il')),	
                                'Incident_Seriousness'=>$this->db->escape_str($this->input->post('is')),	
                                'Recordable'=>$this->db->escape_str($this->input->post('REC')),	
                                'Substandard_Practice'=>$Practice,  
								'Explanation1'=>$this->db->escape_str($this->input->post('Ex1')),	
                                'Others1'=>$this->db->escape_str($this->input->post('prac')),	
                                'Substandard_Condition'=>$Cond, 
								'Explanation2'=>$this->db->escape_str($this->input->post('Ex2')),
								'Others2'=>$this->db->escape_str($this->input->post('con')),	
                                'Personal_factor'=>$PFactor,	
								'Explanation3'=>$this->db->escape_str($this->input->post('Ex3')),
								'Others3'=>$this->db->escape_str($this->input->post('perso')),	
                                'Job_factor'=>$JFactor,
								'Explanation4'=>$this->db->escape_str($this->input->post('Ex4')),
								'Others4'=>$this->db->escape_str($this->input->post('job')),	
                                'Lack_of_control'=>$Lack,	
								'Explanation5'=>$this->db->escape_str($this->input->post('Ex5')),
								'Others5'=>$this->db->escape_str($this->input->post('lac')),	 
                                'Cause'=>$$Cause,	 
                                'Other_Member'=>$Member,
								'List_Witness'=>$Witness,
								'Witness_statement'=>$this->db->escape_str($this->input->post('wit')),	 
								'Status'=>'In Progress',	 
                                'Correct_preven_act'=>$Corrective,
								'Target_Completion_Date'=>$Tardate,								
								'Actual_Completion_Date'=>$Actdate);
				$data2 = array('Investigation_Date1'=>$this->db->escape_str($this->input->post('i')));				
			}else{
				$data = array('InvestigationNum'=>$this->db->escape_str($this->input->post('h')), 
                               'IncidentNum'=>$this->db->escape_str($this->input->post('a')), 
                                'CompanyID'=>$this->db->escape_str($this->input->post('b')), 
								'Investigation_Date'=> $this->db->escape_str($this->input->post('i')),
                                'Leading_Investigation'=>$this->db->escape_str($this->input->post('lead')),
                                'Responsible_person'=>$Responsible, 
                                'Incident_Severity'=>$this->db->escape_str($this->input->post('Severity')), 
                                'Investigation_level'=>$this->db->escape_str($this->input->post('il')),	
                                'Incident_Seriousness'=>$this->db->escape_str($this->input->post('is')),	
                                'Recordable'=>$this->db->escape_str($this->input->post('REC')),	
                                'Substandard_Practice'=>$Practice,  
								'Explanation1'=>$this->db->escape_str($this->input->post('Ex1')),	
                                'Others1'=>$this->db->escape_str($this->input->post('prac')),	
                                'Substandard_Condition'=>$Cond, 
								'Explanation2'=>$this->db->escape_str($this->input->post('Ex2')),
								'Others2'=>$this->db->escape_str($this->input->post('con')),	
                                'Personal_factor'=>$PFactor,	
								'Explanation3'=>$this->db->escape_str($this->input->post('Ex3')),
								'Others3'=>$this->db->escape_str($this->input->post('perso')),	
                                'Job_factor'=>$JFactor,
								'Explanation4'=>$this->db->escape_str($this->input->post('Ex4')),
								'Others4'=>$this->db->escape_str($this->input->post('job')),	
                                'Lack_of_control'=>$Lack,
								'Explanation5'=>$this->db->escape_str($this->input->post('Ex5')),
								'Others5'=>$this->db->escape_str($this->input->post('lac')),	 
                                'Cause'=>$Cause,
								'Other_Member'=>$Member,
								'List_Witness'=>$Witness,
								'Witness_statement'=>$this->db->escape_str($this->input->post('wit')),	 
								'Status'=>'In Progress',	 
                                'Correct_preven_act'=>$Corrective,
								'Target_Completion_Date'=>$Tardate,
								'Actual_Completion_Date'=>$Actdate,									
								'Corrective_Image'=>$names);	
				$data2 = array('Investigation_Date1'=>$this->input->post('i'));	
			}
			
			$Co1=$this->input->post();
			$Co3=array();
			for ($i = 0; $i < sizeof($Co1['cor']); $i++) {
				$arr = array(
							'InvestigationNum'=>$this->input->post('h'),
							'Correct_preven_act'=>$Co1['cor'][$i],
							'Responsible_person'=>$Co1['responsible'][$i],
							'Target_Completion_Date'=>$Co1['tardate'][$i],
							'Actual_Completion_Date'=>$Co1['actdate'][$i],
							'Cor_Image'=>$name_array[$i]);
                $Co3[] =  $arr;  
				$this->Main_model->insert('correctiveaction',$arr); 				
			} 
			
			$cas=$this->input->post();
			$cas1=array();
			for ($j = 0; $j < sizeof($cas['cas']); $j++) {
				$arrcas = array(
							'InvestigationNum'=>$this->input->post('h'), 
							'Root_Cause'=>$cas['cas'][$j]);
                $cas1[] =  $arrcas;  
				$this->Main_model->insert('root',$arrcas); 				
			} 
			$where = array('IncidentNum' => $this->input->post('a')); 
			$this->Main_model->update('incident',$data2,$where);
			$this->Main_model->insert('investigation',$data); 
			//$this->Main_model->update('incident', $data2, $where);
            $ids=$this->db->escape_str($this->input->post('h')); 
            //$idt=$this->db->escape_str($this->input->post('e'));   
            //$email=$this->db->escape_str($this->input->post('email')); 
            //redirect('Mailt/N_A_ActionPlan/'.$ids.'/'.$idt.'/'.$email);
			//redirect('Main/Success');
			redirect('Mailt/N_C_Investigation/'.$ids);
		}else{
				$incidentid = $this->uri->segment(3);  
				$empid = $this->uri->segment(4); 
				$InvestID= substr($incidentid, strpos($incidentid, "-") + 1); 				
				$incident= $this->Main_model->view_join_incident('incident','department','location','IncidentNum','DeptID','LocID',$incidentid);
				//$incident= $this->Main_model->view_detail('incident', array('IncidentNum' => $incidentid ))->row_array();  
				//$inv['InvestigationNum'] = $this->Main_model->generate_InvNum(); 
				$empname  = $this->Main_model->view_ordering('employee','EmpID','DESC'); 
				$emp  = $this->Main_model->view_detail('employee',array('EmpID' => $empid ))->row_array(); 
				//$data = array('rows'=> $inv,'name'=>$empname, 'tr'=>$incident, 'emp'=>$emp);  
				$data = array('name'=>$empname, 'tr'=>$incident, 'emp'=>$emp, 'InvestigationID'=>$InvestID);  
				$this->template->load('Spv/template','Spv/C_Investigation',$data); 
			} 
	}
	
	function V_Investigation(){  
		cek_session_hod();
		$data['record'] = $this->Main_model->view_ordering('investigation','InvestigationNum','DESC');  
		$this->template->load('Spv/template','Spv/V_Investigation',$data);
	}
	
	function V_InvestigationDetail(){ 
		cek_session_hod();
		$investigationid = $this->uri->segment(3); 
		//$locid = $this->uri->segment(5);
		$empid = $this->uri->segment(4);
		$investigation =$this->Main_model->view_detail('investigation', array('InvestigationNum' => $investigationid ))->row_array();
		$correct =$this->Main_model->view_join_core2('investigation','correctiveaction','InvestigationNum',$investigationid);
		//$correct2= $this->Main_model->view_detail('correctiveaction', array('InvestigationNum ' => $investigationid ))->row_array();
		//ECHO json_encode($correct);
		//ECHO $correct;
		//ECHO json_encode($correct2);
		//$proses= $this->Main_model->view_join_2('actionplan','oc','area','location','LocID','AreaID','TrackingNum','ActionNum',$id);
		//$inc= $this->Main_model->view_join_3('incident','area','location','LocID','AreaID','TrackingNum','IncidentNum',$incidentid);			
		//$loc= $this->Main_model->view_detail('location', array('LocID' => $locid ))->row_array();  
		//echo json_eNcode($investigation);
		$emp= $this->Main_model->view_detail('employee', array('EmpID' => $empid ))->row_array();  
		$data = array('rows'=>$investigation,'emp'=>$emp,'core' => $correct);  
		$this->template->load('Spv/template','Spv/V_InvestigationDetail',$data);
	}
	
	function U_InvestigationDetail(){ 
		cek_session_hod();
		$investigationid = $this->uri->segment(3); 
		$empid = $this->uri->segment(4);
		if (isset($_POST['submit'])){
			$data = array('Actual_Completion_Date'=> $this->input->post('ACTDATE')); 
			$data2 = array('Status'=> 'CLOSED');  
			$ids = $this->input->post('a');   
			$Co1=$this->input->post();
			$Co3=array();
			for ($i = 0; $i < sizeof($Co1['ACTDATE']); $i++) {
				$arr = array('Actual_Completion_Date'=>$Co1['ACTDATE'][$i]);
                $Co3[] =  $arr;  
				$where = array('InvestigationNum' => $this->input->post('a'),'id' => $Co1['ids'][$i]);  
				$this->Main_model->update('correctiveaction',$arr,$where); 				
			} 			
            //$this->Main_model->update('investigation', $data, $where);            
            $this->Main_model->update('incident', $data2, $where2);            
			redirect('Mailt/N_Closed_Investigation/'.$ids);
			//redirect('Mailt/N_U_QualityAction/'.$car); 
        }else{  
			$investigation =$this->Main_model->view_detail('investigation', array('InvestigationNum' => $investigationid ))->row_array();
			$correct =$this->Main_model->view_join_core('investigation','correctiveaction','InvestigationNum',$investigationid);
			$cause =$this->Main_model->view_join_cause('investigation','root','InvestigationNum',$investigationid);
			//$inc= $this->Main_model->view_join_3('incident','area','location','LocID','AreaID','TrackingNum','IncidentNum',$incidentid);			
			//$loc= $this->Main_model->view_detail('location', array('LocID' => $locid ))->row_array();  
			$emp= $this->Main_model->view_detail('employee', array('EmpID' => $empid ))->row_array();  
			$data = array('rows'=>$investigation,'emp'=>$emp,'core' => $correct,'cause' => $cause);  
			$this->template->load('Spv/template','Spv/U_InvestigationDetail',$data);
		}
	} 
	
	function V_Profile(){ 
		cek_session_hod(); 
		if (isset($_POST['submit'])){
            $data = array(  'password'=>md5($this->input->post('np')));
			$where = array('username' =>  $this->input->post('a')) ;
            $this->Main_model->update('user', $data, $where);            
            redirect('Spv/Success_relogin');
        }else{ 		
			$user = $this->uri->segment(3);
			$Dtl= $this->Main_model->view_detail('user', array('username' => $user))->row_array();  
			$data = array('rows'=>$Dtl);  
			$this->template->load('Spv/template','Spv/V_Profile',$data);
		}
	} 
	
	public function Success(){
		  $this->session->set_flashdata('success', 'Submit successfully');
		  redirect('Spv/home');
	}	
		
	public function Success_relogin(){
		$this->session->set_flashdata('success', 'Submit successfully');
		redirect('Main/V_Login');  
	}	
}
