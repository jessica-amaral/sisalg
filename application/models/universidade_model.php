<?php
class Universidade_model extends CI_Model{
	
	public function listar() {

		$this->db->where('status',1);
		$this->db->order_by('nome_uni');
		return $this->db->get('universidade');
		
	}
	
	public function cadastrar($dados) {
	
		$this->db->insert('universidade',$dados);
	
	}
}