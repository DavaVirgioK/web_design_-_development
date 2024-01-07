<?php

use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$mail = new PHPMailer;

$mail->isSMTP();
$mail->Host = 'ferrox12l@gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'ferrox12l@gmail.com';
$mail->Password = 'kiki619123';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom('ferrox12l@gmail.com', 'weCare');

$mail->addAddress('rifcki.d12@gmail.com');

$mail->isHTML(true);

$mail->Subject = 'Email Konsultasi Dari weCare';

$bodyContent = '<h1>Email Konsultasi dari weCare user = rifcki</h1>';
$bodyContent .-'<h1>Balas email ke bla bla bla</h1>';
$mail->Body = $bodyContent;

if(!$mail->send()){
	echo 'Gagal Kirim email';
}else{
	echo 'Email Berhasil Dikirim';
}

