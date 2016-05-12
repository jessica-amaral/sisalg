<?php
class Disciplina_model extends CI_Model{
	
	public function listar() {
		
		$this->db->order_by('nome_disciplina');
		return $this->db->get('disciplina_');
		
	}
	
	public function listar_disciplinas_aluno($usuario_id) {
		
		$this->db->where('aluno_id',$usuario_id);
		$this->db->order_by('nome_disciplina');
		return $this->db->get('disciplina_aluno_view');
	
	}
	
	public function listar_disciplinas_professor($usuario_id) {
		
		//return $this->db->query(" Select * from disciplina_ where fk_professor_id=$usuario_id;");
		
		$this->db->where('fk_professor_id',$usuario_id);
		$this->db->order_by('nome_disciplina');
		return $this->db->get('disciplina_');
	}
	
	
	public function cadastrar($dados) {
	
		$this->db->insert('disciplina_',$dados);
	
	}
}