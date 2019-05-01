<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="//assets.locaweb.com.br/locastyle/2.0.6/stylesheets/locastyle.css">
	<script src="validacao.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>

<body>
	<?php 
		echo("olha")
	?>
	<form action="./email.php" method="POST">
		<label for="nome">NOME</label> <br>
		<input type="text" id="nome" name="nome" placeholder="Dogite seu nome completo!" require>
		<br>
		<label for="email">E-MAIL</label> <br>
		<input type="email" id="email" name="email" placeholder="Digite aqui seu E-mail">
		<br>
		<label for="mensagem">MENSAGEM</label> <br>
		<textarea type="text" id="mensagem" name="mensagem" placeholder="Digite awui sua Mensagem"></textarea>
		<br>
		<input type="submit" value="Enviar">
	</form>

	<script type="text/javascript" src="//code.jquery.com/jquery-2.0.3.min.js"></script>
	<script type="text/javascript" src="//assets.locaweb.com.br/locastyle/2.0.6/javascripts/locastyle.js"></script>
	<script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</body>

</html>