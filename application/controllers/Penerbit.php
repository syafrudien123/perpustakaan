<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penerbit extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('model_penerbit');
    }
    public function index()
    {
        $data = array(
            'list_penerbit' => $this->db->get('penerbit')->result_array()
        );
        // header
        $this->load->view('template/header');
        // content
        $this->load->view('penerbit/tampil', $data);
        // footer
        $this->load->view('template/footer');
    }
    public function tambah()
    {

        // header
        $this->load->view('template/header');
        // content
        $this->load->view('penerbit/tambah');
        // footer
        $this->load->view('template/footer');
    }
    public function simpan()
    {
        $nama_penerbit = $this->input->post('nama_penerbit');

        // array
        $dataInsert = array(
            'nama_penerbit' => $nama_penerbit,
            // 'alamat' => "JL Veteran Barat"

        );
        $this->model_penerbit->add($dataInsert);
        redirect('penerbit');
    }
    public function ubah($id)
    {
        $data = array(
            'penerbit' => $this->model_penerbit->getById($id)
        );
        // header
        $this->load->view('template/header', $data);
        // content
        $this->load->view('penerbit/ubah');
        // footer
        $this->load->view('template/footer');
    }
    public function update($id)
    {
        $nama_penerbit = $this->input->post('nama_penerbit');

        // array
        $dataUpdate = array(
            'nama_penerbit' => $nama_penerbit,
            // 'alamat' => "JL Veteran Barat"

        );
        $this->model_penerbit->update($id, $dataUpdate);
        redirect('penerbit');
    }
    public function hapus($id)
    {
        $this->model_penerbit->delete($id);
        redirect('penerbit');
    }
}
