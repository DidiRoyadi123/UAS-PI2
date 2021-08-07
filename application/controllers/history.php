<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class History extends CI_Controller
{
    public function index()
    {
        $data = array(
            'title' => 'History pendidikan',
            'isi'  => 'history/index_history'
        );

        $this->load->view('layout/header', $data);
        $this->load->view('layout/konten', $data);
        $this->load->view('layout/footer');
    }
}
