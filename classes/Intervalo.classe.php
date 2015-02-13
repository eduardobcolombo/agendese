<?php
class Intervalo
{
	public $Data;
	public $HoraIncial;
	public $HoraFinal;
	public $Intervalo;

	function setData($Data) 
	{
		$this ->data = $data;
		}
	function setTelefoneCliente($HoraIncial) 
	{
		$this ->HoraIncial = $HoraIncial;
		}

	function setEmail($HoraFinal) 
	{
		$this ->HoraFinal = $HoraFinal;
			}
	function setLogin($Intervalo) 
	{
		$this ->Intervalo = $Intervalo;
			}
	
			}	


	function getData() 
	{
		return $this ->Data;
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
	 
		{
			GLOBAL $db;
/*				try
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

	function setDB($id_Intervalo = null) {
			GLOBAL $db;

			try
		{
		    if ($id_Intervalo == null) {
	 		 			  $res = $db->exec("INSERT INTO fornecedor_has_servico (Data, HoraIncial, HoraFinal, Intervalo)
		                                VALUES    ('".$this->Data."','".$this->HoraIncial."','".$this->HoraFinal."','".$this->Intervalo."')");
		// SE HOUVER O OBJETO DE CONEXÃO COM O BANCO
		} else {
			$res = $db->exec("UPDATE Intervalo  SET 
		                                  Data = '".$this->Data."',
		                                  HoraIncial = '".$this->HoraIncial."',
		                                  HoraFinal = '".$this->HoraFinal."',
		                                  Intervalo = '".$this->Intervalo."',
		                                  WHERE id = '".$id_Intervalo."' ");

	#######
		} 
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

