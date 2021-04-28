<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('model_kategori');
    }
    public function index()
    {
        $data = array(
            'list_kategori' => $this->db->get('kategori')->result_array()
        );
        // header
        $this->load->view('template/header');
        // content
        $this->load->view('kategori/tampil', $data);
        // footer
        $this->load->view('template/footer');
    }
    public function tambah()
    {

        // header
        $this->load->view('template/header');
        // content
        $this->load->view('kategori/tambah');
        // footer
        $this->load->view('template/footer');
    }
    public function simpan()
    {
        $nama_kategori = $this->input->post('nama_kategori');

        // array
        $dataInsert = array(
            'nama_kategori' => $nama_kategori,
            // 'alamat' => "JL Veteran Barat"

        );
        $this->model_kategori->add($dataInsert);
        redirect('kategori');
    }
    public function ubah($id)
    {
        $data = array(
            'kategori' => $this->model_kategori->getById($id)
        );
        // header
        $this->load->view('template/header', $data);
        // content
        $this->load->view('kategori/ubah');
        // footer
        $this->load->view('template/footer');
    }
    public function update($id)
    {
        $nama_kategori = $this->input->post('nama_kategori');

        // array
        $dataUpdate = array(
            'nama_kategori' => $nama_kategori,
            // 'alamat' => "JL Veteran Barat"

        );
        $this->model_kategori->update($id, $dataUpdate);
        redirect('kategori');
    }
    public function hapus($id)
    {
        $this->model_kategori->delete($id);
        redirect('kategori');
    }
}
