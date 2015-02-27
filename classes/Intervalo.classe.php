<?php
class Intervalo
{
	public $DataInicial;
	public $DataFinal;
	public $HoraInicial;
	public $HoraFinal;
	public $Intervalo;
	public $Id_fornecedor;
	public $Id_servico;

	function setId_fornecedor($Id_fornecedor) 
	{
		$this ->Id_fornecedor = $Id_fornecedor;
		}

	function setId_servico($Id_servico) 
	{
		$this ->Id_servico = $Id_servico;
		}
	function setDataInicial($dataInicial) 
	{
		$this ->DataInicial = $dataInicial;
		}
	function setDataFinal($dataFinal) 
	{
		$this ->DataFinal = $dataFinal;
		}
	function setHoraInicial($HoraInicial) 
	{
		$this ->HoraInicial = $HoraInicial;
		}

	function setHoraFinal($HoraFinal) 
	{
		$this ->HoraFinal = $HoraFinal;
			}
	function setIntervalo($Intervalo) 
	{
		$this ->Intervalo = $Intervalo;
			}
	
	function getId_fornecedor() 
	{
		return $this ->Id_fornecedor;
			}
	function getId_servico() 
	{
		return $this ->Id_servico;
			}
	function getDataInicial() 
	{
		return $this ->DataInicial;
			}		
	function getDataFinal() 
	{
		return $this ->DataFinal;
			}
	function getHoraInicial() 
	{
		return $this ->HoraInicial;
			}
	function getHoraFinal() 
	{
		return $this ->HoraFinal;
			}
	function getIntervalo() 
	{
		return $this ->Intervalo;
			}
	 
/*		{
			GLOBAL $db;
				try
		{
		    
		  $res = $db->query("SELECT Id, servico FROM servico");
		  return $res;

		   // ENCERRA O OBJETO DE CONEXÃO COM O BANCO
		// SE HOUVER O OBJETO DE CONEXÃO COM O BANCO
		} catch (PDOException $e) {
		  //IMPRIME O ERRO
		  print "Erro!: " .$e->getMessage() . "<br />";
		  // MORRE
		  die();
			}
		}//fecha metodo
*/		

 // FUNÇÃO INSERIR NO BANCO DE DADOS  

	function setDB() {
			GLOBAL $db;

			try
		{

		  	$res = $db->exec("INSERT INTO agendahorario (Id_fornecedor,Id_servico,DataInicial, DataFinal, HoraInicial, HoraFinal, Intervalo)
                    VALUES    ('".$this->Id_fornecedor."','".$this->Id_servico."','".$this->DataInicial."','".$this->DataFinal."','".$this->HoraInicial."','".$this->HoraFinal."','".$this->Intervalo."')");

		echo "Cadastro Efetuado com Sucesso";

	} catch (PDOException $e) {
	  //IMPRIME O ERRO
	  print "Erro!: " .$e->getMessage() . "<br />";
	  // MORRE
	  die();
	}
		}
		//function gravaNoBanco() {}
/*

		function getIntervalo() 
	{
			GLOBAL $db;
				try
		{
		    
		  $res = $db->query("SELECT Id,nomeCliente, telefoneCliente, email, login, senha, tipo FROM cliente");
		  return $res;

		   // ENCERRA O OBJETO DE CONEXÃO COM O BANCO
		// SE HOUVER O OBJETO DE CONEXÃO COM O BANCO
		} catch (PDOException $e) {
		  //IMPRIME O ERRO
		  print "Erro!: " .$e->getMessage() . "<br />";
		  // MORRE
		  die();
			}
		}//fecha metodo

			function getClienteByLogin($login) 
	{
			GLOBAL $db;
				try
		{
		    
		  $res = $db->query("SELECT   Id,nomeCliente, telefoneCliente, email, login, senha, tipo FROM cliente
		  					WHERE login = '".$login."'");

		  return $res;

		// SE HOUVER O OBJETO DE CONEXÃO COM O BANCO
		} catch (PDOException $e) {
		  //IMPRIME O ERRO
		  print "Erro!: " .$e->getMessage() . "<br />";
		  // MORRE
		  die();
			}
		}//fecha metodo
	function excluirPessoa($id_pessoa) 
{
		GLOBAL $db;
			try
	{
	    
	  $res = $db->exec("DELETE FROM	     tb_pessoa
	  					WHERE id_pessoa = ".$id_pessoa."
	  					");
	  return $res;

	// SE HOUVER O OBJETO DE CONEXÃO COM O BANCO
	} catch (PDOException $e) {
	  //IMPRIME O ERRO
	  print "Erro!: " .$e->getMessage() . "<br />";
	  // MORRE
	  die();
		}
	}//fecha metodo




	// CRIADO POR Eduardo em 2015-01-29
	function getClientePesquisa($filtro) 
	{
			GLOBAL $db;
				try
		{
		    
		  $res = $db->query("SELECT Id, nomeCliente 
		  	 				   FROM cliente
		  	 				  WHERE nomeCliente LIKE '%".$filtro."%'

		  	 			   ORDER BY nomeCliente ASC

		  	 				   ");
		  return $res;

		   // ENCERRA O OBJETO DE CONEXÃO COM O BANCO
		// SE HOUVER O OBJETO DE CONEXÃO COM O BANCO
		} catch (PDOException $e) {
		  //IMPRIME O ERRO
		  print "Erro!: " .$e->getMessage() . "<br />";
		  // MORRE
		  die();
			}
		}//fecha metodo



*/

} // final da classe pessoa

