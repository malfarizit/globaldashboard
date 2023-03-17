<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Viewer extends CI_Controller {

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
													'hak_akses'=>$row['hak_akses'], 
													'id_session'=>$row['id_session']));
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
	  
	function home(){ 
		 cek_session_hod();
		$this->template->load('Viewer/template','Viewer/V_Home');
	}
	
	function V_Profile(){ 
		cek_session_hod(); 
		if (isset($_POST['submit'])){
            $data = array(  'password'=>md5($this->input->post('np')));
			$where = array('username' =>  $this->input->post('a')) ;
            $this->Main_model->update('user', $data, $where);            
            redirect('Hod/Success_relogin');
        }else{ 		
			$user = $this->uri->segment(3);
			$Dtl= $this->Main_model->view_detail('user', array('username' => $user))->row_array();  
			$data = array('rows'=>$Dtl);  
			$this->template->load('Hod/template','Hod/V_Profile',$data);
		}
	} 
	
	function Help(){
		$this->template->load('Viewer/template_help','Viewer/Help');
	}
	
	function Help_HSE(){
		$this->template->load('Viewer/template_help','Viewer/Help_HSE');
	}
	
	public function Success(){
		  $this->session->set_flashdata('success', 'Submit successfully');
		  redirect('Viewer/home');
	}	
	
	public function Success_relogin(){
		$this->session->set_flashdata('success', 'Submit successfully');
		redirect('Main/V_Login');  
	}
	
	function operations_qual(){ 
		cek_session_hod();
		$this->load->library("session");
		$this->template->load('Viewer/template2','Viewer/operations_quality');   
	}

	function hse(){ 
		cek_session_hod();
		$this->load->library("session");
		$this->template->load('Viewer/template2','Viewer/hse');   
	}

	function hse_leadinglagging(){ 
		cek_session_hod();
		$this->load->library("session");
		$this->template->load('Viewer/template2','Viewer/HSE_LeadingLagging');   
	}

	function hse_hazardspotting(){ 
		cek_session_hod();
		$this->load->library("session");
		$this->template->load('Viewer/template2','Viewer/HSE_HazardSpotting');   
	}

	function ims(){ 
		cek_session_hod();
		$this->load->library("session");
		$this->template->load('Viewer/template2','Viewer/ims');   
	}

	function sqd(){ 
		cek_session_hod();
		$this->load->library("session");
		$this->template->load('Viewer/template2','Viewer/sqd');   
	}

	function projects_qual(){ 
		cek_session_hod();
		$this->load->library("session");
		$this->template->load('Viewer/template2','Viewer/projects_quality');   
	}

	function hr_overview(){ 
		cek_session_hod();
		$this->load->library("session");
		$this->template->load('Viewer/template2','Viewer/hr_overview');   
	}

	function hr_absence(){ 
		cek_session_hod();
		$this->load->library("session");
		$this->template->load('Viewer/template','Viewer/hr_absence');   
	}

	function hr_hirings(){ 
		cek_session_hod();
		$this->load->library("session");
		$this->template->load('Viewer/template2','Viewer/hr_hirings');   
	}

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
}
