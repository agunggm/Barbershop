<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
   class hal_galeri extends CI_Controller {
     function __construct()
      {
        parent::__construct();
        $this->load->model('m_login');
      }
     public function index(){
       $session = $this->session->userdata('log_in');
       $level = $this->session->userdata('level');
       if ($session == FALSE) {
         $this->load->view('header');
         $this->load->view('hal_galeri');
         $this->load->view('footer');
       }
       else {
         redirect(base_url('hal_admin'));
       }
     }
   }
