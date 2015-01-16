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
    <title>Projeto - <?php echo $_SESSION['nomeCliente']; ?></title>
 <script src="js/default.js"></script>

    

    <!-- Bootstrap -->
    <link href="bootstra
            </div>
            <button type="submit" class="btn btn-default">Pesquisa</button>
          </form>


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
            <input type="text" class="form-control" id="ds_usuario">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Senha:</label>
            <textarea class="form-control" id="ds_senha"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Sair</button>
        <button type="button" class="btn btn-primary" onclick="verificaAcesso('validaLogin.php','msgLogin')">Entrar</button>
      </div>

      <div id="msgLogin">123</div>
    </div>
  </div>
</div>
<!-- FINAL TELA DE LOGIN -->





<div class="panel panel-default">
  <div class="panel-body">

  </div>
<?php

if ($_GET['page'] == "cadastre-se") {
  require("pages/cadastre-se.php");
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


