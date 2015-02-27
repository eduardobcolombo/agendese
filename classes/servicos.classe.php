<?php
class Servicos
{
	function getServicos() 
	{
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



}





?>




	
