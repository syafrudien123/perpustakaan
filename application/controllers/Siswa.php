<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('model_siswa');
    }
    public function index()
    {
        $data = array(
            'list_siswa' => $this->db->get('siswa')->result_array()
        );
        // header
        $this->load->view('template/header');
        // content
        $this->load->view('siswa/tampil', $data);
        // footer
        $this->load->view('template/footer');
    }
    public function tambah()
    {

        // header
        $this->load->view('template/header');
        // content
        $this->load->view('siswa/tambah');
        // footer
        $this->load->view('template/footer');
    }
    public function simpan()
    {
        $nama_siswa = $this->input->post('nama_siswa');
        $nomer_siswa = $this->input->post('nomer_siswa');

        // array
        $dataInsert = array(
            'nama_siswa' => $nama_siswa,
            'nomer_siswa' => $nomer_siswa
            // 'alamat' => "JL Veteran Barat"

        );
        $this->model_siswa->add($dataInsert);
        redirect('siswa');
    }
}
