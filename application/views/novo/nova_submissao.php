<h1> NOVA SUBMISSÃO</h1><br/>

<form name="nova_submissao" id="nova_submissao" action="<?php echo base_url()?>submissao/submeter" method="post">

	<fieldset class="cform clear">
		<label>EXERCÍCIO</label>
		<label style="color: rgb(45,105,111);"><?php echo $exercicio[0]->instrucoes_exercicio;?></label>
	</fieldset>
	
	<fieldset class="cform clear">
		<label>Data Inicio</label>
		<label style="color: rgb(45,105,111);"><?php echo date('d-m-Y',strtotime($exercicio[0]->data_inicio));?></label>
	</fieldset>
	
	<fieldset class="cform ">
		<label>Data Fim</label>
		<label style="color: rgb(45,105,111);"><?php echo date('d-m-Y',strtotime($exercicio[0]->data_fim));?></label>
	</fieldset>
	
	<?php if($exercicio[0]->submissao_apos_data == 0 &&  $exercicio[0]->data_fim<date('Y-m-d')){?>
	<fieldset class="cform clear">
		<label style="color: red;">Não é possível realizar novas submissões, prazo encerrado !</label> 
	</fieldset>
	<?php }else{?>
	
	
	<fieldset class="cform clear">
		<input type="radio" name="tipo_submissao" id="tipo_submissao" value="inserir" onclick="somenteVer('txtArquivo');podemEditar('txtCodigo');">
		<label for='txtCodigo'>Inserir Código</label> 
		<textarea name="txtCodigo" id="txtCodigo"  cols="90" rows="10" placeholer="Insira aqui seu codigo" required autofocus ></textarea>
	</fieldset>

	<fieldset class="cform clear">
		<input type="radio" name="tipo_submissao" id="tipo_submissao" value="upload" onclick="somenteVer('txtCodigo');podemEditar('txtArquivo');limpa('txtCodigo');">
		<label>Selecionar o arquivo</label>
		<input name="txtArquivo" id="txtArquivo" type="file" readonly="readonly">
	</fieldset>
	
	<fieldset id='insercao_codigo' class="cform clear">
		<label for='cbling'>Linguagem*</label> 
		<select id='cbling' name='cbling' required>
			<option value="0"></option>
			<?php foreach ($linguagens as $l) {?>
			<option title="<?php echo $l->title;?>" value="<?php echo $l->linguagem_id;?>"><?php echo $l->nome;?></option>
			<?php }?>
		</select>
	</fieldset>
			
	<fieldset class="botao">
	
		<button type="submit" name="btnNovaSubmissao" id="btnNovaSubmissao" value="<?php echo $dados['id'];?>" class="action">Submeter</button>
	</fieldset>
	<?php }?>
</form>