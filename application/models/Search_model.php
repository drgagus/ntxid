<?php
class search_model extends CI_model{

	public function getCategory()
	{
		$this->db->distinct();
		$this->db->select('cat_code');
		return $this->db->get('category')->result_array();
	}

	public function getCatName($cat_code)
	{
		$this->db->where('cat_code', $cat_code);
		return $this->db->get('category')->row_array();
	}

	public function getCatSubCatName($cat_code,$subcat_code)
	{
		$this->db->where('cat_code', $cat_code);
		$this->db->where('subcat_code', $subcat_code);
		return $this->db->get('category')->row_array();
	}

	public function getProductBySubCatByKeyword($cat_code,$subcat_code,$keyword)
	{
		$this->db->where('is_active', 1);
		$this->db->like('name', $keyword);
		$this->db->or_like('about', $keyword);
		$this->db->where('subcat_code', $subcat_code);
		$this->db->where('cat_code', $cat_code);
		return $this->db->get('product')->result_array();
	}

	public function getProductByCatByKeyword($cat_code,$keyword)
	{
		$this->db->where('is_active', 1);
		$this->db->like('name', $keyword);
		$this->db->or_like('about', $keyword);
		$this->db->where('cat_code', $cat_code);
		return $this->db->get('product')->result_array();
	}

	public function getProductByKeyword($keyword)
	{
		$this->db->where('is_active', 1);
		$this->db->like('name', $keyword);
		$this->db->or_like('about', $keyword);
		return $this->db->get('product')->result_array();
	}
	
}




?>