<?php

class Wilayah_model extends CI_Model {

function get_wil_db(){
  $this->db->select('*');
    $this->db->from('wilayah');
    return $this->db->get();
  }
  function input_db($data){
    $this->db->insert('wilayah', $data);
  }
  function hapus_db($id){
    //delete from pelanggan where no_pelanggan=$id
    $this->db->where('kode_wil',$id);
    $this->db->delete('wilayah');
  }
  function get_by_id_db($kode_wilayah){
    $this->db->where('kode_wilayah',$kode_wilayah);
    $this->db->select('*');
      $this->db->from('wilayah');
      return $this->db->get();
  }
  function update_db($data,$id){
    $this->db->where('kode_wilayah',$id);
    $this->db->update('wilayah',$data);
  }
 }
