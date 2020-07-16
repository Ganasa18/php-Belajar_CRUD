<?php

class Model_user extends CI_Model
{

  public function getUserWhere($where = null)
  {
    return $this->db->get_where('user', $where);
  }

  function num_users()
  {

    $query = $this->db->get('user');
    return $query->num_rows();
  }
}
