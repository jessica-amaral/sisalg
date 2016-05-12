<?php
class Submissao_model extends CI_Model{

	public function salvar() {
		
			$this->db->insert('submissao',$dados);
		
	}
	
}