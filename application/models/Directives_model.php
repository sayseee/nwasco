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

function getDirectives($cu_id = false)
{
  $this->db->select('directive, utility_id');
  $this->db->join('cunits', 'cunits.cu_id=directives.utility_id');
  if ($cu_id !== false)
    $this->db->where('directives.utility_id', $cu_id);
  $this->db->order_by('dir_id', 'ASC');
  $query = $this->db->get('directives');

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
