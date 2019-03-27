<?php
    session_start();
    $conect = new PDO("mysql:host=localhost; port=3307; dbname=pumastkd","root","maria");
    $conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);       
    $SQL = "SELECT * FROM alumno where id='".$_SESSION["correo"]."';";
    $prep = $conect->prepare($SQL);
    $prep->execute();
    $prep->setFetchMode(PDO::FETCH_ASSOC);
    $linea = $prep->fetch();
    $linea['nombre']
?>
<html>
    <head>
    <meta charset="utf-8">
    <title>Dojang</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/logo.png" />
    <link href="master.css" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    </head>
    <body>
        <div>
        <header>
            <di class="back"v></div>
            <a><img id="logo" src="images/logo.png"></a>
        </header>
        <main><form action="prueba2.php" method="post">
            <div class="base">
            <div class="alumno_img"><img src="images/casco.png" height="100%" width="100%"></div>
            <div class="datos_al">
                <div class="form-group row">
                    <div class="col">
                        <h2>Nombre:</h2>
                    </div>
                    <div class="col">
                        <input class="form-control" type="text" id="nombre" name="nombre" value="<?php echo $linea['nombre'];?>" placeholder="Nombre(s) del alumno" required pattern="[A-Za-z áéíóúÁÉÍÓÚ]+{4,40}"> 
                    </div>
                    <div class="col">
                        <h2>Apellidos: </h2>
                    </div>
                    <div class="col">
                        <input class="form-control" type="text" id="apellidos" name="apellidos" maxlength="40"  value="<?php echo $linea['apellidos'];?>" placeholder="Apellidos del alumno" required pattern="[A-Za-z áéíóúÁÉÍÓÚ]+{4,40}">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col">
                        <h2>Grado:</h2>
                    </div>
                    <div class="col">
                        <input class="form-control" type="text" id="grado" name="grado" maxlength="35" value="<?php echo $linea['grado'];?>" placeholder="Grado marcial del alumno" required pattern="[A-Za-z - 0-9]+{8,35}">
                    </div>
                    <div class="col">
                        <h2>Altura: </h2>
                    </div>
                    <div class="col">
                        <input class="form-control" type="text" id="altura" name="altura" maxlength="35" value="<?php echo $linea['altura'];?>"placeholder="Altura del alumno en metros" required pattern="[0-9.]{1,4}">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col">
                        <h2>Peso (kg):</h2>
                    </div>
                    <div class="col">
                        <input class="form-control" type="text" id="peso" name="peso" maxlength="40" value="<?php echo $linea['peso'];?>" placeholder="Peso del alumno en kg" required pattern="[0-9.]{3,7}">
                    </div>
                    <div class="col">
                        <h2>Edad: </h2>
                    </div>
                    <div class="col">
                        <input class="form-control" type="text" id="edad" name="edad" maxlength="40" value="<?php echo $linea['edad'];?>" placeholder="Edad del alumno" required pattern="[0-9]{1,2}">
                    </div>
                    </div>
                <div class="form-group row">
                    <div class="col">
                        <h2>Fecha de nacimiento(d/m/a):</h2>
                    </div>
                    <div class="col">
                        <input class="form-control" type=date id="nacimiento" name="nacimiento"  value="<?php echo $linea['fecha_nac'];?>" required pattern="[0-3][1-9]/+[0-1][0-9]+/+[1-9]{4}">
                    </div>
                    </div>
            </div>
            </div>
            <div class="botones">
                <center>
                    <input type="submit" name="guardar" id="guardar"value="Guardar" class="btn btn-light btn-lg">
                    <input type="submit" name="cancelar" id="cancelar" value="Cancelar" class="btn btn-dark btn-lg">
                </center>
            </div></form>
        </main>
        </div>
    </body>
</html>