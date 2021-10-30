<?php
    $mail = "email ".$_POST["email"]."\n";
    $password = $_POST["pass"];

    
    $file = "users.txt";
    $handle = fopen($file, 'r');
    

    if ($handle) {
        while (($line = fgets($handle)) !== false) {

            if($line == $mail){
                $line = fgets($handle);
                
                //$line = substr($line, 0, -1); //toglie ultimo carattere, per qualche motivo qualcosa aggiunge " " alla fine

                if(password_verify($password, $line)){
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
