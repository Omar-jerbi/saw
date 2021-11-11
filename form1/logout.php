<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="common/stile.css">
    <title>Document</title>
</head>
<body>
    <?php
        include("common/menu.php");
    ?>

    <div class="main_content">
        <?php
            session_start();
            if(!isset($_SESSION["login"])){
                echo "<h1>NON SEI LOGGATO</h1>";
                exit;
            }

            $_SESSION = array();
            session_destroy();
            echo "<h1>LOGOUT IN CORSO, attendi di essere rediretto alla home del sito...</h1>";
            setcookie(session_name(),'',time() - 42000);
            header("Refresh:3; url=_home.php");
        ?>
    </div>

    <?php     
        include("common/footer.php")
    ?> 
</body>
</html>