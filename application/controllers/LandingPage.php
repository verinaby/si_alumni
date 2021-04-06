<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LandingPage extends CI_Controller {
    function index() {
        $this->load->view('landing_page');
    }
}