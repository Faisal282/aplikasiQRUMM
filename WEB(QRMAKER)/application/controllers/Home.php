<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		if ($_SESSION['status'] != 'logged in') {
			redirect('login');
		}
	}
	

	public function index()
	{
		if ($_SESSION['role'] == 2) { //view untuk admin
			$data['title'] = "Utama";
			$this->load->view('template/admin/header', $data);
			$this->load->view('home/index');
			$this->load->view('template/admin/footer');
		} elseif($_SESSION['role'] == 1) { //view untuk penjual
			$data['title'] = "Utama";
			$this->load->view('template/penjual/header', $data);
			$this->load->view('template/penjual/navbar');
			$this->load->view('home/index');
			$this->load->view('template/penjual/footer');
		} else { //view untuk pelanggan
			$data['title'] = "Utama";
			$this->load->view('template/pelanggan/header', $data);
			$this->load->view('template/penjual/navbar');
			$this->load->view('home/index');
			$this->load->view('template/pelanggan/footer');
		}
	}

}