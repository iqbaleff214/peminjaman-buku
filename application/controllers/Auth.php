<?php
defined('BASEPATH') or die();

class Auth extends CI_Controller
{
	private $class;
	private $view;

	public function __construct()
	{
		parent::__construct();
		$this->class = $this->router->fetch_class();
		$this->view = 'pages/';
		$this->load->model(Auth_model::class, 'auth');
	}

	public function index()
	{
		if (is_login()) return redirect();
		$this->_rules();

		if ($this->form_validation->run()) return $this->_login();

		$data = [
			'title' => 'Login',
		];
		return view($this->view.'login', $data, true);
	}

	public function logout()
	{
		unset($_SESSION['login']);
		$this->session->set_flashdata('pesan', "Berhasil keluar!");
		redirect($this->class);
	}

	private function _login()
	{
		$data = $this->input->post();

		$akun = $this->auth->find($data['username']);
		if (!$akun) {
			$this->session->set_flashdata('pesan', "Akun tidak ditemukan");
			redirect($this->class);
		}

		if (!password_verify($data['password'], $akun->password)) {
			$this->session->set_flashdata('pesan', "Password salah");
			redirect($this->class);
		}

		$_SESSION['login'] = $akun->username;

		return redirect();
	}

	private function _rules()
	{
		$this->form_validation->set_rules('username', '', 'required');
		$this->form_validation->set_rules('password', '', 'required');
	}
}
