<?php  
ini_set("display_errors", "1");
error_reporting(E_ALL);

require('Connect.php');

//Get variables

$name = $_POST['name'];
$email = $_POST['email'];
$city = $_POST['city'];

//-- ENVIO DE CORREO --//
require 'mail/PHPMailerAutoload.php';
require 'mail/class.phpmailer.php';
require 'mail/class.smtp.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 2;                               

$mail->isSMTP();                                    
$mail->Host = 'smtp.mailtrap.io';  
$mail->SMTPAuth = true;                              
$mail->Username = '0d7f43e63ad559';                 
$mail->Password = 'beb0c01cb7aeb7';                           
$mail->SMTPSecure = 'tls';                           
$mail->Port = 25;                                   

$mail->setFrom('from@example.com', 'Konetica');
$mail->addAddress($email, $name);

$mail->isHTML(true);                                  

$mail->Subject = 'Gracias por registrarte!';
$mail->Body    = 'Gracias por registrarte en Konetica, espera noticias muy pronto!';
$mail->AltBody = 'Gracias por registrarte en Konetica, espera noticias muy pronto!';

if(!$mail->send()) {
    header('Location: index.html/#error'); exit;
} else {
	$insert = mysqli_query($link, "INSERT INTO users 
				(name, email, city) VALUES ('".$name."', '".$email."', '".$city."')");
	

	if($insert == true){
		header('Location: index.html#thanks'); exit;	
	}else{
		echo mysqli_error($link);
	}
    
}
//-- FIN DE ENVIO DE CORREO --//

?>