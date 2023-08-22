<?php
	$from = $_POST['email'];

	$to = "mikaelmoraisfac@gmail.com";

	$subject = $_POST['assunto'];

	$message = $_POST['mensagem'];

	$headers  = 'MIME-Version: 1.0';
	$headers .= 'Content-type: text/html; charset=iso-8859-1';
	$headers .= 'From:  ' . $from . "\r\n" .
			    'Reply-To: ' . $from . "\r\n" .
			    'X-Mailer: PHP/' . phpversion();

	$status = mail($to, $subject, $message, $headers);

	if($status==true){
		print "Enviou mensagem";
	}else{
		print "Não foi possível enviar";
	}