<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{
	private $class;
	private $view;

	public function __construct()
	{
		parent::__construct();
		if (!is_login()) return redirect('auth');
		$this->class = $this->router->fetch_class();
		$this->view = 'pages/';
		$this->load->model(Anggota_model::class, 'anggota');
		$this->load->model(Buku_model::class, 'buku');
		$this->load->model(Peminjaman_model::class, 'peminjaman');
	}

	public function index()
	{
		$this->_rules();

		if ($this->form_validation->run()) return $this->_storePinjam();

		$data = [
			'title' => 'Beranda',
			'sidebar' => ['beranda'],
			'count' => [
				'anggota' => $this->anggota->count(),
				'buku' => $this->buku->count(),
			],
			'data' => [
				'anggota' => $this->anggota->get(),
				'buku' => $this->buku->status_ada(),
				'dipinjam' => $this->peminjaman->dipinjam()
			]
		];
		return view($this->view . 'beranda', $data);
	}

	public function laporan()
	{
		$data = [
			'title' => 'Beranda',
			'sidebar' => ['laporan'],
			'data' => $this->peminjaman->semua()
		];
		return view($this->view . 'laporan', $data);
	}

	public function kembalikan()
	{
		$data = $this->input->post();
		if ($data) return $this->_storeKembali($data);
		$this->session->set_flashdata('pesan', "Gagal mengembalikan buku");
		return redirect($this->class);
	}

	private function _storePinjam()
	{
		$data = $this->input->post();
		$data['tanggal_pinjam'] = date('Y-m-d');
		if ($this->peminjaman->insert($data) && $this->peminjaman->setBuku($data['buku'], 'dipinjam'))
			$this->session->set_flashdata('pesan', "Berhasil meminjamkan buku");
		else
			$this->session->set_flashdata('pesan', "Gagal meminjamkan buku");
		return redirect($this->class);
	}

	private function _storeKembali($data)
	{
		if ($this->peminjaman->update($data['no_peminjaman'], ['tanggal_kembali' => date('Y-m-d')]) && $this->peminjaman->setBuku($data['kode_buku'], 'ada'))
			$this->session->set_flashdata('pesan', "Berhasil mengembalikan buku");
		else
			$this->session->set_flashdata('pesan', "Gagal mengembalikan buku");
		return redirect($this->class);
	}

	private function _rules()
	{
		$this->form_validation->set_rules('buku', '', 'required');
		$this->form_validation->set_rules('anggota', '', 'required');
	}
}
