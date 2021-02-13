<?php
defined('BASEPATH') or exit();

class Anggota extends CI_Controller
{
	private $class;
	private $view;

	public function __construct()
	{
		parent::__construct();
		if (!is_login()) return redirect('auth');
		$this->class = $this->router->fetch_class();
		$this->view = 'pages/anggota/';
		$this->load->model(Anggota_model::class, 'anggota');
	}

	public function index()
	{
		$data = [
			'title' => 'Anggota',
			'sidebar' => ['anggota', 'induk'],
			'data' => $this->anggota->get()
		];
		return view($this->view.'index', $data);
	}

	public function show($no = null)
	{
		if (!$no) return redirect($this->class);
		if (!$this->anggota->find($no)) {
			$this->session->set_flashdata('pesan', "Kode $this->class tidak ditemukan");
			return redirect($this->class);
		}

		$data = [
			'title' => 'Lihat Anggota',
			'sidebar' => ['anggota', 'induk'],
			'data' => $this->anggota->get($no)
		];
		return view($this->view.'show', $data);
	}

	public function create()
	{
		$this->_rules();

		if ($this->form_validation->run()) return $this->_store();

		$data = [
			'title' => 'Tambah Anggota',
			'sidebar' => ['anggota', 'induk'],
		];
		return view($this->view.'create', $data);
	}

	private function _store()
	{
		$data = $this->input->post();
		if ($this->anggota->insert($data))
			$this->session->set_flashdata('pesan', "Berhasil menyimpan data $this->class");
		else
			$this->session->set_flashdata('pesan', "Gagal menyimpan data $this->class");
		return redirect($this->class);
	}

	public function edit($no=null)
	{
		if (!$no) return redirect($this->class);

		$anggota = $this->anggota->find($no);
		if (!$anggota) {
			$this->session->set_flashdata('pesan', "No. $this->class tidak ditemukan!");
			return redirect($this->class);
		}

		$this->_rules(true);

		if ($this->form_validation->run()) return $this->_update($no);

		$data = [
			'title' => 'Edit Anggota',
			'sidebar' => ['anggota', 'induk'],
			'data' => $anggota
		];
		return view($this->view.'edit', $data);
	}

	private function _update($no)
	{
		$data = $this->input->post();
		if ($this->anggota->update($no, $data))
			$this->session->set_flashdata('pesan', "Berhasil mengedit data $this->class");
		else
			$this->session->set_flashdata('pesan', "Gagal mengedit data $this->class");
		return redirect($this->class);
	}

	public function delete($no=null)
	{
		if (!$no) return redirect($this->class);
		if (!$this->anggota->find($no)) {
			$this->session->set_flashdata('pesan', "Kode $this->class tidak ditemukan");
			return redirect($this->class);
		}

		if ($this->anggota->delete($no)) $this->session->set_flashdata('pesan', "Berhasil menghapus data $this->class");
		else $this->session->set_flashdata('pesan', "Gagal menghapus data $this->class");

		return redirect($this->class);
	}

	private function _rules()
	{
		$this->form_validation->set_rules('nama', '', 'required');
		$this->form_validation->set_rules('alamat', '', 'required');
		$this->form_validation->set_rules('no_hp', '', 'required|numeric');
	}
}
