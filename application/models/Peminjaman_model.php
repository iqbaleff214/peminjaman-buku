<?php
defined('BASEPATH') or exit();

class Peminjaman_model extends MY_Model
{
	protected $table = 'peminjaman';
	protected $id = 'no_peminjaman';

	public function semua()
	{
		$this->db->select('*');
		$this->db->join('buku', "$this->table.buku=buku.kode_buku");
		$this->db->join('anggota', "$this->table.anggota=anggota.no_anggota");
		$this->db->order_by("$this->table.tanggal_pinjam", 'ASC');
		return $this->db->get($this->table)->result();
	}

	public function dipinjam()
	{
		$this->db->where("$this->table.tanggal_kembali", null);
		return $this->semua();
	}

	public function setBuku($kode, $status)
	{
		$this->db->where('kode_buku', $kode);
		return $this->db->update('buku', ['status' => $status]);
	}
}
