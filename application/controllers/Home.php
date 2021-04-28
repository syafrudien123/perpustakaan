<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        // header
        $this->load->view('template/header');
        // content
        $this->load->view('home');
        // footer
        $this->load->view('template/footer');
    }
}
