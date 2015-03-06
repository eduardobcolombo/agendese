<?php

if ($_POST['cadastrar'] == 'Cadastrar') {
	$objCliente->setnomeCliente($_POST["nome"]);
	$objCliente->setTelefoneCliente($_POST["telefone"]);
	$objCliente->setEmail($_POST["email"]);
	$objCliente->setLogin($_POST["login"]);
	$objCliente->setSenha($_POST["senha"]);
	$objCliente->setTipo("cliente");
	$objCliente->setDB();
}
?>

<div class="row">
          

<div id="boxCadastre-se" class="col-md-4 hidden-sm hidden-xs">


	<h1>Cliente</h1>

	<p>Faça seu cadastro</p>


		<form name="frmCadastraVeiculo" method="POST" action="">

			<table class="table">
				<tr>
					<td align=right>*Nome</td>
					<td><input type="text" name="nome" id="nome" value="" /></td>
				</tr>
				<tr>
					<td align=right>*Telefone</td>
					<td><input type="text" name="telefone" id="telefone" value="" /></td>
				</tr>
				<tr>
					<td align=right>E-mail <small>(opcional)</small></td>
					<td><input type="text" name="email" id="email" value="" /></td>
				</tr>
				<tr>
					<td align=right>*Login</td>
					<td><input type="text" name="login" id="login" value="" onblur="verificaUsuarioExiste()"/>
						<div id="msgVerificaUsuarioExiste"	name="msgVerificaUsuarioExiste"></div>
					</td>
				</tr>
				<tr>
					<td align=right>*Senha</td>
					<td><input type="password" name="senha" id="senha" value="" /></td>
				</tr>
				<tr>
					<td align=right>*Confirmar Senha</td>
					<td><input type="password" name="confirmaSenha" id="confirmaSenha" value="" /></td>
				</tr>
				<tr>
					<td colspan=2 align=center>
	<input type='checkbox' name='concordaTermos' id='concordaTermos' value='Sim' /> 
	* Concordo com os Termos de Serviço e a Política de Privacidade.
					</td>
				</tr>						
				<tr>

					<td colspan=2 align=center><input type="submit"  name="cadastrar" value="Cadastrar"/></td>
				</tr>
			</table>

		</form>
</div>	


<div id="boxImagem" class="col-md-8 col-sm-7 col-xs-10">
	
                			
                         
        
<!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
         <div class="carousel-inner">
        <div class="item active">
          <img src="images/esmalte.jpg" class="img-responsive" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Agende o seu serviço.</h1>
              <p></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="images/imagem2.jpg" class="img-responsive" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Temos o profissional ideal para você.</h1>
              <p></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="images/imagem1.jpg" class="img-responsive" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Pronto para atender sua necessidade.</h1>
              <p></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="images/imagem.jpg" class="img-responsive" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>A nossa missão é a sua satisfação.</h1>
              <p></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->
<br />


</div>
</div>	

<div class="clear">
</div>



