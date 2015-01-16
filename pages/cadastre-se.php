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

	<p>Explicação do cadastro</p>


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
