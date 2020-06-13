<?php
    $check = 'header.php geladen.<br>';
    session_start();
    if (isset($_SESSION["user"])) {
        $check = $check.'gebruiker ingelogd.<br>';
    }
    
    else {
        $check = $check.'niemand ingelogd.<br>';
        $css = 'public.css';
        header("Location: ../index.php");
    }
?>

<!doctype html>
<html lang="nl">
    <head>
        <link rel="stylesheet" type="text/css" href="css/design.css?>">
    </head>

    <body>
        <header>    
            <div class=header>
                <div style="width: 286.5px; height: 100px; display: table-cell;">
                    <img src="../images/logo.png" alt="Logo" style="height:70px; margin: 15px;">
                </div>
                <div class="headerKeuze" style="width: 90%; height: 100px; display: table-cell;">                
                    <a href="https://8001-b639f778-3a3b-412f-90a0-2f90d268f70a.ws-eu01.gitpod.io/mijnProject/php/circuits.php" class="headerKeuze2">C I R C U I T S</a>
                    <a href="https://8001-b639f778-3a3b-412f-90a0-2f90d268f70a.ws-eu01.gitpod.io/mijnProject/php/coureurs.php" class="headerKeuze2">C O U R E U R S</a>
                    <a href="https://8001-b639f778-3a3b-412f-90a0-2f90d268f70a.ws-eu01.gitpod.io/mijnProject/php/teams.php" class="headerKeuze2">T E A M S</a>
                </div>
                <div class="headerButton" style="width: 100%; height: 100px; display: table-cell;">
                    <a href="../php/logout.php" class="headerButton">Log uit:</a>
                </div>
            </div>
        </header> 
    </body>
</html>