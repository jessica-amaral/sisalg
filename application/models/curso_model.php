<?php
class Curso_model extends CI_Model{
	
	public function listar() {

		$this->db->where('status',1);
		$this->db->order_by('nome_curso');
		return $this->db->get('curso');
		
	}
	
	public function cadastrar($dados) {
	
		$this->db->insert('curso',$dados);
	
	}
}