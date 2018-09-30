<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {


    
    

    public function login()
	{
		$uname = $this->input->post('uname');
		$pass = $this->input->post('pass');
        $this->load->model('model_user');
		$result = $this->model_user->check_users($uname);
		//var_dump($result);
		//die();

		if(count($result)>0)
		{
			$salt = $result[0]->SALT;
			$hash = hash("sha256",$pass . $salt);
			if($result[0]->PASSWORD==$hash) {
				$sess = array('is_logged_in' => TRUE ,'uname' => $result[0]->USERNAME, 'uid' => $result[0]->ID);
					$this->session->set_userdata($sess);
					//$session_id = $this->session->userdata('uid');	
					//var_dump($session_id);
					//die();
					redirect(site_url('Main/dashboard'));


		}
	}
    }
    

    
}



?>