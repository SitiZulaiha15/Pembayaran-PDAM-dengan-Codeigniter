<?php

class Transaksi_model extends CI_Model {

    //put your code here
    function cari_db($id) {
        $this->db->where('pelanggan.no_pelanggan', $id);
        $this->db->select('*');
        $this->db->from('pelanggan');
      // $this->db->join('sub_golongan','on pelanggan.kode_gol = sub_golongan.kode_gol');
      // $this->db->join('golongan','on sub_golongan.kode_gol = golongan.kode_gol');
        return $this->db->get()->result();
    }

    function mtr_awal_db($id) {
        //SELECT * FROM `mtr_pelanggan` WHERE no_pelanggan = 1901201612310000 order by tgl_transaksi DESC limit 1
        $this->db->where('no_pelanggan', $id);
        $this->db->order_by('no_transaksi', 'DESC');
        $this->db->limit(1);
        $this->db->select('*');
        $this->db->from('mtr_pelanggan');
        return $this->db->get()->result();
    }

    function petugas_db() {
        $this->db->select('*');
        $this->db->from('petugas');
        return $this->db->get();
    }

    function cektarif_db($gol) {
        // $this->db->where('kode_gol', $gol);
        // $this->db->select('*');
        // $this->db->from('golongan');
        // $this->db->join('sub_golongan','on pelanggan.kode_gol = sub_golongan.kode_gol');
        // return $this->db->get()->result();
         $this->db->where('sub_golongan.id_sub', $gol);
        $this->db->select('*');
        $this->db->from('sub_golongan');
        $this->db->join('golongan','on golongan.kode_gol = sub_golongan.kode_gol');
        return $this->db->get()->result();
    }

    function input_proses_db($data) {
        //update meter pelanggan
//        $this->db->where('no_pelanggan', $pel);
//        $this->db->update('pelanggan', $data);        
        $this->db->insert('mtr_pelanggan', $data);
    }

    function no_transaksi() {
        $this->db->select('RIGHT(mtr_pelanggan.no_transaksi,2) as kode', FALSE);
        $this->db->order_by('no_transaksi', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('mtr_pelanggan');      //cek dulu apakah ada sudah ada kode di tabel.    
        if ($query->num_rows() <> 0) {
            //jika kode ternyata sudah ada.      
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            //jika kode belum ada      
            $kode = 1;
        }
        $kodemax = str_pad($kode, 2, "0", STR_PAD_LEFT);
        $kodejadi = "TRANS" . $kodemax;
        return $kodejadi;
    }

    function tagihan_db($id) {
        //select * from mtr_pelanggan where status = 0
        $this->db->where('no_pelanggan', $id);
        $this->db->where('status', 'Hutang');
        $this->db->select('*');
        $this->db->from('mtr_pelanggan');
        return $this->db->get()->result();
    }

    function sambungan_db($id) {
        //select * from mtr_pelanggan where status = 0
        $this->db->where('no_pelanggan', $id);
        $this->db->select('*');
        $this->db->from('sambungan');
        return $this->db->get()->result();
    }

    function bayar_proses_db($data, $trans) {
        //isert
        $this->db->insert('pembayaran', $data);

        //update
        $this->db->set('status','"Lunas"', FALSE);
        $this->db->where('no_transaksi', $trans);
        $this->db->update('mtr_pelanggan');
    }

    function denda_db() {
        $this->db->where('jenis', 'denda');
        $this->db->select('*');
        $this->db->from('biaya');
        return $this->db->get()->result();
    }

    function biaya_db($jenis) {
        $this->db->where('jenis', $jenis);
        $this->db->select('*');
        $this->db->from('biaya');
        $query = $this->db->get();
        $data = $query->row();
        $dana = $data->nominal;
        return $dana;
    }
    function nota_db($no_pel) {
        $date = date('Ymd');
        $this->db->where('pelanggan.no_pelanggan', $no_pel);
        $this->db->where('pembayaran.tgl_bayar', $date);
        $this->db->select('*');
        $this->db->from('pelanggan');
        $this->db->join('sambungan', 'pelanggan.no_pelanggan = sambungan.no_pelanggan');
        $this->db->join('sub_golongan','pelanggan.kode_gol = sub_golongan.id_sub');
        $this->db->join('golongan', 'sub_golongan.kode_gol = golongan.kode_gol');
       $this->db->join('desa', 'pelanggan.kode_desa = desa.kode_desa');
        $this->db->join('mtr_pelanggan', 'pelanggan.no_pelanggan = mtr_pelanggan.no_pelanggan');
        $this->db->join('pembayaran', 'pembayaran.no_transaksi = mtr_pelanggan.no_transaksi');
        $this->db->join('petugas', 'pembayaran.no_petugas = petugas.no_petugas');
        return $this->db->get()->result();
    }

    public function terbilang($angka) {

        $angka = (float) $angka;
        $bilangan = array('', 'Satu', 'Dua', 'Tiga', 'Empat', 'Lima', 'Enam', 'Tujuh', 'Delapan', 'Sembilan', 'Sepuluh', 'Sebelas');

        if ($angka < 12) {
            return $bilangan[$angka];
        } else if ($angka < 20) {
            return $bilangan[$angka - 10] . ' Belas';
        } else if ($angka < 100) {
            $hasil_bagi = (int) ($angka / 10);
            $hasil_mod = $angka % 10;
            return trim(sprintf('%s Puluh %s', $bilangan[$hasil_bagi], $bilangan[$hasil_mod]));
        } else if ($angka < 200) {
            return sprintf('Seratus %s', $this->terbilang($angka - 100));
        } else if ($angka < 1000) {
            $hasil_bagi = (int) ($angka / 100);
            $hasil_mod = $angka % 100;
            return trim(sprintf('%s Ratus %s', $bilangan[$hasil_bagi], $this->terbilang($hasil_mod)));
        } else if ($angka < 2000) {
            return trim(sprintf('Seribu %s', $this->terbilang($angka - 1000)));
        } else if ($angka < 1000000) {
            $hasil_bagi = (int) ($angka / 1000);
            $hasil_mod = $angka % 1000;
            return sprintf('%s Ribu %s', $this->terbilang($hasil_bagi), $this->terbilang($hasil_mod));
        } else if ($angka < 1000000000) {
            $hasil_bagi = (int) ($angka / 1000000);
            $hasil_mod = $angka % 1000000;
            return trim(sprintf('%s Juta %s', $this->terbilang($hasil_bagi), $this->terbilang($hasil_mod)));
        } else if ($angka < 1000000000000) {
            $hasil_bagi = (int) ($angka / 1000000000);
            $hasil_mod = fmod($angka, 1000000000);
            return trim(sprintf('%s Milyar %s', $this->terbilang($hasil_bagi), $this->terbilang($hasil_mod)));
        } else if ($angka < 1000000000000000) {
            $hasil_bagi = $angka / 1000000000000;
            $hasil_mod = fmod($angka, 1000000000000);
            return trim(sprintf('%s Triliun %s', $this->terbilang($hasil_bagi), $this->terbilang($hasil_mod)));
        } else {
            return 'Data Salah';
        }
    }

    public function rupiah($angka) {
        $rupiah = number_format($angka, 2, ',', '.');
        return 'Rp '.$rupiah;
    }

    function bulan($tgl) {
        $bulan = substr($tgl, 5, 2);
        Switch ($bulan) {
            case 1 : $bulan = "Januari";
                Break;
            case 2 : $bulan = "Februari";
                Break;
            case 3 : $bulan = "Maret";
                Break;
            case 4 : $bulan = "April";
                Break;
            case 5 : $bulan = "Mei";
                Break;
            case 6 : $bulan = "Juni";
                Break;
            case 7 : $bulan = "Juli";
                Break;
            case 8 : $bulan = "Agustus";
                Break;
            case 9 : $bulan = "September";
                Break;
            case 10 : $bulan = "Oktober";
                Break;
            case 11 : $bulan = "November";
                Break;
            case 12 : $bulan = "Desember";
                Break;
        }
        return $bulan;
    }

    function tgl($tgl) {
        $hari = substr($tgl, 8, 2);        
        $tahun = substr($tgl, 0, 4);
        $nama_bulan = $this->bulan($tgl);
        $tgl_oke = $hari . ' ' . $nama_bulan . ' ' . $tahun;
        return $tgl_oke;
    }

}
