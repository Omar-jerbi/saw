<?php 
    $connection = mysqli_connect("localhost", "root", "", "dbprova");
    $q = "select * from utenti";
    $res = mysqli_query($connection, $q);

    
  
    
    while($r = mysqli_fetch_assoc($res)){
        echo htmlentities($r["firstname"])."<br>";
        echo htmlspecialchars($r["lastname"])."<br>";
        echo htmlentities($r["email"])."<br>";
        echo htmlspecialchars($r["pass"])."<br>";
    }//entites o specialchars -> simili

    
?>