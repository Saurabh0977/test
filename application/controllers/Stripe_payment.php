<span style="font-size:12px;"><span style="font-family:arial,helvetica,sans-serif;"><?php


defined('BASEPATH') OR exit('No direct script access allowed');


use \Stripe\Stripe;
use \Stripe\Charge;

class Stripe_payment extends CI_Controller {
  
 public function __construct() {
  
 parent::__construct();
  
 }
  
          public function index()
         {
             $this->load->view('stripe');
          }
  
 public function checkout()
 {
 try { 
     
 //require_once(APPPATH.'libraries/Stripe/lib/Stripe.php');//or you
require_once('vendor/autoload.php');
 Stripe::setApiKey("sk_test_yzB05fegPoZQlPatLcallIHl"); //Replace with your Secret Key
  
 $charge = Charge::create(array(
 "amount" => 10000,
 "currency" => "usd",
 "card" => $_POST['stripeToken'],
 "description" => "Demo Transaction"
 ));
 echo "<h1>Your payment has been completed.</h1>"; 
 }
  
 catch(Stripe_CardError $e) {
  
 }
 catch (Stripe_InvalidRequestError $e) {
  
 } catch (Stripe_AuthenticationError $e) {
 } catch (Stripe_ApiConnectionError $e) {
 } catch (Stripe_Error $e) {
 } catch (Exception $e) {
 }
 }
  
}