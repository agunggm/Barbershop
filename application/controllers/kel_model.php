<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
   class kel_model extends CI_Controller {
     function __construct()
      {
        parent::__construct();
        $this->load->model('m_login');
        $this->load->model('m_model');
      }
     public function index(){
       $session = $this->session->userdata('log_in');
      if ($session == TRUE) {
       $user_akun  = $this->m_login->ambilUser($this->session->userdata('username'));
       $data['user'] = $user_akun;
       $data['model'] = $this->m_model->select();
       $this->load->view('admin/header');
       $this->load->view('admin/kel_model',$data);
       $this->load->view('admin/footer_barberman');
      }
      else {
        redirect(base_url('hal_utama'));
      }
     }
     function tamModel(){
       $nmfile = "file_".time();
       $config['upload_path'] = './assets/images/model';
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
            'nama_rambut' =>$this->input->post('nama') ,
            'deskripsi_rambut' =>$this->input->post('deskripsi') ,
            'harga_rambut' =>$this->input->post('harga') ,
            'gambar_rambut' =>$gbr['file_name']
       );
       $this->m_model->insert($data);
       redirect('kel_model', 'refresh');
     }
     function edModel(){
       $id_barberman = $this->input->post('id_barberman');
         $nmfile = "file_".time();
         $config['upload_path'] = './assets/images/model';
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
           'nama_rambut' =>$this->input->post('nama') ,
           'deskripsi_rambut' =>$this->input->post('deskripsi') ,
           'harga_rambut' =>$this->input->post('harga') ,
           'gambar_rambut' =>$gbr['file_name']
         );
       $where = array ('id_rambut'=>$id_barberman);
       $this->m_model->update($data, $where);
       redirect('kel_model','refresh');
     }
     function hapModel(){
       $id_user = $this->input->get('id');
       $where = array('id_rambut' => $id_user );
       $this->m_model->delete($where);
       redirect('kel_model','refresh');
     }
   }
 ?>
