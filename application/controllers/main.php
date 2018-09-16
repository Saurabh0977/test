<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once(APPPATH . "/third_party/paytmlib/config_paytm.php");
 require_once(APPPATH . "/third_party/paytmlib/encdec_paytm.php");

class Main extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('model_user');
	}
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
		//$this->load->model('model_user');
		//$data['user'] = $this->model_user->distinct_values(); 
		
		//die();
		
		//$output = implode(" ", $result);
		//echo $output;
		

		$this->load->view("form_view");
	}

	public function user_details()
	{

		$this->load->model('model_user');
		//$data['high'] = $this->model_user->fetch_highest_value();
		$data['high'] = $this->model_user->get_result_from_other_database();
		
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

			//$this->load->model('model_user');
			$userid = $this->model_user->create_user($name,$names);

			$this->model_user->product_details($userid,$p_name);
			$this->model_user->stock_detail($userid,$p_name,$qty);
			$data['message'] = "<strong>Data has Been inserted Succesfully</Strong>";
			$this->load->view('form_view' , $data);

	/*****************  Saving Into database code for Multiple Image Ends Here *********************/		

	
	}

	public function create_user_by_ajax()
	{
		$name = $this->input->post('name');

		$this->model_user->add_user_by_ajax($name);


	}


	public function paytm_view()
	{
		$this->load->view('TxnTest');
	}


	public function PaytmGateway()
    {
        $orderId = 108	; /// must be unique
      $this->StartPayment($orderId);
    }

public function startpayment()
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

	
	$paramList["MID"] = PAYTM_MERCHANT_MID;
 $paramList["ORDER_ID"] = $ORDER_ID;
 $paramList["CUST_ID"] = $CUST_ID;
 $paramList["INDUSTRY_TYPE_ID"] = $INDUSTRY_TYPE_ID;
 $paramList["CHANNEL_ID"] = $CHANNEL_ID;
 $paramList["TXN_AMOUNT"] = $TXN_AMOUNT;
 $paramList["WEBSITE"] = PAYTM_MERCHANT_WEBSITE;
 

 		$paramList["CALLBACK_URL"] = "http://127.0.0.1/test/Main/PaytmResponse";
        $paramList["MSISDN"] = '7777777777'; //Mobile number of customer
        $paramList["EMAIL"] ='saurabhkumar0977@gmail.com';
        $paramList["VERIFIED_BY"] = "EMAIL"; //
        $paramList["IS_USER_VERIFIED"] = "YES"; //
	   
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
	   </form>
	   </body>
	   </html>";
		} 
	   
 public function PaytmResponse()
 {
	 $paytmChecksum = "";
	 $paramList = array();
	 $isValidChecksum = "FALSE";

	 $paramList = $_POST;
	 echo "<pre>";
	 print_r($paramList);
  
//        $paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg
//
//        $isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.
//
//        if($isValidChecksum == "TRUE")
//        {
//            if ($_POST["STATUS"] == "TXN_SUCCESS")
//            { /// put your to save into the database // tansaction successfull
//                var_dump($paramList);
//            }
//            else {/// failed
//                var_dump($paramList);
//            }
//        }else
//        {//////////////suspicious
//           // put your code here
//         
//        }
 }

 public function database_queries()
 {
	 $this->load->view('database_value_view');
 }

 public function upload_csv()
 {
	 

	 // CODE TO UPLOAD SINGLE IMAGE TO DATABASE 

	 $config = array(
		 'upload_path' => './uploads/',
		 'allowed_types' => 'xls|csv',
		 'remove_spaces' => 'TRUE',
		 'max_size' => '0',
		 'overwrite' => FALSE
	 );




	 $this->load->library('upload',$config);
	 if($_FILES['userfile']['name'] != '') {
		 $filename = $_FILES['userfile']['name'];
		 $filename_array = explode(".", $filename);
		 $extension = end($filename_array);
		 $newname = md5(uniqid(rand(),true));
		 $newname_f = $newname . "." . $extension;
		 $_FILES['userfile']['name'] = $newname_f;
		 if($this->upload->do_upload('userfile')) {
			 
			 $data = $this->upload->data();
			 @chmod($data['full_path'],0777);

			 $this->load->library('Spreadsheet_Excel_Reader');
			 $this->spreadsheet_excel_reader->setOutputEncoding('CP1251');

			 $this->spreadsheet_excel_reader->read($data['full_path']);
			 
			 $sheets = $this->spreadsheet_excel_reader->sheets[0];
			 error_reporting(0);
			 $data_excel = array();
			 for ($i = 2; $i <= $sheets['numRows']; $i++) {
				 //if($sheets['cells'][$i][1] == '') break;

				 $data_employee[$i - 1]['ID'] =  $sheets['cells'][$i][1];				 
				 $data_employee[$i - 1]['NAME'] =  $sheets['cells'][$i][2];
				 $data_employee[$i - 1]['PHONE'] =  $sheets['cells'][$i][3];
				 $data_employee[$i - 1]['EMAIL'] =  $sheets['cells'][$i][4];
				 $data_employee[$i - 1]['STATUS'] =  $sheets['cells'][$i][5];
				 
				 $data_department[$i - 1]['ID'] =  $sheets['cells'][$i][1];
				 $data_department[$i - 1]['EMP_ID'] =  $sheets['cells'][$i][6];
				 $data_department[$i - 1]['DEP_TITLE'] =  $sheets['cells'][$i][7];
				 $data_department[$i - 1]['DEP_MANAGER'] =  $sheets['cells'][$i][8];

				 $data_address[$i - 1]['ID'] =  $sheets['cells'][$i][1];
				 $data_address[$i - 1]['EMP_ID'] =  $sheets['cells'][$i][6];
				 $data_address[$i - 1]['POSTAL_ADDRESS'] =  $sheets['cells'][$i][9];
				 $data_address[$i - 1]['PERMANENT_ADDRESS'] =  $sheets['cells'][$i][10];

			 }

			 $this->load->database();
			 
			 $this->db->from('employee');
			 $this->db->from('department');
			 $this->db->from('address');
			  
			 $this->db->truncate();
			 
			 $this->db->insert_batch('employee',$data_employee);
			 
			 $this->db->insert_batch('department',$data_department);
			 $this->db->insert_batch('address',$data_address);
			 

		 } else {
			  $errors = $this->upload->display_errors();
			  var_dump($errors);
		 }
	 } else {
		 $newname_f = "";
	 }

	 //   **********  END  *****************
	 
		 //$this->load->model('model_admin');
		 //$this->model_admin->upload_data($newname_f);




	 }

	 public function send_mail()
    {
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'testmail0977@gmail.com', // change it to yours
            'smtp_pass' => 'testmail0977!@', // change it to yours
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
          );
          
                  $message = '';
                  $this->load->library('email', $config);
                $this->email->set_newline("\r\n");
                $this->email->from('testmail0977@gmail.com'); // change it to yours
                $this->email->to('testmail0977@gmail.com');// change it to yours
                $this->email->subject('Resume from JobsBuddy for your Job posting');
                $this->email->message($message);
                if($this->email->send())
               {
                echo 'Email sent.';
               }
               else
              {
               show_error($this->email->print_debugger());
              }
          
          

    }

	 



}
