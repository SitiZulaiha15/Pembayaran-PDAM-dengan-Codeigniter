<?php
class Sub_golongan_model extends CI_Model{
    //put your code here
    function get_sub_golongan_db() {
        //select * from golongan join kelompok on golongan.id_kelompok=kelompok.id_kelompok
        $this->db->select('*');
        $this->db->from('sub_golongan');
        $this->db->join('golongan','sub_golongan.kode_gol=golongan.kode_gol');
//        $this->db->join('sub_golongan','golongan.kode_gol=sub_golongan.kode_gol');
        return $this->db->get();
}
function input_db($data){
  $this->db->insert('sub_golongan', $data);
}
function hapus_db($id){
  //delete from pelanggan where no_pelanggan=$id
  $this->db->where('id_sub',$id);
  $this->db->delete('Sub_golongan');
}
function get_by_id_db($id_sub_golongan){
  $this->db->where('id_sub',$id_sub_golongan);
  $this->db->select('*');
    $this->db->from('sub_golongan');
    return $this->db->get();
}
function update_db($data,$id){
  $this->db->where('id_sub',$id);
  $this->db->update('sub_golongan',$data);
}
 }
