<?php

if ($_POST['cadastrar'] == 'Cadastrar') 
  {
    $objContato->setNome($_POST["nome"]);
    $objContato->setEmail($_POST["email"]);
    $objContato->setTelfone($_POST["telefone"]);
    $objContato->setMensagem($_POST["mensagem"]);
    $objContato->sendEmail();
  }

?>
<div class="row">

<div id="boxContato" class="col-md-4 hidden-sm hidden-xs">

<h1>Contato</h1>

	<form name="frmCadastraVeiculo" method="POST" action="">

		<table class="table">
			<tr>
				<td align=right>*Nome</td>					
				<td><input type="text" name="nome" id="nome" value="" /></td>
			</tr>
			<tr>
				<td align=right>*Email</td>
				<td><input type="text" name="email" id="email" value="" /></td>
			</tr>
			<tr>
					<td align=right>*Telefone</td>
					<td><input type="text" name="telefone" id="telefone" value="" /></td>
			</tr>
			<tr>
				<td align=right>*Mensagem</td>
				<td><input type="text" name="mensagem" id="mensagem" value="" /></td>
			</tr>		
			<tr>

				<td colspan=2 align=center><input type="submit"  name="enviar" value="Enviar"/></td>
			</tr>
	</table>


	</form>

</div>


<div id="boxImagem1" class="col-md-8 col-sm-7 col-xs-10">

	<!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
         <div class="carousel-inner">
        <div class="item active">
          <img src="images/baner contato.jpg" class="img-responsive" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Envie sua mensagem...</h1>
              <p></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="images/baner contato1.jpg" class="img-responsive" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Em breve retornaremos para voc�.</h1>
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


<!--	<img src="images/esmalte.jpg" />  -->


</div>	

<div class="clear">
</div> 	