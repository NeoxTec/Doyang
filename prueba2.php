<html>
<body>
<?php 
if (isset($_POST['editar'])){
    session_start();
    header("Location:Alumno_editar.php");
}
else if (isset($_POST['volver'])){
    session_destroy();
    header("Location:Alumno_session.html");
}
else if(isset($_POST['guardar'])){
    session_start();
    $conect = new PDO("mysql:host=localhost; port=3307; dbname=pumastkd","root","maria");
    $conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $SQL = "UPDATE alumno SET nombre='$name',apellidos='$ape',grado='$grade',edad='$edad',peso='$peso',altura='$alt',fecha_nac='$nac' where id='".$_SESSION["correo"]."';";
    
    $name = htmlspecialchars(addslashes($_POST['nombre']));
    $ape = htmlspecialchars(addslashes($_POST['apellidos']));
    $grade = (string) addslashes($_POST['grado']);
    $alt = htmlspecialchars(addslashes($_POST['altura']));
    $peso = htmlspecialchars(addslashes($_POST['peso']));
    $edad = htmlspecialchars(addslashes($_POST['edad']));
    $nac = htmlspecialchars(addslashes($_POST['nacimiento']));
    
    $prep = $conect->prepare($SQL);
    $prep->execute(array());
    $res = $prep;
    echo $res;
    
}
else if(isset($_POST['cancelar'])){
    session_start();
    header("Location:alumno.php");
}
?>
</body>
</html>
