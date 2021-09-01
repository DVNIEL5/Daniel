<!--
                        .
                       / V\
                     / `  /
                    <<   |
                    /    |
                  /      |
                /        |
              /    \  \ /
             (      ) | |
     ________|   _/_  | |
   <__________\______)\__)


    Created on : 9 août 2021, 21:26:13
    Author     : AS2KXR
-->
<?php
session_start();
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>DANIEL</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="DANIELLOGINCSS.css" rel="stylesheet" type="text/css"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Monoton&family=Press+Start+2P&display=swap" rel="stylesheet">
        <link rel="icon" type="image/png" href="images/dragon.png" />
    </head>
    
    <body>
        <header>
            <div class="DivCoté" id="DivCotéGauche"><a style="list-style: none; text-decoration: none;" href="DANIEL-LIEN.php"><h1 id="titredaniel">DANIEL</h1></a></div>
            <div class="DivMiddle"></div>
            <div class="DivCoté" id="DivCotéDroit">
                <a id="AdeImg"><img id="image" src="images/loginpref.png" alt=""/></a>
            </div>
        </header>

            
            <div id="page">
                <div id="zone_central">
                    <form class="FormMiddle"></form>
                    <form id="FormCentrale" method="POST" action="login.php">
                        <label for="Email"><p>E-mail</p><input type="email" name="email" id="Email" required="" placeholder="E-mail@gmail.com"></label><br>
                        <label for="motdepasse"><p>Mot de passe</p><input type="password" name="pass" id="motdepasse" required=""></label><br>
                        <label><input type="submit" name="submit" value="Envoyer" id="BoutonEnvoyer" /></label><br>
                    </form>
                    <form class="FormMiddle"></form>
                </div>
            </div>
            
            <!--<div class="espaceLienMid"></div>
            
            <div id="DivFormLog">
                <form action="DANIEL.php" method="get">
                    <h1 id="h1Log">LOGIN</h1><br>
                    <label for="email">E-mail<input type="email" id="Email" required="" placeholder="monemial@gmail.com"></label>
                    <label for="motdepasse">Mot de passe<input type="password" id="motdepasse" required=""></label>
                    <label><input type="submit" value="Envoyer" /></label>
                    
                    <!--<p class="pLog">Email</p>
                    <input type="email" class="inputLog">
                    <p class="pLog">Password</p>
                    <input type="password" class="inputLog">-->
                <!--</form>
            </div>
            
            <div class="espaceLienMid"></div> -->  
        
        <footer style="display: flex; text-align: center;">
            <div style="width: 25%;"><p>Copyright2021@DVNIEL5</p></div>
            <div style="width: 50%;"><p>For any question please contact me at : <a>mail@deleted.co</a></p></div>
            <div style="width: 25%;"><p>Proudly created by DVNIEL5</p></div>
        </footer>
        
    </body>  
        <?php
        // put your code here
        ?>
    
</html>