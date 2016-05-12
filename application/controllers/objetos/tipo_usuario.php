<?php class Tipo_usuario extends CI_Controller{
	
	public $id= "";
	public $tipo_usuario= "";
	public $sigla = "";
	public $cad_por = "";
	public $data_cad = "";
	
	public function __construct($id= "",$tipo_usuario= "",$sigla= "",$cad_por= "",$data_cad = "") {
		parent::__construct();
		$this->load->model('Tipo_usuario_model','',true);
		$this->id = $id;
		$this->tipo_usuario = $tipo_usuario;
		$this->sigla = $sigla;
		$this->cad_por = $cad_por;
		$this->data_cad = $data_cad ;
		
	}
	
	/**
	 * Função cadastra um novo Tipo de Usuário
	 * @author jessica.souza
	 */
	public function cadastrar($dados) {
		
		$this->Tipo_usuario_model->cadastrar($dados);
	}
	
	
	/**
	 * Função lista todos os tipos de usuários ativos
	 * @author jessica.souza
	 */
	public function listar() {
	
		$tp_usu = $this->Tipo_usuario_model->listar()->result();
	
	
		foreach ($tp_usu as $u){
				
			$tipo_usuario[] = new Tipo_usuario($u->tipo_usuario_id,
												$u->desc_tipo_usuario,
												$u->tipo_usuario,
												$u->cad_por_id,
												$u->data_cad);
			}
	
		return $tipo_usuario;
	
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