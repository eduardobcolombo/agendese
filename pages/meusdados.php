<?php
if ($_POST['Alterar'] == 'Alterar') {
	$objCliente->setnomeCliente($_POST["nome"]);
	$objCliente->setTelefoneCliente($_POST["telefone"]);
	$objCliente->setEmail($_POST["email"]);
	$objCliente->setDB()
}


	$cliente =$objCliente->getClienteByLogin($_SESSION['login']);




?>



<div id="boxmeusdados">


	<h1>Meus Dados</h1>



		<form name="meusdados" method="POST" action="">

			<table class="table">
				<tr>
					<td align=right>Nome</td>
					<td><input type="text" name="nome" id="nome" value="<?php echo $cliente->nomeCliente; ?>" /></td>
				</tr>
				<tr>
					<td align=right>Telefone</td>
					<td><input type="text" name="telefone" id="telefone" value="<?php echo $cliente->TelefoneCliente; ?> " /></td>
				</tr>
				
				<tr>
					<td align=right>E-mail </td>
					<td><input type="text" name="email" id="email" value="<?php echo $cliente->Email; ?>" /></td>
				</tr>	
				<tr>

					<td colspan=2 align=center><input type="submit"  name="Alterar" value="Alterar"/></td>
				</tr>
			</table>
		</form>
</div>
