<?php
if ($_POST['cadastrar'] == 'Cadastrar') {
	$objIntervalo->setData($_POST["Data"]);
	$objIntervalo->setHoraInicial($_POST["HoraInicial"]);
	$objIntervalo->setHoraFinal($_POST["HoraFinal"]);
	$objIntervalo->setIntervalo($_POST["Intervalo"]);
	$objIntervalo->setDB();
}
	
	
?>
        
				<h1> Cadastro de Horários </h1>


					
	 		<form name="frmCadastraHorario" method="POST" action="">
				
				<table border=8 cellspacin=10 cellpadding=10>
					<tr>
						<td> Data:</td>
						<td> <input type="date" name="Data" id="Data" value="" /> </td>
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
						
						<td colspan=2 align=center><input type="submit" name="cadastrar" value="Cadastrar" />
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
