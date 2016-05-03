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

    function add() { 
      
        $data['levels'] = $this->users_model->getLevels();
        $data['utilities']  = $this->utilities_model->getUtilities();
        $data['users'] = $this->users_model->getAllUsers();
     if($this->session->userdata('logged_in'))
       {
         $session_data = $this->session->userdata('logged_in');
         $data['fname'] = $session_data['fname'];
         $data['lname'] = $session_data['lname'];
         $data['level'] = $session_data['level'];
          
      $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

      //Validating Name Field
      $this->form_validation->set_rules('fname', 'First Name', 'required');

      //Validating Name Field
      $this->form_validation->set_rules('fname', 'Last Name', 'required');

      //Validating Email Field
      $this->form_validation->set_rules('email', 'email', 'trim|required|xss_clean');

      //Validating Mobile no. Field
      $this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean');

      if ($this->form_validation->run() == FALSE) {
        $this->load->view('header', $data);
             $this->load->view('sidebar-left', $data);
      $this->load->view('templates/add_users');
             $this->load->view('sidebar-right', $data);
             $this->load->view('footer', $data);
      } else {
      //Setting values for tabel columns 
      $data = array(
      'fname' => $this->input->post('fname'),
      'lname' => $this->input->post('lname'),
      'password' => md5($this->input->post("password")),
      'email' => $this->input->post('email'),
      'utility_id' => $this->input->post('utility_id'),
      'level' => $this->input->post('level')
      );
      //Transfering data to Model
      $this->users_model->add_users($data);
       $data['levels'] = $this->users_model->getLevels();
        $data['utilities']  = $this->utilities_model->getUtilities();
        $data['users'] = $this->users_model->getAllUsers();
        $session_data = $this->session->userdata('logged_in');
         $data['fname'] = $session_data['fname'];
         $data['lname'] = $session_data['lname'];
         $data['level'] = $session_data['level'];
      $data['message'] = 'Data Inserted Successfully';

      //Loading View
             $this->load->view('header', $data);
             $this->load->view('sidebar-left', $data);
             $this->load->view('templates/add_users');
             $this->load->view('sidebar-right', $data);
             $this->load->view('footer', $data);
            }

           }
           else
           {
             //If no session, redirect to login page
             redirect('login');
           } 

    }
}