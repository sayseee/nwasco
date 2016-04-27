<?php

if(!defined("BASEPATH")) exit("No direct script access allowed");
class Towns extends CI_Controller {
 
function __Construct(){
  parent::__Construct (); 
   $this->load->model('core'); // load model
}
 
public function index() {
   $this->data['towns'] = $this->core->getTowns(); // calling Post model method getPosts()
   $this->load->view('sidebar-right', $this->data); // load the view file , we are passing $data array to view file
}
 
 
} 