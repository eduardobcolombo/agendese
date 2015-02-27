<?php


require ("includes/util.php");

	$login = $_GET['ds_usuario'];
	$senha = $_GET['ds_senha'];

	$consulta = $objCliente->getClienteByLogin($login);
	$linha = $consulta->fetch(PDO::FETCH_OBJ);
				  
	$consultaF = $objFornecedor->getFornecedorByLogin($login);
	$linhaF = $consultaF->fetch(PDO::FETCH_OBJ);
	if ($linha != false){


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

			} else {
				echo "Usuário e/ou Senha Inválidos [CLIENTE] ";
				}

		 
	} else {

		if ($linhaF != false){
			if ($linhaF->senha == md5($senha)) {
		echo "
		<script>
		location.href='http://localhost/agendese/';
		</script>
				";

				// LOGANDO  FORNECEDOR
				session_start();

				$_SESSION['logado'] = true;
				$_SESSION['nomeCliente'] = $linhaF->nome;
				$_SESSION['login'] = $linhaF->login;
				$_SESSION['tipo'] = "Fornecedor";
				$_SESSION['id'] = $linhaF->Id;




			} else {
				echo "Usuário e/ou Senha Inválidos [  FORNECEDOR  ]";
			}
		}
	}


?>