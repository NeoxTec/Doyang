<html>
    <body>
    <?php
        $email = $_POST['correo'];
        $nombre = $_POST['nombre'];
        $asunto = $_POST['asunto'];
        $mensaje = $_POST['descripcion'];
        
        $cuerpo = '
<html>
<head>
 <title>Mail HTML</title>
</head>
<body>
'.$POST['cuerpo'].'
</body>
</html>
';

        
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
//dirección del remitente
$headers .= "From: ".$email."\r\nContent-type: text/html\r\n";

if(isset($_POST['enviar'])){
	if(mail($_POST['receptor'],$_POST['asunto'],$cuerpo,$headers)){
		echo "<script>alert('Email enviado correctamente');</script>";
        
	}else{
		echo "<script>alert('No se pudo enviar el mail.');</script>";
	}
}
?>
    </body>
</html>