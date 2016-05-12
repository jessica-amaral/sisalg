<h1>NOVA UNIVERSIDADE</h1><br/>

<form name="nova_universidade" id="nova_universidade" action="<?php echo base_url()?>cadastro/universidade" method="post">
	
	<fieldset id='nome_universidade' class="cform clear">
		<label for='txtNomeUniversidade'>Nome Universidade*</label> 
		<input type="text" name="txtNomeUniversidade" size="40" id="txtNomeUniversidade" required autofocus>
	</fieldset>
	
	<fieldset id='cnpj' class="cform">
		<label for='txtCnpj'>CNPJ*</label> 
		<input type="text" name="txtCnpj" id="txtCnpj" required>
	</fieldset>
	
	<fieldset id='razaoSocial' class="cform clear">
		<label for='txtRazaoSocial'>Razão Social*</label> 
		<input type="text" name="txtRazaoSocial" size="68" id="txtRazaoSocial" required>
	</fieldset>	
	
	<fieldset id='endereco' class="cform clear">
		<label for='txtEndereco'>Endereço*</label> 
		<input type="text" name="txtEndereco" size="68" id="txtEndereco" required>
	</fieldset>
	
	<fieldset id='cep' class="cform clear">
		<label for='txtCep'>CEP*</label> 
		<input type="text" name="txtCep" id="txtCep" required>
	</fieldset>			
		
	<fieldset class="botao">
		<button type="submit" name="btnNovaUniversidade" id="btnNovaUniversidade" value="cadastro_universidade" class="action">Salvar</button>	
	</fieldset>
	
</form>