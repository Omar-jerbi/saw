<?php
    include("db_connect.php");
    $req = "SELECT * from utenti ORDER BY lastname";
    $res = mysqli_query($connection, $req);

    // echo mysqli_num_rows($res);
    echo "firstname  |  lastname  |  email<br><br>";
    while($r = mysqli_fetch_array($res))
    {
        echo $r["firstname"]." | ";
        echo $r["lastname"]." | ";
        echo $r["email"]."<br>";
    }
?>