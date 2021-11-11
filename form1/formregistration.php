<!DOCTYPE html>
<html lang="it">
<head>
    <title>Registration Form</title>
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
            <h1>Registration Form</h1>
            <h4>Join the largest digital library in the world!</h4>
        </div>

        <form action="registration.php" method="POST">
            <fieldset class="IN">
                <legend style="color: white;">Firstname & Lastname</legend>
                
                <div class="names">
                    <input type="text" id="firstname" name="firstname" placeholder="Firstname">
                    
                    <input type="text" id="lastname" name="lastname" placeholder="Lastname">
                </div>
                
                <img src="img/user_default.png" alt="" class="logos">
            </fieldset>
            
            <fieldset class="IN">
                <legend style="color: white;">E-mail & Password</legend>
                <div class="pwmail">
                    <input type="email" id="email" name="email" placeholder="E-mail">
                        
                    <input type="password" id="pass" name="pass" placeholder="Password">
                        
                    <input type="password" id="confirm" name="confirm" placeholder="Confirm password">
                </div>  
                
                <img src="img/pngegg.png" alt="" class="logos">
            </fieldset>

            <!-- <fieldset class="IN">
                <legend style="color: white;">Optional Data</legend>
                <input type="text" id="fc" name="fc" placeholder="Fiscal Code">
                <input type="text" id="icn" name="icn" placeholder="Identity Card Number">
            </fieldset> -->

            
            <input class="submit" type="submit" value="Submit">

        </form>
    </div>

    <?php     
        include("common/footer.php")
    ?>
        
</body>
</html>