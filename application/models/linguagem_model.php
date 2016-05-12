<?php
class Linguagem_model extends CI_Model{
	
	public function listar() {

		$this->db->where('status',1);
		$this->db->order_by('nome');
		return $this->db->get('linguagens_ideone');
		
	}
}