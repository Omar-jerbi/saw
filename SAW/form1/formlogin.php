<!DOCTYPE html>
<html lang="it">
<head>
    <title>Login Form</title>
    <link rel="stylesheet" href="stile.css">
    <link href="http://fonts.cdnfonts.com/css/minecraft-4" rel="stylesheet">
                
</head>
<body>
    <img src="img/Book_PNG2116.png" alt="" class="book1">

    <div class="title">
        <h1>Login Form</h1>
        <h4>Log into the largest digital library in the world!</h4>
    </div>

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




</body>
</html>