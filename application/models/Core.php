<?php
class Core extends CI_Model {
     
function login($email, $password)
 {
   $this -> db -> select('id,fname, lname, password, email, level');
   $this -> db -> from('users');
   $this -> db -> where('email', $email);
   $this -> db -> where('password', MD5($password));
   $this -> db -> limit(1); 
     
   $query = $this -> db -> get();

   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
    

function add_users()
{
    $this->db->insert('users', $data); 
    $return;
}

function update_users()
{
    $this->db->where('user_id', 1);
    $this->db->update('users', $data);

}

function delete_users()
{
    $this->db->where('user_id', $this->url->segment(3));
    $this->db->delete('users');

}
     
function getTowns(){
  $this->db->select("*");
  $this->db->from('towns');
    
  $query = $this->db->get();
  return $query->result();
}
    
function getDirective(){
  $this->db->select("*");
  $this->db->from('directive_cats');
   
  $query = $this->db->get();
  return $query->result();
}
  
 
}