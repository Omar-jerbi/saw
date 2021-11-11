<!DOCTYPE html>
<html lang="it">
<head>
    <title>Submit</title>
    <link rel="stylesheet" href="common/errorscript.css">
    <link rel="stylesheet" href="common/stile.css">
</head>

<style>
h1{
    padding-bottom: 10px;
}
</style>

<body>
    <?php

        if($_POST["firstname"] == "" || $_POST["lastname"] == "" ||$_POST["email"] == ""||$_POST["pass"] == ""||$_POST["confirm"] == ""){
            echo "
            <h1>
                MANCANO ALCUNI DATI
            </h1>
            ";
            echo "<a href=\"formregistration.php\">RIPROVA</a>";
        }
        elseif($_POST["pass"] != $_POST["confirm"]){
            echo "
            <h1>
                CONFERMA PASSWORD ERRATA
            </h1>            
            ";
            echo "<a href=\"formregistration.php\">RIPROVA</a>";
        }
        else {

            if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                echo"
                <h1>
                ERRORE FORMATO EMAIL
                </h1>
                ";
                echo "<a href=\"formregistration.php\">RIPROVA</a>";

                exit;
            }
            

            include("common/db/db_connect.php");

            
            $f = mysqli_real_escape_string($connection, strtolower(trim($_POST["firstname"])));
            $l = mysqli_real_escape_string($connection, strtolower(trim($_POST["lastname"])));
            $m = mysqli_real_escape_string($connection ,strtolower(trim($_POST["email"])));
            $pw = password_hash($_POST["pass"], PASSWORD_DEFAULT);

            $sql = "INSERT INTO utenti (firstname, lastname, email, pass)
              VALUES ('$f', '$l', '$m', '$pw')";


            if (mysqli_query($connection, $sql)) {
                echo "New record created successfully";
            } else {
                if(preg_match("/Duplicate entry(...)/", mysqli_error($connection))){
                    echo "Errore, email già inserita";
                    exit;
                }
                else {
                    echo "errore registrazione";
                    exit;
                }
                
            }


            echo "
            <h1>
                GRAZIE PER ESSERTI REGISTRATO!
            </h1>            
            ";
            echo "<a href=\"_home.php\">HOME</a>";
            session_start();
            $_SESSION["login"] = true;
            $_SESSION["firstname"] = $_POST["firstname"];
            $_SESSION["lastname"] = $_POST["lastname"] ;
            $_SESSION["email"] = $_POST["email"];
        }
    ?>
</body>
</html>

