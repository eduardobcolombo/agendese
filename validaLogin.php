<?php


require ("includes/util.php");

	$login = $_GET['ds_usuario'];
	$senha = $_GET['ds_senha'];

	$consulta = $objCliente->getClienteByLogin($login);
	$linha = $consulta->fetch(PDO::FETCH_OBJ);
				  
	$consultaF = $objFornecedor->getFornecedorByLogin($login);
	$linhaF = $consultaF->fetch(PDO::FETCH_OBJ);


	if($linha->senha == md5($senha)) {
		echo "
<script>
location.href='http://localhost/agendese/';
</script>
		";


		// LOGANDO USUÁRIO CLIENTE
		session_start();

		$_SESSION['logado'] = true;
		$_SESSION['nomeCliente'] = $linha->nomeCliente;
		$_SESSION['login'] = $linha->login;
		$_SESSION['tipo'] = $linha->tipo;
		$_SESSION['id'] = $linha->Id;


echo "TESTE SE CLIENTE";

	} elseif ($linhaF->senha == md5($senha)) {
echo "TESTE SE fORNECEDOR";
echo "
<script>
location.href='http://localhost/agendese/';
</script>
		";


		// LOGANDO  FORNECEDOR
		session_start();

		$_SESSION['logado'] = true;
		$_SESSION['nome'] = $linha->nome;
		$_SESSION['login'] = $linha->login;
		$_SESSION['id'] = $linha->Id;




	} else {
		echo "Usuário e/ou Senha Inválidos";
	}


?>







