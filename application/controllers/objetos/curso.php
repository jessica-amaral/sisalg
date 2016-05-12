<?php
class Curso extends CI_Controller{
	
	public $id= "";
	public $nome = "";
	public $descricao = "";
	public $universidade = "";
	public $cad_por = "";
	public $data_cad = "";
	
	public function __construct($id= "",$nome= "",$descricao = "",$universidade = "",$cad_por= "",$data_cad = "") {
		parent::__construct();
		$this->load->model('Curso_model','',true);
		$this->id = $id;
		$this->nome = $nome;
		$this->descricao = $descricao;
		$this->universidade = $universidade;
		$this->cad_por = $cad_por;
		$this->data_cad = $data_cad ;
		
	}
	
	
	public function cadastrar($dados) {
		
		$this->Curso_model->cadastrar($dados);
	}
	
	
	/**
	 * Função lista todos os cursos ativos
	 * @author jessica.souza
	 */
	public function listar() {
		
		$cursos= $this->Curso_model->listar()->result();
		
		
		foreach ($cursos as $c){
			
			$cur[] = new Curso($c->curso_id,
								$c->nome_curso,
								$c->desc_curso,
								$c->fk_universidade_id,
								$c->cad_por_id,
								$c->data_cad);
		}
		
		return $cur;
		
	}
	
}