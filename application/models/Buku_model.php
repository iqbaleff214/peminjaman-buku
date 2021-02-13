<?php
defined('BASEPATH') or exit();

class Buku_model extends MY_Model
{
	protected $table = 'buku';
	protected $id = 'kode_buku';

	public function status_ada()
	{
		$this->db->where('status', 'ada');
		return $this->db->get($this->table)->result();
	}
}
