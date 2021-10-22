<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->library('form_validation');
		$this->load->model('company_model');
		$this->load->model('search_model');
	}

	public function index()
	{
		$data['company']= $this->company_model->getCompany();
		$data['category'] = $this->search_model->getCategory();
		$data['user']= $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
		
		$this->form_validation->set_rules('keyword', 'Keyword', 'required|trim', [
					'required'=>'Kata pencarian belum diisi'
					]);

		if ($this->form_validation->run() == false){
			$this->load->view('templates/header_public', $data);
			$this->load->view('search/index', $data);
			$this->load->view('templates/footer_public', $data);
		}else{
			$keyword=$this->input->post('keyword');
			$cat_code=$this->input->post('cat_code');
			$subcat_code=$this->input->post('subcat_code');

					if ($cat_code AND $subcat_code AND $keyword){
						redirect ('search/subcategory/'.$cat_code.'/'.$subcat_code.'/'.$keyword);
					}elseif($cat_code AND $keyword){
						redirect ('search/category/'.$cat_code.'/'.$keyword);
					}elseif($keyword){
						redirect ('search/product/'.$keyword);
					}else{
						redirect ('search');
					}
		}
		
	}

	public function home()
	{
			$keyword=$this->input->post('keyword');
			if ($keyword){
				redirect ('search/product/'.$keyword);
			}else{
				redirect ('search/pagenotfound');
			}
	}

	public function pagenotfound()
	{
		$data['company']= $this->company_model->getCompany();
		$data['category'] = $this->search_model->getCategory();
		$data['user']= $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
		
			$this->load->view('templates/header_public', $data);
			$this->load->view('search/pagenotfound', $data);
			$this->load->view('templates/footer_public', $data);
		
	}

	public function product($keyword)
	{
		$data['keyword'] = urldecode($keyword) ;
		$data['company']= $this->company_model->getCompany();
		$data['category'] = $this->search_model->getCategory();
		$data['product']= $this->search_model->getProductByKeyword($data['keyword']);
		$data['user']= $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
		
		$this->load->view('templates/header_public', $data);
		$this->load->view('search/product', $data);
		$this->load->view('templates/footer_public', $data);
	}

	public function category($cat_code,$keyword)
	{
		$data['keyword'] = urldecode($keyword) ;
		$data['company']= $this->company_model->getCompany();
		$data['category'] = $this->search_model->getCategory();
		$data['user']= $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
		$data['cat']= $this->search_model->getCatName($cat_code);

		if ($data['cat']) {
			$data['product']= $this->search_model->getProductByCatByKeyword($cat_code,$data['keyword']);
			$this->load->view('templates/header_public', $data);
			$this->load->view('search/category', $data);
			$this->load->view('templates/footer_public', $data);
		}else{
			$this->load->view('templates/header_public', $data);
			$this->load->view('search/pagenotfound', $data);
			$this->load->view('templates/footer_public', $data);
		}

	}

	public function subcategory($cat_code,$subcat_code,$keyword)
	{
		$data['keyword'] = urldecode($keyword) ;
		$data['company']= $this->company_model->getCompany();
		$data['category'] = $this->search_model->getCategory();
		$data['user']= $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
		$data['catsubcat']= $this->search_model->getCatSubCatName($cat_code,$subcat_code);
		if ($data['catsubcat']) {
			$data['product']= $this->search_model->getProductBySubCatByKeyword($cat_code,$subcat_code,$data['keyword']);
			$this->load->view('templates/header_public', $data);
			$this->load->view('search/subcategory', $data);
			$this->load->view('templates/footer_public', $data);
		}else{
			$this->load->view('templates/header_public', $data);
			$this->load->view('search/pagenotfound', $data);
			$this->load->view('templates/footer_public', $data);
		}
	}

}