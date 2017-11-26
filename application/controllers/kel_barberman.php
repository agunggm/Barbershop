<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
   class kel_barberman extends CI_Controller {
     function __construct()
      {
        parent::__construct();
        $this->load->model('m_login');
        $this->load->model('m_barberman');
      }
     public function index(){
       $session = $this->session->userdata('log_in');
      if ($session == TRUE) {
       $user_akun  = $this->m_login->ambilUser($this->session->userdata('username'));
       $data['user'] = $user_akun;
       $data['barberman'] = $this->m_barberman->select();
       $this->load->view('admin/header');
       $this->load->view('admin/kel_barberman',$data);
       $this->load->view('admin/footer_barberman');
      }
      else {
        redirect(base_url('hal_utama'));
      }
     }
     function tamBarber(){
       $nmfile = "file_".time();
       $config['upload_path'] = './assets/images/barberman';
       $config['allowed_types'] = 'jpg|png|jpeg|bmp';
       $config['max_size'] = '5000';
       $config['file_name'] = $nmfile;
       $this->upload->initialize($config);
       if ($_FILES['foto']['name']) {
         if ($this->upload->do_upload('foto')) {
           $gbr = $this->upload->data();
         }
         else {
           print_r($this->upload->display_errors());
         }
       }
       $data = array(
            'nama_barber' =>$this->input->post('nama') ,
            'foto_barber' =>$gbr['file_name']
       );
       $this->m_barberman->insert($data);
       redirect('kel_barberman', 'refresh');
     }
     function edBarber(){
       $id_barberman = $this->input->post('id_barberman');
         $nmfile = "file_".time();
         $config['upload_path'] = './assets/images/barberman';
         $config['allowed_types'] = 'jpg|png|jpeg|bmp';
         $config['max_size'] = '5000';
         $config['file_name'] = $nmfile;
         $this->upload->initialize($config);
         if ($_FILES['foto']['name']) {
           if ($this->upload->do_upload('foto')) {
             $gbr = $this->upload->data();
           }
           else {
             print_r($this->upload->display_errors());
           }
         }
         $data = array(
           'nama_barber' =>$this->input->post('nama') ,
           'foto_barber' =>$gbr['file_name']
         );
       $where = array ('id_barberman'=>$id_barberman);
       $this->m_barberman->update($data, $where);
       redirect('kel_barberman','refresh');
     }
     function hapBarber(){
       $id_user = $this->input->get('id');
       $where = array('id_barberman' => $id_user );
       $this->m_barberman->delete($where);
       redirect('kel_barberman','refresh');
     }
   }
 ?>
