<?php
class Contato 
{

	private $nome;
	private $email;
	private $telefone;
	private $mensagem;

function setSendEmail()
$message = $nome.$email.$telefone.$mensagem;

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Send
mail('brunomewius@gmail.com', 'Os contatos', $message);



}
?>