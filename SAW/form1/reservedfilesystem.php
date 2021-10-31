<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reserved</title>
</head>
<body>
    <h1>This is the reserved filesystem</h1>
    <br>
    <?php
        session_start();
        if(!isset($_SESSION["login"])){
            $_SESSION["tried"] = true;
            $_SESSION["camefrom"] = "reservedfilesystem.php";
            header("Location: formlogin.php");
        }else{
            ?>
    
    <h1>reserved files:</h1>
    
    <?php
            echo "
                <a href=\"fileres1.php\">file 1</a>
                <br>
                <a href=\"fileres2.php\">file 2</a>            
            ";
        }
    ?>
</body>
</html>
