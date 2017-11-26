<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class m_antrian extends CI_Model
  {

    function __construct()
    {
      parent::__construct();
      $this->table="antrian";
    }
    function select($where =null){
      if ($where !=null) {
        $this->db->where($where);
      }
      $sql = "SELECT * from antrian inner join rambut inner join paket inner join barberman on (antrian.id_rambut=rambut.id_rambut AND antrian.id_paket=paket.id_paket AND antrian.id_barberman=barberman.id_barberman) GROUP BY id_antrian";
      $query=$this->db->query($sql);
      return $query->result_array();
    }
    function rinci($where){
      $sql = "SELECT * from antrian inner join rambut inner join paket inner join barberman on (antrian.id_rambut=rambut.id_rambut AND antrian.id_paket=paket.id_paket AND antrian.id_barberman=barberman.id_barberman) WHERE id_antrian='".$where."' GROUP BY id_antrian";
      $query=$this->db->query($sql);
      return $query->result_array();
    }
    function riwayat(){
      $sekarang = date("ymd");
      $sql = "SELECT * from antrian inner join rambut inner join paket inner join barberman on (antrian.id_rambut=rambut.id_rambut AND antrian.id_paket=paket.id_paket AND antrian.id_barberman=barberman.id_barberman) WHERE status!='0' AND LEFT(id_antrian,6)='".$sekarang."'  ORDER BY id_antrian ASC LIMIT 10";
      $query=$this->db->query($sql);
      return $query->result_array();
    }
    function proses(){
      $sekarang = date("ymd");
      $sql = "SELECT * from antrian inner join rambut inner join paket inner join barberman on (antrian.id_rambut=rambut.id_rambut AND antrian.id_paket=paket.id_paket AND antrian.id_barberman=barberman.id_barberman) WHERE status='1' AND LEFT(id_antrian,6)='".$sekarang."' GROUP BY id_antrian";
      $query=$this->db->query($sql);
      return $query->result_array();
    }
    function berikutnya(){
      $sekarang = date("ymd");
      $sql = "SELECT * from antrian inner join rambut inner join paket inner join barberman on (antrian.id_rambut=rambut.id_rambut AND antrian.id_paket=paket.id_paket AND antrian.id_barberman=barberman.id_barberman) WHERE status='0' AND LEFT(id_antrian,6)='".$sekarang."'  ORDER BY id_antrian ASC LIMIT 1 ";
      $query=$this->db->query($sql);
      return $query->result_array();
    }
    function next(){
      $sekarang = date("ymd");
      $sql = "SELECT * from antrian inner join rambut inner join paket inner join barberman on (antrian.id_rambut=rambut.id_rambut AND antrian.id_paket=paket.id_paket AND antrian.id_barberman=barberman.id_barberman) WHERE status='0' AND LEFT(id_antrian,6)='".$sekarang."'  ORDER BY id_antrian ASC LIMIT 10 ";
      $query=$this->db->query($sql);
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
    function buat_kode()
  	{
      $sekarang = date("ymd");
      $sql = "SELECT RIGHT(id_antrian,3) as kode from antrian WHERE LEFT(id_antrian,6)='".$sekarang."' ORDER BY id_antrian DESC LIMIT 1";
      $query=$this->db->query($sql);
  		//cek dulu apakah ada sudah ada kode di tabel.
  		if($query->num_rows() <> 0){
  		//jika kode ternyata sudah ada.
  		$data = $query->row();
  		$kode = intval($data->kode) + 1;
  		}else{
  		//jika kode belum ada
  		$kode = 1;
  		}
  		$kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
  		$kodejadi = date("ymd").$kodemax;
  		return $kodejadi;
  	}
  }

 ?>
