<!DOCTYPE html>
<html>
<head>	
	<meta charset="UTF-8">
	<link rel="stylesheet" href="universe/frontend/css/estilo.css">
	<title> Jogo da velha </title>
</head>

<body>

<nav class="navbar">

	<div class="logo">
		<h1> JOGO DA VELHA </h1>
	</div>

	<?php
	session_start();
		if(!isset($_SESSION['name'])):
			echo 
			"<div class='menu'>
				<a href='index.php'> Já tenho conta </a>
				<a href='cadastro.php' id='botao'> REGISTRAR-SE </a>
			</div>";
		else:
			echo
			"<div class='menu'>
				<ul> 
					<li> Seja Bem-Vindo, </li> 
					<li class='dropdown'> 
						<a class='dropbtn'>".$_SESSION['name']."</a> 
						<div class='dropdown-content'>
							<a href='#'> Configurações </a>
							<a href='editar.php?id=".$_SESSION['id']."'> Editar Perfil </a>
							<a href='logout.php'> Logout </a>
						</div>
					</li> 
				</ul>
			</div>";
		endif;
	?>

</nav>

<header class="header">
	<div class="headline">
	<h2> O JOGO MAIS POPULAR DE TODOS OS TEMPOS </h2>
	<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis 
		exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet 
		ab temporibus asperiores quasi cupiditate. Voluptatum ducimus voluptates voluptas. 
		Consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil 
		aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate.</p>
	<a href="game-mode.php" class="btn"> JOGAR AGORA </a>
	</div>

	<div class="img-headline">
		<img style="background: white; border-radius: 50px;" src="universe/frontend/img/game.png">
	</div>
</header>

<section>
	<h2 id="subtitle1"> COMO JOGAR O JOGO DA VELHA? </h2>
	<div class="help"> 
		<div class="card-text">
			<h3> REGRA 1 </h3>
			<p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis 
			exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet 
			ab temporibus asperiores quasi cupiditate. Voluptatum ducimus voluptates voluptas. </p>
		</div>
		<div class="card-text">
			<h3> REGRA 2 </h3>
			<p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis 
			exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet 
			ab temporibus asperiores quasi cupiditate. Voluptatum ducimus voluptates voluptas. </p>
		</div>
		<div class="card-text">
			<h3> REGRA 3 </h3>
			<p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis 
			exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet 
			ab temporibus asperiores quasi cupiditate. Voluptatum ducimus voluptates voluptas. </p>
		</div>
	</div>

	<div class="services">
		<h3 id="subtitle2"> OUTROS JOGOS </h3>
		<div class="card-text">
			<img src="universe/frontend/img/xadrez.png">
			<h3> XADREZ </h3>
			<p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis 
			exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet 
			ab temporibus asperiores quasi cupiditate. Voluptatum ducimus voluptates voluptas. </p>
		</div>
		<div class="card-text">
			<img src="universe/frontend/img/dama-2.png">
			<h3> DAMA </h3>
			<p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis 
			exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet 
			ab temporibus asperiores quasi cupiditate. Voluptatum ducimus voluptates voluptas. </p>
		</div>
		<div class="card-text">
			<img src="universe/frontend/img/mine.png">
			<h3> CAMPO MINADO </h3>
			<p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis 
			exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet 
			ab temporibus asperiores quasi cupiditate. Voluptatum ducimus voluptates voluptas. </p>
		</div>
		<div class="card-text">
			<img src="universe/frontend/img/dna.png">
			<h3> DNA </h3>
			<p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis 
			exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet 
			ab temporibus asperiores quasi cupiditate. Voluptatum ducimus voluptates voluptas. </p>
		</div>
		<div class="card-text">
			<img src="universe/frontend/img/ship.png">
			<h3> BATALHA NAVAL </h3>
			<p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis 
			exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet 
			ab temporibus asperiores quasi cupiditate. Voluptatum ducimus voluptates voluptas. </p>
		</div>
		<div class="card-text">
			<img src="universe/frontend/img/spades.png">
			<h3> PACIÊNCIA </h3>
			<p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis 
			exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet 
			ab temporibus asperiores quasi cupiditate. Voluptatum ducimus voluptates voluptas. </p>
		</div>
		<a href="#" class="btn">  MAIS JOGOS </a>
	</div>
</section>

<footer>
	<div class="card-footer">
		<p> 
		Atendimento Presencial: <br>
		Rua Salvador Figueiredo, 156 <br>
		Nova Esperança - Palmas, Tocantins. 
		</p>
	</div>

	<div class="card-footer">
		<h3> UNIVERSE . COM </h3>
		<P> Sua criatividade ilimitada. </p>
		<b> © Todos os direitos reservados. </b>
	</div>

	<div class="card-footer">
		<p> Siga nossas redes sociais: </p>
		<img src="universe/frontend/img/facebook.png">
		<img src="universe/frontend/img/instagram.png">
		<img src="universe/frontend/img/twitter.png">
	</div>	
</footer>
</body>
</html>