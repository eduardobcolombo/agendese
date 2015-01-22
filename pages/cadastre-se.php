<?php

if ($_POST['cadastrar'] == 'Cadastrar') {
	$objCliente->setnomeCliente($_POST["nome"]);
	$objCliente->setTelefoneCliente($_POST["telefone"]);
	$objCliente->setEmail($_POST["email"]);
	$objCliente->setLogin($_POST["login"]);
	$objCliente->setSenha($_POST["senha"]);
	$objCliente->setTipo("cliente");
	$objCliente->setDB();
}
?>



<div id="boxCadastre-se">


	<h1>Cliente</h1>

	<p>Faça seu cadastro</p>


		<form name="frmCadastraVeiculo" method="POST" action="">

			<table class="table">
				<tr>
					<td align=right>*Nome</td>
					<td><input type="text" name="nome" id="nome" value="" /></td>
				</tr>
				<tr>
					<td align=right>*Telefone</td>
					<td><input type="text" name="telefone" id="telefone" value="" /></td>
				</tr>
				<tr>
					<td align=right>E-mail <small>(opcional)</small></td>
					<td><input type="text" name="email" id="email" value="" /></td>
				</tr>
				<tr>
					<td align=right>*Login</td>
					<td><input type="text" name="login" id="login" value="" /></td>
				</tr>
				<tr>
					<td align=right>*Senha</td>
					<td><input type="password" name="senha" id="senha" value="" /></td>
				</tr>
				<tr>
					<td align=right>*Confirmar Senha</td>
					<td><input type="password" name="confirmaSenha" id="confirmaSenha" value="" /></td>
				</tr>
				<tr>
					<td colspan=2 align=center>
	<input type='checkbox' name='concordaTermos' id='concordaTermos' value='Sim' /> 
	* Concordo com os Termos de Serviço e a Política de Privacidade.
					</td>
				</tr>						
				<tr>

					<td colspan=2 align=center><input type="submit"  name="cadastrar" value="Cadastrar"/></td>
				</tr>
			</table>

		</form>
</div>	


<div id="boxImagem">
	<img src="images/esmalte.jpg" />


</div>	

<div class="clear">
</div>

<div id="boxCadastre-se">


	<h1>Cliente</h1>

	<p>Faça seu cadastro</p>


		<form name="frmCadastraVeiculo" method="POST" action="">

			<table class="table">
				<tr>
					<td align=right>*Nome</td>
					<td><input type="text" name="nome" id="nome" value="" /></td>
				</tr>
				<tr>
					<td align=right>*Telefone</td>
					<td><input type="text" name="telefone" id="telefone" value="" /></td>
				</tr>
				<tr>
					<td align=right>*tipoFone</td>
					<td><input type="text" name="tipofone" id="tipofone" value="" /></td>
				</tr>
				<tr>
					<td align=right>E-mail <small>(opcional)</small></td>
					<td><input type="text" name="email" id="email" value="" /></td>
				</tr>
				<tr>
					<td align=right>*Site</td>
					<td><input type="text" name="Site" id="Site" value="" /></td>
				</tr>
				<tr>
					<td align=right>*Logradouro</td>
					<td><input type="text" name="Logradouro" id="Logradouro" value="" /></td>
				</tr>
				<tr>
					<td align=right>*Numero</td>
					<td><input type="text" name="Numero" id="Numero" value="" /></td>
				</tr>
				<tr>
					<td align=right>*Complemento</td>
					<td><input type="text" name="Complemento" id="Complemento" value="" /></td>
				</tr>
				<tr>
					<td align=right>*Bairro</td>
					<td><input type="text" name="Bairro" id="Bairro" value="" /></td>
				</tr>
				<tr>
					<td align=right>*Cidade</td>
					<td><input type="text" name="Cidade" id="Cidade" value="" /></td>
				</tr>
				<tr>
					<td align=right>*Estado</td>
					<td><input type="text" name="Estado" id="Estado" value="" /></td>
				</tr>
				<tr>
					<td align=right>*Latitude</td>
					<td><input type="text" name="Latitude" id="Latitude" value="" /></td>
				</tr>
				<tr>
					<td align=right>*Longitude</td>
					<td><input type="text" name="Longitude" id="Longitude" value="" /></td>
				</tr>
				<tr>
					<td align=right>*CPF/CNPJ</td>
					<td><input type="text" name="cpfcnpj" id="cpfcnpj" value="" /></td>
				</tr>
				<tr>
					<td align=right>*RG/IE</td>
					<td><input type="text" name="rgie" id="rgie" value="" /></td>
				</tr>
				<tr>
					<td align=right>*CodigoSegurança</td>
					<td><input type="text" name="codigoseguranca" id="codigoseguranca" value="" /></td>
				</tr>
				<tr>
					<td align=right>*CodigoSegurançaBox</td>
					<td><input type="text" name="codigosegurancabox" id="codigosegurancabox" value="" /></td>
				</tr>
				<tr>
					<td colspan=2 align=left>
	<input type='checkbox' name='manicure' id='manicure' value="" /> 
	Manicure
				</td>
				<tr>
					<td colspan=2 align=left>
	<input type='checkbox' name='cabelereiro' id='cabelereiro' value="" /> 
	Cabelereiro
				</td>
				<tr>
					<td colspan=2 align=left>
	<input type='checkbox' name='massoterapeuta' id='massoterapeuta' value="" /> 
	Massoterapeuta
				</td>
				<tr>
					<td colspan=2 align=left>
	<input type='checkbox' name='fisioterapeuta' id='fisioterapeuta' value="" /> 
	Fisioterapeuta
				</td>
				<tr>
					<td align=right>*Senha</td>
					<td><input type="password" name="senha" id="senha" value="" /></td>
				</tr>
				<tr>
					<td align=right>*Confirmar Senha</td>
					<td><input type="password" name="confirmaSenha" id="confirmaSenha" value="" /></td>
				</tr>
				<tr>
					<td colspan=2 align=center>
	<input type='checkbox' name='concordaTermos' id='concordaTermos' value='Sim' /> 
	* Concordo com os Termos de Serviço e a Política de Privacidade.
					</td>
				</tr>						
				<tr>

					<td colspan=2 align=center><input type="submit"  name="cadastrar" value="Cadastrar"/></td>
				</tr>
			</table>

		</form>
</div>	


<div id="boxImagem">
	<img src="images/esmalte.jpg" />


</div>	

<div class="clear">
</div>
