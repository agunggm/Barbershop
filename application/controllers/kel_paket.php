<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
   class kel_paket extends CI_Controller {
     function __construct()
      {
        parent::__construct();
        $this->load->model('m_login');
        $this->load->model('m_paket');
      }
     public function index(){
       $session = $this->session->userdata('log_in');
      if ($session == TRUE) {
       $user_akun  = $this->m_login->ambilUser($this->session->userdata('username'));
       $data['user'] = $user_akun;
       $data['paket'] = $this->m_paket->select();
       $this->load->view('admin/header');
       $this->load->view('admin/kel_paket',$data);
       $this->load->view('admin/footer_barberman');
      }
      else {
        redirect(base_url('hal_utama'));
      }
     }
     function tamPaket(){
       $data = array(
            'nama_paket' =>$this->input->post('nama') ,
            'deskripsi_paket' =>$this->input->post('deskripsi') ,
            'harga_paket' =>$this->input->post('harga')
       );
       $this->m_paket->insert($data);
       redirect('kel_paket', 'refresh');
     }
     function edPaket(){
        $id_barberman = $this->input->post('id_barberman');
         $data = array(
           'nama_paket' =>$this->input->post('nama') ,
           'deskripsi_paket' =>$this->input->post('deskripsi') ,
           'harga_paket' =>$this->input->post('harga')
         );
       $where = array ('id_paket'=>$id_barberman);
       $this->m_paket->update($data, $where);
       redirect('kel_paket','refresh');
     }
     function hapPaket(){
       $id_user = $this->input->get('id');
       $where = array('id_paket' => $id_user );
       $this->m_paket->delete($where);
       redirect('kel_paket','refresh');
     }
   }
 ?>
