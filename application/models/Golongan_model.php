<?php
class Golongan_model extends CI_Model{
    //put your code here
    function get_golongan_db() {
        //select * from golongan join kelompok on golongan.id_kelompok=kelompok.id_kelompok
        $this->db->select('*');
        $this->db->from('golongan');
        $this->db->join('kelompok','golongan.id_kelompok=kelompok.id_kelompok');
         return $this->db->get();
}
function input_db($data){
  $this->db->insert('golongan', $data);
}
function hapus_db($id){
  //delete from pelanggan where no_pelanggan=$id
  $this->db->where('kode_gol',$id);
  $this->db->delete('golongan');
}
function get_by_id_db($kode_gol){
  $this->db->where('kode_gol',$kode_gol);
  $this->db->select('*');
    $this->db->from('golongan');
    return $this->db->get();
}
function update_db($data,$id){
  $this->db->where('kode_gol',$id);
  $this->db->update('golongan',$data);
}
 }
