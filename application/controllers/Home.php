<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('company_model');
	}

	public function index()
	{
		
		$this->load->model('product_model');
		$this->load->model('category_model');
		$data['company']= $this->company_model->getCompany();
		$data['category'] = $this->category_model->getCategory();
		$data['product']= $this->product_model->getAllProduct();
		$data['user']= $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
		
		$this->load->view('templates/header_public', $data);
		$this->load->view('home/index', $data);
		$this->load->view('templates/footer_public', $data);

	}

}