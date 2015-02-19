<?php

$pesquisa = $objFornecedor->getFornecedorPesquisa($_POST['filtro']);
	

	while($linha = $pesquisa->fetch(PDO::FETCH_OBJ)) {
		echo  $linha->nome;
		echo "   ";
		echo $linha->servicos;
		echo "   ";
		echo $linha->telefone;
		echo "   ";
		echo $linha->celular;
		echo "   ";
		echo $linha->site;
		echo "   ";
		echo $linha->logradouro;
		echo "   ";
		echo $linha->bairro;
		echo "   ";
		echo $linha->cidade;
		echo "   ";
		echo $linha->estado;
		echo "   "."<br />";

	} 

?>


