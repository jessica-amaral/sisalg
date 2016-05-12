<h1>DETALHES SUBMISSÃO</h1>

<form name="nova_submissao" id="nova_submissao" action="<?php echo base_url()?>submissao/submeter" method="post">
<?php if($detalhe_sub['error'] == 'OK'){?>
	
	<fieldset id='resultado' class="cform clear">
		<label for='txtResult'>Resultado</label> 
		<input name="txtResult" id="txtResult"  value="<?php if( $detalhe_sub['result']== 0){ echo 'Não executou';
																}elseif($detalhe_sub['result']== 11){echo 'Erro de Compilação (compilation error)';
																}elseif($detalhe_sub['result']== 12){echo 'Erro de Execução (runtime error)';
																}elseif($detalhe_sub['result']== 13){echo 'O limite de tempo foi excedido';
																}elseif($detalhe_sub['result']== 15){echo 'Sucesso';
																}elseif($detalhe_sub['result']== 17){echo 'Limite de memória excedido';
																}elseif($detalhe_sub['result']== 19){echo 'Chamadade sistema ILEGAL';
																}elseif($detalhe_sub['result']== 20){echo 'ERRO INTERNO, FAVOR CONTATOR O ADMINISTRADOR';}	;?>" type="text" size="48" readonly="readonly">
	</fieldset>
	
	<?php if($detalhe_sub['cmpinfo'] != ''){?>
	<fieldset id="status" class="cform clear">
		<label>Descrição do Erro</label>
		<textarea cols="90" rows="4" readonly="readonly"><?php echo $detalhe_sub['cmpinfo'];?></textarea>
	</fieldset>	
	<?php }?>

	<fieldset id="status" class="cform clear">
		<label>Status</label>
		<input name="txtStatus" id="txtStatus"  value="<?php if( $detalhe_sub['status']== 0){ echo 'Finalizado';
																}elseif($detalhe_sub['status']== 1){echo 'Compilando';
																}elseif($detalhe_sub['status']== 1){echo 'Executando';}	;?>" type="text" readonly="readonly">
		<input name="txtStatusId" id="txtStatusId" value="<?php echo $detalhe_sub['status'];?>"  type="hidden" readonly="readonly">
	</fieldset>
	
	<fieldset id='linguagem' class="cform">
		<label for='txtLinguagem'>Linguagem</label> 
		<input name="txtLinguagem" id="txtLinguagem" value="<?php echo $detalhe_sub['langName'];?>" type="text" readonly="readonly">
	</fieldset>
	
	<fieldset id="status" class="cform clear">
		<label>Input</label>
		<input name="txtInput" id="txtInput" value="<?php echo $detalhe_sub['input'];?>"  type="text" readonly="readonly">
	</fieldset>
	
	<fieldset id="status" class="cform clear">
		<label>Código Postado</label>
		<textarea name="taCodigo" id="taCodigo" cols="90" rows="10" readonly="readonly"><?php echo $detalhe_sub['source'];?></textarea>
	</fieldset>
	<?php if($detalhe_sub['cmpinfo'] == ''){?>
	<fieldset id="status" class="cform clear">
		<label>Output</label>
		<textarea cols="90" rows="5" readonly="readonly"><?php echo $detalhe_sub['output'];?></textarea>
	</fieldset>
	
	<fieldset id='nota' class="cform clear">
		<label for='txtNota'>Nota</label> 
		<input name="txtNota" id="txtNota" value="<?php echo '';?>" type="text" readonly="readonly">
	</fieldset>
	<?php }?>
	<fieldset class="botao">
		<button type="submit" name="btnVoltar" id="btnVoltar" value="voltar" class="action">Voltar</button>
		<button type="submit" name="btnSalvarSubmissao" id="btnSalvarSubmissao" value="asalvar" class="action">Salvar</button>
	</fieldset>
	
	<?php }else{
	
		var_dump($detalhe_sub);
	}?>
</form>