<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->library('form_validation');
		$this->load->model('company_model');
		$this->load->model('manage_model');
	}

			// ACCOUNT

	public function account()
	{
		
		$data['account']= $this->manage_model->getAllAccount();
		$data['title'] = 'Daftar Akun';
		$data['user']= $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
		$data['company']= $this->company_model->getCompany();
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('manage/account/index', $data);
		$this->load->view('templates/footer',$data);
	}

	public function account_detail($user_id)
	{
		$data['company']= $this->company_model->getCompany();
		$data['title'] = 'Daftar Akun';
		$data['user']= $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
		$data['account']= $this->manage_model->getAccountById($user_id);
		if ($data['account']){
			$data['lokasi'] = $this->manage_model->getLokasi($data['account']['prov_code'],$data['account']['kot_code'],$data['account']['kec_code']);
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('manage/account/detail', $data);
			$this->load->view('templates/footer',$data);
		}else{
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('manage/pagenotfound', $data);
			$this->load->view('templates/footer',$data);
		}
		
	}

	public function accountactived($user_id,$id)
	{
		$data['user']= $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
		$this->manage_model->accountActived($user_id,$id);
		redirect('manage/account_detail/'.$user_id);
	}

	




			// PRODUCT

	public function product()
	{
		$data['product']= $this->manage_model->getAllProduct();
		$data['title'] = 'Daftar Produk';
		$data['user']= $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
		$data['company']= $this->company_model->getCompany();
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('manage/product/index', $data);
		$this->load->view('templates/footer',$data);
	}

	public function product_detail($product_id)
	{
		$data['title'] = 'Daftar Produk';
		$data['user']= $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
		$data['company']= $this->company_model->getCompany();
		$data['product']= $this->manage_model->getProductById($product_id);
		if ($data['product']){
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('manage/product/detail', $data);
			$this->load->view('templates/footer',$data);
		}else{
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('manage/pagenotfound', $data);
			$this->load->view('templates/footer',$data);
		}
		
	}

	public function productactived($product_id,$id)
	{
		$data['user']= $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
		
		$this->load->model('manage_model');
		$this->manage_model->productActived($product_id,$id);
		redirect('manage/product_detail/'.$product_id);
	}

	public function blacklist()
	{
		$data['product']= $this->manage_model->getAllProduct();
		$data['title'] = 'Produk Blacklist';
		$data['user']= $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
		$data['company']= $this->company_model->getCompany();
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('manage/product/blacklist', $data);
		$this->load->view('templates/footer',$data);
	}

	
	

}