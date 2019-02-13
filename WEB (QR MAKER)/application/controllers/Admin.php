<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('Admin_model');
		if ($_SESSION['status'] != 'logged in') {
			redirect('login');
			if ($_SESSION['role'] != 2) {
				redirect('home');
			}
		}
	}

	public function index()
	{
		redirect('home');
	}

	public function penjual()
	{
		if ($_SESSION['role'] != 2) {
			redirect('home');
		}
		$data['title'] = "Penjual";
		$data['penjual'] = $this->Admin_model->getAllPenjual();
		$this->load->view('template/admin/header', $data);
		$this->load->view('admin/penjual', $data);
		$this->load->view('template/admin/footer');
	}

	public function pelanggan()
	{
		$data['title'] = "Penjual";
		$data['pelanggan'] = $this->Admin_model->getAllPelanggan();
		$this->load->view('template/admin/header', $data);
		$this->load->view('admin/pelanggan', $data);
		$this->load->view('template/admin/footer');
	}

	public function menu()
	{
		$data['title'] = "Menu";
		$data['menu'] = $this->Admin_model->getAllMenu();
		$this->load->view('template/admin/header', $data);
		$this->load->view('admin/menu', $data);
		$this->load->view('template/admin/footer');
	}

	public function nota()
	{
		$data['title'] = "Nota";
		// var_dump($data['nota'] = $this->Admin_model->getAllNota());die;
		$data['nota'] = $this->Admin_model->getAllNota();
		$this->load->view('template/admin/header', $data);
		$this->load->view('admin/nota', $data);
		$this->load->view('template/admin/footer');
	}

}