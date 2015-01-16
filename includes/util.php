<?php
ini_set("display_errors", false);


try
{
  // FUNÇÃO INSERIR NO BANCO DE DADOS     
  $db = new PDO('mysql:host=localhost;dbname=agenda', 'root','');

} catch (PDOException $e) {
  //IMPRIME O ERRO
  print "Erro!: " .$e->getMessage() . "<br />";
  // MORRE
  die();
}

include("classes/cliente.classe.php");
	$objCliente = new Cliente();
?>
