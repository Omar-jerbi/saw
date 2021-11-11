<!DOCTYPE html>
<html lang="it">
<head>
    <link rel="stylesheet" href="common/stile.css">
    <title>Profile</title>
</head>
<body>
    <?php
        session_start();
        if(!isset($_SESSION["login"]))
            include("common/menu.php");
        else
            include("common/menuAfterLogin.php");
     ?>     
    

    <div class="main_content">
        <?php 
            if(!isset($_SESSION["login"])){
                echo "        
                <h1>ACCESS DENIED</h1>
                <h1>You need to login first</h1>
                ";
                exit;
            }
        ?>

        <h1>CIAO!</h1>
        <?php
            echo "nome: ".$_SESSION["firstname"]."<br>";
            echo "cognome: ".$_SESSION["lastname"]."<br>";
            echo "indirizzo e-mail: ".$_SESSION["email"]."<br>";
        ?>
    </div>

    <?php     
        include("common/footer.php")
    ?>    
</body>
</html>