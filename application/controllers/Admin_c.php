<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_c extends CI_Controller
{

    public function index()
    {
        $this->load->view('admin/login_admin');
    }

    public function dashboard()
    {
        $this->load->view('admin/dashboard');
    }
}
