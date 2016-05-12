<?php
include ('objetos/disciplina.php');
include ('objetos/exercicio.php');
include ('objetos/universidade.php');
include ('objetos/curso.php');
include ('objetos/usuario.php');
include ('objetos/tipo_usuario.php');
class Cadastro extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->helper('date');
	}
	
	
	public function universidade() {
		
		
		if($this->input->post('txtNomeUniversidade')){
			
			$uni = new Universidade();
			
			$uni->cadastrar(array('nome_uni'=>$this->input->post('txtNomeUniversidade'),
									'razao_social_uni'=>$this->input->post('txtRazaoSocial'),
									'endereco_uni'=>$this->input->post('txtEndereco'),
									'cep_uni'=>$this->input->post('txtCep'),
									'cnpj_uni'=>$this->input->post('txtCnpj'),
									'cad_por_id'=>1));
			
			$univ['dados']  = array('titulo_pagina'=>'Nova Universidade',
									'pagina'=>'nova_universidade.php');
			
			$this->load->view('novo/novo',$univ);
			
			return;
		}
		
		$uni['dados']  = array('titulo_pagina'=>'Nova Universidade',
								'pagina'=>'nova_universidade.php');
		
		$this->load->view('novo/novo',$uni);
	}
	
	

	public function curso() {

		if($this->input->post('txtNomeCurso')){
			
			$cur = new Curso();
				
			$cur->cadastrar(array('nome_curso'=>$this->input->post('txtNomeCurso'),
									'desc_curso'=>$this->input->post('txtDescCurso'),
									'fk_universidade_id'=>$this->input->post('cbUniversidade'),
									'cad_por_id'=>1));

				
			$curso['dados']  = array('titulo_pagina'=>'Novo Curso',
										'pagina'=>'novo_curso.php');
				
			$this->load->view('novo/novo',$curso);
				
			return;
		}
		

		$u = new Universidade();
		
		$cur['universidade']  = $u->listar();
		
		$cur['dados']  = array('titulo_pagina'=>'Novo Curso',
								'pagina'=>'novo_curso.php');
		
		$this->load->view('novo/novo',$cur);
	}
	
	
	
	public function disciplina() {
		
		if($this->input->post('btnNovaDisciplina')){
				
			$dis = new Disciplina();
		
			$dis->cadastrar(array('nome_disciplina'=>$this->input->post('txtNomeDisciplina'),
									'desc_disciplina'=>$this->input->post('txtDescDisciplina'),
									'semestre'=>$this->input->post('txtSemestre'),
									'fk_curso_id'=>$this->input->post('cbCurso'),
									'fk_professor_id'=>$this->input->post('cbProfessor'),
									'cad_por_id'=>1));
		
		
			$d['dados']  = array('titulo_pagina'=>'Nova Disciplina',
											'pagina'=>'nova_disciplina.php');
		
			$this->load->view('novo/novo',$d);
		
			return;
		}
		
		$cur = new curso;
		
		$disciplina['curso']  = $cur->listar();
		
		$u = new Usuario();
		
		$disciplina['professor']  = $u->listar_tipo_usuario(2);

		$disciplina['dados']  = array('titulo_pagina'=>'Nova Disciplina',
										'pagina'=>'nova_disciplina.php');
		
		$this->load->view('novo/novo',$disciplina);
	}
	
	
	
	public function exercicio(){
		
		if($this->input->post('btnNovoExercicio')){
			

			
			
			$sub_apos_data = $this->input->post('cheSubmissaoAposData');
			
			if($sub_apos_data == 'on' ){
				$sub = 1;
			}else{
				$sub = 0;
			}
			
			$exer = new Exercicio();
			
			$exer->cadastrar(array('nome_exercicio'=>$this->input->post('txtTituloExercicio'),
									'instrucoes_exercicio'=>$this->input->post('taInstrucoes'),
									'data_inicio'=>$this->input->post('txtDataInicio'),
									'data_fim'=>$this->input->post('txtDataFim'),
									'fk_disciplina_id'=>$this->input->post('cbDisciplina'),
									'submissao_apos_data'=>$sub,
									'cad_por_id'=>1));
		}
		
		$disc =  new Disciplina();
		
		$e['disciplinas'] = $disc->listar_disciplinas_usuario(5, 2);//id professor Andre e tipo 2 professor
	
		$e['dados']  = array('titulo_pagina'=>'Novo Exercício',
								'pagina'=>'novo_exercicio.php');
		
		$this->load->view('novo/novo',$e);
		
		
		
	}
	
	public function usuario() {
		;
	}
	
}
