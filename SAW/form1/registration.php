<!DOCTYPE html>
<html lang="it">
<head>
    <title>Submit</title>
</head>
<body>
    <?php

    //echo(sha1(md5($_POST["pass"])));
    //exit;

        if($_POST["firstname"] == "" || $_POST["lastname"] == "" ||$_POST["email"] == ""||$_POST["pass"] == ""||$_POST["confirm"] == ""){
            echo "
            <h1>
                MANCANO ALCUNI DATI
            </h1>
            ";
            echo "<a href=\"formregistration.php\">RIPROVA</a>";
            include("errorscript.php");
        }
        elseif($_POST["pass"] != $_POST["confirm"]){
            echo "
            <h1>
                CONFERMA PASSWORD ERRATA
            </h1>            
            ";
            echo "<a href=\"formregistration.php\">RIPROVA</a>";
            include("errorscript.php");
        }
        else {

            if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                echo"
                <h1>
                ERRORE FORMATO EMAIL
                </h1>
                ";
                echo "<a href=\"formregistration.php\">RIPROVA</a>";
                include("errorscript.php");
                exit;
            }
            
            if($_POST["fc"] != "")
                if(!preg_match("/[a-zA-Z]{6}\d{2}[a-zA-Z]\d{2}[a-zA-Z]\d{3}[a-zA-Z]/", $_POST["fc"])){
                    echo"
                    <h1>
                    ERRORE FORMATO CODICE FISCALE
                    </h1>
                    ";
                    echo "<a href=\"formregistration.php\">RIPROVA</a>";
                    include("errorscript.php");
                    exit;                               
                }
            
            if($_POST["icn"] != "")
                if(!preg_match("/[a-z]{2}\d{5}[a-z]{2}/i", $_POST["icn"])){
                    echo"
                    <h1>
                    ERRORE FORMATO CARTA D'IDENTITà
                    </h1>
                    ";
                    echo "<a href=\"formregistration.php\">RIPROVA</a>";
                    include("errorscript.php");
                    exit;                               
                }

            $file = "users.txt";
            
            $user = 
              "\nfirstname ".$_POST["firstname"]."\n"
             ."lastname ".$_POST["lastname"]."\n"
             ."email ".$_POST["email"]."\n"
             .password_hash($_POST["pass"], PASSWORD_DEFAULT);

            $handle = fopen($file, 'a');
            
            if(!$handle){
                echo "Cannot open file ($filename)";
                exit;
            }


            if (fwrite($handle, $user) === FALSE) {
                echo "Cannot write to file ($filename)";
                exit;
            }
            
            fclose($handle);

            echo "
            <h1>
                GRAZIE PER ESSERTI REGISTRATO!
            </h1>            
            ";
        }
    ?>
</body>
</html>

