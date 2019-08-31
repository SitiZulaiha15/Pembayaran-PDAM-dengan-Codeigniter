<?php
class Petugas extends CI_Controller{
 
    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('id')) {
            redirect('login');
        }
    }
function get_petugas(){
  $data['list_petugas'] = $this->Petugas_model->get_petugas_db();
  $this->load->view('petugas/Petugas_view',$data);
}
function input(){
  $this->load->view('petugas/Petugas_input');
}
function input_proses() {
  $data  = array(
      'nama'=>$this->input->post('nama'),
      'jabatan'=>$this->input->post('jb'),
      'username'=>$this->input->post('username'),
      'password'=>$this->input->post('pass'),
  );
  $this->Petugas_model->input_db($data);
  header('location:'.site_url('Petugas/get_petugas'));
}
function hapus($id){
  $this->Petugas_model->hapus_db($id);
    header('location:'.site_url('Petugas/get_petugas'));
}
function get_by_id($id_petugas){
  $data['list_petugas'] = $this->Petugas_model->get_by_id_db($id_petugas);
  $this->load->view('petugas/Petugas_edit',$data);

}
function update(){
  $id = $this->input->post('id');
  $data  = array(
      'nama'=>$this->input->post('nama'),
      'jabatan'=>$this->input->post('jb'),
      'username'=>$this->input->post('username'),
      'password'=>$this->input->post('pass'),
  );
  $this->Petugas_model->update_db($data,$id);
    header('location:'.site_url('Petugas/get_petugas'));
}
}
