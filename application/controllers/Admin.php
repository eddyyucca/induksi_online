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
		$this->load->view('admin/register/register');
		$this->load->view('admin/template/footer');
	}
	public function view_data()
	{
			$nik = $this->input->post('nik'); 
		  // URL JSON API yang akan Anda akses
        $api_url = 'http://localhost:8080/api-buma/datakaryawan/'.$nik;

        // Mengambil data dari JSON API
        $api_data = file_get_contents($api_url);

        // Menguraikan JSON menjadi array
        $data['api_data'] = json_decode($api_data,true);
		$this->load->view('admin/template/header');
		$this->load->view('admin/register/view_data',$data);
		$this->load->view('admin/template/footer');
	}
}
