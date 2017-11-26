<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
   class hal_admin extends CI_Controller {
     function __construct()
      {
        parent::__construct();
        $this->load->model('m_login');
        $this->load->model('m_antrian');
      }
     public function index(){
       $session = $this->session->userdata('log_in');
      if ($session == TRUE) {
       $user_akun  = $this->m_login->ambilUser($this->session->userdata('username'));
       $data['user'] = $user_akun;
       $data['antrian'] = $this->m_antrian->proses();
       $data['berikutnya'] = $this->m_antrian->berikutnya();
       $this->load->view('admin/header');
       $this->load->view('admin/hal_admin',$data);
       $this->load->view('admin/footer');
      }
      else {
        redirect(base_url('hal_utama'));
      }
     }
   }
 ?>
