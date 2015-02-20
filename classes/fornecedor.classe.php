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
	public $cpf_cnpj;
	public $ie;
	public $servicos;
	public $senha;
	public $confirmaSenha;
	public $logotipo;
/*	private $manicure;
	private $cabelereiro;
	private $massoterapeuta;
	private $fisioterapeuta;
*/
	/* OS SETS*/
	function setNome($nome) {$this ->nome = $nome;}
	function setTelefone($telefone) {$this ->telefone = $telefone;}
	function setCelular($celular) {$this ->celular = $celular;}	
	function setEmail($email) {$this ->email = $email;}	
	function setSite($site) {$this ->site = $site;}
	function setCep($cep) {$this ->cep = $cep;}	
	function setLogradouro($logradouro) {$this ->logradouro = $logradouro;}
	function setNumero($numero) {$this ->numero = $numero;}
	function setBairro($bairro) {$this ->bairro = $bairro;}
	function setCidade($cidade) {$this ->cidade = $cidade;}
	function setEstado($estado) {$this ->estado = $estado;}
	function setLatitude($latitude) {$this ->latitude = $latitude;}
	function setLongitude($longitude) {$this ->longitude = $longitude;}
	function setCpf_cnpj($cpf_cnpj) {$this ->cpf_cnpj = $cpf_cnpj;}
	function setIe($ie) {$this ->ie = $ie;}
	function setServicos($servicos) {$this ->servicos = $servicos;}
	function setSenha($senha){$this ->senha = md5($senha);}
	function setConfirmaSenha($comfirmaSenha){$this ->comfirmaSenha = md5($comfirmaSenha);}
/*	function setManicure($setManicure){$this ->manicure = $manicure;}
	function setCabelereiro($cabelereiro){$this ->cabelereiro = $cabelereiro;}
	function setMassoterapeuta($massoterapeuta){$this ->massoterapeuta = $massoterapeuta;}
	function setFisioterapeuta($fisioterapeuta){$this ->fisioterapeuta = $fisioterapeuta;}

*/
	/* tratamento de imagem */

	function setLogotipo($logotipo){
		$this ->logotipo = $logotipo;
		
		 move_uploaded_file($this ->logotipo['tmp_name' ], "images/".$this ->logotipo['name' ]);

	}  
	/* OS GETS*/
	function getNome($nome) {return $this ->nome;}
	function getTelefone($telefone) {return $this ->telefone;}
	function getCelular($celular) {return $this ->celular;}
	function getEmail($email) {return $this ->email;}
	function getSite($site) {return $this ->site;}
	function getCep($cep) {return $this ->cep;}
	function getLogradouro($logradouro) {return $this ->logradouro;}
	function getNumero($numero) {return $this ->numero;}
	function getBairro($bairro) {return $this ->bairro;}
	function getCidade($cidade) {return $this ->cidade;}
	function getEstado($estado) {return $this ->estado;}
	function getLatitude($latitude) {return $this ->latitude;}
	function getLongitude($longitude) {return $this ->longitude;}
	function getCpf_cnpj($cpf_cnpj) {return $this ->cpf_cnpj;}
	function getIe($ie) {return $this ->ie;}
	function getServicos($servicos) {return $this ->servicos;}
	function getSenha($senha){return $this ->senha;}
	function getConfirmaSenha($confirmaSenha){return $this ->confirmaSenha;}
/*	function getManicure($manicure){return $this ->manicure;}
	function getCabelereiro($cabelereiro){return $this ->cabelereiro;}
	function getMassoterapeuta($massoterapeuta){return $this ->massoterapeuta;}
	function getFisioterapeuta($fisioterapeuta){return $this ->fisioterapeuta;}
*/	

	function getLogotipo($logotipo){
		return $this ->logotipo;


 // FUNǇÃO INSERIR NO BANCO DE DADOS  

	function setDB($id_fornecedor = null) {
			GLOBAL $db;

			try
		{


		    if ($id_fornecedor == null) {
	 		 			  $res = $db->exec("
INSERT INTO fornecedor 
(nome, 
 telefone, 
 celular, 
 email, 
 site, 
 cep, 
 logradouro, 
 numero, 
 bairro, 
 cidade, 
 estado, 
 latitude, 
 longitude, 
 cpf_cnpj, 
 ie, 
 servicos, 
 senha, 
 confirmaSenha,
 logotipo)
VALUES    
('".$this->nome."',
 '".$this->telefone."',
 '".$this->email."',
 '".$this->celular."',
 '".$this->site."',
 '".$this->cep."',
 '".$this->logradouro."',
 '".$this->numero."',
 '".$this->bairro."',
 '".$this->cidade."',
 '".$this->estado."',
 '".$this->latitude."',
 '".$this->longitude."',
 '".$this->cpf_cnpj."',
 '".$this->ie."',
 '".$this->servicos."',
 '".$this->senha."', 
 '".$this->confirmaSenha."',
 '".$this->logotipo['name']."')");


 		 			  
		// SE HOUVER O OBJETO DE CONEXÃO COM O BANCO
		} else {
			$res = $db->exec("UPDATE fornecedor  SET 
		                                  nome = '".$this->nome."',
		                                  telefone = '".$this->telefone."',
		                                  celular = '".$this->celular."',
		                                  email = '".$this->email."',
		                                  site = '".$this->site."',
		                                  cep = '".$this->cep."',
		                                  logradouro = '".$this->logradouro."',
		                                  numero = '".$this->numero."',
		                                  bairro = '".$this->bairro."',
		                                  cidade = '".$this->cidade."',
		                                  estado = '".$this->estado."',
		                                  latitude = '".$this->latitude."',
		                                  longitude = '".$this->longitude."',
		                                  cpf_cnpj = '".$this->cpf_cnpj."',
		                                  ie = '".$this->ie."',
		                                  senha= '".$this->senha."',
		                                  confirmaSenha = '".$this->confirmaSenha."',
		                                  logotipo = '".$this->logotipo."'
		                                  WHERE id = '".$id_fornecedor."' ");

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


		function getfornecedor() 
	{
			GLOBAL $db;
				try
		{
		    
		  $res = $db->query("SELECT Id,nome, telefone, celular, email, site, cep, logradouro, numero, bairro, cidade, estado, latitude, longitude, cpf_cnpj, ie, senha, confirmaSenha, cabelereiro, manicure, massoterapeuta, fisioterapeuta, logotipo FROM fornecedor");
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

function getFornecedorPesquisa($filtro)
	{
			GLOBAL $db;
				try
		{

		    
		  $res = $db->query("SELECT Id, nome, servicos, telefone, celular, site, logradouro, bairro, cidade, estado, email,logotipo
		  	 	  FROM fornecedor
		  	 	WHERE nome
		  	 	 LIKE '%".$filtro."%'
		  	 	 OR servicos
		  	 	LIKE '%".$filtro."%'
		  	 	OR bairro
		  	 	 LIKE '%".$filtro."%'
		  	 	OR cidade
		  	 	LIKE '%".$filtro."%'
		  	 	OR estado
		  	 	LIKE '%".$filtro."%'

		  	 	ORDER BY nome  ASC

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

}

}
?>
