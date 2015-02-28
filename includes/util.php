<?php
ini_set("display_errors", 0);


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

include("classes/fornecedor.classe.php");
	$objFornecedor = new Fornecedor();

include("classes/contato.classe.php");
  $objContato = new Contato();

 include("classes/servicos.classe.php");
  $objServicos = new Servicos();

  include("classes/Intervalo.classe.php");
  $objIntervalo = new Intervalo();
   

?>
