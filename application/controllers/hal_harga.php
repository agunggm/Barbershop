<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
   class hal_harga extends CI_Controller {
     function __construct()
      {
        parent::__construct();
        $this->load->model('m_login');
        $this->load->model('m_model');
        $this->load->model('m_paket');
      }
     public function index(){
       $session = $this->session->userdata('log_in');
       $level = $this->session->userdata('level');
       if ($session == FALSE) {
         $data['rambut'] = $this->m_model->select();
         $data['paket'] = $this->m_paket->select();
         $this->load->view('header');
         $this->load->view('hal_harga',$data);
         $this->load->view('footer');
       }
       else {
         redirect(base_url('hal_admin'));
       }
     }
   }
