<?php
class Model_login extends CI_model{
	public function getlogin($u,$p)
	{
		$pwd = md5($p);
		$this->db->where('username',$u);
		$this->db->where('password',$pwd);
		$query = $this->db->get('petugas');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row)
			 {
			 	$sess = array('id'	=>$row->no_petugas);
			 $this->session->set_userdata($sess);
			 	}
			 	redirect('Pelanggan/get_pelanggan');
				
			
		}
		else
		{
			$this->session->set_flashdata('info','Maaf username dan password salah');
			redirect('login');
		}
	}
}
