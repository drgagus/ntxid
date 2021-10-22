<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->library('form_validation');
		$this->load->model('company_model');
		$this->load->model('admin_model');
	}

	public function index()
	{
		$data['title'] = 'Profil Perusahaan';
		$data['user']= $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
		$data['company']= $this->company_model->getCompany();

		$this->form_validation->set_rules('name', 'name', 'required|trim', [
			'required'=>'Nama perusahaan harus diisi'
			]);
		$this->form_validation->set_rules('about1', 'about1', 'required|trim', [
			'required'=>'Deskripsi perusahaan harus diisi'
			]);
		$this->form_validation->set_rules('about2', 'about2', 'required|trim', [
			'required'=>'Deskripsi perusahaan harus diisi'
			]);
		$this->form_validation->set_rules('about3', 'about3', 'required|trim', [
			'required'=>'Deskripsi perusahaan harus diisi'
			]);

		if ($this->form_validation->run()==false){
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('admin/index', $data);
			$this->load->view('templates/footer',$data);
		}else{
				$data['company']= $this->company_model->editCompany();
				$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Profil Perusahaan Berhasil Diubah</div>');
				redirect('admin');
		}
		

	}

	public function password()
	{
		$data['company']= $this->company_model->getCompany();
		$data['title'] = 'Ubah Password';
		$email = $this->session->userdata('email');
		$data['user']= $this->admin_model->getProfil($email);

		$this->form_validation->set_rules('old_password', 'old_password', 'required|trim',[
			'required'=>'Password lama harus diisi'
		]);
		$this->form_validation->set_rules('new_password1', 'new_password1', 'required|trim|min_length[3]|matches[new_password2]', [
			'required'=>'Password baru harus diisi',
			'min_length' => 'Password terlalu pendek',
			'matches' => 'Password baru tidak sama'
			]);
		$this->form_validation->set_rules('new_password2', 'new_password2', 'required|trim|matches[new_password1]',[
			'required'=>'Password baru harus diisi',
			'matches' => 'Password baru tidak sama'
		]);


		if ($this->form_validation->run()==false){
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('admin/password', $data);
			$this->load->view('templates/footer',$data);
		}else{
			$current_password = $data['user']['password'];
			$old_password = $this->input->post('old_password');
			$new_password = $this->input->post('new_password1');
				if (!password_verify($old_password,$current_password)){
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Lama Salah!</div>');
					redirect('admin/password');
				}else{
							if (password_verify($new_password,$current_password)){
							$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Baru Tidak Boleh Sama Dengan Password Lama!</div>');
							redirect('admin/password');
							}else{
								$this->admin_model->changePassword($email,$new_password);
								$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Password Berhasil Diubah</div>');
							redirect('admin/password');

							}
				}

		}
		
	}

	

}