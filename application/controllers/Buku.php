<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buku extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('model_penerbit');
        $this->load->model('model_buku');
        $this->load->model('model_penulis');
        $this->load->model('model_kategori');
    }
    public function index()
    {
        $data = array(
            'list_buku' => $this->model_buku->show(),
        );
        // header
        $this->load->view('template/header', $data);
        // content
        $this->load->view('buku/tampil');
        // footer
        $this->load->view('template/footer');
    }
    public function tambah()
    {
        $data = array(
            'penulis' => $this->model_penulis->show(),
            'penerbit' => $this->model_penerbit->show(),
            'kategori' => $this->model_kategori->show(),
        );
        // header
        $this->load->view('template/header', $data);
        // content
        $this->load->view('buku/tambah');
        // footer
        $this->load->view('template/footer');
    }
    public function simpan()
    {
        $nama_buku = $this->input->post('nama_buku');
        $kode_buku = $this->input->post('kode_buku');
        $id_penulis = $this->input->post('id_penulis');
        $id_penerbit = $this->input->post('id_penerbit');
        $id_kategori = $this->input->post('id_kategori');
        $stok = $this->input->post('stok');


        // array
        $dataInsert = array(
            'nama_buku' => $nama_buku,
            'kode_buku' => $kode_buku,
            'id_penulis' => $id_penulis,
            'id_penerbit' => $id_penerbit,
            'id_kategori' => $id_kategori,
            'stok' => $stok,
            // 'alamat' => "JL Veteran Barat"

        );
        $this->model_buku->add($dataInsert);
        redirect('buku');
    }
    public function ubah($id)
    {
        $data = array(
            'buku' => $this->model_buku->getById($id)
        );
        // header
        $this->load->view('template/header', $data);
        // content
        $this->load->view('buku/ubah');
        // footer
        $this->load->view('template/footer');
    }
    public function update($id)
    {
        $nama_buku = $this->input->post('nama_buku');

        // array
        $dataUpdate = array(
            'nama_buku' => $nama_buku,
            // 'alamat' => "JL Veteran Barat"

        );
        $this->model_buku->update($id, $dataUpdate);
        redirect('buku');
    }
    public function hapus($id)
    {
        $this->model_buku->delete($id);
        redirect('buku');
    }
}
