<?php
    require('database.php');
?>

<!DOCTYPE html>
<html lang="nl">
    <head>
        <title>Nieuw account</title>
        <link rel="stylesheet" type="text/css" href="../css/design.css">
    </head>

    <body>
        <div class="header">
            <div style="width: 286.5px; height: 100px; display: table-cell;">
                <img src="../images/logo.png" alt="Logo" style="height:70px; margin: 15px;">
            </div>
        </div>
        
        <div class="terug">
            <a href="../">TERUG</a>
        </div>
        
        <div class="login">
            <form method="POST">
                <label for="naam">Naam:</label>
                <br>
                <input type="text" placeholder="Naam..." id="naam" name="naam"> 
                <br>
                <label for="mail">E-mail:</label>
                <br>
                <input type="email" placeholder="E-mail..." id="mail" name="mail"> 
                <br>
                <label for="pass">Wachtwoord:</label>
                <br>
                <input type="password" placeholder="Wachtwoord..." id="pass" name="pass"> 
                <br>
                <label for="pass2">Herhaal wachtwoord:</label>
                <br>
                <input type="password" placeholder="Herhaal wachtwoord..." id="pass" name="pass2"> 
                <br>
                <button type="submit" name="aanmaken">MAAK ACCOUNT AAN</button>
            </form>
        
        <?php
            if (isset($_POST['aanmaken'])) {
                $naam = $_POST["naam"];
                $email = $_POST["mail"];
                $wachtwoord1 = $_POST["pass"];
                $wachtwoord2 = $_POST["pass2"];
                
                if($wachtwoord1 == $wachtwoord2) {
                    mysqli_query($DBverbinding, "INSERT INTO `accounts` (`id`, `naam`, `email`, `wachtwoord`) VALUES (NULL, '$naam', '$email', '$wachtwoord1');");
        ?>
                    <p>Niew account succesvol aangemaakt.</p>
                    <br>
                    <p>U wordt tereugverwezen naar de inlogpagina.</p>

                    <?php
                    header("Refresh:2.5; url=../index.php");
                }
                
                else {
                    ?>
                    <p>Sorry deze wachtwoorden komen niet overeen.</p>
                    <?php
                }             
            }

            else {
            }
            ?>
        </div>
    </body>
</html>



