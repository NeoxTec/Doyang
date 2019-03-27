<!DOCTYPE html>
<html>
    <body>
        <?php 
        try{
            $conect = new PDO("mysql:host=localhost; port=3307; dbname=pumastkd","root","maria");
            $conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $SQL = "SELECT * FROM alumno where correo = :log and password = :pass";
            $prep = $conect->prepare($SQL);
            $log = htmlspecialchars(addslashes($_POST['email']));
            $pass = htmlspecialchars(addslashes($_POST['password']));
            $sql2 = "Select id from alumno where correo = :log and password = :pass";
            $prep2 = $conect->prepare($sql2);
            
            $prep->execute(array(":log"=>$log,"pass"=>$pass));
            $prep2->execute(array(":log"=>$log,"pass"=>$pass));
            
            $nreg = $prep->rowCount();
            if($nreg !=0){
                $res=$prep2->fetch();
                session_start();
                $_SESSION["correo"] = $res[0];
                header("Location:alumno.php");
            }
            else{
                header("Location:Alumno_session.html");
            }
        }
        catch(Exception $e){
            echo ("Error: ".$e->getMessage());
        }finally{$conect=null;}
    ?>
    </body>
</html>