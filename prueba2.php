<html>
<body>
<?php 
if (isset($_POST['editar'])){
    session_start();
    header("Location:Alumno_editar.html");
}
else if (isset($_POST['volver'])){
    session_destroy();
    header("Location:Alumno_session.html");
}
else if(isset($_POST['guardar'])){}
else if(isset($_POST['cancelar'])){
    session_start();
    header("Location:alumno.php");
}
?>
</body>
</html>
