<!DOCTYPE html>
<html lang="it">
<head>
    <title>Set cookie</title>
</head>

<body>

    <?php

   $c1 = $_POST["c1"];
   $c2 = $_POST["c2"];
   $f = $_POST["f"];
    
    
    $name = "cookiemonster";
    $value = $c1.$c2.$f;  

    setcookie($name, $value);

    // LA FUNZIONE header() RIMANDA ALL'HOME PAGE
    header("Location: index.php");
    ?>


</body>
</html>
