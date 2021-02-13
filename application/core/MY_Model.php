<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model {
    protected $table;
    protected $id='id';

	public function get($id = null)
	{
		if ($id) return $this->find($id);
		return $this->db->get($this->table)->result();
    }

	public function find($id = null)
	{
		if (!$id) return $this->get($id);
		return $this->db->where($this->id, $id)->get($this->table)->row();
    }

	public function getFirst()
	{
		return $this->db->get($this->table)->order_by($this->id, 'ASC')->row();
    }

	public function getLast()
	{
		return $this->db->get($this->table)->order_by($this->id, 'DESC')->row();
    }

	public function insert($data = [])
	{
		return $this->db->insert($this->table, $data);
    }

	public function update($id, $data = [])
	{
		$this->db->where($this->id, $id);
		return $this->db->update($this->table, $data);
    }

	public function delete($id = null)
	{
		if ($id) $this->db->where($this->id, $id);
		return $this->db->delete($this->table);
    }

	public function count()
	{
		return $this->db->get($this->table)->num_rows();
    }

	public function hasRow()
	{
		return $this->count() > 0;
    }
}
