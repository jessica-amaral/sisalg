<?php
class Usuario_model extends CI_Model{

	public function listar_tipo_usu($tipo) {

		$this->db->where('status',1);
		$this->db->where('fk_tipo_usuario_id',$tipo);
		$this->db->order_by('nome_usuario');
		return $this->db->get('usuario');

	}
	
	public function cadastrar($dados) {
	
		$this->db->insert('usuario',$dados);
	
	}
	
	
}
