<?php

    include ("PHPMailer/class.phpmailer.php");

    $host="localhost"; //replace with database hostname 
    $username="root"; //replace with database username 
    $password=""; //replace with database password 
    $db_name="clasificados"; //replace with database name


    function abrirConexion()
    {
        $host="localhost"; //replace with database hostname 
        $username="root"; //replace with database username 
        $password=""; //replace with database password 
        $db_name="clasificados"; //replace with database name

        $con=mysql_connect($host, $username, $password)or die("cannot connect"); 
        // mysql_select_db('clasificados')or die("cannot select DB");
    }

    //teoricamente lo cierra soloa al final de un script, asique...
    // function cerrarConexion()
    // {
    //     $enlace =  mysql_connect('localhost', 'usuario_mysql', 'contraseña_mysql');
    //     if (!$enlace) {
    //         die('No pudo conectarse: ' . mysql_error());
    //     }
    //     echo 'Conectado satisfactoriamente';
    //     mysql_close($enlace);
    // }


    function ejecutarConsulta($sql)
    {
        mysql_query($sql);
    }

    function insertReturnId($sql)
    {
        mysql_query($sql);

        $json = array();
        $json['lista'][] = strval(mysql_insert_id());
        echo json_encode($json); 
    }


    function obtenerSelect($sql)
    {
        $result = mysql_query($sql);
        $json = array();
        
        if(mysql_num_rows($result))
        {
            while($row = mysql_fetch_assoc($result))
            {
                $json['lista'][]=$row;
            }
        }

        echo json_encode($json); 
    }


    function obtenerUnSelect($sql, $columna)
    {
       
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
    }


    function validarUsuario($usuario, $contraseña)
    {

        $result = mysql_query("SELECT id FROM clasificados.usuario WHERE usuario = '$usuario' AND password = '$contraseña' AND activado = 1");
        $json = array();
        
        if(mysql_num_rows($result))
        {
            $json['lista'][]="1";
        }
        else
        {
            $json['lista'][]="0";
        }

        echo json_encode($json); 
    }

    function validarNombreUsuario($usuario)
    {
        $result = mysql_query("SELECT id FROM clasificados.usuario where usuario = '$usuario'");
        $json = array();
        
        if(mysql_num_rows($result))
        {
            $json['lista'][]="1";
        }
        else
        {
            $json['lista'][]="0";
        }

        echo json_encode($json); 
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
        
        $mail->Body = $cuerpo;
        

        $mail->Send();

        // if(!$mail->Send()) 
        // {
        //     echo "Error: " . $mail->ErrorInfo;
        // }
    }

    // pruebas
    // echo obtenerUnSelect("SELECT md5 FROM clasificados.usuario WHERE id = '47'", "md5")
    // ejecutarConsulta("UPDATE clasificados.usuario SET activado = 1 WHERE usuario = 'martincho'");
    // localhost/prueba/Clasificados_ActivarUsuario.php?usuario=martincho&md5=8dbdb87ef36d88d6c71e8fe0b0b648b3
    //  ejecutarConsulta("INSERT INTO  clasificados.usuario (`usuario`, `password`, `correo`, `md5`) VALUES ('aaa', 'aaa', 'aaa', 'aaa');");




?>