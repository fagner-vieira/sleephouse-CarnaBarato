<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sleep House</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/css.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
  </head>
  <body>

		<header class="container-fluid bgHeader">
			<div class="container">
				<div class="row py-05">
					<div class="col-lg-6 hidden-sm hidden-xs">
						<img src="images/carnabarato.png" class="img-responsive center-block" alt="">
					</div>
					<div class="col-lg-6 hidden-sm hidden-xs">
						<img src="images/logo01.png" class="img-responsive center-block" alt="">
					</div>
					<div class="col-xs-12 hidden-lg hidden-md">
						<img src="images/logoMobile.png" class="img-responsive center-block" alt="">
					</div>
				</div>
			</div>
		</header>

		<section class="container-fluid bgSectioOne">
			<div class="container">
				<div class="row py-05">
					<div class="col-lg-6">
						<img src="images/promo.png" class="img-responsive center-block" alt="">
					</div>
					<div class="col-lg-6">
						<div class="row alignForm">
							<div class="col-lg-8 bgForm py-05">
								<div class="py-05"><p class="txtForm">garanta seu desconto</p></div>
								<div class="py-05">
									<form class="form-horizontal" name="form-gohotsale" id="form-gohotsale" method="POST" action="https://gohotsale.com.br/leads" novalidate>
										<input type="hidden" name="hotsite" id="hotsite" value="casa-toda-favorita-hotpage">
										<input type="hidden" name="company" id="company" value="favorita-mov-decor">
										<fieldset class="col-md-12">
										<?php if(isset($_GET['error']) && $_GET['error'] === 'profanity') { ?>
										<div class="alert alert-danger" role="alert"> <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> <span class="sr-only">Erro:</span> Seja mais educado! </div>
										<?php } ?>
										<?php if(isset($_GET['error']) && $_GET['error'] === 'repeat') { ?>
										<div class="alert alert-danger" role="alert"> <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> <span class="sr-only">Erro:</span> Verifique os seus dados e tente novamente! </div>
										<?php } ?>
										<!-- Text input-->
										<div class="form-group"> 
											<!--label class="col-md-4 control-label" for="nome">Nome</label-->
											<div class="col-md-12">
											<input id="name" name="name" type="text" data-required placeholder="Nome" class="form-control input-md formulario" value="<?php if(isset($_GET['name'])) { echo $_GET['name']; } ?>" required="required">
											</div>
										</div>
										<!-- Text input-->
										<div class="form-group"> 
											<!--label class="col-md-4 control-label" for="email">E-mail</label-->
											<div class="col-md-12">
											<input id="email" name="email" type="email" data-required placeholder="E-mail" class="form-control input-md formulario" value="<?php if(isset($_GET['email'])) { echo $_GET['email']; } ?>" required="required">
											</div>
										</div>
	
										<!-- Text input-->
										<div class="form-group"> 
											<!--label class="col-md-4 control-label" for="telefone">Telefone</label-->
											<div class="col-md-12">
											<input id="phone" name="phone" type="text" data-required required="required" placeholder="Telefone" value="<?php if(isset($_GET['phone'])) { echo $_GET['phone']; } ?>" class="form-control input-md formulario">
											</div>
										</div>
										<!-- Button -->
										<div class="form-group"> 
											<!--label class="col-md-4 control-label" for="enviar"></label-->
											<div class="col-md-12" style="text-align: center;">
											<button id="enviar" name="enviar" class="hotEnviar">ENVIAR</button>
											</div>
										</div>
										</fieldset>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="container">
			<div class="row">
				<div class="col-lg-12">
					<p class="txtOne">E ganhe ingressos  para o camarote do carnaval 2019</p>
					<p class="txtTwo">*Comprando R$ 1.000,00 em produtos em qualquer loja da Sleep House Colchões, você concorre a abadás com ingressos para o camarote do Desfile das Escolas de Samba de São Paulo no Carnaval 2019. Promoção válida enquanto durarem os estoques. CERTIFICADO DE AUTORIZAÇÃO CAIXA Nº 06.001025/2019</p>
				</div>
			</div>
		</section>

		<section class="container-fluid bgProduct">
			<div class="container">
				<div class="row py-05">
					<div class="col-lg-6">
						<img src="images/img01.png" class="img-responsive center-block" alt="">
					</div>
					<div class="col-lg-6">
						<img src="images/img02.png" class="img-responsive center-block" alt="">
					</div>
				</div>
				<div class="row py-05">
					<div class="col-lg-4 my-5">
						<img src="images/img03.png" class="img-responsive center-block hidden-xs hidden-sm" alt="">
						<img src="images/img03m.png" class="img-responsive center-block hidden-lg hidden-md" alt="">
					</div>
					<div class="col-lg-4 my-5">
						<img src="images/img04.png" class="img-responsive center-block hidden-xs hidden-sm" alt="">
						<img src="images/img04m.png" class="img-responsive center-block hidden-lg hidden-md" alt="">
					</div>
					<div class="col-lg-4 my-5">
						<img src="images/img05.png" class="img-responsive center-block hidden-xs hidden-sm" alt="">
						<img src="images/img05m.png" class="img-responsive center-block hidden-lg hidden-md" alt="">
					</div>
				</div>
			</div>
		</section>

		<footer class="container-fluid bgFooter"></footer>



	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-1.11.3.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="js/bootstrap.js"></script>
  </body>
</html>