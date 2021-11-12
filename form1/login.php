<!DOCTYPE html>
<html lang="it">
<head>
    <title>Login</title>
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
    $mail = trim(strtolower($_POST["email"]));
    $password = trim($_POST["pass"]);

    include("common/db/db_connect.php");

    $req = "SELECT * from utenti where email = '$mail'";
    $res = mysqli_query($connection, $req);
    
    if(!$res){
        echo "errore connessione";
        exit;
    }

    if(mysqli_num_rows($res)!= 1){
        echo"
        <h1>
            DATI SBAGLIATI
        </h1>
        ";
        echo "<a href=\"formlogin.php\">RIPROVA</a>";
        exit;
    }
    
    

   $fetchedHashPw = mysqli_fetch_array($res)['pass']; //problem

echo $fetchedHashPw."<br>";
echo sha1($password);
// $fetchedHashPw = password_hash($password, PASSWORD_DEFAULT);


    if(sha1($password) == $fetchedHashPw){
        echo "QUI";
        exit;

        session_start();
        $_SESSION["login"] = true;
        $_SESSION["email"] = $mail;
        $_SESSION["firstname"] =  mysqli_fetch_assoc($res)["firstname"]; 
        $_SESSION["lastname"] =  mysqli_fetch_assoc($res)["lastname"];

        echo"
            <h1>BENVENUTO</h1>
        ";
        echo "<a href=\"_home.php\">HOME</a>";
        exit;
    }




        echo "<h1>UTENTE NON REGISTRATO O PASSWORD NON VALIDA</h1>";
        echo "<a href=\"formlogin.php\">RIPROVA</a>";

    
    ?>

</body>
</html>

