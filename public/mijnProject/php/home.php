<?php
    error_reporting(E_ALL & ~E_NOTICE);
    require('database.php');
    require('header.php');

    $sql = "SELECT naam FROM accounts";
    $record = mysqli_query($DBverbinding, $sql);
    $naam = mysqli_fetch_array($record);
?>

<!DOCTYPE html>
<html lang="nl">
    <head>
        <title>F1 Circuits</title>
        <link rel="stylesheet" type="text/css" href="../css/design.css">
    </head>
    <body>
        <div class="home">
            <h1>Welkom <?php echo $naam[0] ?> </h1>
            
            <p>Op deze site kunt u informatie vinden over</p>
            <p>onder andere de Formule 1 circuits en </p>
            <p>coureurs van het seizoen van 2020.</p>
            <br>
            <p>Daarnaast kunt u reacties achterlaten om</p>
            <p>zo gesprekken en discussies te voeren met</p>
            <p>de andere gebruikers van de site.</p>
            <br>
            <p>Wij hopen dat u een prettige tijd heeft</p>
            <p>tijdens het gebruiken van onze site.</p>
            <p>En als u vragen of opmerkingen hebt</p>
            <p>kunt u altijd contact met ons opnemen.</p>
            
        </div>
    </body>
</html>

<?php
    require('footer.php');
?>