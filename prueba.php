<!DOCTYPE html>
<html>
<head>
    <title>Contacto</title>
    <meta charset="utf-8">
</head>
<body>
    <?php
        $cuerpo = '
<html>
<head>
 <title></title>
</head>
<body>
'.$_POST['descripcion'].'
</body>
</html>
';

//para el envío en formato HTML
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

//dirección del remitente
$headers .= "From: ".$_POST['nombre']." <".$_POST['email'].">\r\n";

//Una Dirección de respuesta, si queremos que sea distinta que la del remitente
//$headers .= "Reply-To: ejemplo@hotmail.com\r\n";

//Direcciones que recibián copia
//$headers .= "Cc: ejemplo2@gmail.com\r\n";

//direcciones que recibirán copia oculta
//$headers .= "Bcc: ejemplo3@yahoo.com\r\n";
if(isset($_POST['enviar'])){
	if(mail('diegobolpar@hotmail.com',$_POST['asunto'],$cuerpo,$headers)){
        header("Location:exitoso.html");
	}else{
        echo "<script>alert('No se pudo enviar el mail.');</script>";
        
	}
}
    ?>;
    

    
</body>
</html>