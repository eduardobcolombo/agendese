<?php
var_dump($_POST);
$pesquisa = $objCliente->getClientePesquisa($_POST['filtro']);

	while($linha = $pesquisa->fetch(PDO::FETCH_OBJ)) {
		echo $linha->nomeCliente;
		echo "<br />";
	}



?>

