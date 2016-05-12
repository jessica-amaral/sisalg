/* Fun��o alternar cores da tabela */
function tabColor(id, classe) { 
	var tabela = document.getElementById(id);
	var linhas = tabela.getElementsByTagName("tr");
	for ( var i = 0; i < linhas.length; i++) {
		((i % 2) == 0) ? linhas[i].className = classe : void (0);
	}
}

function irParaLink(link) {
	location.href = link;
}

function submit(form){

	document.getElementById(form).submit();
	
}

function adicClasse(elemento, classe) {
	document.getElementById(elemento).className = classe;
}

function insereValue(elemento, valor) {
	document.getElementById(elemento).value = valor;
}

function limpa(elemento) {
	document.getElementById(elemento).value = "";
}

function getVal(elemento){
	document.getElementById(elemento).value;
}

function mostrar(elemento){
	document.getElementById(elemento).style.display = "inline";
}

function esconder(elemento){
	document.getElementById(elemento).style.display = "none";
}

function somenteVer(elemento){
	document.getElementById(elemento).readOnly = true;
}

function podemEditar(elemento){
	document.getElementById(elemento).readOnly = false;	
}