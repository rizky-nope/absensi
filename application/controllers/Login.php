<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('MLogin');
	}

	public function index()
	{
		if (isset($_POST['btn_login'])){
				$username = $_POST['txt_user'];
				$password = $_POST['txt_pass'];
				$notif = $this->MLogin->GoLogin($username,$password);
				if($notif){
					$this->load->library('session');
					$this->session->set_userdata('Login','OnLogin');
					redirect(site_url('Welcome'));
				}			
				else{
					$this->load->library('session');
					$this->session->unset_userdata('Login');
					redirect(site_url('Login'));
				}
			}

		$this->load->view('VLogin');
	}




}


class Regis extends CI_Controller
{
	
	function __construct()
	{
		
	
	 function regist()
	{
		$add['kd_login']=$this->input->post('kd_login');
         	 $add['name']= $this->input->post('name');
         $add['username']= $this->input->post('username');
         	 $add['password']= $this->input->post('password');  
        	 $this->MSudi->AddData('tbl_login',$add);
        	 redirect(site_url('Welcome/AddAkun'));
	}

	}
}