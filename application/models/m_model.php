<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class m_model extends CI_Model
  {

    function __construct()
    {
      parent::__construct();
      $this->table="rambut";
    }
    function select($where =null){
      if ($where !=null) {
        $this->db->where($where);
      }
      $query = $this->db->get($this->table);
      return $query->result_array();
    }
    function insert($data){
      $this->db->insert($this->table, $data);
    }
    function update($data, $where){
      $this->db->where($where);
      $this->db->update($this->table, $data);
    }
    function delete($where){
      $this->db->where($where);
      $this->db->delete($this->table);
    }
  }

 ?>
