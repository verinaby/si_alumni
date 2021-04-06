<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends CI_Controller {
    function index() {
        $this->load->view('biodata');
    }
}