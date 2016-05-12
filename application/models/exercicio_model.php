<?php
class Exercicio_model extends CI_Model{
	
	public function listar() {

		return $this->db->get('exercicio');
		
	}
	
	public function listar_por_data($data_inicio,$data_fim,$disciplina) {
	
		$this->$db->where('data_inicio',$data_inicio);
		$this->$db->where('data_fim',$data_data_fim);
		$this->$db->where('fk_disciplina_id',$disciplina);
		return $this->db->get('exercicio');
	
	}
	
	public function buscar($exer_id) {
		$this->db->where('exercicio_id',$exer_id);
		return $this->db->get('exercicio');
	}
	
	public function cadastrar($dados) {
	
		$this->db->insert('exercicio',$dados);
	
	}
	

}