<?php
class Fornecedor
{
	private $nome;
	private $telefone;
	private $celular;
	private $email;
	private $site;
	private $cep;
	private $logradouro;
	private $numero;
	private $bairro;
	private $cidade;
	private $estado;
	private $latitude;
	private $longitude;
	private $cef_cnpj;
	private $ie;
	private $servicos;
	private $senha;
	private $confirmaSenha;
	private $manicure;
	private $cabelereiro;
	private $massoterapeuta;
	private $fisioterapeuta;

	/* OS SETS*/
	function setNome($nome) {$this ->nome = $nome;}
	function setTelefone($telefone) {$this ->telefone = $telefone;}
	function setCelular($celular) {$this ->celular = $celular;}	
	function setEmail($email) {$this ->email = $email;}	
	function setSite($site) {$this ->site = $site;}
	function setCep($cep) {$this ->cep = $cep;}	
	function setLogradouro($logradouro) {$this ->logradouro = $logradouro;}
	function setNumero($nｺ) {$this ->nｺ = $nｺ;}
	function setBairro($bairro) {$this ->bairro = $bairro;}
	function setCidade($cidade) {$this ->cidade = $cidade;}
	function setEstado($estado) {$this ->estado = $estado;}
	function setLatitude($latitude) {$this ->latitude = $latitude;}
	function setLongitude($longitude) {$this ->longitude = $longitude;}
	function setCpf_cnpj($cpf_cnpj) {$this ->cpf_cnpj = $cpf_cnpj;}
	function setIe($ie) {$this ->ie = $ie;}
	function setServicos($servicos) {$this ->servicos = $servicos;}
	function setLogin($senha){$this ->senha = md5($senha);}
	function setSenha($comfirmaSenha){$this ->comfirmaSenha = md5($comfirmaSenha);}
	function setManicure($setManicure){$this ->manicure = $manicure;}
	function setCabelereiro($cabelereiro){$this ->cabelereiro = $cabelereiro;}
	function setMassoterapeutia($massoterapeuta){$this ->massoterapeuta = $massoterapeuta;}
	function setFisioterapeuta($fisioterapeuta){$this ->fisioterapeuta = $fisioterapeuta;}

	/* OS GETS*/
	function getNome($nome) {return $this ->nome;}
	function getTelefone($telefone) {return $this ->telefone;}
	function getCelular($celular) {return $this ->celular;}
	function getEmail($email) {return $this ->email;}
	function getSite($site) {return $this ->site;}
	function getCep($cep) {return $this ->cep;}
	function getLogradouro($logradouro) {return $this ->logradouro;}
	function getNumero($nｺ) {return $this ->nｺ;}
	function getBairro($bairro) {return $this ->bairro;}
	function getCidade($cidade) {return $this ->cidade;}
	function getEstado($estado) {return $this ->estado;}
	function getLatitude($latitude) {return $this ->latitude;}
	function getLongitude($longitude) {return $this ->longitude;}
	function getCpf_cnpj($cpf_cnpj) {return $this ->cpf_cnpj;}
	function getIe($ie) {return $this ->ie;}
	function getServicos($servicos) {return $this ->servicos;}
	function getEmail($email){return $this ->email;}
	function getLogin($senha]){return $this ->senha;}
	function getSenha($confirmaSenha){return $this ->confirmaSenha;}
	function getManicure($manicure){return $this ->manicure;}
	function getCabelereiro($cabelereiro){return $this ->cabelereiro;}
	function getMassoterapeuta($massoterapeuta){return $this ->massoterapeuta;}
	function getFisioterapeuta($fisioterapeuta){return $this ->fisioterapeuta;}
	
 // FUNﾇ�ﾃグ INSERIR NO BANCO DE DADOS  

	function setDB($id_fornecedor = null) {
			GLOBAL $db;






	try
		{
		    if ($id_fornecedor == null) {
	 		 			  $res = $db->exec("INSERT INTO fornecedor (nome, telefone, celular, email, site, cep, logradouro, numero, bairro, cidade, estado, latitude, longitude, cpf_cnpj, ie, senha, comfirmaSenha, manicure, cabelereiro, massoterapeuta, fisioterapeuta)
		                                VALUES    ('".$this->nomeCliente."','".$this->telefoneCliente."','".$this->email."','".$this->senha."', '".$this->comfirmaSenha."','");
		// SE HOUVER O OBJETO DE CONEXﾃグ COM O BANCO
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
		                                  manicure = '".$this->manicure"',
		                                  cabelereiro = '"$this->cabelereiro"',
		                                  massoterapeuta = '"$this->massoterapeuta"',
		                                  fisioterapeuta = '"$this->fisioterapeuta"',
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


		function getfornecedor() 
	{
			GLOBAL $db;
				try
		{
		    
		  $res = $db->query("SELECT Id,nome, telefone, celular, email, site, cep, logradouro, numero, bairro, cidade, estado, latitude, longitude, cpf_cnpj, ie, senha, confirmaSenha, cabelereiro, manicure, massoterapeuta, fisioterapeuta FROM fornecedor");
		  return $res;

		   // ENCERRA O OBJETO DE CONEXﾃグ COM O BANCO
		// SE HOUVER O OBJETO DE CONEXﾃグ COM O BANCO
		} catch (PDOException $e) {
		  //IMPRIME O ERRO
		  print "Erro!: " .$e->getMessage() . "<br />";
		  // MORRE
		  die();
			}
	}//fecha metodo

	