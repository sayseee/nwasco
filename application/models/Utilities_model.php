<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//we need to call PHP's session object to access it through CI

class Utilities_model extends CI_Model {
 
   public function __construct()
    {
        parent::__construct();
    }
 
 
    public function getAll()
    {
        $query = $this->db->get('cunits');
        return $query->result();
    }

 public function getById($id) {
  if($id != FALSE) {
    $query = $this->db->get_where('cunits', array('cu_id' => $id));
    return $query->row_array();
  }
  else {
    return FALSE;
  }
}

    private function insert($post) 
    {
        return $this->db->insert('cunits', $this);
    }
     
    private function update($post) 
    {
        $this->db->set('title', $this->title);
        $this->db->set('content', $this->content);
        $this->db->where('id', $this->id);
        return $this->db->update('post');
    }
 
    public function delete() 
    {
        $this->db->where('id', $this->id);
        return $this->db->delete('post');
    }
     
    public function save() 
    {
        if (isset($this->id)) {  
            return $this->update();
        } else {
            return $this->insert();
        }
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

    public function listTowns($id) {  
      $this->db->select('*');
        $this->db->from('towns'); 
        $this->db->where('utility_id',$id);
        $this->db->order_by('town','asc');
        $query = $this->db->get();
        return $query->result_array();
    }

//List Directives for Commercial Utilities Details Page
    public function listDirectives($id) {  
      $this->db->select('*');
        $this->db->from('directives'); 
        $this->db->where('utility_id',$id);
        $this->db->order_by('directive','asc');
        $query = $this->db->get();
        return $query->result_array();
    }
 
//List Projects for Commercial Utilities Details Page
//
    public function listTarrifs($id) {  
      $this->db->select('*');
        $this->db->from('tariff_conditions'); 
        $this->db->where('utility_id',$id);
        $this->db->order_by('tariff_id','asc');
        $query = $this->db->get();
        return $query->result_array();
    }

 
//List Projects for Commercial Utilities Details Page
//
    public function listProjects($id) {  
      $this->db->select('*');
        $this->db->from('projects'); 
        $this->db->where('utility_id',$id);
        $this->db->order_by('project','asc');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getUtilities()
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
 
}