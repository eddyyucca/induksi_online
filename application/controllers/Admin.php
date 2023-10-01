<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/template/header');
		$this->load->view('admin/home');
		$this->load->view('admin/template/footer');
	}
	public function register()
	{
		$this->load->view('admin/template/header');
		$this->load->view('admin/register/home');
		$this->load->view('admin/template/footer');
	}
}
