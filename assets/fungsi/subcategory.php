<?php 

if (isset($_GET['cat_code'])){


	$cat_code = $_GET['cat_code'] ;
               $querySubcat = "    SELECT *
                          FROM `category`
                         WHERE `category`.`cat_code` = $cat_code
                      ";
                $subcat = $this->db->query($querySubcat)->result_array();
                var_dump($subcat);
            }else{
            	echo "data tidak ada";
            }


?>