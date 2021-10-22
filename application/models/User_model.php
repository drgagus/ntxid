<?php
class user_model extends CI_model{

	public function getProfil($email)
	{
		$this->db->where('email', $email);
		return $this->db->get('user')->row_array();
	}

	public function changePhotoProfil($email,$new_image)
	{
		$this->db->set('image',$new_image);
		$this->db->where('email',$email);
		$this->db->update('user');
	}

	public function editProfil($email,$name,$phonenumber,$whatsappnumber,$kec_code,$address)
	{
		$this->db->set('name',$name);
		$this->db->set('phonenumber',$phonenumber);
		$this->db->set('whatsappnumber',$whatsappnumber);
		$this->db->set('kec_code',$kec_code);
		$this->db->set('address',$address);
		$this->db->where('email',$email);
		$this->db->update('user');
	}


	public function changePassword($email, $new_password)
	{
		$this->db->set('password',password_hash($new_password,PASSWORD_DEFAULT));
		$this->db->where('email',$email);
		$this->db->update('user');
	}


	public function getKecamatanNatuna()
	{
		$this->db->where('kot_code', '03');
		return $this->db->get('location')->result_array();
	}

	public function getLokasi($prov_code,$kot_code,$kec_code)
	{
		$this->db->where('kec_code', $kec_code);
		$this->db->where('kot_code', $kot_code);
		$this->db->where('prov_code', $prov_code);
		return $this->db->get('location')->row_array();
	}

	
}




?>