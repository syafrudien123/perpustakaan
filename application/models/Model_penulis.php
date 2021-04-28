<?php
class Model_penulis extends CI_Model
{
    // tampil
    public function show()
    {
        return $this->db->get('penulis')->result_array();
    }
    // tambah
    public function add($data)
    {
        $this->db->insert('penulis', $data);
    }

    // ubah
    public function update($id, $data)
    {
        $this->db->where('id_penulis', $id)
            ->update('penulis', $data);
    }
    // hapus
    public function delete($id)
    {
        $this->db->where('id_penulis', $id);
        $this->db->delete('penulis');

        // $this->db->query("DELETE FROM penerbit WHERE id_penerbit = $id");
    }
}
