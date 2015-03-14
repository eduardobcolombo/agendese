<?php

class agendamentoCliente

{

	public $Id_Fornecedor;
	public $Id_Serviço;
	public $DataAgendamento;
	public $HoraDeAgendamento;

	function setId_fornecedor($Id_fornecedor) 
	{
		$this ->Id_fornecedor = $Id_fornecedor;
		}

	function setId_Servico($Id_Serviço) 
	{
		$this ->Id_Serviço = $Id_Serviço;
		}

	function setDataAgendamento($DataAgendamento) 
	{
		$this ->DataAgendamento = $DataAgendamento;
		}

	function setHoraDeAgendamento($HoraDeAgendamento) 
	{
		$this ->HoraDeAgendamento = $HoraDeAgendamento;
		}

	function getId_fornecedor() 
	{
		return $this ->Id_fornecedor;
			}
			
	function getId_Servico() 
	{
		return $this ->Id_Servico;
			}	

	function getDataAgendamento() 
	{
		return $this ->DataAgendamento;
			}

	function getHoraDeAgendamento() 
	{
		return $this ->HoraDeAgendamento;
			}


	function setDB() {
			GLOBAL $db;

			try
		{

		  	$res = $db->exec("INSERT INTO agendamentocliente (Id_fornecedor,Id_servico,DataAgendamento,HoraDeAgendamento)
                    VALUES    ('".$this->Id_fornecedor."','".$this->Id_servico."','".$this->DataAgendamento."','".$this->HoraDeAgendamento."')");

		echo "Agendamento Efetuado com Sucesso";

	} catch (PDOException $e) {
	  //IMPRIME O ERRO
	  print "Erro!: " .$e->getMessage() . "<br />";
	  // MORRE
	  die();
	}

	}

}







?>