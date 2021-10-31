<?php
$mail = "email ".$_POST["email"]."\n";
$password = $_POST["pass"];


$file = "users.txt";
$handle = fopen($file, 'r');


if ($handle) {
    while (($line = fgets($handle)) !== false) {

        if($line == $mail){
            $line = fgets($handle);
            
            if(password_verify($password, $line)){
                session_start();
                $_SESSION["login"] = true;
                $_SESSION["mail"] = $mail;

                if(isset($_SESSION["tried"])){
                    header("Location: {$_SESSION["camefrom"]}");
                }
                echo"
                    <h1>BENVENUTO</h1>
                ";
                exit;
            }
        }
    }

    echo "<h1>UTENTE NON REGISTRATO O PASSWORD NON VALIDA</h1>";
    echo "<a href=\"formlogin.php\">RIPROVA</a>";

    include("errorscript.php");
    fclose($handle);
}

?>
