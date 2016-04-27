<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//we need to call PHP's session object to access it through CI
class Main extends CI_Controller {

   function __construct()
    {
        // this is your constructor
        parent::__construct();
        $this->load->helper('form');  
	$this->load->model('core'); // load model  
	$this->load->model('towns'); // load model  
    }
    
 function index()
 { 
   
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['fname'] = $session_data['fname'];
     $data['lname'] = $session_data['lname'];
     $data['level'] = $session_data['level']; 
   }
   else
   {
     //If no session, redirect to login page
     redirect('login');
   }
 }

 function logout()
 {
   // Unset User Data
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('username');
        $this->session->sess_destroy();
 
        // Set Message
        $this->session->set_flashdata('logged_out','You have been Logged Out');
        redirect('login');
 }

} 