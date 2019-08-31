<?php

class Kelompok_model extends CI_Model{

  function get_kelompok_db(){
    $this->db->select('*');
      $this->db->from('kelompok');
      return $this->db->get();
    }
    function input_db($data){
      $this->db->insert('kelompok', $data);
  }
  function hapus_db($id){
    //delete from pelanggan where no_pelanggan=$id
    $this->db->where('id_kelompok',$id);
    $this->db->delete('Kelompok');
  }
  function get_by_id_db($id_kelompok){
    $this->db->where('id_kelompok',$id_kelompok);
    $this->db->select('*');
      $this->db->from('kelompok');
      return $this->db->get();
  }
  function update_db($data,$id){
    $this->db->where('id_kelompok',$id);
    $this->db->update('kelompok',$data);
  }
 }
