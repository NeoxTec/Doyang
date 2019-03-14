  <!DOCTYPE html>
<html>
    <body>
        <?php 
       $conMySQL= new PDO("mysql:host=localhost; port=3307;dbname=pumastkd", "root","maria");
        $conMySQL->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $conMySQL->exec("SET CHARACTER SET UTF8");

        $sql="SELECT * FROM alumno where correo - :log AND password - :pass";
        $prep = $conMySQL->prepare($sql);

        $correo = htmlspecialchars(addslashes($POST_["email"]));
        $pass = htmlspecialchars(addslashes($POST_["password"]));

        $prep->execute(array(":log"=>$correo,":pass"=>$pass));

        $numreg-$prep->rowCount();
        if ($numreg != 0){
            printf("hola";)
        }
    ?>
    </body>
</html>