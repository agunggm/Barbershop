<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
   class admin extends CI_Controller {
     function __construct()
      {
        parent::__construct();
        $this->load->model('m_login');
      }
     public function index(){
       $session = $this->session->userdata('log_in');
       $level = $this->session->userdata('level');
       if ($session == TRUE) {
         redirect (base_url('hal_admin'));
       }
       else {
         $this->load->view('admin/hal_login');

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
          redirect (base_url('hal_admin'));
       }
       else {
         //$data['user'] = array('username' => $this->input->post('username'),password =>$password = $this->input->post('password') );
         //$this->load->view('admin/header');
         //$this->load->view('admin/hal_coba',$data);
         //$this->load->view('admin/footer');
         redirect (base_url('hal_utama'));
       }
     }
     public function logout()
     {
       $this->session->sess_destroy();
       redirect(base_url('admin'));
     }
   }
