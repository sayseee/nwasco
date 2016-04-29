<?php

if(!defined("BASEPATH")) exit("No direct script access allowed");
class Licence extends CI_Controller {

function __Construct(){
  parent::__Construct ();
	$this->load->model('core'); // load model
  $this->load->model('licences_model'); // load model
}

function index()
 {

   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['fname'] = $session_data['fname'];
     $data['lname'] = $session_data['lname'];
     $data['level'] = $session_data['level'];
	$this->data['directives'] = $this->dmodel->listDirectives(); // calling Post model method getPosts()
    $this->load->view('header', $data);
    $this->load->view('sidebar-left', $data);
    $this->load->view('licence_conditions', $data);
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