<?php
class Exercicio extends CI_Controller{
	
	public $id= "";
	public $nome = "";
	public $instrucoes = "";
	public $data_inicio = "";
	public $data_fim = "";
	public $disciplina = "";
	public $cadastrado_por = "";
	public $data_cadastro = "";
	
	public function __construct($id= "",$nome= "",$instrucoes= "",$data_inicio = "",$data_fim = "",$disciplina = "",$cadastrado_por = "",$data_cadastro = "") {
		parent::__construct();
		$this->load->model('Exercicio_model','',true);
		$this->id = $id;
		$this->nome = $nome;
		$this->instrucoes = $instrucoes;
		$this->data_inicio = $data_inicio;
		$this->data_fim = $data_fim;
		$this->disciplina = $disciplina;
		$this->cadastrado_por = $cadastrado_por;
		$this->data_cadastro = $data_cadastro;
	}
	
	/**
	 * Função lista os exercicios de determinada disciplina
	 * @author jessica.souza
	 */
	public function listar($disciplina_id) {
		
		$exer = $this->Exercicio_model->listar()->result();

		if($exer){
			
			foreach ($exer as $e){
				
				$exercicio [] = new Exercicio($e->exercicio_id,
												$e->nome,
												$e->title);
			}
			
			return $exercicios;
			
		}
	}
	
	public function buscar($exercicio_id) {
		
		return $this->Exercicio_model->buscar($exercicio_id)->result();
		
		/*return new Exercicio($ex['exercicio_id'],
								$ex[0]->instrucoes_exercicio,
								$ex[0]->data_inicio,
								$ex[0]->data_fim,
								$ex[0]->fk_disciplina_id,
								$ex[0]->cad_por_id,
								$ex[0]->cad_em);*/
	}
	
	public function cadastrar($dados_exercicio) {
		
		return $this->Exercicio_model->cadastrar($dados_exercicio);
	}
	
	
	/**
	 * Função edita os campos dos exercicios na base
	 * @param identificador do exercicio $exer_id
	 * @param dados a serem alterados do exercicio $dados
	 * @author jessica.souza
	 */
	public function editar($exer_id,$dados) {
		;
	}
}