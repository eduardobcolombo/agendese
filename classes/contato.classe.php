<?php
class Contato 
{

	private $nome;
	private $email;
	private $telefone;
	private $mensagem;


	function setNome($nome) {$this ->nome = $nome;}
	function setEmail($email) {$this ->email = $email;}
	function setTelefone($telefone) {$this ->telefone = $telefone;}
	function setMensagem($message) {$this ->message = $message;}


	function getNome($nome) {return $this ->nome;}
	function getEmail($email) {return $this ->email;}
	function getTelefone($telefone) {return $this ->telefone;}
	function getMensagem($mensagem) {return $this ->mensagem;}



	function setSendEmail()	{
	$message = $nome.$email.$telefone.$mensagem;

	// In case any of our lines are larger than 70 characters, we should use wordwrap()
	$message = wordwrap($message, 70, "\r\n");

	// Send
	mail('brunomewius@gmail.com', 'Os contatos', $message);


	}
}
?>