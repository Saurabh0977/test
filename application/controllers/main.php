<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['message'] = "";
		$this->load->model('model_user');
		$data['user'] = $this->model_user->distinct_values(); 
		
		//die();
		
		//$output = implode(" ", $result);
		//echo $output;
		

		$this->load->view("list", $data);
	}

	public function user_details()
	{

		$this->load->model('model_user');
		$data['user'] = $this->model_user->fetch_user_details();
		$this->load->view('users_list' ,$data);
	}
	

	public function create_user()
	{
		$name = $this->input->post('name');
		$p_name = $this->input->post('p_name');
		$qty = $this->input->post('qty'); 
	/*****************  Code For Uploading Multiple Images ****************/

		 $name_array = array();
        $count = count($_FILES['userfile']['size']);
        foreach($_FILES as $key=>$value)
        for($s=0; $s<=$count-1; $s++) {
        $_FILES['userfile']['name']=$value['name'][$s];
        $_FILES['userfile']['type']    = $value['type'][$s];
        $_FILES['userfile']['tmp_name'] = $value['tmp_name'][$s];
        $_FILES['userfile']['error']       = $value['error'][$s];
        $_FILES['userfile']['size']    = $value['size'][$s];   
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']    = '0';
            $config['max_width']  = '0';
            $config['max_height']  = '0';
        $this->load->library('upload', $config);
        $this->upload->do_upload();
        $data = $this->upload->data();
        $name_array[] = $data['file_name'];
            }
            $names= implode(',', $name_array);

	/*****************  Code For Uploading Multiple Images Ends Here ****************/

           
	/*****************  Code For Uploading Single Image ****************/
		/*
		$config = array(
				'upload_path' => './uploads/',
				'allowed_types' => 'jpg|png',
				'max_size' => '0',
				'overwrite' => FALSE
			);

			$this->load->library('upload',$config);

			if($_FILES['userfile[]']['name'] != '') {
				$filename = $_FILES['userfile[]']['name'];
				$filename_array = explode(".", $filename);
				$extension = end($filename_array);
				$newname = md5(uniqid(rand(),true));
				$newname_f = $newname . "." . $extension;
				$_FILES['userfile[]']['name'] = $newname_f;
				if($this->upload->do_upload('userfile[]')) {
				} else {
					$errors = $this->upload->display_errors();
				}
			} else {
				$newname_f[] = "";
			}

	/*****************  Code For Uploading Single Image Ends Here ********************/
			
	/*****************  Saving Into database code for Single Image *********************/	
	/*
			$this->load->model('model_user');
			$this->model_user->create_user($name,$names);
			$this->load->view('form_view');
	*/
	/*****************  Saving Into database code for Single Image  Ends Here*********************/		

			
	/*****************  Saving Into database code for Multiple Image *********************/		

			$this->load->model('model_user');
			$userid = $this->model_user->create_user($name,$names);

			$this->model_user->product_details($userid,$p_name);
			$this->model_user->stock_detail($userid,$p_name,$qty);
			$data['message'] = "<strong>Data has Been inserted Succesfully</Strong>";
			$this->load->view('form_view' , $data);

	/*****************  Saving Into database code for Multiple Image Ends Here *********************/		

	
	}


	public function paytm_view()
	{
		$this->load->view('TxnTest');
	}




	function paytmpost()
{
 header("Pragma: no-cache");
 header("Cache-Control: no-cache");
 header("Expires: 0");

 // following files need to be included
 require_once(APPPATH . "/third_party/paytmlib/config_paytm.php");
 require_once(APPPATH . "/third_party/paytmlib/encdec_paytm.php");

 $checkSum = "";
 $paramList = array();

 $ORDER_ID = $_POST["ORDER_ID"];
 $CUST_ID = $_POST["CUST_ID"];
 $INDUSTRY_TYPE_ID = $_POST["INDUSTRY_TYPE_ID"];
 $CHANNEL_ID = $_POST["CHANNEL_ID"];
 $TXN_AMOUNT = $_POST["TXN_AMOUNT"];

// Create an array having all required parameters for creating checksum.
 $paramList["MID"] = PAYTM_MERCHANT_MID;
 $paramList["ORDER_ID"] = $ORDER_ID;
 $paramList["CUST_ID"] = $CUST_ID;
 $paramList["INDUSTRY_TYPE_ID"] = $INDUSTRY_TYPE_ID;
 $paramList["CHANNEL_ID"] = $CHANNEL_ID;
 $paramList["TXN_AMOUNT"] = $TXN_AMOUNT;
 $paramList["WEBSITE"] = PAYTM_MERCHANT_WEBSITE;

 /*
 $paramList["MSISDN"] = $MSISDN; //Mobile number of customer
 $paramList["EMAIL"] = $EMAIL; //Email ID of customer
 $paramList["VERIFIED_BY"] = "EMAIL"; //
 $paramList["IS_USER_VERIFIED"] = "YES"; //

 */

//Here checksum string will return by getChecksumFromArray() function.
 $checkSum = getChecksumFromArray($paramList,PAYTM_MERCHANT_KEY);
 echo "<html>
<head>
<title>Merchant Check Out Page</title>
</head>
<body>
    <center><h1>Please do not refresh this page...</h1></center>
        <form method='post' action='".PAYTM_TXN_URL."' name='f1'>
<table border='1'>
 <tbody>";

 foreach($paramList as $name => $value) {
 echo '<input type="hidden" name="' . $name .'" value="' . $value .         '">';
 }

 echo "<input type='hidden' name='CHECKSUMHASH' value='". $checkSum . "'>
 </tbody>
</table>
<script type='text/javascript'>
 document.f1.submit();
</script>
</form>
</body>
</html>";
 } 

 public function database_queries()
 {
	 $this->load->view('database_value_view');
 }


}
