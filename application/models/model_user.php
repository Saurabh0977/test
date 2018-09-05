<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model {

	public function __contruct()
	{
		parent:: __contruct();
	}

	public function create_user($name,$names)
	{

		$this->load->database();
		$query = $this->db->query("INSERT INTO `users` ( NAME , IMAGES ) VALUES ('$name' , '$names' ) ");
		$id = $this->db->insert_id();
		return $id;
	}
	public function product_details($userid,$p_name)
	{
		$this->load->database();
		$query = $this->db->query("INSERT INTO `product` ( USER_ID , PRODUCT_NAME) VALUES ( '$userid' , '$p_name' ) ");
	}

	public function stock_detail($userid,$p_name,$qty)
	{
		$this->load->database();
		$query = $this->db->query("INSERT INTO `stock` ( STOCK_ID , PRODUCT_NAME , QUANTITY ) VALUES ( '$userid' , '$p_name' , '$qty ') ");
	}

	public function fetch_user_details()
	{
		$this->load->database();
		$query = $this->db->query("SELECT * FROM `users` LEFT JOIN `product` ON  `product`.`USER_ID`=`users`.`ID` LEFT JOIN `stock` ON stock.STOCK_ID = product.USER_ID ");
		
		
		//	$this->db->select("*");
	//	$this->db->from('users');
		
		//$this->db->join('product','product.USER_ID=users.ID');
		//$query = $this->db->get();
		return $query->result();		
		
	}
	public function distinct_values()
	{
		$this->load->database();
		$query =  $this->db->query("SELECT DISTINCT(NAME), COUNT(NAME) AS COUNTER FROM `users` GROUP BY NAME HAVING COUNT(NAME) > 0");
		return $query->result();
	}
}