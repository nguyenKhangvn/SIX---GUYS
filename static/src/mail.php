<?php

    $content = $_GET['mess'];
	$content = (int)$content;
    $mail_send = $_GET['mail'];
	$huong_chuyen_trang = $content;
   
	if($content == 1){
        $content = "<h1>Bạn vừa đăng ký thành công</h1>";
    }
	else if($content == 2){
		$token = $_GET['token'];
		$content = "<h1>Mã xác nhận để thay đổi mật khẩu </h1><br></br> $token";
	}


//Include required PHPMailer files
	require 'phpmailer/includes/PHPMailer.php';
	require 'phpmailer/includes/SMTP.php';
	require 'phpmailer/includes/Exception.php';
//Define name spaces
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
//Create instance of PHPMailer
	$mail = new PHPMailer();
//Set mailer to use smtp
	$mail->isSMTP();
//Define smtp host
	$mail->Host = "smtp.gmail.com";
//Enable smtp authentication
	$mail->SMTPAuth = true;
//Set smtp encryption type (ssl/tls)
	$mail->SMTPSecure = "tls";
//Port to connect smtp
	$mail->Port = "587";

	$mail->charset = "UTF-8";
//Set gmail username
	$mail->Username = "khangpross321@gmail.com";
//Set gmail password
	$mail->Password = "vbwuuasiauhaftya";
//Email subject
	$mail->Subject = "Mã xác nhận quên mật khẩu";
//Set sender email
	$mail->setFrom('khangpross321@gmail.com');
//Enable HTML
	$mail->isHTML(true);
//Attachment
	// $mail->addAttachment('img/attachment.png');
//Email body
	$mail->Body = $content;
//Add recipient
	$mail->addAddress($mail_send);
//Finally send email
	if ( $mail->send() ) {
		echo "Email Sent..!";
	}else{
		echo "Message could not be sent. Mailer Error: ";
	}
//Closing smtp connection
	$mail->smtpClose();

	if($huong_chuyen_trang == 1){
		header('location:index.php');
		exit;
	}
	else if($huong_chuyen_trang == 2){
		header('location:form_update_password.php');
		exit;
	}

