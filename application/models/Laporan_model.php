 <?php
class Laporan_model extends CI_Model {
    //put your code here

     function get_pelanggan_db() {
        $this->db->select('*');
        $this->db->from('pelanggan');
        return $this->db->get();
    }
    function lap_bulan_db($start, $end) {
        $this->db->select('*');
        $this->db->where('tgl_bayar >=', $start);
        $this->db->where('tgl_bayar <=', $end);
        $this->db->from('pelanggan');
        $this->db->join('sub_golongan', 'pelanggan.kode_gol = sub_golongan.id_sub');
        $this->db->join('golongan', 'sub_golongan.kode_gol = golongan.kode_gol');
        $this->db->join('desa', 'pelanggan.kode_desa = desa.kode_desa');
        $this->db->join('mtr_pelanggan', 'pelanggan.no_pelanggan = mtr_pelanggan.no_pelanggan');
        $this->db->join('pembayaran', 'pembayaran.no_transaksi = mtr_pelanggan.no_transaksi');
        return $this->db->get()->result();
    }

    function lap_bykec_db($des) {
        $this->db->select('*');
        $this->db->where('desa.kode_kec', $des);
        $this->db->from('pelanggan');
         $this->db->join('sambungan', 'pelanggan.no_pelanggan = sambungan.no_pelanggan');
        // $this->db->join('golongan', 'pelanggan.kode_gol = golongan.kode_gol');
         $this->db->join('sub_golongan', 'pelanggan.kode_gol = sub_golongan.id_sub');
        $this->db->join('golongan', 'sub_golongan.kode_gol = golongan.kode_gol');
        $this->db->join('desa', 'pelanggan.kode_desa = desa.kode_desa');
        $this->db->join('kecamatan', 'desa.kode_kec = kecamatan.kode_kec');
        $this->db->join('mtr_pelanggan', 'pelanggan.no_pelanggan = mtr_pelanggan.no_pelanggan');
        $this->db->join('pembayaran', 'pembayaran.no_transaksi = mtr_pelanggan.no_transaksi');
        return $this->db->get()->result();
    }

    function lap_pel_db($no_pel) {
        $this->db->select('*');
        $this->db->where('pelanggan.no_pelanggan', $no_pel);
        $this->db->from('pelanggan');
        // $this->db->join('golongan', 'pelanggan.kode_gol = golongan.kode_gol');
        $this->db->join('sub_golongan', 'pelanggan.kode_gol = sub_golongan.id_sub');
        $this->db->join('golongan', 'sub_golongan.kode_gol = golongan.kode_gol');
        $this->db->join('desa', 'pelanggan.kode_desa = desa.kode_desa');
        $this->db->join('mtr_pelanggan', 'pelanggan.no_pelanggan = mtr_pelanggan.no_pelanggan');
        $this->db->join('pembayaran', 'pembayaran.no_transaksi = mtr_pelanggan.no_transaksi');
        return $this->db->get()->result();
 }
function lap_tagihan_db() {
        $this->db->select('sum(`jml_tagihan`) as total, no_pelanggan,', FALSE);        
        $this->db->where('status', 0); 
        $this->db->group_by('no_pelanggan');
        $this->db->from('mtr_pelanggan');  
        return $this->db->get()->result();
}
  function get_by_id_db($id) {
    $this->db->where('no_pelanggan', $id);
   $this->db->select('*');
    $this->db->from('pelanggan');
     return $this->db->get();
    }
  function detail_db($data,$id){
    $this->db->where('no_pelanggan',$id);
    $this->db->detail('pelanggan',$data);
        
    }
    function bubble($my_array) {
        do {
            $swapped = false;
            for ($i = 0, $c = count($my_array) - 1; $i < $c; $i++) {
                if ($my_array[$i] < $my_array[$i + 1]) {
                    list( $my_array[$i + 1], $my_array[$i] ) = array($my_array[$i], $my_array[$i + 1]);
                    $swapped = true;
                }
            }
        } while ($swapped);
        return $my_array;
    }

}
