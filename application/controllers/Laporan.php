<?php

class Laporan extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('m_pdf');
        if (!$this->session->userdata('id')) {
            redirect('login');
        }
    }
     function get_pelanggan() {
        $data['list_pelanggan'] = $this->Laporan_model->get_pelanggan_db();
        $this->load->view('laporan/laporan_tagihan', $data);
    }


    function lap_bulan() {
        $this->load->view('laporan/laporan_bulan');
    }

    function lap_bulan_proses() {
        $start = $this->input->post('tgl_start');
        $end = $this->input->post('tgl_end');
        $data['lap'] = $this->Laporan_model->lap_bulan_db($start, $end);
        $data['start'] = $start;
        $data['end'] = $end;
        $this->load->view('laporan/laporan_bulan_view', $data);
        $sumber = $this->load->view('laporan/laporan_bulan_view', $data, TRUE);
        $html = $sumber;
       $pdfFilePath = "Lap_Bulanan.pdf-".time;
        $pdf = $this->m_pdf->load();
        $pdf->AddPage('L');
        $pdf->WriteHTML($html);

        $pdf->Output($pdfFilePath, "D");
        exit();
    }

    
    function lap_pelanggan() {
        $this->load->view('laporan/laporan_pelanggan');
    }

    function lap_pel_proses() {
        $no_pel = $this->input->post('no_pel');
        $data['lap'] = $this->Laporan_model->lap_pel_db($no_pel);
        $this->load->view('laporan/laporan_pelanggan_view', $data);
       $sumber = $this->load->view('laporan/laporan_pelanggan_view', $data, TRUE);
        $html = $sumber;
       $pdfFilePath = "Lap_Pelanggan.pdf-".time;
        $pdf = $this->m_pdf->load();
        $pdf->AddPage('L');
        $pdf->WriteHTML($html);

        $pdf->Output($pdfFilePath, "D");
        exit();
    
    }

    function lap_bykec() {
        $data['kec'] = $this->Pelanggan_model->get_kec();
        $this->load->view('laporan/laporan_by_kec', $data);
    }

    function lap_bykec_proses() {
        $des = $this->input->post('kec');
        $data['lap'] = $this->Laporan_model->lap_bykec_db($des);
        $data['desa'] = $des;
        $this->load->view('laporan/laporan_by_kec_view', $data);
       $sumber = $this->load->view('laporan/laporan_by_kec_view', $data, TRUE);
        $html = $sumber;
       $pdfFilePath = "Lap_Kecamatan.pdf-".time();
        $pdf = $this->m_pdf->load();
        $pdf->AddPage('L');
        $pdf->WriteHTML($html);

        $pdf->Output($pdfFilePath, "D");
        exit();
    
    }
    function lap_tagihan() {
        $data['lap'] = $this->Laporan_model->lap_tagihan_db();
        $this->load->view('laporan/laporan_tagihan', $data);
    }
     function get_by_id($id) {
        $data['list_pelanggan'] = $this->Laporan_model->get_by_id_db($id);
        $this->load->view('laporan/laporan_tagihan_detail', $data);
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
      'kode_desa'=>$this->input->post('des'),
      'kode_gol'=>$this->input->post('sub'),
      'kode_tarif'=>$this->input->post('kodetarif'),
  );
  $this->Laporan_model->update_db($data,$id);
    header('location:'.site_url('Laporan/get_pelanggan'));
  }

}
