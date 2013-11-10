<?php

$host="localhost"; //replace with database hostname 
$username="root"; //replace with database username 
$password=""; //replace with database password 
$db_name="clasificados"; //replace with database name

function ejecutarConsulta($sql)
{
    global $host;
    global $username;
    global $password;
    global $db_name;

    $con=mysqli_connect($host, $username, $password,$db_name);
    
    // Check connection
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    if (!mysqli_query($con, $sql))
    {
        die('Error: ' . mysqli_error($con));
    }

    mysqli_close($con);
}


function obtenerSelect($sql)
{
    global $host;
    global $username;
    global $password;
    global $db_name;

    $con=mysql_connect($host, $username, $password)or die("cannot connect"); 
    mysql_select_db($db_name)or die("cannot select DB");

    $result = mysql_query($sql);
    $json = array();
     
    if(mysql_num_rows($result))
    {
        while($row = mysql_fetch_assoc($result))
        {
            $json['lista'][]=$row;
        }
    }

    mysql_close($con);
    echo json_encode($json); 
}


function obtenerUnSelect($sql, $columna)
{
    global $host;
    global $username;
    global $password;
    global $db_name;

    $con=mysql_connect($host, $username, $password)or die("cannot connect"); 
    mysql_select_db($db_name)or die("cannot select DB");
 
    $result = mysql_query($sql);
     
    if(mysql_num_rows($result))
    {
        if($row = mysql_fetch_assoc($result))
        {
            return $row[$columna];
        }
    }
    else
    {
        return -1;
    }
    mysql_close($con);
}

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

// pruebas
// echo obtenerUnSelect("SELECT md5 FROM clasificados.usuario WHERE id = '47'", "md5")
// ejecutarConsulta("UPDATE clasificados.usuario SET activado = 1 WHERE usuario = 'martincho'");
// localhost/prueba/Clasificados_ActivarUsuario.php?usuario=martincho&md5=8dbdb87ef36d88d6c71e8fe0b0b648b3


?>