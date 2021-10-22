<?php
class product_model extends CI_model{


	// Category and SubCategory

	public function getCategory()
	{
		$this->db->distinct();
		$this->db->select('cat_code');
		return $this->db->get('category')->result_array();
	}

	// Get Product

	public function getAllProduct()
	{
		$this->db->order_by('name', 'RANDOM');
		return $this->db->get_where('product',['is_active' => 1 ])->result_array();
	}

	public function getProductByCat($cat_code)
	{
		$this->db->where('is_active', 1);
		$this->db->where('cat_code', $cat_code);
		return $this->db->get('product')->result_array();
	}


	public function getProductBySubCat($cat_code,$subcat_code)
	{
		$this->db->where('is_active', 1);
		$this->db->where('cat_code', $cat_code);
		$this->db->where('subcat_code', $subcat_code);
		return $this->db->get('product')->result_array();
	}

	public function getProductById($product_id)
	{
		$this->db->where('is_active', 1);
		$this->db->where('product_id', $product_id);
		return $this->db->get('product')->row_array();
	}

	public function getProductBySellerId($seller_id)
	{
		$this->db->where('user_id', $seller_id);
		return $this->db->get('product')->result_array();
	}

	public function getCatSubCatName($cat_code,$subcat_code)
	{
		$this->db->where('cat_code', $cat_code);
		$this->db->where('subcat_code', $subcat_code);
		return $this->db->get('category')->row_array();
	}

	public function getCatName($cat_code)
	{
		$this->db->where('cat_code', $cat_code);
		return $this->db->get('category')->row_array();
	}

	public function getSeller($user_id)
	{
		$this->db->where('user_id', $user_id);
		return $this->db->get('user')->row_array();
	}

	public function getLocation($prov_code,$kot_code,$kec_code)
	{
		$this->db->where('kec_code', $kec_code);
		$this->db->where('kot_code', $kot_code);
		$this->db->where('prov_code', $prov_code);
		return $this->db->get('location')->row_array();
	}

}




?>