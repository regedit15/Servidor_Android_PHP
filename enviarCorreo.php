<?php 

include ("PHPMailer/class.phpmailer.php");

// $destinatario=$_GET['destinatario'];
// $cuerpo=$_GET['cuerpo'];

function enviarCorreo($destinatario, $asunto, $cuerpo)
{
	$mail = new PHPMailer();
	 
	$mail->IsSMTP();
	$mail->Host     = "ssl://smtp.gmail.com";
	$mail->Port     = 465;
	$mail->SMTPAuth = true;
	 
	$mail->Username = "001regedit@gmail.com";
	$mail->Password = "K2ftzQp5hPb3";
	 
	$mail->From     = "001regedit@gmail.com";
	$mail->FromName = "Webmaster";
	 
	$mail->Subject  = $asunto;
	$mail->WordWrap = 50;
	 
	 
	$mail->AddAddress($destinatario); 
	$mail->IsHTML(TRUE);
	 
	// $mail->Body = "<a href=http://localhost/prueba/Clasificados_EnviarCorreo.php>Para activar su cuenta haga click aqui</a>";

	$mail->Body = $cuerpo;
	 
	if(!$mail->Send()) {
	    echo "Error: " . $mail->ErrorInfo;
	} else {
	    echo "Mensaje enviado";
	}
}

 ?>
