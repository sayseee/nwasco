<?php
class Towns extends CI_Model {
 
function getTowns(){
  $this->db->select("*");
  $this->db->from('towns');
    
  $query = $this->db->get();
  return $query->result();

}
  
}