<?php
date_default_timezone_get('America/Sao_Paulo');

require_once('PHPMailer/src/PHPMailer.php');
require_once('PHPMailer/src/SMTP.php');
require_once('PHPMailer/src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if ((isset($_POST['email']) && !empty(trim($_POST['email']))) && (isset($_POST['mensagem']) && !empty(trim($_POST['mensagem'])))){


		$nome = !empty($_POST['nome']) ? $_POST['nome'] : 'Não informado';
		$email = $_POST['email'];
		$assunto = !empty($_POST['assunto']) ? utf8_decode($_POST['assunto']) : 'Não informado';
		$mensagem = $_POST['mensagem'];
		$data = date('d/m/Y H:i:s');
		
		$mail = new PHPMailer();
		$mail->isSMTP();
		$mail->Host = 'smtp.gmail.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'endreoteste@gmail.com';
		$mail->Password = 'endreo1996';
		$mail->Port = 587;

		$mail->setFrom('endreoteste@gmail.com');
		$mail->addAddress('endreoteste@gmail.com');
		
		$mail->isHTML(true);
		$mail->Subject = $assunto;
		$mail->Body = "Nome: {$nome}<br>
					   Email: {$email}<br>
					   Mensagem: {$mensagem}<br>
					   Data/hora: {$data}";	

		if($mail->send()) {
			echo "<script>alert('Email enviado com Sucesso!');";
			echo "javascript:window.location='contato.php';</script>";
		} else {
			echo "<script>alert('Email não enviado verifique seus dados!');";
			echo "javascript:window.location='contato.php';</script>";
		}
}else{
		echo 'Não enviado: informar o email e a mensagem.';
	}	




