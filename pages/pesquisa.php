<div id="boxPesquisaFornecedor">
<?php

$pesquisa = $objFornecedor->getFornecedorPesquisa($_POST['filtro']);
	

	while($linha = $pesquisa->fetch(PDO::FETCH_OBJ)) {
		echo  $linha->nome;
		echo " - ";
//		echo $linha->servicos;
		$pesquisaServico = $objFornecedor->getServicosByFornecedor($linha->Id);
		while($linhaServico = $pesquisaServico->fetch(PDO::FETCH_OBJ)){
			echo $linhaServico->descricao_servico ." - ";
		}
		echo " - ";
		echo "<a href = 'http://localhost/agendese/?page=calculaIntervalo&id=".$linha->Id."'>clique </a>";
/*		
$pesquisa = $objFornecedor->getFornecedorPesquisa($_POST['filtro']);
	
		echo "<table>";

	while($linha = $pesquisa->fetch(PDO::FETCH_OBJ)) {
		echo "<tr>";
		echo "<td style='width:100px'><div id='logotipos'>
				<img src='images/";

		if ($linha->logotipo == ""){
			echo "esmalte.jpg";
		}else{
			echo $linha->logotipo;
		}

		echo "' width=100 alt='especial' /> 
</div></td>
";
		echo "<td align=left>" .$linha->nome. " (" .$linha->servicos. ")
		<br /> " .$linha->telefone. " - 

		<a href='mailto:" .$linha->email. "'>" .$linha->email. "</a>
		- <a href='http://" .$linha->site. "'>" .$linha->site. "</a> 

		- " .$linha->logradouro. " - " .$linha->bairro. " - " .$linha->cidade. " - " .$linha->estado. 

		"</td>";
		echo "</tr>";

*/ 
	} 
		echo "</table>";
?>



