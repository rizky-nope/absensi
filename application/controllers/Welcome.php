<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('MSudi');
	}

	public function index()
	{
		if($this->session->userdata('Login'))
		{
			$data['content']='VBlank';
			$this->load->view('VBackend',$data);
		}
		else
		{
			 redirect(site_url('Login'));
		}

	}


	public function regist()
	{
		if($this->session->userdata('Regist'))
		{
			$data['content']='VBlank';
			$this->load->view('VLogin',$data);
		}
		else
		{
			 redirect(site_url('Login'));
		}
	}


//======================================================================================================================================
	public function DataSiswa()
	{

		

		if($this->uri->segment(4)=='view')
		{
			$nis=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('xi_rpl_1','nis',$nis)->row();
			$data['detail']['nis']= $tampil->nis;
            		$data['detail']['nama']= $tampil->nama;
            		$data['detail']['jk']= $tampil->jk;
            		$data['detail']['keterangan']= $tampil->keterangan;
			$data['content']='VFormUpdateSiswa';
		}
		else
		{	
			$data['DataSiswa']=$this->MSudi->GetData('xi_rpl_1');
			$data['content']='VSiswa';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddSiswa()
	{
		$data['content']='VFormAddSiswa';
		$this->load->view('VBackend',$data);
	}
	public function AddDataSiswa()
	{
		 $add['nis']=$this->input->post('nis');
         	 $add['nama']= $this->input->post('nama');
         	 $add['jk']= $this->input->post('jk');
         	 $add['keterangan']= $this->input->post('keterangan');  
        	 $this->MSudi->AddData('xi_rpl_1',$add);
        	 redirect(site_url('Welcome/DataSiswa'));
	}



	public function UpdateDataSiswa()
	{
		 $nis=$this->input->post('nis');
		 $update['nama']= $this->input->post('nama');
		 	 $update['jk']= $this->input->post('jk');
         	 $update['keterangan']= $this->input->post('keterangan');
          	 $this->MSudi->UpdateData('xi_rpl_1','nis',$nis,$update);
		 redirect(site_url('Welcome/DataSiswa'));
	}


	public function DeleteDataSiswa()
	{
		 $nis=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('xi_rpl_1','nis',$nis);
        	 redirect(site_url('Welcome/DataSiswa'));
	}


//======================================================================================================================================
	public function DataSiswa2()
	{

		

		if($this->uri->segment(4)=='view')
		{
			$nis=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('xi_rpl_2','nis',$nis)->row();
			$data['detail']['nis']= $tampil->nis;
            		$data['detail']['nama']= $tampil->nama;
            		$data['detail']['jk']= $tampil->jk;
            		$data['detail']['keterangan']= $tampil->keterangan;
			$data['content']='VFormUpdateSiswa2';
		}
		else
		{	
			$data['DataSiswa2']=$this->MSudi->GetData('xi_rpl_2');
			$data['content']='VSiswa2';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddSiswa2()
	{
		$data['content']='VFormAddSiswa2';
		$this->load->view('VBackend',$data);
	}
	public function AddDataSiswa2()
	{
		 $add['nis']=$this->input->post('nis');
         	 $add['nama']= $this->input->post('nama');
         	 $add['jk']= $this->input->post('jk');
         	 $add['keterangan']= $this->input->post('keterangan');  
        	 $this->MSudi->AddData('xi_rpl_2',$add);
        	 redirect(site_url('Welcome/DataSiswa2'));
	}



	public function UpdateDataSiswa2()
	{
		 $nis=$this->input->post('nis');
		 $update['nama']= $this->input->post('nama');
		 	 $update['jk']= $this->input->post('jk');
         	 $update['keterangan']= $this->input->post('keterangan');
          	 $this->MSudi->UpdateData('xi_rpl_2','nis',$nis,$update);
		 redirect(site_url('Welcome/DataSiswa2'));
	}


	public function DeleteDataSiswa2()
	{
		 $nis=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('xi_rpl_2','nis',$nis);
        	 redirect(site_url('Welcome/DataSiswa2'));
	}


//======================================================================================================================================

	public function Register()
	{
		if($this->uri->segment(4)=='view')
		{
			$kd_login=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('tbl_login','kd_login',$kd_login)->row();
			$data['detail']['kd_login']= $tampil->kd_login;
            		$data['detail']['nama']= $tampil->nama;
            		$data['detail']['username']= $tampil->username;
            		$data['detail']['password']= $tampil->password;
			$data['content']='VUpdateAkun';
		}
		else
		{	
			$data['Register']=$this->MSudi->GetData('tbl_login');
			$data['content']='VRegis';
		}


		$this->load->view('VBackend',$data);
	}

	public function VFormAddAkun()
	{
		$data['content']='VFormAddAkun';
		$this->load->view('VBackend',$data);
	}

	public function AddAkun()
	{
		 $add['kd_login']=$this->input->post('kd_login');
         	 $add['nama']= $this->input->post('nama');
         	 $add['username']= $this->input->post('username');
         	 $add['password']= $this->input->post('password');  
        	 $this->MSudi->AddData('tbl_login',$add);
        	 redirect(site_url('Welcome/Register'));
	}

	public function UpdateAkun()
	{
		 $kd_login=$this->input->post('kd_login');
		 $update['nama']= $this->input->post('nama');
		 	 $update['username']= $this->input->post('username');
         	 $update['password']= $this->input->post('password');
          	 $this->MSudi->UpdateData('tbl_login','kd_login',$kd_login,$update);
		 redirect(site_url('Welcome/Register'));
	}

	public function DeletAkun()
	{
		 $kd_login=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('tbl_login','kd_login',$kd_login);
        	 redirect(site_url('Welcome/Register'));
	}



	public function Logout()
	{
		$this->load->library('session');
		$this->session->unset_userdata('Login');
		redirect(site_url('Login'));
	}

}