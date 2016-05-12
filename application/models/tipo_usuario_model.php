<?php
class Tipo_usuario_model extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}

	public function listar() {
		$this->db->select('*');
		$this->db->where('status',1);
		$this->db->order_by('desc_tipo_usuario');
		return $this->db->get('tipo_usuario');

	}
	
	public function cadastrar($dados) {
	
		$this->db->insert('tipo_usuario',$dados);
	
	}
	
	
}
