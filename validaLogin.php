<?php

require ("includes/util.php");

	$login = $_GET['ds_usuario'];
	$senha = $_GET['ds_senha'];

	$consulta = $objCliente->getClienteByLogin($login);


	$linha = $consulta->fetch(PDO::FETCH_OBJ);
	if($linha->senha == md5($senha)) {
		echo "
<script>
location.href='http://localhost/projeto/';
</script>
		";


		// LOGANDO USUÁRIO
		session_start();

		$_SESSION['logado'] = true;
		$_SESSION['nomeCliente'] = $linha->nomeCliente;
		$_SESSION['tipo'] = $linha->tipo;





	} else {
		echo "Usuário e/ou Senha Inválidos";
	}


?>







