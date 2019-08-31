<?php
class Sub_golongan extends CI_Controller {
   
    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('id')) {
            redirect('login');
        }
    }
    function get_sub_golongan() {
       $data['list_golongan'] = $this->Golongan_model->get_golongan_db();
      $data['list_sub_golongan'] = $this->Sub_golongan_model->get_sub_golongan_db();
      $this->load->view('sub_golongan/Sub_golongan_view',$data);
          }
    function input(){
       
        $this->load->view('sub_golongan/Sub_golongan_input', $data);
    }
    function input_proses(){
        $data = array(
            'id_sub'=>$this->input->post('id_sub'),
            'nama_sub'=>$this->input->post('nama'),
            'kode_gol'=>$this->input->post('kode_gol'),
        );
        $this->Sub_golongan_model->input_db($data);
        header('location:'.site_url('sub_golongan/get_sub_golongan'));
   }
function hapus($id){
  $this->Sub_golongan_model->hapus_db($id);
    header('location:'.site_url('sub_golongan/get_sub_golongan'));
}
function get_by_id($id){
  $data['list_sub_gol'] = $this->Sub_golongan_model->get_by_id_db($id);
  $this->load->view('sub_golongan/Sub_golongan_edit',$data);

}
function update(){
  $id = $this->input->post('id');
  $data  = array(
    'id_sub'=>$this->input->post('id_sub'),
    'nama_sub'=>$this->input->post('nama'),
    'kode_gol'=>$this->input->post('kode_gol'),
  );
  $this->Sub_golongan_model->update_db($data,$id);
    header('location:'.site_url('sub_golongan/get_sub_golongan'));
}
}
