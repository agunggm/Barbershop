<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
   class hal_utama extends CI_Controller {
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
         $this->load->view('header_utama');
         $this->load->view('hal_utama',$data);
         $this->load->view('footer_utama');
       }
       else {
         redirect(base_url('hal_admin'));
       }
     }
     function login()
     {
       $username = $this->input->post('username');
       $password = $this->input->post('password');
       $cek = $this->m_login->cek_user($username, $password);
       if (count($cek)==1) {
         $user_login = array('log_in' => TRUE,
                              'username'=>$username);
        $this->session->set_userdata($user_login);
         $level = $this->session->userdata('level');
          redirect (base_url('hal_user'));
       }
       else {
         $this->session->set_flashdata('notif','Maaf, username atau password yang anda masukan salah atau belum terdaftar');
         redirect (base_url('hal_utama'));
       }
     }
     public function logout()
     {
       $this->session->sess_destroy();
       redirect(base_url('hal_utama'));
     }
   }
