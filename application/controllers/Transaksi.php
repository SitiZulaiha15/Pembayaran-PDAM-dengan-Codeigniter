<?php

class Transaksi extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('m_pdf');
        if (!$this->session->userdata('id')) {
            redirect('login');
        }
    }

    function input_meter() {
        if ($this->input->post('id')) {
            $id = $this->input->post('id');
        } else {
            $id = 0;
        }
        $data['no_trans'] = $this->Transaksi_model->no_transaksi();
        $data['petugas'] = $this->Transaksi_model->petugas_db();
        $data['pel'] = $this->Transaksi_model->cari_db($id);
        $data['mtr_awal'] = $this->Transaksi_model->mtr_awal_db($id);
        $this->load->view('transaksi/input_meter', $data);
    }

    function input_proses() {
        //insert mtr_pelanggan
        $trans = $this->input->post('no_transaksi');
        $pel = $this->input->post('no_pel');
        $gol = $this->input->post('kode');
        $mtrawal = $this->input->post('mtr_awal');
        $mtrakhir = $this->input->post('mtr_akhir');

        //mengetahui tarif        
        $vol = $mtrakhir - $mtrawal;
//        echo $mtrawal;
//        echo $mtrakhir;
//        echo $vol;
        $cektarif = $this->Transaksi_model->cektarif_db($gol);

        foreach ($cektarif as $row) {
            if ($vol <= 10) {
                $tarif = $row->tarif_a;
            } else if ($vol > 10 || $vol <= 20) {
                $tarif = $row->tarif_b;
            } else if ($vol > 20 || $vol <= 30) {
                $tarif = $row->tarif_c;
            }
//            else if ($vol > 30) {
//                $tarif = $row->tarir_d;
//            }
        }
        $tagihan = $tarif * $vol;

        //tanggal
        $tgl_baca = $this->input->post('tgl_b');
        //substr(string,start,length)
        $bulan = substr($tgl_baca, 5, 2);
        $tahun = substr($tgl_baca, 0, 4);
        echo $tgl_baca;
        echo $tahun;
        echo $bulan;
        $batas = $tahun . '/' . $bulan . '/20';

        $data = array(
            'no_transaksi' => $trans,
            'tgl_baca_mtr' => $this->input->post('tgl_b'),
            'tgl_transaksi' => date("Ymd"),
            'no_pelanggan' => $pel,
            'kode_gol' => $gol,
            'ptgs_baca_mtr' => $this->input->post('petugas'),
            'jml_tagihan' => $tagihan,
            'tgl_bts_byr' => $batas,
            'vol'=> $vol,
            'mtr_awal' => $mtrakhir,
            'status' =>'Hutang',
        );
        $this->Transaksi_model->input_proses_db($data);
        header('location:' . site_url('Transaksi/input_meter'));
    }

    function bayar() {
        if ($this->input->post('id')) {
            $id = $this->input->post('id'); 
        } else {
            $id = 0;
        }
        $data['sambungan'] = $this->Transaksi_model->sambungan_db($id);
        $data['pel'] = $this->Transaksi_model->cari_db($id);
        $data['tagihan'] = $this->Transaksi_model->tagihan_db($id);
        $data['biaya'] = $this->Transaksi_model->biaya_db('denda');
        $this->load->view('transaksi/pembayaran', $data);
    }

    function bayar_proses() {
        $id = $this->input->post('no_pelanggan');
        $samb = $this->input->post('sambungan');
        $petugas = $this->input->post('admin');
//        echo $id . $samb . $petugas;
        $tagihan = $this->Transaksi_model->tagihan_db($id);
        foreach ($tagihan as $cek) {
            $no_transaksi = $cek->no_transaksi;
//            echo $no_transaksi;
            $data = array(
                'no_sambungan' => $samb,
                'no_transaksi' => $no_transaksi,
                'tgl_bayar' => date('Ymd'),
                'denda' => $this->input->post('denda'),
                'no_petugas' => $petugas
            );
            $this->Transaksi_model->bayar_proses_db($data, $no_transaksi);
        }
//        header('location:' . site_url('Transaksi/nota'));

        $this->nota($id);
    }

   function nota($no_pel) {
    // function nota($no_pel) {
//        $no_pel = 1901201612310000;
        $data ['nota'] = $this->Transaksi_model->nota_db($no_pel);
        $mtr = $this->Transaksi_model->mtr_awal_db($no_pel);
        foreach ($mtr as $cek) {
            $mtr_awal = $cek->mtr_awal;
        }

        $data['mtr_awal'] = $mtr_awal;
        $data['danamtr'] = $this->Transaksi_model->biaya_db('dana_meter');
        $data['admins'] = $this->Transaksi_model->biaya_db('administrasi');
        $this->load->view('transaksi/nota', $data);
        $sumber = $this->load->view('transaksi/nota', $data, TRUE);
        $html = $sumber;
       $pdfFilePath = "Nota.pdf-".time;
        $pdf = $this->m_pdf->load();
        $pdf->AddPage('L');
        $pdf->WriteHTML($html);

        $pdf->Output($pdfFilePath, "D");
        exit();
    }

    function check() {
        $no_pel = 1901201612310000;
        $data ['nota'] = $this->Transaksi_model->nota_db($no_pel);
        $this->load->view('transaksi/check', $data);
    }
    
}
