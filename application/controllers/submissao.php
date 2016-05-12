<?php
include ('objetos/linguagem.php');
include ('objetos/exercicio.php');
include ('objetos/ideone_web_service.php');
class submissao extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->helper('date');
	}
	

	public function index(){
		
		$exer = new Exercicio();
		
		$sub['exercicio'] = $exer->buscar($this->input->post('txtExercicio'));
		
		$ling = new Linguagem();
		
		$sub['linguagens'] = $ling->listar();
		
		$sub['dados']  = array('titulo_pagina'=>'Nova Submissão',
								'pagina'=>'nova_submissao.php',
								'id'=>$this->input->post('txtExercicio'));
		
		$this->load->view('novo/novo',$sub);
	}
	
	
	/**
	 * Função chama o Web Service IDEONE para submeter o código do aluno
	 * @author jessica.souza
	 */
	public function submeter() {
		
		if($this->input->post('btnNovaSubmissao')){
			
			$ws = new Ideone_web_service();
			
			if($this->input->post('tipo_submissao') == 'inserir'){
				
				$codigo = $this->input->post('txtCodigo');
			
			}elseif($this->input->post('tipo_submissao') == 'upload'){
			
				$codigo ='a';
			
			}
			
			
			$resul['detalhe_sub'] =$ws->submeter_codigo($codigo,$this->input->post('cbling'));
			
			$resul['dados']  = array('titulo_pagina'=>'Submissão',
										'pagina'=>'detalhes_submissao.php',
										'id'=>$this->input->post('btnNovaSubmissao'));
	
			$this->load->view('novo/novo',$resul);
			return;
		}
		
		if($this->input->post('btnSalvarSubmissao')){
			
			$sub = new Submissao_codigo();
			
			$sub->salvar(array('codigo_submissao'=>$this->input->post('taCodigo'),
								'fk_exercicio_id'=>$this->input->post('btnSalvarSubmissao'),
								'fk_aluno_id'=>1,
								'link_exercicio'=>$this->input->post(''),
								'fk_status_id'=>$this->input->post('txtStatusId')));
			
			
			
		}
		
		
	}
}