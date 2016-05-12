<h1>NOVO CURSO</h1><br/>

<form name="novo_curso" id="novo_curso" action="<?php echo base_url()?>cadastro/curso" method="post">
	
	<fieldset id='nome' class="cform clear">
		<label for='txtNomeCurso'>Nome Curso*</label> 
		<input type="text" size="40" name="txtNomeCurso" id="txtNomeCurso" required autofocus>
	</fieldset>
	
	<fieldset id='desc' class="cform clear">
		<label for='txtDescCurso'>Descrição*</label> 
		<input type="text" size="68" name="txtDescCurso" id="txtDescCurso" required>
	</fieldset>

	<fieldset id='universidade' class="cform clear">
		<label for='txtRazaoSocial'>Universidade*</label>
		<select name="cbUniversidade" id="cbUniversidade">
			<option value="0"></option>
			<?php foreach ($universidade as $u){?>
			<option value="<?php echo $u->id;?>"><?php echo $u->nome;?></option>
			<?php }?>
		</select> 

	</fieldset>	
		
	<fieldset class="botao">
		<button type="submit" name="btnNovoCurso" id="btnNovoCurso" value="cadastro_curso" class="action">Salvar</button>
	</fieldset>
</form>