<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class m_laporan extends CI_Model
  {

    function __construct()
    {
      parent::__construct();
    }
    function filterdibayar($awal, $akhir){
      $sql = "SELECT * from antrian inner join rambut inner join paket inner join barberman on (antrian.id_rambut=rambut.id_rambut AND antrian.id_paket=paket.id_paket AND antrian.id_barberman=barberman.id_barberman) WHERE tanggal >= '".$awal."' AND tanggal <= '".$akhir."' AND status='2' GROUP BY id_antrian";
      $query=$this->db->query($sql);
      return $query->result_array();
    }
    function filtergagal($awal, $akhir){
      $sql = "SELECT * from antrian inner join rambut inner join paket inner join barberman on (antrian.id_rambut=rambut.id_rambut AND antrian.id_paket=paket.id_paket AND antrian.id_barberman=barberman.id_barberman) WHERE tanggal >= '".$awal."' AND tanggal <= '".$akhir."' AND status='3' GROUP BY id_antrian";
      $query=$this->db->query($sql);
      return $query->result_array();
    }
    function filterbarber($awal, $akhir){
      $sql = "SELECT *,count(antrian.id_barberman) as jumlah from antrian inner join rambut inner join paket inner join barberman on (antrian.id_rambut=rambut.id_rambut AND antrian.id_paket=paket.id_paket AND antrian.id_barberman=barberman.id_barberman) WHERE tanggal >= '".$awal."' AND tanggal <= '".$akhir."' AND status='2' GROUP BY antrian.id_barberman ORDER BY jumlah DESC LIMIT 1";
      $query=$this->db->query($sql);
      return $query->result_array();
    }
    function filtermodel($awal, $akhir){
      $sql = "SELECT *,count(antrian.id_rambut) as jumlah from antrian inner join rambut inner join paket inner join barberman on (antrian.id_rambut=rambut.id_rambut AND antrian.id_paket=paket.id_paket AND antrian.id_barberman=barberman.id_barberman) WHERE tanggal >= '".$awal."' AND tanggal <= '".$akhir."' AND status='2' GROUP BY antrian.id_rambut ORDER BY jumlah DESC LIMIT 1";
      $query=$this->db->query($sql);
      return $query->result_array();
    }
    function filterpaket($awal, $akhir){
      $sql = "SELECT *,count(antrian.id_paket) as jumlah from antrian inner join rambut inner join paket inner join barberman on (antrian.id_rambut=rambut.id_rambut AND antrian.id_paket=paket.id_paket AND antrian.id_barberman=barberman.id_barberman) WHERE tanggal >= '".$awal."' AND tanggal <= '".$akhir."' AND status='2'GROUP BY antrian.id_paket ORDER BY jumlah DESC LIMIT 1";
      $query=$this->db->query($sql);
      return $query->result_array();
    }
  }

 ?>
