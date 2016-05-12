<?php
class Linguagem extends CI_Controller{
	
	public $id= "";
	public $nome = "";
	public $title = "";
	
	public function __construct($id= "",$nome= "",$title= "") {
		parent::__construct();
		$this->load->model('Linguagem_model','',true);
		$this->id = $id;
		$this->nome = $nome;
		$this->title = $title;
	}
	
	/**
	 * Função lista as linguagens com o status 1
	 * @author jessica.souza
	 */
	public function listar() {
		
		return $this->Linguagem_model->listar()->result();

		/*if($ling){
			
			foreach ($ling as $l){
				$lista_linguagens [] = new Linguagem($l->linguagem_id,
														$l->nome,
														$l->title);
			}
			
			return $lista_linguagens;
			
		}*/
	}
}