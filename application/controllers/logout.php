<?php
class Logout extends CI_Controller{
    //put your code here
    function index()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}
