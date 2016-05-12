<?php
class Disciplina extends CI_Controller{
	
	public $id= "";
	public $nome = "";
	public $descricao = "";
	public $semestre = "";
	public $curso = "";
	public $professor = "";
	public $cad_por = "";
	public $data_cad = "";
	
	public function __construct($id= "",$nome= "",$descricao = "",$semestre = "",$curso = "",$professor = "",$cad_por= "",$data_cad = "") {
		parent::__construct();
		$this->load->model('Disciplina_model','',true);
		$this->id = $id;
		$this->nome = $nome;
		$this->descricao = $descricao ;
		$this->semestre = $semestre ;
		$this->curso = $curso;
		$this->professor = $professor;
		$this->cad_por = $cad_por;
		$this->data_cad = $data_cad ;
		
	}
	
	
	public function cadastrar($dados) {
		
		$this->Disciplina_model->cadastrar($dados);
	}
	
	
	public function listar() {
	
		return $this->Disciplina_model->listar_disciplinas_ativas();
	
		foreach ( $disc as $d){
				
			$disciplinas[] = new Disciplina($d->disciplina_id,
												$d->nome_disciplina,
												$d->desc_disciplina,
												$d->semestre,
												$d->fk_curso_id,
												$d->fk_professor_id,
												$d->cad_por_id,
												$d->data_cad);
		}
	
	
		return $disciplinas;
	
	}
	
	/**
	 * Função edita os campos da disciplina na base
	 * @param identificador da disciplina $disc_id
	 * @param dados a serem alterados da disciplina $dados
	 * @author jessica.souza
	 */
	public function editar($disc_id,$dados) {
		;
	}
	
	
	/**
	 * Função lista todas disciplinas do usuario
	 * @param identificador usuario $usuario_id
	 * @param aluno/profesor
	 * @author jessica.souza
	 */
	public function listar_disciplinas_usuario($usuario_id,$tipo_usuario) {
	
		if($tipo_usuario == 2){//Se professor

			$disc = $this->Disciplina_model->listar_disciplinas_professor($usuario_id)->result();
		
		
			if(count($disc)>0){
				
				
				foreach ($disc as $d){
				
					$disciplinas[] = new Disciplina($d->disciplina_id,
													$d->nome_disciplina,
													$d->desc_disciplina,
													$d->semestre,
													$d->fk_curso_id,
													$d->fk_professor_id,
													$d->cad_por_id,
													$d->cad_em);
				}
				
				
				return $disciplinas;
				
			}else{
				return new Disciplina(0,
										0,
										0,
										0,
										0,
										0,
										0,
										0);
			}
			
			}else{//se aluno
					
				return $this->Disciplina_model->listar_disciplinas_aluno($usuario_id)->result();
			}
			
	}
	
}