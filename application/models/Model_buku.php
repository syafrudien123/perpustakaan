<?php
class Model_buku extends CI_Model
{
    // tampil
    public function show()
    {

        // relasi dengan tabel penulis
        $this->db->join('penulis', 'buku.id_penulis = penulis.id_penulis');

        // relasi dengan tabel penerbit
        $this->db->join('penerbit', 'buku.id_penerbit = penerbit.id_penerbit');

        // relaso dengan tabel kategori
        $this->db->join('kategori', 'buku.id_kategori = kategori.id_kategori');


        return $this->db->order_by('id_buku', 'DESC')->get('buku')->result_array();
    }

    public function getById($id)
    {
        $this->db->where('id_buku', $id);
        return $this->db->get('buku')->row();
    }
    // tambah
    public function add($data)
    {
        $this->db->insert('buku', $data);
    }

    // ubah
    public function update($id, $data)
    {
        $this->db->where('id_buku', $id)
            ->update('buku', $data);
    }
    // hapus
    public function delete($id)
    {
        $this->db->where('id_buku', $id);
        $this->db->delete('buku');

        // $this->db->query("DELETE FROM buku WHERE id_buku = $id");
    }
}
