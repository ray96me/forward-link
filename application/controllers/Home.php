<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Home extends CI_Controller
{
    public function index()
    {
        $this->show_home();
    }

    public function show_home()
    {
        $this->load->view('home');
    }
}
