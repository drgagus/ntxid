<?php
class category_model extends CI_model{

	public function getCategory()
	{
		$this->db->distinct();
		$this->db->select('cat_code');
		return $this->db->get('category')->result_array();
	}

	
}




?>