<?php
class Golongan extends CI_Controller {
   
    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('id')) {
            redirect('login');
        }
    }
    
    function get_golongan() {
       $data['list_kelompok'] = $this->Kelompok_model->get_kelompok_db();
        $data['list_golongan'] = $this->Golongan_model->get_golongan_db();
        $this->load->view('golongan/Golongan_view',$data);
    }
    function input(){
       
        $this->load->view('golongan/Golongan_input', $data);
    }
    function input_proses(){
        $data = array(
            'id_kelompok'=>$this->input->post('id_kel'),
            'nama_gol'=>$this->input->post('nama'),
            'tarif_a'=>$this->input->post('tarifa'),
            'tarif_b'=>$this->input->post('tarifb'),
            'tarif_c'=>$this->input->post('tarifc'),
            'kode_tarif'=>$this->input->post('kodetarif'),
        );
        $this->Golongan_model->input_db($data);
        header('location:'.site_url('golongan/get_golongan'));
   }
function hapus($id){
  $this->Golongan_model->hapus_db($id);
    header('location:'.site_url('golongan/get_golongan'));
}
function get_by_id($id){
  $data['list_golongan'] = $this->Golongan_model->get_by_id_db($id);
  $this->load->view('golongan/Golongan_edit',$data);
}
function update(){
  $id = $this->input->post('id');
  $data  = array(
            'id_kelompok'=>$this->input->post('id_kel'),
            'nama_gol'=>$this->input->post('nama'),
            'tarif_a'=>$this->input->post('tarifa'),
            'tarif_b'=>$this->input->post('tarifb'),
            'tarif_c'=>$this->input->post('tarifc'),
            'kode_tarif'=>$this->input->post('kodetarif'),
  );
  $this->Golongan_model->update_db($data,$id);
    header('location:'.site_url('Golongan/get_golongan'));
}
}
