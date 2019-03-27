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
              <nav>
                <a href="master_1.html">Nosotros</a>
                <a href="Prof_sesion.html">Maestro</a>
                <a href="alumno.html">Alumno</a>
                <a href="contacto.html">Contacto</a>
              </nav>
        </header>
        <main>
            <div class="base">
            <div class="alumno_img"><img src="images/casco.png" height="100%" width="100%"></div>
            <div class="datos_al">
                <div class="form-group row">
                    <div class="col">
                        <h2>Nombre:</h2>
                    </div>
                    <div class="col">
                        <input class="form-control" type="text" id="nombre" name="nombre" value="<?php echo $linea['nombre'];?>" maxlength="40" readonly>" 
                    </div>
                    <div class="col">
                        <h2>Apellidos: </h2>
                    </div>
                    <div class="col">
                        <input class="form-control" type="text" id="nombre" name="nombre" maxlength="40"  value="<?php echo $linea['apellidos'];?>"readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col">
                        <h2>Grado:</h2>
                    </div>
                    <div class="col">
                        <input class="form-control" type="text" id="grado" name="grado" maxlength="40" value="<?php echo $linea['grado'];?>" readonly>
                    </div>
                    <div class="col">
                        <h2>Altura: </h2>
                    </div>
                    <div class="col">
                        <input class="form-control" type="text" id="altura" name="altura" maxlength="40" value="<?php echo $linea['altura'];?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col">
                        <h2>Peso (kg):</h2>
                    </div>
                    <div class="col">
                        <input class="form-control" type="text" id="peso" name="peso" maxlength="40" value="<?php echo $linea['peso'];?>" readonly>
                    </div>
                    <div class="col">
                        <h2>Edad: </h2>
                    </div>
                    <div class="col">
                        <input class="form-control" type="text" id="edad" name="edad" maxlength="40" value="<?php echo $linea['edad'];?>" readonly>
                    </div>
                    </div>
                <div class="form-group row">
                    <div class="col">
                        <h2>Fecha de nacimiento(d/m/a):</h2>
                    </div>
                    <div class="col">
                        <input class="form-control" input type=date id="nacimiento" name="nacimiento"  value="<?php echo $linea['fecha_nac'];?>" readonly>
                    </div>
            </div>
            </div>
            </div>
            <div class="botones">
                <center><form action="prueba2.php" method="post">
                    <input type="submit" name="editar" id="editar"value="Editar" class="btn btn-light btn-lg">
                    <input type="submit" name="volver" id="volver" value="Cerrar sesión" class="btn btn-dark btn-lg">
                </form></center>
            </div>
        </main>
        </div>
    </body>
</html>