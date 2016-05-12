<?php
class Ideone_web_service extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->helper('date');
	}
	
	public function listar_linguagens() {
		
		$funcao = 'Listar Linguagens';
	
		$user = '08d5b1895b1ce595ddf3c41a8fa21e86'; //--> API username
		$pass = 'afdff76f393cfdf9b61c110e610db5e4'; //--> API password
		
		$lang = 1; //--> Source Language Code; Here is 1 => C++
		
		$code = '#include<stdio.h>
					int main() {
					    printf("hello");
					    return 0;
					}
					'; //--> Source Code
		
		$input = '';
		$run = true;
		$private = false;
		
		//create new SoapClient
		$client = new SoapClient( "http://api.compilers.sphere-engine.com/api/1/service.wsdl" );
		
		if($funcao == 'Submeter Codigo' ){
			//create new submission
			$result = $client->createSubmission( $user, $pass, $code, $lang, $input, $run, $private );
			
			//if submission is OK, get the status
			if ( $result['error'] == 'OK' ) {
				echo 'deu tudo certo :)';
			
				$status = $client->getSubmissionStatus( $user, $pass, $result['link'] );
			
				if ( $status['error'] == 'OK' ) {
			
					//check if the status is 0, otherwise getSubmissionStatus again
					while ( $status['status'] != 0 ) {
						sleep( 3 ); //sleep 3 seconds
						$status = $client->getSubmissionStatus( $user, $pass, $result['link'] );
					}
			
					//finally get the submission results
					$details = $client->getSubmissionDetails( $user, $pass, $result['link'], true, true, true, true, true );
					if ( $details['error'] == 'OK' ) {
						//var_dump( $details );
					} else {
						//we got some error
						var_dump( $details );
					}
				} else {
					//we got some error
					var_dump( $status );
				}
			} else {
				//we got some error
				var_dump( $result );
			}
		}
		
		if($funcao == 'Listar Linguagens'){
			
			//create new submission
			$result = $client->getLanguages($user,$pass);
			
			if ( $result['error'] == 'OK' ) {
				//var_dump($result);
				return $result;
			}
			
		}
	}
	
	/**
	 * Função realiza a submissao do codigo o WS do IDEONE e retorna o resultado
	 * @param Código enviado $codigo
	 * @param ID da lingiagem do código $linguagem
	 */
	public function submeter_codigo($codigo,$linguagem) {
		

		$user = '08d5b1895b1ce595ddf3c41a8fa21e86'; //--> API username
		$pass = 'afdff76f393cfdf9b61c110e610db5e4'; //--> API password
		
		$input = '';
		$run = true;
		$private = false;
		
		//create new SoapClient
		$client = new SoapClient( "http://api.compilers.sphere-engine.com/api/1/service.wsdl" );
		
		$result = $client->createSubmission( $user, $pass, $codigo, $linguagem, $input, $run, $private );
		
		//if submission is OK, get the status
		if ( $result['error'] == 'OK' ) {
				
			$status = $client->getSubmissionStatus( $user, $pass, $result['link'] );
				
			if ( $status['error'] == 'OK' ) {
					
				//check if the status is 0, otherwise getSubmissionStatus again
				while ( $status['status'] != 0 ) {
					sleep( 3 ); //sleep 3 seconds
					$status = $client->getSubmissionStatus( $user, $pass, $result['link'] );
				}
					
				//finally get the submission results
				$details = $client->getSubmissionDetails( $user, $pass, $result['link'], true, true, true, true, true );
				if ( $details['error'] == 'OK' ) {
					return $details;
				} else {
					//we got some error
					return $details;
				}
				
			} else {
				//we got some error
				return $status;
			}
		} else {
			//we got some error
			return $result;
		}
		
		
	}
}	