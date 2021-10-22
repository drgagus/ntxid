<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->library('form_validation');
		$this->load->model('company_model');
		$this->load->model('user_model');
	}

	public function index()
	{
		$data['company']= $this->company_model->getCompany();
		$data['title'] = 'Profil Saya';
		$email = $this->session->userdata('email');
		$data['user']= $this->user_model->getProfil($email);
		$data['lokasi'] = $this->user_model->getLokasi($data['user']['prov_code'],$data['user']['kot_code'],$data['user']['kec_code']);
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/index', $data);
		$this->load->view('templates/footer',$data);

	}

	public function edit()
	{
		$data['company']= $this->company_model->getCompany();
		$data['title'] = 'Ubah Profil';
		$email = $this->session->userdata('email');
		$data['user']= $this->user_model->getProfil($email);
		$data['kecamatan'] = $this->user_model->getKecamatanNatuna();

		$this->form_validation->set_rules('name', 'name', 'required|trim',[
			'required'=>'Nama lengkap tidak boleh kosong'
		]);
		$this->form_validation->set_rules('phonenumber', 'Phonenumber', 'required|trim|is_natural_no_zero',[
			'required'=>'Nomor handphone harus diisi',
			'is_natural_no_zero' => 'Masukkan nomor tanpa angka nol'
			]);
		$this->form_validation->set_rules('whatsappnumber', 'Whatsappnumber', 'required|trim|is_natural_no_zero',[
			'required'=>'Nomor WhatsApp harus diisi',
			'is_natural_no_zero' => 'Masukkan nomor tanpa angka nol'
			]);
		$this->form_validation->set_rules('kec_code', 'Kec_code', 'required',[
			'required'=>'Kecamatan Harus Dipilih'
			]);
		$this->form_validation->set_rules('address', 'Address', 'required|trim',[
			'required'=>'Alamat harus diisi'
			]);

		if ($this->form_validation->run()==false){
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('user/edit', $data);
			$this->load->view('templates/footer',$data);
		}else{
			$email = $this->session->userdata('email');
			$name = $this->input->post('name');
			$phonenumber = $this->input->post('phonenumber');
			$whatsappnumber = $this->input->post('whatsappnumber');
			$kec_code = $this->input->post('kec_code');
			$address = $this->input->post('address');

			$upload_image = $_FILES['image']['name'];

			if ($upload_image){
				$config['upload_path'] = './assets/img/profile/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']     = '2048';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('image'))
                {
                	$old_image = $data['user']['image'];
                	if ($old_image != 'default.jpg'){
                		unlink (FCPATH.'assets/img/profile/'.$old_image);
                	}
                	$new_image = $this->upload->data('file_name');
                   $this->user_model->changePhotoProfil($email,$new_image);
                }
                else
                {
                   echo $this->upload->display_errors();
                }

			}
			
			$this->user_model->editProfil($email,$name,$phonenumber,$whatsappnumber,$kec_code,$address);
			$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Akun berhasil diubah</div>');
			redirect('user');
		}
		

	}

	public function password()
	{
		$data['company']= $this->company_model->getCompany();
		$data['title'] = 'Ubah Password';
		$email = $this->session->userdata('email');
		$data['user']= $this->user_model->getProfil($email);

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
			$this->load->view('user/password', $data);
			$this->load->view('templates/footer',$data);
		}else{
			$current_password = $data['user']['password'];
			$old_password = $this->input->post('old_password');
			$new_password = $this->input->post('new_password1');
				if (!password_verify($old_password,$current_password)){
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Lama Salah!</div>');
					redirect('user/password');
				}else{
							if (password_verify($new_password,$current_password)){
							$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Baru Tidak Boleh Sama Dengan Password Lama!</div>');
							redirect('user/password');
							}else{
								$this->user_model->changePassword($email,$new_password);
								$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Password Berhasil Diubah</div>');
							redirect('user/password');

							}
				}

		}
		
	}

}