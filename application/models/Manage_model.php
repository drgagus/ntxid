<?php
class manage_model extends CI_model{

	// account

	public function getAllAccount()
	{
		$this->db->order_by('user_id', 'ASC');
		return $this->db->get('user')->result_array();
	}

	public function getAccountById($user_id)
	{
		$this->db->where('user_id', $user_id);
		return $this->db->get('user')->row_array();
	}

	public function accountActived($user_id,$id)
	{
		$this->db->set('is_active',$id);
		$this->db->where('user_id',$user_id);
		$this->db->update('user');
	}

	public function getLokasi($prov_code,$kot_code,$kec_code)
	{
		$this->db->where('kec_code', $kec_code);
		$this->db->where('kot_code', $kot_code);
		$this->db->where('prov_code', $prov_code);
		return $this->db->get('location')->row_array();
	}

	// product

	public function getAllProduct()
	{
		$this->db->order_by('is_active', 'ASC');
		$this->db->where('is_active', 1);
		$this->db->or_where('is_active', 0);
		return $this->db->get('product')->result_array();
	}

	public function getProductById($product_id)
	{
		$this->db->where('product_id', $product_id);
		return $this->db->get('product')->row_array();
	}

	public function productActived($product_id,$id)
	{
		$this->db->set('is_active',$id);
		$this->db->where('product_id',$product_id);
		$this->db->update('product');
	}
	
}

?>