<?php class Usuario extends CI_Controller{
	
	public $id= "";
	public $nome = "";
	public $login = "";
	public $senha = "";
	public $documento = "";
	public $email = "";
	public $universidade = "";
	public $tipo_usuario = "";
	public $cad_por = "";
	public $data_cad = "";
	
	public function __construct($id= "",$nome= "",$login= "",$senha= "",$documento= "",$email= "",$universiade= "",$tipo_usuario= "",$cad_por= "",$data_cad = "") {
		parent::__construct();
		$this->load->model('Usuario_model','',true);
		$this->id = $id;
		$this->nome = $nome;
		$this->login = $login;
		$this->senha = $senha;
		$this->documento = $documento;
		$this->email = $email;
		$this->universidade = $universiade;
		$this->tipo_usuario = $tipo_usuario;
		$this->cad_por = $cad_por;
		$this->data_cad = $data_cad ;
		
	}
	
	/**
	 * Função cadastra uma nova universidade
	 * @author jessica.souza
	 */
	public function cadastrar($dados) {
		
		$this->Usuario_model->cadastrar($dados);
	}
	
	
	/**
	 * Função lista todos os usuários do tipo informado
	 * @param identificador do tipo $tipo_id
	 * @author jessica.souza
	 */
	public function listar_tipo_usuario($tipo_id) {
	
		$usu = $this->Usuario_model->listar_tipo_usu($tipo_id)->result();
	
	
		foreach ($usu as $u){
				
			$usuarios[] = new Usuario($u->usuario_id,
										$u->nome_usuario,
										$u->login,
										$u->senha_usuario,
										$u->documento_usuario,
										$u->email_usuario,
										$u->fk_universidade_id,
										$u->fk_tipo_usuario_id,
										$u->cad_por_id,
										$u->data_cad);
			}
	
		return $usuarios;
	
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