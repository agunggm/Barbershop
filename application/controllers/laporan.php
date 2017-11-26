<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
   class laporan extends CI_Controller {
     function __construct()
      {
        parent::__construct();
        $this->load->model('m_login');
        $this->load->model('m_laporan');
        $this->load->model('m_barberman');
        $this->load->model('m_model');
        $this->load->model('m_paket');
      }
     public function index(){
       $session = $this->session->userdata('log_in');
       if ($session == TRUE) {
         $user_akun  = $this->m_login->ambilUser($this->session->userdata('username'));
         $data['user'] = $user_akun;
       $this->load->view('admin/header');
       $data['laporan']=0;
       $this->load->view('admin/laporan', $data);
       $this->load->view('admin/footer_laporan');
     }
     else {
       redirect(base_url('hal_utama'));
     }
   }
   function filter(){
     $session = $this->session->userdata('log_in');
     if ($session == TRUE) {
     $user_akun  = $this->m_login->ambilUser($this->session->userdata('username'));
     $this->load->view('admin/header');
     $data['laporan']=1;
     $aw = $this->input->post('awal');
     $ak = $this->input->post('akhir');
     $newaw = DateTime::createFromFormat('m/d/Y', $aw);
     $newak = DateTime::createFromFormat('m/d/Y', $ak);
     $awal  = date('Y-m-d',$newaw->getTimestamp());
     $akhir  = date('Y-m-d',$newak->getTimestamp());
     $data['dibayar'] = count($this->m_laporan->filterdibayar($awal, $akhir));
     $data['kedaluwarsa'] = count($this->m_laporan->filtergagal($awal, $akhir));
     $data['barberman'] = $this->m_laporan->filterbarber($awal, $akhir);
     $data['model'] = $this->m_laporan->filtermodel($awal, $akhir);
     $data['paket'] = $this->m_laporan->filterpaket($awal, $akhir);
     $data['pendapatan'] = $this->m_laporan->filterdibayar($awal, $akhir);
     $data['awal'] = $awal;
     $data['akhir'] = $akhir;
     $this->load->view('admin/laporan', $data);
     $this->load->view('admin/footer');
   }
 }
 }
