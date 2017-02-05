<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('usuario_model');
		if($this->usuario_model->logado()!= true){
			redirect('login', 'refresh');
		}
	}
	
	
	public function index()
	{
		$this->load->view('includes/header');
		$this->load->view('includes/menu');
		$this->load->view('dashboard');
		$this->load->view('includes/footer');
	}
}
