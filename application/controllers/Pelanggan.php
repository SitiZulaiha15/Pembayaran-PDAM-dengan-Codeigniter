<?php
class Pelanggan extends CI_Controller{
 
    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('id')) {
            redirect('login');
        }
    }
function get_pelanggan(){
  $data['kec'] = $this->Pelanggan_model->get_kec();
  $data['sub'] = $this->Pelanggan_model->get_sub();
  $data['list_pelanggan'] = $this->Pelanggan_model->get_pelanggan_db();
  $this->load->view('pelanggan/Pelanggan_view',$data);
}
function input(){

  $this->load->view('pelanggan/Pelanggan_input', $data);
}

//menampilkan data desa setelah dipilih kecamatan
function get_desa($kode_kec){
  $desa = $this->Pelanggan_model->get_desa_db($kode_kec);
  $data = "<option value=''>-- Pilih Desa--</option>";
  foreach ($desa->result() as $de) {
    $data .= "<option value='".$de->kode_desa."'>".$de->nama_desa."</option>";

  }
  echo $data;
}
function input_proses() {
  // $no_pel = 0;
  $kec = $this->input->post('kec');
  $tgl_daftar = date('dmY');
  $no_pel = $this->Pelanggan_model->no_pelanggan($tgl_daftar, $kec);
  // echo $no_pel;
  $data  = array(
      'no_pelanggan' => $no_pel,
      'nama'=>$this->input->post('nama'),
      'no_tlp'=>$this->input->post('tlp'),
      'no_kk'=>$this->input->post('kk'),
      'no_ktp'=>$this->input->post('ktp'),
      'pekerjaan'=>$this->input->post('kerja'),
      'dusun'=>$this->input->post('dusun'),
      'kode_desa'=>$this->input->post('des'),
      'kode_gol'=>$this->input->post('sub'),
      
  );
  $sambungan = array(
            'no_pelanggan' => $no_pel,
            'tgl_pasang' => $this->input->post('tgl_p'),
            'tgl_daftar' => date("Ymd"),
            'no_meteran'=>$this->input->post('no_mtr'),
            'status_vm'=>"Aktif",
           'kondisi_air'=>"Mengalir",
        );
  $this->Pelanggan_model->input_db($data,  $sambungan);
  header('location:'.site_url('pelanggan/get_pelanggan'));
}
function hapus($id){
  $this->Pelanggan_model->hapus_db($id);
    header('location:'.site_url('pelanggan/get_pelanggan'));
}
function get_by_id($id){
  $data['list_pelanggan'] = $this->Pelanggan_model->get_by_id_db($id);
  $this->load->view('pelanggan/Pelanggan_detail',$data);
}
function update(){
  $id = $this->input->post('id');
  $data  = array(
      'nama'=>$this->input->post('nama'),
      'no_tlp'=>$this->input->post('tlp'),
      'no_kk'=>$this->input->post('kk'),
      'no_ktp'=>$this->input->post('ktp'),
      'pekerjaan'=>$this->input->post('kerja'),
      'dusun'=>$this->input->post('dusun'),
        );
  $this->Pelanggan_model->update_db($data,$id);
    header('location:'.site_url('Pelanggan/get_pelanggan'));
  }
  function detail(){
  $id = $this->input->post('id');
  $data  = array(
      'nama'=>$this->input->post('nama'),
      'no_tlp'=>$this->input->post('tlp'),
      'no_kk'=>$this->input->post('kk'),
      'no_ktp'=>$this->input->post('ktp'),
      'pekerjaan'=>$this->input->post('kerja'),
      'dusun'=>$this->input->post('dusun'),
      'kode_desa'=>$this->input->post('des'),
      'kode_gol'=>$this->input->post('sub'),
      'kode_gol'=>$this->input->post('kode_tarif'),
  );
  $sambungan = array(
            'no_pelanggan' => $no_pel,
            'tgl_pasang' => $this->input->post('tgl_p'),
            'tgl_daftar' => date("Ymd"),
            'no_meteran'=>$this->input->post('no_mtr'),
            'status_vm'=>$this->input->post('status'),
            'kondisi_air'=>$this->input->post('kondisi'),

        );
  $this->Pelanggan_model->detail_db($data,$id);
    header('location:'.site_url('Pelanggan/get_pelanggan'));
  }
}
