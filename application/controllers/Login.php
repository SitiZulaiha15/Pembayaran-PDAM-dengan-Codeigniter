<?php
class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        if ($this->session->userdata('id')) {
            redirect('Pelanggan/get_pelanggan');
        }
    }

	public function index()
	{
		$this->load->view('Login_view');
	}
	public function getlogin()
	{
		$u = $this->input->post('username');
		$p = $this->input->post('password');
		$this->load->model('model_login');
		$this->model_login->getlogin($u,$p);
	}
}
