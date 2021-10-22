<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class myproduct extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		is_logged_in();
		$this->load->library('form_validation');
		$this->load->model('company_model');
		$this->load->model('myproduct_model');
	}


	public function index()
	{
		$data['company']= $this->company_model->getCompany();
		$data['title'] = 'Produk Saya';
		$data['user']= $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
		$data['myproduct'] = $this->myproduct_model->getMyProduct($data['user']['user_id']);
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('myproduct/product', $data);
		$this->load->view('templates/footer',$data);
	}

	public function detail($product_id)
	{
		$data['company']= $this->company_model->getCompany();
		$data['title'] = 'Produk Saya';
		$data['user']= $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
		$data['location']=$this->myproduct_model->getLocation($data['user']['prov_code'],$data['user']['kot_code'],$data['user']['kec_code']);
		$data['product']= $this->myproduct_model->getProductById($product_id,$data['user']['user_id']);

		if ($data['product']){
			$data['catsubcat']= $this->myproduct_model->getCatSubCatName($data['product']['cat_code'],$data['product']['subcat_code']);
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('myproduct/detail', $data);
			$this->load->view('templates/footer', $data);
		}else{
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('myproduct/pagenotfound', $data);
			$this->load->view('templates/footer', $data);
		}
	}

	public function add_product()
	{
		$data['company']= $this->company_model->getCompany();
		$data['title'] = 'Produk Saya';
		$data['user']= $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
		$data['category'] = $this->myproduct_model->getCategory();


			$this->form_validation->set_rules('cat_code', 'Cat_code', 'required|trim', [
				'required'=>'Kategori produk belum dipilih'
				]);
			$this->form_validation->set_rules('subcat_code', 'Subcat_code', 'required|trim', [
				'required'=>'SubKategori produk belum dipilih'
				]);
			$this->form_validation->set_rules('name', 'Name', 'required|trim',[
				'required'=>'Nama Toko belum diisi'
				]);
			$this->form_validation->set_rules('about', 'About', 'required|trim', [
				'required'=>'Deskripsi produk belum diisi'
				]);
			$this->form_validation->set_rules('price', 'Price', 'required|numeric|trim', [
				'required'=>'Harga belum diisi',
				'numeric' => 'Harga harus diisi dengan angka saja'
				]);

			if ($this->form_validation->run()==false){
				$this->load->view('templates/header', $data);
				$this->load->view('templates/sidebar', $data);
				$this->load->view('templates/topbar', $data);
				$this->load->view('myproduct/add_product', $data);
				$this->load->view('templates/footer',$data);
			}else{

				// Gambar 1
				$upload_image = $_FILES['image1']['name'];
				if ($upload_image){
					$config['upload_path'] = './assets/img/product/';
					$config['allowed_types'] = 'gif|jpg|png';
					$config['max_size']     = '2048';

					$this->load->library('upload', $config);

					if ($this->upload->do_upload('image1'))
	                {
	                	$image1 = $this->upload->data('file_name');
	                }
	                else
	                {
	                   echo $this->upload->display_errors();
	                }

				}else{
					$image1 = 'default.jpg';
				}


				// Gambar 2
				$upload_image = $_FILES['image2']['name'];
				if ($upload_image){
					$config['upload_path'] = './assets/img/product/';
					$config['allowed_types'] = 'gif|jpg|png';
					$config['max_size']     = '2048';

					$this->load->library('upload', $config);

					if ($this->upload->do_upload('image2'))
	                {
	                	$image2 = $this->upload->data('file_name');
	                }
	                else
	                {
	                   echo $this->upload->display_errors();
	                }

				}else{
					$image2 = '';
				}


				// Gambar 3
				$upload_image = $_FILES['image3']['name'];
				if ($upload_image){
					$config['upload_path'] = './assets/img/product/';
					$config['allowed_types'] = 'gif|jpg|png';
					$config['max_size']     = '2048';

					$this->load->library('upload', $config);

					if ($this->upload->do_upload('image3'))
	                {
	                	$image3 = $this->upload->data('file_name');
	                }
	                else
	                {
	                   echo $this->upload->display_errors();
	                }

				}else{
					$image3 = '';
				}


				// Gambar 4
				$upload_image = $_FILES['image4']['name'];
				if ($upload_image){
					$config['upload_path'] = './assets/img/product/';
					$config['allowed_types'] = 'gif|jpg|png';
					$config['max_size']     = '2048';

					$this->load->library('upload', $config);

					if ($this->upload->do_upload('image4'))
	                {
	                	$image4 = $this->upload->data('file_name');
	                }
	                else
	                {
	                   echo $this->upload->display_errors();
	                }

				}else{
					$image4 = '';
				}

				// Gambar 5
				$upload_image = $_FILES['image5']['name'];
				if ($upload_image){
					$config['upload_path'] = './assets/img/product/';
					$config['allowed_types'] = 'gif|jpg|png';
					$config['max_size']     = '2048';

					$this->load->library('upload', $config);

					if ($this->upload->do_upload('image5'))
	                {
	                	$image5 = $this->upload->data('file_name');
	                }
	                else
	                {
	                   echo $this->upload->display_errors();
	                }

				}else{
					$image5 = '';
				}

	                    $data = [
									'user_id' => $data['user']['user_id'],
									'cat_code' => $this->input->post('cat_code'),
									'subcat_code' => $this->input->post('subcat_code'),
									'name' => $this->input->post('name'),
									'about' => $this->input->post('about'),
									'price' => $this->input->post('price'),
									'image1' => $image1,
									'image2' => $image2,
									'image3' => $image3,
									'image4' => $image4,
									'image5' => $image5,
									'date_created' => time(),
									'is_active' => 1
								];
				$this->db->insert('product',$data);
				$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Produk Anda Berhasil Ditambahkan</div>');
				redirect('myproduct');

			}
	}

	

	public function edit_product($product_id)
	{
		$data['company']= $this->company_model->getCompany();
		$data['title'] = 'Produk Saya';
		$data['user']= $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
		$user_id = $data['user']['user_id'];
		$data['category'] = $this->myproduct_model->getCategory();
		$data['product']= $this->myproduct_model->getProductById($product_id,$data['user']['user_id']);
		$data['subcategory'] = $this->myproduct_model->getSubcategory($data['product']['cat_code']);

			$this->form_validation->set_rules('cat_code', 'Cat_code', 'required|trim', [
				'required'=>'Kategori produk belum dipilih'
				]);
			$this->form_validation->set_rules('subcat_code', 'Subcat_code', 'required|trim', [
				'required'=>'SubKategori produk belum dipilih'
				]);
			$this->form_validation->set_rules('name', 'Name', 'required|trim',[
				'required'=>'Nama Toko belum diisi'
				]);
			$this->form_validation->set_rules('about', 'About', 'required|trim', [
				'required'=>'Deskripsi produk belum diisi'
				]);
			$this->form_validation->set_rules('price', 'Price', 'required|numeric|trim', [
				'required'=>'Harga belum diisi',
				'numeric' => 'Harga harus diisi dengan angka saja'
				]);

			if ($this->form_validation->run()==false){
				$this->load->view('templates/header', $data);
				$this->load->view('templates/sidebar', $data);
				$this->load->view('templates/topbar', $data);
				$this->load->view('myproduct/edit_product', $data);
				$this->load->view('templates/footer',$data);
			}else{

				// Gambar 1
				$upload_image = $_FILES['image1']['name'];
				if ($upload_image){
					$config['upload_path'] = './assets/img/product/';
					$config['allowed_types'] = 'gif|jpg|png';
					$config['max_size']     = '2048';

					$this->load->library('upload', $config);

					if ($this->upload->do_upload('image1'))
	                {
	                	$image1 = $this->upload->data('file_name');
	                }
	                else
	                {
	                   echo $this->upload->display_errors();
	                }

				}else{
					$image1 = $data['product']['image1'];
				}


				// Gambar 2
				$upload_image = $_FILES['image2']['name'];
				if ($upload_image){
					$config['upload_path'] = './assets/img/product/';
					$config['allowed_types'] = 'gif|jpg|png';
					$config['max_size']     = '2048';

					$this->load->library('upload', $config);

					if ($this->upload->do_upload('image2'))
	                {
	                	$image2 = $this->upload->data('file_name');
	                }
	                else
	                {
	                   echo $this->upload->display_errors();
	                }

				}else{
					$image2 = $data['product']['image2'];
				}


				// Gambar 3
				$upload_image = $_FILES['image3']['name'];
				if ($upload_image){
					$config['upload_path'] = './assets/img/product/';
					$config['allowed_types'] = 'gif|jpg|png';
					$config['max_size']     = '2048';

					$this->load->library('upload', $config);

					if ($this->upload->do_upload('image3'))
	                {
	                	$image3 = $this->upload->data('file_name');
	                }
	                else
	                {
	                   echo $this->upload->display_errors();
	                }

				}else{
					$image3 = $data['product']['image3'];
				}


				// Gambar 4
				$upload_image = $_FILES['image4']['name'];
				if ($upload_image){
					$config['upload_path'] = './assets/img/product/';
					$config['allowed_types'] = 'gif|jpg|png';
					$config['max_size']     = '2048';

					$this->load->library('upload', $config);

					if ($this->upload->do_upload('image4'))
	                {
	                	$image4 = $this->upload->data('file_name');
	                }
	                else
	                {
	                   echo $this->upload->display_errors();
	                }

				}else{
					$image4 = $data['product']['image4'];
				}

				// Gambar 5
				$upload_image = $_FILES['image5']['name'];
				if ($upload_image){
					$config['upload_path'] = './assets/img/product/';
					$config['allowed_types'] = 'gif|jpg|png';
					$config['max_size']     = '2048';

					$this->load->library('upload', $config);

					if ($this->upload->do_upload('image5'))
	                {
	                	$image5 = $this->upload->data('file_name');
	                }
	                else
	                {
	                   echo $this->upload->display_errors();
	                }

				}else{
					$image5 = $data['product']['image5'];
				}

	                    $data = [
									'cat_code' => $this->input->post('cat_code'),
									'subcat_code' => $this->input->post('subcat_code'),
									'name' => $this->input->post('name'),
									'about' => $this->input->post('about'),
									'price' => $this->input->post('price'),
									'image1' => $image1,
									'image2' => $image2,
									'image3' => $image3,
									'image4' => $image4,
									'image5' => $image5,
									'last_edited' => time(),
									'is_active' => 1
								];
				$this->db->where('product_id', $product_id);
				$this->db->where('user_id', $user_id);
				$this->db->update('product', $data);
				$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Produk Anda Berhasil Diedit</div>');
				redirect('myproduct/detail/'.$product_id);

			}
	}

	public function delete_product($product_id)
	{
		$data['user']= $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
		
		$data['product']= $this->db->get_where('product', ['user_id'=>$data['user']['user_id'],'product_id'=>$product_id])->row_array();

        if ($data['product']){
        	$image1 = $data['product']['image1'];
        	if ($image1!='default.jpg'){
        		unlink (FCPATH.'assets/img/product/'.$image1);
        	}
        	
        	$image2 = $data['product']['image2'];
        	unlink (FCPATH.'assets/img/product/'.$image2);
        	$image3 = $data['product']['image3'];
        	unlink (FCPATH.'assets/img/product/'.$image3);
        	$image4 = $data['product']['image4'];
        	unlink (FCPATH.'assets/img/product/'.$image4);
        	$image5 = $data['product']['image5'];
        	unlink (FCPATH.'assets/img/product/'.$image5);

	        $this->db->where('user_id', $data['user']['user_id']);
			$this->db->where('product_id', $product_id);
			$this->db->delete('product');
			$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Produk Berhasil Dihapus</div>');
			redirect('myproduct');
        }else{
        	$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Produk Gagal Dihapus</div>');
			redirect('myproduct');
        }
        
	
	}

	public function bookmark()
	{
		$data['company']= $this->company_model->getCompany();
		$data['title'] = 'Bookmark';
		$data['user']= $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
		$data['bookmark']= $this->myproduct_model->getMyBookmark($data['user']['user_id']);
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('myproduct/bookmark', $data);
			$this->load->view('templates/footer',$data);
	}

	public function add_bookmark($product_id)
	{
		$data['company']= $this->company_model->getCompany();
		$data['user']= $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
		$data['checkbookmark']= $this->myproduct_model->CheckMyBookmark($data['user']['user_id'],$product_id);
		var_dump($data['checkbookmark']);
		if ($data['checkbookmark']){
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Produk Sudah Ada Di Penyimpanan</div>');
			redirect('myproduct/bookmark');
		}else{
			$data = $this->myproduct_model->addBookmark($data['user']['user_id'],$product_id);
			$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Produk Berhasil Disimpan</div>');
			redirect('myproduct/bookmark');
		}
			
	}

	public function delete_bookmark($product_id)
	{
		$data['user']= $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
		$data['checkbookmark']= $this->myproduct_model->CheckMyBookmark($data['user']['user_id'],$product_id);

		if ($data['checkbookmark']){
			$data['deletebookmark']= $this->myproduct_model->deleteMyBookmark($data['user']['user_id'],$product_id);
			$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Bookmark berhasil dihapus</div>');
			redirect('myproduct/bookmark');
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Bookmark gagal dihapus</div>');
			redirect('myproduct/bookmark');
		}	
	}


}