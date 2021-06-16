<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelTiket extends CI_Model
{
    //manajemen buku
    public function getTiket()
    {
        return $this->db->get('tiket');
    }

    public function tiketWhere($where)
    {
        return $this->db->get_where('tiket', $where);
    }

    public function simpanTiket($data = null)
    {
        $this->db->insert('tiket', $data);
    }

    public function updateTiket($data = null, $where = null)
    {
        $this->db->update('tiket', $data, $where);
    }

    public function hapusTiket($where = null)
    {
        $this->db->delete('tiket', $where);
    }

    public function total($field, $where)
    {
        $this->db->select_sum($field);
        if (!empty($where) && count($where) > 0) {
            $this->db->where($where);
        }
        $this->db->from('tiket');
        return $this->db->get()->row($field);
    }

    //manajemen kategori
    public function getKategori()
    {
        return $this->db->get('kategori');
    }

    public function kategoriWhere($where)
    {
        return $this->db->get_where('kategori', $where);
    }

    public function simpanKategori($data = null)
    {
        $this->db->insert('kategori', $data);
    }

    public function hapusKategori($where = null)
    {
        $this->db->delete('kategori', $where);
    }

    public function updateKategori($where = null, $data = null)
    {
        $this->db->update('kategori', $data, $where);
    }

    //join
    public function joinKategoriTiket($where)
    {
        $this->db->select('');
        $this->db->from('tiket');
        $this->db->join('kategori', 'kategori.id = tiket.id_kategori');
        $this->db->where($where);
        return $this->db->get();
    }
    public function getLimitTiket()
    {
        $this->db->limit(5);
        return $this->db->get('tiket');
    }
}
