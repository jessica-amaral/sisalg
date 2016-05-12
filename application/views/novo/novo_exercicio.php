<h1>NOVO EXERCÍCIO</h1><br/>

<form name="novo_exercicio" id="novo_exercicio" action="<?php echo base_url()?>cadastro/exercicio" method="post">
	
	<fieldset id='titulo' class="cform clear">
		<label for='txtTituloExercicio'>Título Exercício*</label> 
		<input type="text" size="68" name="txtTituloExercicio" id="txtTituloExercicio" required autofocus>
	</fieldset>
	
	<fieldset id='intrucoes' class="cform clear">
		<label for='txtInstrucoes'>Instruções Exercício*</label>
		<textarea name="taInstrucoes" id="taInstrucoes" rows="7" cols="82"></textarea> 
	</fieldset>
	
	<fieldset id='dataInicio' class="cform clear">
		<label for='txtDataInicio'>Data Início*</label> 
		<input type="date" name="txtDataInicio" id="txtDataInicio" min="<?php echo date('Y-m-d');?>" required>
	</fieldset>
	
	<fieldset id='dataFim' class="cform">
		<label for='txtDataFim'>Data Fim*</label> 
		<input type="date" name="txtDataFim" id="txtDataFim" required>
	</fieldset>
	
	
	<fieldset id='dataFim' class="cform clear">
		<input type="checkbox" name="cheSubmissaoAposData" id="cheSubmissaoAposData"><label style="margin-left: 3px;">Permitir submissões após Data Limite?</label>
	</fieldset>
	
	<fieldset id='email' class="cform clear">
		<label for='cbDisciplina'>Disciplina*</label> 
		<select name="cbDisciplina" id="cbDisciplina">
			<option value="0"></option>
			<?php foreach ($disciplinas as $d){ ?>
			<option value="<?php echo $d->id; ?>"><?php echo $d->nome;?></option>
			<?php } ?>
		</select>
	</fieldset>
		
	<fieldset class="botao">
		<button type="submit" name="btnNovoExercicio" id="btnNovoExercicio" value="cadastro_exercicio" class="action">Salvar</button>
	</fieldset>
</form>