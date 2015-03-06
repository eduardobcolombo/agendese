<?php


require ("includes/util.php");

	$login = $_GET['login'];

	$consulta = $objCliente->getClienteByLogin($login);
	$linha = $consulta->fetch(PDO::FETCH_OBJ);
				  
	$consultaF = $objFornecedor->getFornecedorByLogin($login);
	$linhaF = $consultaF->fetch(PDO::FETCH_OBJ);
	if ($linha != false){
		echo "Este CLIENTE usuario jpa existe. tente outro";
		 
	} else {

		if ($linhaF != false){
			echo "Este FORNECEDOR usuario jpa existe. tente outro";			
		}
	}


?>