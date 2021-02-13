<?php
defined('BASEPATH') or exit();

class Buku extends CI_Controller
{
	private $class;
	private $view;

	public function __construct()
	{
		parent::__construct();
		if (!is_login()) return redirect('auth');
		$this->class = $this->router->fetch_class();
		$this->view = 'pages/buku/';
		$this->load->model(Buku_model::class, 'buku');
	}

	public function index()
	{
		$data = [
			'title' => 'Buku',
			'sidebar' => ['buku', 'induk'],
			'data' => $this->buku->get()
		];
		return view($this->view.'index', $data);
	}

	public function show($kode = null)
	{
		if (!$kode) return redirect($this->class);
		if (!$this->buku->find($kode)) {
			$this->session->set_flashdata('pesan', "Kode $this->class tidak ditemukan");
			return redirect($this->class);
		}

		$data = [
			'title' => 'Lihat Buku',
			'sidebar' => ['buku', 'induk'],
			'data' => $this->buku->get($kode)
		];
		return view($this->view.'show', $data);
	}

	public function create()
	{
		$this->_rules();

		if ($this->form_validation->run()) return $this->_store();

		$data = [
			'title' => 'Tambah Buku',
			'sidebar' => ['buku', 'induk'],
		];
		return view($this->view.'create', $data);
	}

	private function _store()
	{
		$data = $this->input->post();
		if ($this->buku->insert($data))
			$this->session->set_flashdata('pesan', "Berhasil menyimpan data $this->class");
		else
			$this->session->set_flashdata('pesan', "Gagal menyimpan data $this->class");
		return redirect($this->class);
	}

	public function edit($kode=null)
	{
		if (!$kode) return redirect($this->class);

		$buku = $this->buku->find($kode);
		if (!$buku) {
			$this->session->set_flashdata('pesan', "Kode $this->class tidak ditemukan!");
			return redirect($this->class);
		}

		$this->_rules(true);

		if ($this->form_validation->run()) return $this->_update($kode);

		$data = [
			'title' => 'Edit Buku',
			'sidebar' => ['buku', 'induk'],
			'data' => $buku
		];
		return view($this->view.'edit', $data);
	}

	private function _update($kode)
	{
		$data = $this->input->post();
		if ($this->buku->update($kode, $data))
			$this->session->set_flashdata('pesan', "Berhasil mengedit data $this->class");
		else
			$this->session->set_flashdata('pesan', "Gagal mengedit data $this->class");
		return redirect($this->class);
	}

	public function delete($kode=null)
	{
		if (!$kode) return redirect($this->class);
		if (!$this->buku->find($kode)) {
			$this->session->set_flashdata('pesan', "Kode $this->class tidak ditemukan");
			return redirect($this->class);
		}

		if ($this->buku->delete($kode)) $this->session->set_flashdata('pesan', "Berhasil menghapus data $this->class");
		else $this->session->set_flashdata('pesan', "Gagal menghapus data $this->class");

		return redirect($this->class);
	}

	private function _rules($edit = false)
	{
		if (!$edit) $this->form_validation->set_rules('kode_buku', '', 'required|exact_length[5]|is_unique[buku.kode_buku]');
		$this->form_validation->set_rules('judul', '', 'required');
		$this->form_validation->set_rules('penulis', '', 'required');
		$this->form_validation->set_rules('penerbit', '', 'required');
		$this->form_validation->set_rules('tahun', '', 'required|exact_length[4]|numeric');
		$this->form_validation->set_rules('status', '', 'required');
	}
}
