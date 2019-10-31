<?php

if(isset($_GET["pg"])){
	$pagina = $_GET["pg"];
}
else{
	$pagina = "inicio";
}	

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Projeto Usabilidade Jogos</title>

		<meta charset="utf-8">
		<script src="./js/popper.min.js"></script>
    	<script src="./js/jquery-3.3.3.1.slim.min.js"></script>

		<link rel="stylesheet" type="text/css" href="./css/bootstrap_css/bootstrap.min.css">

		<script type="text/javascript" src="./js/bootstrap_js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="./css/estilo.css">

	</head>
	<body>

	<div class="container">

		<div class="jumbotron">

		<h1>Bem-vindo(a) ao site, Jogador(a)!</h1>

		<p>Queremos ouvir você!</p>

		<ul class="menu">
		<a href="?pg=home" class="btn btn-primary" role="button">Início</a>
		<a href="?pg=sobre" class="btn btn-primary" role="button">Sobre o Site</a>
		<a href="?pg=sobrejogos" class="btn btn-primary" role="button">Sobre os Jogos</a>
		<a href="?pg=questionario" class="btn btn-primary" role="button">Questionário</a>
		<a href="?pg=testeUsabilidade" class="btn btn-primary" role="button">Teste de Usabilidade</a>
		</ul>

		</div>

	</div>

	<div class="container" id="corpo">

		<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item" aria-current="page"><a href="?pg=home">Home</a></li>
			    <?php
			    if ($pagina == "sobre") {
			    	echo '<li class="breadcrumb-item" aria-current="page"><a href="?pg=sobre">Sobre</a></li>';
			    } elseif ($pagina == "sobrejogos") {
			    	echo '<li class="breadcrumb-item" aria-current="page"><a href="?pg=sobrejogos">Sobre os Jogos</a></li>'; 
			    } elseif ($pagina == "questionario") {
			    	echo '<li class="breadcrumb-item" aria-current="page"><a href="?pg=questionario">Questionário</a></li>';
			    }elseif ($pagina == "testeUsabilidade") {
			    	echo '<li class="breadcrumb-item" aria-current="page"><a href="?pg=testeUsabilidade">Teste de Usabilidade</a></li>';
			    }
			    ?>
			  </ol>
			</nav>
	<div>

		<?php			

				include("paginas/".$pagina.".php");

		?>

	<div class="container" id="rodape">
		
		<div class="row">
    		<div class="col-sm">

      		<h4>Todos os direitos reservados a Diego Neves Lourenço e Marco Antônio Ribeiro Caldas.</h4>

    		</div>
		
    	</div>
	</div>

	</body>
</html>