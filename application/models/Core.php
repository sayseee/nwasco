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

public function send_mail() {
    $this->load->library( 'email' );
    $this->email->from( 'jdoe@gmail.com', 'John Doe' );
    $this->email->to( 'jane_doe@gmail.com' );
    $this->email->subject( 'Some subject' );
    $this->email->message( $this->load->view( 'emails/message', $data, true ) );
    $this->email->send();
}

}