<?php
class Directives_model extends CI_Model {
    
function getDirective(){
  $this->db->select("*");
  $this->db->from('directive_cats'); 
  $query = $this->db->get();
  
  if($query->result() == TRUE)
  {
    foreach($query->result_array() as $row)
    {
      $result[] = $row;
    }
    return $result;
  }
}
     
function getDirectives(){
  $this->db->select("*");
  $this->db->from('directives'); 
  $query = $this->db->get();
  
  if($query->result() == TRUE)
  {
    foreach($query->result_array() as $row)
    {
      $result[] = $row;
    }
    return $result;
  }
} 
 
}