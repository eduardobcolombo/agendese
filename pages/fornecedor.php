<?php

if ($_POST['cadastrar'] == 'Cadastrar') 
{
	$objFornecedor->setNome($_POST["nome"]);
	$objFornecedor->setTelefone($_POST["telefone"]);
	$objFornecedor->setCelular($_POST["celular"]);
	$objFornecedor->setEmail($_POST["email"]);
	$objFornecedor->setSite($_POST["site"]);
	$objFornecedor->setCep($_POST["cep"]);
	$objFornecedor->setLogradouro($_POST["logradouro"]);
	$objFornecedor->setNumero($_POST["numero"]);
	$objFornecedor->setBairro($_POST["bairro"]);
	$objFornecedor->setCidade($_POST["cidade"]);
	$objFornecedor->setEstado($_POST["estado"]);
	$objFornecedor->setLatitude($_POST["latitude"]);
	$objFornecedor->setLongitude($_POST["longitude"]);
	$objFornecedor->setCpf_cnpj($_POST["cpf_cnpj"]);
	$objFornecedor->setIe($_POST["ie"]);
	$objFornecedor->setServicos($_POST["servico"]);
	$objFornecedor->setSenha($_POST["senha"]);
	$objFornecedor->setConfirmaSenha($_POST["confirmaSenha"]);
/*	$objFornecedor->setManicure($_POST["manicure"]);
	$objFornecedor->setCabelereiro($_POST["cabelereiro"]);
	$objFornecedor->setMassoterapeuta($_POST["massoterapeuta"]);
	$objFornecedor->setFisioterapeuta($_POST["fisioterapeuta"]);
*/	$objFornecedor->setDB();
}

?>

	<div id="boxFornecedor">
	<h1>Prestador de Serviços</h1>

	<p>Explicação do cadastro</p>


		<form name="frmCadastraFornecedor" method="POST" action="">

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
					<td align=right>*Celular</td>
					<td><input type="text" name="celular" id="celular" value="" /></td>
				</tr>
				<tr>
					<td align=right>E-mail <small>(opcional)</small></td>
					<td><input type="text" name="email" id="email" value="" /></td>
				</tr>
				<tr>
					<td align=right>*Site</td>
					<td><input type="text" name="site" id="site" value="" /></td>
				</tr>
				<tr>
					<td align=right>*CEP</td>
					<td><input type="text" name="cep" id="cep" value="" /></td>
				</tr>
				<tr>
					<td align=right>*Logradouro</td>
					<td><input type="text" name="logradouro" id="logradouro" value="" /></td>
				</tr>
				<tr>
					<td align=right>*Numero</td>
					<td><input type="text" name="numero" id="numero" value="" /></td>
				</tr>
				<tr>
					<td align=right>*Bairro</td>
					<td><input type="text" name="bairro" id="bairro" value="" /></td>
				</tr>
				<tr>
					<td align=right>*Cidade</td>
					<td><input type="text" name="cidade" id="cidade" value="" /></td>
				</tr>
				<tr>
					<td align=right>*Estado</td>
					<td><input type="text" name="estado" id="estado" value="" /></td>
				</tr>
				<tr>
					<td align=right>*Latitude</td>
					<td><input type="text" name="latitude" id="latitude" value="" /></td>
				</tr>
				<tr>
					<td align=right>*Longitude</td>
					<td><input type="text" name="longitude" id="longitude" value="" /></td>
				</tr>
				<tr>
					<td align=right>*CPF/CNPJ</td>
					<td><input type="text" name="cpf_cnpj" id="cpf_cnpj" value="" /></td>
				</tr>
				<tr>
					<td align=right>*Ie</td>
					<td><input type="text" name="ie" id="ie" value="" /></td>
				</tr>
				<tr>
					<td align=right>*Serviços</td>
					<td><input type="text" name="servicos" id="servicos" value="" /></td>
				</tr>
				<td align=left> 
<input type='checkbox' name='servico[]' id='servico[]' value="1" /> Manicure <br />
<input type='checkbox' name='servico[]' id='servico[]' value="2" /> Cabelereiro <br />
<input type='checkbox' name='servico[]' id='servico[]' value="3" /> Massoterapeuta <br />
<input type='checkbox' name='servico[]' id='servico[]' value="4" /> Eletrecista <br />
<input type='checkbox' name='servico[]' id='servico[]' value="5" /> Encanador <br />
<input type='checkbox' name='servico[]' id='servico[]' value="6" /> Auxiliar de Limpeza <br />
<input type='checkbox' name='servico[]' id='servico[]' value="7" /> Jardineiro <br />
<input type='checkbox' name='servico[]' id='servico[]' value="8" /> Prof de Idiomas <br />
<input type='checkbox' name='servico[]' id='servico[]' value="9" /> Prof de Informática <br />
<input type='checkbox' name='servico[]' id='servico[]' value="10" /> Pedreiro <br />
<input type='checkbox' name='servico[]' id='servico[]' value="11" /> Eletrecista Predial <br />
<input type='checkbox' name='servico[]' id='servico[]' value="12" /> Peeling <br />
<input type='checkbox' name='servico[]' id='servico[]' value="13" /> Corretor de Imoveis <br />
<input type='checkbox' name='servico[]' id='servico[]' value="14" /> Fisioterapeuta <br />
<input type='checkbox' name='servico[]' id='servico[]' value="15" /> Tec. de Informática <br />
<input type='checkbox' name='servico[]' id='servico[]' value="16" /> Personal Trainer <br />
<input type='checkbox' name='servico[]' id='servico[]' value="17" /> Enfermeira <br />
					</td>
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


<div id="boxImagem1">
	<img src="images/trabalhadores.jpg" />


</div>	

<div class="clear">
</div>
