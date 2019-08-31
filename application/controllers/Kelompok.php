b<?php
class Kelompok extends CI_Controller{
 
  function __construct() {
    parent::__construct();
    if (!$this->session->userdata('id')) {
      redirect('login');
    }
  }
  function get_kelompok(){
    $data['list_kelompok'] = $this->Kelompok_model->get_kelompok_db();
    $this->load->view('kelompok/Kelompok_view',$data);
  }
  function input(){
   $this->load->view('kelompok/Kelompok_input');
 }
 function input_proses() {
   $data  = array(
     'nm_kelompok'=>$this->input->post('nama_kelompok'),
   );
   $this->Kelompok_model->input_db($data);
   header('location:'.site_url('kelompok/get_kelompok'));
 }
 function hapus($id){
   $this->Kelompok_model->hapus_db($id);
   header('location:'.site_url('kelompok/get_kelompok'));
 }
 function get_by_id($id){
   $data['list_kelompok'] = $this->Kelompok_model->get_by_id_db($id);
   $this->load->view('kelompok/Kelompok_edit',$data);

 }
 function update(){
   $id = $this->input->post('id');
   $data  = array(
     'nm_kelompok'=>$this->input->post('nama'),
   );
   $this->Kelompok_model->update_db($data,$id);
   header('location:'.site_url('Kelompok/get_kelompok'));
 }
}
