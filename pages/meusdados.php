<?php
if ($_POST['Alterar'] == 'Alterar') {
	$objCliente->setNomeCliente($_POST["nome"]);
	$objCliente->setTelefoneCliente($_POST["telefone"]);
	$objCliente->setEmail($_POST["email"]);
	$objCliente->setDB($_SESSION['id']);
}

if ($_GET['acao'] =='excluir' ) {
		$objCliente->excluirCliente($_GET['id']);

}

	$cliente = $objCliente->getClienteByLogin($_SESSION['login']);
	$cliente = $cliente->fetch(PDO::FETCH_OBJ);



?>


<div id="boxmeusdados">

	<h1>Meus Dados</h1>

<a href = 'http://localhost/agendese/?page=meusdados&acao=excluir&id=<?php echo $cliente->Id; ?>'
onClick="javascript:if (confirm('Tem certeza?')){ return true;} else {return false;} ">Excluir</td></a>
		
</div>

		<form name="meusdados" method="POST" action="">

			<table class="table">
				<tr>
					<td align=right>Nome</td>
					<td><input type="text" name="nome" id="nome" value="<?php echo $cliente->nomeCliente; ?>" /></td>
				</tr>
				<tr>
					<td align=right>Telefone</td>
					<td><input type="text" name="telefone" id="telefone" value="<?php echo $cliente->telefoneCliente; ?> " /></td>
				</tr>
				
				<tr>
					<td align=right>E-mail </td>
					<td><input type="text" name="email" id="email" value="<?php echo $cliente->email; ?>" /></td>
				</tr>
				<tr>
					<td colspan=2 align=center><input type="submit"  name="Alterar" value="Alterar"/></td>
				</tr>
			</table>
		</form>
</div>
