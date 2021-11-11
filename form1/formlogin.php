<!DOCTYPE html>
<html lang="it">
<head>
    <title>Login Form</title>
    <link rel="stylesheet" href="common/stile.css">
    <link href="http://fonts.cdnfonts.com/css/minecraft-4" rel="stylesheet">
                
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
        <div class="title">
            <h1>Login Form</h1>
            <h4>Log into the largest digital library in the world!</h4>
        </div>


        <?php
            if(isset($_SESSION["login"])){
                echo"
                <h1 style = \"text-align: center;\">Sei gia loggato, la tua {$_SESSION["mail"]}</h1>
                ";
                exit;
            }
        ?>

        <form action="login.php" method="POST">
            <fieldset class="IN">
                <legend style="color: white;">Login</legend>
                <div class="pwmail">
                    <input type="email" id="email" name="email" placeholder="E-mail">
                        
                    <input type="password" id="pass" name="pass" placeholder="Password">
                </div>  
                
                <img src="img/pngegg.png" alt="" class="logos">
            </fieldset>

            
            <input class="submit" type="submit" value="Accedi">

        </form>
    </div>

    <?php     
        include("common/footer.php")
    ?>
    
</body>
</html>