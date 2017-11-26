<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
   class hal_antrian extends CI_Controller {
     function __construct()
      {
        parent::__construct();
        $this->load->model('m_login');
        $this->load->model('m_antrian');
      }
     public function index(){
       $session = $this->session->userdata('log_in');
       $level = $this->session->userdata('level');
       if ($session == FALSE) {
         $data['riwayat'] = $this->m_antrian->riwayat();
         $data['next'] = $this->m_antrian->next();
         $data['berikutnya'] = $this->m_antrian->berikutnya();
         $this->load->view('header');
         $this->load->view('hal_antrian',$data);
         $this->load->view('footer');
       }
       else {
         redirect(base_url('hal_admin'));
       }
     }
   }
