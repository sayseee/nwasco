<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Users extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();        
        $this->load->model('core'); // load model
        $this->load->model('towns'); // load model
        $this->load->model('users_model'); // load model
        $this->load->model('utilities_model'); // load model
    }
 
  function index()
 { 
        $this->data['users'] = $this->users_model->getAllUsers(); 
        $data['utilities']  = $this->utilities_model->getUtilities();
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['fname'] = $session_data['fname'];
     $data['lname'] = $session_data['lname'];
     $data['level'] = $session_data['level'];  
      $this->load->view('header', $data);
         $this->load->view('sidebar-left', $data);
           $this->load->view('templates/view_users', $this->data);
         $this->load->view('sidebar-right', $data);
         $this->load->view('footer', $data);
       }
       else
       {
         //If no session, redirect to login page
         redirect('login');
       } 
    }
  
}