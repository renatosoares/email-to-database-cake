<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array('bootstrap.min', 'font-awesome.min', 'estagio'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body class="fundo">
	<header class="text-center jumbotron transparente">
		<img src="img/mobister.jpg" alt="" style="margin-bottom:85px;">
		<h1>GOSTARIA DE SOLICITAR UM ORÇAMENTO?</h1>
		<p>Preencha o formulario abaixo com os seus dados e informacoes sobre o projeto ou servico <br> Em breve, entraremos em contato.</p>
	</header>

			<hr  class="container" style="margin-top: -32px; border: 2px solid; border-color: #9f0000;">


	<main class="container">
		<article class="row">
			<section class="col-md-12">
				<div class="row"> <!-- row dos icones -->
					<div class="col-md-3 text-center">
						<h1 class="iconeCentral">
							<span class="fa-stack fa-lg">
								<i class="fa fa-desktop fa-stack-1x fa-inverse iconefundo"></i>
							</span>
						</h1>
						<h2>WEB</h2>
						<hr class="hrIcone" >
						<p>Pense em um site. Pensou? Agora esqueça o que sabe e aceite o nosso convite. A Mobister quer te mostrar  que qualidade e inovação andam lado a lado. </p>
					</div> <!-- /icone -->
					<div class="col-md-3 text-center">
						<h1 class="iconeCentral">
							<span class="fa-stack fa-lg">

								<i class="fa fa-comments fa-stack-1x fa-inverse iconefundo"></i>
							</span>
						</h1>
						<h2>REDES SOCIAIS</h2>
						<hr class="hrIcone">
						<p>Pense em um site. Pensou? Agora esqueça o que sabe e aceite o nosso convite. A Mobister quer te mostrar  que qualidade e inovação andam lado a lado. </p>
					</div> <!-- /icone -->
					<div class="col-md-3 text-center">
						<h1 class="iconeCentral">
							<span class="fa-stack fa-lg">

								<i class="fa fa-flag fa-stack-1x fa-inverse iconefundo"></i>
							</span>
						</h1>
						<h2>MARKETING</h2>
						<hr class="hrIcone">
						<p>Pense em um site. Pensou? Agora esqueça o que sabe e aceite o nosso convite. A Mobister quer te mostrar  que qualidade e inovação andam lado a lado. </p>
					</div> <!-- /icone -->
					<div class="col-md-3 text-center">
						<h1 class="iconeCentral">
							<span class="fa-stack fa-lg">

								<i class="fa fa-shopping-basket fa-stack-1x fa-inverse iconefundo"></i>
							</span>
						</h1>
						<h2>E-COMMERCE</h2>
						<hr class="hrIcone">
						<p>Pense em um site. Pensou? Agora esqueça o que sabe e aceite o nosso convite. A Mobister quer te mostrar  que qualidade e inovação andam lado a lado. </p>
					</div> <!-- /icone -->
					<!-- ##################### /final da linha de icones ################## -->
					<div class="col-md-3 text-center">
						<h1 class="iconeCentral">
							<span class="fa-stack fa-lg">

								<i class="fa fa-line-chart fa-stack-1x fa-inverse iconefundo"></i>
							</span>
						</h1>
						<h2>PLANEJAMENTO <br> ESTRATÉGICO</h2>
						<hr class="hrIcone">
						<p>Pense em um site. Pensou? Agora esqueça o que sabe e aceite o nosso convite. A Mobister quer te mostrar  que qualidade e inovação andam lado a lado. </p>
					</div> <!-- /icone -->
					<div class="col-md-3 text-center">
						<h1 class="iconeCentral">
							<span class="fa-stack fa-lg">

								<i class="fa fa-search fa-stack-1x fa-inverse iconefundo"></i>
							</span>
						</h1>
						<h2>SEO E LINKS <br> PATROCINADOS</h2>
						<hr class="hrIcone">
						<p>Pense em um site. Pensou? Agora esqueça o que sabe e aceite o nosso convite. A Mobister quer te mostrar  que qualidade e inovação andam lado a lado. </p>
					</div> <!-- /icone -->
					<div class="col-md-3 text-center">
						<h1 class="iconeCentral">
							<span class="fa-stack fa-lg">

								<i class="fa fa-cogs fa-stack-1x fa-inverse iconefundo"></i>
							</span>
						</h1>
						<h2>SISTEMAS WEB BASED</h2>
						<hr class="hrIcone">
						<p>Pense em um site. Pensou? Agora esqueça o que sabe e aceite o nosso convite. A Mobister quer te mostrar  que qualidade e inovação andam lado a lado. </p>
					</div> <!-- /icone -->
					<div class="col-md-3 text-center">
						<h1 class="iconeCentral">
							<span class="fa-stack fa-lg">

								<i class="fa fa-lightbulb-o fa-stack-1x fa-inverse iconefundo"></i>
							</span>
						</h1>
						<h2>O QUE VOCÊ PRECISA</h2>
						<hr class="hrIcone">
						<p>Pense em um site. Pensou? Agora esqueça o que sabe e aceite o nosso convite. A Mobister quer te mostrar  que qualidade e inovação andam lado a lado. </p>
					</div> <!-- /icone -->
					<!-- ##################### /final da linha de icones ################## -->

				</div> <!-- /row dos icones -->
			</section>

			<div class="col-md-12">&nbsp;</div>
			 <section class="col-md-12"> <!-- formulário de contato -->
				 <?php echo $this->Flash->render(); ?>
				 <?php echo $this->fetch('content'); ?>
			 </section> <!-- /formulario de contato -->





			<div class="col-md-12">&nbsp;</div>
			<div class="col-md-12">&nbsp;</div>
			<section class="col-md-12 caixa text-center">
				<h3>LOCALIZAÇÃO</h3>
				<hr>

				<p>Rua Ismael Pereira da Silva, 1535 - Capim Macio - Natal, RN | (84) 3217.2786  •  atendimento@mobister.com.br</p>
			</section>
		</article>  <!-- /row principal -->
	</main>
	<hr>
	<footer class="text-center">
		Copyright Mobister 2016. Todos os direitos reservados.
	</footer>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<?php echo $this->Html->script(array('bootstrap.min','jquery.min' )); ?>
</body>
</html>
