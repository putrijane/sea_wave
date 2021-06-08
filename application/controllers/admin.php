<?php

class admin extends CI_Controller{
    public function index()
    {
        $this->load->view('header_admin');
        $this->load->view('sidebar_admin');
        $this->load->view('dashboard_admin');
        $this->load->view('footer_admin');
    }
}
?>