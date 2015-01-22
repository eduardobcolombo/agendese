<?php

require ("includes/util.php");
session_start();


if ($_GET['sair'] == "true") {
  session_destroy();
}

?>

<!DOCTYPE html>
<html>
  <head>
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>agendese - <?php echo $_SESSION['nomeCliente']; ?></title>
    <script src="js/default.js"></script>

    

    <!-- Bootstrap -->
    <link href="bootstrap/dist/css/bootstrap.css" rel="stylesheet" media="screen">
  	<link href="bootstrap/dist/assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap-themex.css">

    <link href="css/estilo.css" rel="stylesheet" media="screen">

  </head>
  <body>

    <script src="jquery/jquery-latest.js"></script>
    <script src="bootstrap/dist/js/bootstrap.js"></script>


    <center><h1>Agende-se</h1></center>

    <nav class="navbar navbar-inverse" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://localhost/agendese">Home</a>

<?php
if ($_SESSION['logado']) { ?>          
          <a class="navbar-brand" href="http://localhost/agendese/?page=meusdados">Meus Dados</a>
          <a class="navbar-brand" href="http://localhost/agendese/?sair=true">Sair</a>

<?php } ?>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<?php
if (!$_SESSION['logado']) { ?>

          <ul class="nav navbar-nav">
            <li class="active"><a href="#"  data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Login <span class="sr-only">(current)</span></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Cadastre-se<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="http://localhost/agendese/?page=cadastre-se">Cliente</a></li>
                <li><a href="http://localhost/agendese/?page=cadastre-se">Prestador de Serviços</a></li>
              </ul>
            </li>
          </ul>
<?php  }  ?>

          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Pesquisa</button>
          </form>

<?php
if ($_SESSION['tipo'] == "Administrador") { ?>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Relatórios <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Geral</a></li>
                <li><a href="#">Aniversário</a></li>
                <li><a href="#">Telefones</a></li>
                <li><a href="#">Endereços</a></li>
              </ul>
            </li>
          </ul>
<?php  }  ?>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

<!-- TELA DE LOGIN -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Autenticação</h4>
      </div>
      <div class="modal-body">
        <form role="form">
          <div class="form-group">
            <label for="recipient-name" class="control-label">Usuário:</label>
            <input type="text" class="form-control" id="ds_usuario" name="ds_usuario">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Senha:</label>
            <input class="form-control" id="ds_senha" name="ds_senha">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Sair</button>
        <button type="button" class="btn btn-primary" onclick="verificaAcesso()">Entrar</button>
      </div>

      <div id="msgLogin"></div>
    </div>
  </div>
</div>
<!-- FINAL TELA DE LOGIN -->





<div class="panel panel-default">
  <div class="panel-body">

  </div>
<?php

if ($_GET['page'] != "") {
  require("pages/".$_GET['page'].".php");
} else {

  if ($_SESSION['logado']) {
    echo "Olá ".$_SESSION['nomeCliente'];
    echo "<br /> Seu acesso é de ".$_SESSION['tipo'].".";
  }
}






?>



   
</div>

<div class="panel-footer">Desenvolvido por academiadaweb.com.br</div>
  </body>
</html>


