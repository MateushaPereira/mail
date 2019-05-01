<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

	$nome = addslashes($_POST['nome']);
	$email = addslashes($_POST['email']);
	$mensagem = addslashes($_POST['mensagem']);

	$to = "mhapereira99@gmail.com";
	$assunto = "Formulario de Contato - Mateus";
	$body = "Nome: " . $nome . "\r\n" .
						"Email: " . $email . "\r\n" .
						"Mensagem: " . $mensagem;
	$header = "From:mateus.teuzin222@gmail.com" . "\r\n" . 
						"Reply-To:" . $email . "\r\n" . 
						"X=Mailer:PHP/".phpversion();

	if( mail($to, $assunto, $body, $header) ) {

		echo("Email enviado com sucesso!");

	} else {

		echo("Falha ao enviar email");

	}


} else {
	echo("moio");
}