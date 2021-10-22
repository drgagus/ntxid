<?php
class Myproduct_model extends CI_model{


	// Product
	public function getAllProduct($user_id)
	{
		$this->db->where('user_id', $user_id);
		return $this->db->get('product')->result_array();
	}

	public function getMyProduct($user_id)
	{
		$this->db->order_by('is_active', 'ASC');
		$this->db->where('user_id', $user_id);
		return $this->db->get('product')->result_array();
	}

	public function getProductById($product_id,$user_id)
	{
		$this->db->where('is_active', 1);
		$this->db->where('product_id', $product_id);
		$this->db->where('user_id', $user_id);
		return $this->db->get('product')->row_array();
	}

	public function getCatSubCatName($cat_code,$subcat_code)
	{
		$this->db->where('cat_code', $cat_code);
		$this->db->where('subcat_code', $subcat_code);
		return $this->db->get('category')->row_array();
	}

	public function getLocation($prov_code,$kot_code,$kec_code)
	{
		$this->db->where('kec_code', $kec_code);
		$this->db->where('kot_code', $kot_code);
		$this->db->where('prov_code', $prov_code);
		return $this->db->get('location')->row_array();
	}

	public function getSubcategory($cat_code)
	{
		$this->db->where('cat_code', $cat_code);
		return $this->db->get('category')->result_array();
	}


	// Bookmark

	public function getMyBookmark($user_id)
	{
		$this->db->order_by('product_id', 'ASC');
		$this->db->where('user_id', $user_id);
		return $this->db->get('bookmark')->result_array();
	}

	public function CheckMyBookmark($user_id,$product_id)
	{
		$this->db->where('product_id', $product_id);
		$this->db->where('user_id', $user_id);
		return $this->db->get('bookmark')->row_array();
	}

	public function addBookmark($user_id,$product_id)
	{
		$data = [
        'user_id' => $user_id,
        'product_id' => $product_id
		];
		$this->db->insert('bookmark', $data);
	}

	public function deleteMyBookmark($user_id,$product_id)
	{
		$this->db->where('user_id', $user_id);
		$this->db->where('product_id', $product_id);
		$this->db->delete('bookmark');
	}

	public function getCategory()
	{
		$this->db->distinct();
		$this->db->select('cat_code');
		return $this->db->get('category')->result_array();
	}

	
}




?>