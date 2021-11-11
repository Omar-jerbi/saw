<!DOCTYPE html>
<html lang="it">
<head>
    <title>Home</title>
    <link rel="stylesheet" href="common/stile.css">
    
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
                
        <h1 style="text-align: center;">BENVENUTO!</h1>

    </div>

    <?php     
        include("common/footer.php")
    ?>

</body>
</html>