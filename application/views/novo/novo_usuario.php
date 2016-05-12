<h1>NOVO USUÁRIO</h1><br/>

<form name="novo_usuario" id="novo_usuario" action="<?php echo base_url()?>sistema/usuario" method="post">
	
	<fieldset id='nome' class="cform clear">
		<label for='txtNomeUsuario'>Nome Usuário*</label> 
		<input type="text" size="68" name="txtNomeUsuario" id="txtNomeUsuario" required autofocus>
	</fieldset>
	
	<fieldset id='login' class="cform clear">
		<label for='txtLogin'>Login*</label> 
		<input type="text" name="txtLogin" id="txtLogin" required>
	</fieldset>
	
	<fieldset id='senha' class="cform">
		<label for='txtSenha'>Senha*</label> 
		<input type="password" name="txtSenha" id="txtSenha" required>
	</fieldset>
	
	
	<fieldset id='email' class="cform clear">
		<label for='txtEmail'>E-mail*</label> 
		<input type="text" name="txtEmail" size="40" id="txtEmail" required>
	</fieldset>
	
	<fieldset id='doc' class="cform clear">
		<label for='txtDocumento'>Documento*</label> 
		<input type="text" name="txtDocumento" id="txtDocumento" required>
	</fieldset>	

	
	<fieldset id='data_nascimento' class="cform">
		<label for='txtDataNasc'>Data Nascimento*</label> 
		<input type="date" name="txtDataNasc" id="txtDataNasc" required>
	</fieldset>
	
	<fieldset id='universidade' class="cform clear">
		<label for='cbUniversidade'>Universidade*</label>
		<select name="cbUniversidade" id="cbUniversidade">
			<option value="0"></option>
			<?php foreach ($universidade as $u){?>
			<option value="<?php echo $u->id;?>"><?php echo $u->nome;?></option>
			<?php }?>
		</select> 
	</fieldset>	
	
	<fieldset id='universidade' class="cform">
		<label for='cbTipoUsu'>Tipo de Usuario*</label>
		<select name="cbTipoUsu" id="cbTipoUsu">
			<option value="0"></option>
			<?php foreach ($tipo_usuario as $t){?>
			<option value="<?php echo $t->id;?>"><?php echo $t->tipo_usuario;?></option>
			<?php }?>
		</select> 
	</fieldset>	
		
	<fieldset class="botao">
		<button type="submit" name="btnNovoUsuario" id="btnNovoUsuario" value="cadastro_usuario" class="action">Salvar</button>
	</fieldset>
</form>