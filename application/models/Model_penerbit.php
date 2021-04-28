<?php
class Model_penerbit extends CI_Model
{
    // tampil
    public function show()
    {
        return $this->db->order_by('id_penerbit', 'DESC')->get('penerbit')->result_array();
    }

    public function getById($id)
    {
        $this->db->where('id_penerbit', $id);
        return $this->db->get('penerbit')->row();
    }
    // tambah
    public function add($data)
    {
        $this->db->insert('penerbit', $data);
    }

    // ubah
    public function update($id, $data)
    {
        $this->db->where('id_penerbit', $id)
            ->update('penerbit', $data);
    }
    // hapus
    public function delete($id)
    {
        $this->db->where('id_penerbit', $id);
        $this->db->delete('penerbit');

        // $this->db->query("DELETE FROM penerbit WHERE id_penerbit = $id");
    }
}
