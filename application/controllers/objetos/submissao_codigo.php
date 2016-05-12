<?php 

class Submissao_codigo extends CI_Controller{

	public $error =  "";
	public $linguagem_id =  "";
	public $nome_lingagem =  "";
	public $versao_linguagem =  "";
	public $tempo_execucao =  "";
	public $data =  "";
	public $status =  "";
	public $resultado =  "";
	public $memoria =  "";
	public $public =  "";
	public $codigo_fonte =  "";
	public $input =  "";
	public $outuput =  "";
	public $stderr =  "";
	public $informacoes =  "";
	
	public function __construct($error =  "",$linguagem_id =  "",$nome_lingagem =  "",$versao_linguagem =  "",
		$tempo_execucao =  "",	$data =  "",$status =  "",$resultado =  "",$memoria =  "",
			$public =  "",$codigo_fonte =  "",$input =  "",$outuput =  "",$stderr =  "",$informacoes =  ""){
		
		parent::__construct();
		
		$this->error = $error;
		$this->linguagem_id = $linguagem_id;
		$this->nome_lingagem = $nome_lingagem;
		$this->versao_linguagem = $versao_linguagem;
		$this->tempo_execucao = $tempo_execucao;
		$this->data = $data;
		$this->status = $status;
		$this->resultado = $resultado;
		$this->memoria = $memoria;
		$this->public = $public;
		$this->codigo_fonte = $codigo_fonte;
		$this->input = $input;
		$this->outuput = $outuput;
		$this->stderr = $stderr;
		$this->informacoes = $informacoes;
	}
	
	public function submeter_codigo($linguagem, $codigo) {
		
		$sub = $ide->submeter_codigo($codigo, $linguagem);
		
		
		$submissao_resul[] = new Submissao($sub[0]->error,
											$sub[0]->langId,
											$sub[0]->langName,
											$sub[0]->langVersion,
											$sub[0]->time,
											$sub[0]->date,
											$sub[0]->status,
											$sub[0]->resul,
											$sub[0]->memory,
											$sub[0]->signal,
											$sub[0]->public,
											$sub[0]->source,
											$sub[0]->input,
											$sub[0]->output,
											$sub[0]->stderr,
											$sub[0]->cpminfo);
		
		print_r($submissao_resul);exit;
		
		return $submissao_resul;
	}
	
	public function salvar($dados) {
		
		$this->Submissao_model->salvar($dados);
		
	}
}