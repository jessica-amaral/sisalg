<?php include ('objetos/disciplina.php');

include ('objetos/universidade.php');
class Inicio extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->helper('date');
	
	}
	
	public function index() {
		
		$d= new Disciplina();
		
		$ini['disciplinas'] = $d->listar_disciplinas_usuario(1, 3);
		
		$this->load->view('inicio',$ini);
	}
	
	
	
}