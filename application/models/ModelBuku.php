<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelBuku extends CI_Model
{
    // Ambil semua buku
    public function getBuku()
    {
        return $this->db->get('buku');
    }

    // Ambil buku dengan kondisi
    public function bukuWhere($where)
    {
        return $this->db->get_where('buku', $where);
    }

    // Simpan data buku
    public function simpanBuku($data = null)
    {
        $this->db->insert('buku', $data);
    }

    // Update data buku
    public function updateBuku($data = null, $where = null)
    {
        $this->db->update('buku', $data, $where);
    }

    // Hapus buku
    public function hapusBuku($where = null)
    {
        $this->db->delete('buku', $where);
    }

    // Hitung total (misalnya jumlah stok)
    public function total($field, $where)
    {
        $this->db->select_sum($field);
        if (!empty($where) && count($where) > 0) {
            $this->db->where($where);
        }
        return $this->db->get('buku')->row($field);
    }

    // Manajemen kategori
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

    // Join kategori dengan buku
    public function joinKategoriBuku($where)
    {
        $this->db->select('buku.id_buku, buku.judul, kategori.id_kategori, kategori.kategori');
        $this->db->from('buku');
        $this->db->join('kategori', 'kategori.id_kategori = buku.id_kategori');
        $this->db->where($where);
        return $this->db->get();
    }
}
