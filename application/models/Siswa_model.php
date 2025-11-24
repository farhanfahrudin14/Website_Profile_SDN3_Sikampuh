<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_model extends CI_Model {

    private $table = "siswa";

    // ✅ ambil semua siswa
    public function get_all()
    {
        return $this->db->get($this->table)->result();
    }

    // ✅ ambil siswa berdasarkan id
    public function get_by_id($id)
    {
        return $this->db->get_where($this->table, ['id' => $id])->row();
    }

    // ✅ ambil siswa berdasarkan nama_kelas
    public function get_by_kelas($kelas)
    {
        return $this->db->get_where($this->table, ['nama_kelas' => $kelas])->result();
    }

    // ✅ tambah siswa
    public function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }

    // ✅ update siswa
    public function update($id, $data)
    {
        return $this->db->update($this->table, $data, ['id' => $id]);
    }

    // ✅ hapus siswa
    public function delete($id)
    {
        return $this->db->delete($this->table, ['id' => $id]);
    }
}
