<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->model_squrity->getsqurity();
		$this->load->view('home_view');

	}
}
