<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class m_login extends CI_Model
  {

    public function __construct()
    {
      parent::__construct();
      $this->table="admin";
    }
    public function cek_user($username, $password){
      $this->db->from('admin');
      $this->db->where('username', $username);
      $this->db->where('password', $password);
      $query = $this->db->get();
      return $query->result_array();
    }
    public function ambilUser($user)
    {
      $this->db->select('*');
      $query = $this->db->get_where($this->table, array('username' => $user ));
      $query = $query->result_array();
      if($query){
        return $query[0];
      }
    }
    public function perbarui_user($username, $pertanyaan, $jawaban, $data){
      $this->db->select('*');
      $this->db->from('anggota');
      $this->db->where('username', $username);
      $data = array(
        'password' =>$data
      );
      $query =$this->db->update($this->table, $data);
      return $query;
    }
  }

 ?>
