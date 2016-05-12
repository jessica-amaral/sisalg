function escolher(){
	
	if(document.getElementById('rbTipoSubmissao').value == 'upload'){
		esconder('insercao_codigo');
		mostrar('upload_codigo');
		
	}else if(document.getElementById('rbTipoSubmissao').value == 'inserção'){
		esconder('upload_codigo');
		mostrar('insercao_codigo');
	}
}