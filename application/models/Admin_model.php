<?php
class admin_model extends CI_model{

	public function getProfil($email)
	{
		$this->db->where('email', $email);
		return $this->db->get('user')->row_array();
	}

	
	public function changePassword($email, $new_password)
	{
		$this->db->set('password',password_hash($new_password,PASSWORD_DEFAULT));
		$this->db->where('email',$email);
		$this->db->update('user');
	}




	
}




?>