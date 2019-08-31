<?php

class Pelanggan_model extends CI_Model {

function get_pelanggan_db(){
  $this->db->select('*');
    $this->db->from('pelanggan');
    $this->db->join('desa','pelanggan.kode_desa = desa.kode_desa');
    $this->db->join('kecamatan','desa.kode_kec = kecamatan.kode_kec');
    $this->db->join('sambungan','pelanggan.no_pelanggan = sambungan.no_pelanggan');
    $this->db->join('sub_golongan','pelanggan.kode_gol = sub_golongan.id_sub');
    // $this->db->join('golongan','sub_golongan.kode_gol = golongan.kode_gol');
    return $this->db->get();
  }
  function input_db($data,$sam){
    $this->db->insert('pelanggan', $data);
    $this->db->insert('sambungan', $sam);
  }
  function hapus_db($id){
    //delete from pelanggan where no_pelanggan=$id
    $this->db->where('no_pelanggan',$id);
    $this->db->delete('pelanggan');
  }
  function get_by_id_db($no_pelanggan){
    $this->db->where('no_pelanggan',$no_pelanggan);
    $this->db->select('*');
      $this->db->from('pelanggan');
      return $this->db->get();
  }

  function update_db($data,$id){
    $this->db->where('no_pelanggan',$id);
    $this->db->update('pelanggan',$data);
  }
  function detail_db($data,$id){
    $this->db->where('no_pelanggan',$id);
    $this->db->detail('pelanggan',$data);
  }
  function get_kec(){
    $this->db->select('*');
    $this->db->from('kecamatan');
    return $this->db->get();
  }
  function get_desa_db($kode_kec){
    $this->db->where('kode_kec', $kode_kec);
    $this->db->from('desa');
    return $this->db->get();
  }
  function get_sub(){
    $this->db->select('*');
    $this->db->from('sub_golongan');
    return $this->db->get();
  }
  function no_pelanggan($tgl, $kec) {
        $this->db->select('RIGHT(pelanggan.no_pelanggan,4) as kode', FALSE);
        $this->db->order_by('no_pelanggan', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('pelanggan');    
        if ($query->num_rows() <> 0) {      
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {    
            $kode = 1;
        }
        $kodemax = str_pad($kode, 5, "0", STR_PAD_LEFT);
        $kodejadi = $tgl.$kec.$kodemax;
        return $kodejadi;
    }
 }
