<h1>NOVA DISCIPLINA</h1><br/>

<form name="nova_disciplina" id="nova_disciplina" action="<?php echo base_url()?>cadastro/disciplina" method="post">
	
	<fieldset id='nome_universidade' class="cform clear">
		<label for='txtNomeUniversidade'>Nome Disciplina*</label> 
		<input type="text" name="txtNomeDisciplina" size="40" id="txtNomeDisciplina" required autofocus>
	</fieldset>
	
	<fieldset id='razaoSocial' class="cform">
		<label for='txtSemestre'>Semestre*</label> 
		<input type="number" name="txtSemestre" min="1" max="8" id="txtSemestre" required>
	</fieldset>	
	
	<fieldset id='cnpj' class="cform clear">
		<label for='txtDescDisciplina'>Descrição*</label> 
		<input type="text" name="txtDescDisciplina" size="68" id="txtDescDisciplina" required>
	</fieldset>
	


	<fieldset id='endereco' class="cform clear">
		<label for='cbCurso'>Curso*</label> 
		<select name="cbCurso" id="cbCurso">
			<option></option>
			<?php foreach ($curso as $c){?>
				<option value="<?php echo $c->id; ?>" title="<?php echo $c->descricao; ?>"><?php echo $c->nome; ?></option>
			<?php }?>
		</select>
	</fieldset>
	
	<fieldset id='cep' class="cform clear">
		<label for='cbProfessor'>Professor*</label> 
		<select name="cbProfessor" id="cbProfessor">
			<option></option>
			<?php foreach ($professor as $p){ ?>
				<option value="<?php echo $p->id; ?>"><?php echo $p->nome; ?></option>
			<?php } ?>
		</select>
	</fieldset>			
	
	<fieldset class="botao">	
		<button type="submit" style="marigin-left:10 px;" name="btnNovaDisciplina" id="btnNovaDisciplina" value="cadastro_disciplina" class="action">Salvar</button>
	</fieldset>
</form>