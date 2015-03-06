<?php


require ("includes/util.php");

	$login = $_GET['login'];

	$consulta = $objCliente->getClienteByLogin($login);
	$linha = $consulta->fetch(PDO::FETCH_OBJ);
				  
	$consultaF = $objFornecedor->getFornecedorByLogin($login);
	$linhaF = $consultaF->fetch(PDO::FETCH_OBJ);
	if ($linha != false){
		echo "Este LOGIN de cliente já existe. Tente outro.";
		echo "
<script type='text/javascript'>

	document.getElementById('login').focus();

</script>
		";
		 
	} else {

		if ($linhaF != false){
			echo "Este LOGIN de fornecedor já existe. Tente outro.";			
			echo "
<script type='text/javascript'>

	document.getElementById('login').focus();

</script>
		";
		 
		}
	}


?>