<?php
class Model_kategori extends CI_Model
{
    // tampil
    public function show()
    {
        return $this->db->order_by('id_kategori', 'DESC')->get('kategori')->result_array();
    }

    public function getById($id)
    {
        $this->db->where('id_kategori', $id);
        return $this->db->get('kategori')->row();
    }
    // tambah
    public function add($data)
    {
        $this->db->insert('kategori', $data);
    }

    // ubah
    public function update($id, $data)
    {
        $this->db->where('id_kategori', $id)
            ->update('kategori', $data);
    }
    // hapus
    public function delete($id)
    {
        $this->db->where('id_kategori', $id);
        $this->db->delete('kategori');

        // $this->db->query("DELETE FROM kategori WHERE id_kategori = $id");
    }
}
