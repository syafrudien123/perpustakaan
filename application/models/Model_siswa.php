<?php
class Model_siswa extends CI_Model
{
    // tampil
    public function show()
    {
        return $this->db->get('siswa')->result_array();
    }
    // tambah
    public function add($data)
    {
        $this->db->insert('siswa', $data);
    }

    // ubah
    public function update($id, $data)
    {
        $this->db->where('id_siswa', $id)
            ->update('siswa', $data);
    }
    // hapus
    public function delete($id)
    {
        $this->db->where('id_siswa', $id);
        $this->db->delete('siswa');

        // $this->db->query("DELETE FROM penerbit WHERE id_penerbit = $id");
    }
}
