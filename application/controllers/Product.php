<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('product_model');
		$this->load->model('company_model');
	}

	public function index()
	{
		$data['company']= $this->company_model->getCompany();
		$data['category'] = $this->product_model->getCategory();
		$data['product']= $this->product_model->getAllProduct();
		$data['user']= $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
		
		$this->load->view('templates/header_public', $data);
		$this->load->view('product/index', $data);
		$this->load->view('templates/footer_public', $data);
	}

	public function category($cat)
	{
		$data['company']= $this->company_model->getCompany();
		$data['category'] = $this->product_model->getCategory();
		$data['user']= $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
		$data['cat']= $this->product_model->getCatName($cat);
		if ($data['cat']) {
			$data['product']= $this->product_model->getProductByCat($cat);
			$this->load->view('templates/header_public', $data);
			$this->load->view('product/category', $data);
			$this->load->view('templates/footer_public', $data);
		}else{
			$this->load->view('templates/header_public', $data);
			$this->load->view('product/pagenotfound', $data);
			$this->load->view('templates/footer_public', $data);
		}
		
	}

	public function subcategory($cat,$subcat)
	{
		$data['company']= $this->company_model->getCompany();
		$data['category'] = $this->product_model->getCategory();
		$data['user']= $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
		$data['catsubcat']= $this->product_model->getCatSubCatName($cat,$subcat);
		if ($data['catsubcat']) {
			$data['product']= $this->product_model->getProductBySubCat($cat,$subcat);
			$this->load->view('templates/header_public', $data);
			$this->load->view('product/subcategory', $data);
			$this->load->view('templates/footer_public', $data);
		}else{
			$this->load->view('templates/header_public', $data);
			$this->load->view('product/pagenotfound', $data);
			$this->load->view('templates/footer_public', $data);
		}
	}

	public function detail($product_id)
	{
		$data['company']= $this->company_model->getCompany();
		$data['user']= $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
		$data['category'] = $this->product_model->getCategory();
		$data['product']= $this->product_model->getProductById($product_id);
		if ($data['product']){
			$data['catsubcat']= $this->product_model->getCatSubCatName($data['product']['cat_code'],$data['product']['subcat_code']);
			$data['seller'] = $this->product_model->getSeller($data['product']['user_id']);
			$data['location'] = $this->product_model->getLocation($data['seller']['prov_code'],$data['seller']['kot_code'],$data['seller']['kec_code']);
			$this->load->view('templates/header_public', $data);
			$this->load->view('product/detail', $data);
			$this->load->view('templates/footer_detail', $data);
		}else{
			$this->load->view('templates/header_public', $data);
			$this->load->view('product/pagenotfound', $data);
			$this->load->view('templates/footer_public', $data);
		}
	}

	public function seller($seller_id)
	{
		$data['company']= $this->company_model->getCompany();
		$data['user']= $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
		$data['category'] = $this->product_model->getCategory();
		$data['seller'] = $this->product_model->getSeller($seller_id);
		if ($data['seller']){
			$data['product']= $this->product_model->getProductBySellerId($seller_id);
			$data['location'] = $this->product_model->getLocation($data['seller']['prov_code'],$data['seller']['kot_code'],$data['seller']['kec_code']);
			$this->load->view('templates/header_public', $data);
			$this->load->view('product/seller', $data);
			$this->load->view('templates/footer_public', $data);
		}else{
			$this->load->view('templates/header_public', $data);
			$this->load->view('product/pagenotfound', $data);
			$this->load->view('templates/footer_public', $data);
		}
		
	}

	
}