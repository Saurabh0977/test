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

	}
}