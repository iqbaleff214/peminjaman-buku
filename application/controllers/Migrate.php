<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migrate extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->input->is_cli_request() or exit('Gak boleh ya');
		$this->load->library('migration');
	}

	public function index()
	{
		if ($this->migration->current() === FALSE) return show_error($this->migration->error_string());
		echo 'Success!';
	}

	public function version($version)
	{
		if ($this->migration->version($version) === FALSE) return show_error($this->migration->error_string());
		echo 'Success!';
	}
}
