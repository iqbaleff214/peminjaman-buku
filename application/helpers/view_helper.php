<?php

use JetBrains\PhpStorm\Pure;

if (!function_exists('asset')) {
	function asset($view): string
	{
		return base_url().'public/'.$view;
	}
}

if (!function_exists('view')) {
	function view($view, $data = [], $auth = false) {
		$ci =& get_instance();
		$ci->load->view('layout/header', $data);
		if (!$auth) $ci->load->view('layout/bar');
		$ci->load->view($view);
		$ci->load->view('layout/footer');
	}
}

if (!function_exists('active_sidebar')) {
	function active_sidebar($active, $sidebar): string
	{
		return in_array($active, $sidebar) ? 'active show' : '';
	}
}

if (!function_exists('is_login')) {
	function is_login()
	{
		return isset($_SESSION['login']);
	}
}
