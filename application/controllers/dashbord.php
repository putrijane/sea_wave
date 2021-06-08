<?php defined('BASEPATH') or exit('No direct script access allowed');

class dashbord extends CI_Controller
{
    public function index()
    {
        $this->load->model('model');

        $data['judul'] = 'SeaWave';
        $data['post'] = $this->model->getAllPost();

        $data['barang'] = $this->model->tampil_data()->result();
        $this->load->view('header');
        $this->load->view('sidebar');
        $this->load->view('dashboard', $data);
        $this->load->view('footer');
    }
}