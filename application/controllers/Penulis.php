<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penulis extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('model_penulis');
    }
    public function index()
    {
        $data = array(
            'list_penulis' => $this->db->get('penulis')->result_array()
        );
        // header
        $this->load->view('template/header');
        // content
        $this->load->view('penulis/tampil', $data);
        // footer
        $this->load->view('template/footer');
    }
    public function tambah()
    {

        // header
        $this->load->view('template/header');
        // content
        $this->load->view('penulis/tambah');
        // footer
        $this->load->view('template/footer');
    }
    public function simpan()
    {
        $nama_penulis = $this->input->post('nama_penulis');

        // array
        $dataInsert = array(
            'nama_penulis' => $nama_penulis,
            // 'alamat' => "JL Veteran Barat"

        );
        $this->model_penulis->add($dataInsert);
        redirect('penulis');
    }
}
