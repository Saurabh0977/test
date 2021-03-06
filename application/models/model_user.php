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
		$query = $this->db->query("SELECT * FROM `users`  RIGHT JOIN `stock` ON `users`.`ID` = `stock`.`STOCK_ID`  ");
		//$query = $this->db->query("SELECT NAME FROM `users` WHERE CREATED_AT LIKE '_____01%' ");
		//$query = $this->db->query("SELECT NAME FROM `users` UNION ALL SELECT PRODUCT_NAME FROM `stock`");
		//$query = $this->db->query("SELECT DISTINCT(QUANTITY) AS QTY FROM `stock` ORDER BY QUANTITY DESC");
		//print_r ($query->result());
		
		//	$this->db->select("*");
	//	$this->db->from('users');
		
		//$this->db->join('product','product.USER_ID=users.ID');
		//$query = $this->db->get();
		//var_dump(print_r($query->result()));
		return $query->result();		
		
	}
	public function distinct_values()
	{
		$this->load->database();
		$query =  $this->db->query("SELECT DISTINCT(NAME), COUNT(NAME) AS COUNTER FROM `users` GROUP BY NAME HAVING COUNT(NAME) > 0");
		return $query->result();			
	}

	public function insert_into_employee($id)
	{
		
		$otherdb = $this->load->database('otherdb', TRUE);
			
	}
/*
	public function employeeList()
	{
		$this->load->database();
		$this->db->select(array('e.ID' , 'e.NAME' , 'e.PHONE' , 'e.EMAIL' , 'e.STATUS'));
		$this->db->from('employee as e');
		$query = $this->db->get();
		return $query->result_array();

	}
*/
	public function employeeList()
	{
		$this->load->database();
		$query = $this->db->query("SELECT * FROM `employee` LEFT JOIN `address` ON `address`.`ID` = `employee`.`ID` LEFT JOIN `department` ON `department`.`ID` = `employee`.`ID` ");
		return $query->result();
	}

	public function fetch_highest_value()
	{
		$this->load->database();
		//$query = $this->db->query("SELECT MAX(EMP_ID) AS VAL FROM `department` WHERE EMP_ID IN (SELECT MAX(EMP_ID) FROM `department`) ");
		$query = $this->db->query("SELECT * FROM `department` WHERE DEP_MANAGER LIKE '%D' ");
		//$query = $this->db->query("SELECT DEP_TITLE,COUNT(DEP_TITLE) AS TOTAL FROM `department` GROUP BY DEP_TITLE  ");
		return $query->result();
	}

	public function add_user_by_ajax($name)
	{
		$this->load->database();
		$this->db->query("INSERT INTO `users` ( NAME )  VALUES ('$name') ");
	}

	public function get_result_from_other_database()
	{
		$otherdb = $this->load->database('otherdb', TRUE);
		$query  = $otherdb->query("SELECT * FROM `money` ORDER BY ID DESC LIMIT 0,1");
		return $query->result();
	}

	public function new_user_create($uname,$hash,$phone,$salt)
	{
		$this->load->database();
		$query = $this->db->query("INSERT INTO `new_user` ( USERNAME , PASSWORD , PHONE , SALT) VALUES ('$uname' , '$hash' , '$phone' , '$salt') ");

	}

	public function check_users($username)
	{
		$query = $this->db->query("SELECT * FROM `new_user` WHERE USERNAME= '$username' ");
		return $query->result();
	}

	public function logout()
	{
		$this->load->library('session');
		session_destroy();
		//$this->session->set_userdata('is_logged_id', FALSE);
		;

	}
	public function add_username_by_ajax($uname)
	{
		$this->load->database();
		$query = $this->db->query("INSERT INTO `users`(NAME) VALUES ('$uname') ");

	}


}