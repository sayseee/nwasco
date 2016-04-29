<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//we need to call PHP's session object to access it through CI

class Utilities_model extends CI_Model {

   function __construct()
    {
          parent::__construct();
    }

function getTowns($cu_id = false)
{
  $this->db->select('town, utility_id');
  $this->db->join('cunits', 'cunits.cu_id=towns.utility_id');
  if ($cu_id !== false)
    $this->db->where('towns.utility_id', $cu_id);
  $this->db->order_by('town', 'ASC');
  $query = $this->db->get('towns');

  if($query->result() == TRUE)
  {
    foreach($query->result_array() as $row)
    {
      $result[] = $row;
    }
    return $result;
  }
}

function getUtilities()
{
  $this->db->select('cu_id, utility');
  $this->db->order_by('utility', 'ASC');
  $query = $this->db->get('cunits');

  if($query->result() == TRUE)
  {
    foreach($query->result_array() as $row)
    {
      $result[] = $row;
    }
    return $result;
  }
}

function insertUtility($data){
		$this->db->insert('cunits', $data);	// insert data into `students table`
		if ($this->db->affected_rows() > 0) {
         return true;
         }
         else {
         return false;
         }
	}

}