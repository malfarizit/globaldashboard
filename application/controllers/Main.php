<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Main extends CI_Controller {

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
	function __construct() {
        parent::__construct();
        
        // Load member model
        $this->load->model('Import_Model');
        
        // Load form validation library
        $this->load->library('form_validation');
        
        // Load file helper
        $this->load->helper('file');
    }

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
													'email'=>$row['Email'], 
													'hak_akses'=>$row['hak_akses'], 
													'eid'=>$row['eid'],
													'position'=>$row['Position'], 													
													'name'=>$row['Name'], 
													'id_session'=>$row['id_session']));
				$data = array('username'=>$this->session->username,
								'login_date'=>date('YmdHis'),
								'ip_address'=>$this->input->ip_address());
				$this->Main_model->insert('login',$data);
				if ($this->session->level=='admin'){
					redirect('Main/home');
				}else if ($this->session->level=='user'){
					redirect('Viewer/home');
				} 
			}else{
				$data['title'] = 'Username atau Password salah!';
				$this->load->view('Admin/V_Login',$data);
			}
		}else{ 
			 redirect('User/Index');
		}
	}

	public function getData()
	{
		$result = $this->Main_model->getDataTable();
		var_dump($result);
		die;
	}

	public function V_Import(){
        // $data = array();
        
        // // Get messages from the session
        // if($this->session->userdata('success_msg')){
        //     $data['success_msg'] = $this->session->userdata('success_msg');
        //     $this->session->unset_userdata('success_msg');
        // }
        // if($this->session->userdata('error_msg')){
        //     $data['error_msg'] = $this->session->userdata('error_msg');
        //     $this->session->unset_userdata('error_msg');
        // }

		// //Pagination $this->Main_model->count_rr()
		// $this->load->library('pagination');

		// $config['base_url'] = 'http://cladtekgdashboard.com/Main/V_Import/';
		// $config['total_rows'] = 20;
		// $config['per_page'] = 100;

		// $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
		// $config['full_tag_close'] = '</ul></nav>';

		// $config['first_link'] = 'First';
		// $config['first_tag_open'] = '<li class="page-item">';
		// $config['first_tag_close'] = '</li>';

		// $config['last_link'] = 'Last';
		// $config['last_tag_open'] = '<li class="page-item">';
		// $config['last_tag_close'] = '</li>';

		// $config['next_link'] = 'Next';
		// $config['next_tag_open'] = '<li class="page-item">';
		// $config['next_tag_close'] = '</li>';

		// $config['prev_link'] = 'Prev';
		// $config['prev_tag_open'] = '<li class="page-item">';
		// $config['prev_tag_close'] = '</li>';

		// $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		// $config['cur_tag_close'] = '</a></li>';

		// $config['num_tag_open'] = '<li class="page-item">';
		// $config['num_tag_close'] = '</li>';

		// $config['attributes'] = array('class' => 'page-link');

		// $this->pagination->initialize($config);

		// $data2['start'] = $this->uri->segment(3);
        
        // // Get rows
        // $data['members'] = $this->Import_Model->getRows();
		// //$data['record'] = $this->Main_model->view_ordering('rework_rate','id','DESC'); 
		// $data['record'] = $this->Main_model->getData($config['per_page'], $data2['start']);  
		
        
        // Load the list page view
        $this->template->load('Admin/template2','Admin/Import_Data');
		//$this->template->load('Admin/template2','Admin\hse');
    }

	// public function import(){
    //     $data = array();
    //     $memData = array();
        
    //     // If import request is submitted
    //     if($this->input->post('importSubmit')){
    //         // Form field validation rules
    //         $this->form_validation->set_rules('file', 'CSV file', 'callback_file_check');
            
    //         // Validate submitted form data
    //         if($this->form_validation->run() == true){
    //             $insertCount = $updateCount = $rowCount = $notAddCount = 0;
                
    //             // If file uploaded
    //             if(is_uploaded_file($_FILES['file']['tmp_name'])){
    //                 // Load CSV reader library
    //                 $this->load->library('CSVReader');
                    
    //                 // Parse data from CSV file
    //                 $csvData = $this->csvreader->parse_csv($_FILES['file']['tmp_name']);
                    
    //                 // Insert/update CSV data into database
    //                 if(!empty($csvData)){
    //                     foreach($csvData as $row){ $rowCount++;
                            
    //                         // Prepare data for DB insertion
    //                         $memData = array(
    //                             'name' => $row['Name'],
    //                             'email' => $row['Email'],
    //                             'phone' => $row['Phone'],
    //                             'status' => $row['Status'],
    //                         );
                            
    //                         // Check whether email already exists in the database
    //                         $con = array(
    //                             'where' => array(
    //                                 'email' => $row['Email']
    //                             ),
    //                             'returnType' => 'count'
    //                         );
    //                         $prevCount = $this->Import_Model->getRows($con);
                            
    //                         if($prevCount > 0){
    //                             // Update member data
    //                             $condition = array('email' => $row['Email']);
    //                             $update = $this->Import_Model->update($memData, $condition);
                                
    //                             if($update){
    //                                 $updateCount++;
    //                             }
    //                         }else{
    //                             // Insert member data
    //                             $insert = $this->Import_Model->insert($memData);
                                
    //                             if($insert){
    //                                 $insertCount++;
    //                             }
    //                         }
    //                     }
                        
    //                     // Status message with imported data count
    //                     $notAddCount = ($rowCount - ($insertCount + $updateCount));
    //                     $successMsg = 'Members imported successfully. Total Rows ('.$rowCount.') | Inserted ('.$insertCount.') | Updated ('.$updateCount.') | Not Inserted ('.$notAddCount.')';
    //                     $this->session->set_userdata('success_msg', $successMsg);
    //                 }
    //             }else{
    //                 $this->session->set_userdata('error_msg', 'Error on file upload, please try again.');
    //             }
    //         }else{
    //             $this->session->set_userdata('error_msg', 'Invalid file, please select only CSV file.');
    //         }
    //     }
    //     redirect('Main/V_Import');
    // }
	public function import(){
        $data = array();
        $memData = array();
        
        // If import request is submitted
        if($this->input->post('importSubmit')){
            // Form field validation rules
            $this->form_validation->set_rules('file', 'CSV file', 'callback_file_check');
            
            // Validate submitted form data
            if($this->form_validation->run() == true){
                $insertCount = $updateCount = $rowCount = $notAddCount = 0;
                
                // If file uploaded
                if(is_uploaded_file($_FILES['file']['tmp_name'])){
                    // Load CSV reader library
                    $this->load->library('CSVReader');
                    
                    // Parse data from CSV file
                    $csvData = $this->csvreader->parse_csv($_FILES['file']['tmp_name']);
                    
                    // Insert/update CSV data into database
                    if(!empty($csvData)){
                        foreach($csvData as $row){ $rowCount++;
                            
                            // Prepare data for DB insertion
                            $memData = array(
								'id' => $row['id'],
                                'Inspection_Process' => $row['Inspection_Process'],
                                'Date' => $row['Date'],
                                'Material_Type' => $row['Material_Type'],
                                'Project_No' => $row['Project_No'],
								'Cladtek_Item_No' => $row['Cladtek_Item_No'],
								'Result' => $row['Result'],
								'CategoryInspection' => $row['CategoryInspection'],
								'Issue' => $row['Issue'],
								'Freq_Inspection' => $row['Freq_Inspection'],
								'Defect_Zone' => $row['Defect_Zone'],
								'Defect_Length' => $row['Defect_Length'],
								'Item_Type' => $row['Item_Type'],
								'Size' => $row['Size'],
								'WOL_Start_Date' => $row['WOL_Start_Date'],
								'WOL_Finish_Date' => $row['WOL_Finish_Date'],
								'WOL_Machine' => $row['WOL_Machine'],
								'WOL_Welder_ID' => $row['WOL_Welder_ID'],
								'Rework_ADD_Start_Date' => $row['Rework_ADD_Start_Date'],
								'Rework_ADD_Finish_Date' => $row['Rework_ADD_Finish_Date'],
								'Rework_ADD_Machine' => $row['Rework_ADD_Machine'],
								'Rework_ADD_WelderID' => $row['Rework_ADD_WelderID'],
								'R1Start_Date' => $row['R1Start_Date'],
								'R1Finish_Date' => $row['R1Finish_Date'],
								'R1Machine' => $row['R1Machine'],
								'R2Start_Date' => $row['R2Start_Date'],
								'R2Finish_Date' => $row['R2Finish_Date'],
								'R2Machine' => $row['R2Machine'],
								'R3Start_Date' => $row['R3Start_Date'],
								'R3Finish_Date' => $row['R3Finish_Date'],
								'R3Machine' => $row['R3Machine'],
								'FMStart_Date' => $row['FMStart_Date'],
								'FMFinish_Date' => $row['FMFinish_Date'],
								'FMMachine' => $row['FMMachine'],
								'FMRepair_Date' => $row['FMRepair_Date'],
								'FMRepair_Machine' => $row['FMRepair_Machine'],
								'Issue_QC' => $row['Issue_QC'],
								'Length_Repair' => $row['Length_Repair'],
								'Length_Pipe' => $row['Length_Pipe'],
								'Size_OD_inc' => $row['Size_OD_inc'],
								'Size_OD_mm' => $row['Size_OD_mm'],
								'Area_Surface_Tested' => $row['Area_Surface_Tested'],
								'Unit' => $row['Unit'],
								
                            );
                            
                            // Check whether email already exists in the database
                            $con = array(
                                'where' => array(
                                    'id' => $row['id']
                                ),
                                'returnType' => 'count'
                            );
                            $prevCount = $this->Import_Model->getRows($con);
                            
                            if($prevCount > 0){
                                // Update member data
                                $condition = array('id' => $row['id']);
                                $update = $this->Import_Model->update($memData, $condition);
                                
                                if($update){
                                    $updateCount++;
                                }
                            }else{
                                // Insert member data
                                $insert = $this->Import_Model->insert($memData);
                                
                                if($insert){
                                    $insertCount++;
                                }
                            }
                        }
                        
                        // Status message with imported data count
                        $notAddCount = ($rowCount - ($insertCount + $updateCount));
                        $successMsg = 'Data imported successfully. Total Rows ('.$rowCount.') | Inserted ('.$insertCount.') | Updated ('.$updateCount.') | Not Inserted ('.$notAddCount.')';
                        $this->session->set_userdata('success_msg', $successMsg);
                    }
                }else{
                    $this->session->set_userdata('error_msg', 'Error on file upload, please try again.');
                }
            }else{
                $this->session->set_userdata('error_msg', 'Invalid file, please select only CSV file.');
            }
        }
        redirect('Main/V_Import');
    }
    /*
     * Callback function to check file value and type during validation
     */
    public function file_check($str){
        $allowed_mime_types = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
        if(isset($_FILES['file']['name']) && $_FILES['file']['name'] != ""){
            $mime = get_mime_by_extension($_FILES['file']['name']);
            $fileAr = explode('.', $_FILES['file']['name']);
            $ext = end($fileAr);
            if(($ext == 'csv') && in_array($mime, $allowed_mime_types)){
                return true;
            }else{
                $this->form_validation->set_message('file_check', 'Please select only CSV file to upload.');
                return false;
            }
        }else{
            $this->form_validation->set_message('file_check', 'Please select a CSV file to upload.');
            return false;
        }
    }

	function operations_qual(){ 
		cek_session_admin();
		$this->load->library("session");
		$this->template->load('Admin/template2','Admin/operations_quality');   
	}

	function hse(){ 
		cek_session_admin();
		$this->load->library("session");
		$this->template->load('Admin/template2','Admin/hse');   
	}

	function hse_leadinglagging(){ 
		cek_session_admin();
		$this->load->library("session");
		$this->template->load('Admin/template2','Admin/HSE_LeadingLagging');   
	}

	function hse_hazardspotting(){ 
		cek_session_admin();
		$this->load->library("session");
		$this->template->load('Admin/template2','Admin/HSE_HazardSpotting');   
	}

	function ims(){ 
		cek_session_admin();
		$this->load->library("session");
		$this->template->load('Admin/template2','Admin/ims');   
	}

	function sqd(){ 
		cek_session_admin();
		$this->load->library("session");
		$this->template->load('Admin/template2','Admin/sqd');   
	}

	function projects_qual(){ 
		cek_session_admin();
		$this->load->library("session");
		$this->template->load('Admin/template2','Admin/projects_quality');   
	}

	function hr_overview(){ 
		cek_session_admin();
		$this->load->library("session");
		$this->template->load('Admin/template2','Admin/hr_overview');   
	}

	function hr_absence(){ 
		cek_session_admin();
		$this->load->library("session");
		$this->template->load('Admin/template','Admin/hr_absence');   
	}

	function hr_hirings(){ 
		cek_session_admin();
		$this->load->library("session");
		$this->template->load('Admin/template2','Admin/hr_hirings');   
	}

	function ites(){ 
		cek_session_admin();
		$this->load->library("session");
		$this->template->load('Admin/template2','Admin/ites');   
	}

	function projects_kpi(){ 
		cek_session_admin();
		$this->load->library("session");
		$this->template->load('Admin/template2','Admin/projects');   
	}

	function hr_kpi(){ 
		cek_session_admin();
		$this->load->library("session");
		$this->template->load('Admin/template2','Admin/hr_kpi');   
	}

	function scm(){ 
		cek_session_admin();
		$this->load->library("session");
		$this->template->load('Admin/template2','Admin/scm');   
	}

	function projects_qual_kpi(){ 
		cek_session_admin();
		$this->load->library("session");
		$this->template->load('Admin/template2','Admin/projects_qualitykpi');   
	}

	function stores_kpi(){ 
		cek_session_admin();
		$this->load->library("session");
		$this->template->load('Admin/template2','Admin/stores_kpi');   
	}

	function stores(){ 
		cek_session_admin();
		$this->load->library("session");
		$this->template->load('Admin/template2','Admin/stores');   
	}

	function operations_qual_kpi(){ 
		cek_session_admin();
		$this->load->library("session");
		$this->template->load('Admin/template2','Admin/operations_qualitykpi');   
	}

	function operations_main_kpi(){ 
		cek_session_admin();
		$this->load->library("session");
		$this->template->load('Admin/template2','Admin/operations_maintenance');   
	}

	function engineering_kpi(){ 
		cek_session_admin();
		$this->load->library("session");
		$this->template->load('Admin/template2','Admin/engineering_kpi');   
	}
	  
	function home(){ 
		cek_session_admin();
		$this->template->load('Admin/template2','Admin/V_Home');
		//redirect('Main/home'); 
	}
	
	function IncidentDashboard(){ 
		cek_session_admin(); 
		
	}
	
	function test(){  
		$wsc= $this->Main_model->categoryinc2(); 	
		$dd=json_encode($wsc);
		 
		echo json_encode($wsc);
		 
	}
	
	function home_quality(){ 
		cek_session_admin(); 
        $this->template->load('Admin/template','Admin/V_Home_Quality');
		//redirect('Main/home'); 
	}
	
	function V_Login(){  
		$data['title'] = 'Log In User';
		$this->load->view('Admin/V_Login',$data);
	}
	
	function V_User(){ 
		cek_session_admin();	
		$data['record'] = $this->Main_model->view_ordering('user','username','DESC'); 
		$this->template->load('Admin/template','Admin/V_User',$data);
	}
	
	function C_user(){ 
		cek_session_admin();
        if (isset($_POST['submit'])){
            $data = array('username'=>$this->db->escape_str($this->input->post('a')),
                            'password'=>md5($this->input->post('b')),
                            'Name'=>$this->db->escape_str($this->input->post('c')),
                            'Email'=>$this->db->escape_str($this->input->post('d')),
                            'No_Hp'=>$this->db->escape_str($this->input->post('e')),
                            'CompanyID'=>$this->db->escape_str($this->input->post('f')),
                            'DeptID'=>$this->db->escape_str($this->input->post('g')),
                            'level'=>$this->db->escape_str($this->input->post('h')),
                            'hak_akses'=>$this->db->escape_str($this->input->post('i')),
							'id_session'=>md5($this->input->post('a')).'-'.date('YmdHis'));	 
            $this->Main_model->insert('user',$data);
            redirect('Main/V_User');
        }else{
			// $Com  = $this->Main_model->view_ordering('company','CompanyID','DESC');
			$dep = $this->Main_model->view_ordering('department','DeptID','ASC');  
			$rec = $this->Main_model->view_ordering('user','username','DESC');
			$data = array('record'=> $rec, 'Dept'=>$dep);   
            $this->template->load('Admin/template','Admin/C_User',$data);
        }
		 
	}
	
	function U_User(){
		cek_session_admin();
        // cek_session_akses('templatewebsite',$this->session->id_session);
        $id = $this->uri->segment(3);
        if (isset($_POST['submit'])){
            $data = array('password'=>md5($this->input->post('b')),
						  'Name'=>$this->db->escape_str($this->input->post('c')), 
						  'email'=>$this->db->escape_str($this->input->post('d')), 
						  'No_Hp'=>($this->input->post('e')));
			$where = array('username' => $this->input->post('a'));
            $this->Main_model->update('user', $data, $where);            
            redirect('Main/V_User');
        }else{ 
			$proses = $this->Main_model->edit('user', array('username' => $id))->row_array();
            $data = array('rows' => $proses);
            $this->template->load('Admin/template','Admin/U_User',$data);
        }
    }
	
	function D_User(){
		cek_session_admin();		
		$id = array('username' => $this->uri->segment(3));
        $this->Main_model->delete('user',$id);
		redirect('Main/V_User');
	}
	
	function C_hse_leading(){
		cek_session_admin();
        if (isset($_POST['submit'])){
			$config['upload_path'] = 'asset/images/Before';
            //$config['allowed_types'] = 'gif|jpg|png|ico|jpeg';
            $config['allowed_types'] = '*';
            $config['max_size'] = '2000'; // kb
            $this->load->library('upload', $config);
            $this->upload->do_upload('l');
            $hasil=$this->upload->data();  
            if ($hasil['file_name']==''){  
				$data = array('Date'=>$this->db->escape_str($this->input->post('a')),
								'Description'=>$this->db->escape_str($this->input->post('b')),
								'Unit'=>$this->db->escape_str($this->input->post('c')),
								'QTY'=>$this->db->escape_str($this->input->post('d')));  
			}else{
				$data = array('Date'=>$this->db->escape_str($this->input->post('a')),
								'Description'=>$this->db->escape_str($this->input->post('b')),
								'Unit'=>$this->db->escape_str($this->input->post('c')),
								'QTY'=>$this->db->escape_str($this->input->post('d')));	
			}
			$this->Main_model->insert('hse-leading',$data); 
			$data['success'] = 'Successful'; 
            redirect('Main/Success');
		}else{
				//$track['TrackingNum'] = $this->Main_model->generate_TrackNum();  
				//$rec['record'] = $this->Main_model->view_ordering('hse-leading','id','DESC');
				//$data['record'] = $this->Main_model->view_ordering('hse-leading','id','DESC');
				$leading  = $this->Main_model->view_ordering('hse-leading','id','ASC');
				$indicator  = $this->Main_model->view_ordering('leading-indicator','Description','DESC');
				//$occ  = $this->Main_model->view_ordering('category','OCCategory','DESC'); 
				//$Com  = $this->Main_model->view_ordering('company','CompanyID','DESC'); 
				$data = array('indicator'=>$indicator, 'lead'=>$leading);  
				$this->template->load('Admin/template','Admin/C_hse_leading',$data);
			} 
		} 
	
	function D_hse_leading(){ 
		cek_session_admin();
		$id = array('id' => $this->uri->segment(3));
        $this->Main_model->delete('hse-leading',$id);
		redirect('Main/C_hse_leading');
	}


	function C_hse_lagging(){
		cek_session_admin();
        if (isset($_POST['submit'])){
			$config['upload_path'] = 'asset/images/Before';
            //$config['allowed_types'] = 'gif|jpg|png|ico|jpeg';
            $config['allowed_types'] = '*';
            $config['max_size'] = '2000'; // kb
            $this->load->library('upload', $config);
            $this->upload->do_upload('l');
            $hasil=$this->upload->data();  
            if ($hasil['file_name']==''){  
				$data = array('Date'=>$this->db->escape_str($this->input->post('a')),
								'Description'=>$this->db->escape_str($this->input->post('b')),
								'Unit'=>$this->db->escape_str($this->input->post('c')),
								'QTY'=>$this->db->escape_str($this->input->post('d')));  
			}else{
				$data = array('Date'=>$this->db->escape_str($this->input->post('a')),
								'Description'=>$this->db->escape_str($this->input->post('b')),
								'Unit'=>$this->db->escape_str($this->input->post('c')),
								'QTY'=>$this->db->escape_str($this->input->post('d')));	
			}
			$this->Main_model->insert('hse-lagging',$data); 
			$data['success'] = 'Successful'; 
            redirect('Main/Success');
		}else{
				//$track['TrackingNum'] = $this->Main_model->generate_TrackNum();  
				//$rec['record'] = $this->Main_model->view_ordering('hse-leading','id','DESC');
				//$data['record'] = $this->Main_model->view_ordering('hse-leading','id','DESC');
				$lagging  = $this->Main_model->view_ordering('hse-lagging','id','ASC');
				$indicator  = $this->Main_model->view_ordering('lagging-indicator','Description','DESC');
				//$occ  = $this->Main_model->view_ordering('category','OCCategory','DESC'); 
				//$Com  = $this->Main_model->view_ordering('company','CompanyID','DESC'); 
				$data = array('indicator'=>$indicator, 'lag'=>$lagging);  
				$this->template->load('Admin/template','Admin/C_hse_lagging',$data);
			} 
		} 
	
	function D_hse_lagging(){ 
		cek_session_admin();
		$id = array('id' => $this->uri->segment(3));
        $this->Main_model->delete('hse-lagging',$id);
		redirect('Main/C_hse_lagging');
	}

	function C_hse_keylag(){
		cek_session_admin();
        if (isset($_POST['submit'])){
			$config['upload_path'] = 'asset/images/Before';
            //$config['allowed_types'] = 'gif|jpg|png|ico|jpeg';
            $config['allowed_types'] = '*';
            $config['max_size'] = '2000'; // kb
            $this->load->library('upload', $config);
            $this->upload->do_upload('l');
            $hasil=$this->upload->data();  
            if ($hasil['file_name']==''){  
				$data = array('Date'=>$this->db->escape_str($this->input->post('a')),
								'Unit'=>$this->db->escape_str($this->input->post('b')),
								'LTIFR_TRIFRIndustryBenchmark'=>$this->db->escape_str($this->input->post('c')),
								'TRIFR_Actual'=>$this->db->escape_str($this->input->post('d')),
								'LTIFR_Actual'=>$this->db->escape_str($this->input->post('e')));  
			}else{
				$data = array('Date'=>$this->db->escape_str($this->input->post('a')),
								'Unit'=>$this->db->escape_str($this->input->post('b')),
								'LTIFR_TRIFRIndustryBenchmark'=>$this->db->escape_str($this->input->post('c')),
								'TRIFR_Actual'=>$this->db->escape_str($this->input->post('d')),
								'LTIFR_Actual'=>$this->db->escape_str($this->input->post('e'))); 
			}
			$this->Main_model->insert('hse-keylag',$data); 
			$data['success'] = 'Successful'; 
            redirect('Main/Success');
		}else{
				//$track['TrackingNum'] = $this->Main_model->generate_TrackNum();  
				//$rec['record'] = $this->Main_model->view_ordering('hse-leading','id','DESC');
				//$data['record'] = $this->Main_model->view_ordering('hse-leading','id','DESC');
				$keylag  = $this->Main_model->view_ordering('hse-keylag','id','DESC');
				//$indicator  = $this->Main_model->view_ordering('lagging-indicator','Description','DESC');
				//$occ  = $this->Main_model->view_ordering('category','OCCategory','DESC'); 
				//$Com  = $this->Main_model->view_ordering('company','CompanyID','DESC'); 
				$data = array('key'=>$keylag);  
				$this->template->load('Admin/template','Admin/C_hse_keylag',$data);
			} 
		} 
	
	function D_hse_keylag(){ 
		cek_session_admin();
		$id = array('id' => $this->uri->segment(3));
        $this->Main_model->delete('hse-keylag',$id);
		redirect('Main/C_hse_keylag');
	}

	function C_operation_qual(){
		cek_session_admin();
        if (isset($_POST['submit'])){
			$config['upload_path'] = 'asset/images/Before';
            //$config['allowed_types'] = 'gif|jpg|png|ico|jpeg';
            $config['allowed_types'] = '*';
            $config['max_size'] = '2000'; // kb
            $this->load->library('upload', $config);
            $this->upload->do_upload('l');
            $hasil=$this->upload->data();  
            if ($hasil['file_name']==''){  
				$data = array('Inspection_Process'=>$this->db->escape_str($this->input->post('a')),
								'Date'=>$this->db->escape_str($this->input->post('b')),
								'Material_Type'=>$this->db->escape_str($this->input->post('c')),
								'Project_No'=>$this->db->escape_str($this->input->post('d')),
								'Cladtek_Item_No'=>$this->db->escape_str($this->input->post('e')),
								'Result'=>$this->db->escape_str($this->input->post('f')),
								'CategoryInspection'=>$this->db->escape_str($this->input->post('g')),
								'Issue'=>$this->db->escape_str($this->input->post('h')),
								//'Remarks'=>$this->db->escape_str($this->input->post('i')),
								'Freq_Inspection'=>$this->db->escape_str($this->input->post('j')),
								'Defect_Zone'=>$this->db->escape_str($this->input->post('k')),
								'Defect_Length'=>$this->db->escape_str($this->input->post('l')),
								'Item_Type'=>$this->db->escape_str($this->input->post('m')),
								'Size'=>$this->db->escape_str($this->input->post('n')),
								'WOL_Start_Date'=>$this->db->escape_str($this->input->post('o')),
								'WOL_Finish_Date'=>$this->db->escape_str($this->input->post('p')),
								'WOL_Machine'=>$this->db->escape_str($this->input->post('q')),
								'WOL_Welder_ID'=>$this->db->escape_str($this->input->post('r')),
								'Rework_ADD_Start_Date'=>$this->db->escape_str($this->input->post('s')),
								'Rework_ADD_Finish_Date'=>$this->db->escape_str($this->input->post('t')),
								'Rework_ADD_Machine'=>$this->db->escape_str($this->input->post('u')),
								'Rework_ADD_WelderID'=>$this->db->escape_str($this->input->post('v')),
								'R1Start_Date'=>$this->db->escape_str($this->input->post('w')),
								'R1Finish_Date'=>$this->db->escape_str($this->input->post('x')),
								'R1Machine'=>$this->db->escape_str($this->input->post('y')),
								'R2Start_Date'=>$this->db->escape_str($this->input->post('z')),
								'R2Finish_Date'=>$this->db->escape_str($this->input->post('aa')),
								'R2Machine'=>$this->db->escape_str($this->input->post('bb')),
								'R3Start_Date'=>$this->db->escape_str($this->input->post('cc')),
								'R3Finish_Date'=>$this->db->escape_str($this->input->post('dd')),
								'R3Machine'=>$this->db->escape_str($this->input->post('ee')),
								'FMStart_Date'=>$this->db->escape_str($this->input->post('ff')),
								'FMFinish_Date'=>$this->db->escape_str($this->input->post('gg')),
								'FMMachine'=>$this->db->escape_str($this->input->post('hh')),
								'FMRepair_Date'=>$this->db->escape_str($this->input->post('date')),
								'FMRepair_Machine'=>$this->db->escape_str($this->input->post('ii')),
								'Issue_QC'=>$this->db->escape_str($this->input->post('jj')),
								'Length_Repair'=>$this->db->escape_str($this->input->post('kk')),
								'Length_Pipe'=>$this->db->escape_str($this->input->post('ll')),
								'Size_OD_inc'=>$this->db->escape_str($this->input->post('mm')),
								'Size_OD_mm'=>$this->db->escape_str($this->input->post('nn')),
								'Area_Surface_Tested'=>$this->db->escape_str($this->input->post('oo')),
								'Unit'=>$this->db->escape_str($this->input->post('pp')));  
			}else{
				$data = array('Inspection_Process'=>$this->db->escape_str($this->input->post('a')),
								'Date'=>$this->db->escape_str($this->input->post('b')),
								'Material_Type'=>$this->db->escape_str($this->input->post('c')),
								'Project_No'=>$this->db->escape_str($this->input->post('d')),
								'Cladtek_Item_No'=>$this->db->escape_str($this->input->post('e')),
								'Result'=>$this->db->escape_str($this->input->post('f')),
								'CategoryInspection'=>$this->db->escape_str($this->input->post('g')),
								'Issue'=>$this->db->escape_str($this->input->post('h')),
								//'Remarks'=>$this->db->escape_str($this->input->post('i')),
								'Freq_Inspection'=>$this->db->escape_str($this->input->post('j')),
								'Defect_Zone'=>$this->db->escape_str($this->input->post('k')),
								'Defect_Length'=>$this->db->escape_str($this->input->post('l')),
								'Item_Type'=>$this->db->escape_str($this->input->post('m')),
								'Size'=>$this->db->escape_str($this->input->post('n')),
								'WOL_Start_Date'=>$this->db->escape_str($this->input->post('o')),
								'WOL_Finish_Date'=>$this->db->escape_str($this->input->post('p')),
								'WOL_Machine'=>$this->db->escape_str($this->input->post('q')),
								'WOL_Welder_ID'=>$this->db->escape_str($this->input->post('r')),
								'Rework_ADD_Start_Date'=>$this->db->escape_str($this->input->post('s')),
								'Rework_ADD_Finish_Date'=>$this->db->escape_str($this->input->post('t')),
								'Rework_ADD_Machine'=>$this->db->escape_str($this->input->post('u')),
								'Rework_ADD_WelderID'=>$this->db->escape_str($this->input->post('v')),
								'R1Start_Date'=>$this->db->escape_str($this->input->post('w')),
								'R1Finish_Date'=>$this->db->escape_str($this->input->post('x')),
								'R1Machine'=>$this->db->escape_str($this->input->post('y')),
								'R2Start_Date'=>$this->db->escape_str($this->input->post('z')),
								'R2Finish_Date'=>$this->db->escape_str($this->input->post('aa')),
								'R2Machine'=>$this->db->escape_str($this->input->post('bb')),
								'R3Start_Date'=>$this->db->escape_str($this->input->post('cc')),
								'R3Finish_Date'=>$this->db->escape_str($this->input->post('dd')),
								'R3Machine'=>$this->db->escape_str($this->input->post('ee')),
								'FMStart_Date'=>$this->db->escape_str($this->input->post('ff')),
								'FMFinish_Date'=>$this->db->escape_str($this->input->post('gg')),
								'FMMachine'=>$this->db->escape_str($this->input->post('hh')),
								'FMRepair_Date'=>$this->db->escape_str($this->input->post('date')),
								'FMRepair_Machine'=>$this->db->escape_str($this->input->post('ii')),
								'Issue_QC'=>$this->db->escape_str($this->input->post('jj')),
								'Length_Repair'=>$this->db->escape_str($this->input->post('kk')),
								'Length_Pipe'=>$this->db->escape_str($this->input->post('ll')),
								'Size_OD_inc'=>$this->db->escape_str($this->input->post('mm')),
								'Size_OD_mm'=>$this->db->escape_str($this->input->post('nn')),
								'Area_Surface_Tested'=>$this->db->escape_str($this->input->post('oo')),
								'Unit'=>$this->db->escape_str($this->input->post('pp'))); 
			}
			$this->Main_model->insert('rework_rate',$data);
			$data['members'] = $this->Import_Model->getRows(); 
			$data['success'] = 'Successful'; 
            redirect('Main/Success');
		}else{
				//$track['TrackingNum'] = $this->Main_model->generate_TrackNum();  
				//$rec['record'] = $this->Main_model->view_ordering('hse-leading','id','DESC');
				//$data['record'] = $this->Main_model->view_ordering('hse-leading','id','DESC');
				$quality  = $this->Main_model->view_ordering('rework-rate','id','ASC');
				//$indicator  = $this->Main_model->view_ordering('leading-indicator','Description','DESC');
				//$occ  = $this->Main_model->view_ordering('category','OCCategory','DESC'); 
				//$Com  = $this->Main_model->view_ordering('company','CompanyID','DESC'); 
				$data = array('qual'=>$quality);  
				$this->template->load('Admin/template','Admin/C_operation_qual', $data);
			} 
		} 
	
	function V_operation_qual(){  
		cek_session_admin();
		$data['record'] = $this->Main_model->view_ordering('rework_rate','id','DESC');  
		$this->template->load('Admin/template','Admin/V_operation_qual',$data);
	}

	function E_operation_qual(){
		cek_session_admin();
		if (isset($_POST['submit'])){
			$config['upload_path'] = 'asset/images/After';
			//$config['allowed_types'] = 'gif|jpg|png|ico|jpeg|MP4';
			$config['allowed_types'] = '*';
			$config['max_size'] = '20000'; // kb
			$this->load->library('upload', $config);
			$this->upload->do_upload('j','k');  
			$hasil=$this->upload->data();   
			if ($hasil['file_name']=='' ){ 
				$data = array('Inspection_Process'=>$this->db->escape_str($this->input->post('a')),
								'Date'=>$this->db->escape_str($this->input->post('b')),
								'Material_Type'=>$this->db->escape_str($this->input->post('c')),
								'Project_No'=>$this->db->escape_str($this->input->post('d')),
								'Cladtek_Item_No'=>$this->db->escape_str($this->input->post('e')),
								'Result'=>$this->db->escape_str($this->input->post('f')),
								'CategoryInspection'=>$this->db->escape_str($this->input->post('g')),
								'Issue'=>$this->db->escape_str($this->input->post('h')),
								//'Remarks'=>$this->db->escape_str($this->input->post('i')),
								'Freq_Inspection'=>$this->db->escape_str($this->input->post('j')),
								'Defect_Zone'=>$this->db->escape_str($this->input->post('k')),
								'Defect_Length'=>$this->db->escape_str($this->input->post('l')),
								'Item_Type'=>$this->db->escape_str($this->input->post('m')),
								'Size'=>$this->db->escape_str($this->input->post('n')),
								'WOL_Start_Date'=>$this->db->escape_str($this->input->post('o')),
								'WOL_Finish_Date'=>$this->db->escape_str($this->input->post('p')),
								'WOL_Machine'=>$this->db->escape_str($this->input->post('q')),
								'WOL_Welder_ID'=>$this->db->escape_str($this->input->post('r')),
								'Rework_ADD_Start_Date'=>$this->db->escape_str($this->input->post('s')),
								'Rework_ADD_Finish_Date'=>$this->db->escape_str($this->input->post('t')),
								'Rework_ADD_Machine'=>$this->db->escape_str($this->input->post('u')),
								'Rework_ADD_WelderID'=>$this->db->escape_str($this->input->post('v')),
								'R1Start_Date'=>$this->db->escape_str($this->input->post('w')),
								'R1Finish_Date'=>$this->db->escape_str($this->input->post('x')),
								'R1Machine'=>$this->db->escape_str($this->input->post('y')),
								'R2Start_Date'=>$this->db->escape_str($this->input->post('z')),
								'R2Finish_Date'=>$this->db->escape_str($this->input->post('aa')),
								'R2Machine'=>$this->db->escape_str($this->input->post('bb')),
								'R3Start_Date'=>$this->db->escape_str($this->input->post('cc')),
								'R3Finish_Date'=>$this->db->escape_str($this->input->post('dd')),
								'R3Machine'=>$this->db->escape_str($this->input->post('ee')),
								'FMStart_Date'=>$this->db->escape_str($this->input->post('ff')),
								'FMFinish_Date'=>$this->db->escape_str($this->input->post('gg')),
								'FMMachine'=>$this->db->escape_str($this->input->post('hh')),
								'FMRepair_Date'=>$this->db->escape_str($this->input->post('date')),
								'FMRepair_Machine'=>$this->db->escape_str($this->input->post('ii')),
								'Issue_QC'=>$this->db->escape_str($this->input->post('jj')),
								'Length_Repair'=>$this->db->escape_str($this->input->post('kk')),
								'Length_Pipe'=>$this->db->escape_str($this->input->post('ll')),
								'Size_OD_inc'=>$this->db->escape_str($this->input->post('mm')),
								'Size_OD_mm'=>$this->db->escape_str($this->input->post('nn')),
								'Area_Surface_Tested'=>$this->db->escape_str($this->input->post('oo')),
								'Unit'=>$this->db->escape_str($this->input->post('pp')));
			}else{
				$data = array('Inspection_Process'=>$this->db->escape_str($this->input->post('a')),
								'Date'=>$this->db->escape_str($this->input->post('b')),
								'Material_Type'=>$this->db->escape_str($this->input->post('c')),
								'Project_No'=>$this->db->escape_str($this->input->post('d')),
								'Cladtek_Item_No'=>$this->db->escape_str($this->input->post('e')),
								'Result'=>$this->db->escape_str($this->input->post('f')),
								'CategoryInspection'=>$this->db->escape_str($this->input->post('g')),
								'Issue'=>$this->db->escape_str($this->input->post('h')),
								//'Remarks'=>$this->db->escape_str($this->input->post('i')),
								'Freq_Inspection'=>$this->db->escape_str($this->input->post('j')),
								'Defect_Zone'=>$this->db->escape_str($this->input->post('k')),
								'Defect_Length'=>$this->db->escape_str($this->input->post('l')),
								'Item_Type'=>$this->db->escape_str($this->input->post('m')),
								'Size'=>$this->db->escape_str($this->input->post('n')),
								'WOL_Start_Date'=>$this->db->escape_str($this->input->post('o')),
								'WOL_Finish_Date'=>$this->db->escape_str($this->input->post('p')),
								'WOL_Machine'=>$this->db->escape_str($this->input->post('q')),
								'WOL_Welder_ID'=>$this->db->escape_str($this->input->post('r')),
								'Rework_ADD_Start_Date'=>$this->db->escape_str($this->input->post('s')),
								'Rework_ADD_Finish_Date'=>$this->db->escape_str($this->input->post('t')),
								'Rework_ADD_Machine'=>$this->db->escape_str($this->input->post('u')),
								'Rework_ADD_WelderID'=>$this->db->escape_str($this->input->post('v')),
								'R1Start_Date'=>$this->db->escape_str($this->input->post('w')),
								'R1Finish_Date'=>$this->db->escape_str($this->input->post('x')),
								'R1Machine'=>$this->db->escape_str($this->input->post('y')),
								'R2Start_Date'=>$this->db->escape_str($this->input->post('z')),
								'R2Finish_Date'=>$this->db->escape_str($this->input->post('aa')),
								'R2Machine'=>$this->db->escape_str($this->input->post('bb')),
								'R3Start_Date'=>$this->db->escape_str($this->input->post('cc')),
								'R3Finish_Date'=>$this->db->escape_str($this->input->post('dd')),
								'R3Machine'=>$this->db->escape_str($this->input->post('ee')),
								'FMStart_Date'=>$this->db->escape_str($this->input->post('ff')),
								'FMFinish_Date'=>$this->db->escape_str($this->input->post('gg')),
								'FMMachine'=>$this->db->escape_str($this->input->post('hh')),
								'FMRepair_Date'=>$this->db->escape_str($this->input->post('date')),
								'FMRepair_Machine'=>$this->db->escape_str($this->input->post('ii')),
								'Issue_QC'=>$this->db->escape_str($this->input->post('jj')),
								'Length_Repair'=>$this->db->escape_str($this->input->post('kk')),
								'Length_Pipe'=>$this->db->escape_str($this->input->post('ll')),
								'Size_OD_inc'=>$this->db->escape_str($this->input->post('mm')),
								'Size_OD_mm'=>$this->db->escape_str($this->input->post('nn')),
								'Area_Surface_Tested'=>$this->db->escape_str($this->input->post('oo')),
								'Unit'=>$this->db->escape_str($this->input->post('pp')));
			}
			$where = array('id' => $this->input->post('id')); 
			$this->Main_model->update('rework_rate', $data, $where);
			redirect('Main/SuccessImport');
		}else{
				$trackid = $this->uri->segment(3); 
				$empid = $this->uri->segment(4);				
				$track= $this->Main_model->view_detail('rework_rate', array('id' => $trackid ))->row_array();  
				$data = array('tr'=>$track);  
				$this->template->load('Admin/template','Admin/E_operation_qual',$data); 
			} 
		}
	
	function D_operation_qual(){ 
		cek_session_admin();
		$id = array('id' => $this->uri->segment(3));
        $this->Main_model->delete('rework_rate',$id);
		redirect('Main/V_Import');
	}

	// public function rrAjax()
	// {
	// 	$param['draw'] = isset($_REQUEST['draw']) ? $_REQUEST['draw'] : '';
	// 	$start = isset($_REQUEST['start']) ? $_REQUEST['start'] : '';
	// 	$length = isset($_REQUEST['length']) ? $_REQUEST['length'] : '';
	// 	$search_value = isset($_REQUEST['search']['value']) ? $_REQUEST['search']['value'] : '';

	// 	$datarr = new \application\Models\Main_model();
	// 	//$datarr = new $this->Main_model->searchAndDisplay();
	// 	$data = $datarr->searchAndDisplay($search_value, $start, $length);
	// 	$total_count = $datarr->searchAndDisplay($search_value);

	// 	$json_data = array(
	// 		'draw' => intval($param['draw']),
	// 		'recordsTotal' => count($total_count),
	// 		'recordsFiltered' => count($total_count),
	// 		'data' => $data
	// 	);

	// 	echo json_encode($json_data);
	// }
	
	function logout(){
		$array_items = array('username', 'level','email','id_session');
		$id = array('username' => $this->session->username);
		$this->Main_model->delete('login',$id);
		$this->session->unset_userdata($array_items);   
		$this->session->sess_destroy();
		$this->load->helper('cookie');
		delete_cookie('id_session');
		delete_cookie('username'); 
		redirect('Main/V_Login');
	}
	
	public function Success(){
		$this->session->set_flashdata('success', 'Submit successfully');
		if($this->session->hak_akses=='QUALITY'){
			redirect('Main/home_quality');
		}else{
			redirect('Main/home');
		} 
	}
	public function SuccessImport(){
		$this->session->set_flashdata('success', 'Submit successfully');
		if($this->session->hak_akses=='QUALITY'){
			redirect('Main/V_operation_qual');
		}else{
			redirect('Main/V_operation_qual');
		} 
	}

	function V_LoginUser(){  
		cek_session_admin();
		$data['record'] = $this->Main_model->view_ordering('login','username','DESC');  
		$this->template->load('Admin/template','Admin/V_LoginUser',$data);
	}
	
	function get_EmailSection(){
        $sid = $this->input->post('sid',TRUE);
        $data = $this->Main_model->get_EmailSection($sid)->result();
        echo json_encode($data);
    }
	
	function Help(){
		$this->template->load('Admin/template_help','Admin/Help');
	}
	
	function Help_HSE(){
		$this->template->load('Admin/template_help','Admin/Help_HSE');
	}
	  	
	public function Success_relogin(){
		$this->session->set_flashdata('success', 'Submit successfully');
		redirect('Main/V_Login');  
	}

	function V_Employee(){ 
		cek_session_admin();
		$data['record'] = $this->Main_model->view_ordering('employee','EmpId','ASC'); 
		$this->template->load('Admin/template','Admin/V_Employee',$data);
	}
	
	function C_Employee(){ 
		cek_session_admin();
        if (isset($_POST['submit'])){
            $data = array('EmpId'=>$this->db->escape_str($this->input->post('a')), 
                            'EmpName'=>$this->db->escape_str($this->input->post('b')),
                            'No_Hp'=>$this->db->escape_str($this->input->post('c')),	 
                            'Title'=>$this->db->escape_str($this->input->post('d')),	 
                            'CompanyID'=>$this->db->escape_str($this->input->post('e')),	 
                            'DeptID'=>$this->db->escape_str($this->input->post('f')), 
                            'email'=>$this->db->escape_str($this->input->post('g')));	 
            $this->Main_model->insert('employee',$data);
            redirect('Main/Success');
        }else{
			//$Com  = $this->Main_model->view_ordering('company','CompanyID','DESC');
			$dep  = $this->Main_model->view_ordering('department','DeptID','ASC'); 
			$act['record'] = $this->Main_model->view_ordering('employee','EmpId','DESC');
			$data = array('rows'=> $act, 'Dept'=>$dep);  
            $this->template->load('Admin/template','Admin/C_Employee',$data);
        }  
	}
	
	function D_Employee(){
	cek_session_admin();		
		$id = array('EmpID' => $this->uri->segment(3));
        $this->Main_model->delete('employee',$id);
		redirect('Main/V_Employee');
	}
	
	function U_Employee(){
		cek_session_admin();
        // cek_session_akses('templatewebsite',$this->session->id_session);
        $id = $this->uri->segment(3);
        if (isset($_POST['submit'])){
            $data = array('EmpName'=>$this->db->escape_str($this->input->post('b')),
						  'No_Hp'=>$this->db->escape_str($this->input->post('c')),
						  'email'=>$this->db->escape_str($this->input->post('d')));
			$where = array('EmpID' => $this->input->post('a'));
            $this->Main_model->update('employee', $data, $where);            
            redirect('Main/V_Employee');
        }else{ 
			$proses = $this->Main_model->edit('employee', array('EmpID' => $id))->row_array();
            $data = array('rows' => $proses);
            $this->template->load('Admin/template','Admin/U_Employee',$data);
        }
    }
	
	function V_Profile(){
			cek_session_admin();
			if (isset($_POST['submit'])){
				$data = array(  'password'=>md5($this->input->post('np')));
				$where = array('username' =>  $this->input->post('a')) ;
				$this->Main_model->update('user', $data, $where);            
				redirect('Main/Success_relogin');
			}else{ 				
				$user = $this->uri->segment(3);
				$Dtl= $this->Main_model->view_detail('user', array('username' => $user))->row_array();  
				$data = array('rows'=>$Dtl);  
				$this->template->load('Admin/template','Admin/V_Profile',$data);
			}
		}
	
}