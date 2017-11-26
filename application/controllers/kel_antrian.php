<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
   class kel_antrian extends CI_Controller {
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
       $data['antrian'] = $this->m_antrian->select();
       $this->load->view('admin/header');
       $this->load->view('admin/kel_antrian',$data);
       $this->load->view('admin/footer_barberman');
      }
      else {
        redirect(base_url('hal_utama'));
      }
     }
     function tamAntrian(){
       $data = array(
            'id_antrian' =>$this->input->post('id_antrian') ,
            'nama' =>$this->input->post('nama') ,
            'telp' =>$this->input->post('telp') ,
            'tanggal' =>date('Y-m-d') ,
            'id_paket' =>$this->input->post('id_paket') ,
            'id_rambut' =>$this->input->post('id_rambut') ,
            'id_barberman' =>$this->input->post('id_barberman') ,
            'status' =>"0" ,
       );
       $this->m_antrian->insert($data);
       $data['tiket']=1;
       $where = $this->input->post('id_antrian');
       $data['rincian'] =$this->m_antrian->rinci($where);
       $this->load->view('header');
       $this->load->view('hal_tiket',$data);
       $this->load->view('footer');
     }
     function prosesAntrian(){
        $id_antrian = $this->input->get('id');
         $data = array(
           'status' =>"1"
         );
       $where = array ('id_antrian'=>$id_antrian);
       $this->m_antrian->update($data, $where);
       redirect('hal_admin','refresh');
     }
     function bayarAntrian(){
        $id_antrian = $this->input->get('id');
         $data = array(
           'status' =>"2"
         );
       $where = array ('id_antrian'=>$id_antrian);
       $this->m_antrian->update($data, $where);
       redirect('hal_admin','refresh');
     }
     function batalAntrian(){
       $id_antrian = $this->input->get('id');
        $data = array(
          'status' =>"3"
        );
      $where = array ('id_antrian'=>$id_antrian);
      $this->m_antrian->update($data, $where);
      redirect('hal_admin','refresh');
     }
     function hapBarber(){
       $id_user = $this->input->get('id');
       $where = array('id_barberman' => $id_user );
       $this->m_barberman->delete($where);
       redirect('kel_barberman','refresh');
     }
     function hapAntrian(){
       $id_user = $this->input->get('id');
       $where = array('id_antrian' => $id_user );
       $this->m_antrian->delete($where);
       redirect('kel_antrian','refresh');
     }
   }
 ?>
