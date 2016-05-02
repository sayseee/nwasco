<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//we need to call PHP's session object to access it through CI
 
class Users_model extends CI_Model {

 public function __construct()
    {
        parent::__construct();
    }

    public function getAllUsers()
        {
              $this->db->select("fname,lname,email,utility_id");
              $this->db->from('users');
              $query = $this->db->get();
              return $query->result();
        }

}