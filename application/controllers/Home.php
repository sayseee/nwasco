<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//we need to call PHP's session object to access it through CI
class Home extends CI_Controller {

   function __construct()
    {
        // this is your constructor
        parent::__construct();
        $this->load->helper('form');
	$this->load->model('core'); // load model
  $this->load->model('towns'); // load model
  $this->load->model('utilities_model'); // load model
  $this->load->model('directives_model'); // load model
  $this->load->model('licences_model'); // load model
  $this->load->model('projects_model'); // load model
    }

 function index()
 {

 $data['utilities']  = $this->utilities_model->getUtilities();
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['fname'] = $session_data['fname'];
     $data['lname'] = $session_data['lname'];
     $data['level'] = $session_data['level'];
     $this->load->view('header', $data);
     $this->load->view('sidebar-left', $data);
     $this->load->view('dashboard', $data);
     $this->load->view('sidebar-right', $data);
     $this->load->view('footer', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('login');
   }
 }

 function logout()
{
    $session_data = $this->session->userdata();
        foreach ($userdata as $key => $value) {
            if ($key != 'id' && $key != 'ip_address' && $key != 'timestamp' && $key != 'data') {
                $this->session->unset_userdata($key);
            }
        }
    $this->session->sess_destroy();
        redirect('login');
 }

}