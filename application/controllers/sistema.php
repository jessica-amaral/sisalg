<?php include ('objetos/tipo_usuario.php');
include ('objetos/usuario.php');
include ('objetos/universidade.php');
class Sistema extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->helper('date');
		
	}
	
	
	public function usuario() {

		if($this->input->post('btnNovoUsuario')){
				
			$usu = new Usuario();
				
			$usu->cadastrar(array('login'=>$this->input->post('txtLogin'),
									'senha_usuario'=>$this->input->post('txtSenha'),
									'nome_usuario'=>$this->input->post('txtNomeUsuario'),
									'documento_usuario'=>$this->input->post('txtDocumento'),
									'email_usuario'=>$this->input->post('txtEmail'),
									'data_nascimento'=>$this->input->post('txtDataNasc'),
									'fk_universidade_id'=>$this->input->post('cbUniversidade'),
									'fk_tipo_usuario_id'=>$this->input->post('cbTipoUsu'),
									'cad_por_id'=>1));
				
			$us['dados']  = array('titulo_pagina'=>'Novo Usuário',
									'pagina'=>'novo_usuario.php');
				
			$this->load->view('novo/novo',$us);
				
			return;
		}
		
		
		$uni = new Universidade();
		
		$u['universidade']  = $uni->listar();
		
		$tpu = new Tipo_usuario();
		
		$u['tipo_usuario']  = $tpu->listar();
		
		$u['dados']  = array('titulo_pagina'=>'Novo Usuário',
								'pagina'=>'novo_usuario.php');
	
		$this->load->view('novo/novo',$u);
	}
}
