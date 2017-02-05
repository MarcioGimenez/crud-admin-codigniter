<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('usuario_model');
		if($this->usuario_model->logado()!= true){
			redirect('login', 'refresh');
		}
	}
	


	public function index()	{	
	// pega todos os usuarios do bd e passa para a view	
		$data['usuarios']=$this->usuario_model->get_usuarios();
		
		$this->load->view('includes/header');
		$this->load->view('includes/menu');
		$this->load->view('lista_usuario',$data);
		$this->load->view('includes/footer');

		
	}

	public function cadastro(){
		if($_POST){
			// recupera dados POST
			$data['nome'] = $this->input->post('nome');
			$data['cpf'] = $this->input->post('cpf');
			$data['endereco'] = $this->input->post('endereco');
			$data['nivel'] = $this->input->post('nivel');
			$data['email'] = $this->input->post('email');
			//$senha_codificada =password_hash($this->input->post('senha'),PASSWORD_DEFAULT);
			$data['senha']=$this->input->post('senha');
			$data['status'] = $this->input->post('status');

			//realiza validação dos dados recebidos
			$this->load->library('form_validation');
			$this->form_validation->set_rules('nome','Nome','trim|required|min_length[5]');
			$this->form_validation->set_rules('email','Email','trim|required|valid_email');
			$this->form_validation->set_rules('senha','Senha','trim|required|min_length[6]');
			$this->form_validation->set_rules('senha2','Repita a senha','trim|required|min_length[6]|matches[senha]');

			// verifica a validação
			if($this->form_validation->run() == FALSE){
				if(validation_errors()){
					set_msg(validation_errors(),'warning');
				}else{
					set_msg('validação ok','success');
				}	
			}else{
				
				if($this->usuario_model->cadastra_usuario($data)){
					set_msg('Usuário cadastrado com sucesso','success');
					redirect('usuario', 'refresh');

				}
			}
		}
		$this->load->view('includes/header');
		$this->load->view('includes/menu');
		if(isset($data)){
			$this->load->view('cadastro_usuario',$data);
		}else{
			$this->load->view('cadastro_usuario');
		}
		$this->load->view('includes/footer');

	}
	public function alterar($id=null){
		
		if($_POST){
			// recupera dados POST
			
			$data['nome'] = $this->input->post('nome');
			$data['cpf'] = $this->input->post('cpf');
			$data['endereco'] = $this->input->post('endereco');
			$data['nivel'] = $this->input->post('nivel');
			$data['email'] = $this->input->post('email');
			$data['status'] = $this->input->post('status');

			//realiza validação dos dados recebidos
			$this->load->library('form_validation');
			$this->form_validation->set_rules('nome','Nome','trim|required|min_length[5]');
			$this->form_validation->set_rules('email','Email','trim|required|valid_email');
			
			// verifica a validação
			if($this->form_validation->run() == FALSE){
				if(validation_errors()){
					set_msg(validation_errors(),'warning');
				}else{
					set_msg('validação ok','success');
				}	
			}else{

				if($this->usuario_model->alterar_usuario($data,$id)){
					
					set_msg('Usuário alterado com sucesso','success');
					redirect('usuario', 'refresh');

				}
			}
		}

		$data['usuario'] = $this->usuario_model->get_usuarios($id);
		$this->load->view('includes/header');
		$this->load->view('includes/menu');
		if(isset($data)){
			$this->load->view('alterar_usuario',$data);
		}else{
			$this->load->view('alterar_usuario');
		}
		$this->load->view('includes/footer');
	}
	public function excluir($id=null){

		if($this->usuario_model->remove_usuario($id)){
			set_msg('Usuário excluído com sucesso','success');
		}else{
			set_msg('Erro ao excluir usuario','danger');
		}
		$data['usuarios']=$this->usuario_model->get_usuarios();
		$this->load->view('includes/header');
		$this->load->view('includes/menu');
		$this->load->view('lista_usuario',$data);
		$this->load->view('includes/footer');
	}
}
