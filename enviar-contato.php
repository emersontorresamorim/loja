<?php
	require_once("PHPMailerAutoload.php");

	session_start();

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$mensagem = $_POST['mensagem'];

	$mail = new PHPMailer();
	$mail -> isSMTP();
	$mail -> Host = "smtp.gmail.com";
	$mail -> Port = 587;
	$mail -> SMTPSecure = "tls";
	$mail -> SMTPAuth = true;
	$mail -> Username = "emerson.torres.tec@gmail.com";
	$mail -> Password = "123456";

	$mail -> setFrom("emerson.torres.tec@gmail.com", "Emerson Torres");
	$mail -> addAddress("emerson.torres.tec@gmail.com");
	$mail -> Subject = "Email de contato da Loja";
	$mail -> msgHTML("<html>De: {$nome}<br/>Email: {$email}<br/>Mensagem: {$mensagem}</html>");
	$mail -> AltBody = "De: {$nome}\nEmail: {$email}\nMensagem: {$mensagem}";

	if ($mail -> send()) {
		$_SESSION['success'] = "Mensagem enviada com sucesso.";
		header("Location: index.php");
	} else {
		$_SESSION['danger'] = "Erro ao enviar mensagem: " . $mail -> ErrorInfo;
		header("Location: contato.php");
	}

	die();