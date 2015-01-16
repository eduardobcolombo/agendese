<?php
class Cliente
{
	public $nomeCliente;
	public $telefoneCliente;
	public $email;
	public $login;
	public $senha;
	public $tipo;

	function setNomeCliente($nomeCliente) 
	{
		$this ->nomeCliente = $nomeCliente;
		}
	function setTelefoneCliente($telefoneCliente) 
	{
		$this ->telefoneCliente = $telefoneCliente;
		}

	function setEmail($email) 
	{
		$this ->email = $email;
			}
	function setLogin($login) 
	{
		$this ->login = $login;
			}
	function setSenha($senha) 
	{
		$this ->senha = md5($senha);
			}
	function setTipo($tipo) 
	{
		$this ->tipo = $tipo;
			}			
	function getNomeCliente() 
	{
		return $this ->nomeCliente;
	}
	function getTelefoneCliente() 
	{



		return $this ->telefoneCliente;
			}
	function getEmail() 
	{
		return $this ->email;
			}
	function getLogin() 
	{
		return $this ->login;
			}
	function getSenha() 
	{
		return $this ->senha;
			}			
	function getTipo() 
	{
		return $this ->tipo;
			}		

 // FUNÇÃO INSERIR NO BANCO DE DADOS  

	function setDB($id_cliente = null) {
			GLOBAL $db;

			try
		{
		    if ($id_cliente == null) {
	 		 			  $res = $db->exec("INSERT INTO cliente (nomeCliente, telefoneCliente, email, login, senha, tipo)
		                                VALUES    ('".$this->nomeCliente."','".$this->telefoneCliente."','".$this->email."','".$this->login."', '".$this->senha."','".$this->tipo."')");
		// SE HOUVER O OBJETO DE CONEXÃO COM O BANCO
		} else {
			$res = $db->exec("UPDATE cliente  SET 
		                                  nomeCliente = '".$this->nomeCliente."',
		                                  telefoneCliente = '".$this->telefoneCliente."',
		                                  email = '".$this->email."',
		                                  login = '".$this->login."',
		                                  senha = '".$this->senha."'
		                                  tipo = '".$this->tipo."'
		                                  WHERE id = '".$id_cliente."' ");

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


		function getCliente() 
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

} // final da classe pessoa

