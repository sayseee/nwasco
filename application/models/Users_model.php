<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//we need to call PHP's session object to access it through CI
 
class Users_model extends CI_Model {

 public function __construct()
    {
        parent::__construct();
    }

    public function getAllUsers($cu_id= false)
    {
      $this->db->select('*');
      $this->db->from('users');
      $this->db->join('cunits', 'cunits.cu_id=users.utility_id');
      if ($cu_id !== false)
        $this->db->where('users.utility_id', $cu_id);
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

    public function getLevels()
    {
        $this->db->order_by('name', 'ASC');
        $query = $this->db->get('level');

        if($query->result() == TRUE)
        {
          foreach($query->result_array() as $row)
          {
            $result[] = $row;
          }
          return $result;
        }
    }
   function add_users($data)
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
     
}