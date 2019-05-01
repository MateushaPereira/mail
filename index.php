<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Envio de Email</title>
</head>

<body>
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
</body>
</html>
