<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
   class hal_tiket extends CI_Controller {
     function __construct()
      {
        parent::__construct();
        $this->load->model('m_login');
        $this->load->model('m_antrian');
        $this->load->model('m_model');
        $this->load->model('m_paket');
        $this->load->model('m_barberman');
      }
     public function index(){
       $session = $this->session->userdata('log_in');
       $level = $this->session->userdata('level');
       if ($session == FALSE) {
         $data['rambut'] = $this->m_model->select();
         $data['paket'] = $this->m_paket->select();
         $data['barberman'] = $this->m_barberman->select();
         $data['kode'] = $this->m_antrian->buat_kode();
         $data['tiket']=0;
         $this->load->view('header');
         $this->load->view('hal_tiket',$data);
         $this->load->view('footer');
       }
       else {
         redirect(base_url('hal_admin'));
       }
     }
   }
