<?php

if ($_POST['Agendar'] == 'Agendar') {
	$objAgendamento->setId_fornecedor($_GET["id"]);
	$objAgendamento->setId_servico($_POST["Serviço"]);
	$objAgendamento->setDataAgendamento($_POST["DataAgendamento"]);
	$objAgendamento->setHoraDeAgendamento($_POST["HoraDeAgendamento"]);
	$objIntervalo->setDB();
}

	$buscaFornecedor = $objFornecedor->getFornecedorById($_GET["id"]);

	$linha = $buscaFornecedor->fetch(PDO::FETCH_OBJ);
	$nomeFornecedor = $linha->nome;
	
	
?>



        <div id="boxAgendamentoDeHorarios">
       
				<h1> Agendamento de Horários </h1>


					
	 		<form name="frmAgendamentoDeHorarios" method="POST" action="">
				
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
						<td> Data Agendamento:</td>
						<td> <input type="date" name="DataAgendametol" id="DataAgendamento" value="" /> </td>
					</tr>
					<tr>
						<td> Hora de Agendamento:</td>
						<td> <input type="date" name="HoraDeAgendamento" id="HoraDeAgendamento" value="" /> </td>
					</tr>
					
					
					<tr>
						<td colspan=2 align=center><input type="submit" name="Cadastrar" value="Cadastrar" />
					</tr>
				</table>	

			</form>

		</div>



	</body>			