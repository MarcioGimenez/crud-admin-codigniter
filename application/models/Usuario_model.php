<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {

	
	function __construct(){
		parent::__construct();
		$this->load->library('encrypt');
	}

	  # VALIDA USUÁRIO     
	function valida_usuario() {         
		$this->db->where('email', $this->input->post('email'));          
		$this->db->where('senha', $this->input->post('senha'));     
  		$this->db->where('status', 1); 

		$query = $this->db->get('usuarios');  
		  
		if ($query->num_rows() >= 1) { 
			set_msg('Login efetuado com sucesso!','success');                
			return true; 
			   
		}else{
			set_msg('Erro ao fazer o login','danger');       
		}    
	}

	function logado() {         
		$logado = $this->session->userdata('logado');         
		if (!isset($logado) || $logado != true) {
		set_msg('Você precisa fazer o login para ter acesso ao sistema','danger');
			return false;       
		}else{
			return true;
		}     
	} 
	public function get_usuarios($id=null){
		if($id){
			$this->db->where('idusuario',$id);
		}
		$query =$this->db->get('usuarios');
		if($query->num_rows()!= 0){
			return $query->result();
		}else{
			return NULL;
		}
	}

	public function cadastra_usuario($data){
		if($this->db->insert('usuarios',$data)){
			return true;
		}else{
			return false;
		}

	}
	public function alterar_usuario($data,$id){
		$this->db->where('idusuario',$id);
		if($this->db->update('usuarios',$data)){
			return true;
		}else{
			return false;

		}

	}
	public function remove_usuario($id){
		$this->db->where('idusuario',$id);
		if($this->db->delete('usuarios')){
			return true;
		}else{
			return false;
		}
	}
}
