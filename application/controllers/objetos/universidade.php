<?php
class Universidade extends CI_Controller{
	
	public $id= "";
	public $nome = "";
	public $razao_social = "";
	public $endereco = "";
	public $cnpj = "";
	public $cad_por = "";
	public $data_cad = "";
	
	public function __construct($id= "",$nome= "",$razao_social = "",$endereco = "",$cnpj = "",$cad_por= "",$data_cad = "") {
		parent::__construct();
		$this->load->model('Universidade_model','',true);
		$this->id = $id;
		$this->nome = $nome;
		$this->razao_social = $razao_social ;
		$this->endereco = $endereco ;
		$this->cnpj = $cnpj;
		$this->cad_por = $cad_por;
		$this->data_cad = $data_cad ;
		
	}
	
	/**
	 * Função cadastra uma nova universidade
	 * @author jessica.souza
	 */
	public function cadastrar($dados) {
		
		$this->Universidade_model->cadastrar($dados);
	}
	
	/**
	 * Função lista todos as universidade ativas
	 * @author jessica.souza
	 */
	public function listar() {
	
		$uni = $this->Universidade_model->listar()->result();
	
	
		foreach ($uni as $u){
				
			$universidades[] = new Universidade($u->universidade_id,
												$u->nome_uni,
												$u->razao_social_uni,
												$u->endereco_uni,
												$u->cnpj_uni,
												$u->cad_por_id,
												$u->data_cad);
			}
	
		return $universidades;
	
	}
	
	
	/**
	 * Função insere as edições dos dados da universidade
	 * @param identificador universidade $uni_id
	 * @param dados editados da universidade $dados
	 * @author jessica.souza
	 */
	public function editar($uni_id,$dados) {
		;
	}
	
}