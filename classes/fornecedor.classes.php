<?php
class Fornecedor
{
	public $nome;
	public $telefone;
	public $celular;
	public $email;
	public $site;
	public $cep;
	public $logradouro;
	public $numero;
	public $bairro;
	public $cidade;
	public $estado;
	public $latitude;
	public $longitude;
	public $cef_cnpj;
	public $ie;
	public $servicos;
	public $login;
	public $senha;
	public $tipo;

	function setNome($nome) 
	{
		$this ->nome = $nome;
		}
	function setTelefone($telefone) 
	{
		$this ->telefone = $telefone;
		}

	function setCelular($celular) 
	{
		$this ->celular = $celular;
	
	function setEmail($email) 
	{
		$this ->email = $email;
			}	
	function setSite($site) 
	{
		$this ->site = $site;
			}
	function setCep($cep) 
	{
		$this ->cep = $cep;
			}	
	function setLogradouro($logradouro) 
	{
		$this ->logradouro = $logradouro;
			}
	function setNumero($nº) 
	{
		$this ->nº = $nº;
			}
	function setBairro($bairro) 
	{
		$this ->bairro = $bairro;
			}
	function setCidade($cidade) 
	{
		$this ->cidade = $cidade;
			}
	function setEstado($estado) 
	{
		$this ->estado = $estado;
			}
	function setLatitude($latitude) 
	{
		$this ->latitude = $latitude;
			}
	function setLongitude($longitude) 
	{
		$this ->longitude = $longitude;
			}
	function setCpf_cnpj($cpf_cnpj) 
	{
		$this ->cpf_cnpj = $cpf_cnpj;
			}
	function setIe($ie) 
	{
		$this ->ie = $ie;
			}
	function setServicos($servicos) 
	{
		$this ->servicos = $servicos;
			}

	function getNome($nome) 
	{
		return $this ->nome;
		}
	function getTelefone($telefone) 
	{
		return $this ->telefone;
		}

	function getCelular($celular) 
	{
		return $this ->celular;
	
	function getEmail($email) 
	{
		return $this ->email;
			}	
	function getSite($site) 
	{
		return $this ->site;
			}
	function getCep($cep) 
	{
		return $this ->cep;
			}	
	function getLogradouro($logradouro) 
	{
		return $this ->logradouro;
			}
	function getNumero($nº) 
	{
		return $this ->nº;
			}
	function getBairro($bairro) 
	{
		return $this ->bairro;
			}
	function getCidade($cidade) 
	{
		return $this ->cidade;
			}
	function getEstado($estado) 
	{
		return $this ->estado;
			}
	function getLatitude($latitude) 
	{
		return $this ->latitude;
			}
	function getLongitude($longitude) 
	{
		return $this ->longitude;
			}
	function getCpf_cnpj($cpf_cnpj) 
	{
		return $this ->cpf_cnpj;
			}
	function getIe($ie) 
	{
		return $this ->ie;
			}
	function getServicos($servicos) 
	{
		return $this ->servicos;
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






