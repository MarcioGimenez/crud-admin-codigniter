<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

if(!function_exists('set_msg')):
	//seta uma mensagem via session para ser lida posteriormente
	function set_msg($msg=null,$tipo){
		$ci = & get_instance();
		$msg = '<div class="alert alert-'.$tipo.'">'.$msg.'</div>';
		$ci->session->set_userdata('aviso',$msg);
	}
	endif;

if(!function_exists('get_msg')):
	//seta uma mensagem via session para ser lida posteriormente
	function get_msg($destroy=true){
		$ci = & get_instance();
		$retorno =$ci->session->userdata('aviso');
		if($destroy) $ci->session->unset_userdata('aviso');
		return $retorno;
	}
	endif;	