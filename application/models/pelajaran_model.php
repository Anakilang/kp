<?php

class Pelajaran_model extends CI_Model
{

    public function tampil_data($table)
    {
        return $this->db->get($table);
    }

    public function ambil_kode_mapel($kp)
    {
        $hasil = $this->db->where('id_mapel', $kp)->get('pelajaran');
        if ($hasil->num_rows() > 0) {
            return $hasil->result();
        } else {
            return false;
        }
    }

    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }


    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->where($table);
    }

    public $table   = 'pelajaran';
    public $id      = 'kode_mapel';

    public function get_by_id($hari)
    {
        $this->db->where($this->hari, $hari);
        return $this->db->get($this->table)->row();
    }
}
