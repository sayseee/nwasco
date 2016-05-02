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
//List Licence Conditions for Commercial Utilities Details Page
   public function listUtilities($cu_id = false) {
      $query = $this->db->get_where('cunits', array('cu_id' => $cu_id));

      return $query->result_array();
}
//List Licence Conditions for Commercial Utilities Details Page
   public function listLcondtions($id) {
      $query = $this->db->get_where('licence_conditions', array('utility_id' => $id));

      return $query->result_array();
}
//List Directives for Commercial Utilities Details Page
    public function listTowns($id) {
        $query = $this->db->get_where('towns', array('utility_id' => $id));

        return $query->result_array();
  }
//List Directives for Commercial Utilities Details Page
   public function listDirectives($id) {
        $query = $this->db->get_where('directives', array('utility_id' => $id));

        return $query->result_array();
  }
//List Projects for Commercial Utilities Details Page
    public function listTarrifs($id) {
        $query = $this->db->get_where('tariff_conditions', array('utility_id' => $id));

      return $query->result_array();
    }
//List Projects for Commercial Utilities Details Page
    public function listProjects($id) {
        $query = $this->db->get_where('projects', array('utility_id' => $id));

      return $query->result_array();
    }


    public function getUtilities()
    {
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