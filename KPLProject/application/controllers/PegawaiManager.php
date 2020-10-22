<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'assets/vendor/autoload.php';

class PegawaiManager extends CI_Controller {	
	
	public function __construct()
	{
		parent::__construct();
		if (!isset($this->session->userdata['roleIdm'])){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert dismissible fade show" role="alert">Anda Belum Login<button type="button" class="close" data-dismiss="alert" aria=label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('login');
		}
		$this->load->helper(array('url','html'));
		$this->load->model('db_model');
	}
     
	public function index()
	{
		$data['data']	= $this->db_model->list_pegawai()->result_object();				
		$data['page']	= "page_pegawai";							
		
		$data['user'] = $this->db->get_where('tbl_users', ['email' => $this->session->userdata('emailm')])->row_array();
		
		$this->load->view('manager/templates/header', $data);
		$this->load->view('manager/templates/sidebar', $data);
		$this->load->view('manager/page_pegawai',$data);
		$this->load->view('manager/templates/footer');
		
		
	}
	
}

