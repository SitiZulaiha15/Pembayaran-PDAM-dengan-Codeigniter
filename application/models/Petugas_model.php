<?php

class Petugas_model extends CI_Model {

function get_petugas_db(){
  $this->db->select('*');
    $this->db->from('petugas');
    return $this->db->get();
}
function input_db($data){
  $this->db->insert('petugas', $data);
}
function hapus_db($id){
  //delete from pelanggan where no_pelanggan=$id
  $this->db->where('no_petugas',$id);
  $this->db->delete('petugas');
}
function get_by_id_db($id_petugas){
  $this->db->where('no_petugas',$id_petugas);
  $this->db->select('*');
    $this->db->from('petugas');
    return $this->db->get();
}
function update_db($data,$id){
  $this->db->where('no_petugas',$id);
  $this->db->update('Petugas',$data);
}
 }
