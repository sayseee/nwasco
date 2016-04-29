<?php
class Licences_model extends CI_Model {

function getLicence($cu_id = false)
{
  $this->db->select('licence, utility_id');
  $this->db->join('cunits', 'cunits.cu_id=licence_conditions.utility_id');
  if ($cu_id !== false)
    $this->db->where('licence_conditions.utility_id', $cu_id);
  $this->db->order_by('l_id', 'ASC');
  $query = $this->db->get('licence_conditions');

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
