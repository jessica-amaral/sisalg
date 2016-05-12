<?php
/**
 * Classe possui todas as fun��es que o IDEONE oferece em seu web Service
 * @author J�ssica
 */
class IDEONE extends CI_Controller{
	
	
	public function cria_web_service($param) {
		;
	}
	
	 /**
	  * Função submete um algoritimo no IDEONE
	  * @param Nome do usuário $user
	  * @param Senha do usuario $pass
	  * @param Código para submissao $sourceCode
	  * @param Identificador da Lingagem (int) $language
	  * @param Data�that�will�be�given�to�the�program�on stdin  $input
	  * @param Determina se o codigo deve ser executado (boolean) $run
	  * @param Determina o tipo de submissao - Publica ou secreta (boolean) $private
	  */
	 public function createSubmission($user,$pass,$sourceCode,$language,$input,$run,$private) {
	 	
	 	
	 	//Erro ou identificador da submissao (http://ideone.com/identificador_submissao)
	 	return $result_ideone;
	 }
	 
	
	 
	 /**
	  * Fun��o veririfica o status da submiss�o no IDEONE.
	  * Se o IDEONE finalizou, chama fun��o getSubmissionDetails
	  * se n�o, vai aguarda 3-5 segundos e criar uma nova submiss�o
	  * @param Usu�rio $user
	  * @param Senha do usu�rio $pass
	  * @param Identificador da lingaguem $link
	  */
	 public function getSubmissionStatus($user,$pass,$link) {
	 	
	 	//Erro,status da submissao,resultado da submissao
	 	return $result_ideone;
	 }
	 
	
	 
	 /**
	  * Função traz informações detalhadas da submissao
	  * @param Usuário $user
	  * @param Senha do usuário $pass
	  * @param Identificador da linguaem $link
	  * @param Determina qual codigo da submissao deve retornar $withSource
	  * @param Determina se os dados de entrada devem ser apresentados  $withInput
	  * @param Determina se a sa�da produzida pelo programa deve retornar $withoutput
	  * @param Determina qual stderr deve retornar $withStderr
	  * @param Determina se as informações da compilação devem retornar $withCmpinfo
	  */
	 public function getSubmissionDetails($user,$pass,$link,$withSource,$withInput,$withoutput,$withStderr,$withCmpinfo) {
	 	
	 	/**
	 	 *Erro,
	 	 *identificador linguagem,
	 	 *nome da linguagem,
	 	 *versao da linguagem,
	 	 *tempo de execucao, 
	 	 *data da submissao, 
	 	 *status,
	 	 * resultado submissao,
	 	 * memoria utilizada,
	 	 * sinal dado pelo programa quando deu erro
	 	 * publicp/privado
	 	 * codigo
	 	 * input
	 	 * output
	 	 * informacoes de compilacao
	 	 **/
	 	return $result_ideone;
	 }
	 
	 
	 

	 /**
	  * Fun��o somente testa a conex�o do usuario com o servidor.
	  * @param Usu�rio $user
	  * @param senha $pass
	  */
	 public function testFuncion($user,$pass){
	 
	 }
	 
	 
	 
	 /**
	  * Fun��o traz todas as linguagens para compila��o que o IDEONE oferece
	  * @param usu�rio $user
	  * @param senha $pass
	  */
	 public function getLangangues($user,$pass){
	 	 
	 	//erro ou array com dados da lingaguem
	 	return $language;
	 }
	 
}?>