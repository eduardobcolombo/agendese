<?php


	if ($_POST['Cadastrar'] == 'Cadastrar') {
	$objIntervalo->setId_fornecedor($_GET["id"]);
	$objIntervalo->setId_fornecedor($_GET["id"]);
	$objIntervalo->setDataInicial($_POST["DataInicial"]);
	$objIntervalo->setDataFinal($_POST["DataFinal"]);
	$objIntervalo->setHoraInicial($_POST["HoraInicial"]);
	$objIntervalo->setHoraFinal($_POST["HoraFinal"]);
	$objIntervalo->setIntervalo($_POST["Intervalo"]);
	$objIntervalo->setDB();
}
	$buscaFornecedor = $objFornecedor->getFornecedorById($_GET["id"]);

	$linha = $buscaFornecedor->fetch(PDO::FETCH_OBJ);
	$nomeFornecedor = $linha->nome;
	$Id_servico = $linha->Id_servico;
?>
        <div id="boxCadastraHorario">
       
				<h1> Cadastro de Hor�rios </h1>


					
	 		<form name="frmCadastraHorario" method="POST" action="">
				
				<table border=8 cellspacin=10 cellpadding=10>
					<tr>
						<td> Fornecedor:</td>
						<td> <input type="text" name="Id_fornecedor" id="Id_fornecedor" value="<?PHP  echo $nomeFornecedor; ?>" /> </td>
					</tr>
					<tr>
						<td> Servi�o:</td>
						<td> <input type="text" name="Id_fornecedor" id="Id_forncedor" value="<?PHP  echo $Id_servico; ?>" /> </td>
					</tr>
					<tr>
						<td> Data Inicial:</td>
						<td> <input type="date" name="DataInicial" id="DataInicial" value="" /> </td>
					</tr>
					<tr>
						<td> Data Final:</td>
						<td> <input type="date" name="DataFinal" id="DataFinal" value="" /> </td>
					</tr>
					<tr>
						<td> Hor�rio Inicial:</td>
						<td> <input type="time" name="HoraInicial"  id="HoraInicial" value="" /> </td>
					</tr>
					<tr>
						<td> Hor�rio Final:</td>
						<td> <input type="time" name="HoraFinal" id="HoraFinal" value="" /> </td>
					</tr>
					<tr>
						<td>Intervalo: </td>
						<td> <input type="numeric" name="Intervalo" id="Intervalo" value="" /> </td>
					</tr>
					
					<tr>
						
						<td colspan=2 align=center><input type="submit" name="Cadastrar" value="Cadastrar" />
					</tr>
				</table>	

			</form>

		</div>



	</body>			
<?php



/*
$HoraI
$HoraF
$TempInt

$QHora = $HoraF - $HoraI
$QMin = $QHora * 60
$INT = $QMin / $TempInt
*/
?>
