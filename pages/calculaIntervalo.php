<?php

if ($_POST['Cadastrar'] == 'Cadastrar') {
	$objIntervalo->setId_fornecedor($_GET["id"]);
	$objIntervalo->setId_servico($_POST["DataInicial"]);
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
?>
        <div id="boxCadastraHorario">
       
				<h1> Cadastro de Horários </h1>


					
	 		<form name="frmCadastraHorario" method="POST" action="">
				
				<table border=8 cellspacin=10 cellpadding=10>
					<tr>
						<td> Fornecedor:</td>
						<td> <input type="text" name="Id_fornecedor" id="Id_fornecedor" value="<?PHP  echo $nomeFornecedor; ?>." /> </td>
					</tr>
					<tr>
						<td> Serviço:</td>
						<td> <input type="text" name="Id_servico" id="Id_servico" value="" /> </td>
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
						<td> Horário Inicial:</td>
						<td> <input type="time" name="HoraInicial"  id="HoraInicial" value="" /> </td>
					</tr>
					<tr>
						<td> Horário Final:</td>
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
