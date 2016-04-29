<?php
class Projects_model extends CI_Model {

function getProjects($cu_id = false)
{
  $this->db->select('project, utility_id');
  $this->db->join('cunits', 'cunits.cu_id=projects.utility_id');
  if ($cu_id !== false)
    $this->db->where('projects.utility_id', $cu_id);
  $this->db->order_by('proj_id', 'ASC');
  $query = $this->db->get('projects');

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
